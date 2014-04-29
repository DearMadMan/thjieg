<?php /* Smarty version Smarty-3.1.16, created on 2014-04-29 11:41:30
         compiled from "E:\apache\www\test\view\new\content.html" */ ?>
<?php /*%%SmartyHeaderCode:12326535f1cbe01f0d5-24734521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87522b1645c877edecb6ef1efde98456415d82d0' => 
    array (
      0 => 'E:\\apache\\www\\test\\view\\new\\content.html',
      1 => 1398742886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12326535f1cbe01f0d5-24734521',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_535f1cbe0af746_22854957',
  'variables' => 
  array (
    'vp' => 0,
    'tops' => 0,
    'v' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535f1cbe0af746_22854957')) {function content_535f1cbe0af746_22854957($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_trUncate')) include 'E:\\apache\\www\\test\\inc\\module\\smarty\\plugins\\modifier.trUncate.php';
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
/images/before.gif" width="11" height="11">&nbsp;<a href="ArticleList.aspx?id=89" id="mmmm"><?php echo $_smarty_tpl->tpl_vars['article']->value['type_name'];?>
</a></span>
                            <p class="st12hui">
                                你的当前位置：首页 &gt; <a href="article.php?article_type_id=<?php echo $_smarty_tpl->tpl_vars['article']->value['article_type_id'];?>
" id="mmm"><?php echo $_smarty_tpl->tpl_vars['article']->value['type_name'];?>
</a> &gt; 正文</p>
                    </div>
                    <ul>
                            <div id="title" class="wzbt"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</div>
                            <div id="info" class="xxt">文章来源：中心网站&nbsp;&nbsp;&nbsp;&nbsp;作者：&nbsp;&nbsp;&nbsp;&nbsp;发布时间：2014-4-21&nbsp;&nbsp;&nbsp;&nbsp;</div>
                            <div id="txt" class="xxnr">
                               <?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>

                            </div>
                        </ul>
                </div>

                </div>
            </div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
