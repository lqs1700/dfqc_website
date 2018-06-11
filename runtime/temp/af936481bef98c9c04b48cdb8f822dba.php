<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:87:"E:\wamp64\www\dfqc_website\public/../application/admin\view\privilege\addprivilege.html";i:1522048374;}*/ ?>

<meta charset="utf-8" />
<link href="__STATIC__/css/editPrivilege.css" rel="stylesheet" type="text/css" />
<form action="<?php echo url('/admin/privilege/addprivilege'); ?>" method="post">
	<table>
		<tr>
			<td>权限组名：</td>	
			<td>
				<input type="text" id="id_ugn" required name="pri_grou">
			</td>

		</tr>
	<?php foreach($fath as $val):?>
		<tr>	
			<td><input type="checkbox" name="fath[]" value="<?php echo $val['id']?>" /><?php echo $val['name'];?></td>
		<?php foreach($sub as $valu):if($valu['cid']==$val['id']):?>
			<td><input type="checkbox" name="fath[]" value="<?php echo $valu['id'];?>" /><?php echo $valu['name'];?></td>
		<?php endif;endforeach;?>

		</tr>
	<?php endforeach;?>
		<tr>
			<td><input id="allChecked" class="allChk" type="button" name="sel" value="全选/取消" onclick="selectAllDels()"/></td>
		</tr>	
		<tr>
			<td class="tijiao"><input type="submit" value="提 交" /><input type="reset" value="重 置" /></td>
		</tr>
	</table>
</form>
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>	
<script type="text/javascript">
	$("#id_ugn").blur(function() {
		var user_group_name = $("#id_ugn").val();
		if (user_group_name) {		
			$.ajax({
				url:"<?php echo url('/admin/privilege/ajax'); ?>",
				method: 'GET',
				data: {user_group_name: user_group_name},
				dataType: 'JSON',
				success: function(response) {		
					if (response) {
						var tip = '<td class="span">'+'<span style="color: red">'+ response['msg'] +'</span>'+'</td>';
						$("#id_ugn").parents('tr').find(".span").remove();
						$("#id_ugn").parents('tr').append(tip);	
					}
				}
			});
		} else {
			var tip = '<td class="span">'+'<span style="color: red">权限名不能为空</span>'+'</td>';
			$("#id_ugn").parents('tr').find(".span").remove();
			$("#id_ugn").parents('tr').append(tip);	
		}
	})
</script>
<script src="__STATIC__/js/jquery-1.11.3.js"></script>
<script type="text/javascript">
/*全选或取消全选*/
function selectAllDels(){
  var allWp=document.getElementsByName("fath[]");
  var selOrUnsel=false;
  for(var i=0; i<allWp.length;i++){
    if(allWp[i].checked){
      selOrUnsel=true;
      break;
    }
  }
  if(selOrUnsel){
    allUnchk(allWp);
  }else{
    allchk(allWp);
  }
}

function allchk(allWp){
  for(var i=0; i<allWp.length;i++ ){
    allWp[i].checked=true;
  }
}
function allUnchk(allWp){
  for(var i=0; i<allWp.length;i++){
    allWp[i].checked=false;
  }
}
</script>
