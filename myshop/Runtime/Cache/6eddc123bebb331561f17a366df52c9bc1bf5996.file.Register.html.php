<?php /* Smarty version Smarty-3.1.6, created on 2016-12-04 23:38:04
         compiled from "E:/wamp/www/my/myshop/Home/View\User\Register.html" */ ?>
<?php /*%%SmartyHeaderCode:2769258443426e41cb6-67609614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6eddc123bebb331561f17a366df52c9bc1bf5996' => 
    array (
      0 => 'E:/wamp/www/my/myshop/Home/View\\User\\Register.html',
      1 => 1480865732,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2769258443426e41cb6-67609614',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58443427adae0',
  'variables' => 
  array (
    'errorinfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58443427adae0')) {function content_58443427adae0($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="Generator" content="YONGDA v1.0" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="Keywords" content="YONGDA商城" />
        <meta name="Description" content="YONGDA商城" />

        <title>YONGDA商城 - Powered by YongDa</title>

        <link href="<?php echo @CSS_URL;?>
style.css" rel="stylesheet" type="text/css" />

    </head>
    <body class="index_body">
        <div class="block clearfix" style="position: relative; height: 98px;">
            <a href="#" name="top"><img class="logo" src="<?php echo @IMG_URL;?>
logo.gif"></a>

            <div id="topNav" class="clearfix">
                <div style="float: left;"> 
                    <font id="ECS_MEMBERZONE">

                        <div id="append_parent"></div>
                        欢迎光临本店&nbsp;
                        <a href="./index.php?r=user/login"> 登录</a>
                        <a href="./index.php?r=user/register">注册</a>
                    </font>
                </div>
                <div style="float: right;">

                    <a href="#">查看购物车</a>
                    |
                    <a href="#">选购中心</a>
                    |
                    <a href="#">标签云</a>
                    |
                    <a href="#">报价单</a>
                </div>

            </div>
            <div id="mainNav" class="clearfix">
                <a href="#" class="cur">首页<span></span></a>
                <a href="#">GSM手机<span></span></a>
                <a href="#">双模手机<span></span></a>
                <a href="#">手机配件<span></span></a>
                <a href="#">优惠活动<span></span></a>

                <a href="#">留言板<span></span></a>
            </div>
        </div>

        <div class="header_bg">
            <div style="float: left; font-size: 14px; color:white; padding-left: 15px;">
            </div>  

            <form id="searchForm" method="get" action="#">
                <input name="keywords" id="keyword" type="text" />

                <input name="imageField" value=" " class="go" style="cursor: pointer; background: url('<?php echo @IMG_URL;?>
sousuo.gif') no-repeat scroll 0% 0% transparent; width: 39px; height: 20px; border: medium none; float: left; margin-right: 15px; vertical-align: middle;" type="submit" />

            </form>
        </div>
        <div class="blank5"></div>
        <div class="header_bg_b">
            <div class="f_l" style="padding-left: 10px;">
                <img src="<?php echo @IMG_URL;?>
biao6.gif" />
                北京市区，现在下单(截至次日00:30已出库)，<b>明天上午(9-14点)</b>送达 <b>免运费火热进行中！</b>

            </div>
            <div class="f_r" style="padding-right: 10px;">
                <img style="vertical-align: middle;" src="<?php echo @IMG_URL;?>
biao3.gif">
                    <span class="cart" id="ECS_CARTINFO">
                        <a href="#" title="查看购物车">您的购物车中有 0 件商品，总计金额 ￥0.00元。</a></span>
                    <a href="#"><img style="vertical-align: middle;" src="<?php echo @IMG_URL;?>
biao7.gif"></a>

            </div>
        </div>

        <div class="block block1">  

            <div class="block box">
                <div class="blank"></div>
                <div id="ur_here">
                    当前位置: <a href="#">首页</a> <code>&gt;</code> 用户注册 
                </div>
            </div>
            <div class="blank"></div>


            <!--放入view具体内容-->

            <div class="block box">

                <div class="usBox">
                    <div class="usBox_2 clearfix">
                        <div class="logtitle3"></div>
                        <form id="yw0" action="<?php echo @__SELF__;?>
" method="post">          
                            <table cellpadding="5" cellspacing="3" style="text-align:left; width:100%; border:0;">
                                <tbody>
                                    <tr>
                                        <td style="width:13%; text-align: right;"><label for="User_username" class="required">用户名 
                                        <span class="required">*</span></label>
                                        </td>

                                        <td style="width:87%;">
                                            <input class="inputBg" size="25" name="username" id="User_username" type="text" value="" />                  
                                            <span style="color:red;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['errorinfo']->value['username'])===null||$tmp==='' ? '' : $tmp);?>
</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right">
                                            <label for="User_password" class="required">密码 <span class="required">*</span></label>
                                        </td>

                                        <td>
                                            <input class="inputBg" size="25" name="password" id="User_password" type="password" value="" />   
                                            <span style="color:red;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['errorinfo']->value['password'])===null||$tmp==='' ? '' : $tmp);?>
</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right"><label for="User_password2">密码确认</label></td>
                                        <td>
                                            <input class="inputBg" size="25" name="password2" id="User_password2" type="password" />
                                            <span style="color:red;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['errorinfo']->value['password2'])===null||$tmp==='' ? '' : $tmp);?>
</span>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td align="right"><label for="User_user_email">邮箱</label></td>
                                        <td>
                                            <input class="inputBg" size="25" name="user_email" id="User_user_email" type="text" value="" /> 
                                            <span style="color:red;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['errorinfo']->value['user_email'])===null||$tmp==='' ? '' : $tmp);?>
</span>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td align="right"><label for="User_user_qq">qq号码</label></td>
                                        <td>
                                            <input class="inputBg" size="25" name="user_qq" id="User_user_qq" type="text" value="" />
                                            <span style="color:red;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['errorinfo']->value['user_qq'])===null||$tmp==='' ? '' : $tmp);?>
</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right"><label for="User_user_tel">手机</label></td>
                                        <td>
                                            <input class="inputBg" size="25" name="user_tel" id="User_user_tel" type="text" value="" />
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <!--radioButtonList($model,$attribute,$data,$htmlOptions=array())-->
                                        <td align="right"><label for="User_user_sex">性别</label></td>
                                        <td>
                                            <input id="ytUser_user_sex" type="hidden" value="" name="user_sex" />
                                            <span id="User_user_sex">
                                            <input id="User_user_sex_0" value="1" checked="checked" type="radio" name="user_sex" /> 
                                            <label for="User_user_sex_0">男</label>&nbsp;
                                            <input id="User_user_sex_1" value="2" type="radio" name="user_sex" /> 
                                            <label for="User_user_sex_1">女</label>&nbsp;
                                            <input id="User_user_sex_2" value="3" type="radio" name="user_sex" /> 
                                            <label for="User_user_sex_2">保密</label></span>                                
                                        </td>
                                    </tr>
                                    <tr>
                                        <!--dropDownList($model,$attribute,$data,$htmlOptions=array())-->
                                        <td align="right"><label for="User_user_xueli">学历</label></td>
                                        <td>
                                            <select name="user_xueli" id="User_user_xueli">
                                                <option value="1" selected="selected">-请选择-</option>
                                                <option value="2">小学</option>

                                                <option value="3">初中</option>
                                                <option value="4">高中</option>
                                                <option value="5">大学</option>
                                            </select>   <span style="color:red;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['errorinfo']->value['user_xueli'])===null||$tmp==='' ? '' : $tmp);?>
</span>           
                                            <div class="errorMessage" id="User_user_xueli_em_" style="display:none"></div>      
                                        </td>
                                    </tr>
                                    <tr>
                                        <!--checkBoxList($model,$attribute,$data,$htmlOptions=array())-->
                                        <td align="right"><label for="User_user_hobby">爱好</label></td>

                                        <td>
                                            <input id="ytUser_user_hobby" type="hidden" value="" name="user_hobby" />
                                            <span id="User_user_hobby">
                                            <input id="User_user_hobby_0" value="1" type="checkbox" name="user_hobby[]" /> 
                                            <label for="User_user_hobby_0">篮球</label>&nbsp;
                                            <input id="User_user_hobby_1" value="2" type="checkbox" name="user_hobby[]" /> 
                                            <label for="User_user_hobby_1">足球</label>&nbsp;
                                            <input id="User_user_hobby_2" value="3" type="checkbox" name="user_hobby[]" /> 
                                            <label for="User_user_hobby_2">排球</label>&nbsp;
                                            <input id="User_user_hobby_3" value="4" type="checkbox" name="user_hobby[]" /> 
                                            <label for="User_user_hobby_3">棒球</label>
                                            </span>           
                                            <span style="color:red;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['errorinfo']->value['user_hobby'])===null||$tmp==='' ? '' : $tmp);?>
</span>
                                        </td>
                                    </tr>
                                    <tr>

                                        <!--textArea($model,$attribute,$htmlOptions=array())-->
                                        <td align="right"><label for="User_user_introduce">简介</label></td>
                                        <td>
                                            <textarea cols="50" rows="5" name="user_introduce" id="User_user_introduce"></textarea>                      
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>

                                        <td align="left">
                                            <input  value="" class="us_Submit_reg" type="submit" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>

                        </form>        </div>
                </div>
            </div>
            <!--放入view具体内容-->

        </div>

        <div class="blank"></div>
        <div class="block">
            <a href="#" target="_blank" title="YONGDA商城"><img alt="YONGDA商城" src="<?php echo @IMG_URL;?>
di.jpg"></a>
            <div class="blank"></div>
        </div>

        <div class="block">
            <div class="box">
                <div class="helpTitBg" style="clear: both;">
                    <dl>
                        <dt><a href="#" title="新手上路 ">新手上路 </a></dt>
                        <dd><a href="#" title="售后流程">售后流程</a></dd>
                        <dd><a href="#" title="购物流程">购物流程</a></dd>

                        <dd><a href="#" title="订购方式">订购方式</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#" title="手机常识 ">手机常识 </a></dt>
                        <dd><a href="#" title="如何分辨原装电池">如何分辨原装电池</a></dd>
                        <dd><a href="#" title="如何分辨水货手机 ">如何分辨水货手机</a></dd>
                        <dd><a href="#" title="如何享受全国联保">如何享受全国联保</a></dd>

                    </dl>
                    <dl>
                        <dt><a href="#" title="配送与支付 ">配送与支付 </a></dt>
                        <dd><a href="#" title="货到付款区域">货到付款区域</a></dd>
                        <dd><a href="#" title="配送支付智能查询 ">配送支付智能查询</a></dd>
                        <dd><a href="#" title="支付方式说明">支付方式说明</a></dd>
                    </dl>

                    <dl>
                        <dt><a href="#" title="会员中心">会员中心</a></dt>
                        <dd><a href="#" title="资金管理">资金管理</a></dd>
                        <dd><a href="#" title="我的收藏">我的收藏</a></dd>
                        <dd><a href="#" title="我的订单">我的订单</a></dd>
                    </dl>
                    <dl>

                        <dt><a href="#" title="服务保证 ">服务保证 </a></dt>
                        <dd><a href="#" title="退换货原则">退换货原则</a></dd>
                        <dd><a href="#" title="售后服务保证 ">售后服务保证</a></dd>
                        <dd><a href="#" title="产品质量保证 ">产品质量保证</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#" title="联系我们 ">联系我们 </a></dt>

                        <dd><a href="#" title="网站故障报告">网站故障报告</a></dd>
                        <dd><a href="#" title="选机咨询 ">选机咨询</a></dd>
                        <dd><a href="#" title="投诉与建议 ">投诉与建议</a></dd>
                    </dl>
                </div>
            </div>


        </div>
        <div class="blank"></div>
        <div id="bottomNav" class="box block">
            <div class="box_1">
                <div class="links clearfix"> 
                    <a href="#" target="_blank" title="YONGDA商城"><img src="<?php echo @IMG_URL;?>
ecmoban_link.jpg" alt="YONGDA商城" border="0"></a>

                    <a href="#" target="_blank" title="YONGDA 网上商店管理系统">
                        <img src="<?php echo @IMG_URL;?>
yongda_logo.gif" alt="YONGDA 网上商店管理系统" border="0" />
                    </a>


                    [<a href="#" target="_blank" title="免费申请网店">免费申请网店</a>]
                    [<a href="#" target="_blank" title="免费开独立网店">免费开独立网店</a>]


                    [<a href="#" target="_blank" title="免费开独立网店">yongda商城</a>]
                </div>
            </div>
        </div>
        <div class="blank"></div>

        <div id="bottomNav" class="box block">
            <div class="bNavList clearfix">
                <a href="#">免责条款</a>
                |
                <a href="#">隐私保护</a>
                |
                <a href="#">咨询热点</a>
                |
                <a href="#">联系我们</a>

                |
                <a href="#">Powered&nbsp;by&nbsp;<strong><span style="color: rgb(51, 102, 255);">YongDa</span></strong></a>
                |
                <a href="#">批发方案</a>
                |
                <a href="#">配送方式</a>

            </div>

        </div>

        <div id="footer">
            <div class="text">
                © 2005-2012 YONGDA 版权所有，并保留所有权利。<br />
            </div>
        </div>

    </body>
</html><?php }} ?>