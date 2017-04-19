<?php

	namespace Home\Controller;

	use Think\Controller;

	class ShopCartController extends Controller
	{ 

		public function show()
		{ 	

			$this->display('shopCart/shopCart');
		}

		public function addShopCart()
		{ 	

			$id = I('post.id');

			$shopCart = D('ShopCart');

			$cartList = $shopCart->addShopCart($id);

			if ($cartList) { 

				$this->list = $cartList;
				echo '1';

			} else { 

				echo '0';
			}
		}

		public function buyRightNow()
		{ 

			if (IS_POST) {
				dump(I('post.'));
				exit;
			}

			$id = I('get.id');

			$shopCart = D('ShopCart');

			$cartList = $shopCart->addShopCart($id);

			$this->assign('cartList', $cartList['goods']);

			$this->display('shopCart/shopCart');
		}

		public function delGoods()
		{ 
			$id = I('post.id');

			unset($_SESSION['goods'][$id]);

			if (empty($_SESSION['goods'][$id])) { 

				echo '1';
				// dump($_SESSION);
			}
		}

		public function clearAll()
		{ 
			unset($_SESSION['goods']);

			if (empty($_SESSION['goods'])) { 

				echo '1';
			}
		}

		public function controllerNum()
		{ 
			$id = I('post.id');

			$bool = I('post.bool');

			if ($bool == 'true') { 

				$_SESSION['goods'][$id]['buynum']++;

			} else { 

				$_SESSION['goods'][$id]['buynum']--;
			}
			

			if ($_SESSION['goods'][$id]['buynum'] == 0) { 

				unset($_SESSION['goods'][$id]);
			}

			echo $_SESSION['goods'][$id]['buynum'];

		}

		public function writeNum()
		{ 
			$id = I('post.id');

			$num = I('post.num');

			if (intval($num)) { 

				$_SESSION['goods'][$id]['buynum'] = $num;

				echo $_SESSION['goods'][$id]['buynum'];

			} else { 

				$_SESSION['goods'][$id]['buynum'] = 1;

				echo '1';
			}	

			//还需要判断库存

			
		}

		public function sum()
		{ 
			$id = I('post.id');

			$price = $_SESSION['goods'][$id]['price'];

			$buynum = $_SESSION['goods'][$id]['buynum'];

			$_SESSION['goods'][$id]['sum'] = $price*$buynum;

			echo $_SESSION['goods'][$id]['sum'];
		}

		public function count()
		{ 
			$idArr = I('post.idarr');

			$sum = 0;

			for ($i = 0; $i < count($idArr); $i++) { 

				$id = $idArr[$i];

				$sum += $_SESSION['goods'][$id]['sum'];

			}

			echo $sum;
		}

		public function submit()
		{ 

			// $idArr = I('post.idArr');

			// $orderList = [];

			// for ($i = 0; $i < count($idArr); $i++) { 

			// 	$id = $idArr[$i];

			// 	unset($_SESSION['goods'][$id]);

			// }


		}


	}