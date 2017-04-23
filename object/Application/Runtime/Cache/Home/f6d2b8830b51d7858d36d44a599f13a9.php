<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>测试商品页面</title>
</head>
<body>
	<div class="tip" style="width:100%;height:30px;background:green;position:fixed;top:0px;text-align:center;display:none"> 
		<span>商品已加入购物车</span>
	</div>
	<table width="400" border="1">
		<tr>
			<th>序号</th>
			<th>商品名称</th>
			<th>价格</th>
			<th>操作</th>
		</tr>
		<?php if(is_array($goods)): foreach($goods as $key=>$v): ?><tr>
			<td><?php echo ($v["id"]); ?></td>
			<td><?php echo ($v["name"]); ?></td>
			<td><?php echo ($v["price"]); ?></td>
			<td>
				<a href="<?php echo U('ShopCart/buyRightNow');?>?id=<?php echo ($v["id"]); ?>">立即购买</a>
				<a href="javascript:;" onclick="addSession(this)">加入购物车</a>
				<!-- <?php echo U('ShopCart/addSession');?>?id=<?php echo ($v["id"]); ?> -->
			</td>
		</tr><?php endforeach; endif; ?>
	</table>
</body>
</html>

<script src="/gitHub/tp_shop/object/Public/js/jquery-1.8.3.min.js"></script>
<script>
		function addSession(who) { 

			// console.log( $(who).parent().parent().children().first().html() );

			$.post( 
				"<?php echo U('ShopCart/addShopCart');?>",
				{id:$(who).parent().parent().children().first().html()},
				function (data) { 

					if (data == '1') { 

						$('.tip').slideDown(1500,'linear',function () { 
							$(this).slideUp(1500,'swing');
						});

					}
				}
			);
		}
</script>