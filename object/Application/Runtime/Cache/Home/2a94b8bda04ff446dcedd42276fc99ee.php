<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0035)https://shop.vivo.com.cn/index.html -->
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <title>vivo智能手机官方商城</title>
    <meta name="keywords" content="vivo智能手机官方商城">
    <meta name="description" content="vivo智能手机官方商城">
    <!-- <link rel="shortcut icon" href="https://swsdl.vivo.com.cn/vivoshop/web/dist/img/favicon_7761e1f.ico"> -->

    <link href="/gitHub/tp_shop/object/Public/css/global_79a0974.css" rel="stylesheet" type="text/css">
    <link href="/gitHub/tp_shop/object/Public/css/layout_3a0d4d9.css" rel="stylesheet" type="text/css">
    <!-- <link href="/gitHub/tp_shop/object/Public/css.css" rel="stylesheet" type="text/css"> -->


    <link href="/gitHub/tp_shop/object/Public/css/dialog_523c50b.css" rel="stylesheet" type="text/css">
    <link href="/gitHub/tp_shop/object/Public/css/home_d854362.css" rel="stylesheet" type="text/css">

    <script src="/gitHub/tp_shop/object/Public/js/hm.js" async=""></script><script type="text/javascript" src="/gitHub/tp_shop/object/Public/js/065f0df8c3a79510e698e5de40c8fb71.js"></script><!--[if lt IE 9]>
    <script src="https://swsdl.vivo.com.cn/vivoshop/web/dist/js/bower_components/html5shiv/dist/html5shiv.min_23e126e.js"></script>
    <![endif]-->

<style type="text/css">#waf_nc_block {position: fixed;_position: absolute;width: 100%;height: 100%;top: 0;bottom: 0;left: 0;z-index: 9999;}.waf-nc-mask {background: #f8f8f8;opacity: 0.5;filter:alpha(opacity=50); width: 100%;height: 100%;} .waf-nc-wrapper {width:480px; height:254px; position: absolute; top: 50%; left: 50%; margin-top: -127px; margin-left: -240px; margin-bottom: 16px; background:#ffffff; border:3px solid #00A2CA;} .waf-nc-icon {position: absolute;top: 18px;left: 20px;} .waf-nc-title {margin-top: 23px; margin-left: 47px; font-size:16px; color:#333333; line-height:10px; text-align:left;} .waf-nc-splitter {margin-left: 26px; margin-top: 5px; width:430px; height:0px; border:1px solid #f4f4f4; } .waf-nc-description { margin-top: 22px; margin-left: 23px; font-size:12px; color:#333333; text-align: left; } #nocaptcha { margin-top: 20px; margin-left: 92px; width:300px; height36px;}</style><script src="/gitHub/tp_shop/object/Public/js/nc.js"></script>
<style>
</style>
</head>
<body class="">
<header id="header">
    <div class="head-search">
        <div class="search-box">
        	<form action="<?php echo U('Paging/paging');?>" method="post" onsubmit="if ($.trim($(this).find('input').val()) == '') {alert('请输入关键词'); return false;} return true;"><input type="text" autocomplete="off" name="searchKeywordStr" maxlength="20" placeholder="如:x9"><button type="submit">搜索</button></form><a class="close"></a>
        </div>
    </div>
    <div class="wrapper">
        <nav id="navigator" class="cl">
        	<a href="<?php echo U('Index/index');?>" class="vivo-logo"><img src="/gitHub/tp_shop/object/Public/Home/Index/vivo-logo_865fdf1.png" alt="vivo智能手机官方网站"></a>
            <ul class="cl">
                <li><a href="<?php echo U('Paging/paging');?>">手机</a></li>
                <li><a href="<?php echo U('Parts/parts');?>">配件</a></li>
                <li><a href="#">服务</a></li>
            </ul>
            <div class="search-user">
                <ul class="top-quick-menu">
                    <li id="j_SearchTrigger" class="search"><a href="javascript:void(0)" rel="nofollow"><b></b></a></li>
                    <li id="j_UserMenuTrigger">
                    	<a href="<?php echo U('Personal/personalpage');?>" class="user"><b></b></a>
                    </li>
                    <li><a href="<?php echo U('ShopCart/show');?>" class="shoppingcart"><b></b><span class="shopcart-num">0</span></a></li>
                </ul>
            </div>
        </nav>
    </div>
