<?php /* Smarty version Smarty-3.1.6, created on 2015-10-14 10:31:27
         compiled from "F:/homework/library/library/Home/View\Borrow\userinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:30333561dbe7f86e156-84038045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1af8d079e45a351aabc22d2ccaa5ad9e62cd3f5f' => 
    array (
      0 => 'F:/homework/library/library/Home/View\\Borrow\\userinfo.html',
      1 => 1444658914,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30333561dbe7f86e156-84038045',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'i' => 0,
    'errorinfo' => 0,
    'reader' => 0,
    'r' => 0,
    'type' => 0,
    't' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_561dbe7fa508b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561dbe7fa508b')) {function content_561dbe7fa508b($_smarty_tpl) {?><html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="shortcut icon" href="<?php echo @IMG_URL;?>
/fly.ico" type="image/x-icon">
<head>
<title>图书馆管理系统</title>
<link href="<?php echo @CSS_URL;?>
style.css" rel="stylesheet">
</head>
<script type="text/javascript">
function check(form1){
	if(form1.re_username.value==""){
		alert("请输入用户名!");form1.re_username.focus();return false;
	}
  if(form1.re_name.value==""){
    alert("请输入姓名!");form1.re_name.focus();return false;
  }
  if(form1.re_pwd.value==""){
    alert("密码不能为空!");form1.re_pwd.focus();return false;
  }
  if(form1.pwd2.value==""){
    alert("确认密码不能为空!");form1.pwd.focus();return false;
  }
  if(form1.pwd2.value!=form1.re_pwd.value){
    alert("密码不一致!");form1.pwd2.focus();return false;
  }
	if(form1.re_number.value==""){
		alert("请输入证件号码!");form1.re_number.focus();return false;
	}
  document.form1.submit();
}

</script>
<body>
<table width="778" border="0" align="center" cellpadding="0" cellspacing="0" class="tableBorder">
  <tr>
    <td>
	 <?php echo $_smarty_tpl->getSubTemplate ("../Index/unavigation.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</td>
	</tr>
	<td>
	<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" bgcolor="#FFFFFF"><table width="99%" height="510"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="tableBorder_gray">
  <tr>
    <td height="510" valign="top" style="padding:5px;"><table width="98%" height="487"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="22" valign="top" class="word_orange">当前位置：个人中心&gt; 修改个人信息&gt;&gt;</td>
      </tr>
      <tr>
        <td align="center" valign="top"><table width="100%" height="493"  border="0" cellpadding="0" cellspacing="0">
  <tr>

    <td align="center" valign="top">	
    <form name="form1" method="post" action="<?php echo @__CONTROLLER__;?>
/userinfo">
      <table width="600" height="426"  border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
        <tr>
          <td align="center">用户名</td>
          <td height="25"><input name="re_username" type="text" id="username" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['re_username'];?>
">
      *<span><?php echo (($tmp = @$_smarty_tpl->tpl_vars['errorinfo']->value['re_username'])===null||$tmp==='' ? '' : $tmp);?>
</span> </td>
        </tr>
        <tr>
          <td align="center">密码</td>
          <td height="23"><input name="re_pwd" type="password" id="pwd1" value="" placeholder="密码不能为空">
      * <span><?php echo (($tmp = @$_smarty_tpl->tpl_vars['errorinfo']->value['re_pwd'])===null||$tmp==='' ? '' : $tmp);?>
</span></td>
        </tr>
        <tr>
          <td align="center">确认密码</td>
          <td height="24"><input name="pwd2" type="password" id="pwd2" value="">
      *<span><?php echo (($tmp = @$_smarty_tpl->tpl_vars['errorinfo']->value['re_pwd2'])===null||$tmp==='' ? '' : $tmp);?>
</span> </td>
        </tr>
        <tr>
          <td width="173" align="center">姓名：</td>
          <td width="427" height="29"><input name="re_name" type="text" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['re_name'];?>
">
      *<span><?php echo (($tmp = @$_smarty_tpl->tpl_vars['errorinfo']->value['re_name'])===null||$tmp==='' ? '' : $tmp);?>
</span>
        </td>
        </tr>
        <tr>
          <td width="173" align="center">性别：</td>
          <td height="27"><input name="re_sex" type="radio" class="noborder" id="radiobutton"  value="<?php echo $_smarty_tpl->tpl_vars['i']->value['re_sex'];?>
" <?php if ($_smarty_tpl->tpl_vars['i']->value['re_sex']=="男"){?> checked="checked" <?php }?> checked="checked" >
            男
              <input name="re_sex" type="radio" class="noborder" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['re_sex'];?>
" <?php if ($_smarty_tpl->tpl_vars['i']->value['re_sex']=="女"){?> checked="checked" <?php }?>>
              女 </td>
        </tr>
        <tr>
          <td align="center">条形码：</td>
          <td><input name="barcode" type="text" id="barcode" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['re_code'];?>
">
          </td>
        </tr>
        <tr>
          <td align="center">读者类型：</td>
          <td><select name="re_typeid" class="wenbenkuang" id="booktype">
          <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reader']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['rt_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['rt_name'];?>
</option>
          <?php } ?>    
            </select>
          </td>
        </tr>
        <tr>
          <td align="center">职业：</td>
          <td><input name="re_work" type="text" id="vocation" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['re_work'];?>
"></td>
        </tr>
        <tr>
          <td align="center">出生日期：</td>
          <td><input name="re_birthday" type="text" id="birthday" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['re_birthday'];?>
"></td>
        </tr>
        <tr>
          <td align="center">有效证件：</td>
          <td><select name="re_paperid" class="wenbenkuang" id="paperType">
          <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['t']->value['pa_id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['t']->value['pa_type'];?>
</option>
          <?php } ?>
          </select></td>
        </tr>
        <tr>
          <td align="center">证件号码：</td>
          <td><input name="re_number" type="text" id="paperNO" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['re_number'];?>
">
      * </td>
        </tr>
        <tr>
          <td align="center">电话：</td>
          <td><input name="re_tel" type="text" id="tel" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['re_tel'];?>
"></td>
        </tr>
        <tr>
          <td align="center">E-mail：</td>
          <td><input name="re_email" type="text" id="email" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['re_email'];?>
" size="50">
          <span><?php echo (($tmp = @$_smarty_tpl->tpl_vars['errorinfo']->value['re_email'])===null||$tmp==='' ? '' : $tmp);?>
</span>
          </td>
        </tr>
        <tr>
          <td align="center">备注：</td>
          <td><textarea name="re_remark" cols="50" rows="5" class="wenbenkuang" id="remark"><?php echo $_smarty_tpl->tpl_vars['i']->value['re_remark'];?>
</textarea></td>
        </tr>
    <?php } ?>
    </table>
           <table border="0">
      <tr>
        <td align="center">&nbsp;</td>
        <td><input name="Submit" type="button" class="btn_grey" value="" onClick="return check(form1)"  style="background:url('<?php echo @IMG_URL;?>
/submit.png')no-repeat; width:100px; height:29px;" onmouseover="this.style='background:url(\'<?php echo @IMG_URL;?>
/submit2.png\')no-repeat; width:100px; height:29px;'" onmouseout="this.style='background:url(\'<?php echo @IMG_URL;?>
/submit.png\')no-repeat; width:100px; height:29px;'">
</td>
<td>
 <img src="<?php echo @IMG_URL;?>
button.png" onClick="history.go(-1)" onmouseover="this.src='<?php echo @IMG_URL;?>
button1.png'" onmouseout="this.src='<?php echo @IMG_URL;?>
button.png'"></td>
      </tr>
    </table>
      
    </form>
    </td>
  </tr>
</table></td>
      </tr>
    </table>
</td>
  </tr>
</table> <?php echo $_smarty_tpl->getSubTemplate ("../Index/copyright.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td>
  </tr>
</table>
</td>
  </tr>
</table>
</body>
</html>
<?php }} ?>