<?php /* Smarty version Smarty-3.1.6, created on 2015-10-14 10:36:22
         compiled from "F:/homework/library/library/Admin/View\Manager\manager.html" */ ?>
<?php /*%%SmartyHeaderCode:25027561dbfa6c3f1f0-51974374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0c5edae6b02b134344bbd5c45ee9e16fab69dfe' => 
    array (
      0 => 'F:/homework/library/library/Admin/View\\Manager\\manager.html',
      1 => 1444660036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25027561dbfa6c3f1f0-51974374',
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
  'unifunc' => 'content_561dbfa6cfd5a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561dbfa6cfd5a')) {function content_561dbfa6cfd5a($_smarty_tpl) {?><head>
<title>管理员信息</title>
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
        <td height="22" valign="top" class="word_orange">当前位置：系统设置 &gt; 管理员设置 &gt;&gt;&gt;</td>
      </tr>
      <tr>
        <td align="center" valign="top">

 <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="84%">&nbsp;      </td>
<td width="16%">
      <a href="" onClick="window.open('manager_add.html','','width=292,height=175')">添加管理员信息</a> </td>	  
  </tr>
</table>  
  <table width="91%"  border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bordercolordark="#D2E3E6" bordercolorlight="#FFFFFF">
  <tr align="center" bgcolor="#e3F4F7">
    <td width="26%">管理员名称</td>
    <td width="12%">系统设置</td>
    <td width="12%">读者管理</td>
    <td width="12%">图书档案管理</td>
    <td width="11%">图书借还</td>
    <td width="11%">系统查询</td>
    <td width="8%">权限设置</td>
    <td width="8%">操作</td>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['name']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
  <tr>
  
    <td style="padding:5px;text-align:center;"><?php echo $_smarty_tpl->tpl_vars['v']->value['ma_name'];?>
</td>
  
    <td align="center"><input name="checkbox" type="checkbox" class="noborder" value="checkbox"></td>
    <td align="center"><input name="checkbox" type="checkbox" class="noborder" value="checkbox"></td>
    <td align="center"><input name="checkbox" type="checkbox" class="noborder" value="checkbox"></td>
    <td align="center"><input name="checkbox" type="checkbox" class="noborder" value="checkbox"></td>
    <td align="center"><input name="checkbox" type="checkbox" class="noborder" value="checkbox"></td>
    <td align="center"><a href="#" onClick="window.open('<?php echo @__CONTROLLER__;?>
/managerModify/ma_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['ma_id'];?>
','','width=292,height=175')">权限设置</a></td>
    <td align="center"><a href="<?php echo @__CONTROLLER__;?>
/delManager/ma_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['ma_id'];?>
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
<?php }} ?>