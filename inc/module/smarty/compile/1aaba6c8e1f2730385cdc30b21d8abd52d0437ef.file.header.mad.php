<?php /* Smarty version Smarty-3.1.16, created on 2014-04-27 17:12:07
         compiled from "D:\wamp\www\test\mdadmin\template\header.mad" */ ?>
<?php /*%%SmartyHeaderCode:24943535cc9e7526d91-66891312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1aaba6c8e1f2730385cdc30b21d8abd52d0437ef' => 
    array (
      0 => 'D:\\wamp\\www\\test\\mdadmin\\template\\header.mad',
      1 => 1398586772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24943535cc9e7526d91-66891312',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_535cc9e752ac14_74799815',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535cc9e752ac14_74799815')) {function content_535cc9e752ac14_74799815($_smarty_tpl) {?>
<!--Header-part-->
<div id="header">
  <h1><a href="index.php">Admin</a></h1>
</div>
<!--close-Header-part-->


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">用户名</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> 个人信息</a></li>
        <li class="divider"></li>
        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">设置</span></a></li>
    <li class=""><a title="" href="login.php?act=loginout"><i class="icon icon-share-alt"></i> <span class="text">退出</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch--><?php }} ?>
