<?php
    namespace Admin\Controller;

    use Think\Controller;

    class GoodsController extends Controller
    {
        //打开Type/add页面
        public function add()
        {
            //获取Model类
            $GoodsModel = D('Goods');
            $id  = I('post');
            // dump($_POST['id']);

            //获取所有分类
            $types = $GoodsModel->getAlltype();
            dump($type);
            $this->assign('types',$types);

            $this->display();
        }

        //将商品写进数据库
        public function insert()
        {
            //获取Model类
            $GoodsModel = D('Goods')->insert();

            //获取所有post
            $a  = I('post.');
            // dump($a);

            if($GoodsModel) {
                $this->success('添加成功',U('Admin/Goods/index'),3);
            } else {
                $this->error('添加失败',U('Admin/Goods/index'),3);
            }

        }

        //分类的列表页
        public function index()
        {
            //获取Model类
            $goods = D('Goods')->index();

            //分配变量
            $this->assign('goods',$goods);
            $this->display();
        }


        //商品详情
        public function intro()
        {
            //获取Model类
            $goods = D('Goods')->intro();

            // dump($id);
            // $goods=M('goods');
            // $type=M('type');
            // $goodtype=M('goodtype');
            // $mealtable=M('mealtable');


            // $goodsInfo=$goods->find($id);
            // $pid=$goodsInfo['pid'];
            // $typePid=$goodsInfo['id'];
            // // var_dump($goodsInfo);
            // $types=$type->find($pid);
            // $goodtypes=$goodtype->where("pid='$typeid'")->select();
            // $mealpid='';

            // foreach($goodtypes as $key=>$value)
            // {

            //     $mealpid[$key]=$value['id'];

            //     $mealInfo[]=$mealtable->where("typeid='$mealpid[$key]'")->select();

            // }

            // // var_dump($goodsInfo);
            // // var_dump($mealInfo);die;
            // $this->assign('mealInfo',$mealInfo);
            // $this->assign('goodtypes',$goodtypes);

            // $this->assign('types',$types);
            // $this->assign('goodsInfo',$goodsInfo);
            // $this->display();
        }



        // public function eideGoods()
        // {
        //     $id=I('get.id');
        //     $goods=M('goods');
        //     $goodsInfo=$goods->find($id);
        //     $pid=$goodsInfo['pid'];
        //     $type=M('type');
        //     $typeInfo=$type->find($pid);
        //     $this->assign('goodsInfo',$goodsInfo);
        //     $this->assign('typeInfo',$typeInfo);
        //     $types=$this->getAlltype();
        //     $this->assign('types',$types);
        //     $this->assign('id',$id);
        //     $this->display();
        // }

        // public function UpdateGoods()
        // {
        //     $goods=M('goods');
        //     $id=I('post.id');
        //     if(IS_AJAX)
        //     {

        //         $result=$goods->save($_POST);

        //         if($result)
        //         {
        //             $this->ajaxReturn(0);
        //         } else {
        //             $this->ajaxReturn(1);
        //         }
        //     }

        //     // //获取当前商品的信息
        //     $goodsInfo = $goods->find($id);
        //     //获取img的路径
        //     $img = $goodsInfo['img'];
        //     //执行删除
        //     @unlink($img);

        //     if($_FILES['img']['name'])
        //     {
        //         $upload = new \Think\Upload();// 实例化上传类
        //         $upload->maxSize=3145728 ;// 设置附件上传大小
        //         $upload->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        //         $upload->rootPath = "./Public";//需要手动设置上传的根目录
        //         $upload->savePath ='/Uploads/'; // 设置附件上传目录    // 上传文件
        //         $info   =$upload->upload();

        //         //拼接图片的路径
        //         $_POST['img'] = $upload->rootPath.$info['img']['savepath'].$info['img']['savename'];
        //     }

        //     $goodses=$goods->where("id='$id'")->save($_POST);


        //     if($goodses)
        //     {

        //         $this->success('更新成功',U('Goods/index'),3);

        //     } else {

        //         $this->error('更新失败',U('Goods/index'),3);

        //     }
        // }

        //删除
        // public function delete()
        // {
        //     //获取Model类
        //     $goods = D('Goods')->myDelete();

        //     //获取id
        //     $id=I('get.id');
        //     dump($id);

        //     if(empty($id))
        //     {
        //         $this->error('非法操作',U('Goods/index'),3);
        //     }
        // }

}
