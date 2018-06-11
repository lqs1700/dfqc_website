<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"E:\wamp64\www\dfqc_website\public/../application/admin\view\admin_user\index.html";i:1523689188;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="__STATIC__/css/list.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h3>用	户	列	表</h3>
<table cellspacing="1">
	<tr>
		<th>用户ID</th>
		<th>用户名</th>
		<th>用户分类</th>
		<th>操作</th>
	</tr>

	<?php if(is_array($prigou) || $prigou instanceof \think\Collection || $prigou instanceof \think\Paginator): $i = 0; $__LIST__ = $prigou;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?>
		<tr>
			<td><?php echo $value['id']; ?></td>
			<td><?php echo $value['name']; ?></td>
			<td><?php echo $value['p_type']; ?></td>
			<td><?php if($value['p_type']=='超级管理员'): ?>无法修改
				<?php else: ?><a href="<?php echo url('edituser'); ?>?id=<?php echo $value['id'];?>&val=balcoon">修改</a>
						<a href="<?php echo url('deluser'); ?>?id=<?php echo $value['id'];?>">删除</a>
				<?php endif; ?>
			</td>
		</tr>
	<?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<div class="clear"></div>
</body>
</html>