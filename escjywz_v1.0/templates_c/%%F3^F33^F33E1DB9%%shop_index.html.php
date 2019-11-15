<?php /* Smarty version 2.6.18, created on 2016-04-10 17:18:19
         compiled from default/default/shop_index.html */ ?>
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
					<h3>公司简介</h3>
					<div class="box2 clearfix">
						<div class="aboutleft">
							<?php if ($this->_tpl_vars['shop']['logo'] <> ''): ?><img src="<?php echo $this->_tpl_vars['shop']['logo']; ?>
"><?php else: ?><div class="nologo">暂无图片</div><?php endif; ?>
						</div>
						<div class="aboutright">
							<p class="f14 fb mt10"><?php echo $this->_tpl_vars['shop']['company']; ?>
</p>
							<p class="mt10">联系人：<?php echo $this->_tpl_vars['shop']['nicname']; ?>
</p>
							<p class="mt10">固话：<?php echo $this->_tpl_vars['shop']['tel']; ?>
</p>
							<p class="mt10">手机：<?php echo $this->_tpl_vars['shop']['mobilephone']; ?>
</p>
							<p class="mt10">地址：<?php echo $this->_tpl_vars['shop']['address']; ?>
</p>
						</div>
					</div>
				</div>
				<div class="shopbox mt10">
					<h3>在售车源</h3>
					<div class="box"> 
						<ul class="bigcarlist clearfix">
							<?php $_from = $this->_tpl_vars['carslist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['cars_list']):
?>
							<li <?php if (( $this->_tpl_vars['skey']+1 ) % 4 <> 0): ?>class="bbg"<?php endif; ?>>
								<a href="<?php echo $this->_tpl_vars['cars_list']['p_url']; ?>
" target="_blank"><?php if ($this->_tpl_vars['cars_list']['p_mainpic'] <> ""): ?><img src="<?php echo $this->_tpl_vars['cars_list']['p_mainpic']; ?>
"/><?php else: ?><img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/car.jpg"/><?php endif; ?></a>
								<p class="carname mt5"><a href="<?php echo $this->_tpl_vars['cars_list']['p_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['cars_list']['p_allname']; ?>
</a></p>
								<p class="price"><?php echo $this->_tpl_vars['cars_list']['p_price']; ?>
</p>
								<p class="gray01 mt5"><?php echo $this->_tpl_vars['cars_list']['p_year']; ?>
年<?php echo $this->_tpl_vars['cars_list']['p_month']; ?>
月上牌&nbsp;&nbsp;<?php echo $this->_tpl_vars['cars_list']['p_kilometre']; ?>
万公里</p>
							</li>
							<?php endforeach; endif; unset($_from); ?>
						</ul>
					</div>
					<div class="page_list"><?php echo $this->_tpl_vars['button_basic']; ?>
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