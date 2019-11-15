<?php /* Smarty version 2.6.18, created on 2015-10-21 19:30:15
         compiled from admin/member_list.html */ ?>
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
			<li><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=member&a=add" class="add">添加会员</a></li>
		</ul>
	</div>
	<div class="searchR">
		<form action="<?php echo $this->_tpl_vars['adminpage']; ?>
" method="get" name="form2">
		<table cellspacing="0" cellpadding="0" class="toptable">
			<tr>
				<td>
					<span>
						<select name="isdealer">
							<?php echo $this->_tpl_vars['select_isdealer']; ?>

						</select>
					</span>
					<input type="text" name="keywords" id="searchkey" value="" class="inp01"> &nbsp;<input type="submit" name="filtersubmit" value="查询" class="combutton02"><input type="hidden" name="m" value="member">
					<input type="hidden" name="a" value="list">
				</td>
			</tr>
		</table>
		</form>
	</div>
</div>
<form action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=member" method="post" name="form">
<table cellspacing="0" cellpadding="0" width="100%"  class="listtable">
<tr><th>选择</th><th>ID</th><th>用户名</th><th>邮箱</th><th>联系人</th><?php if ($this->_tpl_vars['setting']['version'] == 3): ?><th>城市</th><?php endif; ?><th>会员类型</th><th>状态</th><th>注册时间</th><th>操作</th></tr>
<?php $_from = $this->_tpl_vars['userlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user']):
?>
<tr>
<td width="30" align="center"><input type="checkbox" name="bulkid[]" value="<?php echo $this->_tpl_vars['user']['id']; ?>
"></td>
<td width="30" align="center"><?php echo $this->_tpl_vars['user']['id']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['user']['username']; ?>
 <?php if ($this->_tpl_vars['user']['company'] <> '' && $this->_tpl_vars['user']['isdealer'] == 2): ?><span class="gray01">[ <a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=shop&id=<?php echo $this->_tpl_vars['user']['id']; ?>
" target="_blank"><?php echo $this->_tpl_vars['user']['company']; ?>
</a> ]</span><?php endif; ?> <?php if ($this->_tpl_vars['user']['isrecom'] == 1): ?><span class="red">推荐</span><?php endif; ?> <?php if ($this->_tpl_vars['user']['ishot'] == 1): ?><span class="red">热门</span><?php endif; ?></td>
<td align="center"><?php echo $this->_tpl_vars['user']['email']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['user']['nicname']; ?>
</td>
<?php if ($this->_tpl_vars['setting']['version'] == 3): ?>
<td align="center"><?php echo $this->_tpl_vars['user']['province']; ?>
-<?php echo $this->_tpl_vars['user']['city']; ?>
</td>
<?php endif; ?>
<td align="center"><?php if ($this->_tpl_vars['user']['isdealer'] == 2): ?>商家<?php else: ?>个人<?php endif; ?></td>
<td align="center"><?php if ($this->_tpl_vars['user']['isdealer'] == 2): ?><?php if ($this->_tpl_vars['user']['ischeck'] == 1): ?>已通过审核<?php else: ?><span class="orange01">未通过审核</span><?php endif; ?><?php else: ?>--<?php endif; ?></td>
<td align="center"><?php echo $this->_tpl_vars['user']['regtime']; ?>
</td>
<td width="150" align="center" class="rightmenu"><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=member&a=edit&id=<?php echo $this->_tpl_vars['user']['id']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
">编辑</a> | <a href="javascript:if(confirm('确实要删除吗?'))location='<?php echo $this->_tpl_vars['adminpage']; ?>
?m=member&a=del&id=<?php echo $this->_tpl_vars['user']['id']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
'">删除</a> | <a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=member&a=edit&id=<?php echo $this->_tpl_vars['user']['id']; ?>
">审核</a>
</td>
</tr>
<?php endforeach; endif; unset($_from); ?>
<tr>
    <td colspan="11" class="buttontd" style="text-align:left;">
	<a href="javascript:javascript:selectAll();" title="请选择后操作">全选</a>
    <a href="javascript:submitForm('<?php echo $this->_tpl_vars['adminpage']; ?>
?m=member&a=bulkdel&page=<?php echo $this->_tpl_vars['page']; ?>
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