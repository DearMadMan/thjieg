<?php /* Smarty version Smarty-3.1.16, created on 2014-04-27 12:35:07
         compiled from "E:\apache\www\test\mdadmin\template\login.mad" */ ?>
<?php /*%%SmartyHeaderCode:6545535c88fbcef6a4-08880066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fa5bf70faf6ff4c9d02455d4dd43576dc9fb423' => 
    array (
      0 => 'E:\\apache\\www\\test\\mdadmin\\template\\login.mad',
      1 => 1394846614,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6545535c88fbcef6a4-08880066',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_535c88fbd5fc40_45666914',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535c88fbd5fc40_45666914')) {function content_535c88fbd5fc40_45666914($_smarty_tpl) {?><!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>login</title>
   	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/login.css">
   	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery-1.9.0.js"></script>
   	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/login.js"></script>
</head>
<body>
<div class="wrap">
	<div class="content">
		<div class="pic"></div>
		<form id='sign' action="login.php?act=login" method="POST">
		<div class="login">
			<p class='user'><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/login-user.png" alt="name"><input  type="text" name='user_name'></p>
			<p class='user'><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/login-password.png" alt="password"><input  type="password" name='user_password'></p>
			<p class='remenber'><input class='checkbox' type="checkbox" > remenber me</p>
			<input  type="hidden" name='remenber' value='false'>
			<div class="submit">Sign In</div>

		</div>
		</form>
	</div>
</div>
</body>
</html><?php }} ?>
