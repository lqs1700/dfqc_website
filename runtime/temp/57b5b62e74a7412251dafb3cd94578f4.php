<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"E:\wamp64\www\dfqc_website\public/../application/admin\view\code\addcode.html";i:1528359083;}*/ ?>
<meta charset="utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="__STATIC__/css/add.css" rel="stylesheet" type="text/css" />
<form action="<?php echo url('/admin/code/addCode'); ?>" method="POST" enctype="multipart/form-data">
	<table style="width: 104%;">
		<tr>
			<td style="width: 10%">二维码名称：</td>
			<td><input type="text" name="name" required /></td>
		</tr>

		<tr>
			<td>二维码图片：</td>
			<td><input type="file" name="image" id="file" class="image" required style="opacity: 0"/>
			<input type="text" style="width: 215px;height:28px;position: relative;right: 258px;" id="text" class="filetext"/>
			<button class="btn-primary" id="fileSpan" type="button" class="xiugaibtn" style="position: relative;right: 263px;height:28px;top:1px;">上传</button></td>
		</tr>
		<tr>
			<td class="tijiao"><input type="submit" value="添加" /><input type="reset" value="取消" /></td>
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

