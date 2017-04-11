<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5shiv.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/gz25/vivo/tp_shop/object/Public/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/gz25/vivo/tp_shop/object/Public/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/gz25/vivo/tp_shop/object/Public/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/gz25/vivo/tp_shop/object/Public/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/gz25/vivo/tp_shop/object/Public/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>分类编辑</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 产品管理 <span class="c-gray en">&gt;</span> 品牌管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="text-c">
		<form class="Huiform" method="post" action="<?php echo U('Type/update');?>">
            <input type="text" class="small" name="name" value="<?php echo ($typeInfo['name']); ?>">
            <input type="text" class="small" name="title" value="<?php echo ($typeInfo['title']); ?>">
            <select class="small" name="pid">
                <option value="0">请选择</option>
                <?php if(is_array($types)): foreach($types as $key=>$v): ?><option value="<?php echo ($v['id']); ?>" <?php if($typeInfo['pid'] == $v['id']): ?>selected="selected"<?php endif; ?>><?php echo ($v['name']); ?></option><?php endforeach; endif; ?>
            </select>
            <div class="mws-button-row">
            <!-- 超全局变量的获取  $Think.cookie 没有s -->
                <input type="hidden" name="id" value="<?php echo ($_GET['id']); ?>">
                <input type="submit" class="btn btn-danger" value="更新">
                <input type="reset" class="btn " value="重置">
            </div>
        </form>
	</div>

</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/gz25/vivo/tp_shop/object/Public/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/gz25/vivo/tp_shop/object/Public/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/gz25/vivo/tp_shop/object/Public/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/gz25/vivo/tp_shop/object/Public/static/h-ui.admin/js/H-ui.admin.js"></script>
<!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/gz25/vivo/tp_shop/object/Public/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/gz25/vivo/tp_shop/object/Public/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/gz25/vivo/tp_shop/object/Public/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
$('.table-sort').dataTable({
	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
	"bStateSave": true,//状态保存
	"aoColumnDefs": [
	  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
	  {"orderable":false,"aTargets":[0,6]}// 制定列不参与排序
	]
});
</script>
</body>
</html>