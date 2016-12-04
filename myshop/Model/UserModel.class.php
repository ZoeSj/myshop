<?php

/* 
 * User模型类
 */
//命名空间
namespace Model;
use Think\Model;

class UserModel extends Model{
    protected $patchValidate = true;
    //通过定义成员,设置表单规则
    protected $_validate = array(
        //aksdhaiudiw
        //用户名的验证,必须填写
        array('username','require','用户名必须填写'),
        array('username','','用户名必须唯一',0,'unique'),
        array('password','require','密码必须填写'),
        array('password2','require','确认密码必须填写'),
        array('password2','password','两次密码必须一致',0,'confirm'),
        array('user_email','email','邮箱格式不正确',2),
        array('user_qq','number','qq必须是数字组成'),
        array('user_qq','5,12','位数是5到12之间',0,'length'),
        array('usr_xueli','2,5','学历必须选择一个',0,'between'),
        array('user_hobby','check_hobby','爱好必须选择两个或以上',1,'callback'),
    ) ;
    //定义一个方法进行爱好的验证
    //$arg代表被验证的表单信息
    function check_hobby($arg){
        if(count($arg)<2){
            return false;;
        } return true;
    }
}
