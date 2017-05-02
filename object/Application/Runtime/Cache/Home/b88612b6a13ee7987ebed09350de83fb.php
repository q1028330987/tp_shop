<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0027)http://shop.vivo.com.cn/my/ -->
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    
<title>个人资料</title>

    <meta name="keywords" content="vivo智能手机官方商城">
    <meta name="description" content="vivo智能手机官方商城">
    <link rel="shortcut icon" href="https://swsdl.vivo.com.cn/vivoshop/web/dist/img/favicon_7761e1f.ico">

    <link href="/gitHub/tp_shop/object/Public/Personal/global_79a0974.css" rel="stylesheet" type="text/css">
    <link href="/gitHub/tp_shop/object/Public/Personal/layout_3a0d4d9.css" rel="stylesheet" type="text/css">
    <link href="/gitHub/tp_shop/object/Public/Personal/dialog_523c50b.css" rel="stylesheet" type="text/css">
        <link href="/gitHub/tp_shop/object/Public/Personal/dialog_523c50b.css" rel="stylesheet" type="text/css">
        <link href="/gitHub/tp_shop/object/Public/Personal/member-info_23053c5.css" rel="stylesheet" type="text/css">
        <link href="/gitHub/tp_shop/object/Public/Personal/member-order_70818b2.css" rel="stylesheet" type="text/css">

    <link href="/gitHub/tp_shop/object/Public/Personal/member-center_3bb3bfe.css" rel="stylesheet" type="text/css">
    <link href="/gitHub/tp_shop/object/Public/Personal/member-index_45a1e7e.css" rel="stylesheet" type="text/css">
    <script src="/gitHub/tp_shop/object/Public/Personal/hm.js" async=""></script>
    <script type="text/javascript" src="/gitHub/tp_shop/object/Public/Personal/065f0df8c3a79510e698e5de40c8fb71.js"></script>
    <link href="/gitHub/tp_shop/object/Public/Personal/member-address_0ef63f5.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
    <script src="https://swsdl.vivo.com.cn/vivoshop/web/dist/js/bower_components/html5shiv/dist/html5shiv.min_23e126e.js"></script>
    <![endif]-->

<style type="text/css">#waf_nc_block {position: fixed;_position: absolute;width: 100%;height: 100%;top: 0;bottom: 0;left: 0;z-index: 9999;}.waf-nc-mask {background: #f8f8f8;opacity: 0.5;filter:alpha(opacity=50); width: 100%;height: 100%;} .waf-nc-wrapper {width:480px; height:254px; position: absolute; top: 50%; left: 50%; margin-top: -127px; margin-left: -240px; margin-bottom: 16px; background:#ffffff; border:3px solid #00A2CA;} .waf-nc-icon {position: absolute;top: 18px;left: 20px;} .waf-nc-title {margin-top: 23px; margin-left: 47px; font-size:16px; color:#333333; line-height:10px; text-align:left;} .waf-nc-splitter {margin-left: 26px; margin-top: 5px; width:430px; height:0px; border:1px solid #f4f4f4; } .waf-nc-description { margin-top: 22px; margin-left: 23px; font-size:12px; color:#333333; text-align: left; } #nocaptcha { margin-top: 20px; margin-left: 92px; width:300px; height36px;}</style><script src="/gitHub/tp_shop/object/Public/Personal/nc.js">
</script>
</head>
<body class="member-center">
<header id="header">
    <div class="head-search">
        <div class="search-box">
        	<form action="http://shop.vivo.com.cn/product/search" method="get"><input type="text" autocomplete="off" name="searchKeywordStr" maxlength="20" placeholder="如:x9"><button type="submit">搜索</button></form><a class="close"></a>
        </div>
    </div>
    <div class="wrapper">
        <nav id="navigator" class="cl">
        	<a href="<?php echo U('Index/Index');?>" class="vivo-logo"><img src="/gitHub/tp_shop/object/Public/Personal/vivo-logo_865fdf1.png" alt="vivo智能手机官方网站"></a>
            <ul class="cl">
                <li><a href="http://shop.vivo.com.cn/product/phone">手机</a></li>
                <li><a href="http://shop.vivo.com.cn/product/parts">配件</a></li>
                <!-- <li><a href="http://shop.vivo.com.cn/vcoins">V币商品</a></li> -->
                <li><a href="http://shop.vivo.com.cn/helpcenter/service-promise">服务</a></li>
