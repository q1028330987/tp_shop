<?php

	namespace Home\Model;

	use Think\Model;

	class CheckCodeModel extends Model 
	{ 
		protected function checkCode()
		{ 
			dump(I('post.'));
		}

	}