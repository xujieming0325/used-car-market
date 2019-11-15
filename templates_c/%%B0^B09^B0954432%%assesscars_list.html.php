<?php /* Smarty version 2.6.18, created on 2015-10-21 19:30:27
         compiled from admin/assesscars_list.html */ ?>
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
				<li><a href="#" class="add">评估信息列表</a></li>
			</ul>
		</div>
		<div class="searchR">
			<form action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=assesscars" method="get" name="form2">
			<input type="hidden" name="m" value="assesscars">
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
?m=assesscars" method="POST" name="form" onSubmit="return listsubmitconfirm(this.form)">
	<table cellspacing="0" cellpadding="0" width="100%"  class="listtable">
	<tr><th width="30">选择</th><th>ID</th><th align="left">品牌 - 车型</th><th>颜色 - 排量 - 变速箱 - 里程 - 进口/国产</th><th>上牌日期</th><th>联系人 - 电话</th><?php if ($this->_tpl_vars['setting']['version'] == 3): ?><th>城市</th><?php endif; ?><th>描述</th><th>发布时间</th><th width="60">操作</th></tr>
	<?php $_from = $this->_tpl_vars['carslist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cars']):
?>
	<tr bgcolor="#ffffff" onmouseover="style.backgroundColor='#E2E9EA'"  onmouseout="style.backgroundColor='#ffffff'">
	<td align="center"><input type="checkbox" name="bulkid[]" value="<?php echo $this->_tpl_vars['cars']['p_id']; ?>
"></td>
	<td align="center"><?php echo $this->_tpl_vars['cars']['p_id']; ?>
</td>
	<td align="left"><?php echo $this->_tpl_vars['cars']['p_allname']; ?>
  - <?php echo $this->_tpl_vars['cars']['p_modelname']; ?>
</td>
	<td align="center"><?php echo $this->_tpl_vars['cars']['p_color']; ?>
 - <?php echo $this->_tpl_vars['cars']['p_gas']; ?>
L - <?php echo $this->_tpl_vars['cars']['p_transmission']; ?>
 - <?php echo $this->_tpl_vars['cars']['p_kilometre']; ?>
万公里 - <?php echo $this->_tpl_vars['cars']['p_country']; ?>
</td>
	<td align="center"><?php echo $this->_tpl_vars['cars']['p_year']; ?>
年<?php echo $this->_tpl_vars['cars']['p_month']; ?>
月</td>
	<td align="center"><?php echo $this->_tpl_vars['cars']['p_contact_name']; ?>
 - <?php echo $this->_tpl_vars['cars']['p_contact_tel']; ?>
</td>
	<?php if ($this->_tpl_vars['setting']['version'] == 3): ?><td align="center"><?php echo $this->_tpl_vars['cars']['province']; ?>
-<?php echo $this->_tpl_vars['cars']['city']; ?>
</td><?php endif; ?>
	<td align="center"><?php echo $this->_tpl_vars['cars']['p_details']; ?>
</td>
	<td align="center"><?php echo $this->_tpl_vars['cars']['p_addtime']; ?>
</td>
	<td align="center" class="rightmenu"><a href="javascript:if(confirm('ID:<?php echo $this->_tpl_vars['cars']['p_id']; ?>
&nbsp;确实要删除吗?'))location='<?php echo $this->_tpl_vars['adminpage']; ?>
?m=assesscars&a=del&id=<?php echo $this->_tpl_vars['cars']['p_id']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
'">删除</a></td>
	</tr>
	<?php endforeach; endif; unset($_from); ?>
	<tr>
		<td colspan="12" class="buttontd">
			<a href="javascript:javascript:selectAll();" title="请选择后操作">全选</a>
			<a href="javascript:submitForm('<?php echo $this->_tpl_vars['adminpage']; ?>
?m=assesscars&a=bulkdel&page=<?php echo $this->_tpl_vars['page']; ?>
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