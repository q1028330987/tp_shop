<?php
    namespace Admin\Model;

    use Think\Model;

    class GoodsModel extends Model
    {
        //添加商品
        public function insert()
        {
            //实例化模型
            $Goods=M('goods');
            $Stock=M('stock');

            $_POST['des'] = $_POST['editorValue'];
            // dump($_POST);

            if(IS_POST) {
                //开启事务处理
                // echo 1;die;
                M()->startTrans();

                $name=$_POST['name'];

                // $result=$this->where("name='$name'")->select();
                // // dump($this->where("name='$name'")->select());
                // // echo '<hr />';

                // if(!$result) {
                //     return 0;
                //     exit;
                // }

                 // dump($_FILES['pic']);die;
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

                    // dump($info);
                    // dump($upload->getError());
                    // die;
                    //拼接图片的路径
                    $_POST['pic'] = $info['pic']['savepath'].$info['pic']['savename'];
                }

                //统计商品库存总量
                $census = 0;
                foreach ($_POST['stock'] as $key) {
                        $census += $key;
                }
                $_POST['stocks'] = $census;
                // dump($_POST);die;

                //插入商品表
                $id = $Goods->add($_POST);
                // dump($a);
                // dump($id);
                $list = [];

                foreach ($_POST['colors'] as $k=>$v) {

                    $list[$k]['colors'] = $v;
                    $list[$k]['capacity'] = $_POST['capacity'][$k];
                    $list[$k]['stock'] = $_POST['stock'][$k];

                //批量添加数据
                $dataList[] = array('colors'=>$v, 'capacity'=>$v, 'stock'=>$v, 'gid'=>$id);
                }

                // dump($list);die;

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
        }


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


        //添加商品参数
        public function product_add()
        {
            //实例化模型
            $Parameter = M('parameter');
            $Goods = M('goods');
            $Pics = M('pics');

            $gid=$_POST['gid'];
            // dump(I('post.'));
            if(IS_POST) {
                //开启事务处理
                M()->startTrans();

                // echo 1;
                $result=$Goods->where("id='$gid'")->select();

                // $result->create();
                // $result->save();
                // dump($Goods->where("id='$gid'")->select());
                if(!$result) {
                    return 0;
                    exit;
                }

                //插入参数表
                $ParAdd = $Parameter->add($_POST);
                // dump($gid);
                // dump($id);
                // echo 1;

                //循环图片
                $list = [];
                foreach ($_POST['imgs'] as $k=>$v) {

                    $list[$k]['imgs'] = $v;
                // dump($list);
                //批量添加数据
                $dataList[] = array('imgs'=>$v, 'gid'=>$gid);
                }
                // dump($dataList);
                //插入图片表
                $PicAdd = $Pics->addAll($dataList);
                // dump($pics);

                if ($ParAdd && $PicAdd ) {

                    M()->commit();
                    return 1;
                } else {

                    M()->rollback();
                    return 0;
                }

             }
        }


        //查询商品参数
        public function intro()
        {
            //实例化模型
            $Parameter = M('parameter');

            $id = $_GET['id'];
            // $gid = $id;
            // dump($gid);

            if(!empty($id)) {
                $Parameters = $Parameter->where("gid='$id'")->select();
                // dump($Parameters);
                // $Pics = $Pic->where("gid='$id'")->select();
                // dump($Pics);
                return $Parameters;

            }
        }


        //商品详情图片
        public function product_show()
        {
            //实例化模型
            $Pic = M('pics');

            $id = $_GET['id'];
            // dump($id);

            if(!empty($id)) {
                $Pic = $Pic->where("gid='$id'")->select();
                // dump($Pics);
                return $Pic;

            }
        }


        //更新商品
        public function updateGoods()
        {
            $Goods = M('goods');
            $Stock = M('stock');
            $_POST['des'] = $_POST['editorValue'];
            // dump(I('post.'));
            // dump($_FILES['pic']);

            $id=I('post.gid');
            if(IS_POST) {

                // dump(I('post.'));
                // die;
                //开启事务处理
                M()->startTrans();

                // dump($_POST['pic']);
                $result=$Goods->where("id='$id'")->select();
                // dump($result);

                if(!$result) {
                    return 0;
                    exit;
                }

                //获取商品信息
                $goodsInfo = $Goods->find($id);

                //没有图片上传默认之前的
                $_POST['pic'] = $goodsInfo['pic'];

                //判断是非有图片上传
                if (!empty($_FILES['pic'])) {
                    //获取pic路径
                    $pics = './Public'.$goodsInfo['pic'];

                    //执行删除
                    @unlink($pics);
                    // dump($pics);

                    if($_FILES['pic']['name']) {

                        $upload = new \Think\Upload();// 实例化上传类
                        $upload->maxSize=3145728 ;// 设置附件上传大小
                        $upload->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                        $upload->rootPath = "./Public";//需要手动设置上传的根目录

                        $upload->savePath ='/Upload/';
                         // 设置附件上传目录    // 上传文件
                        $info   =$upload->upload();

                        // dump($info);
                        // dump($upload->getError());
                        // die;
                        //拼接图片的路径
                        $_POST['pic'] = $info['pic']['savepath'].$info['pic']['savename'];

                        // dump($_POST['pic']);
                    }
                }

                //统计商品库存总量
                $census = 0;
                foreach ($_POST['stock'] as $key) {
                        $census += $key;
                }
                $_POST['stocks'] = $census;
                // dump($id);die;

                //插入商品表
                $Goods->where("id='$id'")->save($_POST);
                // dump($q);
                // die;
                // dump($id);
                $list = [];

                foreach ($_POST['colors'] as $k=>$v) {

                    $list[$k]['colors'] = $v;
                    $list[$k]['capacity'] = $_POST['capacity'][$k];
                    $list[$k]['stock'] = $_POST['stock'][$k];

                //批量添加数据
                $dataList[] = array('colors'=>$v, 'capacity'=>$v, 'stock'=>$v, 'gid'=>$id);
                }

                // dump($list);die;

                //插入库存表
                $Stock->addAll($dataList);

                if ($census == $_POST['stocks']) {

                    M()->commit();
                    return 1;
                } else {

                    M()->rollback();
                    return 0;
                }

            }
        }


        // 删除商品
        public function myDelete()
        {
            //获得商品ID
            $id = I('get.id');
            // dump($id);

            if (!empty($id)) {
                //开启事务处理
                M()->startTrans();

                //实例化对象
                $Goods = M('goods');
                $goodsInfo = $Goods->find($id);
                $Stock = M('stock');
                $Pics = M('pics');
                $Parameter = M('Parameter');

                $pics = $goodsInfo['pic'];
                // dump($pics);
                // die;
                @unlink($pics);
                $Stock->where("gid='$id'")->delete();
                $Pics->where("gid='$id'")->delete();
                $Parameter->where("gid='$id'")->delete();
                $a = $Goods->where("id='$id'")->delete();


                if($a) {

                    M()->commit();
                    return 1;
                } else {

                    M()->rollback();
                    return 0;
                }
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
