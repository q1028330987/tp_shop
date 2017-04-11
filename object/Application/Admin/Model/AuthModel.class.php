<?php 

	namespace Admin\Model;

	use Think\Model;

	class AuthModel extends Model
	{

		protected $tableName = 'auth_rule';

		public function Authrulelist()
		{

			$m = M('auth_rule');

			$list = $m->select();

			return $list;

		}

		public function Authruledel()
		{
			$id = I('get.id');

			$del = M('auth_rule');

			$res = $del->where("id=$id")->delete();

		}

		public  function Authrole()
		{
			$m = new Model();

			$res = $m->query("select t.name,t.status,g.role from shop_think_user t,shop_auth_group_access ga,shop_auth_group g where t.id=ga.uid and ga.group_id=g.id"); 
			// dump($res);exit;

			return $res;
				// select * from ((think_user inner join auth_group_access on think_user.id=auth_group_access.uid) inner join auth_group_access on auth_group_access.group_id=auth_group.id)inner join 表4 on Member.字段号=表4.字段号");
		}

		// public function Adminadd()
		// {
		// 	$name = I('post.name');
		// 	$pass  = I('post.pass');

		// 	$m = M('think_user');

		// 	$data['name'] = $name;
		// 	$data['pass'] = $pass;

		// 	$m->add($data);
		// }

	}