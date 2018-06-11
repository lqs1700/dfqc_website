<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"E:\wamp64\www\dfqc_website\public/../application/admin\view\index\index.html";i:1524015316;}*/ ?>
<html>
<head>
<meta charset="utf-8">
<title>东方启辰</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="__STATIC__/css/adminStyle.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__STATIC__/js/jquery1.js"></script>
<script type="text/javascript">
    $(document).ready(
            function() {
                $(".div2").click(
                        function() {
                            $(this).next("ul").slideToggle("slow").siblings(
                                    ".div3:visible").slideUp("slow");
                            $(this).next("ul").find("li").removeClass("current_li");
                        });
                $(".a").click(
                        function(){
                            $(this).parent().addClass("current_li").siblings().removeClass("current_li");
                        });
            });

    function openurl(url) {
        var rframe = parent.document.getElementById("rightFrame");
        rframe.src = url;
    }
</script>
<script type="text/javascript">

</script>
</head>
<body>
    <div class="top2">
        <div class="logo">
            <a href="<?php echo url('index/index'); ?>"><img src="__STATIC__/img/logo2.png" /></a>
        </div>
        <div class="title" >
            <h4>官网后台管理系统</h4>
        </div>
        <div class="fr top-link">
            <a href="#" target="mainCont" title="DeathGhost"><i class="adminIcon"></i><span><?php echo $pri_name; ?>：<?php echo $admin; ?></span></a><a href="<?php echo url('login/loginout'); ?>">退出登陆</a>
        </div>
    </div>

    <div class="left">
        <div class="div1">
        <?php foreach($fath as $val):?>
            <div class="div2">
                <img src="__STATIC__/<?php echo $val['icon']; ?>"></img>
                <?php echo $val['name'];?>
            </div>
            <ul class="div3">
                <?php foreach($sub as $valu):if($valu['cid']==$val['id']):?>
                <li><a class="a" href="<?php echo url($valu['url']); ?>" target="rightFrame"
                    onClick="openurl('videoQuery.html');"><?php echo $valu['name'];?></a>
                    <?php endif;?>
                </li>
                <?php endforeach;?>
            </ul>
        <?php endforeach;?>
        </div>
    </div>

    <div class="right" style="width: 88%;">
        <iframe id="rightFrame" src="<?php echo url('index/backendindex'); ?>" name="rightFrame" width="100%" height="100%"
            scrolling="auto" marginheight="0" marginwidth="0" align="center"
            style="background-color: white;border: 5px solid #d2d0d0; margin: 0 auto; padding: 0px;">
        </iframe>
    </div>

</body>
</html>

</script>