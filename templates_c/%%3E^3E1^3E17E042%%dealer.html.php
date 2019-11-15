<?php /* Smarty version 2.6.18, created on 2019-08-07 22:27:14
         compiled from default/default/dealer.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>商家 - <?php echo $this->_tpl_vars['setting']['title']; ?>
</title>
		<meta content="<?php echo $this->_tpl_vars['setting']['keywords']; ?>
" name="keywords" />
		<meta content="<?php echo $this->_tpl_vars['setting']['description']; ?>
" name="description" />
		<link href="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/<?php echo $this->_tpl_vars['setting']['templates']; ?>
/css/dealer.css" rel="stylesheet" type="text/css"/>
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
/">首页</a> <span>></span> 商家</div>
<div class="main clearfix mt10">
	<div class="main_left">
		<div class="dealerbox">
			<div class="dealer_tab">
				<ul>
					<li <?php if ($this->_tpl_vars['shoptype'] == ""): ?>class="here"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=dealer">全部</a></li>
					<?php $_from = $this->_tpl_vars['dealer_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['category']):
?>
					<li <?php if ($this->_tpl_vars['shoptype'] == $this->_tpl_vars['skey']): ?>class="here"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=dealer&s=<?php echo $this->_tpl_vars['skey']; ?>
"><?php echo $this->_tpl_vars['category']; ?>
</a></li>
					<?php endforeach; endif; unset($_from); ?>
				</ul>
			</div>
			<div class="box">
				<ul class="dealerlist clearfix">
					<?php $_from = $this->_tpl_vars['dealerlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['dealer_list']):
?>
					<li>
						<p class="company"><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=shop&id=<?php echo $this->_tpl_vars['dealer_list']['id']; ?>
" class="fb" target="_blank"><?php echo $this->_tpl_vars['dealer_list']['company']; ?>
</a></p>
						<p>联系电话：<?php echo $this->_tpl_vars['dealer_list']['mobilephone']; ?>
 <?php echo $this->_tpl_vars['dealer_list']['tel']; ?>
</p>
						<p>联系地址：<?php echo $this->_tpl_vars['dealer_list']['address']; ?>
</p>
					</li>
					<?php endforeach; endif; unset($_from); ?>
				</ul>
				<div class="page_list"><?php echo $this->_tpl_vars['button_basic']; ?>
</div>
			</div>
		</div>
	</div>
	<div class="main_right">
		<div class="commonbox02">
			<h3>推荐商家</h3>
			<div class="box">
				<div class="recomdealer">
					<?php $_from = $this->_tpl_vars['comdealer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['comdealerlist']):
?>
					<p class="clearfix"><span <?php if ($this->_tpl_vars['skey'] < 3): ?>class="num01"<?php else: ?>class="num02"<?php endif; ?>><?php echo $this->_tpl_vars['skey']+1; ?>
</span><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=shop&id=<?php echo $this->_tpl_vars['comdealerlist']['id']; ?>
" target="_blank" class="fl pl10"><?php echo $this->_tpl_vars['comdealerlist']['company']; ?>
</a></p>
					<?php endforeach; endif; unset($_from); ?>
				</div>
			</div>
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