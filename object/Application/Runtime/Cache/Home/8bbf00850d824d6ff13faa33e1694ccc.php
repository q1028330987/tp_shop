<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>vivo购物车</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="baidu-site-verification" content="QboEbNprz3">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
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
</script>
</head>


<body>
	<div class="tip" style="width:100%;height:20px;background:#ccc;border:1px solid red;position:fixed;top:0px;text-align:center;display:none;z-index:100000;color:red;"> 
		<span>请选择商品</span>
	</div>
	<div><div class="g-toolbar">
	<div class="wrapper">

		<div class="quick-link">

			<div class="fl fore1">

				<b></b><a href="javascript:alert(&#39;请使用Ctrl + D 收藏本站&#39;);" rel="nofollow"></a>
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
			<span class="welcome child-node">你好，欢迎来到vivo官方商城！</span> <span id="logReg" class="logReg"> <a href="http://www.anta.cn/login.html?return=/cart.html" target="_blank" class="child-node"></a> <a href="http://www.anta.cn/register.html?return=/cart.html" target="_blank" class="child-node"><em class="g-important">即送20优惠券</em>
			</a></span>					</div>
	</div>
</div></div>
	<div id="header-simple">
		<div class="w w1 header clearfix">
			<div id="logo">
				
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
<form action="<?php echo U('Order/createOrder');?>" method="post" id="ShopCart">
	<div class="w_cart_inner">
		<table class="w_cart_table">
			<thead>
				<tr>
					<td width="50"><input data="1" data-cart="toggle-cb" id="toggle-checkboxes" type="checkbox" onchange="" checked=""> </td>
					<td width="80">商品编号</td>
					<td width="120">商品图片</td>
					<td style="text-align: left">商品信息</td>
					<td width="150">单价</td>
					<td width="200">商品数量</td>
					<td width="80">总计</td>
					<td width="80">删除商品</td>
				</tr>
			</thead>
			<tbody>
				<!-- 主商品 -->
<?php if(is_array($cartList)): foreach($cartList as $key=>$v): ?><tr class="item" data-id="<?php echo ($v["id"]); ?>">
						<td align="center">
						 	<input class="checkbox Jcki" type="checkbox" id="ck_1850422" name="checkItem[]" value="<?php echo ($v["id"]); ?>" data="1850422" onchange="count()" checked="">
						</td>
						<td class="p-numbered"><?php echo ($v["id"]); ?></td>
						<td class="p-img">
							<a href="javascript:;" class="in_b"><img src="/gitHub/tp_shop/object/Public<?php echo ($v['pic']); ?>" width="50" height="50" alt="跑鞋" class="vm"></a>
						</td>
						<td class="p-name">
							<h2> <a href="" target="_blank" title=""><?php echo ($v["name"]); ?></a> </h2> <span class="promise411"><?php echo ($v["des"]); ?></span>
						</td>
						<td class="p-price">
							<span class="u_price" style="text-decoration: line-through;"></span> <span class="price"><?php echo ($v["price"]); ?></span>
							 						</td>
						<td class="p-quantity">
							<div class="quantity-form" data-bind="">
									<a onclick="reduceNum(this,false)" class="decrement">-</a> 
									<input type="text" class="quantity-text" value="<?php echo ($v["buynum"]); ?>"> 
									<a onclick="reduceNum(this,true)" class="increment">+</a>
							</div>
						</td>
						<td class="p-inventory"><?php echo ($v['price']*$v['buynum']); ?></td>
						<td class="p-remove">
							<a class="cart-remove" onclick="count()" style="cursor: pointer;" data-id="<?php echo ($v["id"]); ?>">删除</a>
						</td>
					</tr><?php endforeach; endif; ?>
				<tr class="cart_toolbar">
					<td colspan="8">
						<div class="control" style="width: 200px;">
							<div class="fl" style="padding: 5px 0 0 3px;"></div>
							<span class="delete">
								<a id="delchecked" style="cursor: pointer;">删除选中的商品</a> 
								<a id="clearShopCart" style="cursor: pointer;">清空购物车</a>
							</span>
						</div>
					</td>
				</tr>
				<tr>
					<td colspan="8" class="total_box">
											<p id="jifen" style="display: none;">
							<label>可获得积分</label> <span class="c_red">499</span>
						</p>
						<p style="display:inline-block;text-align:reight">
							<label for="应付金额" style="">应付金额</label> <span class="c_red total_price" id="Jfinal"></span>
						</p>						</td>
				</tr>
				<tr class="cart_total">
					<td colspan="8">
					<button class="account" style="width:132px;height:37px">提交订单</button>
					<a href="<?php echo U('Paging/paging');?>" class="continue" >继续购物</a>
						
						<!-- style="display:inline-block;float:right;width:100px;height:30px;background:red;color:white;font-weight:800;text-align:center;line-height:30px;margin-left:20px" -->

						<!-- style="display:inline-block;float:right;width:100px;height:30px;border:1px solid black;font-weight:800;text-align:center;line-height:30px;" -->
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</form>
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
				<a href="javascript:;" class="server-btn" onclick="CORPOR.Common.xiaoneng();"><i class=""></i><span>在线客服</span></a>
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
	
	 

