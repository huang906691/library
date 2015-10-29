<?php /* Smarty version Smarty-3.1.6, created on 2015-10-14 10:36:28
         compiled from "F:/homework/library/library/Admin/View\BookType\booktype_add.html" */ ?>
<?php /*%%SmartyHeaderCode:32121561dbfac854e86-10653409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ddf6b84892b876eda371aed9b64c978d27696ac' => 
    array (
      0 => 'F:/homework/library/library/Admin/View\\BookType\\booktype_add.html',
      1 => 1444659633,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32121561dbfac854e86-10653409',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_561dbfac9732f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561dbfac9732f')) {function content_561dbfac9732f($_smarty_tpl) {?><html>
<head>
<title>添加书架信息</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="<?php echo @CSS_URL;?>
style.css" rel="stylesheet">
<link rel="shortcut icon" href="<?php echo @IMG_URL;?>
/admin.ico" type="image/x-icon">
<script type="text/javascript">
 /****使用ajax显示保存成功信息****/
window.onload=function(){
  //获取表单信息
  var fm=document.getElementsByTagName("form")[0];
  //添加提交事件
  fm.onsubmit=function(evt){
  //通过html5标签获取信息
  var by_info=new FormData(fm);
  //实例化ajax
  var xhr=new XMLHttpRequest();
  //ajax改变事件
  xhr.onreadystatechange=function(){
    if(xhr.readyState==4){
      document.getElementById("info").innerHTML=xhr.responseText;
      setTimeout('window.close()', 2000);
    }
  }
  xhr.open("post","<?php echo @__CONTROLLER__;?>
/index/"+Math.random());
  xhr.send(by_info);
  //阻止表单提交
  evt.preventDefault();
  
  }
  }
</script>
<script type="text/javascript">
  function check(form1){
    if(form1.by_name.value==""){
      alert("图书类型不能为空！");
      return false;
    }
  }
</script>
</head>
<body>
<table width="292" height="175" border="0" cellpadding="0" cellspacing="0" background="<?php echo @IMG_URL;?>
subBG.jpg">
  <tr>
    <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="3%" height="25">&nbsp;</td>
        <td width="94%">&nbsp;</td>
        <td width="3%">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><table width="100%" height="131"  border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td align="center" valign="top">
            <form name="form1" method="post" action="<?php echo @__CONTROLLER__;?>
/bookType/by_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['by_id'];?>
">
                <table width="100%" height="114"  border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="74" align="center">图书类型名称：
                      <input name="by_name" type="text"></td>
                    </tr>
                  <tr>
                    <td align="center"><input name="submit1" type="submit" class="btn_grey" value="保存" onClick="return check(form1)">
                      &nbsp;
                      <input name="submit2" type="button" class="btn_grey" value="关闭" onClick="window.close();"></td>&nbsp;&nbsp;<span id="info"></span>
                    </tr>
                </table>
            </form></td>
          </tr>
        </table></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
<?php }} ?>