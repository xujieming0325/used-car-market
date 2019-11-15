<?php /* Smarty version 2.6.18, created on 2015-10-21 19:30:25
         compiled from admin/brand_list.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="static/css/admin/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="static/js/common.js"></script>
<script type="text/javascript">
BackTop=function(btnId){ 
var btn=document.getElementById(btnId); 
var d=document.documentElement; 
window.onscroll=set; 
btn.onclick=function (){ 
btn.style.display="none"; 
window.onscroll=null; 
this.timer=setInterval(function(){ 
d.scrollTop-=Math.ceil(d.scrollTop*0.1); 
if(d.scrollTop==0) clearInterval(btn.timer,window.onscroll=set); 
},10); 
}; 
function set(){btn.style.display=d.scrollTop?'block':"none"} 
}; 
BackTop('gotop'); 
</script>
</head>
<body>
<div class="colorarea01">
	<div class="search clearfix">
		<div class="searchL">
			<ul class="menulist">
				<li><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=brand&a=add" class="add">添加品牌</a></li>
			</ul>
		</div>
		<div class="searchR" style="padding-top:5px">
			<?php $_from = $this->_tpl_vars['match_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['match']):
?><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=brand&a=list&k=<?php echo $this->_tpl_vars['match']; ?>
" <?php if ($this->_tpl_vars['sel_key'] == $this->_tpl_vars['match']): ?>class="fb"<?php endif; ?>>&nbsp;<?php echo $this->_tpl_vars['match']; ?>
&nbsp;</a>&nbsp;<?php endforeach; endif; unset($_from); ?>
		</div>
	</div>
	<div>
		<form action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=brand" method="post" name="form">     
        <div class="main">
			<?php $_from = $this->_tpl_vars['brandlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pbrands']):
?>
			<div class="letter">
				<b class="orange01"><?php echo $this->_tpl_vars['pbrands']['mark']; ?>
</b>
				<span class="fr"><a href="#top" target="_self" class="gray01">返回顶部↑</a></span>
			</div>
			<div class="brandlist clearfix">
				<div class="brandlist_left">
					<div class="pbrandname">
						<ul>
							<li>
								<?php if ($this->_tpl_vars['pbrands']['b_pic'] <> ""): ?>
								<img src="<?php echo $this->_tpl_vars['pbrands']['b_pic']; ?>
">
								<?php else: ?>
								<?php endif; ?>
								<b><?php echo $this->_tpl_vars['pbrands']['b_name']; ?>
</b>
								<div class="brandmenu">
									<a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=brand&a=add&id=<?php echo $this->_tpl_vars['pbrands']['b_id']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
" class="add">添加子品牌</a> | <a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=brand&a=edit&id=<?php echo $this->_tpl_vars['pbrands']['b_id']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
" class="edit">编辑</a> | <a href="javascript:if(confirm('确实要删除吗?'))location='<?php echo $this->_tpl_vars['adminpage']; ?>
?m=brand&a=del&id=<?php echo $this->_tpl_vars['pbrands']['b_id']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
'" class="del">删除</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="brandlist_right">
					<?php $_from = $this->_tpl_vars['pbrands']['brands_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['brands_list']):
?>
					<div class="brandname mt10">
						<b><?php echo $this->_tpl_vars['brands_list']['b_name']; ?>
</b>
						<div class="brandmenu"><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=brand&a=add&id=<?php echo $this->_tpl_vars['brands_list']['b_id']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
" class="add">添加车系</a> | <a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=brand&a=edit&id=<?php echo $this->_tpl_vars['brands_list']['b_id']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
" class="edit">编辑</a> <a href="javascript:if(confirm('确实要删除吗?'))location='<?php echo $this->_tpl_vars['adminpage']; ?>
?m=brand&a=del&id=<?php echo $this->_tpl_vars['brands_list']['b_id']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
'" class="del">删除</a>
						</div>
					</div>
					<div class="subbrandname">
						<ul class="clearfix">
							<?php $_from = $this->_tpl_vars['brands_list']['subbrands_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subbrands_list']):
?>
							<li><?php echo $this->_tpl_vars['subbrands_list']['b_name']; ?>

								<div class="brandmenu">
								<a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=brand&a=edit&id=<?php echo $this->_tpl_vars['subbrands_list']['b_id']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
" class="edit">编辑</a> <a href="javascript:if(confirm('确实要删除吗?'))location='<?php echo $this->_tpl_vars['adminpage']; ?>
?m=brand&a=del&id=<?php echo $this->_tpl_vars['subbrands_list']['b_id']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
'" class="del">删除</a>
                                <a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=carmodel&a=list&p_subbrand=<?php echo $this->_tpl_vars['subbrands_list']['b_id']; ?>
">查看</a>
								</div>
							</li>
							<?php endforeach; endif; unset($_from); ?>
						</ul>
					</div>
					<?php endforeach; endif; unset($_from); ?>
				</div>
			</div>
			<?php endforeach; endif; unset($_from); ?>
        </div>
		</form>
	</div>
</div>
</body>
</html>