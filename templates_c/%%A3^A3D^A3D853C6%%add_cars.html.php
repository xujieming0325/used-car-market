<?php /* Smarty version 2.6.18, created on 2019-08-08 16:28:46
         compiled from admin/add_cars.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="static/css/admin/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="static/js/jquery.js"></script>
<link rel="stylesheet" href="admin/kindeditor/themes/default/default.css" />
<script charset="utf-8" src="admin/kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="admin/kindeditor/lang/zh_CN.js"></script>
<script type="text/javascript" src="static/js/Validform_v5.3.2_min.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/laydate/laydate.js"></script>
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
			}
		);
	});
	<?php endif; ?>

	//图片删除
	$("#piclist li div span").live('click', function(){
		$.get("<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&ajax=1&p_id=<?php echo $this->_tpl_vars['cars']['p_id']; ?>
",{
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

	//表单验证
	$(".carform").Validform({
		tiptype:3
	});
});
KindEditor.ready(function(K) {
	var editor = K.editor({
		uploadJson : 'index.php?m=upload_car',
		allowFileManager : false
	});
	K('#J_selectImage').click(function() {
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
</script>
</head>
<body>
<div class="colorarea01">
	<div class="search clearfix">
		<div class="searchL">
			<ul class="menulist">
				<li><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=list" class="list">返回车源列表</a></li>
			</ul>
		</div>
	</div>
	<form name="form1" class="carform" enctype="multipart/form-data" method="post" action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars" onsubmit="return chksubmit();">
		<table cellspacing="0" cellpadding="0" width="100%"  class="maintable">
			<tr>
				<th>推荐位：</th>
				<td><input type="checkbox" name="isrecom" value="1" <?php if ($this->_tpl_vars['cars']['isrecom'] == 1): ?>checked<?php endif; ?>> 推荐 &nbsp;&nbsp;<input type="checkbox" name="issprecom" value="1" <?php if ($this->_tpl_vars['cars']['issprecom'] == 1): ?>checked<?php endif; ?>> 特荐 &nbsp;&nbsp; <input type="checkbox" name="ishot" value="1" <?php if ($this->_tpl_vars['cars']['ishot'] == 1): ?>checked<?php endif; ?>> 热门 </td>
				<th>浏览次数：</th>
				<td><input type="text" name="p_hits" value="<?php echo $this->_tpl_vars['cars']['p_hits']; ?>
" size="6"></td>
			</tr>
            <?php if ($this->_tpl_vars['setting']['version'] == 3): ?>
			<tr>
            <th>所在城市：</th>
				<td colspan="3">
					<select name="aid" id="province">
						<?php echo $this->_tpl_vars['selectprovince']; ?>

					</select>
					<select name="cid" id="city">
						<?php echo $this->_tpl_vars['selectcity']; ?>

					</select>
				</td>
                </tr><?php endif; ?>
                <tr>
				<th>品牌型号：</th>
				<td colspan="3">
					<select name="p_brand" id="brand" datatype="n" nullmsg="请选择品牌！">
						<?php echo $this->_tpl_vars['select_brand']; ?>

					</select>
					<select class="subbrand" id="subbrand" name="p_subbrand" datatype="n" nullmsg="请选择车系！">
						<option  value="">请选择车系</option>
						<?php echo $this->_tpl_vars['select_subbrand']; ?>
                    
					</select> &nbsp;<select class="subbrand" id="subsubbrand" name="p_subsubbrand" datatype="n" nullmsg="请选择款式！">
					<option  value="">请选择款式</option>
						<?php echo $this->_tpl_vars['select_subsubbrand']; ?>
	
					</select>

					<input type="text" name="p_name" value="<?php echo $this->_tpl_vars['cars']['p_name']; ?>
" size="10"></td>

			</tr>
			<tr>
				<th>车型选择：</th>
				<td><select name="p_model">
						<?php echo $this->_tpl_vars['select_model']; ?>

					</select></td>
				<th>预售价格：</th>
				<td><input type="text" name="p_price"  size="5" value="<?php echo $this->_tpl_vars['cars']['p_price']; ?>
" datatype="s" nullmsg="请填写价格！">
					<span class="gray">(万元)</span></td>
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
				<td ><input name="p_kilometre" type="text" id="p_kilometre" size="5" value="<?php echo $this->_tpl_vars['cars']['p_kilometre']; ?>
"  />
					<span class="gray">(万公里)</span>
				</td>
				<th>国产进口：</th>
				<td><select name="p_country">
						<?php echo $this->_tpl_vars['select_country']; ?>

					</select>
				</td>
			</tr>
			<tr>
				<th>排放标准：</th>
				<td colspan="3">
					<select name="p_emission">
						<option value="">请选择</option>
						<option value="国一" <?php if ($this->_tpl_vars['cars']['p_emission'] == '国一'): ?>selected<?php endif; ?>>国一</option>
						<option value="国二" <?php if ($this->_tpl_vars['cars']['p_emission'] == '国二'): ?>selected<?php endif; ?>>国二</option>
						<option value="国三" <?php if ($this->_tpl_vars['cars']['p_emission'] == '国三'): ?>selected<?php endif; ?>>国三</option>
						<option value="国四" <?php if ($this->_tpl_vars['cars']['p_emission'] == '国四'): ?>selected<?php endif; ?>>国四</option>
						<option value="国五" <?php if ($this->_tpl_vars['cars']['p_emission'] == '国五'): ?>selected<?php endif; ?>>国五</option>
					</select>
				</td>
			</tr>
           <?php $_from = $this->_tpl_vars['paralist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['paralist']):
?>
           <tr>
				<th><?php echo $this->_tpl_vars['paralist']['c_name']; ?>
：</th>
				<td>
				<?php if ($this->_tpl_vars['paralist']['type_name'] == 'input'): ?>
					<input name="para<?php echo $this->_tpl_vars['key']; ?>
"   type="text" size="20" value="<?php echo $this->_tpl_vars['paralist']['c_value']; ?>
"/>
				<?php elseif ($this->_tpl_vars['paralist']['type_name'] == 'textarea'): ?>	
					<textarea name="para<?php echo $this->_tpl_vars['key']; ?>
" ><?php echo $this->_tpl_vars['paralist']['c_value']; ?>
</textarea>
				<?php elseif ($this->_tpl_vars['paralist']['type_name'] == 'select'): ?>	
					<select name="para<?php echo $this->_tpl_vars['key']; ?>
"><?php echo $this->_tpl_vars['paralist']['select']; ?>
</select>
				<?php elseif ($this->_tpl_vars['paralist']['type_name'] == 'time'): ?>	
					<input name="para<?php echo $this->_tpl_vars['key']; ?>
" type="text" size="20" class="laydate-icon" value="<?php echo $this->_tpl_vars['paralist']['c_value']; ?>
" onclick="laydate()"/>
				<?php elseif ($this->_tpl_vars['paralist']['type_name'] == 'checkbox'): ?>	
					<?php echo $this->_tpl_vars['checkbox_str']; ?>

				<?php endif; ?>
				</td>
            </tr>
           <?php endforeach; endif; unset($_from); ?>
			<tr>
				<th>图片：</th>
				<td colspan="3">
					<ul id="piclist" class="clearfix">
						<?php $_from = $this->_tpl_vars['pic_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['pic_list']):
?>
							<li id="<?php echo $this->_tpl_vars['pic_list']['picid']; ?>
"><img src="<?php echo $this->_tpl_vars['pic_list']['showpic']; ?>
" class="img"/><div><span class="del"></span><input type="hidden" name="p_pics[]" value="<?php echo $this->_tpl_vars['pic_list']['pic']; ?>
"></div><p><span>设为封面</span><input type="hidden" name="url" value="<?php echo $this->_tpl_vars['pic_list']['pic']; ?>
"></p></li></li>
						<?php endforeach; endif; unset($_from); ?>
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
				<th>车主电话：</th>
				<td colspan="5"><input type="text" name="p_username" value="<?php echo $this->_tpl_vars['cars']['p_username']; ?>
"></td>
			</tr>
			<tr>
				<th>联系电话：</th>
				<td colspan="5"><input type="text" name="p_tel" value="<?php echo $this->_tpl_vars['cars']['p_tel']; ?>
"></td>
			</tr>
			<tr>
				<th></th>
				<td colspan="5"><div class="buttons">
						<input type="submit" value="<?php echo $this->_tpl_vars['ac_arr'][$this->_tpl_vars['ac']]; ?>
" class="submit">
						<input type="hidden" name="a" value="<?php echo $this->_tpl_vars['ac']; ?>
">
						<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['cars']['p_id']; ?>
">
						<input type="hidden" name="page" value="<?php echo $this->_tpl_vars['page_g']; ?>
">
				</div>
				</td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>