<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"E:\wamp64\www\dfqc_website\public/../application/admin\view\news\newtype.html";i:1522048406;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="__STATIC__/css/list.css" rel="stylesheet" type="text/css" />
	<link href="__STATIC__/css/listType.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h3>新	闻	分	类	列	表</h3>
<table cellspacing="1">
	<tr class="add">
		<td><a href="<?php echo url('news/addnewtype'); ?>">+添加分类</a></td>
	</tr>
	<tr>
		<th style="width:5%";>id</th>
		<th style="width:20%">分类名称</th>
		<th style="width:10%">操作</th>
	</tr>
	<?php foreach($res as $value):?>
	<tr>
		<td><?php echo $value['id'];?></td>
		<td><?php echo $value['name'];?></td>
		<td><a href="<?php echo url('delNewType'); ?>?id=<?php echo $value['id'];?>">删除</a></td>
	</tr>
	<?php endforeach;?>
</table>
</body>
</html>