<?php /* Smarty version Smarty-3.1.6, created on 2015-10-14 10:36:19
         compiled from "F:/homework/library/library/Admin/View\Library\library_modify.html" */ ?>
<?php /*%%SmartyHeaderCode:14706561dbfa337b1d5-81070439%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64a9decc94cf2d896216a35670588e8e6f3744ed' => 
    array (
      0 => 'F:/homework/library/library/Admin/View\\Library\\library_modify.html',
      1 => 1444659689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14706561dbfa337b1d5-81070439',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_561dbfa3463c6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561dbfa3463c6')) {function content_561dbfa3463c6($_smarty_tpl) {?><head>
<link href="<?php echo @CSS_URL;?>
style.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="shortcut icon" href="<?php echo @IMG_URL;?>
/admin.ico" type="image/x-icon">
<title>图书馆管理系统</title>
</head>
<script language="javascript">
function checkForm(form){
	for(i=0;i<form.length;i++){
		if(form.elements[i].value==""){
			alert("请将图书馆信息填写完整!");
			form.elements[i].focus();
			return false;
		}
	}
}
</script>

<script type="text/javascript">
/****使用ajax显示保存成功信息****/
window.onload=function(){
  //获取表单信息
  var fm=document.getElementsByTagName("form")[0];
  
 
  fm.onsubmit=function(evt){
  var library_info=new FormData(fm);
  var xhr=new XMLHttpRequest();
  
  xhr.onreadystatechange=function(){
    if(xhr.readyState==4){
      document.getElementById("info").innerHTML=xhr.responseText;
    }
  }
  xhr.open("post","<?php echo @__CONTROLLER__;?>
/library");
  xhr.send(library_info);
  //阻止表单提交
    evt.preventDefault();
  }
  }
</script>
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
    <td height="510" valign="top" style="padding:5px;"><table width="98%" height="487"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="22" valign="top" class="word_orange"> 当前位置：系统设置 &gt; 图书馆信息 &gt;&gt; </td>
      </tr>
      <tr>
        <td align="center" valign="top">
 <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="84%">&nbsp;</td>
</tr>
</table> 
 <form name="form1" method="post" action="<?php echo @__CONTROLLER__;?>
/library">
  <table width="58%"  border="0" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bordercolordark="#D2E3E6" bordercolorlight="#FFFFFF">
  <tr align="center">
    <td width="20%" align="left" style="padding:5px;"> 图书馆名称： </td>
    <td width="80%" align="left">
      <input name="libraryname" type="text" id="libraryname" placeholder="首都图书馆" size="30">
    
    </td>
    <tr>
    <td align="left" style="padding:5px;"> 馆长： </td>
    <td align="left"><input name="curator" type="text" id="curator" size="30" placeholder="倪晓建" ></td>
    </tr>
    <tr>
      <td align="left" style="padding:5px;"> 联系电话： </td>
      <td align="left"><input name="tel" type="text" id="tel" size="30" placeholder="010-87315827"></td>
    </tr>
    <tr>
      <td align="left" style="padding:5px;"> 联系地址： </td>
      <td align="left"><input name="address" type="text" id="address" size="30" placeholder="
朝阳区东三环南路88号"></td>
    </tr>
    <tr>
      <td align="left" style="padding:5px;"> E-mail： </td>
      <td align="left"><input name="email" type="text" id="email" size="30" placeholder="jd@clcn.net.cn"></td>
    </tr>
    <tr>
      <td align="left" style="padding:5px;"> 图书馆网址： </td>
      <td align="left"><input name="url" type="text" id="url" size="30" placeholder="http://www.clcn.net.cn/"></td>
    </tr>
    <tr>
      <td align="left" style="padding:5px;"> 建馆时间： </td>
      <td align="left"><input name="createDate" type="text" id="createDate" size="30" placeholder="1993年"></td>
    </tr>
    <tr>
      <td height="84" align="left" style="padding:5px;"> 图书馆简介： </td>
      <td align="left"><textarea name="introduce" cols="50" rows="5" class="wenbenkuang" id="introduce" > </textarea></td>
    </tr>
    <tr>
      <td height="65" align="left" style="padding:5px;">公告：</td>
      <td><textarea name="bbs" cols="50" rows="5" class="wenbenkuang" id="bbs"> </textarea></td>
    </tr>
    <tr>
      <td height="65" align="left" style="padding:5px;">&nbsp;</td>
      <td>        &nbsp;
          <input name="Submit" type="submit" class="btn_grey" id="Submit" value="保存" onClick="return checkForm(form1)">
          <input name="Submit2" type="reset" class="btn_grey" id="Submit2" value="取消">&nbsp;&nbsp;<span id="info"></span></td></tr>
</table>
</form>
</td>
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