<?php /* Smarty version Smarty-3.1.16, created on 2014-04-27 20:34:46
         compiled from "D:\wamp\www\test\mdadmin\template\goods_edit.mad" */ ?>
<?php /*%%SmartyHeaderCode:6785535cf720166814-70835029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf562f9c36bda82f80b41edbe843ec67d216470d' => 
    array (
      0 => 'D:\\wamp\\www\\test\\mdadmin\\template\\goods_edit.mad',
      1 => 1398602084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6785535cf720166814-70835029',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_535cf720399094_88035244',
  'variables' => 
  array (
    'vp' => 0,
    'ckeditor_path' => 0,
    'goods' => 0,
    'categroy_list' => 0,
    'v' => 0,
    'start_time' => 0,
    'end_time' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535cf720399094_88035244')) {function content_535cf720399094_88035244($_smarty_tpl) {?><!DOCTYPE html>
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
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['ckeditor_path']->value;?>
/ckeditor.js"></script>

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
                        <span class="icon"> <i class="icon-align-justify"></i>
                        </span>
                        <h5>修改文章</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form action="goods.php?act=post_edit" method="POST" enctype='multipart/form-data' class="form-horizontal">

                            <div class="control-group">
                                <label class="control-label">文章标题</label>
                                <div class="controls">
                                    <input name="goods_name" type="text" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['title'];?>
" class="span11" placeholder="商品名称"></div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">文章分类</label>
                                <div class="controls">
                                    <div class="select2-container">
                                        <!--     <a href="#" onclick="return false;" class="select2-choice" tabindex="0">
                                        <span>First option</span> <abbr class="select2-search-choice-close" style="display:none;"></abbr>
                                        <div> <b></b>
                                        </div>
                                    </a>
                                    -->
                                    <div class="select2-drop select2-with-searchbox select2-offscreen" style="display:block;">

                                        <div class="select2-search">
                                            <input type="text" class="select2-input" autocomplete="off" tabindex="0"></div>
                                        <ul class="select2-results"></ul>
                                    </div>
                                    <select name="categroy_id" style="display:none;">
                                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categroy_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['article_type_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['article_type_id']==$_smarty_tpl->tpl_vars['goods']->value['article_type_id']) {?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['v']->value['type_name'];?>
</option>
                                        <?php } ?>
                                    </select>

                                </div>
                            </div>
                        </div>
<!--
                        <div class="control-group">
                            <label class="control-label">商品图片</label>
                            <div class="controls">
                                <div class="uploader">
                                    <input name="goods_img" type="file" size="19" style="opacity: 0;"></div>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">商品价格</label>
                            <div class="controls">
                                <div class="input-append">
                                    <input name="shop_price" type="text" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['shop_price'];?>
" class="span11" placeholder="5.00">
                                    <span class="add-on">￥</span>
                                </div>
                            </div>
                        </div>

                        <div class="control-group">

                            <label class="control-label">市场价格</label>
                            <div class="controls">
                                <div class="input-append">
                                    <input name="market_price" type="text" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['market_price'];?>
" class="span11" placeholder="100.00">
                                    <span class="add-on">￥</span>
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">商品简语</label>
                            <div class="controls">
                                <input name="goods_dis" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_dis'];?>
" type="text" class="span11" placeholder="小编说:"></div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">喜欢人数</label>
                            <div class="controls">
                                <input name="goods_like" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_like'];?>
" type="text" class="span11" placeholder="111"></div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">收藏人数</label>
                            <div class="controls">
                                <input name="goods_collect" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_collect'];?>
" type="text" class="span11" placeholder="222"></div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">商品URL</label>
                            <div class="controls">
                                <input name="goods_href" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_href'];?>
" type="text" class="span11" placeholder="http://detail.tmall.com/item.htm?id=20217001448&ali_trackid=2:mm_40395660_4078284_15110430,6gC0y:1394501233_6k3_1140764622&clk1=ba106d3b2a9d3328e4e5c7a9a84ccc6e&spm=a3300.2167489.5634677.8.gwMjhT"></div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">多少人想买</label>
                            <div class="controls">
                                <input name="user_want"  value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['user_want'];?>
" type="text" class="span11" placeholder="300"></div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">默认排序</label>
                            <div class="controls">
                                <input name="goods_index" type="text" class="span11"  value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_index'];?>
"></div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">展示起始时间(dd-mm)</label>
                            <div class="controls">
                                <input name="start_time" type="text" data-date="<?php echo $_smarty_tpl->tpl_vars['start_time']->value;?>
" data-date-format="dd-mm-yyyy" value="<?php echo $_smarty_tpl->tpl_vars['start_time']->value;?>
" class="datepicker span11">
                                <span class="help-block">Date with Formate of (dd-mm-yy)</span>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">展示结束时间(dd-mm)</label>
                            <div class="controls">
                                <input name="end_time" type="text" data-date="<?php echo $_smarty_tpl->tpl_vars['end_time']->value;?>
" data-date-format="dd-mm-yyyy" value="<?php echo $_smarty_tpl->tpl_vars['end_time']->value;?>
" class="datepicker span11">
                                <span class="help-block">Date with Formate of (dd-mm-yy)</span>
                            </div>
                        </div>
-->
         <div class="control-group">
                                <label class="control-label">文章内容</label>
                                <div class="controls">
                                  <textarea id="article_content" name="content" class="span11"><?php echo $_smarty_tpl->tpl_vars['goods']->value['content'];?>
</textarea>
                            </div>

              </div>



                        <div class="form-actions ">
                            <button type="submit" class="btn btn-success span3 offset3">Save</button>
                            <button type="reset" class="btn btn-primary span3">Reset</button>

                        </div>
                        <input type="hidden" name="goods_id" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['article_id'];?>
"></form>
                </div>

            </div>
        </div>

    </div>

</div>
<script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/article_edit.js"></script>
<!--end-main-container-part--><?php echo $_smarty_tpl->getSubTemplate ('footer.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</body>

</html><?php }} ?>
