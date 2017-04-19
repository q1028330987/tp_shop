<?php 

	namespace Admin\Controller;

	use Think\Controller;

	class LoginController extends Controller
	{
		public function Login()
		{
			if (IS_POST) {
				
				
			}
			$this->display('admin/login');
		}
	}