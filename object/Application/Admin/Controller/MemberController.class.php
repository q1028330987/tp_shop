<?php
	namespace Admin\Controller;

	use Think\Controller;

	class MemberController extends Controller
	{ 
		public function member_list()
	    { 
	    	$this->display('member/member-list');
	    }

	    public function member_del()
	    { 
	    	$this->display('member/member-del');
	    }

	    public function member_record_browse()
	    { 
	    	$this->display('member/member-record-browse');
	    }

	    public function member_record_download()
	    { 
	    	$this->display('member/member-record-download');
	    }

	    public function member_record_share()
	    { 
	    	$this->display('member/member-record-share');
	    }
	}