<!-- <div id="top"><div id="izl_rmenu" class="izl-rmenu"><a class="btn btn-qq" onclick="xiaoneng()"></a><div class="btn btn-phone"><div class="phone" style="display: none;">400-858-2020</div></div><div class="btn btn-top" style="display: none;"></div></div></div> --></body></html>

<script src="/gitHub/tp_shop/object/Public/js/jquery-1.8.3.min.js"></script>
<script>
	
	$('#toggle-checkboxes').click(function () { 
		if ( $('#toggle-checkboxes').attr('data') == 1 ) {
			$('.w_cart_table').find('input[type=checkbox]').prop('checked', true);
			$('#toggle-checkboxes').attr('data', 0);
		} else {
			$('.w_cart_table').find('input[type=checkbox]').prop('checked', false);
			$('#toggle-checkboxes').attr('data', 1);
		}

	});

	$('.w_cart_table').on('click', '.cart-remove', function () { 

		var that = $(this);
		$.post(
			'<?php echo U("ShopCart/delGoods");?>',
			{id:$(this).attr('data-id')},
			function (data) { 

				if (data == 1) { 

					that.parent().parent().remove();
				}
			} 
		);
	})

	$('#delchecked').click(function () { 

		 $('.w_cart_table').find('input[type=checkbox].Jcki').each(function () { 

		 	if ($(this).attr('checked') == 'checked') { 

		 		var that = $(this);

		 		$.post(
					'<?php echo U("ShopCart/delGoods");?>',
					{id:$(this).parent().parent().attr('data-id')},
					function (data) { 

						if (data == 1) { 

							that.parent().parent().remove();
						}
					} 
				);

				count();
		 	}
		 });
	})

	$('#clearShopCart').click(function () { 

		$.post(
			'<?php echo U("ShopCart/clearAll");?>',
			function (data) { 

				if (data) { 

					$('.w_cart_table').find('tr.item').remove();

					$('#toggle-checkboxes').attr('checked', false);
				}
			}

		); 

		count();
	})

	function reduceNum(dom,bool) { 

		var id = $(dom).parent().parent().parent().attr('data-id');

		$.post( 
			'<?php echo U("ShopCart/controllerNum");?>',
			{id:id,bool:bool},
			function (data) { 
				if (data == 0) { 

					$(dom).parent().parent().parent().remove();

				} else { 

					if (bool) { 

						$(dom).prev().val(data);

					} else { 

						$(dom).next().val(data);
					}
					
				}
			}
		);

		sum(id,dom);
		count();
	}

	$('.quantity-text').blur(function () { 

		var id = $(this).parent().parent().parent().attr('data-id');
		var num = $(this).val();
		var that = $(this);
		$.post(
			'<?php echo U("ShopCart/writeNum");?>',
			{id:id,num:num},
			function (data) { 
				//待判断
				if (data == 1) { 

					that.val(1);

				}
			}	
		);

		sum(id,that);
		count();
		
	});

	function sum(id, who) { 

		$.post(
			'<?php echo U("ShopCart/sum");?>',
			{id:id},
			function (data) { 

				$(who).parent().parent().next().html(data);
			}
		);
	}

	function count() { 

		var idArr = [];
		$('.w_cart_table').find('.Jcki:checked').each(function (i) { 

			idArr[i] = $(this).parent().parent().attr('data-id');
		});
		$.post(
			'<?php echo U("ShopCart/count");?>',
			{'idarr[]':idArr},
			function (data) { 

				$('#Jfinal').html('¥'+ data + '.00');
			}
		);
	}

	$('#ShopCart').submit(function () { 

		var idArr = [];

		$('.w_cart_table').find('.Jcki:checked').each(function (i) { 

			idArr[i] = $(this).parent().parent().attr('data-id');

		});

		if (idArr == '' || idArr == undefined) { 

			$('.tip').slideDown(1500,'linear',function () { 

				$(this).slideUp(1500,'swing');

			});

			return false;

		}
	});

	$(function () { 
		var total = 0;
		$('td.p-inventory').each(function () { 

			total += parseInt($(this).html());
			// console.log($(this).html());
		});

		$('#Jfinal').html('¥' + total + '.00');
	});
</script>