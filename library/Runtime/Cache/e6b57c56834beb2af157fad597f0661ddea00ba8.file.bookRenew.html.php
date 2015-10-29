<?php /* Smarty version Smarty-3.1.6, created on 2015-10-14 10:36:58
         compiled from "F:/homework/library/library/Admin/View\Borrow\bookRenew.html" */ ?>
<?php /*%%SmartyHeaderCode:3136561dbfca096923-20970068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6b57c56834beb2af157fad597f0661ddea00ba8' => 
    array (
      0 => 'F:/homework/library/library/Admin/View\\Borrow\\bookRenew.html',
      1 => 1444659657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3136561dbfca096923-20970068',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_561dbfca1a548',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561dbfca1a548')) {function content_561dbfca1a548($_smarty_tpl) {?><html>
<head>
<title>图书馆管理系统</title>
<link href="<?php echo @CSS_URL;?>
style.css" rel="stylesheet">
<link rel="shortcut icon" href="<?php echo @IMG_URL;?>
/admin.ico" type="image/x-icon">
</head>
<body>
<script language="javascript">
		function checkreader(form){
			if(form.barcode.value==""){
				alert("请输入读者条形码!");form.barcode.focus();return;
			}
			form.submit();
		}
</script>
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
        <td align="left" valign="top">
		<form name="form1" method="post" action="">
		  <table width="96%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="30"><span class="word_orange">&nbsp;当前位置：图书借还 &gt; 图书续借&gt;&gt; </span></td>
          </tr>
        </table>
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="tableBorder_gray">
   <tr>
     <td valign="top"><table width="100%" border="0" cellpadding="02" cellspacing="2" bordercolor="#AABBBD">
       <tr>
         <td width="739" height="34" background="<?php echo @IMG_URL;?>
bookxj.gif">&nbsp;</td>
       </tr>
       <tr>
         <td valign="top" bgcolor="#D2E5F1">

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
                     <td width="24%" height="25" bgcolor="#F1F9FF">图书名称</td>
                     <td width="12%" bgcolor="#F1F9FF">借阅时间</td>
                     <td width="13%" bgcolor="#F1F9FF">应还时间</td>
                     <td width="14%" bgcolor="#F1F9FF">出版社</td>
                     <td width="12%" bgcolor="#F1F9FF">书架</td>
                     <td bgcolor="#F1F9FF">定价(元)</td>
                     <td width="12%" bgcolor="#F1F9FF"><input name="Button22" type="button" class="btn_grey" value="完成续借" onClick="window.location.href='bookRenew.html'"></td>
                   </tr>
                   <tr>
                     <td height="25" style="padding:5px;">&nbsp;<<?php ?>?php echo $info1[bookname];?<?php ?>></td>
                     <td style="padding:5px;">&nbsp;<<?php ?>?php echo $info1[borrowTime];?<?php ?>></td>
                     <td style="padding:5px;">&nbsp;<<?php ?>?php echo $T=$info1[backTime];?<?php ?>></td>
                     <td align="center">&nbsp;<<?php ?>?php echo $info1[publishing];?<?php ?>></td>
                     <td align="center">&nbsp;<<?php ?>?php echo $info1[bookcase];?<?php ?>></td>
                     <td width="13%" align="center">&nbsp;<<?php ?>?php echo $info1[price];?<?php ?>></td>
                     <td width="12%" align="center"><a href="borrow_oncemore.php?barcode=<<?php ?>?php echo $info[barcode];?<?php ?>>&borrid=<<?php ?>?php echo $info1[id];?<?php ?>>&backTime=<<?php ?>?php echo $info1[backTime];?<?php ?>>">续借</a>&nbsp;</td>
                   </tr>
                 </table>                 </td>
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