<?php /* Smarty version 2.6.18, created on 2016-04-10 17:07:58
         compiled from default/default/news.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->_tpl_vars['news']['n_title']; ?>
</title>
<meta content="<?php echo $this->_tpl_vars['news']['n_keywords']; ?>
" name="keywords" />
<meta content="<?php echo $this->_tpl_vars['setting']['description']; ?>
" name="description" />
<link href="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/<?php echo $this->_tpl_vars['setting']['templates']; ?>
/css/page.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/pcall.js"></script>
<script language="JavaScript">
$(function(){
	$(".hits").load("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1&newshit=1&id=<?php echo $this->_tpl_vars['news']['n_id']; ?>
");
})
</script>
</head>
<body>
<!--内容--> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/head.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="nav">您当前的位置：<a href="<?php echo $this->_tpl_vars['weburl']; ?>
/">首页</a> <span>></span> <?php echo $this->_tpl_vars['news']['catname']; ?>
</div>
		<div class="main mt10 clearfix">
			<div class="main_left">
				<div class="commonbox02">
					<h3><?php echo $this->_tpl_vars['news']['catname']; ?>
</h3>
					<div class="box">
						<h2 class="news_title"> <?php echo $this->_tpl_vars['news']['n_title']; ?>
 </h2>
						<p class="tc mt20">发表时间：<?php echo $this->_tpl_vars['news']['addtime']; ?>
 &nbsp;&nbsp;&nbsp;点击：<span class="hits orange01"></span></p>
						<div class="news_info"> <?php echo $this->_tpl_vars['news']['n_info']; ?>
 </div>
					</div>
				</div>
				<div class="commonbox02 mt10">
						<h3>相关新闻</h3>
						<div class="box">
							<ul class="about_news_list clearfix">
								<?php $_from = $this->_tpl_vars['aboutnewslist']['pre']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['prenews']):
?>
								<li><a href="<?php echo $this->_tpl_vars['prenews']['n_url']; ?>
"><?php echo $this->_tpl_vars['prenews']['n_title']; ?>
</a></li>
								<?php endforeach; endif; unset($_from); ?>
								<?php $_from = $this->_tpl_vars['aboutnewslist']['next']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['nextnews']):
?>
								<li><a href="<?php echo $this->_tpl_vars['nextnews']['n_url']; ?>
"><?php echo $this->_tpl_vars['nextnews']['n_title']; ?>
</a></li>
								<?php endforeach; endif; unset($_from); ?>
							</ul>
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