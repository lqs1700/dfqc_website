<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"E:\wamp64\www\dfqc_website\public/../application/admin\view\help_center\helptype.html";i:1522048993;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="__STATIC__/css/helpType.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h3>帮 助 类 型	列 表</h3>
<table cellspacing="1">
	<tr>
		<th>id</th>
		<th>名称</th>
		<th>图标</th>
		<th>路径</th>
		<th>操作</th>
	</tr>
		<?php if(is_array($help_type) || $help_type instanceof \think\Collection || $help_type instanceof \think\Paginator): $i = 0; $__LIST__ = $help_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$va): $mod = ($i % 2 );++$i;?>
	<tr>
		<td><?php echo $va['id']; ?></td>
		<td><?php echo $va['name']; ?></td>
		<td><img src="__STATIC__/uploads/<?php echo $va['img']; ?>"></td>
		<td><?php echo $va['img']; ?></td>
		<td><a href="<?php echo url('help_center/deltype'); ?>?id=<?php echo $va['id']; ?>">删除</a></td>
	</tr>
	<?php endforeach; endif; else: echo "" ;endif; ?>
</table>
	<div class="page">
		<?php echo $page; ?>
	</div>
</body>
</html>