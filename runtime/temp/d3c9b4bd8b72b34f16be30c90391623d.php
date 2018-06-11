<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"E:\wamp64\www\dfqc_website\public/../application/admin\view\product\index.html";i:1523431888;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="__STATIC__/css/list.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h3>产	品	列	表</h3>
<table cellspacing="1">
	<tr>
		<th style="width:1%";>id</th>
		<th style="width:10%">名称</th>
		<th style="width:10%">价格</th>
		<th style="width:20%">淘宝链接</th>
		<th style="width:20%">京东链接</th>
		<th style="width:20%">图片</th>
		<th style="width:9%">版本</th>
		<th style="width:10%">操作</th>
	</tr>
	<?php if(is_array($products) || $products instanceof \think\Collection || $products instanceof \think\Paginator): $i = 0; $__LIST__ = $products;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
	<tr>
		<td><?php echo $val['id']; ?></td>
		<td><?php echo $val['name']; ?></td>
		<td><?php echo $val['price']; ?></td>
		<td><?php echo $val['taobao_url']; ?></td>
		<td><?php echo $val['jingdong_url']; ?></td>
		<td><img src="__STATIC__/uploads/<?php echo $val['img']; ?>"></td>
		<td><?php echo $val['p_type']; ?></td>
		<td><a href="<?php echo url('product/editproduct'); ?>?id=<?php echo $val['id']; ?>">修改</a>
		<a href="<?php echo url('product/delproduct'); ?>?id=<?php echo $val['id']; ?>">删除</a></td>
	</tr>
	<?php endforeach; endif; else: echo "" ;endif; ?>
</table>
	<div class="page">
		<?php echo $page; ?>
	</div><!--page end-->
<div class="clear"></div>
</body>
</html>