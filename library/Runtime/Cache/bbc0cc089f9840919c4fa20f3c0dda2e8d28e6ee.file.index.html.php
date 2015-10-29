<?php /* Smarty version Smarty-3.1.6, created on 2015-10-14 10:32:39
         compiled from "F:/homework/library/library/Admin/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:6538561dbec700fde7-51138172%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbc0cc089f9840919c4fa20f3c0dda2e8d28e6ee' => 
    array (
      0 => 'F:/homework/library/library/Admin/View\\Index\\index.html',
      1 => 1444659678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6538561dbec700fde7-51138172',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'book_info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_561dbec70fb95',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561dbec70fb95')) {function content_561dbec70fb95($_smarty_tpl) {?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>图书馆管理系统</title>
<link href="<?php echo @CSS_URL;?>
style.css" rel="stylesheet">
<link rel="shortcut icon" href="<?php echo @IMG_URL;?>
/admin.ico" type="image/x-icon">
</head>
<table width="776" border="0" align="center" cellpadding="0" cellspacing="0" class="tableBorder">
  <tr>
    <td><?php echo $_smarty_tpl->getSubTemplate ("./navigation.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td>
  </tr>
	<td bgcolor="#FFFFFF">
	<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" bgcolor="#FFFFFF"><table width="100%" height="510"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="tableBorder_gray">
  <tr>
    <td align="center" valign="top" style="padding:5px;"><table width="738"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="148" valign="top">
        <table width="738"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="753" height="44" background="<?php echo @IMG_URL;?>
main_booksort.gif">&nbsp;</td>
          </tr>
          <tr>
            <td height="72" valign="top" background="<?php echo @IMG_URL;?>
main_booksort_1.gif"><table width="740"  border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bordercolordark="#D2E3E6" bordercolorlight="#FFFFFF">
              <tr align="center">
                <td width="4%" height="30" style="color:#1491FD;">排名</td>
                <td width="10%" style="color:#1491FD;">图书条形码</td>
                <td width="22%" style="color:#1491FD;">图书名称</td>
                <td width="11%" style="color:#1491FD;">图书类型</td>
                <td width="9%" style="color:#1491FD;">书架</td>
                <td width="13%" style="color:#1491FD;">出版社</td>
                <td width="15%" style="color:#1491FD;">作者</td>
                <td width="8%" style="color:#1491FD;">定价(元)</td>
                <td width="8%" style="color:#1491FD;">借阅次数</td>
              </tr>
          <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['book_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>
              <tr>
                <td height="25" align="center"><?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
</td>
                <td style="padding:5px;">&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['bo_code'];?>
</td>
                <td style="padding:5px;text-align:center;"><a href="<?php echo @__MODULE__;?>
/Book/bookInfo/bo_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['bo_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['bo_name'];?>
</a></td>
                <td style="padding:5px;text-align:center;"><?php echo $_smarty_tpl->tpl_vars['v']->value['by_name'];?>
</td>
                <td align="center">&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['ca_name'];?>
</td>
                <td align="center">&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['pr_name'];?>
</td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['bo_author'];?>
</td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['bo_price'];?>
</td>
                <td align="center"><font style="color:red"><?php echo $_smarty_tpl->tpl_vars['v']->value['bo_borrowtimes'];?>
</font></td>
              </tr>
          <?php } ?>
            </table></td>
          
          </tr>
          <tr>
            <td height="19" background="<?php echo @IMG_URL;?>
main_booksort_2.gif">&nbsp;</td>
          </tr>
        </table>
          </td>
      </tr>
      <tr align="center"><td><?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>
</td></tr>
    </table>
      <p>&nbsp;</p></td>
  </tr>
</table></td>
  </tr>
</table>
<?php echo $_smarty_tpl->getSubTemplate ("./copyright.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td>
  </tr>
</table>
</html><?php }} ?>