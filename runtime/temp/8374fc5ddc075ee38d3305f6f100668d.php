<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"E:\wamp64\www\dfqc_website\public/../application/admin\view\help_center\index.html";i:1523419069;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="__STATIC__/css/list.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h3>帮 助 问 题 列 表</h3>
<table cellspacing="1">
	<tr>
		<th>id</th>
		<th>名称</th>
		<th>类型</th>
		<th>操作</th>
	</tr>
		<?php if(is_array($help) || $help instanceof \think\Collection || $help instanceof \think\Paginator): $i = 0; $__LIST__ = $help;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$va): $mod = ($i % 2 );++$i;?>
	<tr>
		<td><?php echo $va['id']; ?></td>
		<td><?php echo $va['name']; ?></td>
		<td><?php echo $va['h_type']; ?></td>
		<td><a href="<?php echo url('help_center/edit'); ?>?id=<?php echo $va['id']; ?>">修改</a> <a href="<?php echo url('help_center/del'); ?>?id=<?php echo $va['id']; ?>">删除</a></td>
	</tr>
	<?php endforeach; endif; else: echo "" ;endif; ?>
</table>
	<div class="page">
		<?php echo $page; ?>
	</div>
</body>
</html>