<?php /* Smarty version 2.6.18, created on 2015-10-21 19:28:56
         compiled from admin/add_setting.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="static/css/admin/style.css" rel="stylesheet" type="text/css" />
<script charset="utf-8" src="admin/kindeditor/kindeditor-min.js"></script>
<link rel="stylesheet" href="admin/kindeditor/themes/default/default.css" />
<script charset="utf-8" src="admin/kindeditor/lang/zh_CN.js"></script>
<script type="text/javascript" src="static/js/Validform_v5.3.2_min.js"></script>
<script>
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
			function register(limittype)	{	
	     if(limittype==1)		{		
	        document.getElementById("count").disabled=false;		
			}	
		else{		
		    document.getElementById("count").disabled=true;
		}
			}
			
			function register1(limittype)	{	
	     if(limittype==1)		{		
	        document.getElementById("count1").disabled=false;		
			}	
		else{		
		    document.getElementById("count1").disabled=true;
		}
			}
			function register2(limittype)	{	
	     if(limittype==1)		{		
	        document.getElementById("count2").disabled=false;		
			}	
		else{		
		    document.getElementById("count2").disabled=true;
		}
			}
</script>


</head>
<body>
<div class="colorarea01">
	<div class="search clearfix">
		<div class="searchL">
			<ul class="menulist">
				<li><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=settings&a=web" class="list">系统基本设置</a></li>
				<li><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=settings&a=contact" class="list">联系方式设置</a></li>
				<li><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=settings&a=car" class="list">车源相关设置</a></li>
			</ul>
		</div>
	</div>
	<form action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=settings" method="post" name="form" onsubmit="return chksubmit();">
	<table cellspacing="0" cellpadding="0" width="100%"  class="maintable">
		<?php if ($this->_tpl_vars['ac'] == 'web'): ?>
		<tr>
			<th>网站名称：</th>
			<td><input name="sitename" type="text" size="30" id="sitename" value="<?php echo $this->_tpl_vars['setting']['sitename']; ?>
" /></td>
		</tr>
		<tr>
			<th>网站title：</th>
			<td><input name="title" type="text" size="50" id="title" value="<?php echo $this->_tpl_vars['setting']['title']; ?>
" /></td>
		</tr>
		<tr>
			<th>网站keywords：</th>
			<td><input name="keywords" type="text" size="50"  value="<?php echo $this->_tpl_vars['setting']['keywords']; ?>
" /></td>
		</tr>
		<tr>
			<th>网站版权信息：</th>
			<td><input name="copyright" type="text" size="50"  value="<?php echo $this->_tpl_vars['setting']['copyright']; ?>
" /></td>
		</tr>
		<tr>
			<th>网站备案号：</th>
			<td><input name="icp" type="text" size="30"  value="<?php echo $this->_tpl_vars['setting']['icp']; ?>
" /></td>
		</tr>
		<tr>
			<th>网站description：</th>
			<td><textarea name="description" rows="5" cols="90" class="textarea01"><?php echo $this->_tpl_vars['setting']['description']; ?>
</textarea></td>
		</tr>
		<tr>
			<th>上传网站logo：</th>
			<td><input type="text" name="logo" id="url2" value="<?php echo $this->_tpl_vars['setting']['logo']; ?>
" />
					<input type="button" id="image2" value="选择图片" /> <span class="gray01">[280px*70px]</span></td>
		</tr>
		<tr>
			<th>开启水印：</th>
		<td><input type="radio" name="water" onclick="register2(1);"  value="1" <?php if ($this->_tpl_vars['setting']['water'] == 1): ?>checked<?php endif; ?>> 是&nbsp;&nbsp;水印位置：<select id="count2" name="position"  <?php if ($this->_tpl_vars['setting']['water'] == 0): ?>disabled="disabled"<?php endif; ?> ><option value="1" <?php if ($this->_tpl_vars['setting']['position'] == 1): ?>selected="selected"<?php endif; ?>>左上</option><option value="2" <?php if ($this->_tpl_vars['setting']['position'] == 2): ?>selected="selected"<?php endif; ?>>左下
		</option><option value="3" <?php if ($this->_tpl_vars['setting']['position'] == 3): ?>selected="selected"<?php endif; ?>>右上</option><option value="4" <?php if ($this->_tpl_vars['setting']['position'] == 4): ?>selected="selected"<?php endif; ?>>右下</option><option value="5" <?php if ($this->_tpl_vars['setting']['position'] == 5): ?>selected="selected"<?php endif; ?>>下中</option></select> <input type="radio" name="water" onclick="register2(2);" value="0" <?php if ($this->_tpl_vars['setting']['water'] == 0): ?>checked<?php endif; ?>> 否</td>
       
		</tr>
		<tr>
			<th>上传水印图片：</th>
			<td><input type="text" name="waterpic" id="url1" value="<?php echo $this->_tpl_vars['setting']['waterpic']; ?>
" />
					<input type="button" id="image1" value="选择图片" /></td>
		</tr>
		<tr>
			<th>是否生成缩略图：</th>
			<td><input type="radio" name="isdstimg" value="1" <?php if ($this->_tpl_vars['setting']['isdstimg'] == 1): ?>checked<?php endif; ?>> 是 <input type="radio" name="isdstimg" value="0" <?php if ($this->_tpl_vars['setting']['isdstimg'] == 0): ?>checked<?php endif; ?>> 否</td>
		</tr>
        <tr>
			<th>缩略图尺寸：</th>
			<td>宽：
				<input type="text" name="thumbwidth" size="5"  <?php if ($this->_tpl_vars['setting']['imgwidth'] != ''): ?>value="<?php echo $this->_tpl_vars['setting']['thumbwidth']; ?>
"<?php else: ?>value="200"<?php endif; ?> >
				高：
				<input type="text" size="5" name="thumbheight" <?php if ($this->_tpl_vars['setting']['imgheight'] != ''): ?>value="<?php echo $this->_tpl_vars['setting']['thumbheight']; ?>
"<?php else: ?>value="200"<?php endif; ?>></td>
		</tr>
         <tr>
			<th>大图尺寸：</th>
			<td>宽：
				<input type="text" name="imgwidth" size="5" <?php if ($this->_tpl_vars['setting']['imgwidth'] != ''): ?>value="<?php echo $this->_tpl_vars['setting']['imgwidth']; ?>
"<?php else: ?>value="600"<?php endif; ?>>
				高：
				<input type="text" size="5" name="imgheight" <?php if ($this->_tpl_vars['setting']['imgwidth'] != ''): ?>value="<?php echo $this->_tpl_vars['setting']['imgwidth']; ?>
"<?php else: ?>value="600"<?php endif; ?>></td>
		</tr>
		<?php if ($this->_tpl_vars['setting']['version'] != 1): ?>
        <tr>
			<th>限制个人发布二手车：</th>
            <td>
            <input type="radio" name="islimit" onclick="register(1);" value="1" <?php if ($this->_tpl_vars['setting']['islimit'] == 1): ?>checked<?php endif; ?>> 是
            <input type="text" id="count" name="limitcount"  size="5" value="<?php echo $this->_tpl_vars['setting']['limitcount']; ?>
"  <?php if ($this->_tpl_vars['setting']['islimit'] == 0): ?>disabled="disabled"<?php endif; ?>>条
            <input type="radio" name="islimit" onclick="register(2);" value="0" <?php if ($this->_tpl_vars['setting']['islimit'] == 0): ?>checked<?php endif; ?>> 否
            </td>   
		</tr>
		<?php endif; ?>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['ac'] == 'contact'): ?>
		<tr>
			<th>地址：</th>
			<td><input name="address" type="text" size="60"  value="<?php echo $this->_tpl_vars['setting']['address']; ?>
" /></td>
		</tr>
		<tr>
			<th>邮编：</th>
			<td><input name="postcode" type="text" size="30"  value="<?php echo $this->_tpl_vars['setting']['postcode']; ?>
" /></td>
		</tr>
		<tr>
			<th>电话：</th>
			<td><input name="tel" type="text" size="30"  value="<?php echo $this->_tpl_vars['setting']['tel']; ?>
" /></td>
		</tr>
		<tr>
			<th>传真：</th>
			<td><input name="fax" type="text" size="30"  value="<?php echo $this->_tpl_vars['setting']['fax']; ?>
" /></td>
		</tr>
		<tr>
			<th>邮箱：</th>
			<td><input name="email" type="text" size="30"  value="<?php echo $this->_tpl_vars['setting']['email']; ?>
" /></td>
		</tr>
		<tr>
			<th>联系人：</th>
			<td><input name="contactman" type="text" size="30"  value="<?php echo $this->_tpl_vars['setting']['contactman']; ?>
" /></td>
		</tr>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['ac'] == 'car'): ?>
		<tr>
			<th>显示已卖车源：</th>
			<td colspan="5"><input type="checkbox" name="issell" value="1" <?php if ($this->_tpl_vars['setting']['issell'] == 1): ?>checked<?php endif; ?>></td>
		</tr>
		<tr>
			<th>下拉菜单设置：</th>
			<td width="80">
				<p class="tc pb10">变速箱</p>
				<p class="tc">
					<textarea name="transmission" rows="15" cols="6" class="textarea02"><?php echo $this->_tpl_vars['setting']['transmission']; ?>
</textarea>
				</p>
			</td>
			<td width="80">
				<p class="tc pb10">排量</p>
				<p class="tc">
					<textarea name="gas" rows="15" cols="6" class="textarea02"><?php echo $this->_tpl_vars['setting']['gas']; ?>
</textarea>
				</p>
			</td>
			<td width="80">
				<p class="tc pb10">颜色</p>
				<p class="tc">
					<textarea name="color" rows="15" cols="6" class="textarea02"><?php echo $this->_tpl_vars['setting']['color']; ?>
</textarea>
				</p>
			</td>
			<td width="80">
				<p class="tc pb10">年份</p>
				<p class="tc">
					<textarea name="year" rows="15" cols="6" class="textarea02"><?php echo $this->_tpl_vars['setting']['year']; ?>
</textarea>
				</p>
			</td>
			<td>
			</td>
		</tr>
		<?php endif; ?>
		<tr>
			<th></th>
			<td><div class="buttons">
					<input type="submit" value="修改设置" class="submit">
					<input type="hidden" name="a" value="<?php echo $this->_tpl_vars['ac']; ?>
">
				</div></td>
		</tr>
	</table>
</div>
</body>
</html>