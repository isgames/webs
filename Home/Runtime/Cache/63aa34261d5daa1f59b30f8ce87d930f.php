<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>ThinkPHP Demo</title>
</head>
<body>
<!--数据新增表单-->
<form method="post" action="__URL__/insert">
    标题：<input type="text" name="title"><br />
    内容：<textarea name="content" rows="5" cols="25"></textarea><br />
  <input type="submit" value="新增数据">
</form>
-->

<volist name='list' id='vo'>
编号:<?php echo ($vo["id"]); ?>
<br />
标题： <?php echo ($vo["title"]); ?>
<br />
内容： <?php echo ($vo["content"]); ?>
<hr>