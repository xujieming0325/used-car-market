<?php /* Smarty version 2.6.18, created on 2015-10-21 19:32:21
         compiled from m/search.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title><?php echo $this->_tpl_vars['setting']['keywords']; ?>
-<?php echo $this->_tpl_vars['setting']['sitename']; ?>
</title>
	<link href="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/m/css/page.css" rel="stylesheet" type="text/css"/>
	<script src="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/m/js/jquery.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/m/js/jquery.textRemindAuto-1.0.js"></script>
	<script type="text/javascript">
    $(function() {
		$(".remindAuto").textRemindAuto();
    })
	</script>
</head>
<body>
<!--头部--> 
<div class="comnav clearfix">
	<a href="javascript:window.history.go(-1);" class="reback">返回</a>
	<a href="index.php" class="home">首页</a>
	选车中心
</div>
<div class="topsearch mt10">
	<div class="box">
		<form method="get" action="index.php">
			<input type="text" name="k" class="keyword remindAuto" value="搜索车源，如宝马、奔驰"><input type="hidden" name="m" value="search"><input type="hidden" name="a" value="search"><input type="submit" class="but01" value="">
		</form>
	</div>
</div>
<!--头部结束-->
<!--主体-->
<div class="orderbox">
	<ul class="clearfix">
		<li><a href="index.php?m=search&order=<?php if ($_COOKIE['order'] == 1): ?>2<?php elseif ($_COOKIE['order'] == 2): ?>1<?php else: ?>2<?php endif; ?>" <?php if ($_COOKIE['order'] == 1): ?>class="or03"<?php elseif ($_COOKIE['order'] == 2): ?>class="or04"<?php else: ?>class="or02"<?php endif; ?>>时间</a></li>
		<li><a href="index.php?m=search&order=<?php if ($_COOKIE['order'] == 3): ?>4<?php elseif ($_COOKIE['order'] == 4): ?>3<?php else: ?>3<?php endif; ?>" <?php if ($_COOKIE['order'] == 3): ?>class="or04"<?php elseif ($_COOKIE['order'] == 4): ?>class="or03"<?php else: ?>class="or02"<?php endif; ?>>价格</a></li>
		<li><a href="index.php?m=search&order=<?php if ($_COOKIE['order'] == 5): ?>6<?php elseif ($_COOKIE['order'] == 6): ?>5<?php else: ?>5<?php endif; ?>" <?php if ($_COOKIE['order'] == 5): ?>class="or04"<?php elseif ($_COOKIE['order'] == 6): ?>class="or03"<?php else: ?>class="or02"<?php endif; ?>>里程</a></li>
		<li><a href="index.php?m=search&order=<?php if ($_COOKIE['order'] == 7): ?>8<?php elseif ($_COOKIE['order'] == 8): ?>7<?php else: ?>7<?php endif; ?>" <?php if ($_COOKIE['order'] == 7): ?>class="or03"<?php elseif ($_COOKIE['order'] == 8): ?>class="or04"<?php else: ?>class="or02"<?php endif; ?>>车龄</a></li>
	</ul>
</div>
<div class="main">
	<h3 class="mt10 f14">共找到 <span class="orange01"><?php echo $this->_tpl_vars['allnum']; ?>
</span> 条车源信息</h3>
	<?php $_from = $this->_tpl_vars['carslist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['carslist']):
?>
	<div class="carlist clearfix mt10">
		<div class="carlist_left">
			<a href="<?php echo $this->_tpl_vars['carslist']['p_url']; ?>
"><?php if ($this->_tpl_vars['carslist']['p_mainpic'] <> ''): ?><img src="<?php echo $this->_tpl_vars['carslist']['p_mainpic']; ?>
"/><?php else: ?>暂无图片<?php endif; ?></a>
		</div>
		<div class="carlist_right">
			<p class="f12 fb"><a href="<?php echo $this->_tpl_vars['carslist']['p_url']; ?>
"><?php echo $this->_tpl_vars['carslist']['p_allname']; ?>
</a></p>
			<p>上牌日期：<?php echo $this->_tpl_vars['carslist']['p_year']; ?>
年<?php echo $this->_tpl_vars['carslist']['p_month']; ?>
月</p>
			<p><span class="orange01 f14 fr pr10 fb"><?php echo $this->_tpl_vars['carslist']['p_price']; ?>
</span><?php echo $this->_tpl_vars['carslist']['listtime']; ?>
</p>
		</div>
	</div>
	<?php endforeach; endif; unset($_from); ?>
	<div class="pagelist"><?php echo $this->_tpl_vars['button_basic']; ?>
<?php echo $this->_tpl_vars['button_select']; ?>
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