</header><div id="content" class="cl">
<div id="j_HomeBanner" class="home-banner">
    <ul class="container">
    <?php if($wheel != 0): if(is_array($wheel)): foreach($wheel as $k=>$v): ?><li class="banner-item" style="z-index: 1; opacity: 1; display: none;">
            <div class="structure-module full">
                <div class="sm-wrapper">
                    <img class="j_bgImage" data-ratio="1.92" src="/gitHub/tp_shop/object/Public<?php echo ($v["pic"]); ?>" usemap="#Mmodule_1491356619865" title="<?php echo ($v["title"]); ?>">

                </div>
            </div>
            </li><?php endforeach; endif; endif; ?>
    <!-- <?php if($wheel != 0): if(is_array($wheel)): foreach($wheel as $k=>$v): ?><li class="banner-item" style="display: none; z-index: 1; opacity: 1;">
                <a class="banner-link" target="_blank" href="http://shop.vivo.com.cn/product/9958">&nbsp;</a>
                <div class="structure-module full">
                    <div class="sm-wrapper">
                        <img class="j_bgImage" data-ratio="1.92" src="/gitHub/tp_shop/object/Public<?php echo ($v["pic"]); ?>" usemap="#Mmodule_1491362084692">

                    </div>
                </div>
            </li><?php endforeach; endif; endif; ?> -->
            <!-- <li class="banner-item instage" style="display: block; z-index: 1; opacity: 1;">
                <a class="banner-link" target="_blank" href="https://shop.vivo.com.cn/product/9948">&nbsp;</a>
                <div class="structure-module full">
                    <div class="sm-wrapper">
                        <img class="j_bgImage" data-ratio="1.92" src="/gitHub/tp_shop/object/Public/Home/Index/20170401095826952595_original.jpg" usemap="#Mmodule_1491011916628">

                    </div>
                </div>
            </li> -->
            <!-- <li class="banner-item" style="display: block; z-index: 9; opacity: 0.864484;">
                <a class="banner-link" target="_blank" href="https://shop.vivo.com.cn/sp/20170329">&nbsp;</a>
                <div class="structure-module full">
                    <div class="sm-wrapper">
                        <img class="j_bgImage" data-ratio="1.92" src="/gitHub/tp_shop/object/Public/Home/Index/20170405102540996548_original.jpg" usemap="#Mmodule_1491359141537">

                    </div>
                </div>
            </li> -->
    </ul>
    <div id="j_bannerIndicator" class="indicator">

    </div>
</div>
<div class="home-content-wrapper">
    <div class="structure-module full">
    <div class="sm-wrapper">
        <img class="j_bgImage" data-ratio="1.92" src="/gitHub/tp_shop/object/Public/Home/Index/20170401195746631209_original.gif" usemap="#Mmodule_1491047892085">
        <map class="j_map" name="Mmodule_1491047892085"><area class="j_link" data-coords="223,3,346,209" coords="428.15999999999997,5.76,664.3199999999999,401.28" href="https://shop.vivo.com.cn/lottery?uuid=af66810a-ba70-4df9-a162-597cfcc5f3c3" target="_blank"></map>
    </div>
</div>
<!-- <div class="structure-module full">
    <div class="sm-wrapper">
        <img class="j_bgImage" data-ratio="1.92" src="/gitHub/tp_shop/object/Public/Home/Index/20170401195822489341_original.gif" usemap="#Mmodule_1491047909236">
        <map class="j_map" name="Mmodule_1491047909236"><area class="j_link" data-coords="523,174,623,224" coords="1004.16,334.08,1196.1599999999999,430.08" href="https://shop.vivo.com.cn/product/9948" target="_blank"><area class="j_link" data-coords="630,176,730,226" coords="1209.6,337.91999999999996,1401.6,433.91999999999996" href="http://shop.vivo.com.cn/product/9957" target="_blank"><area class="j_link" data-coords="193,73,514,313" coords="370.56,140.16,986.88,600.9599999999999" href="https://shop.vivo.com.cn/product/9948" target="_blank"></map>
    </div>
