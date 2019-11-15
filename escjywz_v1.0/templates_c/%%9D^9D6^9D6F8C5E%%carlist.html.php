<?php /* Smarty version 2.6.18, created on 2019-08-07 22:23:57
         compiled from default/default/carlist.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>买车-<?php echo $this->_tpl_vars['setting']['title']; ?>
</title>
		<meta content="<?php echo $this->_tpl_vars['setting']['keywords']; ?>
" name="keywords" />
		<meta content="<?php echo $this->_tpl_vars['setting']['description']; ?>
" name="description" />
		<link href="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/<?php echo $this->_tpl_vars['setting']['templates']; ?>
/css/car.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/pcall.js"></script>
		<script language="JavaScript">
			$(function() {
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

				$("div.car_tab ul li a").mouseover(function() {
					$(this).addClass("here").parent().siblings().children().removeClass("here");
					var index = $div_li.index(this);
					$("div.cartab_box > div").eq(index).show().siblings().hide();
				});
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
/">首页</a> <span>></span> <a href="<?php echo $this->_tpl_vars['weburl']; ?>
/">买车</a></div>
<div class="main clearfix mt10">
	<div class="main_left">
		<div class="search_box">
			<div class="condition">
				<span class="fr pr10"><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&clear=1" class="unl blue">清空条件</a></span>
				<span class="fl">您已选择：</span>
				<ul class="condition_list fl">
					<?php if ($_COOKIE['keywords'] <> ''): ?><li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&k=" class="condition"><?php echo $_COOKIE['keywords']; ?>
</a></li><?php endif; ?>
					<?php if ($_COOKIE['brand'] <> 0): ?><li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_0" class="condition"><?php echo $this->_tpl_vars['cache']['brandlist'][$_COOKIE['brand']]; ?>
</a></li><?php endif; ?>
					<?php if ($_COOKIE['subbrand'] <> 0): ?><li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&sb=0" class="condition"><?php echo $this->_tpl_vars['cache']['subbrandlist'][$_COOKIE['subbrand']]; ?>
</a></li><?php endif; ?>
					<?php if ($_COOKIE['model'] <> 0): ?><li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=m_0" class="condition"><?php echo $this->_tpl_vars['cache']['modellist'][$_COOKIE['model']]; ?>
</a></li><?php endif; ?>
					<?php if ($_COOKIE['price'] <> 0): ?><li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=p_0" class="condition"><?php echo $this->_tpl_vars['arr_price'][$_COOKIE['price']]; ?>
</a></li><?php endif; ?>
					<?php if ($_COOKIE['age'] <> 0): ?><li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=a_0" class="condition"><?php echo $this->_tpl_vars['arr_age'][$_COOKIE['age']]; ?>
</a></li><?php endif; ?>
					<?php if ($_COOKIE['gas'] <> 0): ?><li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=g_0" class="condition"><?php echo $this->_tpl_vars['arr_gas'][$_COOKIE['gas']]; ?>
</a></li><?php endif; ?>
				</ul>
			</div>
			<ul class="search_list">
				<form method="get" action="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php">
				<li>品 牌： <a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_0" <?php if ($_COOKIE['brand'] == 0): ?>class="here"<?php endif; ?>>全部</a><?php $_from = $this->_tpl_vars['arr_brand']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['brandlist']):
?><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_<?php echo $this->_tpl_vars['skey']; ?>
" <?php if ($_COOKIE['brand'] == $this->_tpl_vars['skey']): ?>class="here"<?php endif; ?>><?php echo $this->_tpl_vars['brandlist']; ?>
</a><?php endforeach; endif; unset($_from); ?>
				<select id="brand" name="c">
					<?php echo $this->_tpl_vars['selectbrandsearch']; ?>

				</select>
				<select id="subbrand" name="sb">
					<option value="">请选择车系</option>
				</select>
				<input type="hidden" name="m" value="search">
				<input type="submit" value="搜索" class="cbutton">
				</li>
				</form>
				<li>车 型： <a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=m_0" <?php if ($_COOKIE['model'] == 0): ?>class="here"<?php endif; ?>>全部</a><?php $_from = $this->_tpl_vars['cache']['modellist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['modellist']):
?><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=m_<?php echo $this->_tpl_vars['skey']; ?>
" <?php if ($_COOKIE['model'] == $this->_tpl_vars['skey']): ?>class="here"<?php endif; ?>><?php echo $this->_tpl_vars['modellist']; ?>
</a><?php endforeach; endif; unset($_from); ?></li>
				<li>价 格： <a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=p_0"  <?php if ($_COOKIE['price'] == 0): ?>class="here"<?php endif; ?>>全部</a><?php $_from = $this->_tpl_vars['arr_price']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['pricelist']):
?><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=p_<?php echo $this->_tpl_vars['skey']; ?>
" <?php if ($_COOKIE['price'] == $this->_tpl_vars['skey']): ?>class="here"<?php endif; ?>><?php echo $this->_tpl_vars['pricelist']; ?>
</a><?php endforeach; endif; unset($_from); ?></li>
				<li>车 龄： <a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=a_0"  <?php if ($_COOKIE['age'] == 0): ?>class="here"<?php endif; ?>>全部</a><?php $_from = $this->_tpl_vars['arr_age']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['agellist']):
?><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=a_<?php echo $this->_tpl_vars['skey']; ?>
" <?php if ($_COOKIE['age'] == $this->_tpl_vars['skey']): ?>class="here"<?php endif; ?>><?php echo $this->_tpl_vars['agellist']; ?>
</a><?php endforeach; endif; unset($_from); ?></li>
				<li>排 量： <a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=g_0"  <?php if ($_COOKIE['gas'] == 0): ?>class="here"<?php endif; ?>>全部</a><?php $_from = $this->_tpl_vars['arr_gas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['gasllist']):
?><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=g_<?php echo $this->_tpl_vars['skey']; ?>
" <?php if ($_COOKIE['gas'] == $this->_tpl_vars['skey']): ?>class="here"<?php endif; ?>><?php echo $this->_tpl_vars['gasllist']; ?>
</a><?php endforeach; endif; unset($_from); ?></li>
			</ul>
		</div>
		<div class="cartype mt15">
			<ul class="clearfix">
				<li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=f_0" <?php if ($_COOKIE['carfrom'] == 0): ?>class="here"<?php endif; ?>>全部二手车</a></li>
				<li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=f_1" <?php if ($_COOKIE['carfrom'] == 1): ?>class="here"<?php endif; ?>>商家二手车</a></li>
				<li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=f_2" <?php if ($_COOKIE['carfrom'] == 2): ?>class="here"<?php endif; ?>>个人二手车</a></li>
			</ul>
		</div>
		<div class="search_big_box">
			<div class="orderlist">
				<ul class="fl">
					<li <?php if ($_COOKIE['order'] == 1): ?>class="or04"<?php elseif ($_COOKIE['order'] == 2): ?>class="or03"<?php else: ?>class="or02"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&order=<?php if ($_COOKIE['order'] == 1): ?>2<?php elseif ($_COOKIE['order'] == 2): ?>1<?php else: ?>2<?php endif; ?>" >时间</a></li>
					<li <?php if ($_COOKIE['order'] == 3): ?>class="or04"<?php elseif ($_COOKIE['order'] == 4): ?>class="or03"<?php else: ?>class="or02"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&order=<?php if ($_COOKIE['order'] == 3): ?>4<?php elseif ($_COOKIE['order'] == 4): ?>3<?php else: ?>3<?php endif; ?>" >价格</a></li>
					<li <?php if ($_COOKIE['order'] == 5): ?>class="or04"<?php elseif ($_COOKIE['order'] == 6): ?>class="or03"<?php else: ?>class="or02"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&order=<?php if ($_COOKIE['order'] == 5): ?>6<?php elseif ($_COOKIE['order'] == 6): ?>5<?php else: ?>5<?php endif; ?>" >里程</a></li>
					<li <?php if ($_COOKIE['order'] == 7): ?>class="or04"<?php elseif ($_COOKIE['order'] == 8): ?>class="or03"<?php else: ?>class="or02"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&order=<?php if ($_COOKIE['order'] == 7): ?>8<?php elseif ($_COOKIE['order'] == 8): ?>7<?php else: ?>7<?php endif; ?>" >车龄</a></li>
				</ul>
				<div class="showtype">
					<?php if ($_COOKIE['showtype'] == 'list'): ?>
					<span class="type01"><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&showtype=list">列表</a></span>
					<?php else: ?>
					<span class="type02"><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&showtype=list">列表</a></span>
					<?php endif; ?>
					<?php if ($_COOKIE['showtype'] == 'pic'): ?>
					<span class="type03"><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&showtype=pic">大图</a></span>
					<?php else: ?>
					<span class="type04"><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&showtype=pic">大图</a></span>
					<?php endif; ?>
				</div>
				<div class="page_num">
					<span>每页显示：</span>
					<span class="num"><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&pagenum=30" <?php if ($_COOKIE['pagenum'] == 30): ?>class="fb orange01"<?php endif; ?>>30</a></span>
					<span class="num"><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&pagenum=60" <?php if ($_COOKIE['pagenum'] == 60): ?>class="fb orange01"<?php endif; ?>>60</a></span>
					<span class="num"><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&pagenum=90" <?php if ($_COOKIE['pagenum'] == 90): ?>class="fb orange01"<?php endif; ?>>90</a></span>
				</div>
			</div>
			<div class="box">
				<?php if ($_COOKIE['showtype'] == 'pic'): ?>
				<ul class="bigcarlist clearfix">
					<?php $_from = $this->_tpl_vars['carslist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['cars_list']):
?>
					<li <?php if (( $this->_tpl_vars['skey']+1 ) % 4 <> 0): ?>class="bbg"<?php endif; ?>>
						<a href="<?php echo $this->_tpl_vars['cars_list']['p_url']; ?>
" target="_blank"><?php if ($this->_tpl_vars['cars_list']['p_mainpic'] <> ""): ?><img src="<?php echo $this->_tpl_vars['weburl']; ?>
<?php echo $this->_tpl_vars['cars_list']['p_mainpic']; ?>
"/><?php else: ?><img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/car.jpg"/><?php endif; ?></a>
						<p class="carname"><a href="<?php echo $this->_tpl_vars['cars_list']['p_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['cars_list']['p_shortname']; ?>
</a><?php if ($this->_tpl_vars['cars_list']['issell'] == 1): ?><span class="orange01 fb">[已卖]</span><?php endif; ?></p>
						<p class="price"><?php echo $this->_tpl_vars['cars_list']['p_price']; ?>
万</p>
						<p class="gray01 mt5"><?php echo $this->_tpl_vars['cars_list']['p_year']; ?>
年<?php echo $this->_tpl_vars['cars_list']['p_month']; ?>
月上牌  <?php echo $this->_tpl_vars['cars_list']['p_kilometre']; ?>
万公里</p>
						<p class="gray01 mt5"><div class="fr"><?php if ($this->_tpl_vars['cars_list']['isdealer'] == 2): ?><span class="check01" title="商家车源"></span><?php else: ?><span class="check02" title="个人车源"></span><?php endif; ?><span class="check03" title="审核通过"></span></div><span class="gray01">发布时间：<?php echo $this->_tpl_vars['cars_list']['listtime']; ?>
</span></p>
					</li>
					<?php endforeach; endif; unset($_from); ?>
				</ul>
				<?php else: ?>
				<?php $_from = $this->_tpl_vars['carslist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['cars_list']):
?>
					<div class="listcar clearfix">
						<div class="img">
							<a href="<?php echo $this->_tpl_vars['cars_list']['p_url']; ?>
" target="_blank"><?php if ($this->_tpl_vars['cars_list']['p_mainpic'] <> ""): ?><img src="<?php echo $this->_tpl_vars['weburl']; ?>
<?php echo $this->_tpl_vars['cars_list']['p_mainpic']; ?>
"/><?php else: ?><img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/car.jpg"/><?php endif; ?></a>
						</div>
						<div class="word">
							<p class="clearfix"><span class="carname fl"><a href="<?php echo $this->_tpl_vars['cars_list']['p_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['cars_list']['p_allname']; ?>
</a></span><span class="fl pt5"><?php if ($this->_tpl_vars['cars_list']['isdealer'] == 2): ?><span class="check01" title="商家车源"></span><?php else: ?><span class="check02" title="个人车源"></span><?php endif; ?><span class="check03" title="审核通过"></span></span> <?php if ($this->_tpl_vars['cars_list']['issell'] == 1): ?><span class="orange01 f14 pl10 fb fl">[已卖]</span><?php endif; ?></p>
							<p class="gray">排量：<span class="orange01"><?php echo $this->_tpl_vars['cars_list']['p_gas']; ?>
</span> 升 / 上牌日期：<span class="orange01"><?php echo $this->_tpl_vars['cars_list']['p_year']; ?>
</span>年<span class="orange01"><?php echo $this->_tpl_vars['cars_list']['p_month']; ?>
</span>月 / 颜色：<span class="orange01"><?php echo $this->_tpl_vars['cars_list']['p_color']; ?>
</span> / 行驶里程：<span class="orange01"><?php echo $this->_tpl_vars['cars_list']['p_kilometre']; ?>
</span> 万公里</p>
							<p class="gray">车主说明：<?php echo $this->_tpl_vars['cars_list']['p_details']; ?>
</p>
							<p class="gray">发布时间：<?php echo $this->_tpl_vars['cars_list']['listtime']; ?>
</p>
						</div>
						<div class="price">
							<span class="orange01 fb f14 fr"><?php echo $this->_tpl_vars['cars_list']['p_price']; ?>
万</span>
						</div>
					</div>
				<?php endforeach; endif; unset($_from); ?>
				<?php endif; ?>
				<div class="page_list"><?php echo $this->_tpl_vars['button_basic']; ?>
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
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/foot.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>