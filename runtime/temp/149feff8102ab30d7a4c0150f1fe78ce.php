<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"E:\wamp64\www\dfqc_website\public/../application/admin\view\code\index.html";i:1522049278;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="__STATIC__/css/list.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h3>二	维	码	列	表</h3>
<table cellspacing="1">
	<tr>
		<th>id</th>
		<th>名称</th>
		<th>图片</th>
		<th>图片路径</th>
		<th>操作</th>
	</tr>
	<?php if(is_array($code) || $code instanceof \think\Collection || $code instanceof \think\Paginator): $i = 0; $__LIST__ = $code;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$va): $mod = ($i % 2 );++$i;?>
	<tr>
		<td><?php echo $va['id']; ?></td>
		<td><?php echo $va['name']; ?></td>
		<td><img src="__STATIC__/uploads/<?php echo $va['img']; ?>"></td>
		<td><?php echo $va['img']; ?></td>
		<td>
			<a href="<?php echo url('code/delcode'); ?>?id=<?php echo $va['id']; ?>">删除</a>
		</td>
	</tr>
	<?php endforeach; endif; else: echo "" ;endif; ?>
</table>
	<div class="page">
		<?php echo $page; ?>
	</div>
</body>
</html>