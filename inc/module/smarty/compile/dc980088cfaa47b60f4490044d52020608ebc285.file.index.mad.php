<?php /* Smarty version Smarty-3.1.16, created on 2014-04-27 17:12:07
         compiled from "D:\wamp\www\test\mdadmin\template\index.mad" */ ?>
<?php /*%%SmartyHeaderCode:31822535cc9e73c35c8-65080182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc980088cfaa47b60f4490044d52020608ebc285' => 
    array (
      0 => 'D:\\wamp\\www\\test\\mdadmin\\template\\index.mad',
      1 => 1398586773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31822535cc9e73c35c8-65080182',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_535cc9e750f688_69303278',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535cc9e750f688_69303278')) {function content_535cc9e750f688_69303278($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/fullcalendar.css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/matrix-style.css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/matrix-media.css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/jquery.gritter.css" />
<link href='<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/google.css' rel='stylesheet' type='text/css'>

<script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery.ui.custom.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/bootstrap.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery.flot.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery.flot.resize.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/matrix.js"></script>
</head>
<body>

    <?php echo $_smarty_tpl->getSubTemplate ('header.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ('menu.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--main-container-part-->
<div id="content">

    <?php echo $_smarty_tpl->getSubTemplate ("breadcrumbs.mad", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb"> <a href="index.php"> <i class="icon-dashboard"></i> 控制面板 </a> </li>
        <li class="bg_lg span3"> <a href="charts.html"> <i class="icon-user"></i>用户管理</a> </li>
        <li class="bg_lo"> <a href="tables.html"> <i class="icon-comments"></i> 评论管理</a> </li>
        <li class="bg_ls"> <a href="grid.html"> <i class="icon-envelope"></i> 留言管理</a> </li>
        <li class="bg_lo span3"> <a href="index.php?act=goods_list"> <i class="icon-shopping-cart"></i> 商品列表</a> </li>
        <li class="bg_ls"> <a href="index.php?act=goods_add"> <i class="icon-pencil"></i> 添加商品</a> </li>
        <li class="bg_lb"> <a href="index.php?act=article_type_list"> <i class="icon-tags"></i>文章分类</a> </li>
        <li class="bg_lg"> <a href="index.php?act=article_type_add"> <i class="icon-calendar"></i> 添加分类</a> </li>
        <li class="bg_lr"> <a href="error404.html"> <i class="icon-info-sign"></i> 会员统计</a> </li>

      </ul>
    </div>
<!--End-Action boxes-->


    <hr/>

  </div>
</div>

<!--end-main-container-part-->

    <?php echo $_smarty_tpl->getSubTemplate ('footer.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>











<!--

<script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery.dataTables.min.js"></script>

-->

</body>
</html>
<?php }} ?>
