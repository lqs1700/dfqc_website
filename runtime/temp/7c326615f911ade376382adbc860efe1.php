<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"E:\wamp64\www\dfqc_website\public/../application/admin\view\help_center\add_type.html";i:1522049109;}*/ ?>
<meta charset="utf-8" />
<link href="__STATIC__/css/addHelpType.css" rel="stylesheet" type="text/css" />
<form action="<?php echo url('help_center/addtype'); ?>" method="post" enctype="multipart/form-data">
	<table style="width: 100%;">
		
		<tr>
			<td style="width:10%;">新分类名称：</td>	
			<td>
				<input type="text" id="id_ugn" required name="name">
			</td>
		</tr>
		<tr>
			<td>新分类图标：</td>
			<td><input type="file" name="image" id="file" class="image" required style="opacity: 0"/>
			<input type="text" style="width: 232px;height:28px;position: relative;right: 105px;top:9px;" id="text" class="filetext"/>
			<button id="fileSpan" type="button" class="xiugaibtn" style="position: relative;right: 110px;top:9px;height:28px;">上传</button></td>
		</tr>

		<tr>
			<td class="tijiao"><input type="submit" value="提 交" /><input type="reset" value="取 消" /></td>
		</tr>	
	</table>
</form>
	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>	
	<script type="text/javascript">
		$("#id_ugn").blur(function() {
			var type_name = $("#id_ugn").val();
			if (type_name) {		
				$.ajax({
					url:"<?php echo url('/admin/help_center/ajax'); ?>",
					method: 'GET',
					data: {type_name: type_name},
					dataType: 'JSON',
					success: function(response) {		
						if (response) {
							var tip = '<span style="color: red">'+ response['msg'] +'</span>';
							$("#id_ugn").siblings("span").remove();
							$("#id_ugn").parent().append(tip);	
						}
					}
				});
			} else {
				var tip = '<span style="color: red">分类名称不能为空</span>';
				$("#id_ugn").siblings("span").remove();
				$("#id_ugn").parent().append(tip);
			}
		})
	</script>
	<script type="text/javascript">
		var file = document.getElementById("file");  
        var text = document.getElementById("text");  
        $("#fileSpan").click(function(){    
            file.click();  
        });  
        file.onchange = type;
        function type(){text.value = file.value;} 
	</script>

