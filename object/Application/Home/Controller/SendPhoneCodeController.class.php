<?php

	namespace Home\Controller;

	use Think\Controller;

	use Org\Util;

	class SendPhoneCodeController extends Controller
	{ 
		public function send()
		{ 	
			$phone = I('post.phone');

			$serverapi = new \Org\Util\ServerAPI('75c1175d7637f9acf4dd68f744995019', '6a7d55ff0bf3');

			$res = $serverapi->sendSmsCode($phone, '', '3059242', 6 );

			echo $res['code'];
			
			// echo '200';
		}

	}