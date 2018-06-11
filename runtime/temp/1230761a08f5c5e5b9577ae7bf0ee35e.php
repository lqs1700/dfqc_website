<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"E:\wamp64\www\dfqc_website\public/../application/admin\view\shop_site\index.html";i:1526973483;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="__STATIC__/css/list.css" rel="stylesheet" type="text/css" />
</head>
<body>

<h3>网  点	列	表</h3>

<table cellspacing="1">
    <tr>
        <th style="width:5%">id</th>
        <th style="width:10%">名称</th>
        <th style="width:40%">地址</th>
        <th style="width:10%">联系人</th>
        <th style="width:15%">电话</th>
        <th style="width:10%">分类</th>
        <th style="width:10%">操作</th>
    </tr>

    <?php if(is_array($sites) || $sites instanceof \think\Collection || $sites instanceof \think\Paginator): $i = 0; $__LIST__ = $sites;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?>
    <tr>
        <td><?php echo $value['id']; ?></td>
        <td><?php echo $value['name']; ?></td>
        <td><?php echo $value['address']; ?></td>
        <td><?php echo $value['contact_person']; ?></td>
        <td><?php echo $value['tel']; ?></td>
        <td><?php echo $value['cid']; ?></td>
        <td>
            <a href="<?php echo url('edit'); ?>?id=<?php echo $value['id']; ?>">修改</a>
            <a href="<?php echo url('del'); ?>?id=<?php echo $value['id']; ?>">删除</a>
        </td>
    </tr>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<div class="page">
    <?php echo $page; ?>
</div><!--page end-->
</body>
</html>