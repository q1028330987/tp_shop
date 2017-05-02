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
			$res = D('Member')->Memberdel();
			if($res){
		             $this->ajaxReturn($res,"删除成功！",1);        
		 	       }
			$this->display('member/member-list');
		}

		public function member_address()
		{ 

			$list=D('Address')->Addresslist();
			$this->assign('list',$list);
			$this->display('member/member-address');
		}

		public function member_passchange()
		{
			$m = M('user');
			$id = I('get.id');
			// dump($id);
			$data['pass'] = hash('ripemd160',I('post.newpassword'));
			$data['pass1'] = hash('ripemd160',I('post.newpassword2'));
			// dump($pass);
			// dump($np2);exit;

			if ( $pass == $np2){	
				$m->field('pass')->where("id=$id")->save($data);

			}else{
				echo 1;
			}
			$this->display('member/change-password');
		}

		public function address_del()
		{
			$m = M("address");
			$id = I('get.id');
			// dump($id);
			$m->where("id=$id")->delete();
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

		public function member_start()
		{
			$id = I('post.id');
			// dump($id);
			$m = M('think_user');
			// $m->
		}
	}