<?php /* Smarty version 2.6.18, created on 2015-10-21 19:29:10
         compiled from admin/templates_list.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="static/css/admin/style.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="static/js/common.js"></script>
</head>
<body>
<div class="colorarea01">
<div class="search clearfix">
		<div class="searchL">
			<ul class="menulist">
				<li><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=templates_category&a=list" class="list">返回模板列表</a></li>
                <li><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=templates&a=add&dir=<?php echo $this->_tpl_vars['dir']; ?>
" class="combutton">+添加模版</a></li>
			</ul>
		</div>
	</div>
<form action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=templates" method="post" name="form">
<table cellspacing="0" cellpadding="0" width="100%"  class="listtable">
</th><th align="left">文件</th><th>说明</th><th  width='80'>操作</th></tr>
<?php $_from = $this->_tpl_vars['templateslist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['templates']):
?>
<tr>
<td align="left"><?php echo $this->_tpl_vars['templates']['name']; ?>
</td>
<td align="center"><input type="text" name="name[<?php echo $this->_tpl_vars['templates']['id']; ?>
]" value="<?php echo $this->_tpl_vars['templates']['detail']; ?>
"></td>
<td align="center">[<a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=templates&a=edit&filename=<?php echo $this->_tpl_vars['templates']['name']; ?>
&dir=<?php echo $this->_tpl_vars['dir']; ?>
">编辑</a>]
</td>
</tr>
<?php endforeach; endif; unset($_from); ?>
</table>
</form>
<div class="listpage"><?php echo $this->_tpl_vars['button_basic']; ?>
<?php echo $this->_tpl_vars['button_select']; ?>
</div>
<!--<div class="search clearfix">
	<div class="searchL">
		<a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=templates&a=add&dir=<?php echo $this->_tpl_vars['dir']; ?>
" class="combutton">+添加模版</a>
	</div>
</div>-->
</body>
</html>