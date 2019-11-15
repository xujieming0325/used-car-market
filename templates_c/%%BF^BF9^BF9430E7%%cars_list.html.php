<?php /* Smarty version 2.6.18, created on 2015-10-21 19:30:27
         compiled from admin/cars_list.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<link href="static/css/admin/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="static/js/common.js"></script>
<script type="text/javascript" src="static/js/jquery.js"></script>
<script type="text/javascript">
function selectsubmit()
{
 document.form1.submit();
}

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
	$("input[name*='p_price']").blur(function(){
		var obj=$(this).next();//回调函数前先写入变量;
		$.get("<?php echo $this->_tpl_vars['weburl']; ?>
/<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&ajax=1", { 
			p_id :  $(this).attr('valueid'),
			price : $(this).val()
		}, function (data){
              obj.html("<img src='static/img/admin/onSuccess.gif' align='absmiddle'/>");
		   }
		);
	});
//	//品牌选择
//	$("#brand").change(function(){
//		$.get("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1", { 
//			bid :  $("#brand").val() 
//		}, function (data, textStatus){
//			$("#subbrand").html(data); // 把返回的数据添加到页面上
//		});
//					
//	});
});
</script>
</head>
<body>
<div class="colorarea01">
	<div class="search clearfix">
		<div class="searchL">
			<ul class="menulist">
				<li><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=add" class="add">添加车源</a></li>
			</ul>
		</div>
		<?php if ($this->_tpl_vars['setting']['version'] == 2 || $this->_tpl_vars['setting']['version'] == 3): ?>
        <div class="searchR">统计: 总数: <span class="orange01"><?php echo $this->_tpl_vars['pagecount']; ?>
</span> 条,商家: <?php if ($this->_tpl_vars['dealercount'] == ''): ?><span class="orange01">0</span> 条<?php else: ?><span class="orange01"><?php echo $this->_tpl_vars['dealercount']; ?>
</span> 条<?php endif; ?>,
        个人: <?php if ($this->_tpl_vars['personcount'] == ''): ?><span class="orange01">0</span> 条<?php else: ?><span class="orange01"><?php echo $this->_tpl_vars['personcount']; ?>
</span> 条<?php endif; ?>,
        游客: <?php if ($this->_tpl_vars['visitor'] == ''): ?><span class="orange01">0</span> 条<?php else: ?><span class="orange01"><?php echo $this->_tpl_vars['visitor']; ?>
</span> 条<?php endif; ?>,
        待审核: <?php if ($this->_tpl_vars['unaudited'] == ''): ?><span class="orange01">0</span> 条<?php else: ?><span class="orange01"><?php echo $this->_tpl_vars['unaudited']; ?>
</span> 条<?php endif; ?>,
        已出售: <?php if ($this->_tpl_vars['issell'] == ''): ?><span class="orange01">0</span> 条<?php else: ?><span class="orange01"><?php echo $this->_tpl_vars['issell']; ?>
</span> 条<?php endif; ?>,
        未出售: <?php if ($this->_tpl_vars['nosell'] == ''): ?><span class="orange01">0</span> 条<?php else: ?><span class="orange01"><?php echo $this->_tpl_vars['nosell']; ?>
</span> 条<?php endif; ?></div>
		<?php endif; ?>
	</div>
    <div class="main clearfix mt10">
	<div class="main_left">
		<div class="search_box">
			<div class="condition">
				<span class="fr pr10"><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=list&clear=1" class="unl blue">清空条件</a></span>
				<span class="fl">您已选择：</span>
				<ul class="condition_list fl">
					<?php if ($_COOKIE['status'] <> 0): ?><li><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=list&c=s_0" class="condition"><?php echo $this->_tpl_vars['arr_status'][$_COOKIE['status']]; ?>
</a></li><?php endif; ?>
					<?php if ($_COOKIE['usertype'] <> 0): ?><li><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=list&c=u_0" class="condition"><?php echo $this->_tpl_vars['arr_usertype'][$_COOKIE['usertype']]; ?>
</a></li><?php endif; ?>
					<?php if ($_COOKIE['recom'] <> 0): ?><li><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=list&c=t_0" class="condition"><?php echo $this->_tpl_vars['arr_recom'][$_COOKIE['recom']]; ?>
</a></li><?php endif; ?>
					<?php if ($_COOKIE['keywords'] <> ''): ?><li><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=list&keywords=" class="condition"><?php echo $_COOKIE['keywords']; ?>
</a></li><?php endif; ?>
					<?php if ($_COOKIE['brand'] <> 0): ?><li><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=list&b=c_0" class="condition"><?php echo $this->_tpl_vars['cache']['brandlist'][$_COOKIE['brand']]; ?>
</a></li><?php endif; ?>
					<?php if ($_COOKIE['subbrand'] <> 0): ?><li><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=list&sb=0" class="condition"><?php echo $this->_tpl_vars['subrandname']; ?>
</a></li><?php endif; ?>
                    <?php if ($_COOKIE['subsubbrand'] <> 0): ?><li><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=list&sbsb=0" class="condition"><?php echo $this->_tpl_vars['subsubrandname']; ?>
</a></li><?php endif; ?>
					<?php if ($_COOKIE['model'] <> 0): ?><li><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=list&c=m_0" class="condition"><?php echo $this->_tpl_vars['cache']['modellist'][$_COOKIE['model']]; ?>
</a></li><?php endif; ?>
					<?php if ($_COOKIE['price'] <> 0): ?><li><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=list&c=p_0" class="condition"><?php echo $this->_tpl_vars['arr_price'][$_COOKIE['price']]; ?>
</a></li><?php endif; ?>
					<?php if ($_COOKIE['age'] <> 0): ?><li><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=list&c=a_0" class="condition"><?php echo $this->_tpl_vars['arr_age'][$_COOKIE['age']]; ?>
</a></li><?php endif; ?>
					<?php if ($_COOKIE['gas'] <> 0): ?><li><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=list&c=g_0" class="condition"><?php echo $this->_tpl_vars['arr_gas'][$_COOKIE['gas']]; ?>
</a></li><?php endif; ?>
                    <?php if ($_COOKIE['province'] <> 0): ?><li><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=list&c=c_0" class="condition">
                    <?php echo $this->_tpl_vars['cache']['provincelist'][$_COOKIE['province']]; ?>
</a></li><?php endif; ?>
                    <?php if ($_COOKIE['city'] <> 0): ?><li><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=list&cy=0" class="condition">     
                    <?php echo $this->_tpl_vars['cache']['citylist'][$_COOKIE['city']]; ?>
</a></li><?php endif; ?>
				</ul>
			</div>
			<ul class="search_list">
                <li>状 态： <a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=list&c=s_0"  <?php if ($_COOKIE['status'] == 0): ?>class="here"<?php endif; ?>>全部</a><?php $_from = $this->_tpl_vars['arr_status']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['statusllist']):
?><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=list&c=s_<?php echo $this->_tpl_vars['skey']; ?>
" <?php if ($_COOKIE['status'] == $this->_tpl_vars['skey']): ?>class="here"<?php endif; ?>><?php echo $this->_tpl_vars['statusllist']; ?>
</a><?php endforeach; endif; unset($_from); ?>  &nbsp;&nbsp;
					<?php if ($this->_tpl_vars['setting']['version'] == 2 || $this->_tpl_vars['setting']['version'] == 3): ?>会员类型： <a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=list&c=u_0"  <?php if ($_COOKIE['usertype'] == 0): ?>class="here"<?php endif; ?>>全部</a><?php $_from = $this->_tpl_vars['arr_usertype']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['usertypellist']):
?><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=list&c=u_<?php echo $this->_tpl_vars['skey']; ?>
" <?php if ($_COOKIE['usertype'] == $this->_tpl_vars['skey']): ?>class="here"<?php endif; ?>><?php echo $this->_tpl_vars['usertypellist']; ?>
</a><?php endforeach; endif; unset($_from); ?> &nbsp;&nbsp;<?php endif; ?>
					推荐位： <a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=list&c=t_0"  <?php if ($_COOKIE['recom'] == 0): ?>class="here"<?php endif; ?>>全部</a><?php $_from = $this->_tpl_vars['arr_recom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['recomllist']):
?><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=list&c=t_<?php echo $this->_tpl_vars['skey']; ?>
" <?php if ($_COOKIE['recom'] == $this->_tpl_vars['skey']): ?>class="here"<?php endif; ?>><?php echo $this->_tpl_vars['recomllist']; ?>
</a><?php endforeach; endif; unset($_from); ?>
				</li>
				<?php if ($this->_tpl_vars['setting']['version'] == 3): ?>
				<form method="get"   action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars">
				<li>省 市： <a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=list&c=c_0" <?php if ($_COOKIE['province'] == 0): ?>class="here"<?php endif; ?>>全部</a>
				<select id="province" name="c">
					<?php echo $this->_tpl_vars['selectprovincesearch']; ?>

				</select>
				<select id="city" name="cy">
					<option value="">请选择城市</option>
				</select>
				<input type="hidden" name="m" value="cars">
                <input type="hidden" name="a" value="list">
				<input type="submit" name="filtersubmit" value="查询" class="combutton02 w50">
				</li>
				</form>
				<?php endif; ?>
				<form method="get" action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars">
				<li>品 牌： <a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=list&c=b_0" <?php if ($_COOKIE['brand'] == 0): ?>class="here"<?php endif; ?>>全部</a>
				<select name="b" id="brand" datatype="n" nullmsg="请选择品牌！">
									<?php echo $this->_tpl_vars['selectbrand']; ?>

								</select>
								<select class="subbrand" id="subbrand" name="sb" datatype="n" nullmsg="请选择车系！">
									<option value="" selected>请选择车系</option>                       
								</select> &nbsp;<select class="subbrand" id="subsubbrand" name="sbsb" datatype="n" nullmsg="请选择款式！" style="width:100px;">
								<option value="" selected>请选择款式</option>					              
					</select>
				<input type="hidden" name="m" value="cars">
                <input type="hidden" name="a" value="list">
                 <span>
				<input type="text" name="keywords" id="searchkey" value="" size="16" class="inp01">
				</span>
				<input type="submit" name="filtersubmit" value="查询" class="combutton02 w50">
				</li>
				</form>
				<li>车 型： <a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=list&c=m_0" <?php if ($_COOKIE['model'] == 0): ?>class="here"<?php endif; ?>>全部</a><?php $_from = $this->_tpl_vars['cache']['modellist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['modellist']):
?><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=list&c=m_<?php echo $this->_tpl_vars['skey']; ?>
" <?php if ($_COOKIE['model'] == $this->_tpl_vars['skey']): ?>class="here"<?php endif; ?>><?php echo $this->_tpl_vars['modellist']; ?>
</a><?php endforeach; endif; unset($_from); ?></li>
                 <form method="get" action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars">
				<li>价 格： <a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=list&c=p_0"  <?php if ($_COOKIE['price'] == 0): ?>class="here"<?php endif; ?>>全部</a><?php $_from = $this->_tpl_vars['arr_price']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['pricelist']):
?><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=list&c=p_<?php echo $this->_tpl_vars['skey']; ?>
" <?php if ($_COOKIE['price'] == $this->_tpl_vars['skey']): ?>class="here"<?php endif; ?>><?php echo $this->_tpl_vars['pricelist']; ?>
</a><?php endforeach; endif; unset($_from); ?></li>
                </form>
				<li>车 龄： <a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=list&c=a_0"  <?php if ($_COOKIE['age'] == 0): ?>class="here"<?php endif; ?>>全部</a><?php $_from = $this->_tpl_vars['arr_age']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['agellist']):
?><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=list&c=a_<?php echo $this->_tpl_vars['skey']; ?>
" <?php if ($_COOKIE['age'] == $this->_tpl_vars['skey']): ?>class="here"<?php endif; ?>><?php echo $this->_tpl_vars['agellist']; ?>
</a><?php endforeach; endif; unset($_from); ?></li>
				<li>排 量： <a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=list&c=g_0"  <?php if ($_COOKIE['gas'] == 0): ?>class="here"<?php endif; ?>>全部</a><?php $_from = $this->_tpl_vars['arr_gas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['gasllist']):
?><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=list&c=g_<?php echo $this->_tpl_vars['skey']; ?>
" <?php if ($_COOKIE['gas'] == $this->_tpl_vars['skey']): ?>class="here"<?php endif; ?>><?php echo $this->_tpl_vars['gasllist']; ?>
</a><?php endforeach; endif; unset($_from); ?></li>
			</ul>
		</div>
	<form action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars" method="POST" name="form" onSubmit="return listsubmitconfirm(this.form)">
	<table cellspacing="0" cellpadding="0" width="100%"  class="listtable mt10">
	<tr><th width="30">选择</th><th>ID</th><th align="left">品牌</th><th>车型</th><th>报价</th><th>上牌日期</th><th>发布时间</th><?php if ($this->_tpl_vars['setting']['version'] == 2 || $this->_tpl_vars['setting']['version'] == 3): ?><th>会员</th><?php endif; ?><?php if ($this->_tpl_vars['setting']['version'] == 3): ?><th>城市</th><?php endif; ?><th>显示</th><th>已卖</th><th>点击</th><th width="230">操作</th></tr>
	<?php $_from = $this->_tpl_vars['carslist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cars']):
?>
	<tr bgcolor="#ffffff" onmouseover="style.backgroundColor='#E2E9EA'"  onmouseout="style.backgroundColor='#ffffff'">
	<td align="center"><input type="checkbox" name="bulkid[]" value="<?php echo $this->_tpl_vars['cars']['p_id']; ?>
"></td>
	<td align="center"><?php echo $this->_tpl_vars['cars']['p_id']; ?>
</td>
	<td align="left"><a href="<?php echo $this->_tpl_vars['cars']['p_url']; ?>
" target="_blank"><?php if ($this->_tpl_vars['cars']['p_allname'] != ""): ?><?php echo $this->_tpl_vars['cars']['p_allname']; ?>
<?php else: ?><?php echo $this->_tpl_vars['cars']['p_name']; ?>
<?php endif; ?></a> <?php if ($this->_tpl_vars['cars']['p_pics'] != ""): ?><span class="red">图</span><?php endif; ?> 
	<?php if ($this->_tpl_vars['cars']['isrecom'] == 1): ?><span class="red">推荐</span><?php endif; ?> <?php if ($this->_tpl_vars['cars']['issprecom'] == 1): ?><span class="red">特荐</span><?php endif; ?> <?php if ($this->_tpl_vars['cars']['ishot'] == 1): ?><span class="red">热门</span><?php endif; ?>
	<?php if ($this->_tpl_vars['cars']['is_sell'] == 1): ?><span class="red">已卖</span><?php endif; ?></td>
	<td align="center"><?php echo $this->_tpl_vars['cars']['p_modelname']; ?>
</td>
	<td align="center" class="red"><?php echo $this->_tpl_vars['cars']['p_price']; ?>
万</span></td>
	<td align="center"><?php echo $this->_tpl_vars['cars']['p_year']; ?>
年<?php echo $this->_tpl_vars['cars']['p_month']; ?>
月</td>
	<td align="center"><?php echo $this->_tpl_vars['cars']['listtime']; ?>
</td>
	<?php if ($this->_tpl_vars['setting']['version'] == 2 || $this->_tpl_vars['setting']['version'] == 3): ?><td align="center"><?php echo $this->_tpl_vars['cars']['username']; ?>
</td><?php endif; ?>
    <?php if ($this->_tpl_vars['setting']['version'] == 3): ?>
	<td align="center"><?php echo $this->_tpl_vars['cars']['province']; ?>
-<?php echo $this->_tpl_vars['cars']['city']; ?>
</td>
	<?php endif; ?>
	<td align="center"><?php if ($this->_tpl_vars['cars']['isshow'] == 1): ?>是<?php else: ?><span class="red">否</span><?php endif; ?></td>
	<td align="center"><?php if ($this->_tpl_vars['cars']['issell'] == 0): ?>否<?php else: ?><span class="red">已卖</span><?php endif; ?></td>
	<td align="center" class="orange01"><?php echo $this->_tpl_vars['cars']['p_hits']; ?>
</td>
	<td align="center" class="rightmenu"><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=html&id=<?php echo $this->_tpl_vars['cars']['p_id']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
">生成静态</a> | <a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=show&id=<?php echo $this->_tpl_vars['cars']['p_id']; ?>
&p_state=<?php if ($this->_tpl_vars['cars']['isshow'] == 1): ?>0<?php else: ?>1<?php endif; ?>&page=<?php echo $this->_tpl_vars['page']; ?>
">显示</a> | <a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=edit&id=<?php echo $this->_tpl_vars['cars']['p_id']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
">编辑</a> | <a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=refresh&id=<?php echo $this->_tpl_vars['cars']['p_id']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
">刷新</a> | <a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=sell&id=<?php echo $this->_tpl_vars['cars']['p_id']; ?>
&issell=<?php if ($this->_tpl_vars['cars']['issell'] == 1): ?>0<?php else: ?>1<?php endif; ?>&page=<?php echo $this->_tpl_vars['page']; ?>
">已卖</a> | <a href="javascript:if(confirm('确实要删除吗?'))location='<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=del&id=<?php echo $this->_tpl_vars['cars']['p_id']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
'">删除</a></td>
	</tr>
	<?php endforeach; endif; unset($_from); ?>
	<tr>
		<td colspan="14" class="buttontd">
			<a href="javascript:javascript:selectAll();" title="请选择后操作">全选</a>
			<a href="javascript:submitForm('<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=bulkhtml&page=<?php echo $this->_tpl_vars['page']; ?>
','生成静态');" title="请选择后操作">生成静态</a>
			<a href="javascript:submitForm('<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=bulkrefresh&page=<?php echo $this->_tpl_vars['page']; ?>
','刷新');" title="请选择后操作">刷新</a>
			<a href="javascript:submitForm('<?php echo $this->_tpl_vars['adminpage']; ?>
?m=cars&a=bulkdel&page=<?php echo $this->_tpl_vars['page']; ?>
','删除');" title="请选择后操作">删除</a>
		</td>
	</tr>
	</table>
	</form>
	<div class="listpage"><?php echo $this->_tpl_vars['button_basic']; ?>
<?php echo $this->_tpl_vars['button_select']; ?>
</div>
</div>
</body>
</html>