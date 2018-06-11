<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"E:\wamp64\www\dfqc_website\public/../application/admin\view\admin_user\adduser.html";i:1523516093;}*/ ?>
<meta charset="utf-8" />
<link href="__STATIC__/css/addUser.css" rel="stylesheet" type="text/css" />
<form action="<?php echo url('/admin/admin_user/adduser'); ?>" method="post">
	<table style="width: 100%;">
		<tr>
			<td>用户名：</td>
			<td><input type="text" name="user_name" value="" required id="id_ugn"/></td>
		</tr>
		<tr>
			<td>密&nbsp;&nbsp;码：&nbsp;</td>
			<td><input type="password" name="password" value="" required id="pa_ugn"/></td>
		</tr>
		<tr>
			<td>权限组：</td>
			<td>
			<select name="pri_name" >
				<?php foreach($pri_grou as $val){?>
				<option value=<?php echo $val['id'];?>><?php echo $val['pri_name'];?></option>
				<?php }?>	
			</select>
			</td>
		</tr>	
		<tr>
			<td  class="tijiao"><input type="submit" value="提 交" /><input type="reset" value="重 置" /></td>
		</tr>
	</table>
</form>	
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>	
<script type="text/javascript">
	$("#id_ugn").blur(function() {
		var user_group_name = $("#id_ugn").val();
		if (user_group_name) {
			$.ajax({
				url:"<?php echo url('/admin/admin_user/ajax'); ?>",
				method: 'GET',
				data: {user_group_name: user_group_name},
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
			var tip = '<span style="color: red">用户名不能为空</span>';
			$("#id_ugn").siblings("span").remove();
			$("#id_ugn").parent().append(tip);
		}
	})
</script>

<script type="text/javascript">
	$("#pa_ugn").blur(function() {
		var user_group_name = $("#pa_ugn").val();
		if (user_group_name) {
			
			$.ajax({
				url:"<?php echo url('/admin/admin_user/ajax1'); ?>",
				method: 'GET',
				data: {user_group_name: user_group_name},
				dataType: 'JSON',
				success: function(response) {						
					if (response) {
						var tip = '<span style="color: red">'+ response['msg'] +'</span>';
						$("#pa_ugn").siblings("span").remove();
						$("#pa_ugn").parent().append(tip);	
					}
				}
			});
		} else {
			var tip = '<span style="color: red">请输入密码</span>';
			$("#pa_ugn").siblings("span").remove();
			$("#pa_ugn").parent().append(tip);
		}
	})
</script>