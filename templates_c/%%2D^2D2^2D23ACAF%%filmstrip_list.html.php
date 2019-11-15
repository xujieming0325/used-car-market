<?php /* Smarty version 2.6.18, created on 2015-10-21 19:30:06
         compiled from admin/filmstrip_list.html */ ?>
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
?m=filmstrip&a=add&typeid=<?php echo $this->_tpl_vars['typeid']; ?>
" class="add">添加轮播广告</a></li>
			</ul>
		</div>
	</div>
	<form action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=filmstrip" method="POST" name="form">
		<table cellspacing="0" cellpadding="0" width="100%" class="listtable">
			<tr>
				<th width="30">选择</th>
				<th>排序</th>
				<th>图片</th>
				<th>url</th>
				<th>操作</th>
			</tr>
			<?php $_from = $this->_tpl_vars['filmlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['filmlist']):
?>
			<tr>
				<td align="center"><input type="checkbox" name="bulkid[]" value="<?php echo $this->_tpl_vars['filmlist']['id']; ?>
"></td>
				<td align="center" width="50"><input type="text" size="5" name="orderid[<?php echo $this->_tpl_vars['filmlist']['id']; ?>
]" value="<?php echo $this->_tpl_vars['filmlist']['orderid']; ?>
" class="ip01"/></td>
				<td align="center"><?php if ($this->_tpl_vars['filmlist']['pic'] != ""): ?><a href="<?php echo $this->_tpl_vars['filmlist']['pic']; ?>
" target="_blank"><img src="<?php echo $this->_tpl_vars['filmlist']['pic']; ?>
" width="100"/></a><?php else: ?><?php endif; ?></td>
				<td align="left"><?php echo $this->_tpl_vars['filmlist']['url']; ?>
</td>
				<td align="center" width="120" class="rightmenu"><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=filmstrip&a=edit&id=<?php echo $this->_tpl_vars['filmlist']['id']; ?>
&typeid=<?php echo $this->_tpl_vars['typeid']; ?>
" class="edit">编辑</a> | <a href="javascript:if(confirm('确实要删除吗?'))location='<?php echo $this->_tpl_vars['adminpage']; ?>
?m=filmstrip&a=del&id=<?php echo $this->_tpl_vars['filmlist']['id']; ?>
&typeid=<?php echo $this->_tpl_vars['typeid']; ?>
'" class="del">删除</a></td>
			</tr>
			<?php endforeach; endif; unset($_from); ?>
			<tr>
				<td colspan="5" class="buttontd">
					<a href="javascript:javascript:selectAll();" title="请选择后操作">全选</a>
					<a href="javascript:submitForm('<?php echo $this->_tpl_vars['adminpage']; ?>
?m=filmstrip&a=bulkdel&typeid=<?php echo $this->_tpl_vars['typeid']; ?>
','删除');" title="请选择后操作">删除</a> 
					<a href="javascript:submitForm('<?php echo $this->_tpl_vars['adminpage']; ?>
?m=filmstrip&a=bulksort&typeid=<?php echo $this->_tpl_vars['typeid']; ?>
','更新排序');" title="请选择后操作">更新排序</a>
				</td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>