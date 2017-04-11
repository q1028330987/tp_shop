<?php 

	namespace Admin\Model;

	use Think\Model;

	class AuthModel extends Model
	{

		public function Authgroup()
		{
			$m = new Model();

			$res = $m->query("select * from shop_auth_group");
					shop_think_user   shop_auth_group_access
			// dump($res);exit;

			return $res;
		}

		//权限列表
		protected $tableName = 'auth_rule';

		public function Authrulelist()
		{

			$m = M('auth_rule');

			$list = $m->select();

			return $list;

		}


		//权限删除
		public function Authruledel()
		{
			$id = I('get.id');

			$del = M('auth_rule');

			$res = $del->where("id=$id")->delete();

		}

		//管理员列表
		public  function Authrole()
		{
			$m = new Model();

			$res = $m->query("select t.name,t.id,t.status,g.role from shop_think_user t,shop_auth_group_access ga,shop_auth_group g where t.id=ga.uid and ga.group_id=g.id"); 
			// dump($res);exit;

			return $res;
				// select * from ((think_user inner join auth_group_access on think_user.id=auth_group_access.uid) inner join auth_group_access on auth_group_access.group_id=auth_group.id)inner join 表4 on Member.字段号=表4.字段号");
		}

		//管理员删除方法
		public function Authroledel()
		{
			$id = I('get.id');

			$del = M('think_user');

			$res = $del->where("id=$id")->delete();

			// return $res;

		}

		//管理员添加
		public function Adminadd()
		{
			$name = I('post.name');
			$pass  = I('post.pass');
			// $role = I('post.role');
			dump($name);exit;
			$m = M('think_user');

			$data['name'] = $name;
			$data['pass'] = $pass;

			$m->add($data);
		}

	}