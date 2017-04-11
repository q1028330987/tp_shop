<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0039)https://passport.vivo.com.cn/v3/web/reg -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!--[if IE 6]> 
    <script type="text/javascript" src="/web/js/DD_belatedPNG.js"></script> 
    <script type="text/javascript"> 
    DD_belatedPNG.fix(".logo,.cl li a b,li em"); 
    </script> 
<![endif]-->

<meta http-equiv="expires" content="0">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="pragma" content="no-cache">
<title>vivo帐号注册</title>
<link rel="stylesheet" href="/tp_shop/object/Public/Home/register_files/login.css" style="text/css">
<script type="text/javascript" src="/tp_shop/object/Public/Home/register_files/jquery-1.7.2.min.js"></script>
<!-- <script type="text/javascript" src="/tp_shop/object/Public/Home/register_files/login.js"></script> -->

<script type="text/javascript" src="/tp_shop/object/Public/Home/register_files/jquery-md5-min.js"></script>
// <script type="text/javascript">

// function checkEmailOnline()
// {
// 	var email= $.trim($("#_email").attr("value"));
//     if(email.length == 0 ){
//         inner("error_email", "邮箱不能为空");
//         showErrorIcon("_email", "0");
// 		return false;
// 	}
//     else if(!patternEmail.test(email))
//     {
//     	inner("error_email", "请输入有效的邮箱");
//         showErrorIcon("_email", "0");
// 		return false;
//     }
//     $.ajax({
// 		url:"/v3/web/checkRegAccount",
// 		data:"account="+email+"&type=1",
// 		success:function(json){
// 			if(json.stat!="200"){
// 		        inner("error_email", json.msg);
// 		        showErrorIcon("_email", "0");
// 				return false;
// 			}
// 			else
// 			{
// 				showErrorIcon("_email", "1");
// 				return true;
// 			}
// 		},
// 		error:function(){
// 			showErrorIcon("_email", "1");
// 			return true;
// 			//inner("error_email", "系统出现异常，请联系管理员");
// 			//showErrorIcon("_email", "0");
// 		},
// 		type:"post",
// 		async: true,
// 		dataType:"json"
// 	});
// }

// function checkPhoneOnline()
// {
// 	var phonenum= $.trim($("#_phonenum").attr("value"));
//     if(phonenum.length == 0 ){
//         inner("error_phonenum", "手机号不能为空");
//         showErrorIcon("_phonenum", "0");
// 		return false;
// 	}
//     else if(!patternPhone.test(phonenum))
//     {
//     	inner("error_phonenum", "请输入有效的手机号");
//         showErrorIcon("_phonenum", "0");
// 		return false;
//     }
//   /*  $.ajax({
// 		url:"/v3/web/checkRegAccount",
// 		data:"account="+phonenum+"&type=0",
// 		success:function(json){
// 			if(json.stat!="200"){
// 				inner("error_phonenum", json.msg);
// 		        showErrorIcon("_phonenum", "0");
// 				return false;
// 			}
// 			else
// 			{
// 				showErrorIcon("_phonenum", "1");
// 				return true;
// 			}
// 		},
// 		error:function(){
// 			showErrorIcon("_phonenum", "1");
// 			return true;
// 			//inner("error_phonenum", "系统出现异常，请联系管理员");
// 			//showErrorIcon("_phonenum", "0");
// 		},
// 		type:"post",
// 		async: true,
// 		dataType:"json"
// 	});*/
   
// }

// 	window.onload=function  () {
// 		document.getElementById("belaybar").disabled=false;
// 		change();
// 		changeIconForPhoneReg();  
// 	}
	
// 	function checkForms(){
// 		var check = true;
// 		check = checkusername() && check;
// 		check = checkpassword() && check;
// 		return check;
// 	}
	
