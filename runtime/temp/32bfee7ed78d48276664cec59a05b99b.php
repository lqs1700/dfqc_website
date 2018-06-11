<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"E:\wamp64\www\dfqc_website\public/../application/admin\view\down_load\add.html";i:1523690264;}*/ ?>
<meta charset="utf-8" />
<link href="__STATIC__/css/add.css" rel="stylesheet" type="text/css" />
<form action="<?php echo url('down_load/add'); ?>" method="post">
    <table style="width: 31%">
        <tr>
            <td>下载内容名称：</td>
            <td><input type="text" name="title" id="id_nav" required /></td>
        </tr>
        <tr>
            <td>url：</td>
            <td><input type="text" name="url" /></td>
        </tr>

        <tr>
            <td class="tijiao"><input type="submit" value="提交" /><input type="reset" value="重置" /></td>
        </tr>
    </table>
</form>
