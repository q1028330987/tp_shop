<?php if (!defined('THINK_PATH')) exit();?><!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/gitHub/tp_shop/object/Public/lib/html5shiv.js"></script>
<script type="text/javascript" src="/gitHub/tp_shop/object/Public/lib/respond.min.js"></script>

<![endif]-->
<link rel="stylesheet" type="text/css" href="/gitHub/tp_shop/object/Public/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/gitHub/tp_shop/object/Public/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/gitHub/tp_shop/object/Public/lib/Hui-iconfont/1.0.8/iconfont.css" />

<link rel="stylesheet" type="text/css" href="/gitHub/tp_shop/object/Public/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/gitHub/tp_shop/object/Public/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/gitHub/tp_shop/object/Public/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->

<link href="/gitHub/tp_shop/object/Public/lib/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/gitHub/tp_shop/object/Public/lib/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
<div class="page-container">
	<form action="<?php echo U('Goods/updateGoods');?>" method="post" class="form form-horizontal" id="form-article-add" enctype="multipart/form-data">
        <input type="hidden" name="gid" value="<?php echo ($id); ?>">

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>商品名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($goodsInfo['name']); ?>" placeholder="" id="" name="name">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>分类栏目：</label>
			<div class="formControls col-xs-8 col-sm-9">
                <select name="tid" class="select">
                    <option value="0">--请选择--</option>
                    <?php if(is_array($types)): foreach($types as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>" <?php echo ($goodsInfo['tid'] == $v['id'] ? 'selected' : ''); ?>><?php echo ($v["name"]); ?></option><?php endforeach; endif; ?>
				</select>
				</span> </div>
		</div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>商品库存：</label>
            <div class="formControls col-xs-8 col-sm-9">
            <!-- <input type="hidden" name="id" id="id"> -->
            <ol>
            <?php if(is_array($stockInfo)): foreach($stockInfo as $key=>$v): ?><li>
                    <select style="width:200;" name="colors[]">
                        <option value="0" <?php echo ($v['colors'] == '0' ? 'selected': ''); ?>>香槟金</option>
                        <option value="1" <?php echo ($v['colors'] == '1' ? 'selected': ''); ?>>磨砂黑</option>
                        <option value="2" <?php echo ($v['colors'] == '2' ? 'selected': ''); ?>>玫瑰金</option>
                        <option value="3" <?php echo ($v['colors'] == '3' ? 'selected': ''); ?>>流光白</option>
                        <option value="4" <?php echo ($v['colors'] == '4' ? 'selected': ''); ?>>星空灰</option>
                        <option value="5" <?php echo ($v['colors'] == '5' ? 'selected': ''); ?>>其他</option>
                    </select>
                    <i>&nbsp;&nbsp;::&nbsp;&nbsp;</i>
                    <select style="width:200;" name="capacity[]">
                        <option value="0" <?php echo ($v['capacity'] == '0' ? 'selected': ''); ?>>16G</option>
                        <option value="1" <?php echo ($v['capacity'] == '1' ? 'selected': ''); ?>>32G</option>
                        <option value="2" <?php echo ($v['capacity'] == '2' ? 'selected': ''); ?>>64G</option>
                        <option value="3" <?php echo ($v['capacity'] == '3' ? 'selected': ''); ?>>128G</option>
                        <option value="4" <?php echo ($v['capacity'] == '4' ? 'selected': ''); ?>>其他</option>
                    </select>
                    <i>&nbsp;&nbsp;::&nbsp;&nbsp;</i>
                    库存：<input type="text" name="stock[]" value="<?php echo ($v["stock"]); ?>">&nbsp;&nbsp;&nbsp;
                    <button type="button" id="btn1">➕</button>
                </li><?php endforeach; endif; ?>
            </ol>
            </div>
        </div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>商品价格：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($goodsInfo['price']); ?>" placeholder="" id="" name="price">
			</div>
		</div>
		<div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>商品状态：</label>
            <div class="formControls col-xs-8 col-sm-9">

                上架 <input type="radio" name="status" <?php echo ($goodsInfo['status'] == '1' ? "checked='true'" : ''); ?> value="1">&nbsp;/
                下架 <input type="radio" name="status" <?php echo ($goodsInfo['status'] == '2' ? "checked='true'" : ''); ?> value="2">&nbsp;/
                仓库中 <input type="radio" name="status" <?php echo ($goodsInfo['status'] == '0' ? "checked='true'" : ''); ?> value="0">
            </div>

        </div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>缩略图：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<div class="uploader-thum-container">
					<div id="fileList" class="uploader-list"></div>
                    <img src="/gitHub/tp_shop/object/Public<?php echo ($goodsInfo['pic']); ?>" style="width: 80px;height: 100px;border 1px soild;">
                    <input name="pic" class="text" style="width:150px" type="file" size="40" />
				</div>
			</div>
		</div>
        <div class="row fill"></div>
            <div class="row">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>商品描述：</label>
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                <script id="editor" type="text/plain" style="width:100%px;height:300px;"><?php echo ($goodsInfo['des']); ?></script>
               </div>
            </div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2"><br />
				<button class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i>&nbsp;&nbsp;修改&nbsp;&nbsp;</button>
				<button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
			</div>
		</div>
	</form>
</div>

<!--_footer 作为公共模版分离出去-->
<!-- <script src="/gitHub/tp_shop/object/Public/lib/jquery-3.1.1.js"></script> -->

<script type="text/javascript" src="/gitHub/tp_shop/object/Public/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/gitHub/tp_shop/object/Public/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/gitHub/tp_shop/object/Public/static/h-ui.admin/js/H-ui.admin.js"></script>
<!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/gitHub/tp_shop/object/Public/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/gitHub/tp_shop/object/Public/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/gitHub/tp_shop/object/Public/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/gitHub/tp_shop/object/Public/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript" src="/gitHub/tp_shop/object/Public/lib/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" src="/gitHub/tp_shop/object/Public/lib/ueditor/1.4.3/ueditor.all.min.js"> </script>
<script type="text/javascript" src="/gitHub/tp_shop/object/Public/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
<!-- <script src="/gitHub/tp_shop/object/Public/lib/jquery-3.1.1.js"></script> -->
<script type="text/javascript">

// $(function(){
	var ue = UE.getEditor('editor');
// });


$(document).ready(function(){

    $("#btn1").click(function(){
        $("ol").after("<li style='list-style:none;'><select style='width:200' name='colors[]'><option value='1'>香槟金</option><option value='2'>磨砂黑</option><option value='3'>玫瑰金</option><option value='4'>流光白</option><option value='5'>星空灰</option><option value='0'>其他</option></select><i>&nbsp;&nbsp;&nbsp;::&nbsp;&nbsp;&nbsp;</i><select style='width:200' name='capacity[]'><option value='1'>16G</option><option value='2'>32G</option><option value='3'>64G</option><option value='4'>128G</option><option value='0'>其他</option></select><i>&nbsp;&nbsp;&nbsp;::&nbsp;&nbsp;&nbsp;</i>库存：<input type='text' name='stock[]'>&nbsp;&nbsp;&nbsp;&nbsp;<button type=button id='btn2' onClick='res(this)'>➖</button></li>");

    });


});


function res(obj){
    // alert(1);
            obj.parentNode.remove();
        }
</script>
</body>
</html>