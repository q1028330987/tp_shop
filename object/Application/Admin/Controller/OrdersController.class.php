<?php
	namespace Admin\Controller;

	use Think\Controller;

	class OrdersController extends Controller
	{ 
		public function orders_list()
	    { 	
	    	$db = D('Orders');
	    	$orderList = $db->getOrdersAll();
	    	// dump($orderList);
	    	// exit;
	    	$this->assign('orderList', $orderList);
	    	$this->display('orders-list/orders-list');
	    }
	}