<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:76:"E:\wamp64\www\dfqc_website\public/../application/index\view\index\index.html";i:1525764201;s:78:"E:\wamp64\www\dfqc_website\public/../application/index\view\public\header.html";i:1523509644;s:82:"E:\wamp64\www\dfqc_website\public/../application/index\view\public\ser_public.html";i:1523256866;s:78:"E:\wamp64\www\dfqc_website\public/../application/index\view\public\footer.html";i:1523945357;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>官网首页</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--国产浏览器的兼容-->
    <meta name="renderer" content="webkit">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link type="text/css" rel="stylesheet" href="__STATIC__/css/magic.min.css"/>
    <link type="text/css" rel="stylesheet" href="__STATIC__/css/dfv_web.css"/>
    <script type="text/javascript" src="__STATIC__/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="__STATIC__/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="__STATIC__/js/modernizr.custom.js"></script>
    <script type="text/javascript" src="__STATIC__/js/jquery.hoverdir.js"></script>
    <script type="text/javascript" src="__STATIC__/js/jquery.lineProgressbar.js"></script>
    <script type="text/javascript" src="__STATIC__/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="__STATIC__/js/validate_expand.js"></script>
    <script type="text/javascript" src="__STATIC__/js/index-va.js"></script>
    <script type="text/javascript" src="__STATIC__/js/ReturnTop.js"></script>
    <script type="text/javascript" src="__STATIC__/js/dfv_web.js"></script>
    <!--[if lt IE 9]>
    <script src="__STATIC__/js/html5shiv.js"></script>
    <![endif]-->

