<?php
	namespace Admin\Controller;

	use Think\Controller;

	class PictureController extends Controller
	{
		public function picture_list()
	    {
	    	$wheelshow = D('wheel')->picture_list();

	    	$this->assign('wheelshow', $wheelshow);
	    	$this->display('picture/picture_list');
	    }

	    public function picture_show()
	    {
	    	$this->display('picture/picture_show');
	    }

	    public function picture_add()
	    {
	    	$this->display('picture/picture_add');
	    }

	    public function ajaxStatusEdit()
	    {
	    	echo 1;	    }
	}
