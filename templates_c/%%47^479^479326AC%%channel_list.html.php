<?php /* Smarty version 2.6.18, created on 2015-10-21 19:29:19
         compiled from admin/channel_list.html */ ?>
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
?m=channel&a=add" class="add">添加栏目</a></li>
			</ul>
		</div>
	</div>
	<form action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=channel" method="post" name="form">
		<table cellspacing="0" cellpadding="0" width="100%"  class="listtable">
			<tr>
				<th>选择</th>
				<th>ID</th>
				<th>排序</th>
				<th align="left">名称</th>
				<th>url地址</th>
				<th  width='120'>操作</th>
			</tr>
			<?php $_from = $this->_tpl_vars['channellist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['channel']):
?>
			<tr>
				<td align="center" width="30"><input type="checkbox" name="bulkid[]" value="<?php echo $this->_tpl_vars['channel']['c_id']; ?>
"></td>
				<td align="center" width="30"><?php echo $this->_tpl_vars['channel']['c_id']; ?>
</td>
				<td align="center" width="50"><input type="text" size="5" name="c_orderid[<?php echo $this->_tpl_vars['channel']['c_id']; ?>
]" value="<?php echo $this->_tpl_vars['channel']['c_orderid']; ?>
" class="ip01"/></td>
				<td align="left"><?php echo $this->_tpl_vars['channel']['c_name']; ?>
</td>
				<td align="center"><?php echo $this->_tpl_vars['channel']['c_url']; ?>
</td>
				<td align="center"  class="rightmenu"><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=channel&a=edit&id=<?php echo $this->_tpl_vars['channel']['c_id']; ?>
" class="edit">编辑</a> | <a href="javascript:if(confirm('确实要删除吗?'))location='<?php echo $this->_tpl_vars['adminpage']; ?>
?m=channel&a=del&id=<?php echo $this->_tpl_vars['channel']['c_id']; ?>
'" class="del">删除</a></td>
			</tr>
			<?php endforeach; endif; unset($_from); ?>
			<tr>
				<td colspan="6" class="buttontd"><a href="javascript:javascript:selectAll();" title="请选择后操作">全选</a> <a href="javascript:submitForm('<?php echo $this->_tpl_vars['adminpage']; ?>
?m=channel&a=bulkdel','删除');" title="请选择后操作">删除</a> <a href="javascript:submitForm('<?php echo $this->_tpl_vars['adminpage']; ?>
?m=channel&a=bulksort','更新排序');" title="请选择后操作">更新排序</a></td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>