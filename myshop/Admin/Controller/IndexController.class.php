<?php

/* 
 *后台首页面
 */
//命名空间
namespace Admin\Controller;
use Think\Controller;
class IndexController extends controller{
    //头部
    
    function head(){
        //设置不显示跟踪信息
    C('SHOW_PAGE_TRACE',false);
        $this->display();
    }
    
    //左侧
    function left(){
        //设置不显示跟踪信息
    C('SHOW_PAGE_TRACE',false);
         $this->display();
    }
    
    //右侧
    function right(){
       // dump(get_defined_constants(true));
         $this->display();
    }
    
    //集成页面
    function index(){
         $this->display();
    }
}