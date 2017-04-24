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
<link rel="stylesheet" href="/gitHub/tp_shop/object/Public/Home/register_files/login.css" style="text/css">
<script type="text/javascript" src="/gitHub/tp_shop/object/Public/Home/register_files/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/gitHub/tp_shop/object/Public/Home/register_files/login.js"></script>

<script type="text/javascript" src="/gitHub/tp_shop/object/Public/Home/register_files/jquery-md5-min.js"></script>
<script type="text/javascript"></script>

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
				<p class="sub-title">已有帐号?<a class="link" href="<?php echo U('Login/showlogin');?>">立即登录</a></p>
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
				
							<li class="phonenumber li_input">
								<em></em>
								<input class="v_inp" type="text" placeholder="请输入手机号" name="account" id="_phonenum">
								<p class="tip" id="error_phonenum">请输入正确的手机号</p>
								
								<b class="correct"></b>
							</li>
							<li class="vercode li_input">
								<button id="belaybar" type="button" value="">获取验证码</button>
								<input class="v_inp" type="text" placeholder="请输入手机验证码" id="_phonecode" name="phone_yzm">
								<p class="tip" id="error_phonecode">请输入手机验证码</p>
								<em></em>
								<b class="correct"></b>
							</li>
							<li class="psw li_input">
								<em></em>
								<input class="v_inp" type="password" placeholder="请输入密码" id="_phonepwd"/>
								<p class="tip" id="error_phonepwd"></p>
								
								<b class="error"></b>
							</li>
							<li class="psw li_input">
								<em></em>
								<input class="v_inp" type="password" placeholder="请再输入一次密码" id="_phoneconfpwd" name="pwd"/>
								<p class="tip" id="error_phoneconfpwd"></p>
								
								<b class="correct"></b>
							</li>

							<li>
								<input name="_isAgreePhone" id="_isAgreePhone" type="checkbox" checked="checked" class="" autocomplete="off">
								<label for="_isAgreePhone" class="check-item">我已阅读并接受</label>
								<a target="_blank" href="https://passport.vivo.com.cn/warranty/webprotocol.html" class="check-item text-green">《vivo服务协议》</a>
								<p class="tip" id="error_isAgreePhone">请选择阅读并接受</p>
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
								<input name="_isAgreeEmail" id="_isAgreeEmail" type="checkbox" checked="checked" class="" autocomplete="off">
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

		</div>

	</form>


</body></html>

<script src="/gitHub/tp_shop/object/Public/js/jquery-1.8.3.min.js"></script>

