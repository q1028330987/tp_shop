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
<!-- 加载dropzone默认样式 -->
<link rel="stylesheet" href="/gitHub/tp_shop/object/Public/dropzone/dropzone.css" />
</head>
<body>
<div class="page-container">
	<form action="<?php echo U('Goods/product_add');?>" method="post" class="form form-horizontal" id="form-article-add" enctype="multipart/form-data">
        <input type="hidden" name="gid" value="<?php echo ($cid); ?>">
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">CPU：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="高通骁龙MSM8996/骁龙820" id="" name="cpu">

            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">内存(运行内存)：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="6GB RAM（因为安装操作系统占据了部分运存空间，实际可用运存小于6G）" id="" name="memory">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">ROM：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="128GB ROM，（不支持T卡扩展）注：由于手机系统和预装的程序占据了部分存储空间，实际可用存储空间小于128G" id="" name="rom">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">系统：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="Funtouch OS 3.0(基于Android 6.0.1)
" id="" name="system">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">屏幕尺寸：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="5.46英寸" id="" name="size">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">屏幕分辨率：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="2560*1440" id="" name="ratio">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">PPI：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="537" id="" name="ppi">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">机身厚度：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="8.25mm" id="" name="heights">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">电池：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="一体式内置电池" id="" name="cell">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">容量：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="4080mAh" id="" name="capacity">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">连接支持：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="wifi、蓝牙4.2、USB2.0、GPS定位、OTG" id="" name="support">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">功能特色：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="全曲面设计，后置双摄，专业虚化，4080mAh大电池+双引擎闪充，分屏多任务，应用分身" id="" name="feature">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">摄像头类型：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="后置双摄+前置" id="" name="camera_type">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">摄像头：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="前置1600W/后置（1200W+500W）" id="" name="camera">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">视频拍摄：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="支持" id="" name="videos">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">标配：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="主机 *1
取卡针 *1
有线耳机 *1
9V2.0A闪充充电头 *1
micro USB数据线
保护壳 *2
快速入门指南 *1
重要信息和保修卡" id="" name="mark">
            </div>
        </div>
        <div class="row fill"></div>
            <div class="row">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>图片上传：</label>
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                    <div class="dropzone" style="width:100%px;">
                        <p align="center">请将图片拖到这里</p>
                    </div>
               </div>
            </div>
        </foreach>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2"><br />
				<button class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存并提交审核</button>
				<button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
			</div>
		</div>
	</form>
</div>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/gitHub/tp_shop/object/Public/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/gitHub/tp_shop/object/Public/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/gitHub/tp_shop/object/Public/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/gitHub/tp_shop/object/Public/static/h-ui.admin/js/H-ui.admin.js"></script>
<!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/gitHub/tp_shop/object/Public/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/gitHub/tp_shop/object/Public/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/gitHub/tp_shop/object/Public/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/gitHub/tp_shop/object/Public/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<!-- <script type="text/javascript" src="/gitHub/tp_shop/object/Public/lib/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" src="/gitHub/tp_shop/object/Public/lib/ueditor/1.4.3/ueditor.all.min.js"> </script>
<script type="text/javascript" src="/gitHub/tp_shop/object/Public/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script> -->
<!-- 加载dropzone的js -->
<script src="/gitHub/tp_shop/object/Public/dropzone/dropzone.js"></script>
<script type="text/javascript">
//使用dropzone.js
        Dropzone.autoDiscover = false;//防止报"Dropzone already attached."的错误


        $(".dropzone").dropzone({

            //请求一个PHP来做上传
            url: "/gitHub/tp_shop/object/index.php/Admin/Goods/dropzoneUpload/",

            //是否显示删除图片按钮
            addRemoveLinks: true,

            //删除按钮样子
            dictRemoveLinks: "x",

            //取消上传样式
            dictCancelUpload: "x",

            //<input type="text" name="imgs">
            paramName:"imgs",//$_FILES['imgs']
            dictDefaultMessage: "单次最多可选20张",
            dictRemoveFile: "点击删除",


            //最大文件上传数
            maxFiles: 20,

            //文件的大小,单位M
            maxFilesize: 5,

            //可以上传哪些类型
            acceptedFiles: "image/*",//  'video/*' 上传视频
            init: function() {

                //res为服务器响应回来的数据
                //res 是php返回文件信息
                //file 是一个dropzone提供一个属性，这个属性可以在dropzone所有方法都使用
                this.on("success", function(file, res) {


                    // console.log(file);
                    console.log(res);
                    console.log(typeof res);//string

                    var obj = JSON.parse(res);


                    //res为dropzone.js返回的图片路经



                    //拿到图片路径
                    var filePath = obj['details'].savepath + obj['details'].savename;
                    file.path = filePath;


                    if( obj.status == 200 ){

                     //将服务器得到的数据生成一个隐藏域。做商品添加的时候就可以获取到了
                        var input = '<input type="hidden" name="imgs[]" value="'+filePath+'"/>';

                        $('.form-horizontal').append(input);

                    }else{
                        alert('上传失败');
                    }

                    // console.log(filePath);


                });


                //每次删除图片都会触发这个方法
                this.on("removedfile", function(file) {

                   $.ajax({
                      url: "/gitHub/tp_shop/object/index.php/Admin/Goods/dropzoneDelete/",
                      type: "post",

                      //file.path可以获取到点击删除按钮的那张图片
                      data: { 'path': file.path },
                      success:function (data) {

                        // console.log(file.path);
                        // var obj = JSON.parse(file.path);
                        $("input[value='"+file.path+"']").remove();

                      },
                      dataType:'json'
                    });
                });

            }
        });


// $(function(){
	// var ue = UE.getEditor('editor');
// });
</script>
</body>
</html>