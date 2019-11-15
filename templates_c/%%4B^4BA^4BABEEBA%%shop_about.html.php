<?php /* Smarty version 2.6.18, created on 2019-08-08 14:46:28
         compiled from default/default/shop_about.html */ ?>
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
		<style>#allmap {width:925px;height:600px;overflow: hidden;margin:0;}</style>
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
					<div class="box2">
						<div class="p10 f14 lh200">
						<?php echo $this->_tpl_vars['shop']['shopdetail']; ?>

						</div>
					</div>
				</div>
				<div class="shopbox mt10">
					<h3>公司地图</h3>
					<div class="box2">
						<div id="allmap" class="mt10 mapleft"></div>
						<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.4"></script>
						<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/richmarker.js"></script>
						<script type="text/javascript">
							var x = '<?php echo $this->_tpl_vars['x']; ?>
';var y = '<?php echo $this->_tpl_vars['y']; ?>
';var shopInfo = "<span style='color:Black;font-size:12px;line-height:18px;'>公司名称: <?php echo $this->_tpl_vars['shop']['company']; ?>
<br/>联系电话: <?php echo $this->_tpl_vars['shop']['tel']; ?>
<br/>公司地址: <?php echo $this->_tpl_vars['shop']['address']; ?>
</span>";
							var map = new BMap.Map("allmap"); // 创建Map实例
							var point = new BMap.Point(x, y);
							map.centerAndZoom(point, 15); //设置中心点 和缩放级别
							map.addControl(new BMap.NavigationControl()); //添加鱼骨 
							map.addControl(new BMap.ScaleControl()); // 添加比例尺控件
							map.addControl(new BMap.OverviewMapControl()); //添加缩略地图控件
							map.enableScrollWheelZoom();                  // 启用滚轮放大缩小。
							map.enableKeyboard();                         // 启用键盘操作。
							map.addControl(new BMap.MapTypeControl({ anchor: BMAP_ANCHOR_TOP_RIGHT }));

							var marker = new BMap.Marker(point);
							var infoWindow = new BMap.InfoWindow(shopInfo);  // 创建信息窗口对象
							map.addOverlay(marker);
							marker.addEventListener("click", function () {
								this.openInfoWindow(infoWindow);
							});
							map.openInfoWindow(infoWindow, map.getCenter());      // 打开信息窗口
						</script>
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