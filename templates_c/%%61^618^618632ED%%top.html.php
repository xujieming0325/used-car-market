<?php /* Smarty version 2.6.18, created on 2015-10-21 19:26:18
         compiled from default/default/top.html */ ?>
<?php if ($this->_tpl_vars['setting']['version'] == 2 || $this->_tpl_vars['setting']['version'] == 3): ?>
<script language="JavaScript">
$(function(){
	$("#login").load("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1&login=1");
})
</script>
<?php endif; ?>
<div class="top">
	<div class="top_main clearfix">
		<div class="top_left">
			欢迎来到<?php echo $this->_tpl_vars['setting']['sitename']; ?>
！<?php if ($this->_tpl_vars['setting']['version'] == 2 || $this->_tpl_vars['setting']['version'] == 3): ?><span id="login"></span><?php endif; ?>
		</div>
		<div class="top_right">
			客服热线：<span class="orange01 fb"><?php echo $this->_tpl_vars['setting']['tel']; ?>
</span>
		</div>
	</div>
</div>