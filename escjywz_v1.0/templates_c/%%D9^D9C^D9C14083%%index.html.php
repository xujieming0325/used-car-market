<?php /* Smarty version 2.6.18, created on 2016-04-10 17:05:24
         compiled from default/default/index.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php echo $this->_tpl_vars['setting']['title']; ?>
</title>
		<meta content="<?php echo $this->_tpl_vars['setting']['keywords']; ?>
" name="keywords" />
		<meta content="<?php echo $this->_tpl_vars['setting']['description']; ?>
" name="description" />
		<link href="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/<?php echo $this->_tpl_vars['setting']['templates']; ?>
/css/index.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/pcall.js"></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/jquery.SuperSlide.2.1.js"></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/Validform_v5.3.2_min.js"></script>
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
				
				$div_li = $("div.car_tab ul li a");
				$div_li.mouseover(function() {
					$(this).addClass("here").parent().siblings().children().removeClass("here");
					var index = $div_li.index(this);
					$("div.cartab_box > div").eq(index).show().siblings().hide();
				});

				//表单验证
				$(".carform").Validform({
					tiptype:1
				});
				//热门车源
				$("#hotcar").load("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1&cartype=indexhot");
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
<div class="main clearfix mt15">
	<div class="index_left">
		<div class="leftsearch">
			<div class="leftsearchbox">
				<h3 class="h301">品牌</h3>
				<div class="clearfix"><?php $_from = $this->_tpl_vars['arr_brand']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['brandlist']):
?><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_<?php echo $this->_tpl_vars['skey']; ?>
" <?php if ($_COOKIE['brand'] == $this->_tpl_vars['skey']): ?>class="here"<?php endif; ?>><?php echo $this->_tpl_vars['brandlist']; ?>
</a><?php endforeach; endif; unset($_from); ?>
				</div>
			</div>
			<div class="leftsearchbox">
				<h3 class="h302">价格</h3>
				<div class="clearfix"><?php $_from = $this->_tpl_vars['arr_price']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['pricelist']):
?><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=p_<?php echo $this->_tpl_vars['skey']; ?>
" <?php if ($_COOKIE['price'] == $this->_tpl_vars['skey']): ?>class="here"<?php endif; ?>><?php echo $this->_tpl_vars['pricelist']; ?>
</a><?php endforeach; endif; unset($_from); ?></div>
			</div>
			<div class="leftsearchbox">
				<h3 class="h303">车型</h3>
				<div class="clearfix"><?php $_from = $this->_tpl_vars['cache']['modellist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['modellist']):
?><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=m_<?php echo $this->_tpl_vars['skey']; ?>
" ><?php echo $this->_tpl_vars['modellist']; ?>
</a><?php endforeach; endif; unset($_from); ?></div>
			</div>
			<div class="leftsearchbox">
				<h3 class="h304">车龄</h3>
				<div class="clearfix"><?php $_from = $this->_tpl_vars['arr_age']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['agellist']):
?><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=a_<?php echo $this->_tpl_vars['skey']; ?>
" ><?php echo $this->_tpl_vars['agellist']; ?>
</a><?php endforeach; endif; unset($_from); ?></div>
			</div>
		</div>
	</div>
	<div class="index_center">
		<div class="focusBox" style="margin:0 auto">
			<ul class="pic">
				<?php $_from = $this->_tpl_vars['filmlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['film_list']):
?>
				<li><a href="<?php echo $this->_tpl_vars['film_list']['url']; ?>
" target="_blank"><img src="<?php echo $this->_tpl_vars['film_list']['pic']; ?>
"/></a></li>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
			<a class="prev" href="javascript:void(0)"></a>
			<a class="next" href="javascript:void(0)"></a>
			<ul class="hd">
				<?php $_from = $this->_tpl_vars['filmlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['film_list']):
?>
				<li></li>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
		</div>
		<script type="text/javascript">
			/*鼠标移过，左右按钮显示*/
			jQuery(".focusBox").hover(function(){ jQuery(this).find(".prev,.next").stop(true,true).fadeTo("show",0.2) },function(){ jQuery(this).find(".prev,.next").fadeOut() });
			/*SuperSlide图片切换*/
			jQuery(".focusBox").slide({ mainCell:".pic",effect:"fold", autoPlay:true, delayTime:600, trigger:"click"});
		</script>
		<div class="commonbox03 mt10">
			<h3 class="mt10">推荐车商</h3>
			<div class="box2">
				<div class="tjdealer" style="margin:0 auto">
					<div class="ohbox">
					<ul class="piclist">
					<?php $_from = $this->_tpl_vars['comdealer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['comdealerlist']):
?>
						<li>
							<a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=shop&id=<?php echo $this->_tpl_vars['comdealerlist']['id']; ?>
" target="_blank"><?php if ($this->_tpl_vars['comdealerlist']['logo'] <> ''): ?><img src="<?php echo $this->_tpl_vars['comdealerlist']['logo']; ?>
" class="vt"/><?php else: ?>
							<div class="noimg">暂无图片</div><?php endif; ?><span class="gray01"><?php echo $this->_tpl_vars['comdealerlist']['company']; ?>
</span>
							</a>
						</li>
					<?php endforeach; endif; unset($_from); ?>
					</ul>
				</div>
				<div class="pageBtn">
					<span class="prev">&lt;</span>
					<span class="next">&gt;</span>
				</div>
			</div>
			<script type="text/javascript">
			jQuery(".tjdealer").slide({mainCell:".piclist", effect:"leftLoop",vis:5,autoPlay:true});
			</script>
			</div>
		</div>
	</div>
	<div class="index_right">
		<div class="activityBox">
			<div class="title">
				<h2>特荐车源</h2>
				<span class="prev"></span>
				<span class="next"></span>
			</div>
			<div class="content">
				<span class="leftZone"></span>
				<div class="contentInner">
					<ul>
						<?php $_from = $this->_tpl_vars['car_list']['todaycar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['todaycarlist']):
?>
						<li>
							<a href="<?php echo $this->_tpl_vars['todaycarlist']['p_url']; ?>
" target="_blank"><img src="<?php echo $this->_tpl_vars['todaycarlist']['p_mainpic']; ?>
" /></a>
							<p class="carname mt10"><a href="<?php echo $this->_tpl_vars['todaycarlist']['p_url']; ?>
" class="f14"><?php echo $this->_tpl_vars['todaycarlist']['p_allname']; ?>
</a></p>
							<p class="mt5"><span class="f16 orange01"><?php echo $this->_tpl_vars['todaycarlist']['p_price']; ?>
</span></p>
							<p class="mt5 gray01"><?php echo $this->_tpl_vars['todaycarlist']['p_year']; ?>
年<?php echo $this->_tpl_vars['todaycarlist']['p_month']; ?>
月上牌</p>
						</li>
						<?php endforeach; endif; unset($_from); ?>
					</ul>
				</div>
				<span class="rightZone"></span>
			</div>
		</div>
		<script type="text/javascript">jQuery(".activityBox").slide({ mainCell:".contentInner ul", effect:"top",delayTime:400});</script>
		<div class="commonbox03 mt10">
			<h3 class="mt10">公告</h3>
			<div class="box">
				<ul class="noticelist clearfix">
					<?php $_from = $this->_tpl_vars['noticelist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['notice']):
?>
						<li><a href="<?php echo $this->_tpl_vars['notice']['n_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['notice']['shorttitle2']; ?>
</a></li>
					<?php endforeach; endif; unset($_from); ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php if ($this->_tpl_vars['setting']['version'] == 2 || $this->_tpl_vars['setting']['version'] == 3): ?>
<div class="main clearfix mt15">
	<div class="main_left">
		<div class="commonbox01">
			<h3>商家推荐二手车</h3>
			<div class="box">
				<ul class="bigcarlist clearfix">
					<?php $_from = $this->_tpl_vars['car_list']['sjcar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['recomcarlist']):
?>
					<li <?php if (( $this->_tpl_vars['skey']+1 ) % 4 <> 0): ?>class="bbg"<?php endif; ?>>
						<a href="<?php echo $this->_tpl_vars['recomcarlist']['p_url']; ?>
" target="_blank"><?php if ($this->_tpl_vars['recomcarlist']['p_mainpic'] <> ""): ?><img src="<?php echo $this->_tpl_vars['recomcarlist']['p_mainpic']; ?>
"/><?php else: ?><img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/car.jpg"/><?php endif; ?></a>
						<p class="carname mt5"><a href="<?php echo $this->_tpl_vars['recomcarlist']['p_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['recomcarlist']['p_allname']; ?>
</a></p>
						<p class="price"><?php echo $this->_tpl_vars['recomcarlist']['p_price']; ?>
</p>
						<p class="gray01 mt5"><?php echo $this->_tpl_vars['recomcarlist']['p_year']; ?>
年<?php echo $this->_tpl_vars['recomcarlist']['p_month']; ?>
月上牌&nbsp;&nbsp;<?php echo $this->_tpl_vars['recomcarlist']['p_kilometre']; ?>
万公里</p>
					</li>
					<?php endforeach; endif; unset($_from); ?>
				</ul>
			</div>
		</div>
	</div>
	<div class="main_right">
		<div class="hotdealer">
			<h3>热门车商</h3>
			<?php $_from = $this->_tpl_vars['hotdealer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['hotdealerlist']):
?>
			<div class="hotdealerbox mb10 clearfix">
				<div class="img"><?php if ($this->_tpl_vars['hotdealerlist']['logo'] <> ''): ?><img src="<?php echo $this->_tpl_vars['hotdealerlist']['logo']; ?>
" class="vt"><?php else: ?><div class="noimg">暂无图片</div><?php endif; ?></div>
				<div class="info">
					<p><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=shop&id=<?php echo $this->_tpl_vars['hotdealerlist']['id']; ?>
" target="_blank"><?php echo $this->_tpl_vars['hotdealerlist']['company_short']; ?>
</a></p>
					<p class="gray01"><?php echo $this->_tpl_vars['hotdealerlist']['mobilephone']; ?>
</p>
					<p class="gray01">车源：<span class="orange01"><?php echo $this->_tpl_vars['hotdealerlist']['carcount']; ?>
</span> 辆</p>
				</div>
			</div>
			<?php endforeach; endif; unset($_from); ?>
		</div>	
	</div>
</div>
<?php endif; ?>
<div class="main mt15 clearfix">
	<div class="main_left">
		<div class="commonbox01">
			<h3>个人推荐二手车</h3>
			<div class="box">
				<ul class="bigcarlist clearfix">
					<?php $_from = $this->_tpl_vars['car_list']['grcar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['grcarlist']):
?>
					<li <?php if (( $this->_tpl_vars['skey']+1 ) % 4 <> 0): ?>class="bbg"<?php endif; ?>>
						<a href="<?php echo $this->_tpl_vars['grcarlist']['p_url']; ?>
" target="_blank"><?php if ($this->_tpl_vars['grcarlist']['p_mainpic'] <> ""): ?><img src="<?php echo $this->_tpl_vars['grcarlist']['p_mainpic']; ?>
"/><?php else: ?><img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/car.jpg"/><?php endif; ?></a>
						<p class="carname mt5"><a href="<?php echo $this->_tpl_vars['grcarlist']['p_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['grcarlist']['p_allname']; ?>
</a></p>
						<p class="price"><?php echo $this->_tpl_vars['grcarlist']['p_price']; ?>
</p>
						<p class="gray01 mt5"><?php echo $this->_tpl_vars['grcarlist']['p_year']; ?>
年<?php echo $this->_tpl_vars['grcarlist']['p_month']; ?>
月上牌&nbsp;&nbsp;<?php echo $this->_tpl_vars['grcarlist']['p_kilometre']; ?>
万公里</p>
					</li>
					<?php endforeach; endif; unset($_from); ?>
				</ul>
			</div>
		</div>
	</div>
	<div class="main_right">
		<div class="commonbox02">
			<h3>热门车源排行</h3>
			<div class="box">
				<div id="hotcar" class="indexhotcarlist"></div>
			</div>
		</div>
	</div>
</div>
<div class="main mt15">
	<div class="indexbox clearfix">
		<div class="left">
			<h3><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=news&catid=1" class="more">更多</a>二手车行情</h3>
			<div class="box">
				<ul class="newslist">
					<?php $_from = $this->_tpl_vars['newslist']['1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['newslist1']):
?>
					<li><a href="<?php echo $this->_tpl_vars['newslist1']['n_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['newslist1']['shorttitle']; ?>
</a></li>
					<?php endforeach; endif; unset($_from); ?>
				</ul>
			</div>
		</div>
		<div class="left">
			<h3><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=news&catid=2" class="more">更多</a>交易过户</h3>
			<div class="box">
				<ul class="newslist">
					<?php $_from = $this->_tpl_vars['newslist']['2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['newslist2']):
?>
					<li><a href="<?php echo $this->_tpl_vars['newslist2']['n_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['newslist2']['shorttitle']; ?>
</a></li>
					<?php endforeach; endif; unset($_from); ?>
				</ul>
			</div>
		</div>
		<div class="left">
			<h3><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=news&catid=3" class="more">更多</a>汽车养护</h3>
			<div class="box">
				<ul class="newslist">
					<?php $_from = $this->_tpl_vars['newslist']['3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['newslist3']):
?>
					<li><a href="<?php echo $this->_tpl_vars['newslist3']['n_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['newslist3']['shorttitle']; ?>
</a></li>
					<?php endforeach; endif; unset($_from); ?>
				</ul>
			</div>
		</div>
		<div class="right">
			<h3><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=news&catid=4" class="more">更多</a>驾驶技巧</h3>
			<div class="box">
				<ul class="newslist">
					<?php $_from = $this->_tpl_vars['newslist']['4']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['newslist4']):
?>
					<li><a href="<?php echo $this->_tpl_vars['newslist4']['n_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['newslist4']['shorttitle']; ?>
</a></li>
					<?php endforeach; endif; unset($_from); ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<script language="JavaScript">
$(function() {
	$mark_li = $("div.marklist ul li");
	$mark_li.mouseover(function() {
		$(this).addClass("here").siblings().removeClass("here");
		var index = $mark_li.index(this);
		$("div.marklistbox > div").eq(index).show().siblings().hide();
	});
});
</script>
<div class="mt15 footbox">
	<div class="box clearfix">
		<div class="left">热门车系</div>
		<div class="right">
			<div class="marklist">
				<ul class="clearfix">
					<?php $_from = $this->_tpl_vars['hotkeywordlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['hotkeyword']):
?>
					<li <?php if ($this->_tpl_vars['skey'] == 'A'): ?>class="here"<?php endif; ?>><?php echo $this->_tpl_vars['skey']; ?>
</li>
					<?php endforeach; endif; unset($_from); ?>
				</ul>
			</div>
			<div class="marklistbox">
				<?php $_from = $this->_tpl_vars['hotkeywordlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['hotkeyword']):
?>
				<div class="markbox <?php if ($this->_tpl_vars['skey'] <> 'A'): ?>hide<?php endif; ?>">
					<?php $_from = $this->_tpl_vars['hotkeyword']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['hotkey']):
?>
						<a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&k=<?php echo $this->_tpl_vars['hotkey']['keyword']; ?>
"><?php echo $this->_tpl_vars['hotkey']['keywords']; ?>
</a>&nbsp;&nbsp;|&nbsp;&nbsp;
					<?php endforeach; endif; unset($_from); ?>
				</div>
				<?php endforeach; endif; unset($_from); ?>
			</div>
		</div>
	</div>
	<div class="box clearfix">
		<div class="left">友情链接</div>
		<div class="right">
			<ul class="link_list clearfix">
				<?php $_from = $this->_tpl_vars['link_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['linklist']):
?>
				<li><a href="<?php echo $this->_tpl_vars['linklist']['l_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['linklist']['l_name']; ?>
</a></li>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
		</div>
	</div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/foot.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>