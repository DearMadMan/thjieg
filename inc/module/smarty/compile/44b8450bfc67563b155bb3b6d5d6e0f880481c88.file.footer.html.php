<?php /* Smarty version Smarty-3.1.16, created on 2014-04-29 14:50:43
         compiled from "E:\apache\www\test\view\new\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:31592535f104f9e9d50-52143280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44b8450bfc67563b155bb3b6d5d6e0f880481c88' => 
    array (
      0 => 'E:\\apache\\www\\test\\view\\new\\footer.html',
      1 => 1398754241,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31592535f104f9e9d50-52143280',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_535f104f9ec527_67276538',
  'variables' => 
  array (
    'article_types' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535f104f9ec527_67276538')) {function content_535f104f9ec527_67276538($_smarty_tpl) {?><div class="clearfloat"></div>
<div class="footer">
<div class="foot_bot">
    <p>
        <a href="Default.aspx">首 页</a>
        |
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v']->iteration++;
 $_smarty_tpl->tpl_vars['v']->last = $_smarty_tpl->tpl_vars['v']->iteration === $_smarty_tpl->tpl_vars['v']->total;
?>
        <a href="article.php?article_type_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['article_type_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['type_name'];?>
</a>
        <?php if ($_smarty_tpl->tpl_vars['v']->last) {?><?php } else { ?>|<?php }?>
        <?php } ?>
        <br />
        本网站是服务于中国中小企业的政府公益性网站，因部分信息来源于网络，如有侵权请来邮、来电告知，本站将立即改正。
        <br />
        版权所有: 太和县桔梗产业集群技术服务中心
        <br />
        地址：安徽省阜阳市太和县 李兴镇人民东路76号  电话： 86 558 8391062 传真：86 0558 8391222
        <br />

    </p>
</div>
</div>
</div>
</div><?php }} ?>
