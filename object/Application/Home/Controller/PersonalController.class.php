<?php 

	namespace Home\Controller;

	use Think\Controller;

	class PersonalController extends Controller
	{
		public function personalpage()
		{	
			if (empty($_SESSION['user'])) { 

				$this->display('login/login');
			} else { 

				$id = $_SESSION['user']['id'];

				$this->display();

			}


		}

		public function personmsg()
		{


			$this->display();
		}

		public function orderaddress()
		{
			$id = session('id');
			// dump($id);exit;
			$m = M("address");
			//获取表中的所有数据，得到二维数组。
			$list=$m->where("uid=$id")->select();
			$this->assign('list',$list);
			$this->display();

		}

		public function remark()
		{
			$this->display();
		}

		public function unremark()
		{
			$this->display();
		}

		public function orderaddressadd()
		{
			$this->display();
		}

		public function personalmsgedit()
		{
			$data = I('post.');
			$id = session('id');

			$this->display('Personal/personmsg');
		}

		public function Order()
		{
			// $id = $_SESSION['user']['id'];
			// dump($id);
			// $OrderTable = M('order o');
			// $OrderTable->join('left join ')
			$list= D('Personal')->Order();
			$this->assign('list',$list);
			$this->display('Personal/order');
		}
	}