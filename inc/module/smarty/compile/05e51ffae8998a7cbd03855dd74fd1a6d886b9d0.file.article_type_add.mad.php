<?php /* Smarty version Smarty-3.1.16, created on 2014-04-27 20:22:12
         compiled from "D:\wamp\www\test\mdadmin\template\article_type_add.mad" */ ?>
<?php /*%%SmartyHeaderCode:32555535cf67402ab71-15113179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05e51ffae8998a7cbd03855dd74fd1a6d886b9d0' => 
    array (
      0 => 'D:\\wamp\\www\\test\\mdadmin\\template\\article_type_add.mad',
      1 => 1398586772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32555535cf67402ab71-15113179',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_535cf67417e944_52196667',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535cf67417e944_52196667')) {function content_535cf67417e944_52196667($_smarty_tpl) {?><!DOCTYPE html>
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
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/select2.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/uniform.css">
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
/js/jquery.uniform.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/bootstrap.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery.flot.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery.flot.resize.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/matrix.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/select2.min.js"></script>



    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/datepicker.css" />
    <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/bootstrap-datepicker.js"></script>


</head>

<body>

    <?php echo $_smarty_tpl->getSubTemplate ('header.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php echo $_smarty_tpl->getSubTemplate ('menu.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!--main-container-part-->
    <div id="content">

        <?php echo $_smarty_tpl->getSubTemplate ("breadcrumbs.mad", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




        <div class="container-fluid">

            <div class="row-fluid">
                <div class="widget-box">
                    <div class="widget-title">
                        <span class="icon">
                            <i class="icon-align-justify"></i>
                        </span>
                        <h5>添加分类</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form action="goods.php?act=post_categroy_add" method="POST" enctype='multipart/form-data' class="form-horizontal">

                            <div class="control-group">
                                <label class="control-label">分类名称</label>
                                <div class="controls">
                                    <input name="categroy_name" type="text" class="span11" placeholder="分类名称">
                                </div>
                            </div>

                <input type="hidden" name="parent_id" value="0">
   <!--

                            <div class="control-group">
                                <label class="control-label">上级分类</label>
                                <div class="controls">
                                    <div class="select2-container">
                                         <a href="#" onclick="return false;" class="select2-choice" tabindex="0">
                                            <span>First option</span>
                                            <abbr class="select2-search-choice-close" style="display:none;"></abbr>
                                            <div>
                                                <b></b>
                                            </div>
                                        </a>

                                        <div class="select2-drop select2-with-searchbox select2-offscreen" style="display:block;">

                                            <div class="select2-search">
                                                <input type="text" class="select2-input" autocomplete="off" tabindex="0">

                                            </div>
                                            <ul class="select2-results"></ul>
                                        </div>
                                        <select name="parent_id" style="display:none;">
                                            <option value="0">顶级分类</option>
                                            <option value="2">Second</option>
                                        </select>

                                    </div>
                                </div>
                            </div>
-->





                            <div class="form-actions ">
                                <button type="submit" class="btn btn-success span3 offset3">Save</button>
                                <button type="reset" class="btn btn-primary span3">Reset</button>

                            </div>

                        </form>
                    </div>

                </div>
            </div>

        </div>

    </div>


    <!--end-main-container-part-->

    <?php echo $_smarty_tpl->getSubTemplate ('footer.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>











</body>

</html>
<?php }} ?>
