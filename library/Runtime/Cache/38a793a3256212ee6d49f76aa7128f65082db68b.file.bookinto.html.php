<?php /* Smarty version Smarty-3.1.6, created on 2015-10-14 11:03:03
         compiled from "F:/homework/library/library/Admin/View\Book\bookinto.html" */ ?>
<?php /*%%SmartyHeaderCode:21484561dc5e7479b17-59355844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38a793a3256212ee6d49f76aa7128f65082db68b' => 
    array (
      0 => 'F:/homework/library/library/Admin/View\\Book\\bookinto.html',
      1 => 1444659581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21484561dc5e7479b17-59355844',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_561dc5e750d59',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561dc5e750d59')) {function content_561dc5e750d59($_smarty_tpl) {?><html>
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
        <td height="22" valign="top" class="word_orange">当前位置：图书管理 &gt; 图书档案管理 &gt;&gt;导入图书信息</td>
      </tr>
      <tr>
        <td height="176" align="center" valign="top">
          <table width="100%" height="71"  border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="17%" height="31" align="center">选择文件</td>
              <td width="83%" align="left"><form name="form1" enctype="multipart/form-data" method="post" action="bookinto_do.php">
                <input type="file" name="file">
                <input type="submit" name="Submit" value="导入信息">
              </form></td>
            </tr>
            <tr>
              <td height="40" align="center">导入说明</td>
              <td height="40" align="left" valign="top">1、导入要按照模板格式导入 [<a href="download/&#22270;&#20070;&#20449;&#24687;&#23548;&#20837;.xls">下载模板</a>]<br>
                2、首先把包含数据的EXCEL文件另存为csv格式；<br>
                3、csv文件第一行标题删除再行导入。</td>
            </tr>
          </table>
          </td>
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