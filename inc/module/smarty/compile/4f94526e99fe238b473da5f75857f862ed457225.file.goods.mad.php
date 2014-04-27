<?php /* Smarty version Smarty-3.1.16, created on 2014-03-06 13:50:14
         compiled from "E:\apache\www\my\view\default\goods.mad" */ ?>
<?php /*%%SmartyHeaderCode:647252c38482c55ed7-85832118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f94526e99fe238b473da5f75857f862ed457225' => 
    array (
      0 => 'E:\\apache\\www\\my\\view\\default\\goods.mad',
      1 => 1394084963,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '647252c38482c55ed7-85832118',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52c38482cc7768_89022301',
  'variables' => 
  array (
    'vp' => 0,
    'pic_list' => 0,
    'v' => 0,
    'goods' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c38482cc7768_89022301')) {function content_52c38482cc7768_89022301($_smarty_tpl) {?><!doctype html>
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
/js/jquery.easing.1.3.js"></script>
     <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/goods.js"></script>
</head>
<body>

   <?php echo $_smarty_tpl->getSubTemplate ("header.mad", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



    <section class="image-list">
        <ul class="image-ul">
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pic_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
            <li><img src="../<?php echo $_smarty_tpl->tpl_vars['v']->value['thumb_url'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_name'];?>
"></li>
            <?php } ?>
        </ul>
        <ul class="point">
            <li>
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pic_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
            <a href="javascript:;"></a>
            <?php } ?>
            </li>
        </ul>
    </section>

    <section class="goods-info">
        <dl class="dls">
            <dt><span class="strong"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_name'];?>
</span></dt>
            <dd>会员价：<span class="strong red">￥<?php echo $_smarty_tpl->tpl_vars['goods']->value['shop_price'];?>
</span>（<?php echo $_smarty_tpl->tpl_vars['goods']->value['discount'];?>
折）</dd>
            <dd>市场价：<span class="gray"><del>￥<?php echo $_smarty_tpl->tpl_vars['goods']->value['market_price'];?>
</del></span></dd>
            <dd>商品编号：<span>2007703</span></dd>
        </dl>
        <div class="buttons">
            <a href="" class="collect">加入收藏</a>
            <a href="" class="add-cart">加入购物车</a>
        </div>
    </section>


    <section class="goods-dis">
     <a href="goods.php?act=goods_dis&&id=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_id'];?>
">商品详情</a>
    </section>

<?php echo $_smarty_tpl->getSubTemplate ("footer.mad", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>





</body>
</html><?php }} ?>
