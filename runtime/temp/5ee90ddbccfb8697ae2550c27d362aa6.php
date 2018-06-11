<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"E:\wamp64\www\dfqc_website\public/../application/admin\view\news\editnews.html";i:1528358663;}*/ ?>
<meta charset="utf-8" />
<script type="text/javascript" src="__STATIC__/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="__STATIC__/ueditor/ueditor.all.js"></script>
<link href="__STATIC__/css/add.css" rel="stylesheet" type="text/css" />
<form action="<?php echo url('news/editnews'); ?>?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
	<table style="width: 100%;">
		<?php if(is_array($news) || $news instanceof \think\Collection || $news instanceof \think\Paginator): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$va): $mod = ($i % 2 );++$i;?>	
		<tr>
			<td>新闻标题：</td>
			<td><input type="text" name="title" required value="<?php echo $va['title']; ?>" /></td>
		</tr>

		<tr>
			<td>新闻类型：</td>
			<td>
				<select name="nid">
					<?php foreach($newtype as $val):?>
					<option <?php if($va['nid'] ==$val['id']){echo 'selected';}?> value=<?php echo $val['id'];?> ><?php echo $val['name'];?></option>
					<?php endforeach;?>
				</select>
			</td>
		</tr>
		<tr>
			<td>新闻图片：</td>
			<td>
				<input type="file" name="image" class="image" id="file" />	
				<input type="text" style="width: 215px;height:28px;position: relative;right: 258px;" class="filetext" id="text" value="<?php echo $va['img']; ?>" />
				<button id="fileSpan" type="button" class="xiugaibtn" style="position: relative;right: 263px;height:28px;top:1px;">上传</button>
			</td>
		</tr>
		<tr>
			<td>新闻简介：</td>
			<td>
				<textarea name="intro" style="width:1000px;height:100px;line-height: 30px;"><?php echo $va['intro']; ?></textarea>
			<td>
		</tr>
		<tr>
			<td>新闻内容：</td>
			<td>
				<textarea  id="myEditor1" name="content" style="width:1000px;height:300px;line-height: 30px;"><?php echo $va['content']; ?></textarea>
			<td>
		</tr>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		<tr>
			<td class="tijiao"><input type="submit" value="修 改" /><input type="reset" value="取 消" /></td>
		</tr>
	</table>
</form>

<script type="text/javascript">
	//实例化编辑器
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
        function type(){
        	text.value = file.value;
        }
</script>