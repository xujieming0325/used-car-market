<?php /* Smarty version 2.6.18, created on 2015-10-21 19:30:29
         compiled from admin/inquiry_list.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<link href="static/css/admin/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="static/js/common.js"></script>
<script type="text/javascript" src="static/js/jquery.js"></script>
</head>
<body>
<div class="colorarea01">
	<div class="search clearfix">
		<div class="searchL">
			<ul class="menulist">
				<li><a href="#" class="list">询价信息列表</a></li>
			</ul>
		</div>
		<div class="searchR">
			<form action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=inquiry" method="get" name="form2">
			<input type="hidden" name="m" value="buyinquiry">
			<input type="hidden" name="a" value="list">
				<span>
					<input type="text" name="keywords" id="searchkey" value="" size="16" class="inp01">
				</span>
				<span>
					<input type="submit" name="filtersubmit" value="查询" class="combutton02 w50">
				</span>
			</form>
		</div>
	</div>
	<form action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=inquiry" method="POST" name="form" onSubmit="return listsubmitconfirm(this.form)">
	<table cellspacing="0" cellpadding="0" width="100%"  class="listtable">
	<tr><th width="30">选择</th><th>ID</th><th align="left">车源</th><th>姓名</th><th>手机</th><th>会员</th><th>提交时间</th><th width="100">操作</th></tr>
	<?php $_from = $this->_tpl_vars['inquirylist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['inquiry']):
?>
	<tr bgcolor="#ffffff" onmouseover="style.backgroundColor='#E2E9EA'"  onmouseout="style.backgroundColor='#ffffff'">
	<td align="center"><input type="checkbox" name="bulkid[]" value="<?php echo $this->_tpl_vars['inquiry']['id']; ?>
"></td>
	<td align="center"><?php echo $this->_tpl_vars['inquiry']['id']; ?>
</td>
	<td align="left"><a href="<?php echo $this->_tpl_vars['inquiry']['p_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['inquiry']['p_allname']; ?>
</a></td>
	<td align="center"><?php echo $this->_tpl_vars['inquiry']['name']; ?>
</span></td>
	<td align="center"><?php echo $this->_tpl_vars['inquiry']['mobilephone']; ?>
</td>
	<td align="center"><?php echo $this->_tpl_vars['inquiry']['username']; ?>
</td>
	<td align="center"><?php echo $this->_tpl_vars['inquiry']['addtime']; ?>
</td>
	<td align="center" class="rightmenu"><a href="javascript:if(confirm('ID:<?php echo $this->_tpl_vars['inquiry']['id']; ?>
&nbsp;确实要删除吗?'))location='<?php echo $this->_tpl_vars['adminpage']; ?>
?m=inquiry&a=del&id=<?php echo $this->_tpl_vars['inquiry']['id']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
'">删除</a></td>
	</tr>
	<?php endforeach; endif; unset($_from); ?>
	<tr>
		<td colspan="13" class="buttontd">
			<a href="javascript:javascript:selectAll();" title="请选择后操作">全选</a>
			<a href="javascript:submitForm('<?php echo $this->_tpl_vars['adminpage']; ?>
?m=inquiry&a=bulkdel&page=<?php echo $this->_tpl_vars['page']; ?>
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