<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"E:\wamp64\www\dfqc_website\public/../application/admin\view\product\editproduct.html";i:1523689783;}*/ ?>
<meta charset="utf-8" />
<link href="__STATIC__/css/add.css" rel="stylesheet" type="text/css" />

<form action="<?php echo url('product/editproduct'); ?>?id=<?php echo $product['id']; ?>" method="POST" enctype="multipart/form-data">
	<table style="width: 68%;">
		<tr>
			<td>产品名称：</td>
			<td><input type="text" name="name" required value="<?php echo $product['name']; ?>" /></td>
		</tr>
		<tr>
			<td>产品价格：</td>
			<td><input type="text" name="price" required value="<?php echo $product['price']; ?>" /></td>
		</tr>

		<tr>
			<td>淘宝链接：</td>
			<td><input type="text" name="taobao_url" required value=<?php echo $product['taobao_url']; ?> /></td>
		</tr>

		<tr>
			<td>京东链接：</td>
			<td><input type="text" name="jingdong_url" required value=<?php echo $product['jingdong_url']; ?> /></td>
		</tr>

		<tr>
			<td>产品图片：</td>
			<td><input type="file" name="image" id="file" class="image" style="opacity: 0"/>
				<input type="text" value="<?php echo $product['img']; ?>" style="width: 215px;height:28px;position: relative;right: 258px;" id="text" class="filetext"/>
				<button id="fileSpan" type="button" class="xiugaibtn" style="position: relative;right: 263px;height:28px;top:1px;">修改</button>
			</td>
		</tr>
		
		<tr>
			<td>产品版本：</td>
			<td>
				<select name="version">
					<?php if(is_array($product_version) || $product_version instanceof \think\Collection || $product_version instanceof \think\Paginator): $i = 0; $__LIST__ = $product_version;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
						<option value=<?php echo $val['id']; if($product['version'] ==$val['id']): ?> selected <?php endif; ?> ><?php echo $val['name']; ?></option>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</td>
		</tr>
		<tr>
			<td class="tijiao"><input type="submit" value="修 改" /><input type="reset" value="取 消" /></td>
		</tr>
	
	</table>
</form>

<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>	

<script type="text/javascript">
		var file = document.getElementById("file");  
        var text = document.getElementById("text");  
        $("#fileSpan").click(function(){    
            file.click();  
        });  
        file.onchange = type;
        function type(){text.value = file.value;} 
</script>
