<?php /* Smarty version 2.6.18, created on 2019-08-07 23:11:35
         compiled from admin/add_ad_code.html */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="static/css/admin/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="static/js/jquery.js"></script>
<script language="JavaScript">
$(function() {
	$(".submit").keyup(function () {
		  var value = $(this).val();
		  $(".code").text(value);
		}).keyup();
	}); 
});
</script>
</head>
<body>
<div class="colorarea01">
<form name="form1" id="channelform" method="post" enctype="multipart/form-data" action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=ad">
	<table cellspacing="0" cellpadding="0" width="100%"  class="maintable">
		<tr>
			<th>广告代码：</th>
			<td><textarea name="" rows="1" cols="100" class="code" onFocus="this.select()"><?php echo $this->_tpl_vars['code']; ?>
</textarea></td>
		</tr>
	</table>
	</div>
</form>
</body>
</html>