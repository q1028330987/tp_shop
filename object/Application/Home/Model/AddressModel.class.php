<?php

	namespace Home\Model;

	use Think\Model;

	class AddressModel extends Model
	{ 	
		protected $uid;
		protected $_auto; 

		public function getUserAddr($uid)
		{ 	
			if (!intval($uid)) { 

				exit('系统错误，请联系管理员');
			}

			$db = M('address');

			$data['uid'] = $uid;

			$addrInfo = $db->field('id,uid,address,name,phone')->where($data)->select();

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

		protected $_map = array(         
			'receiverName' =>'name',         
			'mobilePhone'  =>'phone',  
		);

		public function addNewAddr()
		{ 
			$this->uid = $_SESSION['user']['id'];

			$this->_auto = array (          

		 	array('uid', $this->uid)
		 );
		}
	} 