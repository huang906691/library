<?php /* Smarty version Smarty-3.1.6, created on 2015-10-14 10:36:51
         compiled from "F:/homework/library/library/Admin/View\Borrow\bookBorrow.html" */ ?>
<?php /*%%SmartyHeaderCode:30773561dbfc3088978-87186303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56f47e202b7c92a647eff55131c30970cc7b9589' => 
    array (
      0 => 'F:/homework/library/library/Admin/View\\Borrow\\bookBorrow.html',
      1 => 1444659652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30773561dbfc3088978-87186303',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_561dbfc319c50',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561dbfc319c50')) {function content_561dbfc319c50($_smarty_tpl) {?><html>
<head>
<title>图书馆管理系统</title>
<link href="<?php echo @CSS_URL;?>
style.css" rel="stylesheet">
<link rel="shortcut icon" href="<?php echo @IMG_URL;?>
/admin.ico" type="image/x-icon">
		<script language="javascript">
		function checkreader(form){
			if(form.barcode.value==""){
				alert("请输入读者条形码!");form.barcode.focus();return;
				}
				else
				{
				form.submit();
				}
		}
		function checkbook(form){
			if(form.barcode.value==""){
				alert("请输入读者条形码!");form.barcode.focus();return;
			}		
			if(form.inputkey.value==""){
				alert("请输入查询关键字!");form.inputkey.focus();return;
			}

			if(form.number.value-form.borrowNumber.value<=0){
				alert("您不能再借阅其他图书了!");return;
			}
        form.submit();
	   }
		</script>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("../Index/navigation.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<table width="776"  border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td valign="top" bgcolor="#FFFFFF"><table width="100%" height="509"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="tableBorder_gray">
  <tr>
    <td align="left" valign="top" style="padding:5px;"> &nbsp; <span class="word_orange">&nbsp;当前位置：图书借还 &gt; 图书借阅&gt;&gt; </span>      <table width="100%"  border="0" cellpadding="0" cellspacing="0">
	<form name="form1" method="post" action="">
        <tr>
          <td height="72" align="center" valign="top" background="<?php echo @IMG_URL;?>
main_booksort_1.gif" bgcolor="#F8BF73">
          <br>		  
          <table width="96%" border="0" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#9ECFEE" class="tableBorder_grey">
          <tr>
              <td height="33" valign="top" background="<?php echo @IMG_URL;?>
bookborr.gif">
                  <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  
				
                    <tr>
                      <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td height="33" background="<?php echo @IMG_URL;?>
bookborr.gif">&nbsp;</td>
                        </tr>
                      </table>
                        <table width="100%" height="21" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="24%" height="18" style="padding-left:7px;padding-top:7px;"><img src="<?php echo @IMG_URL;?>
bg_line.gif" width="132" height="20"></td>
                            <td width="76%" style="padding-top:7px;">读者条形码：
                              <input name="barcode" type="text" id="barcode" size="24" value="">
                            &nbsp;
                              <input name="Button" type="button" class="btn_grey" value="确定" onClick="checkreader(form1)"></td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td height="13" align="left" style="padding-left:7px;"><hr width="90%" size="1"></td>
                      </tr>
                    <tr>
                      <td align="center"><table width="96%" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td height="27">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：
                              <input name="readername" type="text" id="readername" value="">
                              <input name="readerid" type="hidden" id="readerid" value=""></td>
                            <td>性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别：
                              <input name="sex" type="text" id="sex" value=""></td>
                            <td>读者类型：
                              <input name="readerType" type="text" id="readerType" value=""></td>
                          </tr>
                          <tr>
                            <td height="27">证件类型：
                              <input name="paperType" type="text" id="paperType" value=""></td>
                            <td>证件号码：
                              <input name="paperNo" type="text" id="paperNo" value=""></td>
                            <td>可借数量：
                              <input name="number" type="text" id="number" value="" size="17">
                              册
                            &nbsp;</td>
                          </tr>
                      </table></td>
                    </tr>
                </table></td>
            </tr>
                 <tr>
                   <td height="32">&nbsp;添加的依据：
                     <input name="f" type="radio" class="noborder" value="barcode" checked>
                     图书条形码 &nbsp;&nbsp;
                     <input name="f" type="radio" class="noborder" value="bookname">
  图书名称&nbsp;&nbsp;
  <input name="inputkey" type="text" id="inputkey" size="50">
                     <input name="Submit" type="button" class="btn_grey" id="Submit" onClick="checkbook(form1);" value="确定">
                     <input name="operator" type="hidden" id="operator" value="">
    <input name="Button2" type="button" class="btn_grey" id="Button2" onClick="window.location.href='bookBorrow.php'" value="完成借阅">                   </td>
                 </tr> 
            <tr>
              <td valign="top" bgcolor="#D2E5F1" style="padding:5px"><table width="99%" border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bordercolorlight="#FFFFFF" bordercolordark="#9ECFEE" bgcolor="#FFFFFF">
                     <tr align="center" bgcolor="#E2F4F6">
                       <td width="29%" height="25">图书名称</td>
                       <td width="12%">借阅时间</td>
                       <td width="14%">应还时间</td>
                       <td width="17%">出版社</td>
                       <td width="14%">书架</td>
                       <td colspan="2">定价(元)</td>
                     </tr>
                     <tr>
                       <td height="25" style="padding:5px;">&nbsp;<<?php ?>?php echo $info1[bookname];?<?php ?>></td>
                       <td style="padding:5px;">&nbsp;<<?php ?>?php echo $info1[borrowTime];?<?php ?>></td>
                       <td style="padding:5px;">&nbsp;<<?php ?>?php echo $info1[backTime];?<?php ?>></td>
                       <td align="center">&nbsp;<<?php ?>?php echo $info1[publishing];?<?php ?>></td>
                       <td align="center">&nbsp;<<?php ?>?php echo $info1[bookcase];?<?php ?>></td>
                       <td width="14%" align="center">&nbsp;<<?php ?>?php echo $info1[price];?<?php ?>></td>
                     </tr>
   <input name="borrowNumber" type="hidden" id="borrowNumber" value="">

                   </table>			</td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td height="19" background="<?php echo @IMG_URL;?>
main_booksort_2.gif">&nbsp;</td>
        </tr>
	   </form>
</table></td>
  </tr>
</table>
    <?php echo $_smarty_tpl->getSubTemplate ("../Index/copyright.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td>
  </tr>
</table>
</body>
</html><?php }} ?>