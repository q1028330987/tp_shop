<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/gz25/github/tp_shop/object/Public/lib/html5shiv.js"></script>
<script type="text/javascript" src="/gz25/github/tp_shop/object/Public/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/gz25/github/tp_shop/object/Public/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/gz25/github/tp_shop/object/Public/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/gz25/github/tp_shop/object/Public/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/gz25/github/tp_shop/object/Public/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/gz25/github/tp_shop/object/Public/static/h-ui.admin/css/style.css" />
<script type="text/javascript" src="/gz25/github/tp_shop/object/Public/lib/jquery/1.9.1/jquery.min.js"></script>

<!--[if IE 6]>
<script type="text/javascript" src="/gz25/github/tp_shop/object/Public/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>vivo后台登录</title>
<meta name="keywords" content="H-ui.admin v3.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">

</head>
<body>
<input type="hidden" id="TenantId" name="TenantId" value="" />
<div class="header"></div>
<div class="loginWraper">
  <div id="loginform" class="loginBox">
    <form id="login" class="form form-horizontal" action="<?php echo U('Public/login');?>" method="post" >
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
        <div class="formControls col-xs-8">
          <input id="name" required="true" name="name" type="text" placeholder="账户" class="input-text size-L">
        </div>
      </div>
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
        <div class="formControls col-xs-8">
          <input id="pass" required="true" name="pass" type="password" placeholder="密码" class="input-text size-L">
        </div>
      </div>
      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">

          <input required="true" class="input-text size-L" type="text" placeholder="验证码" maxlength="4" value="" id="code" name="code" style="width:150px;">
          <img class="verify" src="<?php echo U('Public/verify');?>" alt="验证码" onClick="this.src=this.src+'?'+Math.random()" />
          <input type="hidden" id="check_code" value="0">
          <p>看不清，点击图片刷新</p> </div>
      </div>
      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
          <label for="online">
            <!-- <input type="checkbox" name="online" id="online" value="">
            使我保持登录状态</label> -->
        </div>
      </div>
      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
          <input id="aaa" onClick="return checkCode()" name="" type="submit" class="btn btn-success radius size-L" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
          <input name="" type="reset" class="btn btn-default radius size-L" value="&nbsp;重&nbsp;&nbsp;&nbsp;&nbsp;置&nbsp;">
        </div>
      </div>
    </form>
  </div>
</div>
<div class="footer">vivo</div>
<script type="text/javascript" src="/gz25/github/tp_shop/object/Public/static/h-ui/js/H-ui.min.js"></script>
<script>

		function checkCode(){
			var code = $('#code').val();
			if(code.length == 4){
			$.get("<?php echo U('Public/check_code');?>", {code:code},function(data){
				if(data == 1){


					document:login.submit()

					}else{

					}
			});
		}
	}

</script>
<script>
	function check_login(){
		var name = $('#name').val();
		var pass = $('#pass').val();
		var code = $('#code').val();  //验证码
		var check_code = $('#check_code').val();  //验证码验证结果
		if(name == ''){
			alert('请输入用户名', '#name');
			return false;
			}
		if(password == ''){
			layer.tips('请输入密码', '#pass');
			return false;
		}
		if(code == ''){
			layer.tips('请输入验证码', '#code');
			return false;
		}
		if(check_code == 0){    //判断验证码正确，才允许提交
			layer.tips('验证码错误', '#code');
			return false;
		}
	return true;
	}
</script>
</body>
</html>