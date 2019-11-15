<?php /* Smarty version 2.6.18, created on 2016-04-10 17:18:19
         compiled from default/default/shop_left.html */ ?>
				<div class="shopbox">
					<h3>经销商名片</h3>
					<div class="box2">
						<p class="f14 fb"><?php echo $this->_tpl_vars['shop']['company']; ?>
</p>
						<p class="mt10">联系人：<?php echo $this->_tpl_vars['shop']['nicname']; ?>
</p>
						<p class="mt10">手机：<?php echo $this->_tpl_vars['shop']['mobilephone']; ?>
</p>
						<p class="mt10">地址：<?php echo $this->_tpl_vars['shop']['address']; ?>
</p>
					</div>
				</div>
				<div class="shopbox mt10">
					<h3>销售代表</h3>
					<div class="box2">
						<ul class="shop_dealerlist clearfix">
							<?php $_from = $this->_tpl_vars['dealerlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dealer']):
?>
							<li><img src="<?php echo $this->_tpl_vars['dealer']['pic']; ?>
"><p class="mt5"><?php echo $this->_tpl_vars['dealer']['name']; ?>
</p><p><?php echo $this->_tpl_vars['dealer']['tel']; ?>
</p></li>
							<?php endforeach; endif; unset($_from); ?>
						</ul>
					</div>
				</div>