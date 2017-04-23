<?php

	namespace Home\Model;

	use Think\Model;

	class AddressModel extends Model
	{ 	
		protected $uid;
		protected $_auto;
		protected $_map = array(         
			'receiverName' =>'recname',         
			'mobilePhone'  =>'recphone',  
		);

		public function getUserAddr($uid)
		{ 	
			if (!intval($uid)) { 

				exit('系统错误，请联系管理员');
			}

			$db = M('address');

			$data['uid'] = $uid;

			$addrInfo = $db->field('id,uid,recname,recphone,province,city,area,address')->where($data)->select();

			return $addrInfo;
		}

		public function addrData($level, $upid='')
		{ 
			$db = M('district');

			$data['level'] = $level;
			$data['upid'] = $upid;

			$addrInfo = $db->field('id,name,level,upid')->where($data)->select();

			return $addrInfo;
		}

		public function addNewAddr()
		{ 
			$this->uid = $_SESSION['user']['id'];

			$this->_auto = array (          

		 		array('uid', $this->uid)
		 	);
		}

		public function findAddr($id)
		{ 
			$db = M('address');

			$data['id'] = $id;

			$addr = $db->where($data)->field('id,uid,recname,recphone,province,city,area,address')->find();

			return $addr;

		}

		public function delAddr($id)
		{ 
			$db = M('address');

			$data['id'] = $id;

			$res = $db->where($data)->delete();

			return $res;
		}

	} 