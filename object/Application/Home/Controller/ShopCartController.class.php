<?php

	namespace Home\Controller;

	use Think\Controller;

	class ShopCartController extends Controller
	{ 

		public function show()
		{ 
			$this->display('shopCart/shopCart');
		}
	}