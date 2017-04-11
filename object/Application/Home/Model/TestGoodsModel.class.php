<?php

	namespace Home\Model;

	use Think\Model;

	class TestGoodsModel  extends Model
	{ 
		protected $tableName = 'goods';

		public function getgoods()
		{ 
			$m = M('goods');

			$res = $m->select();

			return $res;
		}
	}