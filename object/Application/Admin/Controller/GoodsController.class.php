<?php
    namespace Admin\Controller;

    use Think\Controller;

    class GoodsController extends Controller
    {
        //dropzone图片上传
        public function dropzoneUpload()
        {



               // 实例化上传类
              $upload = new \Think\Upload();

               // 设置附件上传大小
              $upload->maxSize   =     3145728;//3M

            // 设置附件上传类型
              $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');
              // $upload->exts      =     array('wmv','mp4');

              $upload->rootPath   = './Public/';

              // 设置附件上传目录
               $upload->savePath  =      '/Upload/';


              //返回上传信息
              $info   =   $upload->uploadOne($_FILES['imgs']);

              if( !$info ) {
                // 上传错误提示错误信息

                  $data['status'] = 404;

                  //错误信息
                  $data['msg']    = $upload->getError();

                  echo  json_encode($data);

              }else{

                  // 上传成功 (图片路径、图片名字)

                  $data['status']  = 200;
                  $data['msg']     = 'UPLOAD SUCCESS';

                  //图片原始名字
                  $data['details']['originName'] = $info['name'];
                  $data['details']['savename'] = $info['savename'];
                  $data['details']['savepath'] = $info['savepath'];

                  echo json_encode($data);
              }
        }


        //dropzone图片删除
        public function dropzoneDelete()
        {
            // dump($this);
            // if(IS_AJAX) {
            //     $this->delete();
            //     $this->ajaxReturn(1);
            //     // unlink ( string $filename  );
            // } else {

            //     $this->error('删除失败');
            //     $this->ajaxReturn(0);
            // }

            $this->ajaxReturn(1);
        }


        //打开Goods/add页面
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
            $intro = D('Goods')->intro();

            if($intro) {
                //获取id
                $cid = $_GET['id'];

                //获取所有分类
                $this->assign('cid', $cid);
                $this->assign('intro', $intro);
                $this->display();

            } else {

                //当没参数时跳转
                $this->display('product_add');
            }
        }


        //商品详情添加
        public function product_add()
        {
            // echo 1;
            // dump(I('get.'));
            // dump(I(('post.')));
            $product_add = D('Goods')->product_add();

            if($product_add) {
                $this->success('添加成功',U('Admin/Goods/intro'),3);
            } else {
                $this->error('添加失败',U('Admin/Goods/intro'),3);
            }
        }


        //商品详情图片
        public function product_show()
        {
            $product_show = D('Goods')->product_show();

            if($product_show) {

                //获取所有分类
                $this->assign('product_show', $product_show);
                $this->display();

            } else {

                //当没参数时跳转
                $this->display('product_add');
            }
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
