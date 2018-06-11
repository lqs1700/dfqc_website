<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"E:\wamp64\www\dfqc_website\public/../application/index\view\news\index.html";i:1523605232;s:78:"E:\wamp64\www\dfqc_website\public/../application/index\view\public\header.html";i:1523509644;s:78:"E:\wamp64\www\dfqc_website\public/../application/index\view\public\footer.html";i:1523945357;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>新闻中心</title>
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
        <div class="news">
            <div class="news_content">
                <!--1-->
                <div class="top_title_img">
                    <div class="bg">
                    </div>
                </div>
                <!--2-->
                <div class="inforBox" id="news">
                    <div class="section_content">
                        <div class="left_nav">
                            <div class="menu">
                                <div class="topTitle">
                                    <dl>
                                        <dt>N</dt>
                                        <dd>
                                            <span>新闻中心</span>
                                            <span>EWS&nbsp;&nbsp;CENTER</span>
                                        </dd>
                                    </dl>
                                </div>
                                <ul>
                                    <?php if(is_array($news_type) || $news_type instanceof \think\Collection || $news_type instanceof \think\Paginator): $i = 0; $__LIST__ = $news_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$va): $mod = ($i % 2 );++$i;?>
                                    <li<?php if($va['id']==$new_type): ?> class='active_on'<?php endif; ?>><a href="<?php echo url('news/index'); ?>?new_type=<?php echo $va['id']; ?>"><?php echo $va['name']; ?></a></li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="right_content">
                            <div class="summaryTop">
                                <?php if(is_array($news_type) || $news_type instanceof \think\Collection || $news_type instanceof \think\Paginator): $i = 0; $__LIST__ = $news_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$va): $mod = ($i % 2 );++$i;if($va['id']==$new_type): ?><p><?php echo $va['name']; ?></p><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                            <div class="summaryCon">
                                <ul class="ulBox">
                                    <?php if(is_array($news) || $news instanceof \think\Collection || $news instanceof \think\Paginator): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                                    <li>
                                        <span><?php echo $val['title']; ?></span>
                                        <span><?php echo substr($val['time'],0,10);?></span>
                                        <div class="clearfix"></div>
                                        <p class="article"><?php echo $val['intro']; ?></p>
                                        <a href="<?php echo url('new_details/index'); ?>?id=<?php echo $val['id']; ?>&&new_type=<?php echo $val['nid']; ?>" target="_parent">查看详情&nbsp;>></a>
                                    </li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                                <!--分页-->
                                <?php echo $page; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
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
</body>
</html>