<!--                 <li><a href="https://bbs.vivo.com.cn/" target="_blank">社区</a></li>
                <li><a href="https://www.vivo.com.cn/" target="_blank">官网</a></li> -->
            </ul>
            <div class="search-user">
                <ul class="top-quick-menu">
                    <li id="j_SearchTrigger" class="search"><a href="javascript:void(0)" rel="nofollow"><b></b></a></li>
                    <li id="j_UserMenuTrigger">
                    	<a href="<?php echo U('Personal/personalpage');?>" class="user"><b><img src="/gitHub/tp_shop/object/Public/Personal/small"></b></a>
                        <ul class="user-menu">
                        	<li class="member-center"><a href="<?php echo U('Personal/personalpage');?>"><i></i>个人中心</a><span class="icon-angular"></span></li>
                            <li class="my-order"><a href="<?php echo U('Personal/order');?>"><i></i>我的订单</a></li>
                            <li class="logout"><a href=""><i></i>退出登录</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo U('ShopCart/show');?>" class="shoppingcart"><b></b><span class="shopcart-num">0</span></a></li>
                </ul>
            </div>
        </nav>
    </div>
</header><div id="content" class="cl">
<div class="wrapper">
        <div class="crumbs">您的位置：<a href="<?php echo U('Index/Index');?>">首页</a><b></b>会员中心</div>
</div>
<div class="wrapper">
<aside class="menu-bar">
    <ul class="portrait-box">
        <li>
            <a href="<?php echo U('Personal/personmsg');?>" title="编辑资料">
            <img width="160" src="/gitHub/tp_shop/object/Public/Personal/big">
            </a>
        </li>
        <li class="mem-name member-menu-nickName"><i class="icon-mem"></i><?php echo (session('phone')); ?></li>
        <!-- <li class="vcoin-info">我的V币：<a href="http://shop.vivo.com.cn/my/vcoin"><span class="red member-vcoin-number">0</span></a> V币</li> -->
    </ul>
    <dl id="j_MyCenterMenus" class="menu">
        <dt class="menu-title"><i class="icon-deal"></i>交易管理</dt>
        <dd class="menu-item"><a href="<?php echo U('Personal/Order');?>">我的订单</a></dd>
        <!-- <dd class="menu-item"><a href="http://shop.vivo.com.cn/my/refund">退款/退货</a></dd> -->
        <!-- <dd class="menu-item"><a href="http://shop.vivo.com.cn/my/lottery">我的中奖</a></dd> -->
        <!-- <dd class="menu-item"><a href="http://shop.vivo.com.cn/my/exchange">我的兑换</a></dd> -->
        <dt class="menu-title"><i class="icon-evaluation"></i>评价管理</dt>
        <dd class="menu-item"><a href="<?php echo U('Personal/unremark');?>">未评价商品</a></dd>
        <dd class="menu-item"><a href="<?php echo U('Personal/remark');?>">我的评论</a></dd>
        <dt class="menu-title"><i class="icon-account"></i>我的账户</dt>
        <dd class="menu-item"><a href="<?php echo U('Personal/personmsg');?>">个人资料</a></dd>
        <dd class="menu-item"><a href="<?php echo U('Personal/orderaddress');?>">收货地址</a></dd>
        <!-- <dd class="menu-item"><a href="http://shop.vivo.com.cn/my/vcoin">我的V币</a></dd> -->
        <!-- <dd class="menu-item"><a href="http://shop.vivo.com.cn/my/coupon">我的优惠券</a></dd> -->
        <!-- <dd class="menu-item"><a href="http://shop.vivo.com.cn/my/favorite">我的收藏</a></dd> -->
    </dl>