// 	function checkusername(){
// 		var eValue= $.trim($("#_account").attr("value"));
// 	    if(eValue.length == 0 || eValue == '邮箱/手机号/用户名'){
// 	        inner("error_account", "帐号不能为空");
// 	        showErrorIcon("_account", "0");
// 			return false;
// 		}else{
// 			showErrorIcon("_account", "1");
// 			return true;
// 		}
// 	}

// 	function checkpassword()else{
// 			showErrorIcon("_pwd", "1");
// 			return true;
// 		}
// 	}
	
// 	function getting()
// 	{
// 		var btn = document.getElementById("belaybar");
// 		btn.disabled=true;
// 		btn.value = "正在获取...";
// 		$("#belaybar").css({background:"#f5f5f5",color:"#8C8C8C"});
// 		//alert("getting");
// 	}

// 	function over()
// 	{
// 		var btn = document.getElementById("belaybar");
// 		btn.disabled=false;
// 		btn.value = "获取验证码";
// 		$("#belaybar").css({background:"#008cd6",color:"#fff"});
// 	}

// 	function c(i){
// 		 var btn = document.getElementById("belaybar");
// 		 i--;
// 		 if(i==0){
// 		  btn.value = "获取验证码";
// 		  btn.disabled=false;
// 		  $("#belaybar").css({background:"#008cd6",color:"#fff"});
// 		  changeIconForPhoneReg();
// 		 }
// 		 else{
// 		  btn.disabled=true;
// 		  btn.value = "获取("+i+"秒)";
// 		  $("#belaybar").css({background:"#f5f5f5",color:"#8C8C8C"});
// 		  setTimeout("c("+i+")",1000);
// 		 }
// 		}
	
// 	function getPhoneCode()
// 	{
// 		var phonenum=$("#_phonenum").val();
// 		var phoneiconcode=$("#_phoneiconcode").val();
// 		if(!patternPhone.test(phonenum))
// 		{
// 			inner("error_phonenum", "请输入正确的手机号");
// 			showErrorIcon("_phonenum", "0");
// 			return false;
// 		}
// 		else if(phoneiconcode.length==0)
// 		{
// 			inner("error_phoneiconcode", "请输入图片验证码");
// 		}
// 		else
// 		{
// 			getting();
// 			$.ajax({
// 				url:"/v3/web/getPhoneCode",
// 				data:"account="+phonenum+"&code="+phoneiconcode+"&from=Web_VIVOAccount&locale=zh_CN",
// 				success:function(json){
// 					if(json.stat!="200"){
// 						over();
// 						if(json.stat=="400")
// 						{
// 							inner("error_phoneiconcode", json.msg);
// 							//showErrorIcon("_phoneiconcode", "0");
// 						}
// 						else
// 						{
// 							inner("error_phonenum", json.msg);
// 							showErrorIcon("_phonenum", "0");
// 						}
						
// 						changeIconForPhoneReg(); 
// 					}
// 					else
// 					{
// 						//获取验证码成功
// 						c(60);
// 					}
// 				},
// 				error:function(){
// 					over();
// 					inner("error_phonenum", "请求过于频繁，请稍后再试");
// 					showErrorIcon("_phonenum", "0");
// 				},
// 				type:"post",
// 				async: true,
// 				dataType:"json"
// 			});	
// 		}
// 		return false;
// 	}
	
// 	function checkEmail()
// 	{
// 		var email= $.trim($("#_email").attr("value"));
// 	    if(email.length == 0 ){
// 	        inner("error_email", "邮箱不能为空");
// 	        showErrorIcon("_email", "0");
// 			return false;
// 		}
// 	    else if(!patternEmail.test(email))
// 	    {
// 	    	inner("error_email", "请输入有效的邮箱");
// 	        showErrorIcon("_email", "0");
// 			return false;
// 	    }
// 	    showErrorIcon("_email", "1");
// 	    return true;
// 	}
	
