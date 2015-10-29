<?php
return array(
	//'配置项'=>'配置值'
	//开启页面跟踪
	'SHOW_PAGE_TRACE'=> false,
	//开启smarty模板
	'TMPL_ENGINE_TYPE'=>'Smarty',
	//设置默认平台
	'DEFAULT_MODULE'=>'Home',	//默认的平台
	//允许允许的平台
	'MODULE_ALLOW_LIST'=> array('Home','Admin'),
	 /* 数据库设置 */
    'DB_TYPE'               =>  'MySQL',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'library',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'li_',    	// 数据库表前缀
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8

);