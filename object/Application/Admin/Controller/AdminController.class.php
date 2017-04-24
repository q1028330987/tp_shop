<?php
	namespace Admin\Controller;

	use Think\Controller;

	class AdminController extends Controller
	{ 
	    public function admin_role()
	    { 
	    	$res = D('Admin')->Authgroup();
	    	$this->assign('res',$res);
	    	$this->display('Admin/admin-role');
	    }

	    //权限列表
	    public function admin_permission()
	    { 
	    	$list = D('Admin')->Authrulelist();
	    	$this->assign('list',$list);
	    	$this->display('Admin/admin-permission');
	    }

	    //权限删除
	    public function admin_ruledel()
	    {
	    	D('Admin')->Authruledel();
	    	if($res)
		{
			$this->success('删除成功', U('admin/admin_list'), 3);
		}else{
			$this->error('删除失败');
		}
	    	$this->display('Admin/admin-permission');

	    }

	    //管理员列表
	    public function admin_list()
	    { 
	    	$res = D('Admin')->Authrole();
	    	$this->assign('res',$res);
	    	$this->display('Admin/admin-list');
	    }

	    //管理员添加页面
	    public function admin_addpage()
	    {
	    	$list = D('Admin')->Authrole();
	    	$this->assign('list',$list);
	    	$this->display('Admin/admin-add');
	    }

	    //管理员编辑页面
	    public function admin_editpage()
	    {
	    	$list = D('Admin')->Authrole();
	    	$this->assign('list',$list);
	    	$this->display('Admin/admin-edit');
	    }



	    //管理员添加
	    public function admin_add()
	    {
	    	$add = D('Admin')->Adminadd();
	    	if($add){

			$this->success('添加成功', U('admin/admin_list'), 2);
	    	}else{
	    		$this->error('添加失败');
	    	}
	    	
	    	$this->display('Admin/admin-add');
	    }

	    // 管理员删除
	    public function admin_del()
	    {
	    	$res = D('Admin')->Authroledel();
		// if($res)
		// {
		// 	$this->success('删除成功', U('admin/admin_list'), 2);
		// }else{
		// 	$this->error('删除失败');
		// }
	    	$this->display('Admin/admin-list');
	    }

	 //    public function admin_Login()
	 //   {

	 //   	dump($_POST);
		//  // 判断提交方式
		// if (IS_POST) {
		// 	// 实例化Login对象
		// 	$login = D('think_user');
		// 	// 自动验证 创建数据集
		// 	if (!$data = $login->create()) {
		// 		// 防止输出中文乱码
		// 		header("Content-type: text/html; charset=utf-8");
		// 		exit($login->getError());
		// 		}

		// // 组合查询条件
		// $where = array();
		// $where['name'] = $data['name'];
		// $result = $login->where($where)->field('id,name,pass')->find();
		// // 验证用户名 对比 密码
		// if ($result && $result['pass'] == $data['pass']) {
		// 	// 存储session
		// 	session('id', $result['id']);		// 当前用户id
		// 	session('name', $result['name']);	// 当前用户名

		// $name = session('name');
		// // dump(session());
		// // exit;
		// 	$this->success('登录成功,正跳转至系统首页...', U('Index/index'));
		// } else {
		// 	$this->error('登录失败,用户名或密码不正确!');
		// }

		// } else {

		// 	$this->display();
		// }
		// }

		/**
		* 用户注销
		*/
		public function admin_logout()
		{
			// 清除所有session
			session(null);
			redirect(U('Public/login'), 2, '正在退出登录...');
		}
		/**
		* 验证码
		*/
		// public function verify()
		// {
		// 	D('Admin')->verify();
		// }
		/*
		验证码验证
		 */
		// function check_verify($code, $id = ''){
		// 	$verify = new \Think\Verify();
		// 	return $verify->check($code, $id);
		// }


	//验证码
	   public function verify(){   	
		ob_clean();		//清除缓存
		$Verify = new \Think\Verify();
		$Verify->fontSize = 18;	//验证码字体大小
		$Verify->length = 4;	//验证码位数
		$Verify->entry();
		}

	   public function check_code(){
	    	$code = $_GET['code'];	//验证码
	    	$verify = new \Think\Verify();
	    	if($verify->check($code)){
	    		$this->ajaxReturn(1);	//成功
	    	}else{
	    		$this->ajaxReturn(0);	//失败
	    	}
	    }

	    public function admin_edit()
	    {
		D('Admin')->admin_edit();

		$this->display('Admin/admin-edit');
	    }

	        //检查账号是否已注册
	    public function check_name()
	    {
	    	$m = M('think_user');
	    	$where['name'] = I('name');	//账号
	    	$data = $m->field('id')->where($where)->find();
	    	if(empty($data)){
	    		$this->ajaxReturn(0);   //不存在
	    	}else{
	    		$this->ajaxReturn(1);	//存在
	    	}
	    }

	    public function auth_group()
	    {
	    	$res = D('Admin')->auth_group();
	    	$this->assign('res',$res);
	    	$this->display('Admin/admin-add');
	    }

	    public function admin_permission_add()
	    {
	    	$this->display('Admin/admin-permission-add');
	    }
	}