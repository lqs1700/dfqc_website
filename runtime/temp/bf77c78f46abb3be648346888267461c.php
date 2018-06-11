<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"E:\wamp64\www\dfqc_website\public/../application/admin\view\news\index.html";i:1523410604;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="__STATIC__/css/list.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h3>新	闻	列	表</h3>
<table cellspacing="1">
	<tr>
		<th style="width:2%";>id</th>
		<th style="width:10%">标题</th>
		<th style="width:10%">图片</th>
		<th style="width:8%">类型</th>
		<th style="width:50%">简介</th>
		<th style="width:10%">时间</th>
		<th style="width:10%">操作</th>
	</tr>
	<?php if(is_array($news) || $news instanceof \think\Collection || $news instanceof \think\Paginator): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?>
	<tr>
		<td><?php echo $value['id']; ?></td>
		<td><?php echo $value['title']; ?></td>
		<td><img src="__STATIC__/uploads/<?php echo $value['img']; ?>"></td>
		<td><?php echo $value['type']; ?></td>
		<td><?php echo $value['intro']; ?></td>
		<td><?php echo $value['time']; ?></td>
		<td><a href="<?php echo url('news/editnews'); ?>?id=<?php echo $value['id']; ?>">修改</a>
		<a href="<?php echo url('news/delnews'); ?>?id=<?php echo $value['id']; ?>">删除</a></td>
	</tr>
	<?php endforeach; endif; else: echo "" ;endif; ?>
</table>
	<div class="page">
		<?php echo $page; ?>
	</div>
<div class="clear"></div>
</body>
</html>