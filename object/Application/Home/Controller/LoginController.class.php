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

				$userInfo = $log->field('id,phone,pass')->where($data)->select();

				$bool = password_verify( I('post.pwd'), $userInfo[0]['pass']);

				if ($bool) { 

					$_SESSION['user'] = $userInfo[0];
					// $this->display('shouye ');
				}

				
			} else { 

				$this->display('login/login');
			}
			
		}
	}