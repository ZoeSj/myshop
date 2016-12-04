<?php /* Smarty version Smarty-3.1.6, created on 2016-12-01 16:26:28
         compiled from "E:/wamp/www/my/myshop/Admin/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:28442583fd9994a2552-20296344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '300c170facc389b3dd934a77479a7b4bf00bdad0' => 
    array (
      0 => 'E:/wamp/www/my/myshop/Admin/View\\Index\\index.html',
      1 => 1480580781,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28442583fd9994a2552-20296344',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_583fd99954667',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583fd99954667')) {function content_583fd99954667($_smarty_tpl) {?><!doctype html public "-//w3c//dtd xhtml 1.0 frameset//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-frameset.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <meta http-equiv=pragma content=no-cache />
        <meta http-equiv=cache-control content=no-cache />
        <meta http-equiv=expires content=-1000 />
        
        <title>管理中心 v1.0</title>
    </head>
    <!--
        以下frame框架的src属性值的设置不要使用相对路径，会收到路由的影响
        而要使用绝对路径(要设置独立路由地址)：
         my/myshop/index.php/Admin/Index/head
         my/myshop/index.php/Admin/Index/left
         my/myshop/index.php/Admin/Index/right
        -->
    <frameset border=0 framespacing=0 rows="60, *" frameborder=0>
        <frame name=head src="<?php echo @__CONTROLLER__;?>
/head" frameborder=0 noresize scrolling=no>
            <frameset cols="170, *">
                <frame name=left src="<?php echo @__CONTROLLER__;?>
/left.html" frameborder=0 noresize />
                <frame name=right src="<?php echo @__CONTROLLER__;?>
/right.html" frameborder=0 noresize scrolling=yes />
            </frameset>
    </frameset>
    <noframes>
    </noframes>
</html><?php }} ?>