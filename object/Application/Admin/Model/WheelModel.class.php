<?php
    namespace Admin\Model;

    use Think\Model;

    class WheelModel extends Model
    {
        //添加商品
        public function picture_add()
        {
            //实例化Model
            $wheel = M('wheel');

            if(IS_POST) {
                // echo 1;

                //获取图片路径
                $list[] = '';
                foreach ($_POST['imgs'] as $k => $v) {
                    // dump($v);
                    $list = $v;
                }
                $_POST['pic'] = $list;

                if (empty($_POST['title'])) {
                    return 0;
                    exit;
                }
                // dump($_POST);
                //插入数据库
                $wheels = $wheel->add($_POST);

                return $wheels;

            }
        }


        //查询商品信息
        public function picture_list()
        {
            // echo 1;die;
            $id=I('get.id');
            // var_dump($id)

            //获取关键字
            $wheelsname = I('get.keyword');

            if($id)
            {
                $where['pid']=array('eq',$id);
            } else {
                $where="";
            }

            // $where = "";//条件字符串
            if($wheelname)
            {
                //模糊查询
                $where['title'] = array('like','%'.$goodsname.'%');
            }

            return $wheeles=$this->where($where)->select();

            // dump($goodses);
            // var_dump($nu);die;
            // var_dump($color);die;
        }


        // 删除商品
        public function myDelete()
        {
            //获得商品ID
            $id = I('get.id');
            // dump($id);die;

            if (!empty($id)) {

                //实例化对象
                $goodsInfo = $this->find($id);

                $pics = '.Public'.$goodsInfo['pic'];
                // dump($pics);
                // die;
                @unlink($pics);

                return $this->where("id='$id'")->delete();

            }
        }


        //编辑商品状态
        public function ajaxStatusEdit()
        {

        }

    }
