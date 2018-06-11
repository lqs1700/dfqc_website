<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"E:\wamp64\www\dfqc_website\public/../application/admin\view\company_info\edit.html";i:1522049260;}*/ ?>
<meta charset="utf-8" />
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<link href="__STATIC__/css/editCompany.css" rel="stylesheet" type="text/css" />
<form action="<?php echo url('/admin/company_info/edit'); ?>" method="POST" enctype="multipart/form-data">
	<table style="width: 100%;">
		<?php if(is_array($company_info) || $company_info instanceof \think\Collection || $company_info instanceof \think\Paginator): $i = 0; $__LIST__ = $company_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$va): $mod = ($i % 2 );++$i;?>
		<tr>
			<td style="width: 10%">京东店铺 :</td>
			<td><input type="text" name="web_jingdong" value="<?php echo $va['web_jingdong']; ?>" required /></td>
		</tr>
		<tr>
			<td style="width: 10%">淘宝店铺 :</td>
			<td><input type="text" name="web_taobao" value="<?php echo $va['web_taobao']; ?>" required /></td>
		</tr>
		<tr>
			<td style="width: 10%">慧聪店铺 :</td>
			<td><input type="text" name="web_huicong" value="<?php echo $va['web_huicong']; ?>" required /></td>
		</tr>
		<tr>
			<td style="width: 10%">联系电话1 :</td>
			<td><input type="text" name="tel1" value="<?php echo $va['tel1']; ?>" required /></td>
		</tr>
		<tr>
			<td style="width: 10%">联系电话2 :</td>
			<td><input type="text" name="tel2" value="<?php echo $va['tel2']; ?>" required /></td>
		</tr>
		<tr>
			<td style="width: 10%">地址1 :</td>
			<td><input type="text" name="address1" value="<?php echo $va['address1']; ?>" required /></td>
		</tr>
		<tr>
			<td style="width: 10%">地址2 :</td>
			<td><input type="text" name="address2" value="<?php echo $va['address2']; ?>" required /></td>
		</tr>
		<tr>
			<td class="tijiao"><input type="submit" value="修改" /><input type="reset" value="取消" /></td>
		</tr>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</table>
</form>
<script type="text/javascript">
		var file = document.getElementById("file");  
        var text = document.getElementById("text");  
        $("#fileSpan").click(function(){    
            file.click();  
        });  
        file.onchange = type;
        function type(){text.value = file.value;} 
</script>


