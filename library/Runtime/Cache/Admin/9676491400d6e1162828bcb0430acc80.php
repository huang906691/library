<?php if (!defined('THINK_PATH')) exit();?><html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<head>
<title>学校图书馆管理系统</title>
<link href="<?php echo ($smarty["const"]["CSS_URL"]); ?>style.css" rel="stylesheet">
<script language="javascript">
function check(form){
	if (form.name.value==""){
		alert("请输入管理员名称!");form.name.focus();return false;
	}
	if (form.pwd.value==""){
		alert("请输入密码!");form.pwd.focus();return false;
	}	
}
</script>
</head>
<body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form name="form1" method="post" action="<?php echo ($smarty["const"]["/library/library/index.php/Admin"]); ?>/Login/checkManagerMessage">
  <table width="100%"  border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="30%" bgcolor="86C1E6">&nbsp;</td>
      <td width="32%" background="<?php echo ($smarty["const"]["IMG_URL"]); ?>bg.jpg"><table width="603" height="243"  border="0" align="center" cellpadding="0" cellspacing="0" bordercolorlight="#FFFFFF" bordercolordark="#D2E3E6">
        <tr>
          <td width="50%" height="90" align="center">&nbsp;</td>
          <td width="50%">&nbsp;
          </td>
        </tr>
        <tr>
          <td height="110" rowspan="4" align="center">&nbsp;</td>
          <td align="center"><span id="info"></span></td>
        </tr>
        <tr>
          
          <td height="40" valign="top">管理员名称：
            <input name="name" type="text" class="logininput" id="name3" size="25"></td>
        </tr>
<script type="text/javascript">
  window.onload=function(){
    var fm=document.getElementsByTagName("form")[0];
    fm.onsubmit=function(evt){
      //获取表单信息
      var man_info=new FormData(fm);
      //ajax对象
      var xhr=new XMLHttpRequest();
      xhr.onreadystatechange=function(){
      if(xhr.readyState==4){
        //console.log(xhr.responseText);
       
        if(xhr.responseText=="<font color='red'>用户名或密码错误！</font>"){
       
            document.getElementById("info").innerHTML=xhr.responseText;
            //阻止form表单提交跳转
            evt.preventDefault();
         }
 

    }
  }
  xhr.open("post","<?php echo ($smarty["const"]["/library/library/index.php/Admin"]); ?>/login/checkManagerMessage",false);
  xhr.send(man_info);
 
}
}     
</script>
        <tr>
          <td height="30" valign="top" >管理员密码：
            <input name="pwd" type="password" class="logininput" id="pwd2" size="25"></td>
        </tr>
         
        <tr>
          <td height="30" align="center" valign="top"><input  type="submit" class="btn_grey" value="确定" onClick="return check(form1)">
&nbsp;
<input name="submit3" type="reset" class="btn_grey" value="重置">
&nbsp;
<input name="submit2" type="button" class="btn_grey" value="关闭" onClick="window.close();"></td>
        </tr>
        <tr>
          <td height="23" colspan="2" align="center"></td>
        </tr>
      </table></td>
      <td width="30%" bgcolor="86C1E6"><br></td>
    </tr>
  </table>
  <div align="center"><br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CopyRight  2007 www.mrbccd.com &nbsp;北京师范大学图书馆 </div>
</form>
</body>
</html>