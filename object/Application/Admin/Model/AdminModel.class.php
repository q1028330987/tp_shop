<?php 

	namespace Admin\Model;

	use Think\Model;

	class AdminModel extends Model
	{

		public function Authgroup()
		{
			$m = new Model();
			// dump($m->select());

			$res = $m->query("select g.role,t.name from shop_auth_group g,shop_auth_group_access ga,shop_think_user t where g.id=ga.group_id and t.id=ga.uid");
			// $role = $m->query("select r.title from shop_auth_group g,shop_auth_rule r where g.rules=r.id");
					// shop_think_user   shop_auth_group_access
			// dump($role);exit;
			$rule = M('auth_rule');
			$group = M('auth_group');

			// $k = $m->join('auth_group ON auth_group.rules = auth_rule.id')->join()->select();
			// dump($k);exit;

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
			$id = I('get.id');
			$res = $m->query("select t.name,t.id,t.status,g.role from shop_think_user t,shop_auth_group_access ga,shop_auth_group g where t.id=ga.uid and ga.group_id=g.id"); 
			// dump($res);exit;
			// $m = M('think_user');
			

			return $res;
		}

		//管理员删除方法
		public function Authroledel()
		{
			$id = I('get.id');

			$user = M('think_user');

			$acc = M('auth_group_access');

			$res = $user->where("id=$id")->delete();

			$res1 = $acc->where("uid=$id")->delete();

			if($res && $res1)
			{
				$user->commit();
			} else {
				$user->rollback();
			}


			// return $res;

		}

		protected $validata = array(
			// 验证用户名是否为空
			array('name','required',3,'用户名不能为空'),
			// 检测用户是否存在
			array('name', '', '该用户已存在', 0, 'unique', 1),
			//检测验证码是否正确
			array('verify','verify_check','验证码错误',0,'function'),
			//检测密码是否符合要求，必须含有字母数字以及@*#中的一种
			array('pass','/^([a-zA-Z0-9@*#]{6,22})$//','密码格式不正确,请重新输入',0),
			//检测确认密码是否正确
			array('repass','pass','两次密码不一致，请重新输入',0),
			);

		//管理员添加
		public function Adminadd()
		{
			$t=M("think_user");  //实例化
			$ga=M('auth_group_access');
			$t->startTrans();
			$data = I('post.');
			$data['pass'] = hash('ripemd160',I('post.pass'));
			dump($data);

			//数据添加到管理员表
			$res = $t->data($data)->add();

			$data['uid'] = $res;
			//添加到用户组明细表
			$res1 = $ga->data($data)->add();

			if($res && $res1)
			{
				$t->commit();
			}else{
				$t->rollback();
			}
			// exit;
		}

		public function auth_group()
		{

		    	$m = M('auth_group');
		    	$res = $m->field('id,role')->select();
		    	dump($res);
		    	return $res;
			
		}
		
		public function admin_edit()
		{
		    	$id = I('get.id');
		    	dump($id);
		    	$data['oldpass'] = I('post.oldpass');
		    	$data['pass'] = I('post.newpass');
		    	$data['group_id'] = I('post.group_id');
		    	dump($data);exit;
		    	$m = M('think_user');

		    	// $pass = $m->field('pass')->where('id=$id')->select();

		    	// if ( $pass == $data['oldpass']){
		    	// 	$m->field('pass')->where('id=$id')->save($data['newpass']);
	    	}

	}