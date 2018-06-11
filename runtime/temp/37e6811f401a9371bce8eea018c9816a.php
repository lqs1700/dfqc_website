<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"E:\wamp64\www\dfqc_website\public/../application/admin\view\help_center\edit.html";i:1523418848;}*/ ?>
<meta charset="utf-8" />
<script type="text/javascript" src="__STATIC__/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="__STATIC__/ueditor/ueditor.all.js"></script>
<link href="__STATIC__/css/add.css" rel="stylesheet" type="text/css" />

<form action="<?php echo url('edit'); ?>?id=<?php echo $help['id']; ?>" method="POST" enctype="multipart/form-data">
    <table style="width: 100%;">
        <tr>
            <td>标题：</td>
            <td><input type="text" name="name" required value=<?php echo $help['name']; ?> /></td>
        </tr>
        <tr>
            <td>类型：</td>
            <td>
                <select name="type">
                    <?php foreach($help_type as $val):?>
                    <option <?php if($help['type']==$val['id']): ?>selected<?php endif; ?> value="<?php echo $val['id'];?>"><?php echo $val['name'];?></option>
                    <?php endforeach;?>
                </select>
            </td>
        </tr>
        <tr>
            <td>新闻内容：</td>
            <td>
                <textarea id="myEditor1" name="content" style="width:1000px;height:300px;line-height: 30px;"><?php echo $help['content']; ?></textarea>
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