</head>
<body>
<div id="homePage">
    <div class="homePage_box">
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
        <!--轮播-->
        <div class="carousel">
            <div id="slideRoll" class="slideRoll">
                <div class="hd">
                    <ul>
                        <?php if(is_array($banner) || $banner instanceof \think\Collection || $banner instanceof \think\Paginator): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                        <li></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
                <div class="carousel_img">
                    <ul>
                        <?php if(is_array($banner) || $banner instanceof \think\Collection || $banner instanceof \think\Paginator): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                        <li>
                            <a href="###">
                                <img src="__STATIC__/uploads/<?php echo $val['img']; ?>" />
                            </a>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        <!--内容-->
        <div id="Subject_content">
            <div class="Business_theme">
                <div class="por_describe">
                    <div class="titleBox">
                        <h3><i class="fa fa-star-o"></i>&nbsp;智能车联网服务专家&nbsp;<i class="fa fa-star-o"></i></h3>
                        <p>智联天下&nbsp;启辰未来</p>
                        <span><img src="__STATIC__/img/down.png" /></span>
                    </div>
                </div>
                <!--1-->
                <div class="box_theme">
                    <?php if(is_array($advantage) || $advantage instanceof \think\Collection || $advantage instanceof \think\Paginator): $i = 0; $__LIST__ = $advantage;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$va): $mod = ($i % 2 );++$i;?>
                    <div class="Box">
                        <div class="box-content">
                            <div class="box-overlay magictime" data-hover="rotateRight" data-return="">
                                <div class="box_imges">
                                    <img src="__STATIC__/uploads/<?php echo $va['img']; ?>"/>
                                    <p><?php echo $va['title']; ?><i class="fa fa-long-arrow-right"></i></p>
                                </div>
                            </div>
                            <div class="box-wrapper">
                                <p><?php echo $va['content']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <div class="clearfix"></div>
                <!--2-->
                <div class="aboutUs" id="about_us">
                    <div class="weBox">
                        <div class="leftTxt">
                            <div class="synopsis">
                                <p>东方启辰信息技术(深圳)股份有限公司</p>
                                <p>东方启辰信息技术(深圳)股份有限公司成立于2012年11月20日。
                                    创立了“DFV”大屏智能车机品牌,公司于 2012年9月成功开发出“嵌入式大屏智能汽车互联网电脑系统”。
                                    从“一直被山寨，从未被超越”的自信，到“大爱无疆，大屏东方”的有责，我们在向下一个未来奔去———— “日出东方，启辰未来”。
                                    <a href="<?php echo url('about_us/index'); ?>#intCon">more&nbsp;>></a>
                                </p>
                            </div>
                            <div class="Company_records">
                                <p class="titleTxt">东方启辰大记事</p>
                                <div class="event_box">
                                    <div class="parHd clearfix">
                                        <ul>
                                            <li class="act"><span></span>2016.10.27</li>
                                            <li><span></span>2016.12.19</li>
                                            <li><span></span>2017.05.19</li>
                                            <li><span></span>2017.11.28</li>
                                        </ul>
                                    </div>
                                    <div class="parBd clearfix">
                                        <div class="slideBox">
                                            <p>
                                                2016年10月27日上午东方启辰在安徽省宁国市召开“智联天下启辰未来 中国·宁国车联网产业基地启动仪式”完美收官。
                                            </p>
                                        </div>
                                        <div class="slideBox" style="display: none;">
                                            <p>股份有限公司创立大会</p>
                                        </div>
                                        <div class="slideBox" style="display: none;">
                                            <p>2017年度汽车电子行业品牌盛会新闻发布会暨汽车电子市场趋势（深圳）交流大会现场发布重磅消息</p>
                                        </div>
                                        <div class="slideBox" style="display: none;">
                                            <p>中国电信与东方启辰物联网战略合作协议签约</p>
                                        </div>
                                    </div>
                                    <a class="sPrev"><img src="__STATIC__/img/left_ico.png"></a>
                                    <a class="sNext"><img src="__STATIC__/img/right_ico.png"></a>
                                </div>
                            </div>
                        </div>
                        <div class="right_vidio">
                            <div class="ent_title">
                                <p><i class="fa fa-star-o"></i>&nbsp;ABOUT&nbsp;&nbsp;DFV&nbsp;<i class="fa fa-star-o"></i></p>
                            </div>

                            <div class="vidioBox">
                                <video controls preload="auto">
                                    <source src="__STATIC__/img/vidio2.mp4" type="video/mp4">
                                    <source src="__STATIC__/img/movie.ogg" type="video/ogg">
                                    您的浏览器不支持 HTML5 video 标签。
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
                <!--3-->
                <div class="brand"></div>
                <!--4-->
                <div class="chooseUs">
                    <div class="highlights">
                        <h3>技术支持</h3>
                        <div class="hi-icon-wrap hi-icon-effect">
                            <ul>
                                <li>
                                    <a href="###" class="hi-icon">
                                        <i class="fa fa-window-maximize"></i>
                                    </a>
                                    <span>10.2超大电容屏</span>
                                </li>
                                <li>
                                    <a href="###" class="hi-icon">
                                        <i class="fa fa-android"></i>
                                    </a>
                                    <span>安卓四核</span>
                                </li>
                                <li>
                                    <a href="###" class="hi-icon">
                                        <i class="fa fa-microphone"></i>
                                    </a>
                                    <span>全局声控</span>
                                </li>
                                <li>
                                    <a href="###" class="hi-icon">
                                        <i class="fa fa-mobile"></i>
                                    </a>
                                    <span>手机互联</span>
                                </li>
                                <li>
                                    <a href="###" class="hi-icon">
                                        <i class="fa fa-image"></i>
                                    </a>
                                    <span>实景地图</span>
                                </li>
                                <li>
                                    <a href="###" class="hi-icon">
                                        <i class="fa fa-wrench"></i>
                                    </a>
                                    <span>免费安装</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--5-->
                <div class="ourServices" id="our_service" style="width:100%;height:730px;background-color: #eeeeee;">
                    <div class="service_item" style="width:100%">
                        <div class="item_nav" style="padding-top: 40px;">
                            <ul>
                                <li class="service_nav current_span">
                                    <span style="margin-top: 15px;font-weight: bolder;font-size:20px;height: 60px; ">客户服务</span>
                                </li>
                                <li class="service_nav">
                                    <span style="margin-top: 15px;font-size:20px;height: 60px;font-weight: bolder;">运营商服务</span>
                                </li>
                                <li class="service_nav" id="ability">
                                    <span style="margin-top: 15px;font-size:20px;height: 60px;font-weight: bolder;">行业客户服务</span>
                                </li>
                            </ul>
                        </div>
                        <div class="section" style="margin-top: 50px;">
                            <div class="bor" style="display: block;width: 1080px;">
                                <div class="borBox">
                                    <ul style="margin-left:55px;" >
                                        <?php if(is_array($service) || $service instanceof \think\Collection || $service instanceof \think\Paginator): $i = 0; $__LIST__ = $service;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$va): $mod = ($i % 2 );++$i;if($va['type'] =='客户服务'): ?>
                                        <li>
    <div class="servce_hidden" style="background-color: #e5e5e5;">
        <div class="service_top" style="background-color:#e5e5e5;height:84px;text-align: center;">
            <img class="ser_img1" src="__STATIC__/uploads/<?php echo $va['img']; ?>" alt="">
            <h4 style="color: #e52729;font-size:20px;padding-bottom: 5px;"><?php echo $va['name']; ?></h4>
        </div>
        <div class="service_bottom" style="background-color: white;padding:11px 12px;height: 188px;line-height: 28px;">
            <?php echo $va['content']; ?>
        </div>
    </div>
    <div class="servce_visible" style="height: 216px;padding: 15px;">
        <div class="service_top" style="height:84px;text-align: center;">
            <img class="ser_img2" style="width:78px;height:78px;" src="__STATIC__/uploads/<?php echo $va['img']; ?>" alt="">
        </div>
        <div class="service_bottom" style="height: 130px;line-height: 26px;text-align: center;">
            <h4 style="font-size: 20px;padding: 15px;font-weight:bold;color: #676767;"><?php echo $va['name']; ?></h4>
        </div>
    </div>
