<?php /* Smarty version Smarty-3.1.6, created on 2015-10-20 21:45:41
         compiled from "F:/homework/library/library/Admin/View\Reader\reader.html" */ ?>
<?php /*%%SmartyHeaderCode:7015562645855327c1-77393068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7396025aacd1cceebd15cd5f50f7dc733ba2ba6' => 
    array (
      0 => 'F:/homework/library/library/Admin/View\\Reader\\reader.html',
      1 => 1444714255,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7015562645855327c1-77393068',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'read_info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_562645856a25f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562645856a25f')) {function content_562645856a25f($_smarty_tpl) {?><html>
<head>
<title>读者信息</title>
<link href="<?php echo @CSS_URL;?>
style.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
    <td height="510" align="center" valign="top" style="padding:5px;"><table width="98%" height="487"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="22" valign="top" class="word_orange">当前位置：读者管理 &gt; 读者档案管理 &gt;&gt;</td>
      </tr>
      <tr>
        <td align="center" valign="top">
 <table width="100%" height="30"  border="0" cellpadding="0" cellspacing="0">
          </table>

<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="87%">&nbsp;      </td>
<td width="13%">
      <a href="<?php echo @__CONTROLLER__;?>
/readerAdd">添加读者信息</a></td>	  
  </tr>
</table>  
  <table width="100%"  border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bordercolordark="#D2E3E6" bordercolorlight="#FFFFFF">
  <tr align="center" bgcolor="#e3F4F7">
    <td width="10%" height="30" style="color:#1491FD;">条形码</td>  
    <td width="8%" style="color:#1491FD;">姓名</td>
    <td width="8%" style="color:#1491FD;">读者类型</td>
    <td width="10%" style="color:#1491FD;">证件类型</td>
    <td width="15%" style="color:#1491FD;">证件号码</td>
    <td width="15%" style="color:#1491FD;">电话</td>
    <td width="15%" style="color:#1491FD;">E-mail</td>
    <td width="7%" style="color:#1491FD;">借阅数</td>
    <td colspan="2" style="color:#1491FD;">操作</td>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['read_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
 <tr>
    <td style="padding:5px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['re_code'];?>
</td>  
    <td style="padding:5px;text-align: center;"><a href="<?php echo @__CONTROLLER__;?>
/readerInfo/re_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['re_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['re_name'];?>
</a></td>
    <td style="padding:5px;text-align: center;"><?php echo $_smarty_tpl->tpl_vars['v']->value['rt_name'];?>
</td>
    <td align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['pa_type'];?>
</td>
    <td align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['re_number'];?>
</td>
    <td>&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['re_tel'];?>
</td>
    <td align="left">&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['re_email'];?>
</td>
    <td align="left">&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['re_num'];?>
</td>
    <td width="6%" align="center"><a href="<?php echo @__CONTROLLER__;?>
/readerModify/re_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['re_id'];?>
">修改</a></td>
    <td width="5%" align="center"><a href="<?php echo @__CONTROLLER__;?>
/readerDel/re_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['re_id'];?>
">删除</a></td>
  </tr>
  <?php } ?>
   
 </table>
<table><tr><td><?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>
</td></tr></table>
    </table></td>
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