<?php
namespace Admin\Controller;
use Think\Controller;

//不验证的控制器
class PublicController extends Controller {
   
    //ajxa检查验证码
    public function check_code(){
    	$code = $_GET['code'];	//验证码
    	$verify = new \Think\Verify();
    	if($verify->check($code)){
    		$this->ajaxReturn(1);	//成功
    	}else{
    		$this->ajaxReturn(0);	//失败
    	}
    }
    
    //登录验证
    public function login(){
    // dump($_POST);exit;
    if(!empty($_POST)){
                $map['name'] = I('name');   //用户名
                $map['pass'] = hash('ripemd160',I('pass')); //密码
                $m = M('think_user');
                // dump($map);die;
                $result = $m->field('id,pass,name,status')->where($map)->select();

                if($result){

                        if($result[0]['status'] == 0){
                                $this->error('登录失败，账号被禁用',U('Public/login'));
                        }
                        session('id',$result[0]['id']); //管理员ID
                        session('name',$result[0]['name']); //管理员密码

                        $this->success('验证成功，正在跳转到首页',U('Index/index'));    

                        }else{

                               $this->error('账户或密码错误',U('Public/login'));
                        }

                        }else{

                        if(session('id')){
                                $this->error('已登录，正在跳转到主页',U('Index/index'));
                        }               
                        $this->display();
                    }
    }
    
    //验证码
    public function verify(){   	
    	ob_clean();		//清除缓存
    	$Verify = new \Think\Verify();
    	$Verify->fontSize = 18;	//验证码字体大小
    	$Verify->length = 4;	//验证码位数
    	$Verify->entry();
    }

}




