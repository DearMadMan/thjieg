<?php /* Smarty version Smarty-3.1.16, created on 2014-03-06 10:59:33
         compiled from "E:\apache\www\my\view\default\goods_dis.mad" */ ?>
<?php /*%%SmartyHeaderCode:117725317e41e223e48-83455521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f43fa89a1a3260967b45e44f18cc32802d85443' => 
    array (
      0 => 'E:\\apache\\www\\my\\view\\default\\goods_dis.mad',
      1 => 1394074751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117725317e41e223e48-83455521',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5317e41e2667f1_39358634',
  'variables' => 
  array (
    'vp' => 0,
    'goods' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5317e41e2667f1_39358634')) {function content_5317e41e2667f1_39358634($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0" />
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/sytle.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/pure-min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/plugins/font-awesome-4.0.3/css/font-awesome.min.css">
</head>
<body>

    <header class="header-top">
        <div class="left">
        <a class="back" href="#"><i class="fa fa-arrow-left white"></i> 返回</a>
        <span>商品详情</span>
        <a href="" class="right-1"><i class="fa fa-home fz-16"></i></a>
        <a href="" class="right-2"><i class="fa fa-user fz-16"></i></a>
        <a href="" class="right-3"><i class="fa fa-shopping-cart fz-16"></i></a>
        </div>
    </header>





    <section class="goods-dis-imglist">
    <p>
    <?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_desc'];?>

    </p>
    </section>





	<footer>

	   <section class="user-nav">
	        <section class="wrap">
	            <ul class="ul-3">
	                <li class="first"><span><a href="login.html">登录</a></span><span>|</span><span><a href="register.html">注册</a></span></li>
	                <li class="last"><span><a href="#">TOP</a></span></li>
	            </ul>
	        </section>
	    </section>




	    <section class="index-nav">
	        <a href="#">首页</a>
	        <a href="#">用户中心</a>
	        <a href="#">全部分类</a>
	        <a href="#">购物车</a>
	    </section>
	    <section class="wrap copy-right">
	        <p>客服热线: 400-080-1778 邮箱: 888@97dfsc.com</p>
	    </section>
	</footer>

</body>
</html><?php }} ?>