</li>
                                        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="bor" style="none: block;width: 1080px;">
                                <div class="borBox">
                                    <ul style="margin-left:55px;margin-top: 100px;" >
                                        <?php if(is_array($service) || $service instanceof \think\Collection || $service instanceof \think\Paginator): $i = 0; $__LIST__ = $service;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$va): $mod = ($i % 2 );++$i;if($va['type'] =='运营商服务'): ?>
                                        <li>
    <div class="servce_hidden" style="background-color: #e5e5e5;">
        <div class="service_top" style="background-color:#e5e5e5;height:84px;text-align: center;">
            <img class="ser_img1" src="__STATIC__/uploads/<?php echo $va['img']; ?>" alt="">
            <h4 style="color: #e52729;font-size:20px;padding-bottom: 5px;"><?php echo $va['name']; ?></h4>
        </div>
        <div class="service_bottom" style="background-color: white;padding:11px 12px;height: 188px;line-height: 28px;">
            <?php echo $va['content']; ?>
        </div>
    </div>
    <div class="servce_visible" style="height: 216px;padding: 15px;">
        <div class="service_top" style="height:84px;text-align: center;">
            <img class="ser_img2" style="width:78px;height:78px;" src="__STATIC__/uploads/<?php echo $va['img']; ?>" alt="">
        </div>
        <div class="service_bottom" style="height: 130px;line-height: 26px;text-align: center;">
            <h4 style="font-size: 20px;padding: 15px;font-weight:bold;color: #676767;"><?php echo $va['name']; ?></h4>
        </div>
    </div>
</li>
                                        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="bor" style="none: block;width: 1080px;">
                                <div class="borBox">
                                    <ul style="margin-left:55px;">
                                        <?php if(is_array($service) || $service instanceof \think\Collection || $service instanceof \think\Paginator): $i = 0; $__LIST__ = $service;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$va): $mod = ($i % 2 );++$i;if($va['type'] =='行业客户服务'): ?>
                                        <li>
    <div class="servce_hidden" style="background-color: #e5e5e5;">
        <div class="service_top" style="background-color:#e5e5e5;height:84px;text-align: center;">
            <img class="ser_img1" src="__STATIC__/uploads/<?php echo $va['img']; ?>" alt="">
            <h4 style="color: #e52729;font-size:20px;padding-bottom: 5px;"><?php echo $va['name']; ?></h4>
        </div>
        <div class="service_bottom" style="background-color: white;padding:11px 12px;height: 188px;line-height: 28px;">
            <?php echo $va['content']; ?>
        </div>
    </div>
    <div class="servce_visible" style="height: 216px;padding: 15px;">
        <div class="service_top" style="height:84px;text-align: center;">
            <img class="ser_img2" style="width:78px;height:78px;" src="__STATIC__/uploads/<?php echo $va['img']; ?>" alt="">
        </div>
        <div class="service_bottom" style="height: 130px;line-height: 26px;text-align: center;">
            <h4 style="font-size: 20px;padding: 15px;font-weight:bold;color: #676767;"><?php echo $va['name']; ?></h4>
        </div>
    </div>
