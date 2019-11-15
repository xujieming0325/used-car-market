<?php /* Smarty version 2.6.18, created on 2015-10-21 19:31:21
         compiled from m/index.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title><?php echo $this->_tpl_vars['setting']['title']; ?>
</title>
	<link href="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/m/css/page.css" rel="stylesheet" type="text/css"/>
	<script src="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/m/js/jquery.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/m/js/jquery.textRemindAuto-1.0.js"></script>
	<script src="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/m/js/TouchSlide.1.1.js"></script>
	<script type="text/javascript">
    $(function() {
		$(".remindAuto").textRemindAuto();
    })
	</script>
</head>
<body>
<!--头部--> 
<div class="header clearfix">
    <div class="logo"><a href="index.php" title=""><?php echo $this->_tpl_vars['setting']['sitename']; ?>
</a></div>
</div>
<!--头部结束-->
<!--主体-->
<div class="indexmain mt10">
	<div id="focus" class="focus">
		<div class="hd">
			<ul></ul>
		</div>
		<div class="bd">
			<ul>
				<?php $_from = $this->_tpl_vars['film_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['film']):
?>
				<li><a href="#"><img _src="<?php echo $this->_tpl_vars['webdomain']; ?>
<?php echo $this->_tpl_vars['film']['pic']; ?>
" src="images/blank.png" /></a></li>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
		</div>
	</div>
	<script type="text/javascript">
		TouchSlide({ 
			slideCell:"#focus",
			titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
			mainCell:".bd ul", 
			effect:"left", 
			autoPlay:true,//自动播放
			autoPage:true, //自动分页
			switchLoad:"_src" //切换加载，真实图片路径为"_src" 
		});
	</script>
</div>
<div class="topsearch mt10">
	<div class="box">
		<form method="get" action="index.php">
			<input type="text" name="k" class="keyword remindAuto" value="搜索车源，如宝马、奔驰"><input type="hidden" name="m" value="search"><input type="hidden" name="a" value="search"><input type="submit" class="but01" value="">
		</form>
	</div>
</div>
<div class="indexmain">
	<div class="indexmenu mt5">
		<ul class="clearfix">
			<li class="bbr"><a href="index.php?m=search" class="menu01">买车</a></li>
			<li class="bbr"><a href="index.php?m=sellcar" class="menu02">卖车</a></li>
			<li class="bbr"><a href="index.php?m=assesscar" class="menu03">评估</a></li>
			<li><a href="index.php?m=supersearch" class="menu04">筛选</a></li>
		</ul>
	</div>
	<div class="indexbox mt10">
		<h3><span class="title">车型</span></h3>
		<div class="box clearfix">
			<?php $_from = $this->_tpl_vars['cache']['modellist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['modellist']):
?><a href="index.php?m=search&model=<?php echo $this->_tpl_vars['skey']; ?>
" <?php if ($this->_tpl_vars['skey']%4 != 0): ?>class='bbr'<?php endif; ?>><?php echo $this->_tpl_vars['modellist']; ?>
</a><?php endforeach; endif; unset($_from); ?>
		</div>
	</div>
	<div class="indexbox">
		<h3><span class="title">年份</span></h3>
		<div class="box clearfix">
			<?php $_from = $this->_tpl_vars['arr_age']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['agellist']):
?><a href="index.php?m=search&years=<?php echo $this->_tpl_vars['skey']; ?>
" <?php if ($this->_tpl_vars['skey']%4 != 0): ?>class='bbr'<?php endif; ?>><?php echo $this->_tpl_vars['agellist']; ?>
</a><?php endforeach; endif; unset($_from); ?>
		</div>
	</div>
	<div class="indexbox">
		<h3><span class="title">价格</span></h3>
		<div class="box clearfix">
			<?php $_from = $this->_tpl_vars['arr_price']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['pricelist']):
?><a href="index.php?m=search&price=<?php echo $this->_tpl_vars['skey']; ?>
" <?php if ($this->_tpl_vars['skey']%4 != 0): ?>class='bbr'<?php endif; ?>><?php echo $this->_tpl_vars['pricelist']; ?>
</a><?php endforeach; endif; unset($_from); ?>
		</div>
	</div>
</div>
<!--主体-->
<!--底部-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "m/foot.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--底部结束-->
</body>
</html>