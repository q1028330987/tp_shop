<?php
    namespace Admin\Model;

    use Think\Model;

    class GoodsModel extends Model
    {
        //查询商品信息
        public function index()
        {
            $id=I('get.id');
            // var_dump($id)

            //获取关键字
            $goodsname = I('get.keyword');

            if($id)
            {
                $where['pid']=array('eq',$id);
            } else {
                $where="";
            }

            // $where = "";//条件字符串
            if($goodsname)
            {
                //模糊查询
                $where['title'] = array('like','%'.$goodsname.'%');
            }

            return $goodses=$this->where($where)->select();

            // dump($goodses);
            // var_dump($nu);die;
            // var_dump($color);die;

        }


        //将商品写入数据库
        public function insert()
        {
            //实例化模型
            $Goods=M('goods');
            $Stock=M('stock');

            $_POST['des'] = $_POST['editorValue'];
            // dump($_POST);

            if(IS_AJAX) {
                //开启事务处理
                M()->startTrans();

                $name=$_POST['name'];

                $result=$this->where("name='$name'")->select();
                // dump($this->where("name='$name'")->select());
                // echo '<hr />';

                if($result) {
                    $this->ajaxReturn(0);
                } else {
                    $this->ajaxReturn(1);
                }
             }
             // dump($_POST['pic']);
             //设置添加时间
             $_POST['addtime']=time();

            if($_FILES['pic']['name']) {
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize=3145728 ;// 设置附件上传大小
                $upload->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath = "./Public";//需要手动设置上传的根目录

                $upload->savePath ='/Upload/';
                 // 设置附件上传目录    // 上传文件
                $info   =$upload->upload();

                //拼接图片的路径
                $_POST['pic'] = $info['pic']['savepath'].$info['pic']['savename'];
            }

            //统计商品库存总量
            $census = 0;
            foreach ($_POST['stock'] as $key) {
                    $census += $key;
            }
            $_POST['stocks'] = $census;
            // dump($_POST);

            //插入商品表
            $id = $Goods->add($_POST);
            // dump($a);
            // dump($id);
            $list = [];

            foreach ($_POST['colors'] as $k=>$v) {

                $list[$k]['colors'] = $v;
                $list[$k]['capacity'] = $_POST['capacity'][$k];
                $list[$k]['stock'] = $_POST['stock'][$k];

            // dump($list);
            //批量添加数据
            $dataList[] = array('colors'=>$v, 'capacity'=>$v, 'stock'=>$v, 'gid'=>$id);
            }
            //插入库存表
            $Stock->addAll($dataList);
            // dump($Stock);

            if ($census == $_POST['stocks']) {

                M()->commit();
                return 1;
            } else {

                M()->rollback();
                return 0;
            }
        }

        //获取当前表中所有的分类信息并返回
        public function getAlltype()
        {
            //创建模型
            $type = M('type');
            // dump($type);
            //获取关键字
            $typename=I('get.keyword');

            // dump($typename);

            $where="";

            if($typename) {
                // //执行转意操作
                $where = "name like '%$typename%'";
            }

            //读取数据库中的所有分类 并且按照父子关系进行排序
            $types = $type->field('title,id,name,path,pid,concat(path,"-",id) as paths')->where($where)->order('paths')->select();


            foreach($types as $k=>$v) {
                //获取层级
                $num = count(explode('-', $v['path']))-1;
                // var_dump($num);

                //调整name的标识
                $types[$k]['name'] = str_repeat('|-------', $num).$v['name'];
            }

            return $types;
        }
    }
