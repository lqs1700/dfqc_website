<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:79:"E:\wamp64\www\dfqc_website\public/../application/index\view\about_us\index.html";i:1524638917;s:78:"E:\wamp64\www\dfqc_website\public/../application/index\view\public\header.html";i:1523509644;s:78:"E:\wamp64\www\dfqc_website\public/../application/index\view\public\footer.html";i:1523945357;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>公司介绍</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--国产浏览器的兼容-->
    <meta name="renderer" content="webkit">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link type="text/css" rel="stylesheet" href="__STATIC__/css/dfv_web.css"/>
    <script type="text/javascript" src="__STATIC__/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="__STATIC__/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="__STATIC__/js/jquery.roundabout.min.js"></script>
    <script type="text/javascript" src="__STATIC__/js/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="__STATIC__/js/ReturnTop.js"></script>
    <script type="text/javascript" src="__STATIC__/js/dfv_web.js"></script>
    <script type="text/javascript" src="__STATIC__/js/indexTwo.js"></script>
    <!--[if lt IE 9]>
    <script src="__STATIC__/html5shiv.js"></script>
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
        <div class="ContentBlocks">
            <div class="contentBox">

                <div class="enter_box">
                    <!--1-->
                    <div class="headBox"></div>
                    <!--2-->
                    <div class="intCon" id="intCon">
                        <h2>
                            <i class="fa fa-star-o"></i>&nbsp;大屏导航缔造者&nbsp;<i class="fa fa-star-o"></i>
                        </h2>
                        <h4>
                            <span class="txt-rotate" data-period=500  data-rotate='[ "智联天下·启辰未来", "智联天下·启辰未来"]'></span>
                        </h4>
                    </div>
                    <!--3-->
                    <div class="briefDes">
                        <div class="leftVideo">
                            <video controls="controls" preload="auto">
                                <source src="__STATIC__/img/movie.mp4" type="video/mp4">
                                <source src="__STATIC__/img/movie.ogg" type="video/ogg">
                                您的浏览器不支持 HTML5 video 标签。
                            </video>
                        </div>
                        <div class="rightText">
                            <h3>
                                <i class="fa fa-star-o"></i>&nbsp;关于我们&nbsp;<i class="fa fa-star-o"></i>
                            </h3>
                            <p>
                                东方启辰信息技术(深圳)股份有限公司成立于2012年11月20日。是一家集科研、设计、生产、销售和系统集成为一体的高新技术企业。
                                创立了“DFV”大屏智能车机品牌，公司于 2012年9月成功开发出“嵌入式大屏智能汽车互联网电脑系统”。
                                凭借在汽车电子方面的专业水平和持续创新的技术，在低迷的WINCE车机市场环境下创造了在中国大陆安卓智能大屏市场，并且迅速崛起。
                                在充分分析了同行技术的基础上，率先成功开发出数款专车专用10寸、12寸安卓智能导航系列专利产品，
                                并以一流的产品质量和精湛的技术服务受到了用户的一致好评。
                                从“一直被山寨，从未被超越”的自信，到“大爱无疆，大屏东方”的有责，我们在向下一个未来奔去——— “日出东方，启辰未来”。
                            </p>
                        </div>
                    </div>
                    <!--4-->
                    <div class="prospect">
                        <ul>
                            <li>
                                <h4><span><i class="fa fa-car"></i></span><i class="prospect_title">新型定位</i></h4>
                                <p>
                                    DFV-IOV即车联网服务运营商，基于车联网产业生态环境中的高性价比及安全可靠使用保障的服务运营商。
                                </p>
                            </li>
                            <li>
                                <h4><span><i class="fa fa-mouse-pointer"></i></span><i class="prospect_title">主营方向</i></h4>
                                <p>
                                    硬件：嵌入式大屏智能汽车互联网系统<br>
                                    软件：DFV-IOV Ver1.0，基于电信级云管端全生命周期的开放式能力平台。
                                </p>
                            </li>
                            <li>
                                <h4><span><i class="fa fa-pie-chart"></i></span><i class="prospect_title">战略布局</i></h4>
                                <p>
                                    未来三年内，东方启辰要通过适时的硬件及软件迭代，搭建三屏互动核心入口与服务运营充分融合的生态圈。
                                </p>
                            </li>
                            <li>
                                <h4><span><i class="fa fa-line-chart"></i></span><i class="prospect_title">行业优势</i></h4>
                                <p>
                                    第一个阶段，面向个人用户。第二个阶段，面向行业客户。第三个阶段，面向政府基础设施与服务配套。
                                </p>
                            </li>
                        </ul>
                    </div>
                    <!--5-->
                    <div class="Slogan">
                    </div>
                    <!--6-->
                    <div class="course" id="course">
                        <div class="course_title">
                            <p>ENTERPRISE&nbsp;&nbsp;INTRODUCTION</p>
                            <h3>发展历程</h3>
						<span>
							<img src="__STATIC__/img/down.png" />
						</span>
                        </div>

                        <div class="time_axis">
                            <div class="axis">
                                <img src="__STATIC__/img/axis.png" />
                            </div>

                            <div class="devel_pro_display">
                                <ul>
                                    <li>
                                        <div class="c_one">
                                            <div class="c_content_box">
                                                <div class="left_con">
                                                    <img src="__STATIC__/img/course1.png" />
                                                </div>
                                                <div class="right_con">
                                                    <h4>2016年10月27日</h4>
                                                    <h5>2016年10月27日上午东方启辰在安徽省宁国市召开“智联天下启辰未来 中国·宁国车联网产业基地启动仪式”完美收官。</h5>
                                                    <p>
                                                        东方启辰作为开启大屏车机时代的先导，如今又以独占鳌头的车联网解决方案携手中国电信、腾讯、全志科技、大唐电信等行业巨头，
                                                        一起实施车联网生态产业基地建设与运营项目，推动互联网产业发展和产业化进程。
                                                        而这次宁国车联网产业基地启动仪式，汇集了全国800多家运营商亲临现场，
                                                        峰会除了为运营商朋友答疑解惑外，也是为了促进双方合作互利共赢。
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="c_two">
                                            <div class="c_content_box">
                                                <div class="left_con">
                                                    <h4>2016年12月19日</h4>
                                                    <h5>股份有限公司创立大会</h5>
                                                    <p>
                                                        李东方董事长带着一大批核心运营商、上下游合作商和上市伙伴坐豪华游艇出发，
                                                        在大鹏湾海面上宣布东方启辰信息技术（深圳）股份有限公司成立。
                                                    </p>
                                                </div>
                                                <div class="right_con">
                                                    <img src="__STATIC__/img/course2.png" />
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="c_three">
                                            <div class="c_content_box">
                                                <div class="left_con">
                                                    <img src="__STATIC__/img/course3.png" />
                                                </div>
                                                <div class="right_con">
                                                    <h4>2017年5月19日</h4>
                                                    <h5>2017年度汽车电子行业品牌盛会新闻发布会暨汽车电子市场趋势（深圳）交流大会现场发布重磅消息</h5>
                                                    <p>
                                                        东方启辰信息技术（深圳）股份有限公司与慧聪汽车电子网举行庄重的签约仪式，正式成为“2017年度汽车电子行业品牌盛会”总冠名商。
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="c_four">
                                            <div class="c_content_box">
                                                <div class="left_con">
                                                    <h4>2017年11月28日</h4>
                                                    <h5>中国电信与东方启辰物联网战略合作协议签约</h5>
                                                    <p>
                                                        中国电信全国首家车联网战略合作单位授牌仪式在我市举行。
                                                        中国电信物联网公司总经理赵建军，我市市委常委、常务副市长侯正茂出席仪式，宣城市、我市相关单位负责人及相关企业参加了仪式。
                                                    </p>
                                                </div>
                                                <div class="right_con">
                                                    <img src="__STATIC__/img/course4.png" />
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <!--7-->
                    <div class="enterStyle" id="enter_style">
                        <div class="styleBox">
                            <div class="titleBox">
                                <h3>
                                    <i class="fa fa-star-o"></i>&nbsp;企业风采&nbsp;<i class="fa fa-star-o"></i>
                                </h3>
                                <p>Corporate&nbsp;&nbsp;Style</p>
										<span>
											<img src="__STATIC__/img/down.png" />
										</span>
                            </div>

                            <div class="styleBox_con">
                                <ul>
                                    <li>
                                        <a href="###">
                                            <img src="__STATIC__/img/tupian2.JPG"/>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="###">
                                            <img src="__STATIC__/img/tupian3.jpg"/>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="###">
                                            <img src="__STATIC__/img/tupian12.jpg"/>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="###">
                                            <img src="__STATIC__/img/tupian11.jpg"/>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--8-->
                    <div class="strength">
                        <div class="strengthBox">
                            <div class="strengthBox_title">
                                <h3>
                                    <i class="fa fa-star-o"></i>    我们的团队   <i class="fa fa-star-o"></i>
                                </h3>
                                <p>我们拥有一支超过6年工作经验的技术研发团队，领先的技术运营服务体系，是我们立足于车联网行业的强大支撑</p>
                            </div>
                            <div class="strengthBox_img">
                                <ul>
                                    <li>
                                        <img src="__STATIC__/img/timg5.jpg"/>
                                    </li>
                                    <li>
                                        <img src="__STATIC__/img/tupian1.jpg"/>
                                    </li>
                                    <li>
                                        <img src="__STATIC__/img/tupian5.jpg"/>
                                    </li>
                                    <li>
                                        <img src="__STATIC__/img/tupian7.jpg"/>
                                    </li>
                                </ul>
                            </div>
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
    $(".sloganRoll").slide({
        mainCell:".sloganBox ul",
        effect:"leftLoop",
        interTime:3500,
        autoPlay:true
    });
    //企业风采
    $('.styleBox_con ul').roundabout({
        duration: 1000,
        minScale: 0.6,
        autoplay: true,
        autoplayDuration: 3000,
        minOpacity: 0,
        maxOpacity: 1,
        reflect: true,
        startingChild: 3,
        autoplayInitialDelay: 2000,
        autoplayPauseOnHover: true,
        enableDrag: true
    });

    //团队
    $(".content_A") .hover(function(){
        $(this) .children(".txt").stop() .animate({height:"360px"},200);
        $(this) .find(".txt h3").stop() .animate({paddingTop:"130"},550);
        $(this) .find(".txt p").stop() .show();
    },function(){
        $(this) .children(".txt").stop() .animate({height:"100px"},200);
        $(this) .find(".txt h3").stop().animate({paddingTop:"0px"},550);
        $(this) .find(".txt p").stop() .hide();
    });
</script>
</body>
</html>
