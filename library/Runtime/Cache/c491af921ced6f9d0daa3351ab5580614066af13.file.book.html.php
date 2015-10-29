<?php /* Smarty version Smarty-3.1.6, created on 2015-10-14 11:02:58
         compiled from "F:/homework/library/library/Admin/View\Book\book.html" */ ?>
<?php /*%%SmartyHeaderCode:22303561dbfb72b6ac9-34524157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c491af921ced6f9d0daa3351ab5580614066af13' => 
    array (
      0 => 'F:/homework/library/library/Admin/View\\Book\\book.html',
      1 => 1444791777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22303561dbfb72b6ac9-34524157',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_561dbfb73b1b4',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561dbfb73b1b4')) {function content_561dbfb73b1b4($_smarty_tpl) {?><html>
<head>
<title>图书馆管理系统</title>
<link href="<?php echo @CSS_URL;?>
style.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="shortcut icon" href="<?php echo @IMG_URL;?>
/admin.ico" type="image/x-icon">
</head>
<body>
<table width="778" border="0" align="center" cellpadding="0" cellspacing="0" class="tableBorder">
  <tr>
    <td>
    <?php echo $_smarty_tpl->getSubTemplate ("../Index/navigation.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</td>
	</tr>
	<td>
	<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" bgcolor="#FFFFFF"><table width="99%" height="510"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="tableBorder_gray">
  <tr>
    <td height="510" valign="top" style="padding:5px;"><table width="98%"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="22" valign="top" class="word_orange">当前位置：图书管理 &gt; 图书档案管理 &gt;&gt;</td>
      </tr>
      <tr>
        <td align="center" valign="top">
          <table width="100%" height="30"  border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="36" align="center"></td>
            </tr>
          </table>
          <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
      <a href="<?php echo @__CONTROLLER__;?>
/bookAdd">添加图书信息</a> <a href="bookinto.html">导入图书信息</a></td>
  </tr>
</table>
 <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="78%">&nbsp;      </td>  
  </tr>
</table>  
  <table width="98%"  border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bordercolordark="#D2E3E6" bordercolorlight="#FFFFFF">
  <tr align="center" bgcolor="#e3F4F7">
    <td width="13%">条形码</td>  
    <td width="26%">图书名称</td>
    <td width="10%">图书类型</td>
    <td width="14%">出版社</td>
    <td width="12%">书架</td>
    <td width="5%">库存</td>
    <td width="11%" colspan="2">操作</td>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
  <tr>
    <td style="padding:5px;">&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['bo_code'];?>
</td>  
    <td style="padding:5px;"><a href="<?php echo @__CONTROLLER__;?>
/bookInfo/bo_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['bo_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['bo_name'];?>
</a></td>
    <td style="padding:5px;" align="center">&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['by_name'];?>
</td>  
    <td style="padding:5px;">&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['pr_name'];?>
</td>  
    <td style="padding:5px;">&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['ca_name'];?>
</td>  
    <td style="padding:5px;" align="center">&nbsp;<font style="color:red;"><?php echo $_smarty_tpl->tpl_vars['v']->value['bo_stock'];?>
</font></td>  
    <td align="center"><a href="<?php echo @__CONTROLLER__;?>
/bookEdit/bo_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['bo_id'];?>
">修改</a></td>
    <td align="center"><a onClick="javascript:return confirm('确定删除该信息吗？无法恢复！');" href="<?php echo @__CONTROLLER__;?>
/bookDel/bo_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['bo_id'];?>
">删除</a></td>
  
 <?php } ?>
</table>
<table></tr><tr><td><?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>
</td></tr></table>

    </table>
</td>
  </tr>
</table><?php echo $_smarty_tpl->getSubTemplate ("../Index/copyright.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td>
  </tr>
</table>
</td>
  </tr>
</table>
</body>
</html>
<?php }} ?>