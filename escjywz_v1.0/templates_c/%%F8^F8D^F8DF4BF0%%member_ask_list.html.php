<?php /* Smarty version 2.6.18, created on 2015-10-21 19:30:20
         compiled from admin/member_ask_list.html */ ?>
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
					<input type="text" name="keywords" id="searchkey" value="" class="inp01"> &nbsp;<input type="submit" name="filtersubmit" value="查询" class="combutton02"><input type="hidden" name="m" value="member_ask">
					<input type="hidden" name="a" value="list">
				</td>
			</tr>
		</table>
		</form>
		</div>
	</div>
	<form action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=member_ask" method="POST" name="form">
	<table cellspacing="0" cellpadding="0" width="100%"  class="listtable">
                <tr>
					<th>选择</th>
                    <th>ID</th>
                    <th>问题</th>
					<th>回复</th>
                    <th>时间</th>
					<th>状态</th>
					<th>会员</th>
					<th>提问会员</th>
                    <th width="80">操作</th>
                </tr>
                <?php $_from = $this->_tpl_vars['asklist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ask']):
?>
                <tr bgcolor="#ffffff" onmouseover="style.backgroundColor='#f5f5f5'"  onmouseout="style.backgroundColor='#ffffff'">
                    <td align="center"><input type="checkbox" name="bulkid[]" value="<?php echo $this->_tpl_vars['ask']['id']; ?>
"></td>
                    <td align="center"><?php echo $this->_tpl_vars['ask']['id']; ?>
&nbsp;</td>
                    <td align="center"><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=shop&id=" target="_blank"><?php echo $this->_tpl_vars['ask']['ask']; ?>
</a></td>
					 <td align="center"><?php echo $this->_tpl_vars['ask']['reply']; ?>
</td>
                    <td align="center"><?php echo $this->_tpl_vars['ask']['asktime']; ?>
</td>
					<td align="center"><?php if ($this->_tpl_vars['ask']['reply'] == ""): ?><span class="orange01">未回复</span><?php else: ?>已回复<?php endif; ?></td>
					<td align="center"><?php echo $this->_tpl_vars['ask']['username']; ?>
</td>
					<td align="center"><?php if ($this->_tpl_vars['ask']['auid'] == 0): ?>匿名<?php else: ?><?php echo $this->_tpl_vars['ask']['askusername']; ?>
<?php endif; ?></td>
					<td align="center"><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=member_ask&a=replyask&id=<?php echo $this->_tpl_vars['ask']['id']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
">回复</a> | <a href="javascript:if(confirm('确实要删除吗?'))location='<?php echo $this->_tpl_vars['adminpage']; ?>
?m=member_ask&a=delask&id=<?php echo $this->_tpl_vars['ask']['id']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
'">删除</a></td>
                </tr>
                <?php endforeach; endif; unset($_from); ?>
	</tr>
	<tr>
		<td colspan="9" class="buttontd" style="text-align:left;">
			<a href="javascript:javascript:selectAll();" title="请选择后操作">全选</a>
			<a href="javascript:submitForm('<?php echo $this->_tpl_vars['adminpage']; ?>
?m=member_ask&a=bulkdel&page=<?php echo $this->_tpl_vars['page']; ?>
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