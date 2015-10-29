<?php /* Smarty version Smarty-3.1.6, created on 2015-10-20 21:45:48
         compiled from "F:/homework/library/library/Admin/View\Book\book_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:156365626458c8ebf30-17866600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e5ab511bbf945ab4423e43ef536bbb738e9fab9' => 
    array (
      0 => 'F:/homework/library/library/Admin/View\\Book\\book_edit.html',
      1 => 1444659564,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156365626458c8ebf30-17866600',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'v' => 0,
    'info' => 0,
    'type_info' => 0,
    't' => 0,
    'pr_info' => 0,
    'p' => 0,
    'case_info' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5626458cb9672',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5626458cb9672')) {function content_5626458cb9672($_smarty_tpl) {?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="shortcut icon" href="<?php echo @IMG_URL;?>
/admin.ico" type="image/x-icon">
<title>图书信息修改</title>
<link href="<?php echo @CSS_URL;?>
style.css" rel="stylesheet">
<link rel="shortcut icon" href="<?php echo @IMG_URL;?>
/admin.ico" type="image/x-icon">
</head>
<script type="text/javascript">
function check(form){
	if(form.bo_code.value==""){
		alert("请输入条形码!");form.bo_code.focus();return false;
	}
	if(form.bo_name.value==""){
		alert("请输入图书姓名!");form.bo_name.focus();return false;
	}
  if(form.bo_name.value.length>="30"){
    alert("图书名称长度不能超过30个字符!");form.bo_name.focus();return false;
  }
  if(form.bo_author.value.length>="20"){
    alert("作者名称长度不能超过20个字符!");form.bo_name.focus();return false;
  }
	if(form.bo_price.value==""){
		alert("请输入图书定价!");form.bo_price.focus();return false;
	}
}
</script>

<script type="text/javascript">
 /****使用ajax显示保存成功信息****/
