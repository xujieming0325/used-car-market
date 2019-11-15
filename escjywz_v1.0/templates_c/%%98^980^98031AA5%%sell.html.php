<?php /* Smarty version 2.6.18, created on 2019-08-07 22:23:11
         compiled from default/default/sell.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>卖车 - <?php echo $this->_tpl_vars['setting']['title']; ?>
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
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['weburl']; ?>
/admin/kindeditor/themes/default/default.css" />
<script charset="utf-8" src="<?php echo $this->_tpl_vars['weburl']; ?>
/admin/kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="<?php echo $this->_tpl_vars['weburl']; ?>
/admin/kindeditor/lang/zh_CN.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/Validform_v5.3.2_min.js"></script>
<script type="text/javascript">
$(function(){
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
		tiptype:3,
		datatype:{
			"price": /^\d{1,4}(\.\d{1,2})?$/,
			"zh":/^[\u4e00-\u9fa5]+$/,
			"gas":/^\d{1,3}(\.\d{1,2})?$/

		}
	});

	//图片删除
	$("#piclist li div span").live('click', function(){
		$.get("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=sellcar&ajax=1",{
			p_pic :  $(this).next().val()
		}, function (data, textStatus){
			$("li").remove("#"+data);
		});
	});

	//设为封面
	$("#piclist li p span").live('click', function(){
		$(this).parent().parent().children('.img').addClass("selected");
		$(this).parent().parent().siblings().children('.img').removeClass("selected");
		$("#mainpic").empty();
		$("#mainpic").append('<input type="hidden" name="p_mainpic" value="'+$(this).next().val()+'">');
	});
	KindEditor.ready(function(K) {
		var editor = K.editor({
			uploadJson : '<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=upload_car',
			allowFileManager : true,
			imageUploadLimit : 5
		});
		K('#J_selectImage').click(function() {
			var inputArr = $("#piclist").children("li");
			var length = inputArr.length;
			if(length>=5){
				alert("您最多只能上传5张图片！");
				exit;
			}
			editor.loadPlugin('multiimage', function() {
				editor.plugin.multiImageDialog({
				clickFn : function(urlList) {
						var div = K('#piclist');
						K.each(urlList, function(i, data) {
							var arr_picid = data.url.split("/");
							var arr_length = arr_picid.length;
							var arr_picids = arr_picid[arr_length-1].split(".");
							div.append('<li id="'+arr_picids[0]+'"><img src="' + data.url + '" class="vt img"><div><span class="del"></span><input type="hidden" name="p_pics[]" value="'+ data.url +'"></div><p><span>设为封面</span><input type="hidden" name="url" value="'+ data.url +'"></p></li>');
						});
						editor.hideDialog();
					}
				});
			});
		});
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
/">首页</a> <span>></span> 卖车 </div>
<div class="main mt10 clearfix">
	<div class="main_left">
		<div class="sellbox">
			<h3>填写爱车信息：</h3>
			<div class="box clearfix">
				<form name="carform" class="carform" method="post" action="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=sellcar">
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
					</tr><?php endif; ?>
						<tr>
							<th><span class="red">*</span> 品牌型号：</th>
							<td colspan="3">
								<select name="p_brand" id="brand" datatype="n" nullmsg="请选择品牌！">
									<?php echo $this->_tpl_vars['selectbrand']; ?>

								</select>
								<select class="subbrand" id="subbrand" name="p_subbrand" datatype="n" nullmsg="请选择车系！">
										<option value="" selected>请选择车系</option></select>
                              <select class="subbrand" id="subsubbrand" name="p_subsubbrand" datatype="n" nullmsg="请选择款式！">
								<option value="" selected>请选择款式</option>
							</select>
								
							</td>
						</tr>
						<tr>
							<th><span class="red">*</span> 车型选择：</th>
							<td><select name="p_model" datatype="n" nullmsg="请选择车型！">
									<?php echo $this->_tpl_vars['selectmodel']; ?>

								</select></td>
						</tr>
						<tr>
							<th><span class="red">*</span>预售价格：</th>
							<td><input type="text" name="p_price"  size="8" datatype="s" nullmsg="请填写价格！">
								<span class="gray">(万元)</span>
							</td>
						</tr>
						<tr>
							<th><span class="red">*</span> 车体颜色：</th>
							<td width="220">
								<select name="p_color" datatype="s" nullmsg="请选择颜色！">
									<?php echo $this->_tpl_vars['select_color']; ?>

								</select>
							</td>
						</tr>
						<tr>
							<th><span class="red">*</span> 排放标准：</th>
							<td colspan="3">
								<select name="p_emission" datatype="s" nullmsg="请选择排放标准！">
									<option value="">请选择</option>
									<option value="国一">国一</option>
									<option value="国二">国二</option>
									<option value="国三">国三</option>
									<option value="国四">国四</option>
									<option value="国五">国五</option>
								</select>
							</td>
						</tr>
						<tr>
							<th width="50"><span class="red">*</span> 排量：</th>
							<td>
								<select name="p_gas"  datatype="s" nullmsg="请选择排量！">
									<?php echo $this->_tpl_vars['select_gas']; ?>

								</select> 升
							</td>
						</tr>
						<tr>
							<th><span class="red">*</span> 变速箱：</th>
							<td><select name="p_transmission" datatype="*" nullmsg="请选择变速箱！" >
									<?php echo $this->_tpl_vars['select_transmission']; ?>

								</select></td>
						</tr>
						<tr>
							<th><span class="red">*</span> 上牌日期：</th>
							<td><select name="p_year" id="p_year" datatype="n" nullmsg="请选择上牌日期！">
									<?php echo $this->_tpl_vars['select_year']; ?>

								</select>
								<select name="p_month" id="p_month" datatype="n" nullmsg="请选择上牌日期！">
									<?php echo $this->_tpl_vars['select_month']; ?>

								</select></td>
						</tr>
						<tr>
							<th>行驶里程：</th>
							<td ><input name="p_kilometre" type="text" id="p_kilometre" size="5" datatype="gas" ignore="ignore" errormsg="行驶里程格式不正确！"/>
								<span class="gray">(万公里)</span></td>
								</td>
						</tr>
						<tr>
							<th>国产进口：</th>
							<td><select name="p_country">
									<?php echo $this->_tpl_vars['select_country']; ?>

								</select>
							</td>
						</tr>
						<tr>
							<th>图片：</th>
							<td colspan="3">
								<ul id="piclist" class="clearfix">
								</ul>
								<input type="button" id="J_selectImage" value="批量上传图片" class="uploadbut"/>
								<div id="mainpic">
									
								</div>
							</td>
						</tr>
						<tr>
							<th>车辆补充描述：</th>
							<td colspan="5"><textarea  name="p_details" rows="2" cols="90" class="textarea01"><?php echo $this->_tpl_vars['cars']['p_details']; ?>
</textarea></td>
						</tr>
						<tr>
							<th><span class="red">*</span> 车主姓名：</th>
							<td colspan="5"><input name="p_username" type="text" size="30" class="inp01" value="" datatype="s" nullmsg="请填写车主姓名！"/></td>
						</tr>
						<tr>
							<th><span class="red">*</span> 手机号：</th>
							<td colspan="5"><input name="p_tel" type="text" size="30" class="inp01" value="" datatype="m" nullmsg="请填写手机号！" errormsg="手机号码格式不正确！"/></td>
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