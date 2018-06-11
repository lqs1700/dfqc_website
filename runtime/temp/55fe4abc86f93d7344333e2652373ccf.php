<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"E:\wamp64\www\dfqc_website\public/../application/admin\view\down_load\index.html";i:1523498348;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="__STATIC__/css/list.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h3>导	航	列	表</h3>
<table cellspacing="1">
    <tr>
        <th>标题</th>
        <th>url</th>
        <th>操作</th>
    </tr>
    <?php foreach($download as $value):?>
    <tr>
        <td><?php echo $value['title'];?></td>
        <td><?php echo $value['url'];?></td>
        <td><a href="<?php echo url('down_load/edit'); ?>?id=<?php echo $value['id'];?>">修改</a> <a href="<?php echo url('down_load/del'); ?>?id=<?php echo $value['id'];?>">删除</a></td>
    </tr>
    <?php endforeach;?>
</table>
<?php echo $page; ?>
</body>
</html>
