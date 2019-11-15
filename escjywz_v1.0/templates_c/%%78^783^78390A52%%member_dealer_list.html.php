<?php /* Smarty version 2.6.18, created on 2015-10-21 19:30:18
         compiled from admin/member_dealer_list.html */ ?>
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
		</div>
		<div class="searchR">
		<form action="<?php echo $this->_tpl_vars['adminpage']; ?>
" method="get" name="form2">
		<table cellspacing="0" cellpadding="0" class="toptable">
			<tr>
				<td>
					<input type="text" name="keywords" id="searchkey" value="" class="inp01"> &nbsp;<input type="submit" name="filtersubmit" value="查询" class="combutton02"><input type="hidden" name="m" value="member_dealer">
					<input type="hidden" name="a" value="list">
				</td>
			</tr>
		</table>
		</form>
		</div>
	</div>
	<form action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=member_dealer" method="POST" name="form">
	<table cellspacing="0" cellpadding="0" class="listtable">
	<tr>
		<th width="30">选择</th>
		<th width="30">ID</th>
		<th>照片</th>
		<th>姓名</th>
		<th>电话</th>
		<th>会员</th>
		<th width="160">操作</th>
	</tr>
	<?php $_from = $this->_tpl_vars['dealerlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dealer']):
?>
	<tr>
		<td align="center"><input type="checkbox" name="bulkid[]" value="<?php echo $this->_tpl_vars['dealer']['id']; ?>
"></td>
		<td align="center"><?php echo $this->_tpl_vars['dealer']['id']; ?>
</td>
		<td align="center"><?php if ($this->_tpl_vars['dealer']['pic'] <> ''): ?><img src="<?php echo $this->_tpl_vars['dealer']['pic']; ?>
" width="80"><?php endif; ?></td>
		<td align="center"><?php echo $this->_tpl_vars['dealer']['name']; ?>
</td>
		<td align="center"><?php echo $this->_tpl_vars['dealer']['tel']; ?>
</td>
		<td align="center"><?php echo $this->_tpl_vars['dealer']['username']; ?>
</td>
		<td align="center" class="rightmenu"> <a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=member_dealer&a=edit&id=<?php echo $this->_tpl_vars['dealer']['id']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
" class='edit'>编辑</a> | <a href="javascript:if(confirm('确实要删除吗?'))location='<?php echo $this->_tpl_vars['adminpage']; ?>
?m=member_dealer&a=del&id=<?php echo $this->_tpl_vars['dealer']['id']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
'" class="del">删除</a>
	</td>
	</tr>
	<?php endforeach; endif; unset($_from); ?>
	<tr>
		<td colspan="9" class="buttontd" style="text-align:left;">
			<a href="javascript:javascript:selectAll();" title="请选择后操作">全选</a>
			<a href="javascript:submitForm('<?php echo $this->_tpl_vars['adminpage']; ?>
?m=member_dealer&a=bulkdel&page=<?php echo $this->_tpl_vars['page']; ?>
','删除');" title="请选择后操作">删除</a>
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