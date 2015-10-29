<?php /* Smarty version Smarty-3.1.6, created on 2015-10-14 10:37:00
         compiled from "F:/homework/library/library/Admin/View\Borrow\bookBack.html" */ ?>
<?php /*%%SmartyHeaderCode:26489561dbfcc781e74-88539319%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48bbd46ef83e6963b16b6d2c2ee35d53aa39e397' => 
    array (
      0 => 'F:/homework/library/library/Admin/View\\Borrow\\bookBack.html',
      1 => 1444659646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26489561dbfcc781e74-88539319',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_561dbfcc88c8d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561dbfcc88c8d')) {function content_561dbfcc88c8d($_smarty_tpl) {?><html>
<head>
<link href="<?php echo @CSS_URL;?>
style.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>图书馆管理系统</title>
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
        <td align="center" valign="top">
		<script language="javascript">
		function checkreader(form){
			if(form.barcode.value==""){
				alert("请输入读者条形码!");form.barcode.focus();return;
			}
			form.submit();
		}
		</script>
<form name="form1" method="post" action="">
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="tableBorder_gray">
   <tr>
     <td valign="top"><table width="100%" border="0" cellpadding="02" cellspacing="2" bordercolor="#E3F4F7">
       <tr>
         <td height="33" background="<?php echo @IMG_URL;?>
bookgh.gif">&nbsp;</td>
       </tr>
       <tr>
         <td valign="top" bgcolor="#D2E6F1">
		 <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
           <tr>
             <td width="33%"><table width="100%" height="74" border="0" cellpadding="0" cellspacing="0">
               <tr>
                 <td height="27" colspan="2" align="center"><table width="90%" height="21" border="0" cellpadding="0" cellspacing="0">
                   <tr>
                     <td width="132" background="<?php echo @IMG_URL;?>
bg_line.gif">&nbsp;</td>
                     <td>&nbsp;</td>
                   </tr>
                 </table></td>
               </tr>
               <tr>
                 <td width="8%" height="27">&nbsp;</td>
                 <td width="92%">读者条形码：</td>
               </tr>
               <tr>
                 <td height="27" colspan="2" align="center"><input name="barcode" type="text" id="barcode" value="" size="24">
                   &nbsp;
                   <input name="Button" type="button" class="btn_grey" value="确定" onClick="checkreader(form1)"></td>
               </tr>
             </table></td>
             <td width="1%" align="center" valign="bottom"><img src="<?php echo @IMG_URL;?>
borrow_fg.gif" width="18" height="111"></td>
             <td width="66%" align="right">
			 <table width="96%" border="0" cellpadding="0" cellspacing="0">
               <tr>
                 <td height="27">姓&nbsp;&nbsp;&nbsp;&nbsp;名：
                       <input name="readername" type="text" id="readername" value=""></td>
                 <td>性&nbsp;&nbsp;&nbsp;&nbsp;别：
                   <input name="sex" type="text" id="sex" value=""></td>
               </tr>
               <tr>
                 <td height="27">证件类型：
                   <input name="paperType" type="text" id="paperType" value=""></td>
                 <td>证件号码：
                   <input name="paperNo" type="text" id="paperNo" value=""></td>
               </tr>
               <tr>
                 <td height="27">读者类型：
                   <input name="readerType" type="text" id="readerType" value=""></td>
                 <td>可借数量：
                   <input name="number" type="text" id="number" value="" size="17">
                   册
                   &nbsp;</td>
               </tr>
             </table>			 </td>
           </tr>
         </table>		 </td>
       </tr>
       <tr>
         <td valign="top" bgcolor="#D2E5F1"><table width="100%" height="35" border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bordercolorlight="#FFFFFF" bordercolordark="#D2E3E6" bgcolor="#FFFFFF">
                   <tr align="center" bgcolor="#e3F4F7">
                     <td width="24%" height="25" bgcolor="#F0FAFB">图书名称</td>
                     <td width="12%" bgcolor="#F0FAFB">借阅时间</td>
                     <td width="13%" bgcolor="#F0FAFB">应还时间</td>
                     <td width="14%" bgcolor="#F0FAFB">出版社</td>
                     <td width="12%" bgcolor="#F0FAFB">书架</td>
                     <td bgcolor="#F0FAFB">定价(元)</td>
                     <td width="12%" bgcolor="#F0FAFB"><input name="Button22" type="button" class="btn_grey" value="完成归还" onClick="window.location.href='bookBack.html'"></td>
                   </tr>
                   <tr>
                     <td height="25" style="padding:5px;">&nbsp;<<?php ?>?php echo $info[bookname];?<?php ?>>
                       <input name="bookid" type="hidden" id="bookid" value="<<?php ?>?php echo $info[bookid]?<?php ?>>"></td>
                     <td style="padding:5px;">&nbsp;<<?php ?>?php echo $info[borrowTime];?<?php ?>></td>
                     <td style="padding:5px;">&nbsp;<<?php ?>?php echo $info[backTime];?<?php ?>></td>
                     <td align="center">&nbsp;<<?php ?>?php echo $info[pubname];?<?php ?>></td>
                     <td align="center">&nbsp;<<?php ?>?php echo $info[bookcase];?<?php ?>></td>
                     <td width="13%" align="center">&nbsp;<<?php ?>?php echo $info[price];?<?php ?>></td>
                     <td width="12%" align="center"><a href="?action=back&borrid=<<?php ?>?php echo $info[borrid];?<?php ?>>&barcode=<<?php ?>?php echo $info[barcode];?<?php ?>>">归还</a>&nbsp;</td>
                   </tr>
                 </table>
                 </td>
       </tr>
     </table></td>
   </tr>
</table>
 </form> </td>
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