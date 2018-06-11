<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"E:\wamp64\www\dfqc_website\public/../application/admin\view\banner\index.html";i:1522049333;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="__STATIC__/css/list.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h3>banner	列	表</h3>
<table cellspacing="1">
	<tr>
		<th>id</th>
		<th>图片</th>
		<th>路径</th>
		<th>操作</th>
	</tr>
		<?php if(is_array($banner) || $banner instanceof \think\Collection || $banner instanceof \think\Paginator): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$va): $mod = ($i % 2 );++$i;?>
	<tr>
		<td><?php echo $va['id']; ?></td>
		<td><img src="__STATIC__/uploads/<?php echo $va['img']; ?>"></td>
		<td><?php echo $va['img']; ?></td>
		<td><a href="<?php echo url('banner/delbanner'); ?>?id=<?php echo $va['id']; ?>">删除</a></td>
	</tr>
	<?php endforeach; endif; else: echo "" ;endif; ?>
</table>
	<div class="page">
		<?php echo $page; ?>
	</div>
</body>
</html>