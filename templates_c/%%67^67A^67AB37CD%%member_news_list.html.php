<?php /* Smarty version 2.6.18, created on 2015-10-21 19:30:19
         compiled from admin/member_news_list.html */ ?>
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
					<input type="text" name="keywords" id="searchkey" value="" class="inp01"> &nbsp;<input type="submit" name="filtersubmit" value="查询" class="combutton02"><input type="hidden" name="m" value="member_news">
					<input type="hidden" name="a" value="list">
				</td>
			</tr>
		</table>
		</form>
		</div>
	</div>
	<form action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=member_news" method="POST" name="form">
	<table cellspacing="0" cellpadding="0" class="listtable">
	<tr>
		<th width="30">选择</th>
		<th width="30">ID</th>
		<th>标题</th>
		<th>发布时间</th>
		<th>会员</th>
		<th width="160">操作</th>
	</tr>
	<?php $_from = $this->_tpl_vars['newslist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['news']):
?>
	<tr>
		<td align="center"><input type="checkbox" name="bulkid[]" value="<?php echo $this->_tpl_vars['news']['n_id']; ?>
"></td>
		<td align="center"><?php echo $this->_tpl_vars['news']['n_id']; ?>
</td>
		<td><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=shop&id=<?php echo $this->_tpl_vars['news']['uid']; ?>
&a=news&nid=<?php echo $this->_tpl_vars['news']['n_id']; ?>
" target="_blank"/><?php echo $this->_tpl_vars['news']['n_title']; ?>
</a> <?php if ($this->_tpl_vars['news']['n_pic'] <> ''): ?><span class="red">图</span><?php endif; ?> <?php if ($this->_tpl_vars['news']['isrecom'] == 1): ?><span class="red">推荐</span><?php endif; ?> </td>	
		<td align="center"><?php echo $this->_tpl_vars['news']['n_addtime']; ?>
</td>
		<td align="center"><?php echo $this->_tpl_vars['news']['username']; ?>
</td>
		<td align="center" class="rightmenu"> <a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=member_news&a=edit&id=<?php echo $this->_tpl_vars['news']['n_id']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
" class='edit'>编辑</a> | <a href="javascript:if(confirm('确实要删除吗?'))location='<?php echo $this->_tpl_vars['adminpage']; ?>
?m=member_news&a=del&id=<?php echo $this->_tpl_vars['news']['n_id']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
'" class="del">删除</a>
	</td>
	</tr>
	<?php endforeach; endif; unset($_from); ?>
	<tr>
		<td colspan="9" class="buttontd" style="text-align:left;">
			<a href="javascript:javascript:selectAll();" title="请选择后操作">全选</a>
			<a href="javascript:submitForm('<?php echo $this->_tpl_vars['adminpage']; ?>
?m=member_news&a=bulkdel&page=<?php echo $this->_tpl_vars['page']; ?>
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