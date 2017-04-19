<?php

	namespace Home\Model;

	use Think\Model;

	class ShopCartModel extends Model
	{ 
		protected $tableName = 'goods';

		public function addShopCart($id)
		{ 	
			$goods = D('TestGoods');

			if (empty($_SESSION['goods'][$id])) { 

				$data = $goods->getGoods($id);

				$_SESSION['goods'][$id] = $data;

				$_SESSION['goods'][$id]['buynum'] ++;

				$_SESSION['goods'][$id]['sum'] = $_SESSION['goods'][$id]['price']*$_SESSION['goods'][$id]['buynum'];

			} else { 

				$_SESSION['goods'][$id]['buynum'] ++;
				$_SESSION['goods'][$id]['sum'] = $_SESSION['goods'][$id]['price']*$_SESSION['goods'][$id]['buynum'];
			}

			// session('goods', null);

			return $_SESSION;
		}
	}