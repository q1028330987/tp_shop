<?php

	namespace Home\Model;

	use Think\Model;

	class TestGoodsModel  extends Model
	{ 
		protected $tableName = 'goods';

		public function getAllGoods()
		{ 
			$m = M('goods');

			$res = $m->field('id,name,price')->select();

			return $res;
		}

		public function getGoods($id)
		{ 
			$m = M('goods');

			$map['id'] = $id;

			$res = $m->field('id,name,price,buynum')->where($map)->select();

			return $res[0];
		}

	}