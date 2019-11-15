<?php /* Smarty version 2.6.18, created on 2019-08-07 22:29:32
         compiled from default/default/login.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>登录 - <?php echo $this->_tpl_vars['setting']['title']; ?>
</title>
		<meta content="<?php echo $this->_tpl_vars['setting']['keywords']; ?>
"  name="keywords"/>
		<meta content="<?php echo $this->_tpl_vars['setting']['description']; ?>
" name="description"/>
		<link href="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/<?php echo $this->_tpl_vars['setting']['templates']; ?>
/css/user.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/pcall.js"></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/Validform_v5.3.2_min.js"></script>
		<script type="text/javascript">
		$(document).ready(function() {
			//表单验证
			$(".loginform").Validform({
				tiptype:3
			});
		});
		</script>
	</head>
	<body>
		<!--内容-->
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/head.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<div class="login_main mt10 clearfix">
			<div class="login_left">
				<div class="title">登录</div>
				<form name="loginform" class="loginform" method="post" action="index.php?m=login">
					<table class="logintable mt20">
						<tr>
							<th>会员名：</th>
							<td><input type="text" name="username" class="inp01" ajaxurl="index.php?m=login&ajax=1" datatype="s6-18" errormsg="用户名至少6个字符,最多18个字符！"/></td>
						</tr>
						<tr>
							<th>密&nbsp;&nbsp;&nbsp;码：</th>
							<td><input type="password" name="password" class="inp01"/></td>
						</tr>
						<tr>
							<th></th>
							<td><input type="submit" class="login_but" value="登录"><a href="index.php?mod=register"></a> <input type="hidden" name="action" value="login"></td>
						</tr>
					</table>
				</form>
			</div>
			<div class="login_right">
				<p class="f14 mt20">还不是<?php echo $this->_tpl_vars['setting']['sitename']; ?>
会员？</p>
				<p class="mt20"><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=register" class="register_but">我要注册</a></p>
			</div>
		</div>
		<!--版权-->
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/foot.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</body>
</html>