</div><div class="structure-module full">
    <div class="sm-wrapper">
        <img class="j_bgImage" data-ratio="2.18" src="/gitHub/tp_shop/object/Public/Home/Index/20170401195836620431_original.gif" usemap="#Mmodule_1491047927045">
        <map class="j_map" name="Mmodule_1491047927045"><area class="j_link" data-coords="194,23,718,223" coords="422.92,50.14,1565.24,486.14000000000004" href="https://shop.vivo.com.cn/product/9966" target="_blank"><area class="j_link" data-coords="202,239,728,459" coords="440.36,521.02,1587.0400000000002,1000.6200000000001" href="https://shop.vivo.com.cn/product/9958" target="_blank"></map>
    </div>
</div><div class="structure-module full">
    <div class="sm-wrapper">
        <img class="j_bgImage" data-ratio="2.61" src="/gitHub/tp_shop/object/Public/Home/Index/20170401195853658929_original.gif" usemap="#Mmodule_1491047936286">
        <map class="j_map" name="Mmodule_1491047936286"><area class="j_link" data-coords="162,135,262,185" coords="422.82,352.34999999999997,683.8199999999999,482.84999999999997" href="https://shop.vivo.com.cn/product/9938" target="_blank"><area class="j_link" data-coords="269,136,369,186" coords="702.0899999999999,354.96,963.0899999999999,485.46" href="https://shop.vivo.com.cn/product/9967" target="_blank"><area class="j_link" data-coords="374,52,597,262" coords="976.14,135.72,1558.1699999999998,683.8199999999999" href="https://shop.vivo.com.cn/product/9967" target="_blank"><area class="j_link" data-coords="168,272,614,470" coords="438.47999999999996,709.92,1602.54,1226.7" href="https://shop.vivo.com.cn/product/9964" target="_blank"></map>
    </div>
</div> -->
<!-- <div class="structure-module full">
    <div class="sm-wrapper">
        <img class="j_bgImage" data-ratio="1.92" src="/gitHub/tp_shop/object/Public/Home/Index/20170401195907690676_original.gif" usemap="#Mmodule_1491047979264">
        <map class="j_map" name="Mmodule_1491047979264"><area class="j_link" data-coords="179,86,501,342" coords="343.68,165.12,961.92,656.64" href="https://shop.vivo.com.cn/product/9937" target="_blank"><area class="j_link" data-coords="512,87,817,342" coords="983.04,167.04,1568.6399999999999,656.64" href="https://shop.vivo.com.cn/product/125" target="_blank"></map>
    </div>
</div> -->
<!-- <div class="structure-module full">
    <div class="sm-wrapper">
        <img class="j_bgImage" data-ratio="1.92" src="/gitHub/tp_shop/object/Public/Home/Index/20170405101641999849_original.jpg" usemap="#Mmodule_1491358602318">
        <map class="j_map" name="Mmodule_1491358602318"><area class="j_link" data-coords="659,261,776,416" coords="1265.28,501.12,1489.9199999999998,798.72" href="https://shop.vivo.com.cn/product/111" target="_blank">
        <area class="j_link" data-coords="510,258,633,414" coords="979.1999999999999,495.35999999999996,1215.36,794.88" href="https://shop.vivo.com.cn/product/9989" target="_blank"><area class="j_link" data-coords="369,257,490,415" coords="708.48,493.44,940.8,796.8" href="https://shop.vivo.com.cn/product/208" target="_blank"><area class="j_link" data-coords="229,256,352,412" coords="439.68,491.52,675.8399999999999,791.04" href="https://shop.vivo.com.cn/product/249" target="_blank"><area class="j_link" data-coords="655,72,776,238" coords="1257.6,138.24,1489.9199999999998,456.96" href="https://shop.vivo.com.cn/product/172" target="_blank"><area class="j_link" data-coords="506,74,633,238" coords="971.52,142.07999999999998,1215.36,456.96" href="https://shop.vivo.com.cn/product/9943" target="_blank"><area class="j_link" data-coords="369,68,496,236" coords="708.48,130.56,952.3199999999999,453.12" href="https://shop.vivo.com.cn/product/9990" target="_blank"><area class="j_link" data-coords="228,68,354,236" coords="437.76,130.56,679.68,453.12" href="https://shop.vivo.com.cn/product/9962" target="_blank"><area class="j_link" data-coords="412,427,609,475" coords="791.04,819.8399999999999,1169.28,912" href="https://shop.vivo.com.cn/product/parts" target="_blank"></map>
    </div>
</div> -->
<div class="structure-module full">
    <div class="sm-wrapper">
        <img class="j_bgImage" data-ratio="1.92" src="/gitHub/tp_shop/object/Public/Home/Index/20170401200000427508_original.gif" usemap="#Mmodule_1491048002984">

    </div>