</li>
                                        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                                <div class="ability">
                                    <ul>
                                        <li>
                                            <span class="progressbar"></span>
                                            <span>智能系统管理能力100%</span>
                                        </li>
                                        <li>
                                            <span class="progressbar"></span>
                                            <span>费用报销核实能力100%</span>
                                        </li>
                                        <li>
                                            <span class="progressbar"></span>
                                            <span>违章用车查询管理能力100%</span>
                                        </li>
                                        <li>
                                            <span class="progressbar"></span>
                                            <span>行车安全保障能力100%</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <!--6-->
                <div class="Hig_display">
                    <div class="titleBox">
                        <h3>
                            <i class="fa fa-star-o"></i>&nbsp;产品信息&nbsp;<i class="fa fa-star-o"></i>
                        </h3>
                        <p>PRODUCT&nbsp;&nbsp;INFORMATION</p>
                        <span>
                            <img src="__STATIC__/img/down.png" />
                        </span>
                    </div>
                    <div class="pro_infor">
                        <div id="servicesBox">
                            <div id="serBox1" class="serBox">
                                <div class="serBoxOn"></div>
                                <div class="pic1">
                                    <i class="fa fa-window-maximize"></i>
                                </div>
                                <div class="pic2">
                                    <i class="fa fa-window-maximize"></i>
                                </div>
                                <div class="txt1">
                                    <span class="tit">巨屏车机</span>
                                    <a href="###">了解详情</a>
                                </div>
                                <div class="txt2">
                                    <span class="tit">巨屏车机</span>
                                    <a href="<?php echo url('product/index'); ?>#qebeBox">了解详情</a>
                                </div>
                            </div>
                            <div id="serBox2" class="serBox">
                                <div class="serBoxOn"></div>
                                <div class="pic1 mypng">
                                    <i class="fa fa-wifi"></i>
                                </div>
                                <div class="pic2 mypng">
                                    <i class="fa fa-wifi"></i>
                                </div>
                                <div class="txt1">
                                    <span class="tit">流量套餐</span>
                                    <a href="###">了解详情</a>
                                </div>
                                <div class="txt2">
                                    <span class="tit">流量套餐</span>
                                    <a href="<?php echo url('product/index'); ?>#packageBox">了解详情</a>
                                </div>
                            </div>
                            <div id="serBox3" class="serBox">
                                <div class="serBoxOn"></div>
                                <div class="pic1 mypng">
                                    <i class="fa fa-money"></i>
                                </div>
                                <div class="pic2 mypng">
                                    <i class="fa fa-money"></i>
                                </div>
                                <div class="txt1">
                                    <span class="tit">启辰财富</span>
                                    <a href="###">了解详情</a>
                                </div>
                                <div class="txt2">
                                    <span class="tit">启辰财富</span>
                                    <a href="<?php echo url('product/index'); ?>#insurance">了解详情</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--7-->
                <div class="Support" id="support" style="position: relative;">
                    <div class="titleBox">
                        <h3>
                            <i class="fa fa-star-o"></i>&nbsp;支持安装车型库&nbsp;<i class="fa fa-star-o"></i>
                        </h3>
                        <p>SUPPORT&nbsp;&nbsp;INSTALLATION&nbsp;&nbsp;MODEL</p>
								<span>
									<img src="__STATIC__/img/down.png" />
								</span>
                    </div>
                    <div class="SupportBox">
                        <div class="models">
                            <p>
                                <a href="<?php echo url('help/index'); ?>#dot">
                                    500多家安装网点
                                    <i class="fa fa-hand-o-right"></i>
                                </a>
                            </p>
                            <div class="models_imgas">
                                <!--<a href="">-->
                                <img src="__STATIC__/img/Models.jpg"/>
                                <!--</a>-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--8-->
                <div class="newsFocus" id="news_focus">
                    <div class="titleBox">
                        <h3>
                            <i class="fa fa-star-o"></i>&nbsp;焦点&nbsp·&nbsp新闻&nbsp;<i class="fa fa-star-o"></i>
                        </h3>
                        <p>FOCUS&nbsp;&nbsp;NEWS</p>
								<span>
									<img src="__STATIC__/img/down.png" />
								</span>
                    </div>
                </div>
                <ul class="index_new_list" style="margin:0 auto;width: 1200px;">
                    <?php if(is_array($news) || $news instanceof \think\Collection || $news instanceof \think\Paginator): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$va): $mod = ($i % 2 );++$i;?>
                    <li style="border-bottom:1px dashed darkgray;margin-top: 24px;">
                        <div style="padding-top:12px;line-height:26px;margin-right:26px;padding-bottom:25px;width:78px;height: 41px;background-color: #e52729;float: left;text-align: center;">
                            <span style="color: white;padding-bottom: 5px;"><?php echo date('d',strtotime($va['time']));?></span>
                            <span style="color: white;"><?php echo date('Y/m',strtotime($va['time']));?></span>
                        </div>
                        <a href="<?php echo url('new_details/index'); ?>?id=<?php echo $va['id']; ?>">
                            <img src="__STATIC__/uploads/<?php echo $va['img']; ?>" alt="" style="width: 152px;margin-right:26px;height: 116px;float:left;">
                        </a>
                        <div style="padding-top: 10px;margin-bottom: 20px;height: 113px;overflow: hidden;">
                            <h3 style="margin-bottom: 15px;"><a href="<?php echo url('new_details/index'); ?>?id=<?php echo $va['id']; ?>"><?php echo $va['title']; ?></a></h3>
                            <p class="article" style="line-height: 32px;"><?php echo $va['intro']; ?></p>
                        </div>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                <!--9-->
                <div class="cooperation">
                    <div class="titleBox">
                        <h3>
                            <i class="fa fa-star-o"></i>&nbsp;合作伙伴&nbsp;<i class="fa fa-star-o"></i>
                        </h3>
                        <p>COOPERATIVE&nbsp;&nbsp;PARTNER</p>
								<span>
									<img src="__STATIC__/img/down.png" />
								</span>
                    </div>
                    <div class="Cooper_partner">
                        <div class="partnerBox">
                            <ul>
                                <?php if(is_array($cooperator) || $cooperator instanceof \think\Collection || $cooperator instanceof \think\Paginator): $i = 0; $__LIST__ = $cooperator;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                                <li>
                                    <a href="###">
                                        <img src="__STATIC__/uploads/<?php echo $val['img']; ?>"/>
                                    </a>
                                </li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--10-->
                <div class="join" id="join_us">
                    <div class="joinBox">
                        <div class="Apply_form_box">
                            <div class="join_title">
                                <h2>欢迎代理加盟，期待您的加入！</h2>
                            </div>
                            <div class="ApplyForm">
                                <form id="thisForm" method="post" action="<?php echo url('index/form'); ?>">
                                    <ul>
                                        <li>
                                            <div class="stext">
                                                <label class="labelA">您的名字（必填）</label>
                                                <input type="text" name="userName" id="userName" value="" autocomplete="off"/>
                                                <span class="tipinfo"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="stext">
                                                <label class="labelA">您的邮箱（必填）</label>
                                                <input type="text"  name="email" id="email" value="" autocomplete="off"/>
                                                <span class="tipinfo"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="stext">
                                                <label class="labelA">您的电话（必填）</label>
                                                <input type="text" name="sms" id="sms" value="" autocomplete="off"/>
                                                <span class="tipinfo"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="stext">
                                                <label class="labelA">验证码（必填）</label>&nbsp;&nbsp;&nbsp;
                                                <input type="text" name="verify" id="val" required />
                                                 <img src="<?php echo captcha_src(); ?>" id="id_vode" onclick="changeVcode()">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="stext">
                                                <label class="labelA">您的留言&nbsp;:</label>
                                                <textarea  name="msg" id="ta"></textarea>
                                                <span class="tipinfo"></span>
                                            </div>
                                        </li>
                                        <button type="submit" id="btn">申请加盟</button>
                                    </ul>
                                </form>
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
    </div>
</div>
<!--返回顶部-->
<div id="rocket-to-top">
    <div class="level-2"></div>
    <div class="level-3"></div>
</div>
<script type="text/javascript">
    function changeVcode(){
        var element = document.getElementById('id_vode');
        var vcode_url = '<?php echo captcha_src(); ?>?t=' + Math.random();
        element.setAttribute('src', vcode_url);
    }
    window.onload=changeVcode();
</script>
</body>
</html>
