<?php /* Smarty version 2.6.18, created on 2015-10-21 19:30:05
         compiled from admin/keywords_list.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="static/css/admin/style.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="static/js/common.js"></script>
</head>

<body>
<div class="colorarea01">
  <div class="search clearfix">
    <div class="searchL">
      <ul class="menulist">
        <li><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=keywords_category&a=list" class="add">关键词分类</a> <a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=keywords&a=add" class="add">添加关键词</a></li>
      </ul>
    </div>
  </div>
  <form action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=keywords" method="post" name="form">
    <table cellspacing="0" cellpadding="0" width="100%"  class="listtable">
      <tr>
        <th>选择</th>
        <th>ID</th>
        <th>排序</th>
        <th align="left">名称</th>
        <th>分类</th>
        <th width='120'>操作</th>
      </tr>
      <?php $_from = $this->_tpl_vars['keywordslist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['keywords']):
?>
      <tr>
        <td align="center" width="30"><input type="checkbox" name="bulkid[]" value="<?php echo $this->_tpl_vars['keywords']['id']; ?>
"></td>
        <td align="center" width="30"><?php echo $this->_tpl_vars['keywords']['id']; ?>
</td>
        <td align="center" width="50"><input type="text" size="5" name="orderid[<?php echo $this->_tpl_vars['keywords']['id']; ?>
]" value="<?php echo $this->_tpl_vars['keywords']['orderid']; ?>
" class="ip01"/></td>
        <td align="left"><?php echo $this->_tpl_vars['keywords']['keywords']; ?>
</td>
        <td align="center"><?php echo $this->_tpl_vars['keywords']['catname']; ?>
</td>
        <td align="center"  class="rightmenu"><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=keywords&a=edit&id=<?php echo $this->_tpl_vars['keywords']['id']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
" class="edit">编辑</a> | <a href="javascript:if(confirm('确实要删除吗?'))location='<?php echo $this->_tpl_vars['adminpage']; ?>
?m=keywords&a=del&id=<?php echo $this->_tpl_vars['keywords']['id']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
'" class="del">删除</a></td>
      </tr>
      <?php endforeach; endif; unset($_from); ?>
      <tr>
        <td colspan="6" class="buttontd"><a href="javascript:javascript:selectAll();" title="请选择后操作">全选</a> <a href="javascript:submitForm('<?php echo $this->_tpl_vars['adminpage']; ?>
?m=keywords&a=bulkdel&page=<?php echo $this->_tpl_vars['page']; ?>
','删除');" title="请选择后操作">删除</a> <a href="javascript:submitForm('<?php echo $this->_tpl_vars['adminpage']; ?>
?m=keywords&a=bulksort&page=<?php echo $this->_tpl_vars['page']; ?>
','更新排序');" title="请选择后操作">更新排序</a></td>
      </tr>
    </table>
  </form>
  <div class="listpage"><?php echo $this->_tpl_vars['button_basic']; ?>
<?php echo $this->_tpl_vars['button_select']; ?>
</div>
</div>
</body>
</html>