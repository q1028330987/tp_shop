<?php

	namespace Home\Controller;

	use Think\Controller;

	class TestOrderController extends Controller
	{ 
		public function testshow()
		{ 

			$test = D('TestGoods');
			$res = $test->getAllGoods();
			// dump($res);
			
			$this->assign('goods', $res);
			$this->display('testGoods/test');
		}
	}