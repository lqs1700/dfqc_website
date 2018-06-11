<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"E:\wamp64\www\dfqc_website\public/../application/admin\view\company_info\index.html";i:1522049226;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="__STATIC__/css/list.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h3>联 系 信 息</h3>
<table cellspacing="1">
	<tr>
		<th>id</th>
		<th>京东店铺</th>
		<th>淘宝店铺</th>
		<th>慧聪店铺</th>
		<th>联系电话1</th>
		<th>联系电话2</th>
		<th>地址1</th>
		<th>地址1</th>
	</tr>
	<?php if(is_array($company_info) || $company_info instanceof \think\Collection || $company_info instanceof \think\Paginator): $i = 0; $__LIST__ = $company_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$va): $mod = ($i % 2 );++$i;?>
	<tr>
		<td><?php echo $va['id']; ?></td>
		<td><?php echo $va['web_jingdong']; ?></td>
		<td><?php echo $va['web_taobao']; ?></td>
		<td><?php echo $va['web_huicong']; ?></td>
		<td><?php echo $va['tel1']; ?></td>
		<td><?php echo $va['tel2']; ?></td>
		<td><?php echo $va['address1']; ?></td>
		<td><?php echo $va['address2']; ?></td>
	</tr>
	<?php endforeach; endif; else: echo "" ;endif; ?>
</table>
</body>
</html>