</div>
</div>
</div>
<footer id="footer">
    <div class="shop-agree">
        <div class="wrapper cl">
            <ul class="cl">
                <li><a href="#" target="_blank">
                    <b class="b1"></b>
                    <p><span>0</span>运费购手机</p></a>
                </li>
                <li><a href="#" target="_blank">
                    <b class="b2"></b>
                    <p><span>30</span>天无理由退换货</p></a>
                </li>
                <li><a href="#" target="_blank">
                    <b class="b3"></b>
                    <p>电子发票</p></a>
                </li>
                <li class="shop-agree-last"><a href="#" target="_blank">
                    <b class="b4"></b>
                    <p><span>480</span>余家售后服务中心</p></a>
                </li>
            </ul>
        </div>
    </div>


    <div class="shop-help">
        <div class="wrapper cl">
            <dl>
                <dt><b class="b1"></b>购买流程</dt>
                <dd><a href="#" target="_blank">· 支付宝支付</a></dd>
                <dd><a href="#" target="_blank">· 发票说明</a></dd>
                <dd><a href="#" target="_blank">· 优惠券说明</a></dd>
                <dd><a href="#" target="_blank">· 花呗分期</a></dd>
            </dl>
            <dl>
                <dt><b class="b2"></b>配送方式</dt>
                <dd><a href="#" target="_blank">· 配送方式</a></dd>
                <dd><a href="#" target="_blank">· 配送费用</a></dd>
                <dd><a href="#" target="_blank">· 签收须知</a></dd>
            </dl>
            <dl>
                <dt><b class="b3"></b>服务支持</dt>
                <dd><a href="#" target="_blank">· 服务保证</a></dd>
                <dd><a href="#" target="_blank">· 售后服务</a></dd>
                <dd><a href="#" target="_blank">· 售后网点查询</a></dd>
                <dd><a href="#" target="_blank">· 碎屏宝</a></dd>
                <dd><a href="#" target="_blank">· 手机延保</a></dd>
            </dl>
            <dl>
                <dt><b class="b4"></b>品牌服务</dt>
                <dd><a href="#" target="_blank">· 常见问题</a></dd>
                <dd><a href="#" target="_blank">· 相关下载</a></dd>
                <dd><a href="#" target="_blank">· 联系我们</a></dd>
            </dl>
            <dl class="shop-help-last">
                <dt><b class="b5"></b>小V在线时段</dt>
                <dd>周一至周五 08:00-21:00</dd>
                <dd>周六、周日 09:00-18:00</dd>
                <dd class="online-service">
                    <a target="_blank" href="http://crm2.qq.com/page/portalpage/wpa.php?uin=4007161118&amp;aty=0&amp;a=0&amp;curl=&amp;ty=1"><img class="lazy" data-src="https://swsdl.vivo.com.cn/vivoshop/web/dist/img/common/online-service_1e5d0b6.png" src="/gitHub/tp_shop/object/Public/Home/Index/online-service_1e5d0b6.png" style="display: inline;"></a>
                </dd>
            </dl>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="wrapper cl">
            <div class="sns-box">
                成为vivo粉丝:<a href="#" target="_blank" class="sina"><b></b></a>
                <a href="#" target="_blank" class="tencent"><b></b></a>
                <a href="#" target="_blank" class="renren"><b></b></a>
                <a href="javascript:;" class="weixin"><b></b><div class="vivo-weixin-overbox"><img src="/gitHub/tp_shop/object/Public/Home/Index/vivo-weixin-ico_f8c8800.jpg"><b></b></div></a>
            </div>
            <div class="copy-info">
                <a href="#" class="footer-logo"></a>Copyright ©2011-2016 广东步步高电子工业有限公司<br>版权所有 保留一切权利粤B2-20080267 | <a href="#" target="_blank">粤ICP备05100288号</a>
            </div>
        </div>
    </div>
