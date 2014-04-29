<?php /* Smarty version Smarty-3.1.16, created on 2014-04-29 10:00:53
         compiled from "E:\apache\www\test\view\default\header.html" */ ?>
<?php /*%%SmartyHeaderCode:3114535c83e1a2cf49-84241495%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb50b7abf551fc575472abdc430c3cc08be9cf79' => 
    array (
      0 => 'E:\\apache\\www\\test\\view\\default\\header.html',
      1 => 1398667596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3114535c83e1a2cf49-84241495',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_535c83e1a30838_40367321',
  'variables' => 
  array (
    'article_types' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535c83e1a30838_40367321')) {function content_535c83e1a30838_40367321($_smarty_tpl) {?>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">太和县桔梗产业集群技术服务中心</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">

                    <li><a href="index.php">关于我们</a>
                    </li>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                    <li><a href="article.php?article_type_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['article_type_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['type_name'];?>
</a>
                    </li>
                    <?php } ?>
                     <li><a href="contact.php">联系我们</a>
                    }
                    </li>
                    <!--
                       <li><a href="article.php?article_type_id=1">图片展示</a>
                    </li>
                    -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<?php }} ?>
