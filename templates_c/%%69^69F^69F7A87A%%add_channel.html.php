<?php /* Smarty version 2.6.18, created on 2015-10-21 19:29:22
         compiled from admin/add_channel.html */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="static/css/admin/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="static/js/jquery.js"></script>
<script type="text/javascript" src="static/js/Validform_v5.3.2_min.js"></script>
<script type="text/javascript">
$(function() {
	//表单验证
	$(".channelform").Validform({
		tiptype:3
	});
});
</script>
</head>
<body>
<div class="colorarea01">
<div class="search clearfix">
	<div class="searchL">
		<ul class="menulist">
			<li><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=channel&a=list" class="list">返回栏目列表</a></li>
		</ul>
	</div>
</div>
<form name="form1" class="channelform" method="post" action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=channel">
	<table cellspacing="0" cellpadding="0" width="100%"  class="maintable">
		<tr>
			<th>栏目名称：</th>
			<td><input name="c_name" type="text"  size="30" value="<?php echo $this->_tpl_vars['channel']['c_name']; ?>
" datatype="s" nullmsg="请填写栏目名称！"/></td>
		</tr>
		<tr>
		<tr>
			<th>url地址：</th>
			<td><input name="c_url" type="text"  size="80" value="<?php echo $this->_tpl_vars['channel']['c_url']; ?>
"/></td>
		</tr>
		<tr>
			<th>弹出方式：</th>
			<td><input type="radio" name="c_target" value="1" <?php if ($this->_tpl_vars['channel']['c_target'] == 1 || $this->_tpl_vars['channel']['c_target'] == 0): ?>checked<?php endif; ?>/> 本页面 &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="c_target" value="2" <?php if ($this->_tpl_vars['channel']['c_target'] == 2): ?>checked<?php endif; ?>/> 新窗口</td>
		</tr>
		<tr>
			<th></th>
			<td><div class="buttons">
					<input type="submit" name="thevaluesubmit" value="提交保存" class="submit">
					<input type="hidden" name="a" value="<?php echo $this->_tpl_vars['ac']; ?>
">
					<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['channel']['c_id']; ?>
">
				</div></td>
		</tr>
	</table>
	</div>
</form>
</body>
</html>