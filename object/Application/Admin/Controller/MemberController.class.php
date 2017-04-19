<?php
	namespace Admin\Controller;

	use Think\Controller;

	class MemberController extends Controller
	{ 
		public function member_list()
		{ 
			$list=D('Member')->Memberlist();
			// dump(D('Member')->Memberlist());
			//通过assign（）方法，将变量传递到模板中。
			$this->assign("list",$list); 
			$this->display('member/member-list');
		}

		public function member_del()
		{ 
			D('Member')->Memberdel();
			$this->display('member/member-del');
		}

		public function member_address()
		{ 

			$list=D('Address')->Addresslist();
			// dump(D('Address')->Addresslist());
			$this->assign('list',$list);
			$this->display('member/member-address');
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