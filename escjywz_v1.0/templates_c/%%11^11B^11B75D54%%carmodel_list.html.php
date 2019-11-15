<?php /* Smarty version 2.6.18, created on 2015-10-21 19:30:25
         compiled from admin/carmodel_list.html */ ?>
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
/static/js/cal.js"></script>
<script type="text/javascript" src="static/js/common.js"></script>
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
})
</script>
</head>
<body>
<div class="colorarea01">
	<div class="search clearfix">
		<div class="searchL">
			<ul class="menulist">
            <li><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=carmodel&a=add" class="add">添加车型</a></li>
			</ul>
		</div>
        <div class="searchR">
			<form action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=carmodel" method="get" name="form2">
			<input type="hidden" name="m" value="carmodel">
			<input type="hidden" name="a" value="list">
			<span>
			<select name="p_brand" id="brand">
				<?php echo $this->_tpl_vars['select_brand']; ?>

			</select>
			<select class="subbrand" id="subbrand" name="p_subbrand" datatype="n" nullmsg="请选择车系！">
						<option  value="">请选择车系</option>
						<?php echo $this->_tpl_vars['select_subbrand']; ?>
                    
					</select>             
			</span>
            <span><input type="submit" name="filtersubmit" value="查询" class="combutton02 w50"></span>
			</form>
		</div> 
	</div>
    <form action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=carmodel" method="post" name="form">
	<?php if ($this->_tpl_vars['types'] == 2): ?>
		<table cellspacing="0" cellpadding="0" width="100%"  class="listtable">
		<tr><th width="30">选择</th><th>ID</th><th width="60">排序</th><th align="left">品牌</th><th>车型</th><th>款式</th><th>操作</th></tr>
		<?php $_from = $this->_tpl_vars['brandlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['brand']):
?>
			<tr bgcolor="#ffffff" onmouseover="style.backgroundColor='#E2E9EA'"  onmouseout="style.backgroundColor='#ffffff'">
            <td align="center"><input type="checkbox" name="bulkid[]" value="<?php echo $this->_tpl_vars['brand']['b_id']; ?>
"></td>
				<td align="center"><?php echo $this->_tpl_vars['brand']['b_id']; ?>
</td>
                <td align="center"><input type="text" size="5" name="orderid[<?php echo $this->_tpl_vars['brand']['b_id']; ?>
]" value="<?php echo $this->_tpl_vars['brand']['orderid']; ?>
" class="ip01"></td>
				<td align="left"><?php echo $this->_tpl_vars['brand']['brand01']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['brand']['model']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['brand']['styles']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['brand']['b_name']; ?>
</td>
				<td align="center"><?php echo $this->_tpl_vars['brand']['brand02']; ?>
</td>
				<td align="center"><?php echo $this->_tpl_vars['brand']['styles']; ?>
</td>
                <td align="center" class="rightmenu"><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=carmodel&a=editcarstyle&b_id=<?php echo $this->_tpl_vars['brand']['f_id']; ?>
" class="edit">编辑款式</a> | <a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=carmodel&a=edit&b_id=<?php echo $this->_tpl_vars['brand']['b_id']; ?>
" class="edit">编辑车型</a> | <a href="javascript:if(confirm('确实要删除款式以及款式下的所有车型吗?'))location='<?php echo $this->_tpl_vars['adminpage']; ?>
?m=carmodel&a=del&b_id=<?php echo $this->_tpl_vars['brand']['f_id']; ?>
'" class="del">删除款式</a> | <a href="javascript:if(confirm('确实要删除吗?'))location='<?php echo $this->_tpl_vars['adminpage']; ?>
?m=carmodel&a=del&b_id=<?php echo $this->_tpl_vars['brand']['b_id']; ?>
'" class="del">删除车型</a></td>
			</tr>
		<?php endforeach; endif; unset($_from); ?>
        <tr><td colspan="7" class="buttontd"><a href="javascript:selectAll();" title="请选择后操作">全选</a> <a href="javascript:submitForm('<?php echo $this->_tpl_vars['adminpage']; ?>
