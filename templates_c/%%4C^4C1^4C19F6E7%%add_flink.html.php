<?php /* Smarty version 2.6.18, created on 2016-04-10 17:06:13
         compiled from admin/add_flink.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
	$(".filmstripform").Validform({
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
?m=flink&a=list" class="list">返回友情链接列表</a></li>
			</ul>
		</div>
	</div>
	<form name="form1" method="post" action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=flink">
		<table cellspacing="0" cellpadding="0" width="100%"  class="maintable">
			<tr>
				<th>网站名称：</th>
				<td><input name="l_name" type="text"  size="30" value="<?php echo $this->_tpl_vars['link']['l_name']; ?>
" /></td>
			</tr>
			<tr>
				<th>网址：</th>
				<td><input name="l_url" type="text"  size="30" value="<?php echo $this->_tpl_vars['link']['l_url']; ?>
" /></td>
			</tr>
			<tr>
			<tr>
				<th>链接说明：</th>
				<td><textarea name="l_note" rows="3" cols="30"><?php echo $this->_tpl_vars['link']['l_note']; ?>
</textarea></td>
			</tr>
			<tr>
				<th></th>
				<td>
					<div class="buttons">
						<input type="submit" name="thevaluesubmit" value="提交保存" class="submit">
						<input type="hidden" name="a" value="<?php echo $this->_tpl_vars['ac']; ?>
">
						<input type="hidden" name="l_id" value="<?php echo $this->_tpl_vars['link']['l_id']; ?>
">
						<input type="hidden" name="page" value="<?php echo $this->_tpl_vars['page_g']; ?>
">
					</div>
				</td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>