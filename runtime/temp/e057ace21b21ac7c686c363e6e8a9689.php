<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"E:\wamp64\www\dfqc_website\public/../application/admin\view\admin_user\edituser.html";i:1523516020;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="__STATIC__/css/addUser.css" rel="stylesheet" type="text/css" />
	<title>Document</title>
</head>
<body>
	<form action="<?php echo url('admin_user/edituser'); ?>?id=<?php echo $val['id'];?>" method="POST">
	<table style="width: 100%;">
		<tr>
			<td>用户名：</td>
			<td><?php echo $val['name'];?></td>
		</tr>
		<tr>
			<td>密&nbsp;&nbsp;&nbsp;码：&nbsp;</td>
			<td><input type="password" name="password" required id="change_pas" /></td>
		</tr>
		<tr>
			<td>权限组：</td>
			<td>
			<select name="pri_name" >
				<?php foreach($pri_grou as $va){?>		
				<option value="<?php echo $va['id'];?>" <?php if($va['id']==$val['cid']){echo "selected";}?> ><?php echo $va['pri_name'];?></option>
				<?php }?>	
			</select>
			</td>
		</tr>	
		<tr>
			<td  class="tijiao"><input type="submit" value="修改" /><input type="reset" value="取消" /></td>
		</tr>
	</table>
</form>

<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>	

<script type="text/javascript">
	$("#change_pas").blur(function() {
		var user_group_name = $("#change_pas").val();
		if (user_group_name) {
			$.ajax({
				url:"<?php echo url('/admin/admin_user/ajax1'); ?>",
				method: 'GET',
				data: {user_group_name: user_group_name},
				dataType: 'JSON',
				success: function(response) {						
					if (response) {
						var tip = '<span style="color: red">'+ response['msg'] +'</span>';
						$("#change_pas").siblings("span").remove();
						$("#change_pas").parent().append(tip);	
					}
				}
			});
		} else {
			var tip = '<span style="color: red">请输入密码</span>';
			$("#change_pas").siblings("span").remove();
			$("#change_pas").parent().append(tip);
		}
	})
</script>
</body>
</html>