<?php

	namespace Home\Controller;

	use Think\Controller;

	class ShowRegisterController extends Controller
	{ 
		public function register()
		{  	
			if (IS_POST) {

				// dump(I());
				
				$reg = D('Register');

				$data['phone'] = I('post.phone');
				$data['pass'] = I('post.pass');

				// dump($reg->create($data));

				if (!$reg->create($data)) { 

					$this->ajaxReturn($reg->getError());

					// exit;

				} else { 

					$reg->add();
					echo '1';

				}
				

			} else if (IS_GET){

				$this->display('register/register');
			
			}
		
		}
	}