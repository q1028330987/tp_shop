<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>测试商品页面</title>
</head>
<body>
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
			<td>SB</td>
		</tr><?php endforeach; endif; ?>
	</table>
</body>
</html>