<?php

	namespace Home\Controller;

	use Think\Controller;

	class OrderController extends Controller
	{  
		public function createOrder()
		{ 
			$idArr = I('post.checkItem');

			$goodsList = [];

			$sum = 0;

			for ($i = 0; $i < count($idArr); $i++) { 

				$id = $idArr[$i];

				$goodsList[$i] = $_SESSION['goods'][$id];

				$sum += $_SESSION['goods'][$id]['sum'];

			}

			$addrModel = D('address');

			$uid = $_SESSION['user']['id'];

			$addrList = $addrModel->getUserAddr($uid);

			$_SESSION['goods']['sum'] = $sum;

			$this->assign('addrList', $addrList);

			$this->assign('goodsList', $goodsList);

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

				$addrModel->add();
				echo '1';
			} else { 

				echo '2';
			}
			
			// dump($addrModel);
		}

	}