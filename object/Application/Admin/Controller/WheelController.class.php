<?php
    namespace Admin\Controller;

    use Think\Controller;

    class WheelController extends Controller
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


        //将商品写进数据库
        public function picture_add()
        {
            //获取Model类
            $WheelModel = D('wheel')->picture_add();

            if($WheelModel) {
                $this->success('添加成功',U('Admin/Picture/picture_list'),3);
            } else {
                $this->error('添加失败',U('Admin/Picture/picture_add'),3);
            }
        }


        //删除
        public function delete()
        {
            //获取Model类
            $wheel = D('Wheel')->myDelete();

            if($wheel) {
                $this->success('删除成功',U('Admin/Picture/picture_list'),3);
            } else {
                $this->error('非法操作',U('Admin/Picture/picture_list'),3);
            }
        }

}
