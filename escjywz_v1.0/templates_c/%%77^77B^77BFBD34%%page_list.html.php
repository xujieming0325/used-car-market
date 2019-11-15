<?php /* Smarty version 2.6.18, created on 2015-10-21 19:29:25
         compiled from admin/page_list.html */ ?>
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
?m=page_sort&a=list" class="add">单页分类</a></li>
				<li><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=page&a=add" class="add">添加单页</a></li>
			</ul>
		</div>
	</div>
	<form action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=page" method="post" name="form">
		<table cellspacing="0" cellpadding="0" width="100%" class="listtable">
			<tr>
				<th width="30">选择</th>
				<th width="30">ID</th>
				<th>排序</th>
				<th align="left">单页名称</th>
				<th align="left">模版</th>
				<th align="left">文件名</th>
				<th align="center">分类</th>
				<th width="120">操作</th>
			</tr>
			<?php $_from = $this->_tpl_vars['pagelist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pagelist']):
?>
			<tr>
				<td align="center" width="30"><input type="checkbox" name="bulkid[]" value="<?php echo $this->_tpl_vars['pagelist']['p_id']; ?>
"></td>
				<td align="center"><?php echo $this->_tpl_vars['pagelist']['p_id']; ?>
</td>
				<td align="center" width="50"><input type="text" size="5" name="orderid[<?php echo $this->_tpl_vars['pagelist']['p_id']; ?>
]" value="<?php echo $this->_tpl_vars['pagelist']['orderid']; ?>
" class="ip01"/></td>
				<td align="left"><?php echo $this->_tpl_vars['pagelist']['p_title']; ?>
</td>
				<td align="left"><?php echo $this->_tpl_vars['pagelist']['p_tql']; ?>
</td>
				<td align="left"><?php echo $this->_tpl_vars['pagelist']['p_page']; ?>
</td>
				<td align="center"><?php echo $this->_tpl_vars['pagelist']['sortname']; ?>
</td>
				<td align="center" width="80" class="rightmenu"><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=page&a=html&id=<?php echo $this->_tpl_vars['pagelist']['p_id']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
">生成静态</a> | <a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=page&a=edit&id=<?php echo $this->_tpl_vars['pagelist']['p_id']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
">编辑</a> | <a href="javascript:if(confirm('确实要删除吗?'))location='<?php echo $this->_tpl_vars['adminpage']; ?>
?m=page&a=del&id=<?php echo $this->_tpl_vars['pagelist']['p_id']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
'">删除</a></td>
			</tr>
			<?php endforeach; endif; unset($_from); ?>
			<tr>
				<td colspan="8" class="buttontd">
				<a href="javascript:javascript:selectAll();" title="请选择后操作">全选</a>
				<a href="javascript:submitForm('<?php echo $this->_tpl_vars['adminpage']; ?>
?m=page&a=bulkdel&page=<?php echo $this->_tpl_vars['page']; ?>
','删除');" title="请选择后操作">删除</a> <a href="javascript:submitForm('<?php echo $this->_tpl_vars['adminpage']; ?>
?m=page&a=bulksort&page=<?php echo $this->_tpl_vars['page']; ?>
','更新排序');" title="请选择后操作">更新排序</a> <a href="javascript:submitForm('<?php echo $this->_tpl_vars['adminpage']; ?>
?m=page&a=bulkhtml&page=<?php echo $this->_tpl_vars['page']; ?>
','生成静态');" title="请选择后操作">生成静态</a></td>
			</tr>
		</table>
	</form>
	<div class="listpage"><?php echo $this->_tpl_vars['button_basic']; ?>
<?php echo $this->_tpl_vars['button_select']; ?>
</div>
</div>
</body>
</html>