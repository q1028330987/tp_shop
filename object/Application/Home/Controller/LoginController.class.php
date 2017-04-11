<?php

	namespace Home\Controller;

	use Think\Controller;

	class LoginController extends Controller
	{ 
		public function showLogin()
		{ 
			if (IS_POST) { 

				$log = M('user');

				$data['phone'] = I('post.account');
				// $data['pass'] = I('post.pwd');

				$hash = $log->field('pass')->where($data)->select();

				$bool = password_verify( I('post.pwd'), $hash[0]['pass']);

				dump($bool);

				if ($bool) { 

					// $this->display('shouye ');
				}

				


			} else { 

				$this->display('login/login');
			}
			
		}
	}