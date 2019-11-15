<?php /* Smarty version 2.6.18, created on 2019-08-08 14:46:26
         compiled from default/default/shop_cars.html */ ?>
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
		<script language="JavaScript">
		$(function(){
			$("#login").load("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1&login=1");
			//品牌选择
			$("#brand").change(function(){
				$.get("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1", { 
					bid :  $("#brand").val() 
				}, function (data, textStatus){
						   $("#subbrand").html(data); // 把返回的数据添加到页面上
					}
				);
			});
		})
		</script>
		<!--头部 -->
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
				<div class="search_box">
					<div class="condition">
						<span class="fr pr10"><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=shop&a=cars&id=<?php echo $this->_tpl_vars['shop']['id']; ?>
&clear=1" class="unl blue">清空条件</a></span>
						<span class="fl">您已选择：</span>
						<ul class="condition_list fl">
							<?php if ($_COOKIE['skeywords'] <> ''): ?><li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=shop&a=cars&id=<?php echo $this->_tpl_vars['shop']['id']; ?>
&k=" class="condition"><?php echo $_COOKIE['skeywords']; ?>
</a></li><?php endif; ?>
							<?php if ($_COOKIE['sbrand'] <> 0): ?><li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=shop&a=cars&id=<?php echo $this->_tpl_vars['shop']['id']; ?>
&c=b_0" class="condition"><?php echo $this->_tpl_vars['cache']['brandlist'][$_COOKIE['sbrand']]; ?>
</a></li><?php endif; ?>
							<?php if ($_COOKIE['ssubbrand'] <> 0): ?><li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=shop&a=cars&id=<?php echo $this->_tpl_vars['shop']['id']; ?>
&sb=0" class="condition"><?php echo $this->_tpl_vars['cache']['subbrandlist'][$_COOKIE['ssubbrand']]; ?>
</a></li><?php endif; ?>
							<?php if ($_COOKIE['smodel'] <> 0): ?><li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=shop&a=cars&id=<?php echo $this->_tpl_vars['shop']['id']; ?>
&c=m_0" class="condition"><?php echo $this->_tpl_vars['cache']['modellist'][$_COOKIE['smodel']]; ?>
</a></li><?php endif; ?>
							<?php if ($_COOKIE['sprice'] <> 0): ?><li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=shop&a=cars&id=<?php echo $this->_tpl_vars['shop']['id']; ?>
&c=p_0" class="condition"><?php echo $this->_tpl_vars['arr_price'][$_COOKIE['sprice']]; ?>
</a></li><?php endif; ?>
							<?php if ($_COOKIE['sage'] <> 0): ?><li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=shop&a=cars&id=<?php echo $this->_tpl_vars['shop']['id']; ?>
&c=a_0" class="condition"><?php echo $this->_tpl_vars['arr_age'][$_COOKIE['sage']]; ?>
</a></li><?php endif; ?>
							<?php if ($_COOKIE['sgas'] <> 0): ?><li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=shop&a=cars&id=<?php echo $this->_tpl_vars['shop']['id']; ?>
&c=g_0" class="condition"><?php echo $this->_tpl_vars['arr_gas'][$_COOKIE['sgas']]; ?>
</a></li><?php endif; ?>
						</ul>
					</div>
					<ul class="search_list">
						<form method="get" action="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php">
						<li>品 牌： <a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=shop&a=cars&id=<?php echo $this->_tpl_vars['shop']['id']; ?>
&c=b_0" <?php if ($_COOKIE['brand'] == 0): ?>class="here"<?php endif; ?>>全部</a>
						<select id="brand" name="c">
							<?php echo $this->_tpl_vars['selectbrandsearch']; ?>

						</select>
						<select id="subbrand" name="sb">
							<option value="">请选择车系</option>
						</select>
						<input type="hidden" name="m" value="shop">
						<input type="hidden" name="a" value="cars">
						<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['shop']['id']; ?>
">
						<input type="submit" value="搜索" class="cbutton">
						</li>
						</form>
						<li>车 型： <a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=shop&a=cars&id=<?php echo $this->_tpl_vars['shop']['id']; ?>
&c=m_0" <?php if ($_COOKIE['smodel'] == 0): ?>class="here"<?php endif; ?>>全部</a><?php $_from = $this->_tpl_vars['cache']['modellist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['modellist']):
?><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=shop&a=cars&id=<?php echo $this->_tpl_vars['shop']['id']; ?>
&c=m_<?php echo $this->_tpl_vars['skey']; ?>
" <?php if ($_COOKIE['smodel'] == $this->_tpl_vars['skey']): ?>class="here"<?php endif; ?>><?php echo $this->_tpl_vars['modellist']; ?>
</a><?php endforeach; endif; unset($_from); ?></li>
						<li>价 格： <a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=shop&a=cars&id=<?php echo $this->_tpl_vars['shop']['id']; ?>
&c=p_0"  <?php if ($_COOKIE['sprice'] == 0): ?>class="here"<?php endif; ?>>全部</a><?php $_from = $this->_tpl_vars['arr_price']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['pricelist']):
?><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=shop&a=cars&id=<?php echo $this->_tpl_vars['shop']['id']; ?>
&c=p_<?php echo $this->_tpl_vars['skey']; ?>
" <?php if ($_COOKIE['sprice'] == $this->_tpl_vars['skey']): ?>class="here"<?php endif; ?>><?php echo $this->_tpl_vars['pricelist']; ?>
</a><?php endforeach; endif; unset($_from); ?></li>
						<li>车 龄： <a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=shop&a=cars&id=<?php echo $this->_tpl_vars['shop']['id']; ?>
&c=a_0"  <?php if ($_COOKIE['sage'] == 0): ?>class="here"<?php endif; ?>>全部</a><?php $_from = $this->_tpl_vars['arr_age']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['agellist']):
?><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=shop&a=cars&id=<?php echo $this->_tpl_vars['shop']['id']; ?>
&c=a_<?php echo $this->_tpl_vars['skey']; ?>
" <?php if ($_COOKIE['sage'] == $this->_tpl_vars['skey']): ?>class="here"<?php endif; ?>><?php echo $this->_tpl_vars['agellist']; ?>
</a><?php endforeach; endif; unset($_from); ?></li>
					</ul>
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
" target="_blank"><img src="<?php echo $this->_tpl_vars['cars_list']['p_mainpic']; ?>
"/></a>
								<p class="carname"><span class="orange01 fb fr"><?php echo $this->_tpl_vars['cars_list']['p_price']; ?>
</span><a href="<?php echo $this->_tpl_vars['cars_list']['p_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['cars_list']['p_shortname']; ?>
</a></p>
								<p class="gray01"><?php echo $this->_tpl_vars['cars_list']['p_gas']; ?>
L &nbsp;&nbsp;<?php echo $this->_tpl_vars['cars_list']['p_transmission']; ?>
</p>
								<p class="gray01"><?php echo $this->_tpl_vars['cars_list']['p_year']; ?>
年<?php echo $this->_tpl_vars['cars_list']['p_month']; ?>
月上牌&nbsp;&nbsp;<?php echo $this->_tpl_vars['cars_list']['p_color']; ?>
</p>
								<p><span class="gray01">发布时间：<?php echo $this->_tpl_vars['cars_list']['listtime']; ?>
</span></p>
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