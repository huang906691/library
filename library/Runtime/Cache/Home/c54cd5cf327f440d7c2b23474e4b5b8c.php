<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<title>图书馆管理系统</title>
<link href="CSS/style.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<table width="776" border="0" align="center" cellpadding="0" cellspacing="0" class="tableBorder">
  <tr>
    <td>
      <?php include ("unavigation.php"); ?>	</td>
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
        <td height="124"><?php include("conn/conn.php"); $query=mysql_query("select bbs from tb_library"); $info=mysql_fetch_array($query);?>
		<marquee direction="up" height="80" scrollAmount=1  behavior="scroll" scrollDelay=4 width=185
            align="right" onMouseOver="this.stop()" onMouseOut="this.start()" ><?php echo $info[bbs] ?></marquee> </td>
      </tr>
    </table></td>
    <td width="74%" align="center" valign="top" style="padding:5px;"><table width="563" height="156" border="0" align="center" cellpadding="0" cellspacing="5">
      <tr>
        <td width="34"><img src="images/moveleft.gif" width="23" id="r_l" onClick="r_left()"> </td>
        <td width="474"><TABLE width=100% height="132" border=0 cellPadding=0 cellSpacing=0>
            <TBODY>
              <TR>
                <TD vAlign=top background="" height=120><TABLE cellSpacing=0 cellPadding=0 width=100% border=0>
                    <TBODY>
                      <TR>
                        <TD width="100%" height=120 align=middle vAlign=center><!--------------------demo start------------------>
                            <div id=demo style="OVERFLOW: hidden; WIDTH: 500px; COLOR: #ffffff; HEIGHT: 120px">
                              <table cellpadding=0 width="100%" align=left border=0 
            cellspace="0">
                                <tbody>
                                  <tr>
                                    <!--------------------demo1--------------------->
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
                                                              <?php include("conn/conn.php"); $sql="select * from tb_bookinfo order by id asc"; $result=mysql_query($sql,$conn); do{ ?>
                                                              <td width="150"><div align="center"><a href="booklook.asp?bookid=<?php echo $rs[id] ?>"><img src="<?php echo $rs[photo] ?>" alt="<?php echo $rs[bookname] ?>" width="175" height="112" border="0" /></a></div></td>
                                                              <?php  }while ($rs=mysql_fetch_array($result)) ?>
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
                                    <!-------------------demo2--------------------->
                                    <td id=demo2 width="0"></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <!--------------------demo end------------------>
                            <SCRIPT>
var dir=1//每步移动像素，大＝快
var speed=1//循环周期（毫秒）大＝慢
demo2.innerHTML=demo1.innerHTML
function Marquee()//暂停移动
 demo.onmouseout=function() {MyMar=setInterval(Marquee,speed)}//继续移动
}
function r_left(){if (dir=-1)dir=1}//换向左移
function r_right(){if (dir=1)dir=-1}//换向右移

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
        <td width="35"><img src="images/moveright.gif" width="21" id="r_r" onClick="r_right()"> </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="325" align="center" valign="top" style="padding:5px;">      <table width="100%" height="121" border="0" class="tableBorder_grey">
        <tr>
          <td height="30" bgcolor="#FF9900"><strong>用户登录</strong></td>
        </tr>
        <tr>
          <td height="83">
            <table width="100%"  border="0">
              <form name="form1" method="post" action="chkuser_login.php">
                <tr>
                  <td width="31%">用户名：</td>
                  <td width="69%"><input name="username" type="text" class="txt_grey" id="username" size="15"></td>
                </tr>
                <tr>
                  <td>密&nbsp;&nbsp;码：</td>
                  <td><input name="pwd" type="password" class="txt_grey" id="pwd" size="15"></td>
                </tr>
                <tr>
                  <td colspan="2"><div align="center">
                      <input name="Submit" type="submit" class="btn_grey" value="登录">
                      <input name="Submit" type="button" class="btn_grey" value="注册" onclick="window.location.href='userreg.php'">
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
        <tr><?php include("function.php"); ?>
          <td height="155" valign="top"><?php echo ShowVote() ?></td>
        </tr>
      </table></td>
    <td height="325" align="center" valign="top" style="padding:5px;"><table width="564" height="315"  border="0" class="tableBorder_grey">
      <tr bgcolor="#DBEBF7">
        <td width="182" height="35"><div align="left"><strong>新书推荐</strong></div></td>
        <td width="182"><div align="left"><strong>借阅排行</strong></div></td>
        <td width="184"><div align="left"><strong>必读书目</strong></div></td>
      </tr>
      <tr>
        <td height="270" valign="top"><?php $sql="select * from tb_bookinfo where tuijian=1 order by id desc,inTime desc"; $result=mysql_query($sql,$conn); while ($row=mysql_fetch_array($result)){ ?>
          <div align="left">
    <ul>
      <li> <a href="book_view.php?id=<?php echo $row[id] ?>"><?php echo mb_substr($row[bookname],0,20) ?>...</a></li>
    </ul>
    <?php }?>
          </div></td>
        <td valign="top"><?php $sql=("select * from (select bookid,count(bookid) as degree from tb_borrow group by bookid) as borr  order by borr.degree desc limit 10"); $result=mysql_query($sql,$conn); while ($row=mysql_fetch_array($result)){ $sql1=mysql_query("select * from tb_bookinfo where id=$row[bookid]"); $info1=mysql_fetch_array($sql1);?>
              <ul>
                <li><a href="book_view.php?id=<?php echo $info1[id] ?>"><?php echo mb_substr($info1[bookname],0,20) ?>...</a></li>
              </ul>
              <?php }?>
          </td>
        <td valign="top"><?php $sql="select * from tb_bookinfo where bidu=1 order by id desc,inTime desc"; $result=mysql_query($sql,$conn); while ($row=mysql_fetch_array($result)){ ?>
          <div align="left">
              <ul>
                <li><a href="book_view.php?id=<?php echo $row[id] ?>"><?php echo mb_substr($row[bookname],0,20) ?>...</a></li>
              </ul>
              <?php }?>
          </div></td>
      </tr>
    </table></td>
  </tr>
</table>
    <?php include("copyright.php");?></td>
  </tr>
</table>
</td>
  </tr>
</table>
</body>
</html>