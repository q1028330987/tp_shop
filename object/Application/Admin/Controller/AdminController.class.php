<?php
	namespace Admin\Controller;

	use Think\Controller;

	class AdminController extends Controller
	{ 
	    public function admin_role()
	    { 
	    	$res = D('Auth')->Authgroup();
	    	$this->assign('res',$res);
	    	$this->display('admin/admin-role');
	    }

	    //权限列表
	    public function admin_permission()
	    { 
	    	$list = D('Auth')->Authrulelist();
	    	$this->assign('list',$list);
	    	$this->display('admin/admin-permission');
	    }

	    //权限删除
	    public function admin_ruledel()
	    {
	    	D('Auth')->Authruledel();
	    	if($res)
		{
			$this->success('删除成功', U('admin/admin_list'), 3);
		}else{
			$this->error('删除失败');
		}
	    	$this->display('admin/admin-permission');

	    }

	    //管理员列表
	    public function admin_list()
	    { 
	    	$res = D('Auth')->Authrole();
	    	$this->assign('res',$res);
	    	$this->display('admin/admin-list');
	    }

	    //管理员添加页面
	    public function admin_addpage()
	    {
	    	$list = D('Auth')->Authrole();
	    	$this->assign('list',$list);
	    	$this->display('admin/admin-add');
	    }

	    //管理员添加
	    public function admin_add()
	    {
	    	D('Auth')->Adminadd();
	    	$this->display('admin/admin-add');
	    }

	    // 管理员删除
	    public function admin_del()
	    {
	    	$res = D('Auth')->Authroledel();
		if($res)
		{
			$this->success('删除成功', U('admin/admin_list'), 3);
		}else{
			$this->error('删除失败');
		}
	    	$this->display('admin/admin-list');
	    }
	}