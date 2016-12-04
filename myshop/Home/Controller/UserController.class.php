<?php

//命名空间必须要写
namespace Home\Controller;
use Think\Controller;
use Model;

/* 
 * 创建前台分组的会员控制器
 */

class UserController extends Controller{
    //登录系统
    function login(){
        //调用视图模版
        //display(),其是父类Controller的方法
        $this->display();//试图模版名称与当前操作方法名称一致
        
    } //注册
    function register(){
        $user = new Model\UserModel();
        //展示,收集
        if(!empty($_POST)){
           // dump($_POST);
            //把爱好的数组变成字符串
           //$_POST['user_hobby'] = implode(',', $_POST['user_hobby']);
          
            $info = $user -> create();
            
            //手机表单,过滤表单信息,非法字段过滤,表单自动验证
            //并把处理好的信息返回
            //array实体内容,说明验证成功
            //false,验证失败
            if($info){
               $info['user_hobby'] = implode(',', $info['user_hobby']);
                $z= $user -> add($info);
                if($z){
                    $this->redirect('Index/index');
                }
                
            }else {
                //验证失败的错误信息
                $this->assign('errorinfo',$user->getError());
            }
            
        }  
            $this->display();
        
        
    }
}