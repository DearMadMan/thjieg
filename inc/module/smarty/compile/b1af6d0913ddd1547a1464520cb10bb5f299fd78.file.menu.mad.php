<?php /* Smarty version Smarty-3.1.16, created on 2014-04-27 22:51:01
         compiled from "D:\wamp\www\test\mdadmin\template\menu.mad" */ ?>
<?php /*%%SmartyHeaderCode:32380535cc9e753e492-78496978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1af6d0913ddd1547a1464520cb10bb5f299fd78' => 
    array (
      0 => 'D:\\wamp\\www\\test\\mdadmin\\template\\menu.mad',
      1 => 1398610258,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32380535cc9e753e492-78496978',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_535cc9e7542314_58496843',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535cc9e7542314_58496843')) {function content_535cc9e7542314_58496843($_smarty_tpl) {?><!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> 控制面板</a>
  <ul>
  <!--
    <li class="active"><a href="index.php"><i class="icon icon-home"></i> <span>控制面板</span></a> </li>
    <li ><a href="index.php?act=site"><i class="icon icon-sitemap"></i> <span>站点设置</span></a> </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>用户中心</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a href="form-common.html">用户管理</a></li>
        <li><a href="form-validation.html">评论管理</a></li>
        <li><a href="form-wizard.html">留言查询</a></li>
      </ul>
    </li>
 -->
    <li class="submenu open"> <a href="#"><i class="icon icon-file"></i> <span>文章中心</span> <span class="label label-important">4</span></a>
      <ul>
        <li><a href="index.php?act=goods_list">文章列表</a></li>
        <li><a href="index.php?act=goods_add">添加文章</a></li>
        <li><a href="index.php?act=article_type_list">文章分类</a></li>
        <li><a href="index.php?act=article_type_add">添加分类</a></li>

      </ul>
    </li>
    <!--
    <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>统计管理</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a href="error403.html">会员统计</a></li>
        <li><a href="error404.html">留言统计</a></li>
        <li><a href="error405.html">统计代码</a></li>
      </ul>
    </li>

    -->
  </ul>
</div>
<!--sidebar-menu--><?php }} ?>
