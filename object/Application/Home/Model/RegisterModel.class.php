<?php

	namespace Home\Model;

	use Think\Model;

	class RegisterModel extends Model 
	{ 

		protected $tableName = 'user';

		protected $_validate = array(

			 // array('phone', "/^1[34578]\d{9}$/",'手机号不合法',1), //默认情况下用正则进行验证
			 array('phone', "/^1[34578]\d{9}$/", '手机号不合法',1), //默认情况下用正则进行验证

			 array('phone','','该手机号已被注册！',0,'unique'), //验证phone字段是否唯一

			 array('pass', ' /^[0-9a-zA-Z!@#$^]{6,18}$/', '密码不合法', 1), //用户设置密码时验证

			 array('status', array(1,2), '值的范围不正确!') //状态验证
		);

		 protected $_auto = array (

		 	 array('status', '1'),  // 新增的时候把status字段设置为1

		 	 array('pass', 'pwd_hash', 1, 'callback'), // 对password字段在新增和编辑的时候使hash函数处理

		 	 array('reg_time', 'time', 1, 'function'), // 对reg_time字段在新增的时候写入当前时间戳

		 );

		protected function time() 
		{ 
			return date('Y-m-d', time() );
		}

		protected function pwd_hash($pass)
		{ 
			return password_hash($pass, PASSWORD_DEFAULT);
		}

	}