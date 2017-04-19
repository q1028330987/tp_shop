<?php 
	namespace Admin\Model;

	use Think\Model;

	class LoginModel extends Model;
	{
		public function Login()
		{
			protected $validata = array(

				// 验证用户名是否为空
				array('name','required','用户名不能为空'),
				// 检测用户是否存在
				array('name', '', '该用户已存在', 0, 'unique', 1),
				//检测验证码是否正确
				array('verify','verify_check','验证码错误',0,'function'),
				//检测密码是否符合要求，必须含有字母数字以及@*#中的一种
				array('pass','/^([a-zA-Z0-9@*#]{6,22})$//','密码格式不正确,请重新输入',0),
				//检测确认密码是否正确
				array('repass','pass','两次密码不一致，请重新输入',0),
				

			)


		}
	}