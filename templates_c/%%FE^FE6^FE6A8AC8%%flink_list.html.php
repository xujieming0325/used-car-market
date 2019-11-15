<?php /* Smarty version 2.6.18, created on 2015-10-21 19:30:09
         compiled from admin/flink_list.html */ ?>
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
?m=flink&a=add" class="add">添加链接</a></li>
		</ul>	
	</div>
</div>
<form action="friendlink.php" method="post" name="form">
<table cellspacing="0" cellpadding="0" width="100%"  class="listtable">
<tr><th>选择</th><th>排序</th><th align="left">站点名称</th><th>是否显示</th><th>操作</th></tr>
<?php $_from = $this->_tpl_vars['flinklist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['flinklist']):
?>
<tr>
<td align="center" width="30"><input type="checkbox" name="bulkid[]" value="<?php echo $this->_tpl_vars['flinklist']['l_id']; ?>
"></td>
<td align="center" width="50"><input type="text" size="5" name="orderid[<?php echo $this->_tpl_vars['flinklist']['l_id']; ?>
]" value="<?php echo $this->_tpl_vars['flinklist']['l_orderid']; ?>
" class="ip01"/></td>
<td align="left"><?php echo $this->_tpl_vars['flinklist']['l_name']; ?>
</td>
<td align="center"><?php if ($this->_tpl_vars['flinklist']['isshow'] == 1): ?>是<?php else: ?>否<?php endif; ?></td>
<td align="center" width="120" class="rightmenu"><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=flink&a=show&id=<?php echo $this->_tpl_vars['flinklist']['l_id']; ?>
&l_state=<?php if ($this->_tpl_vars['flinklist']['isshow'] == 1): ?>0<?php else: ?>1<?php endif; ?>&page=<?php echo $this->_tpl_vars['page']; ?>
">显示</a> | <a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=flink&a=edit&id=<?php echo $this->_tpl_vars['flinklist']['l_id']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
">编辑</a> | <a href="javascript:if(confirm('确实要删除吗?'))location='<?php echo $this->_tpl_vars['adminpage']; ?>
?m=flink&a=del&id=<?php echo $this->_tpl_vars['flinklist']['l_id']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
'">删除</a> 
</td>
</tr>
<?php endforeach; endif; unset($_from); ?>
<tr>
	<td colspan="5" class="buttontd">
	<a href="javascript:javascript:selectAll();" title="请选择后操作">全选</a>
	<a href="javascript:submitForm('<?php echo $this->_tpl_vars['adminpage']; ?>
?m=flink&a=bulkdel&page=<?php echo $this->_tpl_vars['page']; ?>
','删除');" title="请选择后操作">删除</a> <a href="javascript:submitForm('<?php echo $this->_tpl_vars['adminpage']; ?>
?m=flink&a=bulksort&page=<?php echo $this->_tpl_vars['page']; ?>
','更新排序');" title="请选择后操作">更新排序</a>
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