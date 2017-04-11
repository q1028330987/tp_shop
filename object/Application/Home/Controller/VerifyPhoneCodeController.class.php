<?php

	namespace Home\Controller;

	use Think\Controller;

	use Org\Util;

	class VerifyPhoneCodeController extends Controller
	{ 
		public function verify()
		{ 	
			// $phone = I('post.phone');
			// $code = I('post.code');

			// $serverapi = new \Org\Util\ServerAPI('75c1175d7637f9acf4dd68f744995019', '6a7d55ff0bf3');

			// $res = $serverapi->verifycode($phone, $code);

			// echo $res['code'];

			echo '200';
		}

	}