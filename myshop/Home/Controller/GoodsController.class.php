<?php

/* 
 *商品控制器
 */
//命名空间
namespace Home\Controller;
use Think\Controller;

class GoodsController extends Controller{
    //列表展示
    function showlist(){
       
        $this->display();
    }
    //商品详情
    function detail(){
        $this->display();
    }
}

