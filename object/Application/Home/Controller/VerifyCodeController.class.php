<?php
namespace Home\Controller;

use Think\Controller;

class VerifyCodeController extends Controller
{
    public function show()
    {

       $config =    array(   

       'fontSize'    =>    18,    // 验证码字体大小  

       'length'      =>    4,     // 验证码位数 

       'useNoise'    =>    false, // 关闭验证码杂点

       'imageW'		 =>	   0,	  // 设置为0为自动计算

       'imageH'		 =>	   0,	  // 设置为0为自动计算

       );
       
       $Verify = new \Think\Verify($config);

       $Verify->entry();
    }
}