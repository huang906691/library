<?php /* Smarty version Smarty-3.1.6, created on 2015-10-21 19:06:17
         compiled from "F:/homework/library/library/Home/View\Book\book_view.html" */ ?>
<?php /*%%SmartyHeaderCode:12198561d358906a8d8-23146030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0377a475279e9fd18ffbc4693892bd77917f15e1' => 
    array (
      0 => 'F:/homework/library/library/Home/View\\Book\\book_view.html',
      1 => 1445425576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12198561d358906a8d8-23146030',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_561d35892ae6b',
  'variables' => 
  array (
    'library' => 0,
    'v' => 0,
    'book' => 0,
    'session' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561d35892ae6b')) {function content_561d35892ae6b($_smarty_tpl) {?><html>
<head>
<title>图书馆管理系统</title>
<link href="<?php echo @CSS_URL;?>
style.css" rel="stylesheet">
<link rel="shortcut icon" href="<?php echo @IMG_URL;?>
/fly.ico" type="image/x-icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript"> 
  function check(form1){
    document.form1.submit();
  }
</script>
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
            </marquee> </td>
      </tr>
    </table></td>
    <td width="74%" rowspan="2" align="center" valign="top" style="padding:5px;"><table width="98%" height="487"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="22" valign="top" class="word_orange">当前位置：图书档案管理 &gt; 图书详细信息 &gt;&gt;</td>
      </tr>

      <tr>
        <td align="center" valign="top">

    
        <table width="100%" height="493"  border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td align="center" valign="top">
                  <table width="100%" height="414"  border="0" cellpadding="4" cellspacing="0" bgcolor="#FFFFFF">
              <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['book']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                    <tr>
                      <td width="120" align="center">条&nbsp;形&nbsp;码：</td>
                      <td width="256" height="30"><?php echo $_smarty_tpl->tpl_vars['v']->value['bo_code'];?>
</td>
                      <td width="224" rowspan="9"><div align="center"><img name="" src="<?php echo @UPIMG;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['bo_photo'];?>
" width="144" height="155" alt=""></div></td>
                    </tr>
                    <tr>
                      <td align="center">图书名称：</td>
                      <td height="30"><font style="color: #4C94C1"><?php echo $_smarty_tpl->tpl_vars['v']->value['bo_name'];?>
</font></td>
                      </tr>
                    <tr>
                      <td align="center">ISBN：</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['v']->value['bo_isbn'];?>
</td>
                      </tr>
                    <tr>
                      <td align="center">图书类型：</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['v']->value['by_name'];?>
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
                      <td><?php echo $_smarty_tpl->tpl_vars['v']->value['pr_name'];?>
</td>
                      </tr>
                    <tr>
                      <td align="center">价&nbsp;&nbsp;格：</td>
                      <td><font style="color:red"><?php echo $_smarty_tpl->tpl_vars['v']->value['bo_price'];?>
</font>&nbsp;(元)</td>
                      </tr>
                    <tr>
                      <td align="center">页&nbsp;&nbsp;码：</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['v']->value['bo_pages'];?>
</td>
                      </tr>
                    <tr>
                      <td align="center">书&nbsp;&nbsp;架：</td>
                      <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['v']->value['ca_name'];?>
       
                    </tr>
                    <tr>
                      <td align="center">库&nbsp;&nbsp;存：</td>
                      <td colspan="2"><font color="#FF0000"><?php echo $_smarty_tpl->tpl_vars['v']->value['bo_stock'];?>
</font> (本)     
                    </tr>
                    <tr>
                      <td height="39" align="center">属性：</td>
                      <td colspan="2"><input name="tuijian" type="checkbox" id="tuijian" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['bo_recummend'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['bo_recummend']==1){?> checked="checked" <?php }?> readonly="readonly">
                  推荐
                    <input name="bidu" type="checkbox" id="bidu" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['bo_mustread'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['bo_mustread']==1){?> checked="checked" <?php }?> readonly="readonly">
                  必读</td>
                    </tr>
                    <tr>
                      <td height="39" align="center">详细介绍：</td>
                      <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['v']->value['bo_introduce'];?>
</td>
                      <input type="hidden" name="bookid" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['bo_id'];?>
">
                      <input type="hidden" name="readerid" value="<?php echo $_smarty_tpl->tpl_vars['session']->value['re_id'];?>
">
                    </tr>
                 
                    <tr >
                      <td colspan="3"  align="center" style="padding-top:18px;">
                  <?php if ($_smarty_tpl->tpl_vars['v']->value['bo_stock']==0||$_smarty_tpl->tpl_vars['session']->value['re_username']==''){?>
                  <span style="color: red;font-size: 15px;font-family:宋体;">请登录后借阅</span>&nbsp;&nbsp;
                    <img src="<?php echo @IMG_URL;?>
/button.png" onmouseover="this.src='<?php echo @IMG_URL;?>
button1.png'" onmouseout="this.src='<?php echo @IMG_URL;?>
button.png'" onClick="history.go(-1);">
                  <?php }else{ ?>
                  <img src="<?php echo @IMG_URL;?>
/borrow1.png" onmouseover="this.src='<?php echo @IMG_URL;?>
/borrow2.png'" onmouseout="this.src='<?php echo @IMG_URL;?>
/borrow1.png'" onClick="window.location.href='<?php echo @__CONTROLLER__;?>
/borrow/bookid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bo_id'];?>
/readerid/<?php echo $_smarty_tpl->tpl_vars['session']->value["re_id"];?>
'">

                  <img src="<?php echo @IMG_URL;?>
/button.png" onmouseover="this.src='<?php echo @IMG_URL;?>
button1.png'" onmouseout="this.src='<?php echo @IMG_URL;?>
button.png'" onClick="history.go(-1);">
                        </td>
                    </tr>
                  <?php }?>
              
      <?php } ?>
        
                </table>
                </td>
            </tr>
        </table></td>
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
          <td height="83" style="background-image:url('<?php echo @IMG_URL;?>
login.jpg');">
            <table width="100%"  border="0">
              <form name="form1" method="post" action="<?php echo @__MODULE__;?>
/Index/login">
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