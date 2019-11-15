<?php /* Smarty version 2.6.18, created on 2016-04-10 17:07:55
         compiled from default/default/about.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php echo $this->_tpl_vars['page']['p_title']; ?>
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
/css/page.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<!--内容-->
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/head.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<div class="main mt10 clearfix">
			<div class="aboutbox clearfix">
				<div class="abouttitle fb"><?php echo $this->_tpl_vars['page']['sortname']; ?>
</div>
				<div class="leftbox">
					<ul class="leftlist">
						<?php $_from = $this->_tpl_vars['pagelist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['listpage']):
?>
						<li><a href="<?php echo $this->_tpl_vars['listpage']['p_page']; ?>
" <?php if ($this->_tpl_vars['pageid'] == $this->_tpl_vars['listpage']['p_id']): ?>class="here"<?php endif; ?>><?php echo $this->_tpl_vars['listpage']['p_title']; ?>
</a></li>
						<?php endforeach; endif; unset($_from); ?>
					</ul>
				</div>
				<div class="rightbox">
					<h3><?php echo $this->_tpl_vars['page']['p_title']; ?>
</h3>
					<div class="infobox">
						<?php echo $this->_tpl_vars['page']['p_info']; ?>

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