</footer>
<div id="side-bar">
    <ul>
        <li><a class="service" id="J_online-service" target="_blank" href="#"></a></li>
        <li>
            <a class="qrcode">
                <div class="qrcode-container">
                    <img src="/gitHub/tp_shop/object/Public/Home/Index/qrcode_6a6b792.png">
                    <p>支付宝扫码<br>关注享最新活动福利</p>
                </div>
            </a>
        </li>
        <li class="">
            <a class="feedback" id="J_feedback">
                <div class="feedback-container" id="J_feedback-container">
                    <span class="close" id="J_feedback-close"></span>
                    <p class="title">意见反馈</p>
                    <div class="problem-container">
                        <p id="J_feedback-typeDesc" class="problem">请选择问题类型</p>
                        <select id="J_feedback-typeSelect">
                            <option value="0" disabled="disabled" selected="selected">请选择问题类型</option>
                            <option value="1">购物流程（页面浏览、下单、支付等）</option>
                            <option value="2">服务问题（物流时效、客服态度、退换货、售后维修等）</option>
                            <option value="3">商品质量（手机、配件问题）</option>
                            <option value="4">优化建议（活动、服务、购物体验等）</option>
                            <option value="5">其他问题</option>
                        </select>
                    </div>
                    <textarea id="J_feedback-content" class="" maxlength="200" placeholder="请输入您的建议或具体问题，我们将不断改进。"></textarea>
                    <input id="J_feedback-contact" class="contact-way" type="text" maxlength="50" placeholder="邮箱或者vivo账户 （选填）">
                    <span id="J_feedback-kaptchaButton" class="change-code">看不清，换一张</span>
                    <img id="J_feedback-kaptchaImage" class="code">
                    <input id="J_feedback-securityCode" class="code-input" type="text" placeholder="输入右侧验证码">
                    <p id="J_feedback-validateMsg" class="error">请输入正确的信息</p>
                    <button id="J_feedback-submitButton">提交</button>
                </div>
            </a>
        </li>
        <li class="hide last" id="J_backtop" style="display: list-item;"><a class="backtop"></a></li>
    </ul>
</div><script>
    var webCtx = "";
    var passportLoginUrlPrefix = "https://passport.vivo.com.cn/v3/web/login/authorize?client_id=3&redirect_uri=";
</script>
<script src="/gitHub/tp_shop/object/Public/js/jquery.min_6163309.js"></script>
<script src="/gitHub/tp_shop/object/Public/js/jquery.cookie_a5283b2.js"></script>
<script src="/gitHub/tp_shop/object/Public/js/jquery.lazyload_546c1da.js"></script>
<script src="/gitHub/tp_shop/object/Public/js/jquery-placeholder_fb6154c.js"></script>
<script src="/gitHub/tp_shop/object/Public/js/vivo-common_38aa2f0.js"></script>
<script src="/gitHub/tp_shop/object/Public/js/dialog_6a2b3fb.js"></script>
<script src="/gitHub/tp_shop/object/Public/js/vivo-stat_265b49b.js"></script>
<script src="/gitHub/tp_shop/object/Public/js/login_confirm_485e7b4.js"></script>
<script src="/gitHub/tp_shop/object/Public/js/dialog_6a2b3fb.js"></script>
<script src="/gitHub/tp_shop/object/Public/js/jquery.validate.min_76c74f2.js"></script>
<script src="/gitHub/tp_shop/object/Public/js/index_0f7e03e.js"></script>
<script src="/gitHub/tp_shop/object/Public/js/index_e1bfc47.js"></script>

<script>
    //百度统计代码
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?0a38f90134ba281b974d46dfeec121e0";
        hm.async = true;
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>

<div style="height: 0px; width: 0px; overflow: hidden;"><object width="0" height="0" tabindex="-1" style="height:0;width:0;overflow:hidden;" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="https://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab" id="JSocket"><param name="allowScriptAccess" value="always"><param name="movie" value="https://aeu.alicdn.com/flash/JSocket.swf"> <embed src="https://aeu.alicdn.com/flash/JSocket.swf" name="JSocket" allowscriptaccess="always" type="application/x-shockwave-flash" pluginspage="https://www.adobe.com/go/getflashplayer_cn" width="0" height="0"></object></div><div id="waf_nc_block" style="display: none;"><div class="waf-nc-mask"></div><div id="WAF_NC_WRAPPER" class="waf-nc-wrapper"><img class="waf-nc-icon" src="/gitHub/tp_shop/object/Public/Home/Index/TB1_3FrKVXXXXbdXXXXXXXXXXXX-129-128.png" alt="" height="20" width="20"><p class="waf-nc-title">安全验证</p><div class="waf-nc-splitter"></div><p class="waf-nc-description">请完成以下验证后继续操作：</p><div id="nocaptcha"></div></div></div></body></html>