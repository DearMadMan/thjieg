<?php /* Smarty version Smarty-3.1.16, created on 2014-03-06 13:43:41
         compiled from "E:\apache\www\my\view\default\categroy_goods.mad" */ ?>
<?php /*%%SmartyHeaderCode:138415316d30ad45499-62436994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfe0c25e116c256c73b1f71c33d90dc75d0c60ee' => 
    array (
      0 => 'E:\\apache\\www\\my\\view\\default\\categroy_goods.mad',
      1 => 1394077895,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138415316d30ad45499-62436994',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5316d30ad91134_78003688',
  'variables' => 
  array (
    'vp' => 0,
    'goods' => 0,
    'v' => 0,
    'more' => 0,
    'search' => 0,
    'pre' => 0,
    'last' => 0,
    'foo' => 0,
    'now' => 0,
    'next' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5316d30ad91134_78003688')) {function content_5316d30ad91134_78003688($_smarty_tpl) {?><!doctype html>
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
<script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery-1.9.0.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/index.js"></script>
</head>
<body>

    <header class="header-top">
        <div class="left">
        <a class="back" href="#"><i class="fa fa-arrow-left white"></i> 返回</a>
        <span>商品页面</span>
        <a href="" class="right-1"><i class="fa fa-home fz-20"></i></a>
        <a href="" class="right-2"><i class="fa fa-user fz-20"></i></a>
        <a href="" class="right-3"><i class="fa fa-shopping-cart fz-20"></i></a>
        </div>
    </header>
    <section>
        <div class="content">
	     <div class="search">
        <form id="search-form" action="search.php" method="POST">
             <input type="name" id="search" name="search" placeholder="雅诗兰黛"><a href="javascript:;"><i class="fa fa-search white"></i></a>
        </form>
	     </div>
	</div>

    </section>


   <section class="orders-nav">
       <ul class="month">
           <li class="active"><a href="#">价格</a></li>
           <li ><a href="#">销量</a></li>
       </ul>
   </section>
  <?php if ($_smarty_tpl->tpl_vars['goods']->value) {?>
      <section class="cart-list">
 <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        <ul class="list bb">
            <li>
                <dl class="ml-5">

                    <dt><a href="goods.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
"><img src="../<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_thumb'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
"></a></dt>
                    <dd><a href="goods.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
"><span class="strong-14"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</span></a></dd>
                    <dd><span class="shop-price">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['shop_price'];?>
</span> <span class="market-price red"><del>￥<?php echo $_smarty_tpl->tpl_vars['v']->value['market_price'];?>
</del></span>
                    </dd>
                    <dd><p class="pf-start"></p></dd>


                </dl>
            </li>
        </ul>
<?php } ?>
<?php if ($_smarty_tpl->tpl_vars['more']->value==1) {?>
    </section>

      <section class="pagetool">
          <a class="pre" href="search.php?search=<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
&&pageNow=<?php echo $_smarty_tpl->tpl_vars['pre']->value;?>
">上一页</a>
              <select class="select" name="select" onchange="ChangeLoad(this);" id="">
              <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['last']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['last']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                 <option value="search.php?search=<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
&&pageNow=<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['foo']->value==$_smarty_tpl->tpl_vars['now']->value) {?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['last']->value;?>
</option>
              <?php }} ?>
              </select>
           <a class="next" href="search.php?search=<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
&&pageNow=<?php echo $_smarty_tpl->tpl_vars['next']->value;?>
">下一页</a>
           <a href="#" id="hidden-a"></a>
      </section>
  <?php }?>
<?php }?>

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