<script>

	// //刷新验证码
	// $('#changeCode').click( function () { 

	// 	$.get('<?php echo U("VerifyCode/show");?>', function (data) { 

	// 		$('#_phoneicon').attr("src", "<?php echo U('VerifyCode/show');?>");
	// 		// alert('1');
	// 	});

	// });
	// //检查验证码是否为空
	// $('#_phoneiconcode').blur( function () { 

	// 	// console.log($(this).html());
	// 	if ($(this).val() == '') { 
			
	// 		$('#error_phoneiconcode').css('display', 'block').html('请输入验证码');
	// 		$('#_phoneiconcode').attr('data-value', 'false');
	// 	}
	// })

	// //输入框得到焦点，隐藏提示框
	// $('#_phoneiconcode').focus( function () { 
			
	// 	$('#error_phoneiconcode').css('display', 'none').html('');
	// 	$('#_phoneiconcode').attr('data-value', 'true');
		
	// })

	//验证手机号是否为空
	$('#_phonenum').blur( function () { 

		
		// console.log($(this).val());
		if ($(this).val() == '') { 

			$('#error_phonenum').css('display', 'block').html('请输入手机号码').attr('data-bool', 'false');


		}

		// 判断手机号格式是否正确
		var reg 	 = /^1[34578]\d{9}$/; 
		var phoneval = $(this).val();

		if (phoneval.match(reg) == null) { 

			$('#error_phonenum').css('display', 'block').html('请输入正确的手机号码').attr('data-bool', 'false');

		}
	});

	//手机输入框得到焦点，隐藏提示框
	$('#_phonenum').focus( function () { 
			
		$('#error_phonenum').css('display', 'none').html('').attr('data-bool', 'true');

	})

	//在获取短信验证之前。判断手机号是否输入或者是否正确
	$('#belaybar').click(function () { 

		if ($('#error_phonenum').attr('data-bool') == 'false' || $('#error_phonenum').attr('data-bool') == undefined) { 

			$('#error_phonecode').css('display', 'block').html('您输入的手机号码不正确');

		} else { 

			if ($('#belaybar').attr('data-time') == undefined || $('#belaybar').attr('data-time') == 'ture') {

			$('#belaybar').attr('data-time', 'false');

			$.post(
				'<?php echo U("SendPhoneCode/send");?>',
				{phone:$('#_phonenum').val()},
				function (data) { 

					if (data == '200') { 

						$('#belaybar').html('已发送').attr('data-time', 'false');

						var i = 120;
						var id = setInterval( function () { 
							$('#error_phonenum').css('display', 'block').html(i+'秒后可以重新获取验证码');

							if (i == 0) { 

								clearTimeout(id);

								$('#belaybar').html('获取验证码');

								$('#error_phonenum').css('display', 'none').html('');

								$('#belaybar').attr('data-time', 'ture');

							} 

							i--;

						}, 1000);

					} else { 

						$('#belaybar').html('发送失败');
					}
				});

			}
		}

	});

	//验证码框失去焦点, 校验验证码是否正确
	$('#_phonecode').blur(function () { 

		$.post(
			'<?php echo U("VerifyPhoneCode/verify");?>',
			{phone:$('#_phonenum').val(), code:$('#_phonecode').val()},
			function (data) { 

				if (data != 200) { 
					$('#error_phonecode').attr('data-value', 'false').css('display', 'block').html('验证码不正确');
					$('#_phonecode').attr('data-value', 'false');

				}
			}

		);
		
	});	

	//验证码框得到焦点。提示信息消失
	$('#_phonecode').focus(function () { 

		$('#error_phonecode').css('display', 'none').html('');
		$('#_phonecode').attr('data-value', 'true');
	});	

	//判断密码格式是否为空
	$('#_phonepwd').blur( function () { 

		if ($(this).val() == '') { 

			$('#error_phonepwd').css('display', 'block').html('密码不能为空');
			$('#_phonepwd').attr('data-value', 'false');
		}

		//验证密码格式
		var reg =  /^[0-9a-zA-Z!@#$^]{6,18}$/;
		var phonepwd = $(this).val();

		if (phonepwd.match(reg) == null) { 

			$('#error_phonepwd').css('display', 'block').html('密码为6-18位 ，由数字、大写字母、小写字母、特殊字符');
			$('#_phonepwd').attr('data-value', 'false');

		}
	});

	//密码输入框得到焦点，清除提示消息
	$('#_phonepwd').focus( function () { 

		$('#error_phonepwd').css('display', 'none').html('');
		$('#_phonepwd').attr('data-value', 'true');

	});

	//验证密码是否一致
	$('#_phoneconfpwd').blur( function () { 

		if ( $('#_phoneconfpwd').val() != $('#_phonepwd').val() ) { 

			$('#error_phoneconfpwd').css('display', 'block').html('两次输入的密码不一致');
			$('#_phoneconfpwd').attr('data-value', 'false');
		}
	});

	//验证密码框得到焦点，隐藏提示信息
	$('#_phoneconfpwd').focus( function () { 

		$('#error_phoneconfpwd').css('display', 'none').html('');
		$('#_phoneconfpwd').attr('data-value', 'true');

	});

	//是否选择了服务协议

	
	$('#phone_reg').on('click', function () { 
		
		if ( $('#_isAgreePhone').attr('checked') != 'checked') { 

			$('#error_isAgreePhone').css('display', 'block').html('请勾选服务协议');

		} else { 
			
			if ($('#_phonecode').attr('data-value') == 'true' && $('#_phoneconfpwd').attr('data-value') == 'true' && $('#_phonepwd').attr('data-value') == 'true') { 
				$.post(
					'<?php echo U("ShowRegister/register");?>',
					{phone:$('#_phonenum').val(), pass:$('#_phonepwd').val()},
					function (data) { 

						if (data != '1') { 

							$('#error_isAgreePhone').css('display', 'block').html(data);
						} else { 

							location.href="<?php echo U('Login/showLogin');?>";
						}
					}
				,'json');
			} else { 
				$('#error_isAgreePhone').attr('data-value', 'false').css('display', 'block').html('输入信息不正确');
			}
		}



	});
</script>