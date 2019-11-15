<?php /* Smarty version 2.6.18, created on 2019-08-07 22:29:20
         compiled from default/default/assess.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->_tpl_vars['page']['p_title']; ?>
 - <?php echo $this->_tpl_vars['setting']['title']; ?>
</title>
<meta content="<?php echo $this->_tpl_vars['setting']['keywords']; ?>
"  name="keywords"/>
<meta content="<?php echo $this->_tpl_vars['setting']['description']; ?>
" name="description"/>
<link href="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/<?php echo $this->_tpl_vars['setting']['templates']; ?>
/css/page.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/pcall.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/Validform_v5.3.2_min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    //品牌选择
	$("#brand").change(function(){
		$.get("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1", { 
			brandid :  $("#brand").val() 
		}, function (data, textStatus){
               $("#subbrand").html(data); // 把返回的数据添加到页面上
			}
		);
	});
	//品牌选择
	$("#subbrand").change(function(){
		$.get("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1", { 
			subbrandid :  $("#subbrand").val() 
		}, function (data, textStatus){
               $("#subsubbrand").html(data); // 把返回的数据添加到页面上
			}
		);
	});
	<?php if ($this->_tpl_vars['setting']['version'] == 3): ?>
	//城市选择
	$("#province").change(function(){
		$.get("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1", { 
			cityid :  $("#province").val() 
		}, function (data, textStatus){
			$("#city").html(data); // 把返回的数据添加到页面上
		});
	});
	<?php endif; ?>
	
	//表单验证
	$(".carform").Validform({
		tiptype:3
	});
});
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
/">首页</a> <span>></span> 评估 <span>></span> 免费发布评估信息</div>
<div class="main mt10 clearfix">
	<div class="main_left">
		<div class="sellbox">
			<h3>填写爱车信息：</h3>
			<div class="box clearfix">
				<form name="carform" class="carform" method="post" action="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=assesscar">
					<table cellspacing="0" cellpadding="0" width="100%"  class="sell_table">
                    <?php if ($this->_tpl_vars['setting']['version'] == 3): ?>
                    <tr>
						<th><span class="red">*</span> 所在城市：</th>
						<td colspan="3">
							<select name="aid" id="province" datatype="n" nullmsg="请选择省份！">
								<?php echo $this->_tpl_vars['selectprovince']; ?>

							</select>
							<select name="cid" id="city" datatype="n" nullmsg="请选择城市！">
								<?php echo $this->_tpl_vars['selectcity']; ?>

							</select>
						</td>
					</tr>
					<?php endif; ?>
						<tr>
							<th><span class="red">*</span> 品牌型号：</th>
							<td colspan="3"><select name="p_brand" id="brand" datatype="n" nullmsg="请选择品牌！">
									<?php echo $this->_tpl_vars['selectbrand']; ?>

								</select>
								<select class="subbrand" id="subbrand" name="p_subbrand" datatype="n" nullmsg="请选择车系！">
									<option value="" selected>请选择车系</option>                       
								</select> &nbsp;<select class="subbrand" id="subsubbrand" name="p_subsubbrand" datatype="n" nullmsg="请选择款式！" style="width:100px;">
								<option value="" selected>请选择款式</option>
							</select>
							</td>
						</tr>
						<tr>
							<th>车型选择：</th>
							<td><select name="p_model">
									<?php echo $this->_tpl_vars['selectmodel']; ?>

								</select></td>
							<th></th>
							<td></td>
						</tr>
						<tr>
							<th>车体颜色：</th>
							<td width="180"><select name="p_color">
									<?php echo $this->_tpl_vars['select_color']; ?>

								</select></td>
							<th width="50">排量：</th>
							<td><select name="p_gas">
									<?php echo $this->_tpl_vars['select_gas']; ?>

								</select></td>
						</tr>
						<tr>
							<th>变速箱：</th>
							<td><select name="p_transmission">
									<?php echo $this->_tpl_vars['select_transmission']; ?>

								</select></td>
							<th>上牌日期：</th>
							<td><select name="p_year" id="p_year">
									<?php echo $this->_tpl_vars['select_year']; ?>

								</select>
								<select name="p_month" id="p_month">
									<?php echo $this->_tpl_vars['select_month']; ?>

								</select></td>
						</tr>
						<tr>
							<th>行驶里程：</th>
							<td ><input name="p_kilometre" type="text" id="p_kilometre" size="5" />
								<span class="gray">(万公里)</span></td>
								</td>
							<th>国产进口：</th>
							<td><select name="p_country">
									<?php echo $this->_tpl_vars['select_country']; ?>

								</select></td>
						</tr>
						<tr>
							<th>车辆补充描述：</th>
							<td colspan="5"><textarea name="p_details" rows="2" cols="90" class="textarea01"><?php echo $this->_tpl_vars['cars']['p_details']; ?>
</textarea>
							</td>
						</tr>
						<tr>
							<th><span class="red">*</span>车主姓名：</th>
							<td colspan="5"><input name="p_contact_name" type="text" size="30" class="inp01" value="" datatype="s" nullmsg="请填写车主姓名！"/></td>
						</tr>
						<tr>
							<th><span class="red">*</span>手机：</th>
							<td colspan="5"><input name="p_contact_tel" type="text" size="30" class="inp01" value="" datatype="m" nullmsg="请填写手机号！"/></td>
						</tr>
						<!--
						<tr>
							<th><span class="red">*</span> 验证码：</th>
							<td colspan="5"><input name="authcode" id="cftcode"  type="text"  class="inp02" datatype="s" ajaxurl="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1" nullmsg="请输入验证码！" errormsg="请输入正确的验证码！"/> <img src="<?php echo $this->_tpl_vars['weburl']; ?>
/include/kcaptcha/" width="70" height="30" onclick="this.src='<?php echo $this->_tpl_vars['weburl']; ?>
/include/kcaptcha/?'+Math.random();" title="点击刷新验证码" style="cursor:pointer" id="checkcode" align="absmiddle"> <span class="f12" onclick="document.getElementById('checkcode').src='<?php echo $this->_tpl_vars['weburl']; ?>
/include/kcaptcha/?'+Math.random();" style="cursor:pointer">看不清？换一个</span></td>
						</tr>
						-->
						<tr>
							<td></td>
							<td><input type="submit" value="立刻发布" class="sell_but02">
								<input type="hidden" name="action" value="sellcar"></td>
						</tr>
					</table>
				</form>
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
<!--版权--> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/foot.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>