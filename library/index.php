<?php
header("content-type:text/html;charset=utf-8");


//开启开发调试模式
define('APP_DEBUG',true);
//定义后台路径
define("CSS_URL","/library/library/Public/css/");
define("IMG_URL","/library/library/Public/Images/");
define("JS_URL","/library/library/Public/JS/");
//定义上传图片的绝对路径
define("UPIMG","/library/library/");
//引入接口文件
include "../ThinkPHP/ThinkPHP.php";