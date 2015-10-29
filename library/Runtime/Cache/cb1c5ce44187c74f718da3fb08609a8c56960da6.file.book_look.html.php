<?php /* Smarty version Smarty-3.1.6, created on 2015-10-14 10:32:48
         compiled from "F:/homework/library/library/Admin/View\Book\book_look.html" */ ?>
<?php /*%%SmartyHeaderCode:3697561dbed0d49e15-61598470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb1c5ce44187c74f718da3fb08609a8c56960da6' => 
    array (
      0 => 'F:/homework/library/library/Admin/View\\Book\\book_look.html',
      1 => 1444659571,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3697561dbed0d49e15-61598470',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_561dbed0ebfe2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561dbed0ebfe2')) {function content_561dbed0ebfe2($_smarty_tpl) {?><html>
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
    <td valign="top" bgcolor="#FFFFFF"><table width="99%" height="510"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="tableBorder_gray">
  <tr>
    <td height="510" align="center" valign="top" style="padding:5px;"><table width="98%" height="487"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="22" valign="top" class="word_orange">当前位置：图书档案管理 &gt; 图书详细信息 &gt;&gt;</td>
      </tr>
      <tr>
        <td align="center" valign="top"><table width="100%" height="493"  border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top">
	<table width="600" height="432"  border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
      <tr>
        <td width="100" align="center">条&nbsp;形&nbsp;码：</td>
        <td width="500" height="39">
          <?php echo $_smarty_tpl->tpl_vars['v']->value['bo_code'];?>
</td>
        <td width="224" rowspan="9"><div align="center"><img name="" src="<?php echo @UPIMG;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['bo_photo'];?>
" width="144" height="185" alt=""></div></td>
      </tr>
      <tr>
        <td align="center">图书名称：</td>
        <td height="39"><font style="color:#4C94C1"><?php echo $_smarty_tpl->tpl_vars['v']->value['bo_name'];?>
</font></td>
      </tr>
      <tr>
        <td align="center">ISBN：</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['bo_isbn'];?>
</td> 
      </tr>
      <tr>
        <td align="center">图书类型：</td>
        <td>
		  <?php echo $_smarty_tpl->tpl_vars['v']->value['by_name'];?>
 </td>
      </tr>
      <tr>
        <td align="center">作&nbsp;&nbsp;者：</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['bo_author'];?>
</td>
      </tr>
      <tr>
        <td align="center">译&nbsp;&nbsp;者：</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['bo_translator'];?>
</td>
      </tr>
      <tr>
        <td align="center">出&nbsp;版&nbsp;社：</td>
        <td>
		  <?php echo $_smarty_tpl->tpl_vars['v']->value['pr_name'];?>
</td>
      </tr>
      <tr>
        <td align="center">价&nbsp;&nbsp;格：</td>
        <td><font style="color: red"><?php echo $_smarty_tpl->tpl_vars['v']->value['bo_price'];?>
</font>(元)</td>
      </tr>
      <tr>
        <td align="center">页&nbsp;&nbsp;码：</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['bo_pages'];?>
&nbsp;页</td>
      </tr>
      <tr>
        <td align="center">书&nbsp;&nbsp;架：</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ca_name'];?>
         
      </tr>
      <tr>
        <td align="center">库&nbsp;&nbsp;存：</td>
        <td>  <?php echo $_smarty_tpl->tpl_vars['v']->value['bo_stock'];?>
   
      </tr>

      <tr>
        <td height="39" align="center">属性：</td>
        <td><input name="tuijian" type="checkbox" id="tuijian" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['bo_recummend'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['bo_recummend']=='1'){?> checked="checked" <?php }?> >
    推荐
      <input name="bidu" type="checkbox" id="bidu" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['bo_mustread'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['bo_mustread']=='1'){?> checked="checked" <?php }?>>
    必读</td>
      </tr>
      <tr>
        <td height="39" align="center">详细介绍：</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['bo_introduce'];?>
</td>
      </tr>
    

    </table>
    <br>
    <table>
      <tr>
        <td colspan="2" align="center">
        <!--
        <input name="Submit2" type="button" class="btn_grey" style="background:url(.<?php echo @IMG_URL;?>
button.png)" onClick="history.go(-1);">
      -->
      <img src="<?php echo @IMG_URL;?>
edit.png"  onmouseover="this.src='<?php echo @IMG_URL;?>
edit1.png'" onmouseout="this.src='<?php echo @IMG_URL;?>
edit.png'" onClick="window.location.href='<?php echo @__CONTROLLER__;?>
/bookEdit/bo_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['bo_id'];?>
'">
      <img src="<?php echo @IMG_URL;?>
button.png" onClick="history.go(-1)" onmouseover="this.src='<?php echo @IMG_URL;?>
button1.png'" onmouseout="this.src='<?php echo @IMG_URL;?>
button.png'">
        </td>
        </tr>
    </table>
    <?php } ?>
	</td>
  </tr>
</table></td>
      </tr>
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