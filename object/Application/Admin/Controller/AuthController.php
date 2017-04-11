<?php 
	namespace Admin\Controller;

	use Think\Controller;

	class AuthController extends CommonController
	{
		public function showAllAuth()
		{
			$ruleList = M('auth_rule')->field('id,name,title')->select();

			$this->assign('list', $ruleList);
			$this->display();
		}
	}
