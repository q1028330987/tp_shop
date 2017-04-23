<?php

	namespace Home\Model;

	use Think\Model;

	class OrdersModel extends Model
	{ 
		 // protected $_auto = array(
		 // 	array('status', '1'),
		 // 	array('addtime', '1'),
		 // );
		 // protected $uid;
		 // protected $aid;
		 // protected $total;
		 // protected $aid;

		 // public function addOrder()
		 // { 
		 	// $time = date('Y-m-d H:i:s', time());
		 	// $this->uid = $_SESSION['user']['id'];
		 	// $this->aid = $_SESSION['aid'];
		 	// $this->total = $_SESSION['sum'];

		 	// $this->_auto = array(
		 	// 	array('uid', $this->uid),
		 	// 	array('aid', $this->aid),
		 	// 	array('total', $this->total),
		 	// 	array('status', '1'),
		 		// array('addtime', $time),
		 	// );

		 	// return $this->_auto;
		 // }

		 public function addOrder()
		 { 
		 	$data['uid'] = $_SESSION['user']['id'];
		 	$data['aid'] = $_SESSION['aid'];
		 	$data['total'] = $_SESSION['sum'];
		 	$data['status'] = '1';
		 	$data['addtime'] = time();

		 	$oid = M('orders')->add($data);

		 	return $oid;
		 }

		 public function getOrdersMsg($id)
		 { 
		 	$data['id'] = $id;

		 	$orders = M('orders');

		 	$orderMsg = $orders->field('id,uid,aid,total,status,addtime')->where($data)->select();

		 	return $orderMsg[0];
		 }

		 public function addOrderDetail($id)
		 { 
		 	$oidArr = [];
		 	foreach ($_SESSION['goodsList'] as $k=>$v) { 

		 		$data['oid'] = $id;
		 		$data['gid'] = $v['id'];
		 		$data['num'] = $v['buynum'];
		 		$iodArr[$k] = M('orders_detail')->add($data);
		 		// unset($_SESSION['goodsList'][$k]);
		 		// unset($_SESSION['goods'][$v['id']]);
		 	}

		 	return $iodArr;
		 }

		 public function pay($id, $status)
		 { 
		 	$orderTable = M('orders');

		 	if ($status == '1') { 

				$data['status'] = '2';

		 	} else { 

		 		return false;
		 		die('该商品已付款');
		 	}

		 	$a = $orderTable->where('id='.$id)->save($data);

		 	return $a;
		 	// dump($a);
		 	// exit;
		 	
		 }
	}