</aside>  

<article class="content">

<dl>
    <dt class="module-title">个人资料</dt>
    <dd class="module-item">
        <input type="hidden" value="广东省" class="province">
        <input type="hidden" value="广州市" class="city">
        <input type="hidden" value="天河区" class="area">
        <form class="information-form" method="post" novalidate="novalidate" action="<?php echo U('Personal/personalmsgedit');?>">
        <table class="form-table">
            <colgroup>
                <col style="width: 150px;">
                <col>
            </colgroup>
            <tbody>
            <tr>
                <th>当前头像：</th>
                <td>
                    <img src="/gitHub/tp_shop/object/Public/Personal/big">
                </td>
            </tr>
            <tr>
                <th><span class="red">*</span>姓名：</th>
                <td><input type="text" class="user-name" placeholder="方便核对您的本人信息，不会对外公开" value="" name="name"></td>
            </tr>
            <tr>
                <th><span class="red">*</span>性别：</th>
                <td class="sex-box">
                    <label><input type="radio" name="sex" checked="true" value="1">男</label>
                    <label><input type="radio" name="sex" value="0">女</label>
                </td>
            </tr>
            <tr>
                <th><span class="red">*</span>生日：</th>
                <td>
                    <!-- <select id="dayType" name="typeCheck" aria-invalid="false" class="valid" aria-describedby="dayType-error"><option value="-1">请选择</option><option value="0">公历</option><option value="1">农历</option></select><span id="dayType-error" class="error-style" style="display: none;"></span> -->
                    <select id="year" aria-invalid="false" class="valid" style="display: inline-block;" name="year"><option value="1900">1900年</option><option value="1901">1901年</option><option value="1902">1902年</option><option value="1903">1903年</option><option value="1904">1904年</option><option value="1905">1905年</option><option value="1906">1906年</option><option value="1907">1907年</option><option value="1908">1908年</option><option value="1909">1909年</option><option value="1910">1910年</option><option value="1911">1911年</option><option value="1912">1912年</option><option value="1913">1913年</option><option value="1914">1914年</option><option value="1915">1915年</option><option value="1916">1916年</option><option value="1917">1917年</option><option value="1918">1918年</option><option value="1919">1919年</option><option value="1920">1920年</option><option value="1921">1921年</option><option value="1922">1922年</option><option value="1923">1923年</option><option value="1924">1924年</option><option value="1925">1925年</option><option value="1926">1926年</option><option value="1927">1927年</option><option value="1928">1928年</option><option value="1929">1929年</option><option value="1930">1930年</option><option value="1931">1931年</option><option value="1932">1932年</option><option value="1933">1933年</option><option value="1934">1934年</option><option value="1935">1935年</option><option value="1936">1936年</option><option value="1937">1937年</option><option value="1938">1938年</option><option value="1939">1939年</option><option value="1940">1940年</option><option value="1941">1941年</option><option value="1942">1942年</option><option value="1943">1943年</option><option value="1944">1944年</option><option value="1945">1945年</option><option value="1946">1946年</option><option value="1947">1947年</option><option value="1948">1948年</option><option value="1949">1949年</option><option value="1950">1950年</option><option value="1951">1951年</option><option value="1952">1952年</option><option value="1953">1953年</option><option value="1954">1954年</option><option value="1955">1955年</option><option value="1956">1956年</option><option value="1957">1957年</option><option value="1958">1958年</option><option value="1959">1959年</option><option value="1960">1960年</option><option value="1961">1961年</option><option value="1962">1962年</option><option value="1963">1963年</option><option value="1964">1964年</option><option value="1965">1965年</option><option value="1966">1966年</option><option value="1967">1967年</option><option value="1968">1968年</option><option value="1969">1969年</option><option value="1970">1970年</option><option value="1971">1971年</option><option value="1972">1972年</option><option value="1973">1973年</option><option value="1974">1974年</option><option value="1975">1975年</option><option value="1976">1976年</option><option value="1977">1977年</option><option value="1978">1978年</option><option value="1979">1979年</option><option value="1980">1980年</option><option value="1981">1981年</option><option value="1982">1982年</option><option value="1983">1983年</option><option value="1984">1984年</option><option value="1985">1985年</option><option value="1986">1986年</option><option value="1987">1987年</option><option value="1988">1988年</option><option value="1989">1989年</option><option value="1990">1990年</option><option value="1991">1991年</option><option value="1992">1992年</option><option value="1993">1993年</option><option value="1994">1994年</option><option value="1995">1995年</option><option value="1996">1996年</option><option value="1997">1997年</option><option value="1998">1998年</option><option value="1999">1999年</option><option value="2000">2000年</option><option value="2001">2001年</option><option value="2002">2002年</option><option value="2003">2003年</option><option value="2004">2004年</option><option value="2005">2005年</option><option value="2006">2006年</option><option value="2007">2007年</option><option value="2008">2008年</option><option value="2009">2009年</option><option value="2010">2010年</option><option value="2011">2011年</option><option value="2012">2012年</option><option value="2013">2013年</option><option value="2014">2014年</option><option value="2015">2015年</option><option value="2016">2016年</option><option value="2017">2017年</option><option value="2018">2018年</option><option value="2019">2019年</option><option value="2020">2020年</option><option value="2021">2021年</option><option value="2022">2022年</option><option value="2023">2023年</option><option value="2024">2024年</option><option value="2025">2025年</option><option value="2026">2026年</option><option value="2027">2027年</option><option value="2028">2028年</option><option value="2029">2029年</option><option value="2030">2030年</option><option value="2031">2031年</option><option value="2032">2032年</option><option value="2033">2033年</option><option value="2034">2034年</option><option value="2035">2035年</option><option value="2036">2036年</option><option value="2037">2037年</option><option value="2038">2038年</option><option value="2039">2039年</option><option value="2040">2040年</option><option value="2041">2041年</option><option value="2042">2042年</option><option value="2043">2043年</option><option value="2044">2044年</option><option value="2045">2045年</option><option value="2046">2046年</option><option value="2047">2047年</option><option value="2048">2048年</option><option value="2049">2049年</option><option value="2050">2050年</option><option value="2051">2051年</option><option value="2052">2052年</option><option value="2053">2053年</option><option value="2054">2054年</option><option value="2055">2055年</option><option value="2056">2056年</option><option value="2057">2057年</option><option value="2058">2058年</option><option value="2059">2059年</option><option value="2060">2060年</option><option value="2061">2061年</option><option value="2062">2062年</option><option value="2063">2063年</option><option value="2064">2064年</option><option value="2065">2065年</option><option value="2066">2066年</option><option value="2067">2067年</option><option value="2068">2068年</option><option value="2069">2069年</option><option value="2070">2070年</option><option value="2071">2071年</option><option value="2072">2072年</option><option value="2073">2073年</option><option value="2074">2074年</option><option value="2075">2075年</option><option value="2076">2076年</option><option value="2077">2077年</option><option value="2078">2078年</option><option value="2079">2079年</option><option value="2080">2080年</option><option value="2081">2081年</option><option value="2082">2082年</option><option value="2083">2083年</option><option value="2084">2084年</option><option value="2085">2085年</option><option value="2086">2086年</option><option value="2087">2087年</option><option value="2088">2088年</option><option value="2089">2089年</option><option value="2090">2090年</option><option value="2091">2091年</option><option value="2092">2092年</option><option value="2093">2093年</option><option value="2094">2094年</option><option value="2095">2095年</option><option value="2096">2096年</option><option value="2097">2097年</option><option value="2098">2098年</option><option value="2099">2099年</option><option value="2100">2100年</option></select>
                    <select id="month" aria-invalid="false" class="valid" style="display: inline-block;" name="month"><option value="1">1月</option><option value="2">2月</option><option value="3">3月</option><option value="4">4月</option><option value="5">5月</option><option value="6">6月</option><option value="7">7月</option><option value="8">8月</option><option value="9">9月</option><option value="10">10月</option><option value="11">11月</option><option value="12">12月</option></select>
                    <select id="day" aria-invalid="false" class="valid" style="display: inline-block;" name="day"><option value="1">1日</option><option value="2">2日</option><option value="3">3日</option><option value="4">4日</option><option value="5">5日</option><option value="6">6日</option><option value="7">7日</option><option value="8">8日</option><option value="9">9日</option><option value="10">10日</option><option value="11">11日</option><option value="12">12日</option><option value="13">13日</option><option value="14">14日</option><option value="15">15日</option><option value="16">16日</option><option value="17">17日</option><option value="18">18日</option><option value="19">19日</option><option value="20">20日</option><option value="21">21日</option><option value="22">22日</option><option value="23">23日</option><option value="24">24日</option><option value="25">25日</option><option value="26">26日</option><option value="27">27日</option><option value="28">28日</option><option value="29">29日</option><option value="30">30日</option></select>
