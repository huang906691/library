<?php /* Smarty version Smarty-3.1.6, created on 2015-10-14 10:36:26
         compiled from "F:/homework/library/library/Admin/View\BookType\booktype.html" */ ?>
<?php /*%%SmartyHeaderCode:14912561dbfaa7660d3-16765855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '679e94354cfbbc8af321bedb9f3b5668992f5dd6' => 
    array (
      0 => 'F:/homework/library/library/Admin/View\\BookType\\booktype.html',
      1 => 1444659627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14912561dbfaa7660d3-16765855',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type_name' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_561dbfaa82c21',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561dbfaa82c21')) {function content_561dbfaa82c21($_smarty_tpl) {?><html>
<head>
<title>图书馆管理系统</title>
<link href="<?php echo @CSS_URL;?>
style.css" rel="stylesheet">
<link rel="shortcut icon" href="<?php echo @IMG_URL;?>
/admin.ico" type="image/x-icon">
</head>
<body>

<table width="776" border="0" align="center" cellpadding="0" cellspacing="0" class="tableBorder">
  <tr>
    <td><?php echo $_smarty_tpl->getSubTemplate ("../Index/navigation.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td>
  </tr>
  <tr>
    <td valign="top" bgcolor="#FFFFFF"><table width="99%" height="510"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="tableBorder_gray">
  <tr>
    <td height="510" valign="top" style="padding:5px;"><table width="98%" height="487"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="22" valign="top" class="word_orange">当前位置：系统设置 &gt; 图书类型设置 &gt;&gt;</td>
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
      <a href="#" onClick="window.open('booktype_add.html','','width=292,height=175')">添加图书类型信息</a> </td>
  </tr>
</table>
 <table width="91%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="84%">&nbsp;      </td>  
  </tr>
</table>  
  <table width="91%"  border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bordercolordark="#D2E3E6" bordercolorlight="#FFFFFF">
  <tr align="center" bgcolor="#e3F4F7">
    <td width="84%">图书类型名称</td>
    <td width="8%">编辑</td>
    <td width="8%">删除</td>
  </tr>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['type_name']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
  <tr>
    <td style="padding:5px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['by_name'];?>
</td>
    <td align="center"><a  style="cursor:hand " onClick="window.open('<?php echo @__CONTROLLER__;?>
/bookTypeEdit/by_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['by_id'];?>
','','width=292,height=175')">编辑</a></td>
    <td align="center"><a href="<?php echo @__CONTROLLER__;?>
/delType/by_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['by_id'];?>
">删除</a></td>
  </tr>
<?php } ?>
<table><tr><td><?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>
</td></tr></table>

</table>
 
    </table>

</td>
  </tr>
</table>
<?php echo $_smarty_tpl->getSubTemplate ("../Index/copyright.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</td>
  </tr>
</table>
</body>
</html>
<?php }} ?>