?m=carmodel&a=bulkdel','删除');" title="请选择后操作">删除</a> <a href="javascript:submitForm('<?php echo $this->_tpl_vars['adminpage']; ?>
?m=carmodel&a=bulksort','更新排序');" title="请选择后操作">更新排序</a></td></tr>
        </form>
	</table>
	<div class="listpage"><?php echo $this->_tpl_vars['button_basic']; ?>
<?php echo $this->_tpl_vars['button_select']; ?>
</div>
	<?php else: ?>
	<table cellspacing="0" cellpadding="0" width="100%"  class="listtable">
		<tr><th width="30">选择</th><th>ID</th><th width="60">排序</th><th align="left">品牌</th><th>车型</th><th>款式</th><th>操作</th></tr>
		<?php $_from = $this->_tpl_vars['brandlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['brand']):
?>
			<?php $_from = $this->_tpl_vars['brand']['brands_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subbrandlist']):
?>
				<?php $_from = $this->_tpl_vars['subbrandlist']['subbrands_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subsubbrandlist']):
?>
				<tr bgcolor="#ffffff" onmouseover="style.backgroundColor='#E2E9EA'"  onmouseout="style.backgroundColor='#ffffff'">
                    <td align="center"><input type="checkbox" name="bulkid[]" value="<?php echo $this->_tpl_vars['subsubbrandlist']['b_id']; ?>
"></td>
					<td align="center"><?php echo $this->_tpl_vars['subsubbrandlist']['b_id']; ?>
</td>
                    <td align="center"><input type="text" size="5" name="orderid[<?php echo $this->_tpl_vars['subsubbrandlist']['b_id']; ?>
]" value="<?php echo $this->_tpl_vars['subsubbrandlist']['orderid']; ?>
" class="ip01"></td>
					<td align="left"><?php echo $this->_tpl_vars['brand']['b_name']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['subbrandlist']['b_name']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['subsubbrandlist']['b_name']; ?>
</td>
					<td align="center"><?php echo $this->_tpl_vars['brand']['b_name']; ?>
</td>
					<td align="center"><?php echo $this->_tpl_vars['subbrandlist']['b_name']; ?>
</td>
                     <td align="center" class="rightmenu"><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=carmodel&a=editcarstyle&b_id=<?php echo $this->_tpl_vars['subbrandlist']['b_id']; ?>
" class="edit">编辑款式</a> | <a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=carmodel&a=edit&b_id=<?php echo $this->_tpl_vars['subsubbrandlist']['b_id']; ?>
" class="edit">编辑车型</a> | <a href="javascript:if(confirm('确实要删除款式以及款式下的所有车型吗?'))location='<?php echo $this->_tpl_vars['adminpage']; ?>
?m=carmodel&a=del&b_id=<?php echo $this->_tpl_vars['subbrandlist']['b_id']; ?>
'" class="del">删除款式</a> | <a href="javascript:if(confirm('确实要删除吗?'))location='<?php echo $this->_tpl_vars['adminpage']; ?>
?m=carmodel&a=del&b_id=<?php echo $this->_tpl_vars['subsubbrandlist']['b_id']; ?>
'" class="del">删除车型</a></td>
				</tr>
				<?php endforeach; endif; unset($_from); ?>
			<?php endforeach; endif; unset($_from); ?>
		<?php endforeach; endif; unset($_from); ?>
        <tr> <td colspan="7" class="buttontd"><a href="javascript:selectAll();" title="请选择后操作">全选</a> <a href="javascript:submitForm('<?php echo $this->_tpl_vars['adminpage']; ?>
?m=carmodel&a=bulkdel','删除');" title="请选择后操作">删除</a> <a href="javascript:submitForm('<?php echo $this->_tpl_vars['adminpage']; ?>
?m=carmodel&a=bulksort','更新排序');" title="请选择后操作">更新排序</a></td></tr>
	</table>	
	<?php endif; ?>
    </form>
</div>
</body>
</html>