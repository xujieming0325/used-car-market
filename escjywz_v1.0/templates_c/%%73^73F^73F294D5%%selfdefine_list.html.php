<?php /* Smarty version 2.6.18, created on 2015-10-21 19:28:55
         compiled from admin/selfdefine_list.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<link href="static/css/admin/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="static/js/common.js"></script>
</head>
<body>
<div class="colorarea01">
	<div class="search clearfix">
		<div class="searchL">
			<ul class="menulist">
				<li><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=selfdefine&a=add" class="add">添加参数</a></li>
			</ul>
		</div>
	</div>
	<form action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=selfdefine" method="post" name="form">
		<table cellspacing="0" cellpadding="0" width="100%"  class="listtable">
			<tr>
				<th width="30">选择</th>
				<th width="30">ID</th>
				<th width="60">排序</th>
				<th align="left">名称</th>
                <th width="100">显示</th>
				<th width="100">操作</th>
			</tr>
			<?php $_from = $this->_tpl_vars['paralist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['paralist']):
?>
			<tr>
				<td align="center"><input type="checkbox" name="bulkid[]" value="<?php echo $this->_tpl_vars['paralist']['id']; ?>
"></td>
				<td align="center"><?php echo $this->_tpl_vars['paralist']['id']; ?>
</td>
				<td align="center"><input type="text" size="5" name="orderid[<?php echo $this->_tpl_vars['paralist']['id']; ?>
]" value="<?php echo $this->_tpl_vars['paralist']['orderid']; ?>
" class="ip01"></td>
				<td align="left"><?php echo $this->_tpl_vars['paralist']['c_name']; ?>
</td>
                <td align="center"><?php if ($this->_tpl_vars['paralist']['isshow'] == 1): ?>是<?php else: ?><span class="red">否</span><?php endif; ?></td>
				<td align="center" class="rightmenu"><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=selfdefine&a=edit&id=<?php echo $this->_tpl_vars['paralist']['id']; ?>
" class="edit">编辑</a> | <a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=selfdefine&a=show&id=<?php echo $this->_tpl_vars['paralist']['id']; ?>
&p_state=<?php if ($this->_tpl_vars['paralist']['isshow'] == 1): ?>0<?php else: ?>1<?php endif; ?>">显示</a> | <a href="javascript:if(confirm('确实要删除吗?'))location='<?php echo $this->_tpl_vars['adminpage']; ?>
?m=selfdefine&a=del&id=<?php echo $this->_tpl_vars['paralist']['id']; ?>
'" class="del">删除</a></td>
			</tr>
			<?php endforeach; endif; unset($_from); ?>
			<tr>
				<td colspan="6" class="buttontd"><a href="javascript:javascript:selectAll();" title="请选择后操作">全选</a> <a href="javascript:submitForm('<?php echo $this->_tpl_vars['adminpage']; ?>
?m=selfdefine&a=bulkdel','删除');" title="请选择后操作">删除</a> <a href="javascript:submitForm('<?php echo $this->_tpl_vars['adminpage']; ?>
?m=selfdefine&a=bulksort','更新排序');" title="请选择后操作">更新排序</a></td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>