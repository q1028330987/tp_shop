<?php

	namespace Home\Controller;

	use Think\Controller;

	class TestOrderController extends Controller
	{ 
		public function testshow()
		{ 

			$test = D('TestGoods');
			$res = $test->getgoods();
			// dump($res);
			
			$this->assign('goods', $res);
			$this->display('testGoods/test');
			// $this->('testGoods/test');
			// $_SESSION['good'][1]= ['id'=> '1', 'gname'=>'测试商品1', 'gprice'=>'1998', 'buynum'=>'1'];

			// $_SESSION['good'][2]= ['id'=> '2', 'gname'=>'测试商品2', 'gprice'=>'2998', 'buynum'=>'1'];
		}
	}