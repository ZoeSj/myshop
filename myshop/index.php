<?php
//设置字体
header("content-type:text/html;charset=utf-8");

//设置系统的模式
define('APP_DEBUG',true);   //开发
//define('APP_DEBUG',false);   //生产
//Home 给静态资源文件设置访问常量路径
define('CSS_URL', '/my/myshop/Home/Public/css/');
define('IMG_URL', '/my/myshop/Home/Public/img/');
define('JS_URL', '/my/myshop/Home/Public/js/');

//Admin分组：
define('ADMIN_CSS_URL','/my/myshop/Admin/Public/css/');
define('ADMIN_IMG_URL','/my/myshop/Admin/Public/img/');
//引入框架的核心程序
//引入接口文件
include "../ThinkPHP/ThinkPHP.php";
