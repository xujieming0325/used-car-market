<?php /* Smarty version 2.6.18, created on 2019-08-08 16:34:42
         compiled from admin/add_carmodel.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="static/css/admin/style.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="static/js/jquery.js"></script>
<link rel="stylesheet" href="admin/kindeditor/themes/default/default.css" />
<script charset="utf-8" src="admin/kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="admin/kindeditor/lang/zh_CN.js"></script>
<script type="text/javascript" src="static/js/Validform_v5.3.2_min.js"></script>
<script>
	$(function() {
		//表单验证
		$(".modelform").Validform({
			tiptype:3
		});
	});
	KindEditor.ready(function(K) {
		var editor = K.editor({
			uploadJson : '<?php echo $this->_tpl_vars['adminpage']; ?>
?m=upload',
			fileManagerJson : '<?php echo $this->_tpl_vars['adminpage']; ?>
?m=upload_manager',
			allowFileManager : true
		});
		K('#image1').click(function() {
			editor.loadPlugin('image', function() {
				editor.plugin.imageDialog({
					imageUrl : K('#url1').val(),
					clickFn : function(url, title, width, height, border, align) {
						K('#url1').val(url);
						editor.hideDialog();
					}
				});
			});
		});
	});
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
			subsubbrandid :  $("#subbrand").val() 
		}, function (data, textStatus){
               $("#subsubsubbrand").html(data); // 把返回的数据添加到页面上
			}
		);
	});
})

			
</script>
</head>
</head>
<body>
<div class="colorarea01">
	<div class="search clearfix">
		<div class="searchL">
			<ul class="menulist">
				<li><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=carmodel&a=list" class="list">返回车型列表</a></li>
			</ul>
		</div>
	</div>
	<form name="form1" class="modelform" method="post"  enctype="multipart/form-data"  action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=carmodel">
		<table cellspacing="0" cellpadding="0" width="100%"  class="maintable">
			<tr>
              <th>一级品牌：</th>
              <td> 
                  <select name="p_brand" id="brand" datatype="n" nullmsg="请选择品牌！">
				  <?php echo $this->_tpl_vars['select_brand']; ?>

				  </select>
              </td>
            </tr>
            <tr>
              <th>二级品牌：</th>
			  <td>
                  <select class="subbrand" id="subbrand" name="p_subbrand" datatype="n" nullmsg="请选择车系！">
				  <option  value="">请选择车系</option>
                  <?php echo $this->_tpl_vars['select_subbrand']; ?>

			  </td>
            </tr>
            <tr>               
			  <th>添加新款式：</th>
			  <td>
                  <input type="radio" name="isaddmodel"   value="1" >
                  <input name="b_name4"  type="text" id="b_name4" size="11" value="<?php echo $this->_tpl_vars['subsubsublist']['b_name']; ?>
"/>
              </td>
            </tr>
            <tr> 
                <th>现有款式：</th>
                <td>
                    <input type="radio" name="isaddmodel"  checked="checked"  value="0" >
                    <select class="subbrand" id="subsubsubbrand" name="p_subsubbrand">
					<option  value="">请选择款式</option>
					<?php echo $this->_tpl_vars['select_fourbrand']; ?>

					</select>
                </td>
			</tr>
			<tr>
				<th>具体车型：</th>
				<td><input name="b_name5" type="text" id="b_name5" size="30" value="<?php echo $this->_tpl_vars['subsubsubsublist']['b_name']; ?>
" />
                </td>
			</tr>
			<tr>
				<th></th>
				<td><div class="buttons">
						<input type="submit" name="thevaluesubmit" value="提交保存" class="submit">
						<input type="hidden" name="a" value="<?php echo $this->_tpl_vars['ac']; ?>
">
                        <input type="hidden" name="b_id" value="<?php echo $this->_tpl_vars['subsubsubsublist']['b_id']; ?>
">
						<input name="valuesubmit" type="hidden" value="yes" />
					</div></td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>