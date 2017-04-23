<?php

	namespace Home\Controller;

	use Think\Controller;

	class OrderController extends Controller
	{  

		public function createOrder()
		{ 	
			if (empty($_SESSION['user'])) { 

				$this->display('login/login');

				exit;
			}

			$idArr = I('post.checkItem');

			$sum = 0;

			for ($i = 0; $i < count($idArr); $i++) { 

				$id = $idArr[$i];

				$_SESSION['goodsList'][$i] = $_SESSION['goods'][$id];

				$sum += $_SESSION['goods'][$id]['sum'];

			}

			$addrModel = D('address');

			$uid = $_SESSION['user']['id'];

			$addrList = $addrModel->getUserAddr($uid);

			$_SESSION['sum'] = $sum;

			$this->assign('addrList', $addrList);

			$this->assign('goodsList', $_SESSION['goodsList']);

			$this->display('order/order');
		}

		public function getAaddrData()
		{ 
			$level = I('post.level');
			$upid = I('post.upid');

			$addrModel = D('address');

			$addrList = $addrModel->addrData($level, $upid);

			$msg = $this->ajaxReturn($addrList);

			echo $msg;
		}


		public function createAddr()
		{ 	
			$addrModel = D('address');
			$addrModel->addNewAddr();

			if ($addrModel->create()) { 

				$id = $addrModel->add();
				$addr = $addrModel->findAddr($id);

				echo $this->ajaxReturn($addr);
			} else { 

				echo '2';
			}
			
			// dump($addrModel);
		}

		public function delAddr()
		{ 
			// dump(I('post.'));
			if ($_SESSION['aid'] = I('post.id')) { 

				unset($_SESSION['aid']);
			}
			
			$addrModel = D('address');
			$res = $addrModel->delAddr(I('post.id'));

			echo $res;
		}

		public function chooseAddr()
		{ 	
			$aid = I('post.aid');
			if (empty($aid)) { 

				echo $_SESSION['aid'];
			} else { 

				$_SESSION['aid'] = I('post.aid');
			}
		}

		public function submitOrder ()
		{ 
			$orderModel = D('Orders');

			$_SESSION['oid'] = $orderModel->addOrder();

			$a = $orderModel->addOrderDetail($_SESSION['oid']);

			if (intval($a)) { 

				echo '1';
			}

		}

		public function Cashier()
		{ 	

			$this->display('Cashier/Cashier');
		}

		public function pay()
		{ 
			$id = $_SESSION['oid'];

			$ordersModel = D('Orders');
			$ordersMsg = $ordersModel->getOrdersMsg($id);

			$a = $ordersModel->pay($id, $ordersMsg['status']);

			if ($a) { 
				unset($_SESSION['oid']);
				echo '1';
			} else { 
				echo '2';
			}

		}


	}