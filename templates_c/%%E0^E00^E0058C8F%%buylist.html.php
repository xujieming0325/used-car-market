<?php /* Smarty version 2.6.18, created on 2019-08-07 22:29:18
         compiled from default/default/buylist.html */ ?>
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
/index.php?m=qiugou&clear=1" class="unl blue">清空条件</a></span>
				<span class="fl">您已选择：</span>
				<ul class="condition_list fl">
					<?php if ($_COOKIE['keywords'] <> ''): ?><li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=qiugou&k=" class="condition"><?php echo $_COOKIE['keywords']; ?>
</a></li><?php endif; ?>
					<?php if ($_COOKIE['brand'] <> 0): ?><li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=qiugou&c=b_0" class="condition"><?php echo $this->_tpl_vars['cache']['brandlist'][$_COOKIE['brand']]; ?>
</a></li><?php endif; ?>
					<?php if ($_COOKIE['subbrand'] <> 0): ?><li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=qiugou&sb=0" class="condition"><?php echo $this->_tpl_vars['cache']['subbrandlist'][$_COOKIE['subbrand']]; ?>
</a></li><?php endif; ?>
					<?php if ($_COOKIE['model'] <> 0): ?><li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=qiugou&c=m_0" class="condition"><?php echo $this->_tpl_vars['cache']['modellist'][$_COOKIE['model']]; ?>
</a></li><?php endif; ?>
					<?php if ($_COOKIE['price'] <> 0): ?><li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=qiugou&c=p_0" class="condition"><?php echo $this->_tpl_vars['arr_price'][$_COOKIE['price']]; ?>
</a></li><?php endif; ?>
					<?php if ($_COOKIE['age'] <> 0): ?><li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=qiugou&c=a_0" class="condition"><?php echo $this->_tpl_vars['arr_age'][$_COOKIE['age']]; ?>
</a></li><?php endif; ?>
					<?php if ($_COOKIE['gas'] <> 0): ?><li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=qiugou&c=g_0" class="condition"><?php echo $this->_tpl_vars['arr_age_b'][$_COOKIE['gas']]; ?>
</a></li><?php endif; ?>
				</ul>
			</div>
			<ul class="search_list">
				<form method="get" action="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php">
				<li>品 牌： <a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=qiugou&c=b_0" <?php if ($_COOKIE['brand'] == 0): ?>class="here"<?php endif; ?>>全部</a><?php $_from = $this->_tpl_vars['arr_brand']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['brandlist']):
?><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=qiugou&c=b_<?php echo $this->_tpl_vars['skey']; ?>
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
/index.php?m=qiugou&c=m_0" <?php if ($_COOKIE['model'] == 0): ?>class="here"<?php endif; ?>>全部</a><?php $_from = $this->_tpl_vars['cache']['modellist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['modellist']):
?><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=qiugou&c=m_<?php echo $this->_tpl_vars['skey']; ?>
" <?php if ($_COOKIE['model'] == $this->_tpl_vars['skey']): ?>class="here"<?php endif; ?>><?php echo $this->_tpl_vars['modellist']; ?>
</a><?php endforeach; endif; unset($_from); ?></li>
				<li>价 格： <a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=qiugou&c=p_0"  <?php if ($_COOKIE['price'] == 0): ?>class="here"<?php endif; ?>>全部</a><?php $_from = $this->_tpl_vars['arr_price']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['pricelist']):
?><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=qiugou&c=p_<?php echo $this->_tpl_vars['skey']; ?>
" <?php if ($_COOKIE['price'] == $this->_tpl_vars['skey']): ?>class="here"<?php endif; ?>><?php echo $this->_tpl_vars['pricelist']; ?>
</a><?php endforeach; endif; unset($_from); ?></li>
				<li>车 龄： <a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=qiugou&c=a_0"  <?php if ($_COOKIE['age'] == 0): ?>class="here"<?php endif; ?>>全部</a><?php $_from = $this->_tpl_vars['arr_age_b']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['agellist']):
?><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=qiugou&c=a_<?php echo $this->_tpl_vars['skey']; ?>
" <?php if ($_COOKIE['age'] == $this->_tpl_vars['skey']): ?>class="here"<?php endif; ?>><?php echo $this->_tpl_vars['agellist']; ?>
</a><?php endforeach; endif; unset($_from); ?></li>
			</ul>
		</div>
		<div class="search_big_box mt10">
			<div class="orderlist">
				<ul class="fl">
					<li <?php if ($_COOKIE['order'] == 1): ?>class="or04"<?php elseif ($_COOKIE['order'] == 2): ?>class="or03"<?php else: ?>class="or02"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=qiugou&order=<?php if ($_COOKIE['order'] == 1): ?>2<?php elseif ($_COOKIE['order'] == 2): ?>1<?php else: ?>2<?php endif; ?>" >时间</a></li>
					<li <?php if ($_COOKIE['order'] == 3): ?>class="or04"<?php elseif ($_COOKIE['order'] == 4): ?>class="or03"<?php else: ?>class="or02"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=qiugou&order=<?php if ($_COOKIE['order'] == 3): ?>4<?php elseif ($_COOKIE['order'] == 4): ?>3<?php else: ?>3<?php endif; ?>" >价格</a></li>
					<li <?php if ($_COOKIE['order'] == 7): ?>class="or04"<?php elseif ($_COOKIE['order'] == 8): ?>class="or03"<?php else: ?>class="or02"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=qiugou&order=<?php if ($_COOKIE['order'] == 7): ?>8<?php elseif ($_COOKIE['order'] == 8): ?>7<?php else: ?>7<?php endif; ?>" >车龄</a></li>
				</ul>
			</div>
			<div class="box">
					<table cellspacing="0" cellpadding="0" width="100%"  class="listtable">
					<tr><th align="left">求购意向</th><th>期望价格</th><th>期望车龄</th><th>求购时间</th></tr>
					<?php $_from = $this->_tpl_vars['buycarslist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cars']):
?>
					<tr>
					<td align="left"><a href="<?php echo $this->_tpl_vars['cars']['p_url']; ?>
" target="_blank">求购 <?php echo $this->_tpl_vars['cars']['p_allname']; ?>
</a></td>
					<td align="center" class="red"><?php echo $this->_tpl_vars['cars']['p_price']; ?>
万</span></td>
					<td align="center"><?php echo $this->_tpl_vars['cars']['age']; ?>
</td>
					<td align="center"><?php echo $this->_tpl_vars['cars']['p_addtime']; ?>
</td>
					<tr/>
					<?php endforeach; endif; unset($_from); ?>
					</table>
				<div class="page_list"><?php echo $this->_tpl_vars['button_basic']; ?>
</div>
			</div>
		</div>
	</div>
	<div class="main_right">
		<a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=buycar" class="buymenu mb10">提交求购信息</a>
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