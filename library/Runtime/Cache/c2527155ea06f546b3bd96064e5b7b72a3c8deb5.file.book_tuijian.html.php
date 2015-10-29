<?php /* Smarty version Smarty-3.1.6, created on 2015-10-14 00:47:08
         compiled from "F:/homework/library/library/Home/View\Book\book_tuijian.html" */ ?>
<?php /*%%SmartyHeaderCode:3559561d358cbbb2a9-42223864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2527155ea06f546b3bd96064e5b7b72a3c8deb5' => 
    array (
      0 => 'F:/homework/library/library/Home/View\\Book\\book_tuijian.html',
      1 => 1444745352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3559561d358cbbb2a9-42223864',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'library' => 0,
    'v' => 0,
    'newbook' => 0,
    'b' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_561d358cd12e5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561d358cd12e5')) {function content_561d358cd12e5($_smarty_tpl) {?><html>
<head>
<title>图书馆管理系统</title>
<link href="<?php echo @CSS_URL;?>
style.css" rel="stylesheet">
<link rel="shortcut icon" href="<?php echo @IMG_URL;?>
/fly.ico" type="image/x-icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<table width="776" border="0" align="center" cellpadding="0" cellspacing="0" class="tableBorder">
  <tr>
    <td>
     <?php echo $_smarty_tpl->getSubTemplate ("../Index/unavigation.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td>
  </tr>
	<td>
	<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" bgcolor="#FFFFFF"><table width="100%" height="506"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="tableBorder_gray">
  <tr>
    <td width="26%" height="173" align="center" valign="top" style="padding:5px;"><table width="100%" height="168"  border="0" class="tableBorder_gray">
      <tr>
        <td width="100%" height="29" bgcolor="#FF9900"><strong>公 告</strong></td>
      </tr>
      <tr>
        <td height="124">
		<marquee direction="up" height="105" scrollAmount=1  behavior="scroll" scrollDelay=4 width=185
            align="right" onMouseOver="this.stop()" onMouseOut="this.start()" >

           <ul style="list-style:none;padding:0px;">
          <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['library']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</li>
          <?php } ?>
          </ul>
            </marquee> </td>
      </tr>
    </table></td>
    <td width="74%" rowspan="2" align="center" valign="top" style="padding:5px;"><table width="98%" height="487"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" valign="top"><table width="100%" height="37" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td background="<?php echo @IMG_URL;?>
newbook.png">&nbsp;</td>
            </tr>
          </table>
          <br>
            <table width="98%"  border="0" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bordercolordark="#D2E3E6" bordercolorlight="#FFFFFF">
              <tr align="center" bgcolor="#D0E9F8" height="35">
                <td width="14%" style="color:#1883E9;">条形码</td>
                <td width="24%" style="color:#1883E9;">图书名称</td>
                <td width="20%" style="color:#1883E9;">图书类型</td>
                <td width="17%" style="color:#1883E9;">出版社</td>
                <td width="12%" style="color:#1883E9;">书架</td>
                <td width="13%" style="color:#1883E9;">库存</td>
              </tr>
           <?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['newbook']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value){
$_smarty_tpl->tpl_vars['b']->_loop = true;
?>  
              <tr align="center">
                <td style="padding:5px;">&nbsp;<?php echo $_smarty_tpl->tpl_vars['b']->value['bo_code'];?>
</td>
                <td style="padding:5px;"><a href="<?php echo @__CONTROLLER__;?>
/bookInfo/bo_id/<?php echo $_smarty_tpl->tpl_vars['b']->value['bo_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['b']->value['bo_name'];?>
</a></td>
                <td style="padding:5px;">&nbsp;<?php echo $_smarty_tpl->tpl_vars['b']->value['by_name'];?>
</td>
                <td style="padding:5px;">&nbsp;<?php echo $_smarty_tpl->tpl_vars['b']->value['pr_name'];?>
</td>
                <td style="padding:5px;">&nbsp;<?php echo $_smarty_tpl->tpl_vars['b']->value['ca_name'];?>
</td>
                <td style="padding:5px;"><?php echo $_smarty_tpl->tpl_vars['b']->value['bo_stock'];?>
</td>
              </tr>
            <?php } ?> 
            </table>
            <table><tr><td><?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>
</td></tr></table> 
           </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="325" align="center" valign="top" style="padding:5px;">      
    <table width="100%" height="121" border="0" class="tableBorder_grey">
        <tr>
          <td height="30" bgcolor="#FF9900"><strong>图书查询</strong></td>
        </tr>
        <tr>
          <td height="83" style="background-image:url('<?php echo @IMG_URL;?>
login.jpg');">
            <table width="100%"  border="0">
              <form name="form1" method="get" action="<?php echo @__MODULE__;?>
/Book/bookQuery">
                <tr>
                  <td width="35%">条&nbsp;形&nbsp;码：</td>
                  <td width="65%"><input name="code" type="text" class="txt_grey" id="username" size="15" style="background:transparent" placeholder="输入条形码"></td>
                </tr>
                <tr>
                  <td>图书名称：</td>
                  <td><input name="bookname" type="text" class="txt_grey" id="pwd" size="15" style="background:transparent" placeholder="输入图书名称"></td>
                </tr>
                <tr>
                  <td colspan="2"><div align="center">
                      <input name="Submit" type="submit" class="btn_grey" value="查询">
                      <input name="Submit" type="reset" class="btn_grey" value="重置" >
                  </div></td>
                </tr>
              </form>
            </table></td>
        </tr>
      </table>

      <table width="100%" height="194"  border="0" class="tableBorder_gray">
        <tr>
          <td height="31" bgcolor="#FF9900"><strong>站内调查</strong></td>
        </tr>
        <tr><<?php ?>?php include("function.php"); ?<?php ?>>
          <td height="155" valign="center" style="background-image:url('<?php echo @IMG_URL;?>
/diaocha.jpg');opacity:0.7;"><font style="color:red;font-size:20px;padding-left: 55px">暂无调查</font></td>
        </tr>
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