// 	function checkPhone()
// 	{
// 		var phonenum= $.trim($("#_phonenum").attr("value"));
// 	    if(phonenum.length == 0 ){
// 	        inner("error_phonenum", "手机号不能为空");
// 	        showErrorIcon("_phonenum", "0");
// 			return false;
// 		}
// 	    else if(!patternPhone.test(phonenum))
// 	    {
// 	    	inner("error_phonenum", "请输入有效的手机号");
// 	        showErrorIcon("_phonenum", "0");
// 			return false;
// 	    }
// 	    else{
// 	    	showErrorIcon("_phonenum", "1");
// 			return true;
// 		}
	    
// 	}
	
// 	function checkRegPwd(id)
// 	{
// 		var pwd= $.trim($("#"+id).attr("value"));
// 	    if(pwd.length == 0 ){
// 	        inner("error"+id, "密码不能为空");
// 	        showErrorIcon(id, "0");
// 			return false;
// 		}
// 	    else if(!patternPwd.test(pwd))
// 	    {
// 	    	inner("error"+id, "请输入6-16位字符");
// 	        showErrorIcon(id, "0");
// 			return false;
// 	    }
// 	    else{
// 	    	showErrorIcon(id, "1");
// 			return true;
// 		}
// 	}
// 	function checkRegConfPwd(confpwdid, pwdid)
// 	{
// 		var confpwd= $.trim($("#"+confpwdid).attr("value"));
// 		var pwd= $.trim($("#"+pwdid).attr("value"));
// 	    if(confpwd.length == 0 ){
// 	        inner("error"+confpwdid, "密码不能为空");
// 	        showErrorIcon(confpwdid, "0");
// 			return false;
// 		}
// 	    else if(!patternPwd.test(confpwd))
// 	    {
// 	    	inner("error"+confpwdid, "请输入6-16位字符");
// 	        showErrorIcon(confpwdid, "0");
// 			return false;
// 	    }
// 	    else if(confpwd!=pwd)
// 	    {
// 	    	inner("error"+confpwdid, "两次输入的密码不一致");
// 	        showErrorIcon(confpwdid, "0");
// 			return false;
// 	    }
// 	    else{
// 	    	showErrorIcon(confpwdid, "1");
// 			return true;
// 		}
// 	}
	
// 	function checkIconCode(id)
// 	{
// 		var code=$("#"+id).val();
// 		if(code.length == 0)
// 		{
// 			inner("error"+id, "请输入图片验证码");
// 			showErrorIcon(id, "0");
// 			return false;
// 		}
// 		$.ajax({
// 			url:"/v3/web/vIconCode",
// 			data:"code="+code+"&from=Web_VIVOAccount&locale=zh_CN&t="+new Date().getTime(),
// 			success:function(json){
// 				if(json.stat!="200"){
// 					inner("error"+id, json.msg);
// 					showErrorIcon(id, "0");
// 					changeIconForPhoneReg();
// 				}
// 				else
// 				{
// 					showErrorIcon(id, "1");
// 				}
// 			},
// 			error:function(){
// 				inner("error"+id, "系统出现异常，请联系管理员");
// 				showErrorIcon(id, "0");
// 				changeIconForPhoneReg();
// 			},
// 			type:"post",
// 			async: true,
// 			dataType:"json"
// 		});
// 		return false;
// 	}
	
// 	function checkEmailIconCode(id)
// 	{
// 		var code=$("#"+id).val();
// 		if(code.length == 0)
// 		{
// 			inner("error"+id, "请输入图片验证码");
// 			showErrorIcon(id, "0");
// 			return false;
// 		}
// 		return true;
// 	}
	
// 	function checkPhoneCode(id)
// 	{
// 		var code=$("#"+id).val();
// 		if(code.length == 0)
// 		{
// 			inner("error"+id, "请输入手机验证码");
// 			return false;
// 		}
// 		return true;
// 	}
	
// 	function phoneRegSub()
// 	{
// 		var check = true;
// 		check=checkPhone() && check;
// 		check=checkPhoneCode("_phonecode") && check;
// 		check=checkRegPwd("_phonepwd") && check;
// 		check=checkRegConfPwd("_phoneconfpwd", "_phonepwd") && check;
// 		check=checkAgreeProtocol("_isAgreePhone") && check;

