<?php

	namespace Home\Controller;

	use Think\Controller;

	class ShowRegisterController extends Controller
	{ 
		public function register()
		{ 
			$this->display('register/register');
		}
	}