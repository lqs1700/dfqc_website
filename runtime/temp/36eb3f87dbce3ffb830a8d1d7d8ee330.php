<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"E:\wamp64\www\dfqc_website\public/../application/admin\view\join_us\index.html";i:1522044980;}*/ ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="__STATIC__/css/list.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h3>   申  请	列	表</h3>
<table cellspacing="1">
    <tr>
        <th>姓名</th>
        <th>电话</th>
        <th>邮箱</th>
        <th>留言</th>
        <th>申请状态</th>
        <th>操作</th>
    </tr>
    <?php if(is_array($joinlist) || $joinlist instanceof \think\Collection || $joinlist instanceof \think\Paginator): $i = 0; $__LIST__ = $joinlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$va): $mod = ($i % 2 );++$i;?>
    <tr>
        <td><?php echo $va['name']; ?></td>
        <td><?php echo $va['tel']; ?></td>
        <td><?php echo $va['email']; ?></td>
        <td><?php echo $va['message']; ?></td>
        <td>
            <?php switch($va['status']): case "1": ?>审核中<?php break; case "2": ?>己同意<?php break; case "3": ?>己拒绝<?php break; endswitch; ?>
        </td>

        <?php if($va['status'] == 1): ?>
        <td>
            <a href="<?php echo url('join_us/agree'); ?>?id=<?php echo $va['id']; ?>">同意</a>
            <a href="<?php echo url('join_us/refuse'); ?>?id=<?php echo $va['id']; ?>">拒绝</a>
        </td>
        <?php else: ?>
        <td>无法操作</td>
        <?php endif; ?>
    </tr>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<div class="page">
    <?php echo $page; ?>
</div>
</body>
</html>