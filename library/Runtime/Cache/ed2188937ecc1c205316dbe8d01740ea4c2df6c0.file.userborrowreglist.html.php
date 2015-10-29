<?php /* Smarty version Smarty-3.1.6, created on 2015-10-14 13:22:07
         compiled from "F:/homework/library/library/Home/View\Borrow\userborrowreglist.html" */ ?>
<?php /*%%SmartyHeaderCode:9956561dbdf82582c9-83051426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed2188937ecc1c205316dbe8d01740ea4c2df6c0' => 
    array (
      0 => 'F:/homework/library/library/Home/View\\Borrow\\userborrowreglist.html',
      1 => 1444800125,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9956561dbdf82582c9-83051426',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_561dbdf848b95',
  'variables' => 
  array (
    'library' => 0,
    'v' => 0,
    'borrow' => 0,
    'b' => 0,
    'pagelist' => 0,
    'session' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561dbdf848b95')) {function content_561dbdf848b95($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\homework\\library\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><html>
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
		<marquee direction="up" height="80" scrollAmount=1  behavior="scroll" scrollDelay=4 width=185
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
    <td width="74%" rowspan="2" align="center" valign="top" style="padding:5px;"><table width="100%"   border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" valign="top"><table width="555"  height="37" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td background="<?php echo @IMG_URL;?>
borrow.png">&nbsp;</td>
            </tr>
          </table>
           <br>
            <table width="100%"  border="0" cellpadding="5" cellspacing="3" bordercolor="#FFFFFF" bordercolordark="#D2E3E6" bordercolorlight="#FFFFFF">
              <tr align="center" bgcolor="#D0E9F8">
                <td width="14%">条形码</td>
                <td width="20%">图书名称</td>
                <td width="15%">申请时间</td>
                <td width="9%">归还时间</td>
                <td width="12%">处理状态</td>
                <td width="10%">管理</td>
              </tr>
             <?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['borrow']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value){
$_smarty_tpl->tpl_vars['b']->_loop = true;
?>
              <tr>
                <td style="padding:5px;">&nbsp;<?php echo $_smarty_tpl->tpl_vars['b']->value['bo_code'];?>
</td>
                <td style="padding:5px;"><a href="<?php echo @__MODULE__;?>
/Book/bookInfo/bo_id/<?php echo $_smarty_tpl->tpl_vars['b']->value['bo_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['b']->value['bo_name'];?>
</a></td>
                <td style="padding:5px;">&nbsp;<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['b']->value['borrowtime'],"%Y-%m-%d ");?>
</td>
                <td style="padding:5px;">&nbsp;<font style="color:red;"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['b']->value['reverttime'],"%Y-%m-%d ");?>
</font></td>
                <td style="padding:5px;"><font style="color:red">&nbsp;<?php if (!isset($_smarty_tpl->tpl_vars['b']) || !is_array($_smarty_tpl->tpl_vars['b']->value)) $_smarty_tpl->createLocalArrayVariable('b');
if ($_smarty_tpl->tpl_vars['b']->value['status'] = 1){?> 借阅成功 <?php }?></font></td>
                <td style="padding:5px;"><div align="center" onclick="return window.confirm('是否确认归还？')"><a href="<?php echo @__CONTROLLER__;?>
/bookBack/id/<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
/bo_id/<?php echo $_smarty_tpl->tpl_vars['b']->value['bo_id'];?>
">归还</a> </div></td>
              </tr>
             <?php } ?>
            
              <tr><td colspan="5" align="center" style="padding:20px"><?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>
</td></tr>
             
            </table>
            </td>
      </tr> 
    </table></td>
  </tr>

  <tr>
    <td height="325" align="center" valign="top" style="padding:5px;">   




       <?php if ($_smarty_tpl->tpl_vars['session']->value){?>
       <table width="100%" height="121" border="0" class="tableBorder_grey">
        <tr>
          <td height="30" bgcolor="#FF9900"><strong>用户信息</strong></td>
        </tr>
        <tr>
          <td height="83" style="background-image:url('<?php echo @IMG_URL;?>
login.jpg');">
            <table width="100%"  border="0">
                <tr>
                  <td colspan="2">飞翔图书馆欢迎您！</td>
                 
                </tr>
                <tr>
                  <td width="31%">用户名：</td>
                  <td width="69%" style="color:red"><?php echo $_smarty_tpl->tpl_vars['session']->value["re_username"];?>
</td>
                </tr>
              
            </table></td>
        </tr>
      </table>
    <?php }else{ ?>
     <table width="100%" height="121" border="0" class="tableBorder_grey">
        <tr>
          <td height="30" bgcolor="#FF9900"><strong>用户登录</strong></td>
        </tr>
        <tr>
          <td height="83">
            <table width="100%"  border="0">
              <form name="form1" method="post" action="<?php echo @__MODULE__;?>
/Login/index">
                <tr>
                  <td width="31%">用户名：</td>
                  <td width="69%"><input name="re_username" type="text" class="txt_grey" id="username" size="15"></td>
                </tr>
                <tr>
                  <td>密&nbsp;&nbsp;码：</td>
                  <td><input name="re_pwd" type="password" class="txt_grey" id="pwd" size="15"></td>
                </tr>
                <tr>
                  <td colspan="2"><div align="center">
                      <input name="Submit" type="submit" class="btn_grey" value="登录" onClick="return check(form1)">
                      <input name="Submit" type="button" class="btn_grey" value="注册" onclick="window.location.href='<?php echo @__MODULE__;?>
/Index/userreg'">
                  </div></td>
                </tr>
              </form>
            </table></td>
        </tr>
      </table>

    <?php }?>




      <table width="100%" height="194"  border="0" class="tableBorder_gray">
        <tr>
          <td height="31" bgcolor="#FF9900"><strong>站内调查</strong></td>
        </tr>
        <tr>
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