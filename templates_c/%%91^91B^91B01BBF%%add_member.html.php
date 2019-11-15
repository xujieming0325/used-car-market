<?php /* Smarty version 2.6.18, created on 2016-04-10 17:23:30
         compiled from admin/add_member.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<link href="static/css/admin/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="static/js/common.js"></script>
<script type="text/javascript" src="static/js/jquery.js"></script>
<script type="text/javascript" src="static/js/Validform_v5.3.2_min.js"></script><link rel="stylesheet" href="admin/kindeditor/themes/default/default.css" />
<script charset="utf-8" src="admin/kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="admin/kindeditor/lang/zh_CN.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    //城市选择
	$("#province").change(function(){
		$.get("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1", { 
			cityid :  $("#province").val() 
		}, function (data, textStatus){
			$("#city").html(data); // 把返回的数据添加到页面上
		});
	});
	//表单验证
	$(".addmember").Validform({
		tiptype:3
	});
	$('#usertype').change(function(){
			if($("#usertype").val()==1){
				$('#dealer').hide();
			}
			else{
				$('#dealer').show();
			}
		});
});
KindEditor.ready(function(K) {
			var editor = K.editor({
				uploadJson : '<?php echo $this->_tpl_vars['adminpage']; ?>
?m=upload',
				fileManagerJson : '<?php echo $this->_tpl_vars['adminpage']; ?>
?m=upload_manager',
				allowFileManager : true,
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
			K('#image2').click(function() {
				editor.loadPlugin('image', function() {
					editor.plugin.imageDialog({
						imageUrl : K('#url2').val(),
						clickFn : function(url, title, width, height, border, align) {
							K('#url2').val(url);
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
?m=member&a=list" class="list">返回会员列表</a></li>
			</ul>
		</div>
	</div>
	<form name="form1" class="addmember" method="post"  action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=member">
		<table cellspacing="0" cellpadding="0" width="100%"  class="maintable">
		<?php if ($this->_tpl_vars['ac'] == 'edit'): ?>
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
			</tr>
			<?php endif; ?>
			<tr>
			<th>会员类型：</th>
			<td>
				<select name="isdealer" id="usertype">
					<?php echo $this->_tpl_vars['selectisdealer']; ?>

				</select>
			</td>
		</tr>
		<tr>
			<th>用户名：</th>
			<td colspan="3"><input type="text" name="username" value="<?php echo $this->_tpl_vars['user']['username']; ?>
" ajaxurl="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=member&ajax=1&id=<?php echo $this->_tpl_vars['user']['id']; ?>
" datatype="s6-18" errormsg="用户名至少6个字符,最多18个字符！"></td>
		</tr>
		<tr>
			<th>密码：</th>
			<td colspan="3"><input type="text" name="password"></td>
		</tr>
		<tr>
			<th>邮箱地址：</th>
			<td colspan="3">
				<input type="text" name="email" value="<?php echo $this->_tpl_vars['user']['email']; ?>
" size="30" class="inp01" datatype="e" ajaxurl="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=member&ajax=1&id=<?php echo $this->_tpl_vars['user']['id']; ?>
" nullmsg="请输入邮箱地址！" errormsg="请输入正确的邮箱地址！"/>
			</td>
		</tr>
		<tr>
            <th>联系人：</th>
            <td><input type="text" name="nicname" value="<?php echo $this->_tpl_vars['user']['nicname']; ?>
" class="inp01"  datatype="s" nullmsg="请填写联系人！"/></td>
        </tr>
		<tr>
			<th>手机号码：</th>
			<td colspan="3">
				<input type="text" name="mobilephone" value="<?php echo $this->_tpl_vars['user']['mobilephone']; ?>
" size="20" class="inp01" datatype="m" ajaxurl="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=member&ajax=1&id=<?php echo $this->_tpl_vars['user']['id']; ?>
" nullmsg="请输入手机号！" errormsg="请输入正确的手机号！"/>
			</td>
		</tr>
		</table>
		<table cellspacing="0" cellpadding="0" width="100%"  class="maintable" id="dealer" <?php if ($this->_tpl_vars['user']['isdealer'] == 1): ?>style="display:none;"<?php endif; ?>>
		<tr>
			<th>推荐位：</th>
				<td><input type="checkbox" name="isrecom" value="1" <?php if ($this->_tpl_vars['user']['isrecom'] == 1): ?>checked<?php endif; ?>> 推荐 &nbsp;&nbsp;<input type="checkbox" name="ishot" value="1" <?php if ($this->_tpl_vars['user']['ishot'] == 1): ?>checked<?php endif; ?>> 热门 </td>
			</tr>
		<tr>
			<th>公司类型：</th>
			<td><select name="shoptype" id="shoptype">
					<?php echo $this->_tpl_vars['select_dealer_category']; ?>

				</select></td>
		</tr>
		<tr>
			<th>公司名称：</th>
			<td><input type="text" name="company" value="<?php echo $this->_tpl_vars['user']['company']; ?>
" class="inp01"  datatype="s" nullmsg="请填写商家营业执照登记名称！" ignore="ignore"/></td>
		</tr>
		<tr>
			<th>公司地址：</th>
			<td><input type="text" name="address" value="<?php echo $this->_tpl_vars['user']['address']; ?>
" class="inp01"  size="50"   datatype="*" nullmsg="请填写公司地址！" ignore="ignore"/></td>
		</tr>
		<tr>
            <th>固话：</td>
            <td><input type="text" name="tel" value="<?php echo $this->_tpl_vars['user']['tel']; ?>
" class="inp01" datatype="/[\d]{7}/" ignore="ignore"  errormsg="请输入正确的固话号码！" /></td>
        </tr>
        <tr>
            <th>简介：</th>
            <td colspan="3"><textarea name="shopdetail" rows="5" cols="60" class="textarea01"><?php echo $this->_tpl_vars['user']['shopdetail']; ?>
</TEXTAREA></td>
        </tr>
		<tr>
			<th>店铺logo：</th>
			<td><input type="text" name="logo" id="url2" value="<?php echo $this->_tpl_vars['user']['logo']; ?>
" />
				<input type="button" id="image2" value="选择图片" />
			</td>
		</tr>
		<tr>
			<td align="right"></td>
			<td colspan="3"><input type="radio" name="ischeck" value="1" <?php if ($this->_tpl_vars['user']['ischeck'] == 1): ?>checked<?php endif; ?>> 通过 &nbsp;&nbsp;&nbsp;<input type="radio" name="ischeck" value="2" <?php if ($this->_tpl_vars['user']['ischeck'] == 2): ?>checked<?php endif; ?>> 不通过</td>
		</tr>
		<tr>
            <td align="right">不通过原因：</td>
            <td colspan="3"><textarea name="checknotice" rows="5" cols="60" class="textarea01"><?php echo $this->_tpl_vars['user']['checknotice']; ?>
</textarea></td>
        </tr>
		</table>
		<?php else: ?>
		<table cellspacing="0" cellpadding="0" width="100%"  class="maintable">
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
			</tr>
			<?php endif; ?>
			<tr>
			<th>会员类型：</th>
			<td>
				<select name="isdealer" id="usertype">
					<?php echo $this->_tpl_vars['selectisdealer']; ?>

				</select>
			</td>
		</tr>
		<tr>
			<th>用户名：</th>
			<td colspan="3"><input type="text" name="username" value="<?php echo $this->_tpl_vars['user']['username']; ?>
" ajaxurl="index.php?m=register&ajax=1" datatype="s6-18" errormsg="用户名至少6个字符,最多18个字符！"></td>
		</tr>
		<tr>
			<th>密码：</th>
			<td colspan="3"><input type="text" name="password" datatype="*6-18" nullmsg="请输入密码！" errormsg="密码至少6个字符,最多18个字符！"></td>
		</tr>
		<tr>
			<th>邮箱地址：</th>
			<td colspan="3">
				<input type="text" name="email" value="<?php echo $this->_tpl_vars['user']['email']; ?>
" size="30" class="inp01" datatype="e" ajaxurl="index.php?m=register&ajax=1" nullmsg="请输入邮箱地址！" errormsg="请输入正确的邮箱地址！"/>
			</td>
		</tr>
		<tr>
            <th>联系人：</th>
            <td><input type="text" name="nicname" value="<?php echo $this->_tpl_vars['user']['nicname']; ?>
" class="inp01"  datatype="s" nullmsg="请填写联系人！"/></td>
        </tr>
		<tr>
			<th>手机号码：</th>
			<td colspan="3">
				<input type="text" name="mobilephone" value="<?php echo $this->_tpl_vars['user']['mobilephone']; ?>
" size="20" class="inp01" datatype="m" ajaxurl="index.php?m=register&ajax=1" nullmsg="请输入手机号！" errormsg="请输入正确的手机号！"/>
			</td>
		</tr>
		</table>
		<table cellspacing="0" cellpadding="0" width="100%"  class="maintable" id="dealer" <?php if ($this->_tpl_vars['user']['isdealer'] == 1): ?>style="display:none;"<?php endif; ?>>
		<tr>
			<th>推荐位：</th>
				<td><input type="checkbox" name="isrecom" value="1" <?php if ($this->_tpl_vars['user']['isrecom'] == 1): ?>checked<?php endif; ?>> 推荐 &nbsp;&nbsp;<input type="checkbox" name="ishot" value="1" <?php if ($this->_tpl_vars['user']['ishot'] == 1): ?>checked<?php endif; ?>> 热门 </td>
			</tr>
		<tr>
			<th>公司类型：</th>
			<td><select name="shoptype" id="shoptype">
					<?php echo $this->_tpl_vars['select_dealer_category']; ?>

				</select></td>
		</tr>
		<tr>
			<th>公司名称：</th>
			<td><input type="text" name="company" class="inp01"  datatype="s" nullmsg="请填写商家营业执照登记名称！" ignore="ignore"/></td>
		</tr>
		<tr>
			<th>上传营业执照：</th>
			<td><input type="text" name="zhizhao" id="url1" value="<?php echo $this->_tpl_vars['user']['zhizhao']; ?>
" class="inp01" datatype="*" nullmsg="请上传营业执照！" ignore="ignore"/>
				<input type="button" id="image1" value="选择图片" class="uploadbutton"/>
			</td>
		</tr>
		<tr>
			<th>公司地址：</th>
			<td><input type="text" name="address" class="inp01" size="50"  datatype="*" nullmsg="请填写公司地址！" ignore="ignore"/></td>
		</tr>
		<tr>
            <th>固话：</td>
            <td><input type="text" name="tel" value="<?php echo $this->_tpl_vars['user']['tel']; ?>
" class="inp01" datatype="/[\d]{7}/" ignore="ignore"  errormsg="请输入正确的固话号码！" /></td>
        </tr>
        <tr>
            <th>简介：</th>
            <td colspan="3"><textarea name="shopdetail" rows="5" cols="60" class="textarea01"><?php echo $this->_tpl_vars['user']['shopdetail']; ?>
</TEXTAREA></td>
        </tr>
		<tr>
			<th>店铺logo：</th>
			<td><input type="text" name="logo" id="url1" value="<?php echo $this->_tpl_vars['user']['logo']; ?>
" />
				<input type="button" id="image1" value="选择图片" />
			</td>
		</tr>
		<tr>
			<td align="right"></td>
			<td colspan="3"><input type="radio" name="ischeck" value="1" <?php if ($this->_tpl_vars['user']['ischeck'] == 1): ?>checked<?php endif; ?>> 通过 &nbsp;&nbsp;&nbsp;<input type="radio" name="ischeck" value="2" <?php if ($this->_tpl_vars['user']['ischeck'] == 2): ?>checked<?php endif; ?>> 不通过</td>
		</tr>
		<tr>
            <td align="right">不通过原因：</td>
            <td colspan="3"><textarea name="checknotice" rows="5" cols="60" class="textarea01"><?php echo $this->_tpl_vars['user']['checknotice']; ?>
</textarea></td>
        </tr>
		</table>
		<?php endif; ?> 
		<table cellspacing="0" cellpadding="0" width="100%"  class="maintable">
			<tr>
				<th></th>
				<td><div class="buttons">
						<input type="submit" name="thevaluesubmit" value="提交保存" class="submit">
						<input type="hidden" name="a" value="<?php echo $this->_tpl_vars['ac']; ?>
">
						<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['user']['id']; ?>
">
						<input type="hidden" name="page" value="<?php echo $this->_tpl_vars['page_g']; ?>
">
					</div></td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>