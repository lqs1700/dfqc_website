<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"E:\wamp64\www\dfqc_website\public/../application/admin\view\privilege\index.html";i:1522047527;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="__STATIC__/css/list.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h3>权	限	列	表</h3>
<table cellspacing="1">
	<tr>
		<th>id</th>
		<th>权限组</th>
		<th>权限</th>
		<th>操作</th>
	</tr>
		<?php foreach($pri_group as $value):?>
	<tr>		
		<td><?php echo $value['id'];?></td>
		<td><?php echo $value['pri_name'];?></td>
		<td class="pri_name">
			<?php foreach($privilege as $valu):if(in_array($valu['id'],json_decode($value['privilege']))){?>
			<?php echo $valu['name'];}endforeach;?>
		</td>
		<?php if($value['pri_name']=='超级管理员'):?>
		<td>无法操作</td>
		<?php endif;if($value['pri_name']!='超级管理员'):?>
		<td><a href="<?php echo url('editprivilege'); ?>?id=<?php echo $value['id'];?>">修改</a>
		<a href="<?php echo url('delprivilege'); ?>?id=<?php echo $value['id'];?>">删除</a></td>
		<?php endif;?>

	</tr>

	<?php endforeach;?>
</table>

</body>
</html>

