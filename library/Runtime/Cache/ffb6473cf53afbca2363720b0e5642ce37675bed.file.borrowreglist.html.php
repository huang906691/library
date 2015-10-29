<?php /* Smarty version Smarty-3.1.6, created on 2015-10-14 10:36:43
         compiled from "F:/homework/library/library/Admin/View\Borrow\borrowreglist.html" */ ?>
<?php /*%%SmartyHeaderCode:14956561dbfbba2c767-72860996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffb6473cf53afbca2363720b0e5642ce37675bed' => 
    array (
      0 => 'F:/homework/library/library/Admin/View\\Borrow\\borrowreglist.html',
      1 => 1444659662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14956561dbfbba2c767-72860996',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_561dbfbbad81e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561dbfbbad81e')) {function content_561dbfbbad81e($_smarty_tpl) {?><html>
<head>
<title>图书馆管理系统</title>
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
    <td valign="top" bgcolor="#FFFFFF"><table width="100%" height="506"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="tableBorder_gray">
  <tr>
    <td colspan="2" align="center" valign="top" style="padding:5px;">      <table width="100%" height="458"  border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td align="center" valign="top"><table width="719"  height="37" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td background="<?php echo @IMG_URL;?>
dangan.gif">&nbsp;</td>
                </tr>
              </table>
                <table width="100%" height="25"  border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="25" align="center"><div align="left">显示条件：<a href="?" >全部</a> <a href="?zhuangtai=0">待审核</a> <a href="?zhuangtai=1">已通过</a> <a href="?zhuangtai=-1">未通过</a></div></td>
                  </tr>
                </table>
    <table width="100%" height="30"  border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="36" align="center">暂无图书借阅申请信息！</td>
                  </tr>
                </table>
    <table width="100%"  border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bordercolordark="#D2E3E6" bordercolorlight="#FFFFFF">
                  <tr align="center" bgcolor="#D0E9F8">
                    <td width="17%">条形码</td>
                    <td width="14%">图书名称</td>
                    <td width="19%">申请人</td>
                    <td width="15%">申请提交时间</td>
                    <td width="15%">处理状态</td>
                    <td colspan="3">管理</td>
                  </tr>
                <tr>
                    <td style="padding:5px;"></td>
                    <td style="padding:5px;"><a href="book_view.php?id=<<?php ?>?php echo $row[id]; ?<?php ?>>"></a></td>
                    <td style="padding:5px;"></td>
                    <td style="padding:5px;">
                      <div align="center"></div></td>
                    <td style="padding:5px;"><div align="center">
                      </div></td>
                    <td width="7%" style="padding:5px;"><div align="center"><a href="?action=ok&id=<<?php ?>?php echo  $row[id] ?<?php ?>>">同意</a> </div></td>
                    <td width="5%" style="padding:5px;"><a href="?action=no&id=<<?php ?>?php echo  $row[id] ?<?php ?>>">拒绝</a></td>
                    <td width="8%" style="padding:5px;"><a href="?action=del&id=<<?php ?>?php echo  $row[id] ?<?php ?>>">删除</a></td>
                  </tr>
                </table>
               
    </table></td>
    </tr>
</table>
    <?php echo $_smarty_tpl->getSubTemplate ("../Index/copyright.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td>
  </tr>
</table>
</td>
  </tr>
</table>
</body>
</html>
<?php }} ?>