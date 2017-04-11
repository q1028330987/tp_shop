<?php 

	namespace Admin\Model;

	use Think\Model;

	class AddressModel extends Model
	{

		protected $tableName = "address";
		public function Addresslist()
		{
			//实例化模型
			$m=M("address");

			//获取表中的所有数据，得到二维数组。
			$list=$m->select();

			return $list;

		}
}