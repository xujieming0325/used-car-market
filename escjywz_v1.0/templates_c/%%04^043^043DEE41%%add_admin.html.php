<?php /* Smarty version 2.6.18, created on 2015-10-21 19:35:08
         compiled from admin/add_admin.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<link href="static/css/admin/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="static/js/common.js"></script>
<script type="text/javascript">
function _all(cla,val)
{
    var input = document.getElementsByTagName('input');
    for(i=0;i<input.length;i++)
    {
        if (input[i].type == 'checkbox' && input[i].className == cla) input[i].checked = val;
    }
}
</script>
</head>
<body>
<div class="colorarea01">
	<div class="search clearfix">
		<div class="searchL">
			<ul class="menulist">
				<li><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=admin&a=list" class="list">返回管理员列表</a></li>
			</ul>
		</div>
	</div>
	<form action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=admin" method="post" name="form" onsubmit="return chksubmit();">
		<table cellspacing="0" cellpadding="0" width="100%"  class="maintable">
			<?php if ($this->_tpl_vars['setting']['version'] == 3): ?>
				<?php if ($this->_tpl_vars['admin']['admin_type'] != 'administrator'): ?><tr>
					<th>管理员用户组</th>
					<td><select name="admingroup">
							<?php echo $this->_tpl_vars['select_admingroup']; ?>

						</select>
				</tr>
				<?php endif; ?>
			<?php endif; ?>
			<tr>
				<th>用户名：</th>
				<td><input name="username" type="text" size="10" id="username" <?php if ($this->_tpl_vars['ac'] == 'edit'): ?>readonly<?php endif; ?> value="<?php echo $this->_tpl_vars['admin']['username']; ?>
"/></td>
			</tr>
			<tr>
				<th>密码：</th>
				<td><input name="password" type="text" size="10"/>
					<?php if ($this->_tpl_vars['ac'] == 'edit'): ?><span class="explain">不为空修改密码</span><?php endif; ?></td>
			</tr>
			<tr>
				<th>状态</th>
				<td><select name="status">
						<?php echo $this->_tpl_vars['select_status']; ?>

					</select></td>
			</tr>
			<tr>
				<th>描述：</th>
				<td><textarea name="description" cols="20" rows="3"><?php echo $this->_tpl_vars['admin']['description']; ?>
</textarea></td>
			</tr>
			<tr>
				<th></th>
				<td><div class="buttons">
						<input type="submit" name="thevaluesubmit" value="提交保存" class="submit">
						<input type="hidden" name="a" value="<?php echo $this->_tpl_vars['ac']; ?>
">
						<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['admin']['adminid']; ?>
">
						<input name="valuesubmit" type="hidden" value="yes" />
					</div></td>
			</tr>
		</table>
	</form>
</div>
<script type="text/javascript">
function chksubmit()
{
    var a = new Array();
    a['username'] = '请填写用户名';
    return arr_not_empty(a);
}
</script>
</body>
</html>