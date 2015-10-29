<?php /* Smarty version Smarty-3.1.6, created on 2015-10-14 00:46:57
         compiled from "F:/homework/library/library/Home/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:15371561d35811b25b5-85406644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c81be75396b4fcd8dd2bf9069148837f8ccfa67' => 
    array (
      0 => 'F:/homework/library/library/Home/View\\Index\\index.html',
      1 => 1444659500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15371561d35811b25b5-85406644',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'library' => 0,
    'v' => 0,
    'first' => 0,
    'f' => 0,
    'session' => 0,
    'recummend' => 0,
    'r' => 0,
    'borrow' => 0,
    'b' => 0,
    'mustread' => 0,
    'm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_561d358142da3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561d358142da3')) {function content_561d358142da3($_smarty_tpl) {?><html>
<head>
<title>飞翔图书馆</title>
<link href="<?php echo @CSS_URL;?>
style.css" rel="stylesheet">
<link rel="shortcut icon" href="<?php echo @IMG_URL;?>
/fly.ico" type="image/x-icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript">
function check(form1){
  if(form1.re_username.value==""){
    alert("请输入用户名!");form1.re_username.focus();return false;
  }
  if(form1.re_pwd.value==""){
    alert("密码不能为空！");form1.re_pwd.focus();return false;
  }
}
</script>
<style type="text/css">
  .pad{
    padding-left:0px;
    line-height:35px;
    list-style:none;
  }
</style>
</head>
<body>
<table width="776" border="0" align="center" cellpadding="0" cellspacing="0" class="tableBorder">
  <tr>
    <td>
      <?php echo $_smarty_tpl->getSubTemplate ("./unavigation.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
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
           <!--  <?php echo $_smarty_tpl->tpl_vars['library']->value['bbs'];?>
 -->

            </marquee> </td>
      </tr>
    </table></td>
    <td width="74%" align="center" valign="top" style="padding:5px;"><table width="563" height="156" border="0" align="center" cellpadding="0" cellspacing="5">
      <tr>
        <td width="34"><img src="<?php echo @IMG_URL;?>
/moveleft.gif" width="23" id="r_l" onClick="r_left()"> </td>
        <td width="474"><TABLE width=100% height="132" border=0 cellPadding=0 cellSpacing=0>
            <TBODY>
              <TR>
                <TD vAlign=top background="" height=120><TABLE cellSpacing=0 cellPadding=0 width=100% border=0>
                    <TBODY>
                      <TR>
                        <TD width="100%" height=120 align=middle vAlign=center>

                            <div id=demo style="OVERFLOW: hidden; WIDTH: 500px; COLOR: #ffffff; HEIGHT: 120px">
                              <table cellpadding=0 width="100%" align=left border=0 
            cellspace="0">
                                <tbody>
       <tr>
   <td id=demo1 valign=top><table cellspacing=1 cellpadding=1>
  <tbody>
    <tr valign=top>
      <td valign=top nowrap><div align=right>
  <table cellspacing=0 cellpadding=0 align=center border=0>
    <tbody>
      <tr>
        <td align=middle><table cellspacing=2 cellpadding=0 width=150 
            align=center border=0>
       <tbody>
  
        <tr>
        <?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['first']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
$_smarty_tpl->tpl_vars['f']->_loop = true;
?>
          <td width="150"><div align="center">
          <a href="<?php echo @__MODULE__;?>
/Book/bookInfo/bo_id/<?php echo $_smarty_tpl->tpl_vars['f']->value['bo_id'];?>
"><img src="<?php echo @UPIMG;?>
<?php echo $_smarty_tpl->tpl_vars['f']->value['bo_photo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['f']->value['bo_name'];?>
" width="175" height="112" border="0" /></a></div></td>
        <?php } ?>  
         </tr>
  
          </tbody>
       </table></td>
           </tr>
            </tbody>
           </table>
           </div></td>
           </tr>
              </tbody>
                 </table></td>
                      <td id=demo2 width="0"></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <SCRIPT>
var dir=1//每步移动像素，大＝快
var speed=10//循环周期（毫秒）大＝慢
demo2.innerHTML=demo1.innerHTML
function Marquee(){ //正常移动
 //alert(demo2.offsetWidth+"\n"+demo.scrollLeft)
 if (dir>0  && (demo2.offsetWidth-demo.scrollLeft)<=0) demo.scrollLeft=0
 if (dir<0 &&(demo.scrollLeft<=0)) demo.scrollLeft=demo2.offsetWidth
 demo.scrollLeft+=dir
 
 demo.onmouseover=function() { clearInterval(MyMar)}//暂停移动
 demo.onmouseout=function() { MyMar=setInterval(Marquee,speed)}//继续移动
}
function r_left(){ if (dir=-1)dir=1}//换向左移
function r_right(){ if (dir=1)dir=-1}//换向右移

var MyMar=setInterval(Marquee,speed)
                  </SCRIPT>
                        </TD>
                      </TR>
                      <TR> </TR>
                    </TBODY>
                </TABLE></TD>
              </TR>
            </TBODY>
        </TABLE></td>
        <td width="35"><img src="<?php echo @IMG_URL;?>
/moveright.gif" width="21" id="r_r" onClick="r_right()"> </td>
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
            <table width="100%"  border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td colspan="2" ><font style="color:gold;font-size:18px;font-family:隶书;">飞翔图书馆欢迎您！</font></td>
                 
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
          <td height="83" style="background-image:url('<?php echo @IMG_URL;?>
login.jpg');">
            <table width="100%"  border="0">
              <form name="form1" method="post" action="<?php echo @__CONTROLLER__;?>
/Login">
                <tr>
                  <td width="31%">用户名：</td>
                  <td width="69%"><input name="re_username" type="text" class="txt_grey" id="username" size="15" style="background:transparent" placeholder="请输入用户名"></td>
                </tr>
                <tr>
                  <td>密&nbsp;&nbsp;码：</td>
                  <td><input name="re_pwd" type="password" class="txt_grey" id="pwd" size="15" style="background:transparent" placeholder="请输入密码"></td>
                </tr>
                <tr>
                  <td colspan="2"><div align="center">
                      <input name="Submit" type="submit" class="btn_grey" value="登录" onClick="return check(form1)">
                      <input name="Submit" type="button" class="btn_grey" value="注册" onclick="window.location.href='<?php echo @__CONTROLLER__;?>
/userreg'">
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
        <tr><<?php ?>?php include("function.php"); ?<?php ?>>
          <td height="155" valign="center" style="background-image:url('<?php echo @IMG_URL;?>
/diaocha.jpg');opacity:0.7;"><font style="color:red;font-size:20px;padding-left: 55px">暂无调查</font></td>
        </tr>
      </table></td>
    <td height="325" align="center" valign="top" style="padding:5px;">

    <table width="564" height="315"  border="0" class="tableBorder_grey">
      <tr bgcolor="#DBEBF7">
        <td width="182" height="35">
        <div align="left"><strong>新书推荐</strong></div></td>
        <td width="182"><div align="left"><strong>借阅排行</strong></div></td>
        <td width="184"><div align="left"><strong>必读书目</strong></div></td>
      </tr>
      <tr>
        <td height="270" valign="top">
          <div align="left" >
    <ul class="pad">
    <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recummend']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
      <li><img src="<?php echo @IMG_URL;?>
blue.png">&nbsp;<a href="<?php echo @__MODULE__;?>
/Book/bookInfo/bo_id/<?php echo $_smarty_tpl->tpl_vars['r']->value['bo_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['bo_name'];?>
</a></li>
    <?php } ?>
    </ul>
      </div></td>


        <td valign="top">
              <ul style="padding-top:10px;" class="pad">
              <?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['borrow']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value){
$_smarty_tpl->tpl_vars['b']->_loop = true;
?>
                <li><img src="<?php echo @IMG_URL;?>
red.png">&nbsp;<a href="<?php echo @__MODULE__;?>
/Book/bookInfo/bo_id/<?php echo $_smarty_tpl->tpl_vars['b']->value['bo_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['b']->value['bo_name'];?>
</a></li>
              <?php } ?>
              </ul>
              <<?php ?>?php }?<?php ?>>
          </td>
        <td valign="top">
          <div align="left">
              <ul class="pad">
              <?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mustread']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value){
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
                <li><img src="<?php echo @IMG_URL;?>
black.png">&nbsp;<a href="<?php echo @__MODULE__;?>
/Book/bookInfo/bo_id/<?php echo $_smarty_tpl->tpl_vars['m']->value['bo_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['m']->value['bo_name'];?>
</a></li>
              <?php } ?>
              </ul>
          </div></td>
      </tr>
    </table></td>
  </tr>
</table>
    <?php echo $_smarty_tpl->getSubTemplate ("./copyright.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td>
  </tr>
</table>
</td>
  </tr>
</table>
</body>
</html>
<?php }} ?>