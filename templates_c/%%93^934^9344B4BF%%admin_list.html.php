<?php /* Smarty version 2.6.18, created on 2015-10-21 19:29:04
         compiled from admin/admin_list.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="static/css/admin/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="static/js/common.js"></script>
</head>
<body>
<div class="colorarea01">
<div class="search clearfix">
	<div class="searchL">
		<ul class="menulist">
			<li><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=admin&a=add" class="add">添加管理员</a></li>
		</ul>
	</div>
</div>
<form action="admin.php" method="post" name="form">
<table cellspacing="0" cellpadding="0" width="100%"  class="listtable">
<tr>
	<th>选择</th>
	<th>管理ID</th>
	<th>用户名</th>
	<?php if ($this->_tpl_vars['setting']['version'] == 3): ?><th>用户组</th><?php endif; ?>
	<th>最后登录时间</th>
	<th>登陆IP</th>
	<th>登陆次数</th>
	<th>操作</th></tr>
<?php $_from = $this->_tpl_vars['adminlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user']):
?>
<tr>
<td align="center" width="30"><input type="checkbox" name="bulkid[]" value="<?php echo $this->_tpl_vars['user']['adminid']; ?>
"></td>
<td align="center"><?php echo $this->_tpl_vars['user']['adminid']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['user']['username']; ?>
 <span class="red">[<?php echo $this->_tpl_vars['user']['statusname']; ?>
]</span></td>
<?php if ($this->_tpl_vars['setting']['version'] == 3): ?><td align="center"><?php if ($this->_tpl_vars['user']['admin_type'] == 'administrator'): ?>超级管理员<?php else: ?><?php echo $this->_tpl_vars['user']['admingroupname']; ?>
<?php endif; ?></td><?php endif; ?>
<td align="center"><?php echo $this->_tpl_vars['user']['last_login_time']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['user']['last_login_ip']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['user']['login_count']; ?>
</td>
<td align="center" width="120" class="rightmenu"><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=admin&a=edit&id=<?php echo $this->_tpl_vars['user']['adminid']; ?>
" class="edit">编辑</a><?php if ($this->_tpl_vars['setting']['version'] == 3): ?><?php if ($this->_tpl_vars['user']['admin_type'] != 'administrator'): ?> | <a href="javascript:if(confirm('确实要删除吗?'))location='<?php echo $this->_tpl_vars['adminpage']; ?>
?m=admin&a=del&id=<?php echo $this->_tpl_vars['user']['adminid']; ?>
'" class="del">删除</a><?php endif; ?><?php else: ?> | <a href="javascript:if(confirm('确实要删除吗?'))location='<?php echo $this->_tpl_vars['adminpage']; ?>
?m=admin&a=del&id=<?php echo $this->_tpl_vars['user']['adminid']; ?>
'" class="del">删除</a><?php endif; ?>
</td>
</tr>
<?php endforeach; endif; unset($_from); ?>
<tr>
	<td align="center">
	<input type="checkbox" onclick="javascript:selectAll();">
	</td>
	<td colspan="8" class="buttontd">
	<a href="javascript:submitForm('<?php echo $this->_tpl_vars['adminpage']; ?>
?m=admin&a=bulkdel','删除');" title="请选择后操作">删除</a>
	</td>
</tr>
</table>
</form>
<div class="listpage"><?php echo $this->_tpl_vars['button_basic']; ?>
<?php echo $this->_tpl_vars['button_select']; ?>
</div>
</div>
</body>
</html>