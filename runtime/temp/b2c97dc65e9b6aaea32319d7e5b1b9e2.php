<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"E:\wamp64\www\dfqc_website\public/../application/admin\view\shop_site\add.html";i:1523690204;}*/ ?>
<meta charset="utf-8" />
<link href="__STATIC__/css/add.css" rel="stylesheet" type="text/css" />
<form action="<?php echo url('add'); ?>" method="POST" enctype="multipart/form-data">
    <table style="width: 35%;">
        <tr>
            <td>网点名称：</td>
            <td><input type="text" name="name" required /></td>
        </tr>

        <tr>
            <td>网点地址：</td>
            <td><input type="text" name="address" required /></td>
        </tr>
        <tr>
            <td>联系人：</td>
            <td><input type="text" name="contact_person" required /></td>
        </tr>
        <tr>
            <td>电话：</td>
            <td><input type="text" name="tel" required /></td>
        </tr>

        <tr>
            <td>级别：</td>
            <td><input type="text" name="cid"/></td>
        </tr>

        <tr>
            <td class="tijiao"><input type="submit" value="添加" /><input type="reset" value="取消" /></td>
        </tr>

    </table>
</form>

