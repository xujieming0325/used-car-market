<?php /* Smarty version 2.6.18, created on 2016-04-10 17:18:19
         compiled from default/default/shop_head.html */ ?>
<script language="JavaScript">
$(function(){
	$("#login").load("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1&login=1");
})
</script>
<!--头部 -->
<div class="top">
	<div class="top_main clearfix">
		<div class="top_left">
			欢迎来到<?php echo $this->_tpl_vars['setting']['sitename']; ?>
！<span id="login"></span>
		</div>
		<div class="top_right">
			客服热线：<span class="orange01 fb"><?php echo $this->_tpl_vars['setting']['tel']; ?>
</span>
		</div>
	</div>
</div>
<div class="shop_head mt10">
	<p class="shop_name"><?php echo $this->_tpl_vars['shop']['company']; ?>
</p>
	<p class="shop_tel">联系人：<?php echo $this->_tpl_vars['shop']['nicname']; ?>
&nbsp;&nbsp;&nbsp; 咨询电话：<?php echo $this->_tpl_vars['shop']['mobilephone']; ?>
</p>
</div>
<!--导航-->
<div class="shopnav_list">
	<ul class="clearfix">
		<li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=shop&id=<?php echo $this->_tpl_vars['shopid']; ?>
" <?php if ($this->_tpl_vars['smstate'] == 1): ?>class="here"<?php endif; ?>>首页</a></li>
		<li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=shop&a=cars&id=<?php echo $this->_tpl_vars['shopid']; ?>
" <?php if ($this->_tpl_vars['smstate'] == 2): ?>class="here"<?php endif; ?>>二手车</a></li>
		<li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=shop&a=about&id=<?php echo $this->_tpl_vars['shopid']; ?>
" <?php if ($this->_tpl_vars['smstate'] == 3): ?>class="here"<?php endif; ?>>公司介绍</a></li>
		<li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=shop&a=news&id=<?php echo $this->_tpl_vars['shopid']; ?>
" <?php if ($this->_tpl_vars['smstate'] == 4): ?>class="here"<?php endif; ?>>促销信息</a></li>
		<li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=shop&a=ask&id=<?php echo $this->_tpl_vars['shopid']; ?>
" <?php if ($this->_tpl_vars['smstate'] == 5): ?>class="here"<?php endif; ?>>购车问答</a></li>
	</ul>
</div>
<!--导航-->