// 		if(!check)
// 		{
// 			return false;
// 		}
// 		var phonenum=$("#_phonenum").val();
// 		var pwd=$("#_phoneconfpwd").val();
// 		var phonecode=$("#_phonecode").val();
// 		var isAgree=$("#_isAgreePhone").is(":checked");
// 		pwd=$.md5(pwd);
// 		$.ajax({
// 			url:"/v3/web/phoneRegSub",
// 			data:"account="+phonenum+"&pwd="+pwd+"&code="+phonecode+"&isAgree="+isAgree+"&from=Web_VIVOAccount&locale=zh_CN",
// 			success:function(json){
// 				if(json.stat!="200"){
// 					if(json.stat=="517" || json.stat=="518"){
// 						inner("error_phonecode", json.msg);
// 						showErrorIcon("_phonecode", "0");
// 					}else{
// 						inner("error_phonenum", json.msg);
// 						showErrorIcon("_phonenum", "0");
// 					}
// 				}
// 				else
// 				{
// 					//注册成功
// 					$("#_phonepwd").val(pwd);
//     				$("#_phoneconfpwd").val(pwd);
// 					document.getElementById("form_reg").setAttribute("action", "/v3s2/web/login/login?locale=zh_CN");
// 					document.getElementById("form_reg").submit();
// 				}
// 			},
// 			error:function(){
// 				inner("error_phonenum", "系统出现异常，请联系管理员");
// 				showErrorIcon("_phonenum", "0");
// 			},
// 			type:"post",
// 			async: true,
// 			dataType:"json"
// 		});
// 		return false;
// 	}
	
	

// 	function change()
// 	{
// 		 document.getElementById("iconcode").src="/v3/web/getRandcode?sc="+new Date().getTime();
// 	}
// 	function emailRegSub()
// 	{
// 		var check = true;
// 		check=checkEmail() && check;
// 		check=checkEmailIconCode("_emailcode") && check;
// 		check=checkRegPwd("_emailpwd") && check;
// 		check=checkRegConfPwd("_emailconfpwd", "_emailpwd") && check;
// 		check=checkAgreeProtocol("_isAgreeEmail") && check;

// 		if(!check)
// 		{
// 			return false;
// 		}
// 		var email=$("#_email").val();
// 		var pwd=$("#_emailconfpwd").val();
// 		var emailcode=$("#_emailcode").val();
// 		//var pwdcode = encodeURIComponent(pwd);
// 		pwd=$.md5(pwd);
// 	//	$("#_emailpwd").val(pwd);
//     //	$("#_emailconfpwd").val(pwd);
// 		var btn=document.getElementById("email_sub_id");
// 		var isAgree=$("#_isAgreeEmail").is(":checked");

// 		btn.disabled=true;
// 		btn.value="处理中...";
// 		$.ajax({
// 			url:"/v3/web/emailRegSub",
// 			data:"account="+email+"&pwd="+pwd+"&code="+emailcode+"&isAgree="+isAgree+"&from=Web_VIVOAccount&locale=zh_CN",
// 			success:function(json){
// 				if(json.stat!="200"){
// 					if(json.stat=="517"){
// 						inner("error_emailcode", json.msg);
// 						showErrorIcon("_emailcode", "0");
// 						change();
// 					}else{
// 						inner("error_email", json.msg);
// 						showErrorIcon("_email", "0");
// 						change();
// 					}
// 					var btn = document.getElementById("email_sub_id");
// 					btn.disabled=false;
// 					btn.value = "提交";
// 				}
// 				else
// 				{
// 					//注册成功
// 					var temp=hideEmail(email);
// 					window.location.href="/web/register/sendemailsuccess.jsp?email="+temp;
// 				}
// 			},
// 			error:function(){
// 				inner("error_email", "系统出现异常，请联系管理员");
// 				showErrorIcon("_email", "0");
// 				var btn = document.getElementById("email_sub_id");
// 				btn.disabled=false;
// 				btn.value = "提交";
// 			},
// 			type:"post",
// 			async: true,
// 			dataType:"json"
// 		});
		