window.onload=function(){
  //获取表单信息
  var fm=document.getElementsByTagName("form")[0];
  //添加提交事件
  fm.onsubmit=function(evt){
  //通过html5标签获取信息
  var bo_info=new FormData(fm);
  //实例化ajax
  var xhr=new XMLHttpRequest();
  //ajax改变事件
  xhr.onreadystatechange=function(){
    if(xhr.readyState==4){
      document.getElementById("info").innerHTML=xhr.responseText;
      //保存成功，跳转窗口
      setTimeout('window.location.href="<?php echo @__CONTROLLER__;?>
/book"',1000);
    }
  }
  xhr.open("post","<?php echo @__CONTROLLER__;?>
/bookEdit/"+Math.random());
  xhr.send(bo_info);
  //阻止表单提交
  evt.preventDefault();
  }
  }
</script>
<body>
<table width="776" border="0" align="center" cellpadding="0" cellspacing="0" class="tableBorder">
  <tr>
    <td><?php echo $_smarty_tpl->getSubTemplate ("../Index/navigation.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </td>
  </tr>
  <td>
  <table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td valign="top" bgcolor="#FFFFFF"><table width="99%" height="475"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="tableBorder_gray">
          <tr>
           <td height="473" align="center" valign="top" style="padding:5px;"><table width="98%" height="463"  border="0" cellpadding="0" cellspacing="0">
          <tr>
           <td height="22" valign="top" class="word_orange">当前位置：图书档案管理 &gt; 修改图书信息 &gt;&gt;</td>
          </tr>
          <tr>
            <td height="441" align="center" valign="top">
            <table width="100%" height="421"  border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="421" align="center" valign="top">
<form name="form" method="post" action="<?php echo @__CONTROLLER__;?>
/bookEdit/bo_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['bo_id'];?>
" enctype="multipart/form-data">
                                
            <input type="hidden" name="bid" value="">
      <table width="600" height="452"  border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
      <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
          <tr>
            <td width="120" align="center">条&nbsp;形&nbsp;码：</td>
            <td width="480" height="33">
            <input name="bo_code" type="text" id="barcode" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['bo_code'];?>
"></td>
          </tr>
      
          <tr>
            <td align="center">图书名称：</td>
            <td height="35"><input name="bo_name" type="text" id="bookName" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['bo_name'];?>
" size="30">
            <span class="style1"><font style="color:red">*</font></span></td>
          </tr>
          <tr>
            <td height="35" align="center">ISBN：</td>
            <td><input name="bo_isbn" type="text" id="isbn" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['bo_isbn'];?>
"></td>
          </tr>
          <tr>
            <td height="35" align="center">图书类型：</td>
            <td><select name="bo_typeid" class="wenbenkuang" id="booktype">
          <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['type_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>                    
            <option value="<?php echo $_smarty_tpl->tpl_vars['t']->value['by_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['t']->value['by_id']==$_smarty_tpl->tpl_vars['v']->value['bo_typeid']){?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['t']->value['by_name'];?>
</option>
          <?php } ?>                              
            </select>
            </td>
          </tr>
          <tr>
            <td align="center">作&nbsp;&nbsp;者：</td>
            <td><input name="bo_author" type="text" id="author" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['bo_author'];?>
" size="30"></td>
          </tr>
          <tr>
            <td height="36" align="center">译&nbsp;&nbsp;者：</td>
            <td><input name="bo_translator" type="text" id="translator" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['bo_translator'];?>
" size="30"></td>
          </tr>
          <tr>
            <td height="34" align="center">出&nbsp;版&nbsp;社：</td>
            <td><select name="bo_pressid" class="wenbenkuang" id="publishing">
          <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pr_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>                           
            <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['pr_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['p']->value['pr_id']==$_smarty_tpl->tpl_vars['v']->value['pr_id']){?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['p']->value['pr_name'];?>
</option>
          <?php } ?>                              
            </select>
            </td>
          </tr>
          <tr>
            <td height="33" align="center">价&nbsp;&nbsp;格：</td>
            <td><input name="bo_price" type="text" id="price" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['bo_price'];?>
">(元)</td>
          </tr>
          <tr>
            <td height="29" align="center">页&nbsp;&nbsp;码：</td>
            <td><input name="bo_pages" type="text" id="page" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['bo_pages'];?>
"></td>
          </tr>
          <tr>
            <td height="34" align="center">书&nbsp;&nbsp;架：</td>
            <td><select name="bo_bookcaseid" class="wenbenkuang" id="bookcase">
          <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['case_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>                           
            <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['ca_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['c']->value['ca_id']==$_smarty_tpl->tpl_vars['v']->value['ca_id']){?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['c']->value['ca_name'];?>
</option>
          <?php } ?>                            
            </select>
            </td>
          </tr>
          <tr>
            <td height="34" align="center">库&nbsp;&nbsp;存：</td>
            <td><input name="bo_stock" type="text" id="stock" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['bo_stock'];?>
"></td>
          </tr>
          <tr>
            <td height="33" align="center">图片上传：</td>
            <td>
            <input type="file" name="bo_photo" value="上传封面"></td>
          </tr>
          <tr>
            <td height="39" align="center">属性：</td>
            <td><input name="bo_recummend" type="checkbox" id="tuijian" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['bo_recummend'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['bo_recummend']=='1'){?> checked="checked" <?php }?> >
    推荐
      <input name="bo_mustread" type="checkbox" id="bidu" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['bo_mustread'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['bo_mustread']=='1'){?> checked="checked" <?php }?> >
    必读</td>
          </tr>
          <tr>
            <td height="39" align="center">详细介绍：</td>
            <td><textarea name="bo_introduce" cols="50" rows="5" id="beizhu"><?php echo $_smarty_tpl->tpl_vars['v']->value['bo_introduce'];?>
</textarea>
            <input type="hidden" name="bo_id" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['bo_id'];?>
">
            </td>
          </tr>
    <?php } ?>
          <tr>
            <td colspan="2" align="center"><input name="Submit" type="submit" class="btn_grey" value="保存" onClick="return check(form)">
&nbsp;
            <input name="Submit2" type="button" class="btn_grey" value="返回" onClick="history.back();">&nbsp;&nbsp;<span id="info"></span></td>
          </tr>
                </table>
</form></td>
                    </tr>
                      </table></td>
                    </tr>
                </table></td>
              </tr>
            </table>
              <?php echo $_smarty_tpl->getSubTemplate ("../Index/copyright.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td>
        </tr>
    </table></td>
  </tr>
</table>
</body>
</html>

<?php }} ?>