<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:78:"E:\wamp64\www\dfqc_website\public/../application/index\view\product\index.html";i:1523872365;s:78:"E:\wamp64\www\dfqc_website\public/../application/index\view\public\header.html";i:1523509644;s:78:"E:\wamp64\www\dfqc_website\public/../application/index\view\public\footer.html";i:1523945357;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>产品中心</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--国产浏览器的兼容-->
    <meta name="renderer" content="webkit">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link type="text/css" rel="stylesheet" href="__STATIC__/css/animate-tool.css"/>
    <link type="text/css" rel="stylesheet" href="__STATIC__/css/dfv_web.css"/>
    <script type="text/javascript" src="__STATIC__/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="__STATIC__/js/ReturnTop.js"></script>
    <script type="text/javascript" src="__STATIC__/js/dfv_web.js"></script>
    <!--[if lt IE 9]>
    <script src="__STATIC__/js/html5shiv.js"></script>
    <![endif]-->
</head>
<body>
<div id="homePage">
    <div class="homePage_box">
        <!--头部导航-->
        <div class="container_nav">
    <div class="topNav">
        <div class="navBox">
            <div class="left_logo">
                <img src="__STATIC__/img/logo.png" />
            </div>
            <div class="right_ul_nav">
                <ul>
                    <?php if(is_array($nav0) || $nav0 instanceof \think\Collection || $nav0 instanceof \think\Paginator): $i = 0; $__LIST__ = $nav0;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                        <li class="">
                            <a href="<?php echo url($val['url']); ?>" <?php if($val['name']==$title): ?> class='active_border_color'<?php endif; ?> class="a-navy a-border"><?php echo $val['name']; ?></a>
                            <?php if(is_array($nav1) || $nav1 instanceof \think\Collection || $nav1 instanceof \think\Paginator): $i = 0; $__LIST__ = $nav1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$va): $mod = ($i % 2 );++$i;?>
                                <div class="nav_check">
                                    <?php if($val['id']==$va['cid']): ?>
                                    <a href="<?php echo url($va['url']); ?>#<?php echo $va['position']; ?>"><?php echo $va['name']; ?></a>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </li>

                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>

        <!--内容-->
        <div class="proCenter" id="proCenter">
            <div class="headBox">
                <div class="advertBox"></div>
            </div>
            <div class="pro_content">

                <!--产品中心-->
                <div class="flow_package">
                    <!--1-->
                    <div class="packageBox" id="packageBox">
                        <ul class="pricing_table">
                            <div class="packageTitle">
                                <p>One&nbsp;流量套餐系列</p>
                                <span>（天翼物联）</span>
                            </div>
                            <li class="price_block">
                                <h3>套餐一</h3>
                                <div class="price">
                                    <div class="price_figure">
                                        <span class="price_number">￥5.00</span>
                                        <span class="price_tenure">every time</span>
                                    </div>
                                </div>
                                <div class="features">
                                    <p>1GB</p>
                                    <span>Memory&nbsp;capacity</span>
                                </div>
                                <div class="footer">
                                    <!--<a href="###" class="action_button">Combo One</a>-->
                                    <p>5元1G，30天内有效</p>
                                </div>
                            </li>
                            <li class="price_block">
                                <h3>套餐二</h3>
                                <div class="price">
                                    <div class="price_figure">
                                        <span class="price_number">￥9.90</span>
                                        <span class="price_tenure">every time</span>
                                    </div>
                                </div>
                                <div class="features">
                                    <p>3GB</p>
                                    <span>Memory&nbsp;capacity</span>
                                </div>
                                <div class="footer">
                                    <!--<a href="###" class="action_button">Combo Two</a>-->
                                    <p>10元3G，30天内有效</p>
                                </div>
                            </li>
                            <li class="price_block">
                                <h3>套餐三</h3>
                                <div class="price">
                                    <div class="price_figure">
                                        <span class="price_number">￥99.00</span>
                                        <span class="price_tenure">per month</span>
                                    </div>
                                </div>
                                <div class="features">
                                    <p>包月</p>
                                    <span>Memory&nbsp;capacity</span>
                                </div>
                                <div class="footer">
                                    <!--<a href="###" class="action_button">Combo Three</a>-->
                                    <p>99元包月，每月15G流量</p>
                                </div>
                            </li>
                            <li class="price_block">
                                <h3>套餐四</h3>
                                <div class="price">
                                    <div class="price_figure">
                                        <span class="price_number">￥399.00</span>
                                        <span class="price_tenure">annually</span>
                                    </div>
                                </div>
                                <div class="features">
                                    <p>包年</p>
                                    <span>Memory&nbsp;capacity</span>
                                </div>
                                <div class="footer">
                                    <!--<a href="###" class="action_button">Combo Four</a>-->
                                    <p>399元包年，每月15G流量</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!--2-->
                    <div class="insurance" id="insurance">
                        <div class="packageTitle">
                            <p>Two&nbsp;启辰财富</p>
                            <span>（保险业务）</span>
                        </div>
                        <div class="insBox">
                            <div class="automobile_ins">
                                <div class="motorcar_insBox">
                                    <h3>享受顶级理赔服务来自平安保险</h3>
                                    <p>
                                        <span>保骉车险的所有理赔服务全部由平安保险提供。</span>
                                        <span>无差别服务，全国通赔，确保顶级客户体验。</span>
                                    </p>
                                    <ul>
                                        <li>
                                            <dl>
                                                <dt>
															<span>
																<i class="fa fa-credit-card"></i>
															</span>
                                                </dt>
                                                <dd>赔付极速到账</dd>
                                                <p class="pTxt">5万元以下赔款结案60秒到账。</p>
                                            </dl>
                                        </li>
                                        <li>
                                            <dl>
                                                <dt>
															<span>
																<i class="fa fa-money"></i>
															</span>
                                                </dt>
                                                <dd>简单快赔</dd>
                                                <p class="pTxt">先赔付再修车，<br>报案到赔款3天到账。</p>
                                            </dl>
                                        </li>
                                        <li>
                                            <dl>
                                                <dt>
															<span>
																<i class="fa fa-volume-control-phone"></i>
															</span>
                                                </dt>
                                                <dd>电话直赔</dd>
                                                <p class="pTxt">三步到账，一个电话轻松搞定。<br>可直接拨打400-999-9595在线理赔。</p>
                                            </dl>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--3-->
                    <div class="qebeBox" id="qebeBox">
                        <div class="packageTitle">
                            <p>Three&nbsp;车机系列</p>
                            <span>（触控大屏）</span>
                        </div>

                        <div class="exhibits">
                            <div class="exhibits_box">
                                <ul>
                                    <?php if(is_array($products) || $products instanceof \think\Collection || $products instanceof \think\Paginator): $i = 0; $__LIST__ = $products;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$va): $mod = ($i % 2 );++$i;?>
                                    <li>
                                        <div class="intBox">
                                            <img src="__STATIC__/uploads/<?php echo $va['img']; ?>"/>
                                            <div class ="divA">
                                                <p class="p1">
                                                    <span><?php echo $va['p_type']; ?></span>&nbsp;
                                                    <span><?php echo $va['name']; ?></span>
                                                </p>
                                                <p class="p3">
                                                    <span>¥</span>
                                                    <span><?php echo $va['price']; ?></span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="cover">
                                            <p class="p4"><?php echo $va['name']; ?></p>
                                            <p class="p5">2010-2016</p>
                                            <p class="p6">¥<span><?php echo $va['price']; ?></span></p>
                                            <p class="p7">
                                                <a href=<?php echo $va['taobao_url']; ?> target="_blank" class="button_a white bigrounded">淘宝购买</a>
                                                <a href=<?php echo $va['jingdong_url']; ?> target="_blank" class="button_a white bigrounded">京东购买</a>
                                            </p>
                                        </div>
                                    </li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </div>
                        </div>

                        <div class="moreHref">
                            <a href="https://shop233436601.taobao.com/search.htm?spm=a1z10.1-c-s.w5002-15659704136.1.738534ffehib7d&search=y" target="_blank" class="button-ujarak">
                                去淘宝看更多&nbsp;
                                <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--底部-->
        <div class="footer">
    <div class="f_content">
        <div class="one_block_content">
            <div class="contactUs">
                <ul>
                    <li>
                        <span>
                            <i class="fa fa-map-marker"></i>
                        </span>
                        <div class="infBox">
                            <h4>公司地址</h4>
                            <p><?php echo $info['address1']; ?></p>
                            <p><?php echo $info['address2']; ?></p>
                        </div>
                    </li>
                    <li>
                        <span>
                            <i class="fa fa-volume-control-phone"></i>
                        </span>
                        <div class="infBox">
                            <h4>联系方式</h4>
                            <p>	深圳: <?php echo $info['tel1']; ?></p>
                            <p>	安徽: <?php echo $info['tel2']; ?></p>
                        </div>
                    </li>
                    <li>
                        <span>
                            <i class="fa fa-internet-explorer"></i>
                        </span>
                        <div class="infBox">
                            <h4>店铺网址</h4>
                            <p>
                                <i>京东:</i>
                                <i>
                                    <a href="<?php echo $info['web_jingdong']; ?>" target="_blank">
                                        <?php echo $info['web_jingdong']; ?>
                                    </a>
                                </i>
                            </p>
                            <p>
                                <i>淘宝:</i>
                                <i>
                                    <a href=<?php echo $info['web_taobao']; ?> target="_blank">
                                        <?php echo $info['web_taobao']; ?>
                                    </a>
                                </i>
                            </p>
                            <p>
                                <i>慧聪网:</i>
                                <i>
                                    <a href=<?php echo $info['web_huicong']; ?> target="_blank">
                                        <?php echo $info['web_huicong']; ?>
                                    </a>
                                </i>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="qr_code">
                <ul>
                    <?php if(is_array($code) || $code instanceof \think\Collection || $code instanceof \think\Paginator): $i = 0; $__LIST__ = $code;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$va): $mod = ($i % 2 );++$i;?>
                    <li>
                        <p>
                            <img src="__STATIC__/uploads/<?php echo $va['img']; ?>" />
                        </p>
                        <p><?php echo $va['name']; ?></p>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
    </div>
</div>

<!--返回顶部-->
<div id="rocket-to-top">
    <div class="level-2"></div>
    <div class="level-3"></div>
</div>

<script type="text/javascript">
    $('.exhibits_box ul li').mouseenter(function(){
        $(this).find('.divA').stop().animate({bottom:'-66px'});
        $(this).find('.cover').css({left:'0'})
        $(this).children('.cover').find('.p4').css({left:'0'})
        $(this).children('.cover').find('.p5').css({left:'0'})
        $(this).children('.cover').find('.p6').css({transform:'scale(1)'})
        $(this).children('.cover').find('.p7').css({bottom:'30px'})
    });
    $('.exhibits_box ul li').mouseleave(function(){
        $(this).find('.divA').stop().animate({bottom:'0px'});
        $(this).find('.cover').css({left:-$(this).width()})
        $(this).children('.cover').find('.p4').css({left:-$(this).width()})
        $(this).children('.cover').find('.p5').css({left:-$(this).width()})
        $(this).children('.cover').find('.p6').css({transform:'scale(1.3)'})
        $(this).children('.cover').find('.p7').css({bottom:'-80px'})
    });
</script>
</body>
</html>
