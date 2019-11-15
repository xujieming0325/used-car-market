<?php /* Smarty version 2.6.18, created on 2016-04-10 17:08:23
         compiled from default/default/news_list.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php echo $this->_tpl_vars['catname']; ?>
 - <?php echo $this->_tpl_vars['news']['keywords']; ?>
</title>
		<meta content="<?php echo $this->_tpl_vars['news']['keywords']; ?>
"  name="keywords"/>
		<meta content="<?php echo $this->_tpl_vars['news']['description']; ?>
" name="description"/>
		<link href="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/<?php echo $this->_tpl_vars['setting']['templates']; ?>
/css/page.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/pcall.js"></script>
	</head>
	<body>
		<!--内容-->
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/head.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<div class="nav">您当前的位置：<a href="<?php echo $this->_tpl_vars['weburl']; ?>
/">首页</a> <span>></span> <?php echo $this->_tpl_vars['catname']; ?>
</div>
		<div class="main mt10 clearfix">
			<div class="main_left">
				<div class="commonbox02">
					<h3><?php echo $this->_tpl_vars['catname']; ?>
</h3>
					<div class="box3"> 
						<ul class="news_list p20">
							<?php $_from = $this->_tpl_vars['newslist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['news']):
?>
							<li>
								<span class="fr f12 gray"><?php echo $this->_tpl_vars['news']['addtime']; ?>
</span><a href="<?php echo $this->_tpl_vars['news']['n_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['news']['n_title']; ?>
</a>
							</li>
							<?php endforeach; endif; unset($_from); ?>
						</ul>
						<div class="page_list">
							<?php echo $this->_tpl_vars['page_list']; ?>

						</div>
					</div>
				</div>
			</div>
			<div class="main_right">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/right.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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