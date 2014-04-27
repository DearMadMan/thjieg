<?php /* Smarty version Smarty-3.1.16, created on 2014-04-27 17:12:09
         compiled from "D:\wamp\www\test\mdadmin\template\goods_categroy_list.mad" */ ?>
<?php /*%%SmartyHeaderCode:15885535cc9e9942232-43742585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0077ae785a6b11fd083b4ead0c7cdeef81c8e803' => 
    array (
      0 => 'D:\\wamp\\www\\test\\mdadmin\\template\\goods_categroy_list.mad',
      1 => 1398586772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15885535cc9e9942232-43742585',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vp' => 0,
    'categroy_list' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_535cc9e9ae4212_85891406',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535cc9e9ae4212_85891406')) {function content_535cc9e9ae4212_85891406($_smarty_tpl) {?><!DOCTYPE html>
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
                        <h5>分类列表</h5>
                    </div>
                    <div class="widget-content nopadding">


                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>分类ID</th>
                                    <th>分类名称</th>
                                    <th>编辑</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categroy_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                                <tr>
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['v']->value['article_type_id'];?>

                                    </td>
                                    <td> <?php echo $_smarty_tpl->tpl_vars['v']->value['type_name'];?>
</td>
                                     <td> <a href="index.php?act=goods_categroy_edit&article_type_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['article_type_id'];?>
"><i class="icon-edit"></i> 编辑</a>&nbsp; <a href="goods.php?act=goods_categroy_delete&categroy_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['article_type_id'];?>
" onclick="if(!confirm('确定要删除该数商品吗'))return false;"><i class="icon-trash"></i> 删除</a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>


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
