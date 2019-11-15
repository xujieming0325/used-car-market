<?php /* Smarty version 2.6.18, created on 2016-04-10 17:07:51
         compiled from default/default/cars.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php echo $this->_tpl_vars['cars']['p_allname']; ?>
-<?php echo $this->_tpl_vars['setting']['title']; ?>
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
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/layer/layer.min.js"></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/laydate/laydate.js"></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/jquery.SuperSlide.2.1.js"></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/Validform_v5.3.2_min.js"></script>
		<script language="JavaScript">
			$(function() {
				//品牌选择
				$("#brand").change(function(){
					$.get("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?mod=ajax&ajax=1", { 
						pid :  $("#brand").val() 
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
				$("#hits").load("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1&carshit=1&id=<?php echo $this->_tpl_vars['cars']['p_id']; ?>
");
				//表单验证
				$(".yuyueform").Validform({
					tiptype:3
				});

				$('#yuyue').on('click', function(){
					var yuyueindex =  $.layer({
						type: 1,
						title: '预约看车',
						shade: [0.5, '#000'],
						area: ['460px', 'auto'],
						page: {dom: '#A1'}
					});
					$('#btnYuyueLookCar').on('click', function(){
						$.post("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1&yuyue=1",{
							pid: <?php echo $this->_tpl_vars['cars']['p_id']; ?>
, 
							uid: <?php echo $this->_tpl_vars['cars']['uid']; ?>
, 
							name: $("#A1 input[name='name']").val(), 
							mobilephone: $("#A1 input[name='mobilephone']").val(),
							ordertime: $("#A1 input[name='ordertime']").val(),
							orderinfo:$("#A1 textarea[name='orderinfo']").val()
						},function(data){
							if (data==1)
							{
								layer.close(yuyueindex);
								layer.alert("预约成功！请耐心等待商家和您联系！", 9);
								$('#yuyueform')[0].reset();
							}
							else{
								layer.close(yuyueindex);
								layer.alert("预约失败！请再次预约！", 9);
							}
						});
					});
				});
				$('#xunjia').on('click', function(){
					 var xunjiaindex = $.layer({
						type: 1,
						title: '咨询底价',
						shade: [0.5, '#000'],
						area: ['460px', 'auto'],
						page: {dom: '#B1'}
					});
					$('#btnxuejia').on('click', function(){
						$.post("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1&xunjia=1",{
							pid: <?php echo $this->_tpl_vars['cars']['p_id']; ?>
, 
							uid: <?php echo $this->_tpl_vars['cars']['uid']; ?>
, 
							name: $("#B1 input[name='name']").val(), 
							mobilephone: $("#B1 input[name='mobilephone']").val(),
						},function(data){
							if (data==1)
							{
								layer.close(xunjiaindex);
								layer.alert("询价成功！请耐心等待商家和您联系！", 9);
								$('#xunjiaform')[0].reset();
							}
							else{
								layer.close(xunjiaindex);
								layer.alert("询价失败！请再次询价！", 9);
							}
						});
					});
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
/">买车</a> <span>></span> <?php echo $this->_tpl_vars['cars']['p_allname']; ?>
</div>
<div class="main mt10">
	<div class="carbox clearfix">
		<div class="carbox_left">
			<div class="carpicbox">
				<?php if ($this->_tpl_vars['cars']['issell'] == 1): ?>
					<div class="issell"></div>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['cars']['p_mainpic'] <> ""): ?>
				<img src="<?php echo $this->_tpl_vars['weburl']; ?>
<?php echo $this->_tpl_vars['cars']['p_mainpic']; ?>
" id="BigImg"/>
				<?php else: ?>
				<img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/bigcar.jpg"/>
				<?php endif; ?>
			</div>
			<?php if ($this->_tpl_vars['pic_list'] != ""): ?>
			<div class="ladyScroll">
				<a class="prev" href="javascript:void(0)"></a>
				<div class="scrollWrap">
					<div class="dlList">
						<?php $_from = $this->_tpl_vars['pic_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['piclist']):
?>
						<dl>
							<dt><img src="<?php echo $this->_tpl_vars['weburl']; ?>
<?php echo $this->_tpl_vars['piclist']['smallpic']; ?>
" onmousemove="javascript:document.getElementById('BigImg').src='<?php echo $this->_tpl_vars['weburl']; ?>
<?php echo $this->_tpl_vars['piclist']['pic']; ?>
'"></dt>
						</dl>
						<?php endforeach; endif; unset($_from); ?>
					</div>
				</div>
				<a class="next" href="javascript:void(0)"></a>
			</div>
			<script type="text/javascript">
				jQuery(".ladyScroll").slide({ mainCell:".dlList", effect:"leftLoop",vis:5, autoPlay:true});
			</script>
			<?php endif; ?>
		</div>
		<div class="carbox_right">
			<div class="carname"><?php echo $this->_tpl_vars['cars']['p_allname']; ?>
</div>
			<p class="gray01 mt20"><span class="fr">点击：<span class="orange01" id="hits"></span></span>发布日期：<?php echo $this->_tpl_vars['cars']['listtime']; ?>
</p>
			<div class="detail01 mt10">
				<ul class="clearfix">
					<li class="li01 mb10">价格：<span class="price"><?php echo $this->_tpl_vars['cars']['p_price']; ?>
</span></li>	
					<li>车型：<?php echo $this->_tpl_vars['cars']['modelname']; ?>
</li>
					<li>颜色：<?php echo $this->_tpl_vars['cars']['p_color']; ?>
</li>
					<li>排量：<?php if ($this->_tpl_vars['cars']['p_transmission'] <> ''): ?><?php echo $this->_tpl_vars['cars']['p_transmission']; ?>
<?php else: ?>无<?php endif; ?></li>
					<li>变速箱：</span><?php echo $this->_tpl_vars['cars']['p_gas']; ?>
L</li>
				</ul>
				<div class="car_detail clearfix mt15">
					<div class="item">
						<strong><?php echo $this->_tpl_vars['cars']['p_year']; ?>
年<?php echo $this->_tpl_vars['cars']['p_month']; ?>
月</strong>首次上牌
					</div>
					<div class="item">
						<strong><?php echo $this->_tpl_vars['cars']['p_kilometre']; ?>
万公里</strong>行驶里程
					</div>
					<?php if ($this->_tpl_vars['setting']['version'] == 2 || $this->_tpl_vars['setting']['version'] == 3): ?>
					<div class="item">
						<strong><?php echo $this->_tpl_vars['cars']['city']; ?>
</strong>归属地
					</div>
					<?php endif; ?>
					<div class="item">
						<strong><?php echo $this->_tpl_vars['cars']['p_emission']; ?>
</strong>排放标准
					</div>
				</div>
				<div class="contactbox">
					<div class="telbox">
						<i></i>
						<?php if ($this->_tpl_vars['setting']['version'] == 1): ?>
							<p class="tel"><span class="fb"><?php echo $this->_tpl_vars['setting']['tel']; ?>
</span></p>
							<p class="tel"><?php echo $this->_tpl_vars['setting']['contactman']; ?>
</p>
						<?php else: ?>
							<?php if ($this->_tpl_vars['cars']['uid'] == 0): ?>
								<p class="tel"><span class="fb"><?php echo $this->_tpl_vars['cars']['p_tel']; ?>
</span></p>
								<p class="tel"><?php echo $this->_tpl_vars['cars']['p_username']; ?>
</p>
							<?php else: ?>
								<p class="tel"><span class="fb"><?php echo $this->_tpl_vars['shop']['mobilephone']; ?>
</span> <?php if ($this->_tpl_vars['shop']['isdealer'] == 2): ?>（商家车源）<?php endif; ?></p>
								<p class="tel"><?php echo $this->_tpl_vars['shop']['nicname']; ?>
</p>
							<?php endif; ?>
						<?php endif; ?>
					</div>
					<!--<div class="mobilecode">
						<a href="#">扫码手机看</a>
					</div>-->
				</div>
				<?php if ($this->_tpl_vars['setting']['version'] == 2 || $this->_tpl_vars['setting']['version'] == 3): ?>
					<?php if ($this->_tpl_vars['shop']['isdealer'] == 2): ?>
					<div class="mt20 clearfix">
						<span class="button_orange h35-p25 mr5"><a href="javascript:;" id="yuyue">预约看车</a></span> 
						<span class="button_gray h35-p25 "><a href="javascript:;" id="xunjia">咨询底价</a></span>
					</div>
					<?php endif; ?>
				<?php else: ?>
					<div class="mt20 clearfix">
						<span class="button_orange h35-p25 mr5"><a href="javascript:;" id="yuyue">预约看车</a></span> 
						<span class="button_gray h35-p25 "><a href="javascript:;" id="xunjia">咨询底价</a></span>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<div class="notice mt20">
	<span class="fr">客服电话：<span class="orange01"><?php echo $this->_tpl_vars['setting']['tel']; ?>
</span></span>二手车交易车辆过户前请勿轻易给对方押金、订金，交易中请仔细查验车况，避免上当受骗。
</div>
<div class="main mt20 clearfix">
	<div class="main_left">
		<div class="cardetailbox">
			<ul class="title_tab">
				<li class="here"><a href="#A">车源详情</a></li>
				<li><a href="#B">车主描述</a></li>
				<li><a href="#D">大图展示</a></li>
			</ul>
			<div class="box">
				<h3 id="A"><span class="title">车源详情</span></h3>
				<ul class="cardetaillist clearfix">
					<li><span class="gray">车型：</span><?php if ($this->_tpl_vars['cars']['modelname'] <> ''): ?><?php echo $this->_tpl_vars['cars']['modelname']; ?>
<?php else: ?>无<?php endif; ?></li>	
					<li><span class="gray">行驶里程：</span><?php if ($this->_tpl_vars['cars']['p_kilometre'] <> ''): ?><?php echo $this->_tpl_vars['cars']['p_kilometre']; ?>
万公里<?php else: ?>无<?php endif; ?></li>
					<li><span class="gray">颜色：</span><?php if ($this->_tpl_vars['cars']['p_color'] <> ''): ?><?php echo $this->_tpl_vars['cars']['p_color']; ?>
<?php else: ?>无<?php endif; ?></li>
					<li><span class="gray" style="word-spacing:10px;">变速箱：</span><?php if ($this->_tpl_vars['cars']['p_transmission'] <> ''): ?><?php echo $this->_tpl_vars['cars']['p_transmission']; ?>
<?php else: ?>无<?php endif; ?></li>
					<li><span class="gray">排量：</span><?php echo $this->_tpl_vars['cars']['p_gas']; ?>
L</li>
					<?php $_from = $this->_tpl_vars['paralist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['paralist']):
?>
					<?php if ($this->_tpl_vars['paralist']['type_name'] == 'checkbox'): ?>
					<?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['list']):
?>
					<?php if ($this->_tpl_vars['list']['checkvalue'] == 1): ?><li><span class="gray"></span><?php echo $this->_tpl_vars['key']; ?>
</li><?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
					<?php else: ?>
					<li><span class="gray"><?php echo $this->_tpl_vars['paralist']['c_name']; ?>
：</span><?php echo $this->_tpl_vars['paralist']['c_value']; ?>
</li>
					<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
				</ul>
				<h3 id="B"><span class="title">车主描述</span></h3>
				<div class="p20 cardetail">
					<?php echo $this->_tpl_vars['cars']['p_details']; ?>

				</div>
				<?php if ($this->_tpl_vars['pic_list'] != ""): ?>
				<h3 id="D"><span class="title">大图展示</span></h3>
				<div class="p20">
					<?php $_from = $this->_tpl_vars['pic_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['piclist']):
?>
					<p class="tc mt10"><img src="<?php echo $this->_tpl_vars['weburl']; ?>
<?php echo $this->_tpl_vars['piclist']['pic']; ?>
"></p>
					<?php endforeach; endif; unset($_from); ?>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="main_right">
		<?php if ($this->_tpl_vars['cars']['uid'] <> 0): ?>
		<div class="shopbox mb10">
			<h3><?php echo $this->_tpl_vars['shop']['company']; ?>
</h3>
			<div class="box">
				<?php if ($this->_tpl_vars['shop']['logo'] <> ''): ?><div class="logo"><img src="<?php echo $this->_tpl_vars['shop']['logo']; ?>
"></div><?php endif; ?>
				<ul class="shopcontact">
					<li><strong>电话：</strong><?php echo $this->_tpl_vars['shop']['mobilephone']; ?>
</li>
					<li><strong>地址：</strong><?php echo $this->_tpl_vars['shop']['address']; ?>
</li>
				</ul>
				<ul class="cycs-fbys clearfix">
				   <li>
					  <p><strong><?php echo $this->_tpl_vars['carcount']['0']; ?>
</strong></p>
					  <p>发布</p>
				   </li>
					<li>
					  <p><strong><?php echo $this->_tpl_vars['carcount']['2']; ?>
</strong></p>
					  <p>在售</p>
				   </li>
					<li class="last">
					  <p><strong><?php echo $this->_tpl_vars['carcount']['1']; ?>
</strong></p>
					  <p>已售</p>
				   </li>
				</ul>
				<div class="cyssbut">
					<span class="button_gray w200-h35"><a target="_blank" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=shop&id=<?php echo $this->_tpl_vars['shop']['id']; ?>
">进入商家店铺</a></span> 
				</div>
			</div>
		</div>
		<?php endif; ?>
		<div class="commonbox01">
			<h3><span class="title">同车系其他车源</span></h3>
			<div class="box">
				<ul class="carlist clearfix">
					<?php $_from = $this->_tpl_vars['samecar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['recomcarlist']):
?>
					<li>
						<a href="<?php echo $this->_tpl_vars['recomcarlist']['p_url']; ?>
" target="_blank"><?php if ($this->_tpl_vars['recomcarlist']['p_mainpic'] <> ""): ?><img src="<?php echo $this->_tpl_vars['recomcarlist']['p_mainpic']; ?>
"/><?php else: ?><img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/car.jpg"/><?php endif; ?></a>
						<p class="mt10"><a href="<?php echo $this->_tpl_vars['recomcarlist']['p_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['recomcarlist']['p_shortname']; ?>
</a></p>
						<p class="gray01"><span class="orange01 fb fr"><?php echo $this->_tpl_vars['recomcarlist']['p_price']; ?>
</span><?php echo $this->_tpl_vars['recomcarlist']['p_year']; ?>
年<?php echo $this->_tpl_vars['recomcarlist']['p_month']; ?>
月上牌</p>
					</li>
					<?php endforeach; endif; unset($_from); ?>
				</ul>
			</div>
		</div>
		<div class="commonbox01 mt10">
			<h3><span class="title">同价位其他车源</span></h3>
			<div class="box">
				<ul class="carlist clearfix">
					<?php $_from = $this->_tpl_vars['samepricecars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['recomcarlist']):
?>
					<li>
						<a href="<?php echo $this->_tpl_vars['recomcarlist']['p_url']; ?>
" target="_blank"><?php if ($this->_tpl_vars['recomcarlist']['p_mainpic'] <> ""): ?><img src="<?php echo $this->_tpl_vars['recomcarlist']['p_mainpic']; ?>
"/><?php else: ?><img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/car.jpg"/><?php endif; ?></a>
						<p class="mt10"><a href="<?php echo $this->_tpl_vars['recomcarlist']['p_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['recomcarlist']['p_shortname']; ?>
</a></p>
						<p class="gray01"><span class="orange01 fb fr"><?php echo $this->_tpl_vars['recomcarlist']['p_price']; ?>
</span><?php echo $this->_tpl_vars['recomcarlist']['p_year']; ?>
年<?php echo $this->_tpl_vars['recomcarlist']['p_month']; ?>
月上牌</p>
					</li>
					<?php endforeach; endif; unset($_from); ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<div id="A1" class="hide">
	<div class="popnotice">
		<?php echo $this->_tpl_vars['cars']['p_allname']; ?>
，售价<?php echo $this->_tpl_vars['cars']['p_price']; ?>
，<?php echo $this->_tpl_vars['cars']['p_year']; ?>
年上牌，行驶<?php echo $this->_tpl_vars['cars']['p_kilometre']; ?>
万公里
	</div>
	<div class="p20">
	<form method="post" name="yuyueform" id="yuyueform" class="yuyueform">
		<table class="poptable">
		<tr>
			<th><span class="red">*</span> 姓名：</th>
			<td><input type="text" name="name" datatype="s" nullmsg="请填写姓名！"></td>
		</tr>
		<tr>
			<th><span class="red">*</span> 手机号：</th>
			<td><input type="text" name="mobilephone" datatype="m" nullmsg="请填写手机号！"></td>
		</tr>
		<tr>
			<th><span class="red">*</span> 预约时间：</th>
			<td><input type="text" class="laydate-icon" name="ordertime" datatype="*" nullmsg="请选择预约时间！" onclick="laydate()"></td>
		</tr>
		<tr>
			<th><span class="red">*</span> 留言：</th>
			<td><textarea name="orderinfo" rows="5" cols="25" datatype="*" nullmsg="请填写留言！"></textarea></td>
		</tr>
		<tr>
			<th></th>
			<td class="gray">您的信息不会在网站上显示，我们将保证您的隐私安全。</td>
		</tr>
		<tr>
			<th></th>
			<td><span class="button_orange h35-p25 mr5"><a id="btnYuyueLookCar" href="javascript:;">提交</a></span></td>
		</tr>
		</table>
	</form>
	</div>
</div>
<div id="B1" class="hide">
	<div class="popnotice">
		<?php echo $this->_tpl_vars['cars']['p_allname']; ?>
，售价<?php echo $this->_tpl_vars['cars']['p_price']; ?>
，<?php echo $this->_tpl_vars['cars']['p_year']; ?>
年上牌，行驶<?php echo $this->_tpl_vars['cars']['p_kilometre']; ?>
万公里
	</div>
	<div class="p20">
		<form method="post" name="xunjiaform" id="xunjiaform" class="xunjiaform">
		<table class="poptable">
		<tr>
			<th><span class="red">*</span> 姓名：</th>
			<td><input type="text" name="name" datatype="s" nullmsg="请填写姓名！"></td>
		</tr>
		<tr>
			<th><span class="red">*</span> 手机号：</th>
			<td><input type="text" name="mobilephone" datatype="m" nullmsg="请填写手机号！"></td>
		</tr>
		<tr>
			<th></th>
			<td class="gray">您的信息不会在网站上显示，我们将保证您的隐私安全。</td>
		</tr>
		<tr>
			<th></th>
			<td><span class="button_orange h35-p25 mr5"><a id="btnxuejia" href="javascript:;">提交</a></span></td>
		</tr>
		</table>
		</form>
	</div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/foot.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>
