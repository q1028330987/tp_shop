<?php
	namespace Admin\Controller;

	use Think\Controller;

	class AdminController extends Controller
	{ 
		public function admin_role()
	    { 
	    	// D('Auth')->Authrole();
	    	$this->display('admin/admin-role');
	    }

	    public function admin_permission()
	    { 
	    	$list = D('Auth')->Authrulelist();
	    	$this->assign('list',$list);
	    	$this->display('admin/admin-permission');
	    }

	    public function admin_ruledel()
	    {
	    	D('Auth')->Authruledel();
	    	$this->display('admin/admin-permission');

	    }

	    public function admin_list()
	    { 
	    	$res = D('Auth')->Authrole();
	    	$this->assign('res',$res);
	    	$this->display('admin/admin-list');
	    }

	    public function admin_addpage()
	    {
	    	$list = D('Auth')->Authrole();
	    	$this->assign('list',$list);
	    	$this->display('admin/admin-add');
	    }

	    // public function admin_add()
	    // {
	    // 	D('Auth')->Adminadd();
	    // 	$this->display('admin/admin-add');
	    // }
	}