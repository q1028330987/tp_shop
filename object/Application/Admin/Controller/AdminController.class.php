<?php
	namespace Admin\Controller;

	use Think\Controller;

	class AdminController extends Controller
	{ 
		public function admin_role()
	    { 
	    	$this->display('admin/admin-role');
	    }

	    public function admin_permission()
	    { 
	    	$this->display('admin/admin-permission');
	    }

	    public function admin_list()
	    { 
	    	$this->display('admin/admin-list');
	    }
	}