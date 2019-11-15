<?php /* Smarty version 2.6.18, created on 2019-08-08 16:21:38
         compiled from admin/add_news_category.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="static/css/admin/style.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="static/js/jquery.js"></script>
<script type="text/javascript" src="static/js/Validform_v5.3.2_min.js"></script>
<script type="text/javascript">
$(function() {
	//表单验证
	$(".newsform").Validform({
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
?m=news_category&a=list" class="list">返回分类列表</a></li>
			</ul>
		</div>
	</div>
	<form name="form" class="newsform" method="post" action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=news_category">
		<table cellspacing="0" cellpadding="0" width="100%"  class="maintable">
			<tr>
				<th>上级分类</th>
				<td><?php echo $this->_tpl_vars['selectcategory']; ?>
</td>
			</tr>
			<tr>
				<th>名称</th>
				<td><input name="catname" type="text"  size="30" value="<?php echo $this->_tpl_vars['category']['catname']; ?>
" datatype="s" nullmsg="请填写名称！"/></td>
			</tr>
         	<tr>
			    <th>网站keywords：</th>
			   <td><input name="keywords" type="text" size="50"  value="<?php echo $this->_tpl_vars['category']['keywords']; ?>
" /></td>
		   </tr>
           <tr>
			   <th>网站description：</th>
			<td><textarea name="description" rows="5" cols="90" class="textarea01"><?php echo $this->_tpl_vars['category']['description']; ?>
</textarea></td>
		  </tr>
			<tr>
				<th>链接地址</th>
				<td><input name="url" type="text"  size="60" value="<?php echo $this->_tpl_vars['category']['url']; ?>
" /></td>
			</tr>
			<tr>
				<th>是否显示</th>
				<td><input type="radio" name="isshow" value="1" <?php if ($this->_tpl_vars['category']['isshow'] == 1 || $this->_tpl_vars['category']['isshow'] == ''): ?>checked<?php endif; ?>> 是 <input type="radio" name="isshow" value="0" <?php if ($this->_tpl_vars['category']['isshow'] == 0 && $this->_tpl_vars['ac'] == 'edit'): ?>checked<?php endif; ?>> 否</td>
			</tr>
			<tr>
				<th></th>
				<td><div class="buttons">
						<input type="submit" name="thevaluesubmit" value="提交保存"/>
						<input type="hidden" name="a" value="<?php echo $this->_tpl_vars['ac']; ?>
">
						<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['category']['catid']; ?>
">
						<input name="valuesubmit" type="hidden" value="yes" />
						<input type="hidden" name="type" value="<?php echo $this->_tpl_vars['cattype']; ?>
">
					</div></td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>