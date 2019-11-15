<?php /* Smarty version 2.6.18, created on 2019-08-08 16:17:58
         compiled from default/default/foot.html */ ?>
<!--底部导航-->
<div class="footer" id="foot">
	<p class="tc">
		<?php $_from = $this->_tpl_vars['partlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['part']):
?>
		<a href="<?php echo $this->_tpl_vars['weburl']; ?>
/<?php echo $this->_tpl_vars['part']['c_url']; ?>
" title="<?php echo $this->_tpl_vars['part']['c_name']; ?>
" <?php if ($this->_tpl_vars['part']['c_target'] == 2): ?>target="_blank"<?php endif; ?>><?php echo $this->_tpl_vars['part']['c_name']; ?>
</a> | 
		<?php endforeach; endif; unset($_from); ?>
	</p>
	<p class="mt10"> Copyright  2013 <?php echo $this->_tpl_vars['setting']['copyright']; ?>
 版权所有. <?php echo $this->_tpl_vars['setting']['icp']; ?>
<!-- 保留本链接  <a href="http://www.urkeji.com/" id="qq853616368" target="_blank">网站制作</a>--></p>
	<p class="mt10"> 电话：<?php echo $this->_tpl_vars['setting']['tel']; ?>
 地址：<?php echo $this->_tpl_vars['setting']['address']; ?>
</p>
 </div>
 <div id="right-side" class="right-side">
    <ul>
    <li class="side-top w4"><a id="backtop" title="返回顶部" href="#top" style="display: block;">返回顶部</a></li>
  </ul>
 </div>
<!-- 版权 结束 -->