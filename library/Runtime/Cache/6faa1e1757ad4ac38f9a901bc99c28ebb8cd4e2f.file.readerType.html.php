<?php /* Smarty version Smarty-3.1.6, created on 2015-10-20 21:45:39
         compiled from "F:/homework/library/library/Admin/View\Reader\readerType.html" */ ?>
<?php /*%%SmartyHeaderCode:80656264583e013d8-04924106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6faa1e1757ad4ac38f9a901bc99c28ebb8cd4e2f' => 
    array (
      0 => 'F:/homework/library/library/Admin/View\\Reader\\readerType.html',
      1 => 1444659869,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80656264583e013d8-04924106',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5626458401e37',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5626458401e37')) {function content_5626458401e37($_smarty_tpl) {?><html>
<head>
<title>读者类型信息</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="<?php echo @CSS_URL;?>
style.css" rel="stylesheet">
<link rel="shortcut icon" href="<?php echo @IMG_URL;?>
/admin.ico" type="image/x-icon">
</head>
<body>
<table width="776" border="0" align="center" cellpadding="0" cellspacing="0" class="tableBorder">
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
    <td height="510" valign="top" style="padding:5px;"><table width="98%" height="487"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="22" valign="top" class="word_orange">当前位置：读者管理 &gt; 读者类型管理 &gt;&gt;&gt;</td>
      </tr>
      <tr>
        <td align="center" valign="top">
         
 
 
<table width="91%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="right"><a href="#" onClick="window.open('readerType_add.html','','width=292,height=175')">添加读者类型信息</a> </td>
  </tr>
</table>
  <table width="91%"  border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bordercolordark="#D2E3E6" bordercolorlight="#FFFFFF">
  <tr align="center" bgcolor="#e3F4F7">
    <td width="35%">读者类型名称</td>
    <td width="35%">可借数量</td>
    <td width="7%">编辑</td>
    <td width="7%">删除</td>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['name']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
  <tr>
    <td style="padding:5px;">&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['rt_name'];?>
</td>
    <td style="padding:5px;">&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['rt_number'];?>
</td>
    <td align="center"><a style="cursor:hand " onClick="window.open('<?php echo @__CONTROLLER__;?>
/readerTypeEdit/rt_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['rt_id'];?>
','','width=292,height=175')">编辑</a></td>
    <td align="center"><a href="<?php echo @__CONTROLLER__;?>
/delReaderType/rt_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['rt_id'];?>
">删除</a></td>
  </tr>
  <?php } ?> 
</table>
 
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