<!--                     <input type="hidden" name="birthdayType">
                    <input type="hidden" name="birthday"> -->
                </td>
            </tr>

            <tr>
                <th><span class="red">*</span>居住地：</th>
                <td id="j_ReginContriner">
                <select data-level-index="1" name="province" aria-invalid="false" class="valid" onchange="ajaxAddr(this)">
                                    <option value="_NULL_">请选择</option>
                                </select>
                                <select data-level-index="2" name="city" aria-invalid="false" class="valid" style="display:inline-block;" onchange="ajaxAddr(this)">
                                    <option value="_NULL_">请选择</option>
                                </select>
                                <select data-level-index="3" name="area" aria-invalid="false" class="valid" style="display:inline-block;" onchange="ajaxAddr(this)">
                                    <option value="_NULL_">请选择</option>
                </select>
                </td>
            </tr>
            <tr>
                <th></th>
                <td><button class="btn-blue submit btn-submit" type="submit">保存</button></td>
            </tr>
            </tbody>
        </table>
        </form>


    </dd>
</dl>

    </article>

</div>
</div>
<footer id="footer">
    <div class="shop-agree">
        <div class="wrapper cl">
            <ul class="cl">
                <li><a href="javascript:;" target="_blank">
                    <b class="b1"></b>
                    <p><span>0</span>运费购手机</p></a>
                </li>
                <li><a href="javascript:;" target="_blank">
                    <b class="b2"></b>
                    <p><span>30</span>天无理由退换货</p></a>
                </li>
                <li><a href="javascript:;" target="_blank">
                    <b class="b3"></b>
                    <p>电子发票</p></a>
                </li>
                <li class="shop-agree-last"><a href="javascript:;" target="_blank">
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
                <dd><a href="http://shop.vivo.com.cn/helpcenter/alipay/" target="_blank">· 支付宝支付</a></dd>
                <dd><a href="http://shop.vivo.com.cn/helpcenter/invoice-declare/" target="_blank">· 发票说明</a></dd>
                <dd><a href="http://shop.vivo.com.cn/helpcenter/coupon-declare/" target="_blank">· 优惠券说明</a></dd>
                <dd><a href="http://shop.vivo.com.cn/helpcenter/huabei-instalment/" target="_blank">· 花呗分期</a></dd>
            </dl>
            <dl>
                <dt><b class="b2"></b>配送方式</dt>
                <dd><a href="http://shop.vivo.com.cn/helpcenter/transport-way/" target="_blank">· 配送方式</a></dd>
                <dd><a href="http://shop.vivo.com.cn/helpcenter/transport-cost" target="_blank">· 配送费用</a></dd>
                <dd><a href="http://shop.vivo.com.cn/helpcenter/sign-notice/" target="_blank">· 签收须知</a></dd>
            </dl>
            <dl>
                <dt><b class="b3"></b>服务支持</dt>
                <dd><a href="http://shop.vivo.com.cn/helpcenter/service-promise/" target="_blank">· 服务保证</a></dd>
                <dd><a href="http://shop.vivo.com.cn/helpcenter/after-service/" target="_blank">· 售后服务</a></dd>
                <dd><a href="http://www.vivo.com.cn/service/map.html" target="_blank">· 售后网点查询</a></dd>
                <dd><a href="http://shop.vivo.com.cn/helpcenter/broken-screen/" target="_blank">· 碎屏宝</a></dd>
                <dd><a href="http://shop.vivo.com.cn/helpcenter/extend-service/" target="_blank">· 手机延保</a></dd>
            </dl>
            <dl>
                <dt><b class="b4"></b>品牌服务</dt>
                <dd><a href="http://www.vivo.com.cn/service-faq_zhineng.html" target="_blank">· 常见问题</a></dd>
                <dd><a href="http://www.vivo.com.cn/service.html" target="_blank">· 相关下载</a></dd>
                <dd><a href="http://shop.vivo.com.cn/helpcenter/contact-us/" target="_blank">· 联系我们</a></dd>
            </dl>
            <dl class="shop-help-last">
                <dt><b class="b5"></b>小V在线时段</dt>
                <dd>周一至周五 08:00-21:00</dd>
                <dd>周六、周日 09:00-18:00</dd>
                <dd class="online-service">
                    <a target="_blank" href="http://crm2.qq.com/page/portalpage/wpa.php?uin=4007161118&amp;aty=0&amp;a=0&amp;curl=&amp;ty=1"><img class="lazy" data-src="https://swsdl.vivo.com.cn/vivoshop/web/dist/img/common/online-service_1e5d0b6.png" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"></a>
                </dd>
            </dl>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="wrapper cl">
            <div class="sns-box">
                成为vivo粉丝:<a href="http://weibo.com/vivomobile" target="_blank" class="sina"><b></b></a>
                <a href="http://t.qq.com/vivomobile" target="_blank" class="tencent"><b></b></a>
                <a href="http://page.renren.com/vivo?checked=true" target="_blank" class="renren"><b></b></a>
                <a href="javascript:;" class="weixin"><b></b><div class="vivo-weixin-overbox"><img src="/gitHub/tp_shop/object/Public/Personal/vivo-weixin-ico_f8c8800.jpg"><b></b></div></a>
            </div>
            <div class="copy-info">
                <a href="http://shop.vivo.com.cn/index.html" class="footer-logo"></a>Copyright ©2011-2016 广东步步高电子工业有限公司<br>版权所有 保留一切权利粤B2-20080267 | <a href="http://www.miitbeian.gov.cn/" target="_blank">粤ICP备05100288号</a>
            </div>
        </div>
    </div>
