<?php /* Smarty version 2.6.18, created on 2015-10-21 19:25:41
         compiled from admin/login.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
<title></title>
<link href="static/css/base.css" rel="stylesheet" type="text/css" />
<link href="static/css/admin/login.css" rel="stylesheet" type="text/css" />
<SCRIPT LANGUAGE="JavaScript">
<!--
function checknull()
{
	if(document.form1.username.value=='')
		{
		alert("请输入用户名");
		document.form1.username.focus();
		return false;
		}
    else if(document.form1.password.value=='')
		{
		alert("请输入密码");
		document.form1.password.focus();
		return false;
		}
	else{
		window.document.form1.submit();
		}

}
function onkeypressed()
{
	if(event.keyCode==13) 
	{
		checknull();
	}
}
//-->
</SCRIPT>
</head>
<body>
 <form name="form1" method="post" action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=login">
 <div id="warp">
	 <div id="login">
		<div id="right">
			<p>
				<input type="text" name="username" class="input1 username">
			</p>
			<p>
				<input type="password" name="password" class="input1 password">
			</p>
			<!-- <p class="clearfix">
				<input type="text" name="authcode" class="input2"> <img src="<?php echo $this->_tpl_vars['weburl']; ?>
/include/kcaptcha/" width="100" height="45" onclick="this.src='<?php echo $this->_tpl_vars['weburl']; ?>
/include/kcaptcha/?'+Math.random();" title="点击刷新验证码" align="absmiddle" style="cursor:pointer"/>
			</p> -->
			<p class="clearfix">
				<input type="button" name="Submit" value="登 录" class="btn" onclick="checknull()">
			</p>
		</div>
	 </div>
 </div>
 </form>
 </body>
 </html>