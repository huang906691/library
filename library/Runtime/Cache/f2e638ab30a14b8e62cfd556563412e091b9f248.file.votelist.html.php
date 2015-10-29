<?php /* Smarty version Smarty-3.1.6, created on 2015-10-20 21:45:36
         compiled from "F:/homework/library/library/Admin/View\Vote\votelist.html" */ ?>
<?php /*%%SmartyHeaderCode:1804956264580963d81-15610177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2e638ab30a14b8e62cfd556563412e091b9f248' => 
    array (
      0 => 'F:/homework/library/library/Admin/View\\Vote\\votelist.html',
      1 => 1444659816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1804956264580963d81-15610177',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56264580cbe09',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56264580cbe09')) {function content_56264580cbe09($_smarty_tpl) {?><html>
<head>
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
    <td height="510" valign="top" style="padding:5px;"><table width="100%" height="487"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="22" valign="top" class="word_orange">当前位置：系统设置 &gt; 调查设置 &gt;&gt;</td>
      </tr>
      <tr>
        <td align="center" valign="top"><strong>
          <form method="POST" action="Votelist.php?action=set">
            <p align="center"><strong>管理选项：</strong><a href="<?php echo @__CONTROLLER__;?>
/voteAdd">添加新调查</a></p>
            <table width="746" border="0" align="center" cellpadding="0" cellspacing="2" Class="border">
              <tr bgcolor="#e3F4F7" class="title">
                <td width="56" height="25" align="center">选择</td>
                <td width="56" align="center">ID</td>
                <td width="517" align="center">主题</td>
                <td width="107" align="center">操作</td>
              </tr>
              <tr bgcolor="#FFFFFF" class="tdbg">
                <td width="56" height="22" align="center"><input name="id" type="radio" value=<<?php ?>?php echo $rs[id]?<?php ?>></td>
                <td width="56" height="22" align="center"></td>
                <td height="22">&nbsp;</td>
                <td width="107" height="22" align="center"><a href="VoteModify.php?id=<<?php ?>?php echo $rs[id]?<?php ?>>">修改</a> <a href="?action=del&id=<<?php ?>?php echo $rs[id]?<?php ?>>">删除</a></td>
              </tr>
              
              <tr class="tdbg">
                <td colspan=4 align=center>
                <input type="submit" value="将选定的调查设为最新调查" name="submit">
                </td></tr>
            </table>
          </form>
        </strong></td>
      </tr>
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