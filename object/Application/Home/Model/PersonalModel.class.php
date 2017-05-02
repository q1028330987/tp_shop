<?php 

	namespace Home\Model;

	use Think\Model;

	class PersonalModel extends Model
	{

		protected $tableName = "orders";
		// public function personalmsgedit()
		// {
		// 	$id = session('id');
		// 	$data =  I('post.')

		// 	$m = M('user');

		// 	$m->field('name,sex,birthday')->where('id=$id')->add($data);

		// }

		public function Order()
		{
			$OrderTable = new Model();

			$id = $_SESSION['user']['id'];

			$list = $OrderTable->query('select  g.name,g.price,o.total,o.id,o.status,o.addtime,d.num,a.recname,a.province,a.city,a.area,a.recphone,a.address from shop_orders_detail d,shop_orders o,shop_goods g,shop_address a where o.uid='.$id.' and aid=a.id and d.gid=g.id');

			// dump($list);

	       	foreach ($list as $k=>$v) { 

	        		switch ($v['status']) {

	        			case '1':
	        				$list[$k]['status'] = '未付款';
	        			break;

	        			case '2':
	        				$list[$k]['status'] = '已付款';
	        			break;

	        			case '3':
	        				$list[$k]['status'] = '发货';
	        			break;

	        			case '4':
	        				$list[$k]['status'] = '已发货';
	        			break;

	        			case '5':
	        				$list[$k]['status'] = '完成交易';
	        			break;

	        			default:
	        				$list[$k]['status'] = '异常';
	        			break;
	        		}
	        	}

			return $list;
		}
	}