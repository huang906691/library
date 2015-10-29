<?php /* Smarty version Smarty-3.1.6, created on 2015-10-14 00:46:57
         compiled from "F:\homework\library\library\Home\View\Index\unavigation.html" */ ?>
<?php /*%%SmartyHeaderCode:6888561d358143e381-74606353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fed97bd5556c9a1869ddf9eae8af32f15884044e' => 
    array (
      0 => 'F:\\homework\\library\\library\\Home\\View\\Index\\unavigation.html',
      1 => 1444642133,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6888561d358143e381-74606353',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_561d35815b566',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561d35815b566')) {function content_561d35815b566($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript">
  var menuOffX=0  //菜单距连接文字最左端距离
var menuOffY=18 //菜单距连接文字顶端距离
var fo_shadows=new Array()
var linkset=new Array()
var ie4=document.all&&navigator.userAgent.indexOf("Opera")==-1
var ns6=document.getElementById&&!document.all
var ns4=document.layers
function openScript(url, width, height){
  var Win = window.open(url,"openScript",'width=' + width + ',height=' + height + ',resizable=1,scrollbars=yes,menubar=no,status=no' );
}
function showmenu(e,vmenu,mod){
  if (!document.all&&!document.getElementById&&!document.layers)
    return
  which=vmenu
  clearhidemenu()
  ie_clearshadow()
  menuobj=ie4? document.all.popmenu : ns6? document.getElementById("popmenu") : ns4? document.popmenu : ""
  menuobj.thestyle=(ie4||ns6)? menuobj.style : menuobj
  
  if (ie4||ns6)
    menuobj.innerHTML=which
  else{
    menuobj.document.write('<layer name=gui bgColor=#E6E6E6 width=165 onmouseover="clearhidemenu()" onmouseout="hidemenu()">'+which+'</layer>')
    menuobj.document.close()
  }
  menuobj.contentwidth=(ie4||ns6)? menuobj.offsetWidth : menuobj.document.gui.document.width
  menuobj.contentheight=(ie4||ns6)? menuobj.offsetHeight : menuobj.document.gui.document.height
  
  eventX=ie4? event.clientX : ns6? e.clientX : e.x
  eventY=ie4? event.clientY : ns6? e.clientY : e.y
  
  var rightedge=ie4? document.body.clientWidth-eventX : window.innerWidth-eventX
  var bottomedge=ie4? document.body.clientHeight-eventY : window.innerHeight-eventY
    if (rightedge<menuobj.contentwidth)
      menuobj.thestyle.left=ie4? document.body.scrollLeft+eventX-menuobj.contentwidth+menuOffX : ns6? window.pageXOffset+eventX-menuobj.contentwidth : eventX-menuobj.contentwidth
    else
      menuobj.thestyle.left=ie4? ie_x(event.srcElement)+menuOffX : ns6? window.pageXOffset+eventX : eventX
    
    if (bottomedge<menuobj.contentheight&&mod!=0)
      menuobj.thestyle.top=ie4? document.body.scrollTop+eventY-menuobj.contentheight-event.offsetY+menuOffY-23 : ns6? window.pageYOffset+eventY-menuobj.contentheight-10 : eventY-menuobj.contentheight
    else
      menuobj.thestyle.top=ie4? ie_y(event.srcElement)+menuOffY : ns6? window.pageYOffset+eventY+10 : eventY
  menuobj.thestyle.visibility="visible"
  ie_dropshadow(menuobj,"#999999",3)
  return false
}

function ie_y(e){  
  var t=e.offsetTop;  
  while(e=e.offsetParent){  
    t+=e.offsetTop;  
  }  
  return t;  
}  
function ie_x(e){  
  var l=e.offsetLeft;  
  while(e=e.offsetParent){  
    l+=e.offsetLeft;  
  }  
  return l;  
}  
function ie_dropshadow(el, color, size)
{
  var i;
  for (i=size; i>0; i--)
  {
    var rect = document.createElement('div');
    var rs = rect.style
    rs.position = 'absolute';
    rs.left = (el.style.posLeft + i) + 'px';
    rs.top = (el.style.posTop + i) + 'px';
    rs.width = el.offsetWidth + 'px';
    rs.height = el.offsetHeight + 'px';
    rs.zIndex = el.style.zIndex - i;
    rs.backgroundColor = color;
    var opacity = 1 - i / (i + 1);
    rs.filter = 'alpha(opacity=' + (100 * opacity) + ')';
    fo_shadows[fo_shadows.length] = rect;
  }
}
function ie_clearshadow()
{
  for(var i=0;i<fo_shadows.length;i++)
  {
    if (fo_shadows[i])
      fo_shadows[i].style.display="none"
  }
  fo_shadows=new Array();
}


function contains_ns6(a, b) {
  while (b.parentNode)
    if ((b = b.parentNode) == a)
      return true;
  return false;
}

function hidemenu(){
  if (window.menuobj)
    menuobj.thestyle.visibility=(ie4||ns6)? "hidden" : "hide"
  ie_clearshadow()
}

function dynamichide(e){
  if (ie4&&!menuobj.contains(e.toElement))
    hidemenu()
  else if (ns6&&e.currentTarget!= e.relatedTarget&& !contains_ns6(e.currentTarget, e.relatedTarget))
    hidemenu()
}

function delayhidemenu(){
  if (ie4||ns6||ns4)
    delayhide=setTimeout("hidemenu()",500)
}

function clearhidemenu(){
  if (window.delayhide)
    clearTimeout(delayhide)
}

function highlightmenu(e,state){
  if (document.all)
    source_el=event.srcElement
  else if (document.getElementById)
    source_el=e.target
  if (source_el.className=="menuitems"){
    source_el.id=(state=="on")? "mouseoverstyle" : ""
  }
  else{
    while(source_el.id!="popmenu"){
      source_el=document.getElementById? source_el.parentNode : source_el.parentElement
      if (source_el.className=="menuitems"){
        source_el.id=(state=="on")? "mouseoverstyle" : ""
      }
    }
  }
}

if (ie4||ns6)
document.onclick=hidemenu
function doSClick() {
  var targetId, srcElement, targetElement, imageId, imageElement;
  srcElement = window.event.srcElement;
  targetId = srcElement.id + "content";
  targetElement = document.all(targetId);
  imageId = srcElement.id;
  imageId = imageId.charAt(0);
  imageElement = document.all(imageId);
  if (targetElement.style.display == "none") {

    targetElement.style.display = "";
  } else {
    targetElement.style.display = "none";
  }
}
function doClick() {
  var targetId, srcElement, targetElement;
  srcElement = window.event.srcElement;
  targetId = srcElement.id + "_content";
  targetElement = document.all(targetId);
  if (targetElement.style.display == "none") {
    targetElement.style.display = "";
  } else {
    targetElement.style.display = "none";
  }
}

//HTML过滤函数
function HTMLEncode(text)
{
  text = text.replace(/&/g, "&amp;") ;
  text = text.replace(/"/g, "&quot;") ;
  text = text.replace(/</g, "&lt;") ;
  text = text.replace(/>/g, "&gt;") ;
  text = text.replace(/'/g, "&#146;") ;

  return text ;
}
function bbimg(o){
  var zoom=parseInt(o.style.zoom, 10)||100;zoom+=event.wheelDelta/12;if (zoom>0) o.style.zoom=zoom+'%';
  return false;
}

function overbg(tdbg){
tdbg.style.background='url(Images/item_over.gif)'
tdbg.style.border=' #9CA6C6 1px solid'
}
function outbg(tdbg){
tdbg.style.background='url(.Images/item_out.gif)'
tdbg.style.border=''
}
var sysmenu='<table width=80><tr><td id=library onMouseOver=overbg(library) onMouseOut=outbg(library)><a href=library_modify.html>图书馆信息</a></td></tr>\
<tr><td id=manager onMouseOver=overbg(manager) onMouseOut=outbg(manager)><a href=manager.html>管理员设置</a></td></tr>\
<tr><td id=para onMouseOver=overbg(para) onMouseOut=outbg(para)><a href=votelist.html>调查管理</a></td></tr>\
<tr><td id=bookcase onMouseOver=overbg(bookcase) onMouseOut=outbg(bookcase)><a href=booktype.html>图书类型设置</a></td></tr>\
<tr><td id=bookcase onMouseOver=overbg(bookcase) onMouseOut=outbg(bookcase)><a href=bookcase.html>书架设置</a></td></tr>\
<tr><td id=publishing onMouseOver=overbg(publishing) onMouseOut=outbg(publishing)><a href=publishing.html>出版社设置</a></td></tr></table>'

var readermenu='<table width=90><tr><td id=readerType onMouseOver=overbg(readerType) onMouseOut=outbg(readerType)><a href=readerType.html>读者类型管理</a></td></tr>\
<tr><td id=reader onMouseOver=overbg(reader) onMouseOut=outbg(reader)><a href=reader.html>读者档案管理</a></td></tr></table>'

var borrowmenu='<table width=60><tr><td id=Borrowreg onMouseOver=overbg(Borrowreg) onMouseOut=outbg(Borrowreg)><a href=borrowreglist.html>借阅申请</a></td></tr>\
<tr><td id=Borrow onMouseOver=overbg(Borrow) onMouseOut=outbg(Borrow)><a href=bookBorrow.html>图书借阅</a></td></tr>\
<tr><td id=renew onMouseOver=overbg(renew) onMouseOut=outbg(renew)><a href=bookRenew.html>图书续借</a></td></tr>\
<tr><td id=giveback onMouseOver=overbg(giveback) onMouseOut=outbg(giveback)><a href=bookBack.html>图书归还</a></td></tr></table>'

var querymenu='<table width=90><tr><td id=bookQuery onMouseOver=overbg(bookQuery) onMouseOut=outbg(bookQuery)><a href=bookQuery.html>图书档案查询</a></td></tr>\
<tr><td id=borrowQuery onMouseOver=overbg(borrowQuery) onMouseOut=outbg(borrowQuery)><a href=borrowQuery.html>图书借阅查询</a></td></tr>\
<tr><td id=givebackQuery onMouseOver=overbg(givebackQuery) onMouseOut=outbg(givebackQuery)><a href=bremind.html>借阅到期提醒</a></td></tr></table>'
var userindex='<table width=90><tr><td id=bookQuery onMouseOver=overbg(bookQuery) onMouseOut=outbg(bookQuery)><a href=<?php echo @__MODULE__;?>
/Borrow/userBorrow>借阅申请</a></td></tr>\
\
<tr><td id=givebackQuery onMouseOver=overbg(givebackQuery) onMouseOut=outbg(givebackQuery)><a href=<?php echo @__MODULE__;?>
/Borrow/userinfo>修改个人资料</a></td></tr></table>'

</script>
<style type="text/css">
<!--
.style1 { color: #FFFFFF}
-->
</style>
<div class=menuskin id=popmenu
      onmouseover="clearhidemenu();highlightmenu(event,'on')"
      onmouseout="highlightmenu(event,'off');dynamichide(event)" style="Z-index:100;position:absolute;"></div>
<table width="776" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="115" align="right" valign="bottom" background="<?php echo @IMG_URL;?>
banner.jpg" bgcolor="#FD9C11"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="26" align="right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="33" align="right" background="<?php echo @IMG_URL;?>
menu_line1.gif" bgcolor="#FD9C11"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="5%">&nbsp;<img src="<?php echo @IMG_URL;?>
clock.png" onmouseover="this.src='<?php echo @IMG_URL;?>
clock1.png'" onmouseout="this.src='<?php echo @IMG_URL;?>
clock.png'" onclick="alert('我就知道你会点！')"></td>
        <td width="23%"><font style="color:white"><span id="time"></span></font></td>
        <td align="rigth"><a href="<?php echo @__MODULE__;?>
/Index/index" style="color:#FFFFFF ">首页&nbsp;┊&nbsp;</a><a href="<?php echo @__MODULE__;?>
/Book/bookQuery" style="color:#FFFFFF ">图书查询</a>&nbsp;┊ <a href="<?php echo @__MODULE__;?>
/Book/bookTuijian" style="color:#FFFFFF ">新书推荐&nbsp;</a>┊ 
                <a href="<?php echo @__MODULE__;?>
/Book/bookMustread" style="color:#FFFFFF ">必读书目</a><!-- ┊<a href="news.html" style="color:#FFFFFF ">新闻公告</a> -->
┊<a onmouseover=showmenu(event,userindex) onmouseout=delayhidemenu()  style="CURSOR:hand" class="a1">个人中心</a> ┊ <a href="<?php echo @__MODULE__;?>
/Exit/index" style="color:#FFFFFF ">退出</a>         
         </td>
        </tr>
    </table></td>
  </tr>
</table>
<script type="text/javascript">
    function CurentTime()
    { 
        var now = new Date();
        var year = now.getFullYear();       //年
        var month = now.getMonth() + 1;     //月
        var day = now.getDate();            //日
       
        var hh = now.getHours();            //时
        var mm = now.getMinutes();          //分
        var ss = now.getSeconds();          //秒       
        var clock = year + "-";
       
        if(month < 10)
            clock += "0";
       
        clock += month + "-";
       
        if(day < 10)
            clock += "0";
           
        clock += day + " ";
       
        if(hh < 10)
            clock += "0";
           
        clock += hh + ":";
        if (mm < 10) clock += '0'; 
        clock += mm+":"; 

        if(ss < 10){
            clock +="0";
        }clock +=ss;
       document.getElementById("time").innerHTML=clock; 
    } 
    setInterval("CurentTime()",100);
</script>
<?php }} ?>