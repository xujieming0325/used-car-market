<?php /* Smarty version 2.6.18, created on 2015-10-21 19:28:52
         compiled from admin/templates_category_list.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="static/css/admin/style.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="static/js/common.js"></script>
</head>
<body>
<div class="colorarea01">
	<form action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=templates_category" method="post" name="form">
	<table cellspacing="0" cellpadding="0" width="100%"  class="listtable">
		<tr><th>ID</th><th>风格标识</th><th>风格中文名</th><th>状态</th><th  width='100'>操作</th></tr>
		<?php $_from = $this->_tpl_vars['templates_category_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['templates_category']):
?>
		<tr>
			<td align="center" width="80"><?php echo $this->_tpl_vars['key']; ?>
</td>
			<td align="center"><?php echo $this->_tpl_vars['templates_category']['dirname']; ?>
</td>
			<td align="center"><input type="text" name="name" value="<?php echo $this->_tpl_vars['templates_category']['name']; ?>
"></td>
			<?php $_from = $this->_tpl_vars['templates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['template']):
?>
			<td align="center">
			<?php if ($this->_tpl_vars['templates_category']['dirname'] == $this->_tpl_vars['template']['v']): ?><span class="orange01">启用</span><?php else: ?>未启用<?php endif; ?>
			</td>
			<?php endforeach; endif; unset($_from); ?>
			<td align="center"><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=templates_category&a=start&catname=<?php echo $this->_tpl_vars['templates_category']['dirname']; ?>
">启用</a> | <a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=templates&a=list&dir=<?php echo $this->_tpl_vars['templates_category']['dirname']; ?>
">模版列表</a>
			</td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
	</table>
	</form>
	<div class="listpage"><?php echo $this->_tpl_vars['button_basic']; ?>
<?php echo $this->_tpl_vars['button_select']; ?>
</div>
</div>
</body>
</html>