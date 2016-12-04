<?php

/* 
 *后台管理员控制器
 */
//命名空间
namespace Admin\Controller;
use Think\Controller;
class ManagerController extends controller{
    //系统登录方法
    function login(){
        $this->display();
    }
}
