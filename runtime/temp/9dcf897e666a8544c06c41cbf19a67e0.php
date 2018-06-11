<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"E:\wamp64\www\dfqc_website\public/../application/index\view\help\index.html";i:1523842050;s:78:"E:\wamp64\www\dfqc_website\public/../application/index\view\public\header.html";i:1523509644;s:78:"E:\wamp64\www\dfqc_website\public/../application/index\view\public\footer.html";i:1523945357;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>帮助中心</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--国产浏览器的兼容-->
    <meta name="renderer" content="webkit">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
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
        <div id="help_center">
            <!--1-->
            <div class="head_advert">
                <div class="advert_box"></div>
            </div>
            <!--2-->
            <div class="hotSearch">
                <div class="Search_box">
                    <div class="related_content">
                        <div class="search_title">
                            <p>
                                <span>常见问题</span>
                            </p>
                        </div>
                        <div class="option_con">
                            <ul>
                                <?php if(is_array($help) || $help instanceof \think\Collection || $help instanceof \think\Paginator): $i = 0; $__LIST__ = $help;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;if($val['label']!=''): ?>
                                <li><a href="<?php echo url('help_details/index'); ?>?id=<?php echo $val['id']; ?>#help_detail"><?php echo $val['label']; ?></a></li>
                                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--3-->
            <div id="problem" class="problem">
                <div class="problem_content">
                    <div class="titleBox" id="titleBox_one">
                        <h3>
                            <i class="fa fa-star-o"></i>&nbsp;疑问解答&nbsp;<i class="fa fa-star-o"></i>
                        </h3>
                        <p>Interrogative&nbsp;&nbsp;answers</p>
								<span>
									<img src="__STATIC__/img/down.png" />
								</span>
                    </div>
                    <ul class="help_content">
                        <?php if(is_array($help_type) || $help_type instanceof \think\Collection || $help_type instanceof \think\Paginator): $i = 0; $__LIST__ = $help_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                            <li>
                                <p class="help_top">
                                    <span>
                                        <img src="__STATIC__/uploads/<?php echo $val['img']; ?>"/>
                                    </span>
                                    <span><?php echo $val['name']; ?></span>
                                </p>
                                <?php if(is_array($help) || $help instanceof \think\Collection || $help instanceof \think\Paginator): $i = 0; $__LIST__ = $help;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$va): $mod = ($i % 2 );++$i;if($va['type']==$val['id']): ?>
                                    <p class="help_bottom">
                                        <a href="<?php echo url('help_details/index'); ?>?id=<?php echo $va['id']; ?>#help_detail">
                                            <span>&sdot;</span>
                                            <span><?php echo $va['name']; ?></span>
                                        </a>
                                    </p>
                                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                            </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
            <!--4-->
            <div id="res_down" class="Res_down">
                <div class="downloadBox">
                    <div class="titleBox" id="titleBox">
                        <h3>
                            <i class="fa fa-star-o"></i>&nbsp;资源下载&nbsp;<i class="fa fa-star-o"></i>
                        </h3>
                        <p>Resource&nbsp;&nbsp;download</p>
								<span>
									<img src="__STATIC__/img/down.png" />
								</span>
                    </div>

                    <div class="ResourcesBox">
                        <div class="operate">
                            <ul id="J_navlist">
                                <?php if(is_array($downloads) || $downloads instanceof \think\Collection || $downloads instanceof \think\Paginator): $i = 0; $__LIST__ = $downloads;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                                <li>
                                    <h4><?php echo $val['title']; ?></h4>
                                    <div class="list-item">
                                        <p>
                                            <a href="<?php echo $val['url']; ?>" target="_blank">
                                                百度网盘: <?php echo $val['url']; ?>
                                            </a>
                                        </p>
                                    </div>
                                </li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--5-->
            <div class="dot" id="dot">
                <div class="titleBox" id="titleBox">
                    <h3>
                        <i class="fa fa-star-o"></i>&nbsp;服务网点&nbsp;<i class="fa fa-star-o"></i>
                    </h3>
                    <p>SERVICE&nbsp;&nbsp;NETWORK</p>
							<span>
								<img src="__STATIC__/img/down.png" />
							</span>
                </div>
                <div class="dot_data">
                    <div class="data_display">
                        <div class="dataBox">
                            <dl>
                                <dt>
                                <p align="absmiddle">
                                    <span><i class="fa fa-map-marker"></i></span>
                                    <span>省级代理</span>
                                </p>
                                </dt>
                                <dd>
                                    <ul>
                                        <?php if(is_array($shopsites) || $shopsites instanceof \think\Collection || $shopsites instanceof \think\Paginator): $i = 0; $__LIST__ = $shopsites;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                                        <li>
                                            <p><?php echo $val['name']; ?></p>
                                            <p>
                                                <span><?php echo $val['address']; ?></span>
                                                <span>联系电话：<?php echo $val['tel']; ?></span>
                                            </p>
                                        </li>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </ul>
                                </dd>
                            </dl>
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
    //资源下载调用方法
    navList(12);
</script>
</body>
</html>
