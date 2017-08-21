<?php
return array(
	//'配置项'=>'配置值'
	'SHOW_PAGE_TRACE' =>true, //调试配置
	'URL_ROUTER_ON'         =>  true,   // 是否开启URL路由
    'URL_ROUTE_RULES'       =>  array(
                                  's/:name'=>"Home/Show/index",
                                  'a/:name'=>"Admin/Show/index"
                                ), // 默认路由规则 针对模块

    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'test',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'my_',    // 数据库表前缀
);