</footer>
<div id="side-bar">
    <ul>
        <li><a class="service" id="J_online-service" target="_blank" href="http://crm2.qq.com/page/portalpage/wpa.php?uin=4007161118&amp;aty=0&amp;a=0&amp;curl=&amp;ty=1"></a></li>
        <li>
            <a class="qrcode">
                <div class="qrcode-container">
                    <img src="/gitHub/tp_shop/object/Public/Personal/qrcode_6a6b792.png">
                    <p>支付宝扫码<br>关注享最新活动福利</p>
                </div>
            </a>
        </li>
        <li class="last">
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
        <li class="hide" id="J_backtop" style="display: none;"><a class="backtop"></a></li>
    </ul>
</div><script>
    var webCtx = "";
    var passportLoginUrlPrefix = "https://passport.vivo.com.cn/v3/web/login/authorize?client_id=3&redirect_uri=";
</script>
<script src="/gitHub/tp_shop/object/Public/Personal/jquery.min_6163309.js"></script>
<script src="/gitHub/tp_shop/object/Public/Personal/jquery.cookie_a5283b2.js"></script>
<script src="/gitHub/tp_shop/object/Public/Personal/jquery.lazyload_546c1da.js"></script>
<script src="/gitHub/tp_shop/object/Public/Personal/jquery-placeholder_fb6154c.js"></script>
<script src="/gitHub/tp_shop/object/Public/Personal/vivo-common_38aa2f0.js"></script>
<script src="/gitHub/tp_shop/object/Public/Personal/dialog_6a2b3fb.js"></script>
<script src="/gitHub/tp_shop/object/Public/Personal/vivo-stat_265b49b.js"></script>
<script src="/gitHub/tp_shop/object/Public/Personal/login_confirm_485e7b4.js"></script>
<script src="/gitHub/tp_shop/object/Public/Personal/query-vcoin_32d1f89.js"></script>
<script src="/gitHub/tp_shop/object/Public/Personal/shipping-address_35a72a8.js" type="text/javascript"></script>
<script src="/gitHub/tp_shop/object/Public/Personal/dialog_6a2b3fb.js" type="text/javascript"></script>
<script src="/gitHub/tp_shop/object/Public/Personal/jquery.validate.min_76c74f2.js"></script>
<script src="/gitHub/tp_shop/object/Public/Personal/my_order_44f932e.js" type="text/javascript"></script>
<link href="/gitHub/tp_shop/object/Public/Personal/buy-process_e40c238.css" rel="stylesheet" type="text/css">

