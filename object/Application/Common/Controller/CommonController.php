<?php

namespace Admin\Controller;

use Think\Controller;

class CommonController extends Controller
{
    //权限类
    protected $auth = null;

    public function _initialize()
    {
        //用户登录后才可以看到后台
        if(empty($_SESSION['name'])){
            $this->redirect("Public/login");
            exit();
        }

        $this->auth = new \Think\Auth();

        //登录成功后，获取到用户ID  
        $id = session('id');

        //调用权限验证方法。因为不同的用户有不同的权限
        $bool = $this->checkAuth( $id );

        /*if( !$bool ){
            $this->error("抱歉！你没有此操作权限！");
            exit();
        }*/

    }

    protected function checkAuth( $id )
    {

        //特殊用户
        if($_SESSION['name']['name']=="admin"){
            return true;
        }

        //判断普通管理员ID=1的有没有Admin/Article/Add模块的权限
        // dump( $this->auth->check('Admin/Article/Add', 1) );
        return $this->auth->check(MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME, $id) ;

    }       
}