// 		//alert("2222");
// 		return false;
// 	}
	 
// 	function goLogin()
// 	{
// 		document.getElementById("form_reg").setAttribute("action", "/v3/web/login/authorize");
// 		document.getElementById("form_reg").submit();
// 	}
	
	
// 	function changeIconForPhoneReg()
// 	{
// 		 document.getElementById("_phoneicon").src="/v3/web/getRandcodeForPhoneReg?t=2&sc="+new Date().getTime();
// 	}

// 	function checkAgreeProtocol(id) {
// 		var $isAgree = $('#'+id);
// 		if (!$isAgree.is(":checked")){
// 			inner("error"+id, "请同意协议内容");
// 			return false;
// 		}else {
// 			inner("error"+id, "");
// 		}
// 		return true;
// 	}
// </script>

<style>@font-face{font-family:uc-nexus-iconfont;src:url(chrome-extension://pogijhnlcfmcppgimcaccdkmbedjkmhi/res/font_9qmmi8b8jsxxbt9.woff) format('woff'),url(chrome-extension://pogijhnlcfmcppgimcaccdkmbedjkmhi/res/font_9qmmi8b8jsxxbt9.ttf) format('truetype')}</style>

</head>
<body>

	
	<div class="banner_bg">
		<a class="logo" title="vivo智能手机">
			<!-- <img src="login-xshot-bbg.jpg"> -->
		</a>
		<p>帐号注册</p>
	</div>

	<form class="middle_box" id="form_reg" name="form_reg" method="post" autocomplete="off">
		<!-- <input type="hidden" name="client_id" value="3"> 
		<input type="hidden" name="redirect_uri" value="http://shop.vivo.com.cn/my/"> -->
		<div class="hide_out">
			<div class="left">
				<p class="sub-title">已有帐号?<a class="link" onclick="goLogin();">立即登录</a></p>
				<ul class="register cl">
					<li class="radio">
						<input id="RegisterForm_mode_0" class="radio-style" value="phone" type="radio" name="RegisterForm[mode]" checked="checked" autocomplete="off"> 
						<label for="RegisterForm_mode_0" class="label-style">用手机注册</label>
						<input id="RegisterForm_mode_1" class="radio-style" value="email" type="radio" name="RegisterForm[mode]" disableautocomplete="" autocomplete="off"> 
						<label for="RegisterForm_mode_1" class="label-style">用邮箱注册</label>	
					</li>
				</ul>
			
				<!-- 手机号码注册 -->
				
				<ul class="phoneregister cl" id="phone-reg" style="display: block;">
							<li class="vercode li_input">
								<em></em>
								<input class="v_inp" type="text" placeholder="请输入图片验证码" id="_phoneiconcode" name="yzm">
								<span class="code-box">
									<img title="不区分大小写。看不清楚可以换一个" id="_phoneicon" src="<?php echo U('VerifyCode/show');?>"> 
								</span>
								<a id="changeCode" class="change-code" href="javascript:;">换一张</a> 
								
								<b class="correct" id="ct"></b>
								<p class="tip" id="error_phoneiconcode"></p>
							</li>
				
							<li class="phonenumber li_input">
								<em></em>
								<input class="v_inp" type="text" placeholder="请输入手机号" name="account" id="_phonenum">
								<p class="tip" id="error_phonenum"></p>
								
								<b class="correct"></b>
							</li>
							<li class="vercode li_input">
								<input id="belaybar" type="button" value="获取验证码">
								<input class="v_inp" type="text" placeholder="请输入手机验证码" id="_phonecode">
								<p class="tip" id="error_phonecode"></p>
								<em></em>
								<b class="correct"></b>
							</li>
							<li class="psw li_input">
								<em></em>
								<input class="v_inp" type="password" placeholder="请输入密码" id="_phonepwd">
								<p class="tip" id="error_phonepwd"></p>
								
								<b class="error"></b>
							</li>
							<li class="psw li_input">
								<em></em>
								<input class="v_inp" type="password" placeholder="请再输入一次密码" id="_phoneconfpwd" name="pwd">
								<p class="tip" id="error_phoneconfpwd"></p>
								
								<b class="correct"></b>
							</li>
							<li>
								<input name="_isAgreePhone" id="_isAgreePhone" type="checkbox" checked="checked" class="" autocomplete="off">
								<label for="_isAgreePhone" class="check-item">我已阅读并接受</label>
								<a target="_blank" href="https://passport.vivo.com.cn/warranty/webprotocol.html" class="check-item text-green">《vivo服务协议》</a>
								<p class="tip" id="error_isAgreePhone"></p>
								<b class="correct"></b>
							</li>
							<li class="login-btn">
								<input type="button" value="立即注册" class="v_dark_btn sulong_btn" id="phone_reg">
							</li>
						</ul>

				<!-- 邮箱注册 -->
						<ul class="emailregister cl" id="email-reg" style="display: none;">
							<li class="email li_input">
								<em></em>
								<input class="v_inp" type="text" placeholder="请输入邮箱地址" id="_email" onfocus="inputFocus(&#39;_email&#39;)" onblur="checkEmailOnline()">
								<p class="tip" id="error_email"></p>
								
								<b class="correct"></b>
							</li>

							<li class="psw li_input">
								<em></em>
								<input class="v_inp" type="password" placeholder="请输入密码" id="_emailpwd" onfocus="inputFocus(&#39;_emailpwd&#39;)" onblur="checkRegPwd(&#39;_emailpwd&#39;)">
								<p class="tip" id="error_emailpwd"></p>
								
								<b class="error"></b>
							</li>
							<li class="psw li_input">
								<em></em>
								<input class="v_inp" type="password" placeholder="请再输入一次密码" id="_emailconfpwd" onfocus="inputFocus(&#39;_emailconfpwd&#39;)" onblur="checkRegConfPwd(&#39;_emailconfpwd&#39;, &#39;_emailpwd&#39;) ">
								<p class="tip" id="error_emailconfpwd"></p>
								
								<b class="correct"></b>
							</li>
							<li class="vercode li_input">
								<em></em>
								<input class="v_inp" type="text" placeholder="请输入验证码" id="_emailcode" onfocus="inputFocus(&#39;_emailcode&#39;)" onblur="checkEmailIconCode(&#39;_emailcode&#39;)">
								<span class="code-box2">
									<img title="不区分大小写。看不清楚可以换一个" id="iconcode" src="" alt="" onclick="change()"> 
								</span>
								<a class="change-code" onclick="change()">换一张</a> 
								
								<b class="correct" id="ct"></b>
								<p class="tip" id="error_emailcode"></p>
							</li>
							<li>
								<input name="_isAgreeEmail" id="_isAgreeEmail" type="checkbox" checked="checked" class="" autocomplete="off" onchange="checkAgreeProtocol(&#39;_isAgreeEmail&#39;)">
								<label for="_isAgreeEmail" class="check-item">我已阅读并接受</label>
								<a target="_blank" href="https://passport.vivo.com.cn/warranty/webprotocol.html" class="check-item text-green">《vivo服务协议》</a>
								<p class="tip" id="error_isAgreeEmail"></p>
								<b class="correct"></b>
							</li>
							<li class="login-btn">
								<input type="button" value="提交" class="v_dark_btn sulong_btn" onclick="return emailRegSub();" id="email_sub_id">
							</li>
						</ul>

			</div>

			<div class="right">
				<div class="other-method">
					<div class="other-method">
					<p class="sub-title">其他方式登录</p>
					<ul class="cl">
						<li class="qq">
							<a id="qqlogin" href="https://passport.vivo.com.cn/v3/web/login/qqLogin?redirect_uri=http://shop.vivo.com.cn/my/&amp;client_id=3"><b></b>QQ帐号</a>
						</li>
						<li class="wechat">
							<a id="wechatlogin" href="https://passport.vivo.com.cn/v3/web/login/wechatLogin?redirect_uri=http://shop.vivo.com.cn/my/&amp;client_id=3"><b></b>微信帐号</a>
						</li>
						<li class="sina">
							<a id="sinalogin" href="https://passport.vivo.com.cn/v3/web/login/sinaLogin?redirect_uri=http://shop.vivo.com.cn/my/&amp;client_id=3"><b></b>新浪微博</a>
						</li>
						<li class="renren">
							<a id="renrenlogin" href="https://passport.vivo.com.cn/v3/web/login/renrenLogin?redirect_uri=http://shop.vivo.com.cn/my/&amp;client_id=3"><b></b>人人帐号</a>
						</li>
					</ul>
				</div>
				</div>
			</div>

		</div>

	</form>


</body></html>

<script src="/tp_shop/object/Public/js/jquery-1.8.3.min.js"></script>

<script>

	//检查验证码是否为空
	$('#_phoneiconcode').blur( function () { 

		// console.log($(this).html());
		if ($(this).val() == '') { 
			
			$('#error_phoneiconcode').css('display', 'block').html('请输入验证码');
		}
	})

	//输入框得到焦点，隐藏提示框
	$('#_phoneiconcode').focus( function () { 
			
		$('#error_phoneiconcode').css('display', 'none').html('');
		
	})

	//验证手机号是否为空
	$('#_phonenum').blur( function () { 

		// console.log($(this).val());
		if ($(this).val() == '') { 

			$('#error_phonenum').css('display', 'block').html('请输入手机号码');
		}

		// 判断手机号格式是否正确
		var reg 	 = /^1[34578]\d{9}$/; 
		var phoneval = $(this).val();

		if (phoneval.match(reg) == null) { 

			$('#error_phonenum').css('display', 'block').html('请输入正确的手机号码');
		}
	});

	//手机输入框得到焦点，隐藏提示框
	$('#_phonenum').focus( function () { 
			
		$('#error_phonenum').css('display', 'none').html('');
		
	})

	//判断密码格式是否为空
	$('#_phonepwd').blur( function () { 

		if ($(this).val() == '') { 

			$('#error_phonepwd').css('display', 'block').html('密码不能为空');
		}

		//验证密码格式
		var reg =  /^[0-9a-zA-Z!@#$^]{6,18}$/;
		var phonepwd = $(this).val();

		if (phonepwd.match(reg) == null) { 

			$('#error_phonepwd').css('display', 'block').html('密码为6-18位 ，由数字、大写字母、小写字母、特殊字符');
		}
	});

	//密码输入框得到焦点，清除提示消息
	$('#_phonepwd').focus( function () { 

		$('#error_phonepwd').css('display', 'none').html('');

	});

	//验证密码是否一致
	$('#_phoneconfpwd').blur( function () { 

		if ( $(this).val() != $('#_phonepwd').val() ) { 

			$('#error_phoneconfpwd').css('display', 'block').html('两次输入的密码不一致');
		}
	});

	//验证密码框得到焦点，隐藏提示信息
	$('#_phoneconfpwd').focus( function () { 

		$('#error_phoneconfpwd').css('display', 'none').html('');

	});
	
	$('#changeCode').click( function () { 

		$.get('<?php echo U("VerifyCode/show");?>', function (data) { 

			$('#_phoneicon').attr("src", "<?php echo U('VerifyCode/show');?>");
			// alert('1');
		});

	});

	//middle_box表单名
	//手机号注册
	$('#phone_reg').click( function () { 

		console.log( $('.middle_box').serializeArray() );
	});
</script>