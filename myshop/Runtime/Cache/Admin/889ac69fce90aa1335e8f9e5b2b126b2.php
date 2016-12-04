<?php if (!defined('THINK_PATH')) exit();?><!doctype html public "-//w3c//dtd xhtml 1.0 frameset//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-frameset.dtd">
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
        <frame name=head src="/my/myshop/index.php/Admin/Index/head.html" frameborder=0 noresize scrolling=no>
            <frameset cols="170, *">
                <frame name=left src="/my/myshop/index.php/Admin/Index/left.html" frameborder=0 noresize />
                <frame name=right src="/my/myshop/index.php/Admin/Index/right.html" frameborder=0 noresize scrolling=yes />
            </frameset>
    </frameset>
    <noframes>
    </noframes>
</html>