<script>

    function ajaxAddr(DOM) { 

           var level = parseInt($("[name='"+$(DOM).attr('name')+"']").attr('data-level-index'))+1;
           $(DOM).next().children().not('[value="_NULL_"]').remove();
           $.post(
        '<?php echo U("Order/getAaddrData");?>',
       {
       level:level,
       upid:$(DOM).find('option:selected').attr('data-id')

       },
       function (data) { 
        var option;
        for (var i = 0; i < data.length; i++) { 

            option += "<option data-id="+data[i].id+""+" "+"value="+data[i].name+">"+data[i].name+"</option>";

       }

       $('select[data-level-index="'+level+'"]').children().first().after(option);

       }

       );
            }

    // $('#use-new-address').click( function () { 

            $('.address-info-new').show();
            $.post(
                '<?php echo U("Order/getAaddrData");?>',
                {level:$("[name='province']").attr('data-level-index')},
                function (data) { 
                    var option;
                    for (var i = 0; i < data.length; i++) { 

                        option += "<option data-id="+data[i].id+""+" "+"value="+data[i].name+">"+data[i].name+"</option>";

                    }

                    $('select[data-level-index="1"]').children().first().after(option);

                }

            );
        // });
</script>
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

<div style="height: 0px; width: 0px; overflow: hidden;"><object width="0" height="0" tabindex="-1" style="height:0;width:0;overflow:hidden;" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab" id="JSocket"><param name="allowScriptAccess" value="always"><param name="movie" value="http://aeu.alicdn.com/flash/JSocket.swf"> <embed src="http://aeu.alicdn.com/flash/JSocket.swf" name="JSocket" allowscriptaccess="always" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer_cn" width="0" height="0"></object></div><div id="waf_nc_block" style="display: none;"><div class="waf-nc-mask"></div><div id="WAF_NC_WRAPPER" class="waf-nc-wrapper"><img class="waf-nc-icon" src="/gitHub/tp_shop/object/Public/Personal/TB1_3FrKVXXXXbdXXXXXXXXXXXX-129-128.png" alt="" height="20" width="20"><p class="waf-nc-title">安全验证</p><div class="waf-nc-splitter"></div><p class="waf-nc-description">请完成以下验证后继续操作：</p><div id="nocaptcha"></div></div></div></body></html>