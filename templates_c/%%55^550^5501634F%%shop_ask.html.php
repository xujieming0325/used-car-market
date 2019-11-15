<?php /* Smarty version 2.6.18, created on 2019-08-08 14:46:30
         compiled from default/default/shop_ask.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php echo $this->_tpl_vars['shop']['company']; ?>
 - <?php echo $this->_tpl_vars['setting']['title']; ?>
</title>
		<meta content="<?php echo $this->_tpl_vars['setting']['keywords']; ?>
"  name="keywords"/>
		<meta content="<?php echo $this->_tpl_vars['setting']['description']; ?>
" name="description"/>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/pcall.js"></script>
		<link href="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/<?php echo $this->_tpl_vars['setting']['templates']; ?>
/css/shop.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/shop_head.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<!--内容-->
		<div class="main mt10 clearfix">
			<div class="shop_left">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/shop_left.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</div>
			<div class="shop_right">
				<div class="shopbox">
					<h3>给商家留言</h3>
					<div class="box2">
						<div class="pl20">
							<form method="post" action="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=shop&id=<?php echo $this->_tpl_vars['shopid']; ?>
&a=ask">
							<ul class="clearfix feedback_ul01">
								<li><span class="w02"><input type="checkbox" name="anonymity" value="1"></span><span class="w01">匿名发言</span></li>
								<li><span class="w01">用户名：</span><span><input type="text" name="username" class="inp01"></span></li>
								<li><span class="w01">密码：</span><span><input type="password" name="password" class="inp01"></span></li>
							</ul>
							<div class="feedback_info">
								<textarea name="ask" rows="" cols="" class="textarea01"></textarea>
							</div>
							<div class="pl5 mt5"><input type="submit" value="提交" class="feedbackbut"> <span class="gray01">[不能超过200字]</span></div>
							<input type="hidden" name="a" value="ask">
							</form>
						</div>
						<div class="feedbackbox">
							<?php $_from = $this->_tpl_vars['feedbacklist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['feedback']):
?>
							<div class="feedbacklist">
								<div class="title"><span class="fr"><?php echo $this->_tpl_vars['feedback']['username']; ?>
</span><?php echo $this->_tpl_vars['feedback']['asktime']; ?>
</div>
								<div class="feedback_ask">咨询内容：<?php echo $this->_tpl_vars['feedback']['ask']; ?>
</div>
								<?php if ($this->_tpl_vars['feedback']['reply'] <> ''): ?><div class="feedback_reply">商家回复：<?php echo $this->_tpl_vars['feedback']['reply']; ?>
</div><?php endif; ?>
							</div>
							<?php endforeach; endif; unset($_from); ?>
							<div class="page_list mt10"><?php echo $this->_tpl_vars['button_basic']; ?>
</div>
						</div>
					</div>
				</div>
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