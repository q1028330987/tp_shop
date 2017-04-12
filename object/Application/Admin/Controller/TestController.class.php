<?php

	namespace Home\Controller;

	use Think\Controller;

	class TestController extends Controller
	{



		//研究dropzone插件上传
		public function showUpload()
		{

			if (IS_POST) {

				dump(I('post.'));
			} else {

				$this->display();
			}

		}




		public function upload()
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
	           $upload->savePath  =      './Upload/';


	          //返回上传信息
	          $info   =   $upload->uploadOne($_FILES['pic']);

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


	}
