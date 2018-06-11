<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"E:\wamp64\www\dfqc_website\public/../application/admin\view\news\addnews.html";i:1523343292;}*/ ?>
<meta charset="utf-8" />
<script type="text/javascript" src="__STATIC__/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="__STATIC__/ueditor/ueditor.all.js"></script>
<link href="__STATIC__/css/add.css" rel="stylesheet" type="text/css" />

<form action="<?php echo url('addNews'); ?>" method="POST" enctype="multipart/form-data">
	<table style="width: 100%;">
		<tr>
			<td>新闻标题：</td>
			<td><input type="text" name="title" required /></td>
		</tr>
		<tr>
			<td>新闻类型：</td>
			<td>
				<select name="nid">
					<?php foreach($newtype as $val):?>
					<option value="<?php echo $val['id'];?>"><?php echo $val['name'];?></option>
					<?php endforeach;?>
				</select>
			</td>
		</tr>
		<tr>
			<td>新闻图片：</td>
			<td><input type="file" name="image" id="file" class="image" required style="opacity: 0"/>
			<input type="text" style="width: 215px;height:28px;position: relative;right: 258px;" id="text" class="filetext"/>
			<button id="fileSpan" type="button" class="xiugaibtn" style="position: relative;right: 263px;height:28px;top:1px;">上传</button></td>
		</tr>
		<tr>
			<td>新闻简介：</td>
			<td>
				<textarea name="intro" style="width:1000px;height:100px;line-height: 30px;"></textarea>
			<td>
		</tr>
		<tr>
			<td>新闻内容：</td>
			<td>
				<textarea id="myEditor1" name="content" style="width:1000px;height:300px;line-height: 30px;"></textarea>
			<td>
		</tr>
		<tr>
			<td class="tijiao"><input type="submit" value="提 交" /><input type="reset" value="取 消" /></td>
		</tr>
	</table>
</form>

<script type="text/javascript">
	var ue = UE.getEditor('myEditor1');
</script>
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