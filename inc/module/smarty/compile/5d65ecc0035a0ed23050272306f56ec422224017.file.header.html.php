<?php /* Smarty version Smarty-3.1.16, created on 2014-04-29 15:11:18
         compiled from "E:\apache\www\test\view\new\header.html" */ ?>
<?php /*%%SmartyHeaderCode:5314535f0dcfeb4f57-33357490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d65ecc0035a0ed23050272306f56ec422224017' => 
    array (
      0 => 'E:\\apache\\www\\test\\view\\new\\header.html',
      1 => 1398755133,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5314535f0dcfeb4f57-33357490',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_535f0dcfed2532_38458980',
  'variables' => 
  array (
    'vp' => 0,
    'article_types' => 0,
    'v' => 0,
    'round' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535f0dcfed2532_38458980')) {function content_535f0dcfed2532_38458980($_smarty_tpl) {?>    <div id="bg">
    <div id="wrap">

            <div class="top">
                <div class="top1">
                    <a onclick="SetHome(window.location)" href="javascript:void(0)">设为首页</a>
                    |
                    <a onclick="AddFavorite(window.location,document.title)"
            href="javascript:void(0)">加入收藏</a>
                    今天是：
                <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/time.js"></script>
                </div>
                <img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/xtb1.jpg" width="13" height="12" />
                &nbsp;&nbsp;欢迎您访问太和县桔梗产业集群技术服务中心!

            </div>
            <div class="banner">
    <img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/99.jpg" height="135" width="1000" alt="">
          </div>
        <div class="menu">
        <ul>
            <li class="dhx">
                <a href="index.php"  class="st14cbai1">首页</a>
            </li>
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v']->iteration++;
 $_smarty_tpl->tpl_vars['v']->last = $_smarty_tpl->tpl_vars['v']->iteration === $_smarty_tpl->tpl_vars['v']->total;
?>
             <li class="dhx" <?php if ($_smarty_tpl->tpl_vars['v']->last) {?> style="background-image:none" <?php }?>>
                <a href="article.php?article_type_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['article_type_id'];?>
" class="st14cbai1"><?php echo $_smarty_tpl->tpl_vars['v']->value['type_name'];?>
</a>
            </li>
            <?php } ?>
        </ul>
       </div>
    <div class="gd">



        <form id="form1" action="result.aspx" method="post" onsubmit="return ck()">
            <div class="ss">
                <span class="st12cl">站内搜索</span>
                <input name="keytop" id="keytop" type="text" size="16" value="请输入关键字"  onfocus="javascript:this.value=''" onblur="javascript:if(this.value=='')this.value='请输入关键字'" />
                &nbsp;
                <input name="button" type="submit" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/ss.jpg); width:60px; height:20px; border:0px" id="button" value="" />
            </div>
        </form>
        <img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/xtb2.jpg" width="15" height="14" />
        &nbsp;&nbsp;
        <span class="st12cl">
            <a href="/ArticleList.aspx?id=148">滚动新闻：</a>
        </span>
        <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="3" scrolldelay="100"
        direction="left" height="30" width="500">
           <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['round']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v']->iteration++;
 $_smarty_tpl->tpl_vars['v']->last = $_smarty_tpl->tpl_vars['v']->iteration === $_smarty_tpl->tpl_vars['v']->total;
?>
            ·
            <a href='content.php?article_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['article_id'];?>
' target='_blank' style='color:#000000'><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
            &nbsp;
            <?php } ?>
        </marquee>
    </div><?php }} ?>
