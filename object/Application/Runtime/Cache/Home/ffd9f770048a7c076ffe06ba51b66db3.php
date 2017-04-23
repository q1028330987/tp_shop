<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<link rel="stylesheet" href="/gitHub/tp_shop/object/Public/Home/login_files/login.css" style="text/css">
<script type="text/javascript" src="/gitHub/tp_shop/object/Public/Home/login_files/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/gitHub/tp_shop/object/Public/Home/login_files/jquery-md5-min.js"></script>
<script type="text/javascript" src="/gitHub/tp_shop/object/Public/Home/login_files/login.js"></script><!--[if lte IE 7]>
<div style="color: #474747;padding: 8px 35px 8px 14px;background-color: #FCF8E3;border: 1px solid #FBEED5;line-height: 1.5;text-align: center;">
    <strong>注意！</strong>
    本网站不支持IE8以下的浏览器，为了获得更快、更安全的浏览体验，我们建议您使用
    <a href="http://www.google.com/chrome" target="_blank">chrome</a>！
    或者
    <a href="http://firefox.com.cn/" target="_blank">火狐</a>浏览器
</div>
<![endif]-->

<script type="text/javascript">

function checkForms(){
	var check = true;
	check = checkusername() && check;
	check = checkpassword() && check;
	return check;
}

function isEmail(str){
	if(str.indexOf("@")>0){
		return true;
	}else{
		return false;
	}
}

function checkusername(){
	var eValue= $.trim($("#_account").attr("value"));
    if(eValue.length == 0 || eValue == '邮箱/手机号/用户名'){
        inner("error_account", "帐号不能为空");
        showErrorIcon("_account", "0");
		return false;
	}else{
		return true;
	}
}

function checkpassword()else{
		$("#_pwd").val($.md5(pValue));
		return true;
	}
}

// function sub(type)
// {
	// if(type==1)
	// {
	// 	if(checkForms())
	// 	{
	// 		document.getElementById("login_form").setAttribute("action", "/v3s2/web/login/login");
	// 		document.getElementById("login_form").submit();
	// 	}
	// }
	// if(type==2)
	// {
	// 	document.getElementById("login_form").setAttribute("action", "<?php echo U('ShowRegister/register');?>");
	// 	document.getElementById("login_form").submit();
	// }
	// else if(type==3)
	// {
	// 	document.getElementById("login_form").setAttribute("action", "/v3/web/findpwd/findPwd");
	// 	document.getElementById("login_form").submit();
	// }
// 	return false;
// }
window.onload=function() {
	var stat = "";
	var msg = "";
	if(stat.length!=0)
	{
	//	if(stat=="522" || stat=="400")
	//	{
			inner("error_account", msg);
			showErrorIcon("_account", "0");
	//	}
	//	else if(stat=="523")
	//	{
	//		inner("error_pwd", msg);
	//		showErrorIcon("_pwd", "0");
	//	}
	}
};

</script>
<!--[if IE 6]> 
    <script type="text/javascript" src="/web/js/DD_belatedPNG.js"></script> 
    <script type="text/javascript"> 
    DD_belatedPNG.fix(".logo,.cl li a b,li em"); 
    </script> 
<![endif]-->
<title>vivo帐号登录</title>

<style>@font-face{font-family:uc-nexus-iconfont;src:url(chrome-extension://pogijhnlcfmcppgimcaccdkmbedjkmhi/res/font_9qmmi8b8jsxxbt9.woff) format('woff'),url(chrome-extension://pogijhnlcfmcppgimcaccdkmbedjkmhi/res/font_9qmmi8b8jsxxbt9.ttf) format('truetype')}</style></head>
<body>

	
	<a class="banner_bg" href="">
	<!--  	<p>帐号登录</p>-->
	</a>

	<div class="middle_box">
		<div class="hide_out">
			<div class="left">
				<!-- 登录 -->
				<div class="fieldset-section">
				        
<form id="login_form" name="form" onsubmit="return check(1);" action="<?php echo U('Login/showlogin');?>" method="post">
					<input type="hidden" name="client_id" value="5"> 
					<p class="sub-title">使用邮箱/手机号登录</p>
					<ul class="slogin cl">
							<li class="username li_input">
								<em></em>
								<input class="v_inp" type="text" placeholder="邮箱/手机号" name="account" id="_account" onfocus="inputFocus(&#39;_account&#39;)" onblur="inputBlur(&#39;_account&#39;,&#39;帐号不能为空&#39;)" value="">
								<p class="tip" id="error_account" style="display: none;">帐号不能为空</p>
								<b class="error" style="display: inline-block;"></b>
							</li>
							<li class="psw li_input">
								<em></em>
								<input class="v_inp" type="password" autocomplete="off" placeholder="密码" id="_pwd" name="pwd" onfocus="inputFocus(&#39;_pwd&#39;)" onblur="inputBlur(&#39;_pwd&#39;,&#39;密码不能为空&#39;)">
								<p class="tip" id="error_pwd" style="display: none;">密码不能为空</p>
								<b class="error" style="display: inline-block;"></b>
							</li>
							<li class="login-btn">
								<input class="v_dark_btn sulong_btn" type="submit" value="立即登录">
							</li>
							<!-- <li class="forgot">
								<span class="v_checkbox current">
									<span class="remember" style="background-position: -88px 0px;"></span>两周内自动登录
								</span> 
								<a class="forgot-pwd" onclick="sub(3);">忘记密码？</a>
								<! <input type="hidden" val="no_forgot"  id="forgot_hide"/> -->
								<!-- <input type="hidden" value="0" id="remember" name="remember"> -->
							</li>
							<li class="form-btn">
								<a class="v_light_btn sulong_btn" href="<?php echo U('ShowRegister/register');?>">注册vivo帐号</a>		
							</li>
					</ul>
					</form>



				</div>
			</div>

			</div>

		</div>

	</div>



</body></html>

<script src="/gitHub/tp_shop/object/Public/js/jquery-1.8.3.min.js"></script>

<script>

	function check(){ 

		var falg = true;

		if ($('#_account').val() == '') { 

			$('#error_account').css('display', 'block');
			falg = false;
		}

		if ( $.trim( $('#_pwd').val() ) == '') { 

			$('#error_pwd').css('display', 'block');
			falg = false;
		}

		return falg;
	}
</script>