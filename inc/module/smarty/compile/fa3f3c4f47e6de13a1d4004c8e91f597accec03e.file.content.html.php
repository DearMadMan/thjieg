<?php /* Smarty version Smarty-3.1.16, created on 2014-04-27 22:34:31
         compiled from "D:\wamp\www\test\view\default\content.html" */ ?>
<?php /*%%SmartyHeaderCode:910535d13876fe9c6-06155731%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa3f3c4f47e6de13a1d4004c8e91f597accec03e' => 
    array (
      0 => 'D:\\wamp\\www\\test\\view\\default\\content.html',
      1 => 1398609270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '910535d13876fe9c6-06155731',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_535d13878cf7a5_65706771',
  'variables' => 
  array (
    'vp' => 0,
    'article' => 0,
    'categroy_list' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535d13878cf7a5_65706771')) {function content_535d13878cf7a5_65706771($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\wamp\\www\\test\\inc\\module\\smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home 1 - Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/modern-business.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>

                    <small>太和县桔梗产业集群技术服务中心</small>

                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">首页</a>
                    </li>
                    <li class="active"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</li>
                </ol>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-8">



              <!-- the actual blog post: title/author/date/content -->
                <hr>
                <p><i class="fa fa-clock-o"></i> Posted on <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['add_time'],"%Y/%m/%d");?>
 by <a href="#">admin</a>
                </p>
                <hr>
                <!--
                <img src="http://placehold.it/900x300" class="img-responsive">
                <hr>
                -->
               <?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>




            </div>

            <div class="col-lg-4">
                <div class="well">
                    <h4>文章检索</h4>
                    <div class="input-group">
                        <input type="text" id="search" class="form-control">
                        <span class="input-group-btn">
                            <button id="gosearch" class="btn btn-default" type="button"><i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                    <!-- /input-group -->
                </div>
                <!-- /well -->
                <div class="well">
                    <h4>相关文章</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categroy_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>
                            <?php if (($_smarty_tpl->tpl_vars['v']->iteration%2)==1) {?>
                                <li><a href="article.php?article_type_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['article_type_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['type_name'];?>
</a>
                                </li>
                            <?php }?>
                            <?php } ?>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categroy_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>
                                  <?php if (($_smarty_tpl->tpl_vars['v']->iteration%2)==0) {?>
                                <li><a href="article.php?article_type_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['article_type_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['type_name'];?>
</a>

                                </li>
                              <?php }?>
                            <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Bootstrap's default well's work great for side widgets! What is a widget anyways...?</p>
                </div>
                <!-- /well -->
            </div>
        </div>

    </div>



    <!-- /.container -->

   <?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!-- /.container -->

    <!-- JavaScript -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery-1.10.2.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/bootstrap.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/modern-business.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/article.js"></script>
</body>

</html>
<?php }} ?>
