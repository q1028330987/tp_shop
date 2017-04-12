<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC >

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>vivo购物车</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="baidu-site-verification" content="QboEbNprz3">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!-- <link rel="dns-prefetch" href="http://api.anta.cn/">
<link rel="dns-prefetch" href="http://img.anta.cn/">
<link rel="dns-prefetch" href="http://wljg.xmgs.gov.cn/">
<link rel="dns-prefetch" href="http://hm.baidu.com/">
<link rel="dns-prefetch" href="http://1741.oadz.com/"> -->
<!-- <meta name="mobile-agent" content="format=[wml|xhtml|html5];url=http://m.anta.cn/cart.html">
<link rel="alternate" media="only screen and (max-width:640px)" href="http://m.anta.cn/cart.html"> -->
<meta name="applicable-device" content="pc">
<meta http-equiv="Cache-Control" content="no-siteapp">
<meta http-equiv="Cache-Control" content="no-transform">
<link href="/gitHub/tp_shop/object/Public/Home/shopCart_files/saved_resource" type="text/css" rel="stylesheet"> 
<script src="/gitHub/tp_shop/object/Public/Home/shopCart_files/hm.js"></script><script src="/gitHub/tp_shop/object/Public/Home/shopCart_files/saved_resource(1)"></script><script language="javascript">
	var u = navigator.userAgent;
	if (u.indexOf('Android') > -1 || u.indexOf('Linux') > -1
			|| u.indexOf('Windows Phone') > -1 || u.indexOf('iPhone') > -1
			|| u.indexOf('iPad') > -1) {
			window.location.href ='http://m.anta.cn/cart.html';
		
	}

</script>
<!-- <script type='text/javascript'>
      var _vds = _vds || [];
      window._vds = _vds;
      (function(){
        _vds.push(['setAccountId', '8fdae875e0692605']);
        (function() {
          var vds = document.createElement('script');
          vds.type='text/javascript';
          vds.async = true;
          vds.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'dn-growing.qbox.me/vds.js';
          var s = document.getElementsByTagName('script')[0];
          s.parentNode.insertBefore(vds, s);
        })();
      })();
  </script> -->
<script language="javascript">
	var u = navigator.userAgent;
	if (u.indexOf('Android') > -1 || u.indexOf('Linux') > -1
			|| u.indexOf('Windows Phone') > -1 || u.indexOf('iPhone') > -1
			|| u.indexOf('iPad') > -1) {
		if($("#mobile_url").size()>0){
			window.location.href =$("#mobile_url").val();
		}else{
			window.location.href = "http://m.anta.cn";
		}	
	}
