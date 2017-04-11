<?php
	namespace Admin\Controller;

	use Think\Controller;

	class PictureController extends Controller
	{ 
		public function picture_list()	
	    { 
	    	$this->display('picture/picture-list');
	    }

	    public function picture_show()
	    { 
	    	$this->display('picture/picture-show');
	    }

	    public function picture_add()
	    { 
	    	$this->display('picture/picture-add');
	    }
	}