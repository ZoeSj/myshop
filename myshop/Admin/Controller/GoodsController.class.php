<?php

/* 
 * 后台商品控制器
 */
//命名空间
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends controller{
    //商品展示
    function showlist1(){
         //使用GoodsModel模型类
         //实例化普通Model对象
        //$goods =new \Model\GoodsModel();
        //dump($goods);
        
        //$english =new \Model\EnglishModel();
        //dump($english);
        //实例化基类Model对象
       // $obj = D();
        //dump($obj);
       // $obj = D('User');//实例化Model对象,同时操作sw_user数据表
      //  dump($obj);
        $this->display();
    }
    function showlist2(){
        $goods = new \Model\GoodsModel();
        
        $info=$goods->select();
        //dump($info);//二维数组展示
        //以下两个方法被直接定义到了父类里面,他们都是对smarty方法的封装.
        $this->assign('info',$info);
        $this->display();
    }
    function showlist(){
        //$goods = new \Model\GoodsModel();
        $info = D('Goods')->order('goods_id desc')->select();
        $this->assign('info',$info);
        $this->display();
    }
    //商品添加
    function add1(){
        $goods = D('Goods');
        //第一种数组方式添加
        $arr = array(               
            'goods_name'=>'iphone7',
            'goods_price'=>6500,
            'goods_weight'=>115,
            'goods_number'=>15.
                );
        $z=$goods -> add($arr);
        dump($z);
        $this->display();
    }
    function add2(){
          $goods = D('Goods');
          //AR方式添加
          $goods -> goods_name = "三星7";
          $goods ->goods_price=4600;
          $goods ->goods_number=16;
          $goods ->goods_weight = 116;
          $z=$goods -> add();
          dump($z);
          $this->display();
    }
    function add(){
        $goods=D('Goods');
        //两个逻辑,展示表单,收集表单信息
        if(!empty($_POST)){
            //收集表单数据
            //dump($_POST);
            $z = $goods->add($_POST);
            if($z){
                 //$this ->redirect(分组/控制器/操作方法, 参数array, 间隔时间, 提示信息);
                $this ->redirect('showlist', array('name'=>'tom','age'=>23), 2, '数据添加成功!');
            }else{
                $this ->redirect('add', array(), 2, '数据添加失败!');
            }
        }  else {
            //展示表单
            $this->display();
        }
       // $this->display();
    }
    //商品修改
    function update1(){
        //数据修改
        $goods = new \Model\GoodsModel();
        //$goods ->goods_id =156;
        $goods ->goods_name = "nokia333";
        $goods  -> goods_price = 3200;
        $goods -> goods_number = 23; 
        
        $z = $goods ->where('goods_id>144 and goods_id<150')-> save();
        dump($z);
        
        $this->display();
    }
    /*
     * 三个形参$goods_id,$height,$addr
     * 是给upd方法传递的三个形参
     */
    function update($goods_id){
       // dump($goods_id);
        //获得被修改的商品信息
        //find() 获得数据表记录信息,每次通过一维数组返回一个记录结果
        //Model对象->find(),获得第一个结果
        //Model对象->find(数字)
 
        $goods = D('Goods');
        //两个步骤,展示表单,收集表单
        if(!empty($_POST)){
            //dump($_POST);
            $z = $goods -> save($_POST);
             if($z){
              
                $this ->redirect('showlist', array(), 2, '数据修改成功!');
            }else{
                $this ->redirect('update', array('goods_id'=>$goods_id), 2, '数据修改失败!');
            }
        }  else {
             $info = $goods->find($goods_id);
        //dump($info);
        $this->assign('info',$info);
        $this->display();
        }
       
    }
}