<?php

	namespace Home\Model;

	use Home\Model;

	class UserModel extends Model
	{ 
		public function getUserInfo()
		{ 
			$user = M('user');

			$user->where()->select();
		}
	}