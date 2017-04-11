<?php


	function getTypeName($cid)
	{
		if($cid == 0) return '顶级分类';

		$type = M('type');

		//查询数据库
		$infoPid = $type->find($cid);
		//返回当前分类的名称
		return $infoPid['name'];
	}


	function getGoodName($id){

		$good = M('goods');
		//查询数据库
		$info = $good->find($id);
		//返回当前商品的名称
		return $info['title'];
	}


	function getGoodImg($id){

		$good = M('goods');
		//查询数据库
		$info = $good->find($id);
		//返回当前商品的名称
		return $info['img'];
	}
?>
