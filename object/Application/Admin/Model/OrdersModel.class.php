<?php 
    namespace Admin\Model;

    use Think\Model;

    class OrdersModel extends Model
    {
        public function getOrdersAll()
        { 
        	$ordersTable = M('orders o');

        	$a = $ordersTable->field('o.addtime,o.id,o.total,o.status,a.recname,a.recphone,a.address,a.province,a.area,a.city,u.phone')->join('left join shop_address a ON o.aid=a.id left join shop_user u ON u.id=o.uid')->select();
        	

        	foreach ($a as $k=>$v) { 

        		switch ($v['status']) {

        			case '1':
        				$a[$k]['status'] = '未付款';
        			break;

        			case '2':
        				$a[$k]['status'] = '已付款';
        			break;

        			case '3':
        				$a[$k]['status'] = '发货';
        			break;

        			case '4':
        				$a[$k]['status'] = '已发货';
        			break;

        			case '5':
        				$a[$k]['status'] = '完成交易';
        			break;

        			default:
        				$a[$k]['status'] = '异常';
        			break;
        		}
        	}

        	return $a;

        }
    }