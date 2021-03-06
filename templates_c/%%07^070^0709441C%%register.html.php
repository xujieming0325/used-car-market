<?php /* Smarty version 2.6.18, created on 2016-04-10 17:23:51
         compiled from default/default/register.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>注册 - <?php echo $this->_tpl_vars['setting']['title']; ?>
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
			//城市选择
			<?php if ($this->_tpl_vars['setting']['version'] == 3): ?>	
			$("#province").bind("change", function(){
				$.get("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1", { 
					cityid :  $("#province").val() 
				}, function (data, textStatus){
					$("#city").html(data); // 把返回的数据添加到页面上
				}) ;
			})   ;
			$("#province2").bind("change", function(){
				$.get("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1", { 
					cityid :  $("#province2").val() 
				}, function (data, textStatus){
					$("#city2").html(data); // 把返回的数据添加到页面上
				}) ;
			})   ;
			<?php endif; ?>
			//表单验证
			$(".resform").Validform({
				tiptype:3
			});
			$div_li = $("ul.reg_tab li");
			$div_li.click(function() {
				$(this).addClass("here").siblings().removeClass("here");
				var index = $div_li.index(this);
				$("div.regbox > div").eq(index).show().siblings().hide();
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
				<div class="title">注册</div>
				<ul class="clearfix reg_tab">
					<li class="here">个人注册</li>
					<li>商家注册</li>
				</ul>
				<div class="regbox mt20">
					<div>
					<form name="loginform" class="resform" id="loginform" method="post" action="index.php?m=register" >
					<table class="logintable">
						<tr>
							<th>用户名：</th>
							<td><input type="text"  name="username" class="inp01" ajaxurl="index.php?m=register&ajax=1" datatype="s6-18" errormsg="用户名至少6个字符,最多18个字符！"/></td>
						</tr>
						<tr>
							<th>密码：</th>
							<td><input type="password"  name="password" class="inp01"/></td>
						</tr>
						<?php if ($this->_tpl_vars['setting']['version'] == 3): ?>
						<tr>
						<th> 所在城市：</th>
						<td colspan="3">
							<select name="aid" id="province" datatype="n" nullmsg="请选择省份！">
								<?php echo $this->_tpl_vars['selectprovince']; ?>

							</select>
							<select name="cid" id="city" datatype="n" nullmsg="请选择城市！">
								<option>请选择城市</option>
							</select>
						</td>
						</tr>
						<?php endif; ?>
						<tr>
							<th>邮箱：</th>
							<td><input type="text" name="email" class="inp01" datatype="e" ajaxurl="index.php?m=register&ajax=1" nullmsg="请输入邮箱地址！" errormsg="请输入正确的邮箱地址！"/></td>
						</tr>
						<tr>
							<th>联系人：</th>
							<td><input type="text" name="nicname" class="inp01"  datatype="s" nullmsg="请填写联系人！"/></td>
						</tr>
						<tr>
							<th>手机号：</th>
							<td><input type="text" name="mobilephone" class="inp01" datatype="m" ajaxurl="index.php?m=register&ajax=1" sucmsg="手机号验证通过！" nullmsg="请输入手机号！" errormsg="请输入正确的手机号！"/></td>
						</tr>
						<!--
						<tr>
							<th width="20%">验证码：</th>
							<td><input name="authcode" id="cftcode"  type="text"  class="inp02" datatype="s" ajaxurl="index.php?m=register&ajax=1" nullmsg="请输入验证码！" errormsg="请输入正确的验证码！"/> <img src="<?php echo $this->_tpl_vars['weburl']; ?>
/include/kcaptcha/" width="70" height="30" onclick="this.src='<?php echo $this->_tpl_vars['weburl']; ?>
/include/kcaptcha/?'+Math.random();" title="点击刷新验证码" style="cursor:pointer" id="checkcode"> <span class="f12" onclick="document.getElementById('checkcode').src='<?php echo $this->_tpl_vars['weburl']; ?>
/include/kcaptcha/?'+Math.random();" style="cursor:pointer">看不清？换一个</span></td>
						</tr>
						-->
						<tr>
							<th></th>
							<td><input type="submit" class="login_but" value="注册">  <input type="hidden" name="action" value="register"><input type="hidden" name="isdealer" value="1"></td>
						</tr>
					</table>
					</form>
					</div>
					<div class="hide">
						<form name="loginform" class="resform" id="loginform" method="post" action="index.php?m=register" >
						<table class="logintable">
						<tr>
							<th>用户名：</th>
							<td><input type="text"  name="username" class="inp01" ajaxurl="index.php?m=register&ajax=1" datatype="s6-18" errormsg="用户名至少6个字符,最多18个字符！"/></td>
						</tr>
						<tr>
							<th>密码：</th>
							<td><input type="password"  name="password" class="inp01"/></td>
						</tr>
						<?php if ($this->_tpl_vars['setting']['version'] == 3): ?>
						<tr>
						<th> 所在城市：</th>
						<td colspan="3">
							<select name="aid" id="province2" datatype="n" nullmsg="请选择省份！">
								<?php echo $this->_tpl_vars['selectprovince']; ?>

							</select>
							<select name="cid" id="city2" datatype="n" nullmsg="请选择城市！">
								<option>请选择城市</option>
							</select>
						</td>
						</tr>
						<?php endif; ?>
						<tr>
							<th>邮箱：</th>
							<td><input type="text" name="email" class="inp01" datatype="e" ajaxurl="index.php?m=register&ajax=1" nullmsg="请输入邮箱地址！" errormsg="请输入正确的邮箱地址！"/></td>
						</tr>
						<tr>
							<th>联系人：</th>
							<td><input type="text" name="nicname" class="inp01"  datatype="s" nullmsg="请填写联系人！"/></td>
						</tr>
						<tr>
							<th>手机号：</th>
							<td><input type="text" name="mobilephone" class="inp01" datatype="m" ajaxurl="index.php?m=register&ajax=1" sucmsg="手机号验证通过！" nullmsg="请输入手机号！" errormsg="请输入正确的手机号！"/></td>
						</tr>
						<tr>
							 <td width="20%" align="right">公司类型：</td>
							 <td>
								<select name="shoptype" id="shoptype" datatype="n" nullmsg="请选择公司类型！">
									<?php echo $this->_tpl_vars['select_dealer_category']; ?>

								</select>
							 </td>
						</tr>
                        <tr>
							<th>公司名称：</th>
							<td><input type="text" name="company" class="inp01"  datatype="s" nullmsg="请填写公司名称！"/></td>
						</tr>
						<!--
						<tr>
							<th width="20%">验证码：</th>
							<td><input name="authcode" id="cftcode"  type="text"  class="inp02" datatype="s" ajaxurl="index.php?m=register&ajax=1" nullmsg="请输入验证码！" errormsg="请输入正确的验证码！"/> <img src="<?php echo $this->_tpl_vars['weburl']; ?>
/include/kcaptcha/" width="70" height="30" onclick="this.src='<?php echo $this->_tpl_vars['weburl']; ?>
/include/kcaptcha/?'+Math.random();" title="点击刷新验证码" style="cursor:pointer" id="checkcode"> <span class="f12" onclick="document.getElementById('checkcode').src='<?php echo $this->_tpl_vars['weburl']; ?>
/include/kcaptcha/?'+Math.random();" style="cursor:pointer">看不清？换一个</span></td>
						</tr>
						-->
						<tr>
							<th></th>
							<td><input type="submit" class="login_but" value="注册">  <input type="hidden" name="action" value="register"><input type="hidden" name="isdealer" value="2"></td>
						</tr>
					</table>
					</form>
					</div>
				</div>
			</div>
			<div class="login_right">
				<p class="f14 mt20">已是<?php echo $this->_tpl_vars['setting']['sitename']; ?>
会员？</p>
				<p class="mt20"><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=login" class="register_but">我要登录</a></p>
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