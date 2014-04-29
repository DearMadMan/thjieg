<?php /* Smarty version Smarty-3.1.16, created on 2014-04-29 11:35:20
         compiled from "E:\apache\www\test\view\new\article.html" */ ?>
<?php /*%%SmartyHeaderCode:25239535f1241ed6246-48485225%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '588eb8a99f0f5190777b19d64a14014e64a4731a' => 
    array (
      0 => 'E:\\apache\\www\\test\\view\\new\\article.html',
      1 => 1398742436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25239535f1241ed6246-48485225',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_535f1241f2e490_91235310',
  'variables' => 
  array (
    'vp' => 0,
    'tops' => 0,
    'v' => 0,
    'type_name' => 0,
    'goods_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535f1241f2e490_91235310')) {function content_535f1241f2e490_91235310($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_trUncate')) include 'E:\\apache\\www\\test\\inc\\module\\smarty\\plugins\\modifier.trUncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'E:\\apache\\www\\test\\inc\\module\\smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>太和县桔梗产业集群技术服务中心</title>
    <link href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/css.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" language="javascript" src="js/select.js"></script>
    <script type="text/javascript" language="JavaScript" src="js/gundong.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery-1.10.2.js" language="javascript" type="text/javascript"></script>
    <script src="js/oslide.js" language="javascript" type="text/javascript"></script>
    <script src="js//easing.js" language="javascript" type="text/javascript"></script>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/style.css" />

</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="lb_nr01">
                <div class="lb_left">
                    <div class="znss">
                        <div class="ht02">
                            <span class="st14cbai"><a href="#">站内搜索</a></span>
                        </div>
                        <form id="form2" action="result.aspx" method="post" onsubmit="return ck2()">

                        <ul>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td width="71%" height="40" align="right">
                                        <label for="textfield">
                                        </label>
                                        <input name="keyleft" type="text" id="keyleft" value="请输入关键字" size="20" onfocus="javascript:this.value=''" onblur="javascript:if(this.value=='')this.value='请输入关键字'" />
                                    </td>
                                    <td width="29%" align="left">
                                        &nbsp;
                                        <input name="button" type="submit" class="ssan" id="button" value="提交" />
                                    </td>
                                </tr>
                            </table>
                        </ul>
                        </form>
                    </div>
                    <div class="djph">
                        <div class="ht02">
                            <span class="st14cbai"><a href="#">最新发布</a></span>
                        </div>
                        <ul>
                           <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tops']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                           <li><a href='content.php?article_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['article_id'];?>
' title='<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
' target='_blank'><?php echo smarty_modifier_trUncate($_smarty_tpl->tpl_vars['v']->value['title'],18);?>
</a></li>
                           <?php } ?>



                        </ul>
                    </div>
                </div>
                <div class="lb_right">
                    <div class="xxlb">
                        <div class="ht05">
                            <span class="st14clan">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/before.gif" width="11" height="11" />&nbsp;<a><?php echo $_smarty_tpl->tpl_vars['type_name']->value;?>
</a></span>
                            <p class="st12hui">
                                你的当前位置：<a href="index.php">首页</a> > <?php echo $_smarty_tpl->tpl_vars['type_name']->value;?>
</p>
                        </div>
                        <ul>


                           <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                             <li><span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['add_time'],"%Y-%m-%d");?>
</span>·<a href='content.php?article_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['article_id'];?>
' title='<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
' target='_blank' style='color:#000000;font-size:12px'><?php echo smarty_modifier_trUncate($_smarty_tpl->tpl_vars['v']->value['title'],40);?>
</a></li>
                           <?php } ?>

                        </ul>
                        <p id="td_page" class="page"> <span style='color:Red;'>1</span><span><a href='/ArticleList.aspx?page=2&id=89'>2</a></span><span><a href='/ArticleList.aspx?page=3&id=89'>3</a></span><span><a href='/ArticleList.aspx?page=2&id=89'>下一页</a></span><span><a href='/ArticleList.aspx?page=6&id=89'>末页</a></span></p>
                    </div>
                </div>
            </div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