</script><style>@font-face{font-family:uc-nexus-iconfont;src:url(chrome-extension://pogijhnlcfmcppgimcaccdkmbedjkmhi/res/font_9qmmi8b8jsxxbt9.woff) format('woff'),url(chrome-extension://pogijhnlcfmcppgimcaccdkmbedjkmhi/res/font_9qmmi8b8jsxxbt9.ttf) format('truetype')}</style></head>


<body>
	<div><div class="g-toolbar">
	<div class="wrapper">

		<div class="quick-link">

			<div class="fl fore1">

				<b></b><a href="javascript:alert(&#39;请使用Ctrl + D 收藏本站&#39;);" rel="nofollow">收藏安踏</a>
			</div>
			<a href="http://www.anta.com/" rel="nofollow" class="child-node child-pl">品牌官网</a> <a href="http://www.anta.cn/tuan.shtml" rel="nofollow" class="child-node child-pl">企业采购</a>
			<div class="fl fore2">
				<b></b><a href="http://m.anta.cn/" rel="nofollow">手机商城</a>
				<div class="sn-qrcode" style="display: none;">
					<div class="sn-qrcode-content"></div>
					<p>扫一扫，定制我的安踏商城！</p>
					<i></i>
				</div>
			</div>
		</div>
		<div class="tool-link" id="tool-link">
			<span class="welcome child-node">你好，欢迎来到安踏官方商城！</span> <span id="logReg" class="logReg"> <a href="http://www.anta.cn/login.html?return=/cart.html" target="_blank" class="child-node">请登录</a> <a href="http://www.anta.cn/register.html?return=/cart.html" target="_blank" class="child-node">免费注册<em class="g-important">即送20优惠券</em>
			</a></span>					</div>
	</div>
</div></div>
	<div id="header-simple">
		<div class="w w1 header clearfix">
			<div id="logo">
				<a href="http://www.anta.cn/"><img src="/gitHub/tp_shop/object/Public/Home/shopCart_files/cn_logo.png" title="返回ANTA 官方商城首页" alt="返回ANTA 官方商城首页" class="png_bg" style=""></a>
			</div>
			<div class="cartnew-title clearfix">
				<ul>
					<li><span class="act">我的购物车</span></li>
					<li><span>填写核对订单信息</span></li>
					<li class="end"><span>成功提交订单</span></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="w cart">
			<div class="checkout-steps">
						</div>
			</div>
	<!--导航结束-->
	<!--我的购物车开始-->
	<div id="JcartBox">
		
<div class="w_cart">
	<div class="cart-hd group">
		<h2>我的购物车</h2>
		<!--  <span class="fore fl">现在 <a href="#">登录</a> , 您的商品将保存在"购物车"中</span> -->
		<span>
			<!-- 满399立减10元 -->
		</span>
	</div>
	<div class="w_cart_inner">
		<table class="w_cart_table">
			<thead>
				<tr>
					<td width="50"><input data-cart="toggle-cb" id="toggle-checkboxes" type="checkbox" onchange="ANTA.Cart.selectAll();" checked=""> </td>
					<td width="80">商品编号</td>
					<td width="120">商品图片</td>
					<td style="text-align: left">商品信息</td>
					<td width="150">单价</td>
					<td width="200">商品数量</td>
					<td width="80">赠送积分</td>
					<td width="80">删除商品</td>
				</tr>
			</thead>
			<tbody>
				<!-- 主商品 -->
									<tr class="item">
						<td align="center">
						 	<input class="checkbox Jcki" type="checkbox" id="ck_1850422" name="checkItem" value="6901849041206" data="1850422" onchange="ANTA.Cart.selectGoods();" checked=""> 
													</td>
						<td class="p-numbered">11711112</td>
						<td class="p-img">
							<a href="javascript:;" class="in_b"><img src="/gitHub/tp_shop/object/Public/Home/shopCart_files/11711112_7_01--w_50_h_50.jpg" width="50" height="50" alt="跑鞋" class="vm"></a>
						</td>
						<td class="p-name">
							<h2> <a href="http://www.anta.cn/anta-11711112-7.html" target="_blank" title="汤普森二代战靴全明星配色">汤普森二代战靴全明星配色-11711112</a> </h2> <span class="promise411">颜色:深蓝黑/亮蓝/安踏白 尺码:42</span>
						</td>
						<td class="p-price">
							<span class="u_price" style="text-decoration: line-through;">¥499.00</span> <span class="price">￥499.00</span>
							 						</td>
						<td class="p-quantity">
							<div class="quantity-form" data-bind="">
									<a onclick="ANTA.Cart.changeNum(6901849041206,-1,1850422);" class="decrement">-</a> 
									<input type="text" class="quantity-text" value="1" onblur="value=value.replace(/[^\d]/g,&#39;&#39;);ANTA.Cart.changeNum(6901849041206,0,1850422)" data="1" id="n_6901849041206"> 
									<a onclick="ANTA.Cart.changeNum(6901849041206,1,1850422)" class="increment">+</a>
							</div>
						</td>
						<td class="p-inventory">499</td>
						<td class="p-remove"><a class="cart-remove" onclick="ANTA.Cart.deletePro(1850422);" style="cursor: pointer;">删除</a></td>
					</tr>				<tr class="jf_box">
					<td colspan="8" class="jf_td_first">
						<table class="w_cart_table w_zp_table">
							<thead>
								<tr>
									<td width="50"></td>
									<td width="80">赠品编号</td>
									<td width="120">赠品图片</td>
									<td style="text-align: left">赠品信息</td>
									<!-- <td width="150">单价</td> -->
									<td width="200">赠品数量</td>
									<!-- <td width="132" colspan="2"></td> -->
								</tr>
							</thead>
							<tbody>
								<!-- 主商品 -->
								<tr class="item">
									<td align="center"></td>
									<td class="p-numbered">ZP1609004</td>
									<td class="p-img"><a href="javascript:;" class="in_b">
											<img src="/gitHub/tp_shop/object/Public/Home/shopCart_files/ZP1609004_1_01--w_50_h_50.jpg" width="50" height="50" alt="跑鞋" class="vm">
									</a></td>
									<td class="p-name">束口袋-ZP1609004</td>
									<!-- <td class="p-price"><span class="price">￥5.30</span>
									</td> -->
									<td class="p-quantity">
										<div class="p-quantity">1</div>
									</td>
								</tr>							</tbody>
						</table>

					</td>
				</tr>				
								<tr class="cart_toolbar">
					<td colspan="5">
						<div class="control" style="width: 200px;">
							<div class="fl" style="padding: 5px 0 0 3px;"></div>
							<span class="delete"><a onclick="ANTA.Cart.deletePros()" style="cursor: pointer;">删除选中的商品</a> <a onclick="ANTA.Cart.deletePros(1);" style="cursor: pointer;">清空购物车</a></span>
						</div>

					</td>
					<td colspan="6" class="total_box">
											<p id="jifen" style="display: none;">
							<label>可获得积分</label> <span class="c_red">499</span>
						</p>
						<p>
							<label for="应付金额">应付金额</label> <span class="c_red total_price" id="Jfinal">¥499.00</span>
						</p>						</td>
				</tr>
				<tr class="cart_total">
					<td colspan="8"><a href="http://www.anta.cn/" class="continue">继续购物</a>
					<a class="account" onclick="location.href=&#39;/login.html?return=/cart.html&#39;;">提交订单</a> 
						 
							
					</td>
				</tr>
				<input type="hidden" id="sign" value="4f0309a85e3d1f4a09c315f4c2ce9379">
			</tbody>
		</table>
	</div>
</div><script>
$(".w_pro_sale").on('mouseover', function(event) {
event.preventDefault();
$(this).parent().find('.w_pro_sale_ctr').show();
});
$(".w_pro_sale").on('mouseout', function(event) {
event.preventDefault();
$(this).parent().find('.w_pro_sale_ctr').hide();
});
</script>
	</div>
	
	<input id="choosePro" value="/index.php?s=/Shopping/NAN.html" type="hidden">
	<div class="footer">
		<div class="serverbox w clearfix">
			<ul class="server-list clearfix">
				<li class="item-first">
					<h4>用户指南</h4>
					<a href="http://www.anta.cn/help-39.html" target="_blank">新用户注册</a><a href="http://www.anta.cn/help-44.html" target="_blank">购物流程</a><a href="http://www.anta.cn/help-40.html" target="_blank">尺码对照表</a><a href="http://www.anta.cn/help-47.html" target="_blank">支付方式</a><a href="http://www.anta.cn/help-54.html" target="_blank">包装形式</a><a href="http://www.anta.cn/help-50.html" target="_blank">配送方式</a><a href="http://www.anta.cn/help-49.html" target="_blank">配送费用</a>
				</li>
				<li>
					<h4>会员政策</h4>
					<a href="http://www.anta.cn/help-38.html" target="_blank">积分政策</a><a href="http://www.anta.cn/help-56.html" target="_blank">会员政策</a><a href="http://www.anta.cn/help-37.html" target="_blank">用户协议</a><a href="http://www.anta.cn/help-46.html" target="_blank">发票制度</a>
				</li>
				<li>
					<h4>售后服务</h4>
					<a href="http://www.anta.cn/help-43.html" target="_blank">订单查询</a><a href="http://www.anta.cn/help-48.html" target="_blank">快递查询</a><a href="http://www.anta.cn/help-52.html" target="_blank">退换货政策</a><a href="http://www.anta.cn/help-51.html" target="_blank">退换货流程</a><a href="http://www.anta.cn/help-53.html" target="_blank">退款方式</a>
				</li>
				<li>
					<h4>联系我们</h4>
					<a href="http://www.anta.cn/tuan.shtml" target="_blank">企业团购</a><a href="http://www.anta.cn/help-58.html" target="_blank">商务合作</a>
				</li>
			</ul>				<div class="custom-service">
				<h4>在线咨询</h4>
				<span class="server-tel"></span>
				<a href="javascript:;" class="server-btn" onclick="CORPOR.Common.xiaoneng();"><i class="icon icon-zxkf"></i><span>在线客服</span></a>
				<h4>微信咨询</h4>
				<a href="javascript:;" class="weixin-code"></a>
			</div>	
		</div>
	<div class="company-cr w-full">
			<div class="company-info w clearfix">
					<span class="copyright">COPYRIGHT 2012-2016</span>
	<a href="javascript:;" class="chengxing-img"><img src="/gitHub/tp_shop/object/Public/Home/shopCart_files/chengxing1.png"></a>
	<span class="company-name">厦门安踏电子商务有限公司</span>
	<a href="javascript:;" class="police-img"><img src="/gitHub/tp_shop/object/Public/Home/shopCart_files/police_black.jpg"></a>
	<span class="company-icp">闽ICP备11020421号</span>
	<!-- <span class="tel" style="margin-left:50px;">在线团购：0592-3515057</span> -->
				<div><a target="_blank" href="http://www.anta.cn/sitemap.shtml">网站地图</a><a target="_blank" href="http://www.anta.cn/tag-hot.html">标签</a><a target="_blank" href="http://www.anta.cn/help-59.html">友情链接</a></div>
			</div>
			
		</div>
	</div>


<script type="text/javascript">
try {if (self != top&&top.location.href==self.location.href)  {top.location=this.location.href;}}catch (e) {}
var _ozuid = '';var _hmt = _hmt || [];
(function() {var hm = document.createElement("script");hm.src = "//hm.baidu.com/hm.js?da161d8f61f938ec4aaa98a3a7075e6d";var s = document.getElementsByTagName("script")[0];s.parentNode.insertBefore(hm, s);})();
	//var _mvq = window._mvq || [];window._mvq = _mvq;_mvq.push(['$setAccount', 'm-20774-0']);_mvq.push(['$setGeneral', '', '', /*用户名*/ '', /*用户id*/ '']);//如果不传用户名、用户id，此句可以删掉
	//_mvq.push(['$logConversion']);
/* 	(function() {var mvl = document.createElement('script');mvl.type = 'text/javascript'; mvl.async = true;mvl.src = ('https:' == document.location.protocol ? 'https://static-ssl.mediav.com/mvl.js' : 'http://static.mediav.com/mvl.js');var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(mvl, s);})(); */
</script>	<script>$(function(){$(".loading").scrollLoading();})</script>
	<script src="/gitHub/tp_shop/object/Public/Home/shopCart_files/saved_resource(2)"></script> 
	
	 

<div id="top"><div id="izl_rmenu" class="izl-rmenu"><a class="btn btn-qq" onclick="xiaoneng()"></a><div class="btn btn-phone"><div class="phone" style="display: none;">400-858-2020</div></div><div class="btn btn-top" style="display: none;"></div></div></div></body></html>