<?php /* Smarty version Smarty-3.1.16, created on 2014-04-29 14:53:32
         compiled from "E:\apache\www\test\view\new\index.html" */ ?>
<?php /*%%SmartyHeaderCode:26138535f086e2db526-48352644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91b615a0eb846497d476769b04028bb855c4e5d4' => 
    array (
      0 => 'E:\\apache\\www\\test\\view\\new\\index.html',
      1 => 1398754408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26138535f086e2db526-48352644',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_535f086e34a247_96534325',
  'variables' => 
  array (
    'vp' => 0,
    'news_top7' => 0,
    'v' => 0,
    'article_types' => 0,
    'child_article_list' => 0,
    'g' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535f086e34a247_96534325')) {function content_535f086e34a247_96534325($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'E:\\apache\\www\\test\\inc\\module\\smarty\\plugins\\modifier.truncate.php';
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

    <div class="nr01">
        <div class="left">
            <div class="tzgg">
                <div class="ht02">
                    <span class="st14cbai">
                        <a href="#">最新发布</a>
                    </span>
                    <p class="st12hui">
                        <a href="ArticleList.aspx?id=16">更多>></a>
                    </p>
                </div>
                <ul>
                   <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news_top7']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
 $_smarty_tpl->tpl_vars['v']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v']->iteration++;
 $_smarty_tpl->tpl_vars['v']->index++;
 $_smarty_tpl->tpl_vars['v']->first = $_smarty_tpl->tpl_vars['v']->index === 0;
?>
                    <li>
                        ·
                        <a href='content.php?article_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['article_id'];?>
' title='<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
' target='_blank' style='font-size:12px; color: #000;'><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['v']->value['title'],20);?>
</a>

                    </li>
                    <?php } ?>

                </ul>
            </div>
            <div class="lj">
                <a href="Introduce.aspx?id=15">
                    <img src="images/zxjj.jpg" width="237" height="51" border="0" />
                </a>
                <a href="Introduce.aspx?id=155">
                    <img src="images/bmzz.jpg" width="237" height="51" border="0" />
                </a>
            </div>
            <div class="zl">
                <div class="ht02">
                    <span class="st14cbai">
                        <a href="#">专栏</a>
                    </span>
                    <!--<p class="st12hui">
                    <a href="#">更多>></a>
                </p>
                -->
            </div>
            <div class="zl01">
                <!--<img src="images/zt01.jpg" width="214" height="35">
                <a href="http://www.smehen.gov.cn/login!skill.app" target="_blank">
                    <img src="images/zt03.jpg" width="214" height="35"></a>
                <a href="http://www.smehen.gov.cn/magazine!index.app" target="_blank">
                    <img src="images/zt02.jpg" width="214" height="35"></a>
                <a href="http://www.smehen.gov.cn/magazine!index.app" target="_blank">
                    <img src="images/zt02.jpg" width="214" height="35"></a>
                -->
                <a href='http://www.hnzxzx.org.cn/2014cxy/index.htm' title='2014河南产学研' target="_blank">
                    <img src='/Upload/Links/20138281406391194.jpg' width="214" height="35"></a>

                <a href='http://www.smehen.gov.cn/login!skill.app' title='职业技能鉴定' target="_blank">
                    <img src='/Upload/Links/20138281406559592.jpg' width="214" height="35"></a>

                <a href='http://www.smehen.gov.cn/magazine!index.app' title='河南中心企业杂志' target="_blank">
                    <img src='/Upload/Links/20138281407252552.jpg' width="214" height="35"></a>

            </div>
        </div>
        <div class="zjk">
            <div class="ht02">
                <span class="st14cbai">
                    <a href="zjList.aspx">专家库</a>
                </span>
                <p class="st12hui">
                    <a href="zjList.aspx">更多>></a>
                </p>
            </div>
            <ul>
                <table width="227" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="75" height="25" align="center" bgcolor="#E2F6FF"> <strong>名称</strong>
                        </td>
                        <td width="75" align="center" bgcolor="#E2F6FF"> <strong>专业方向</strong>
                        </td>
                        <td width="75" align="center" bgcolor="#E2F6FF">
                            <strong>职称</strong>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div id="gd01" style="overflow: hidden; height: 170px; width: 227px; margin: 0 auto;">
                                <table width="227" border="0" cellpadding="0" cellspacing="0">

                                    <tr>
                                        <td width="59" height="24" align="center">
                                            <a href='zj.aspx?id=197' target='_blank'>窦武</a>
                                        </td>
                                        <td width="76" align="center">粮食工程</td>
                                        <td width="92" align="center">高级工程师</td>
                                    </tr>

                                    <tr>
                                        <td width="59" height="24" align="center">
                                            <a href='zj.aspx?id=196' target='_blank'>王亚</a>
                                        </td>
                                        <td width="76" align="center">白酒酿造</td>
                                        <td width="92" align="center">无</td>
                                    </tr>

                                    <tr>
                                        <td width="59" height="24" align="center">
                                            <a href='zj.aspx?id=195' target='_blank'>崔援军</a>
                                        </td>
                                        <td width="76" align="center">药品医疗器械审评认证</td>
                                        <td width="92" align="center">教授级高工</td>
                                    </tr>

                                    <tr>
                                        <td width="59" height="24" align="center">
                                            <a href='zj.aspx?id=194' target='_blank'>王海波</a>
                                        </td>
                                        <td width="76" align="center">中式烹调师</td>
                                        <td width="92" align="center">高级技师</td>
                                    </tr>

                                    <tr>
                                        <td width="59" height="24" align="center">
                                            <a href='zj.aspx?id=193' target='_blank'>张伯瑞</a>
                                        </td>
                                        <td width="76" align="center">交通土建工程</td>
                                        <td width="92" align="center">教授级高工</td>
                                    </tr>

                                    <tr>
                                        <td width="59" height="24" align="center">
                                            <a href='zj.aspx?id=192' target='_blank'>王用中</a>
                                        </td>
                                        <td width="76" align="center">工业与民用建筑</td>
                                        <td width="92" align="center">教授级高工</td>
                                    </tr>

                                    <tr>
                                        <td width="59" height="24" align="center">
                                            <a href='zj.aspx?id=191' target='_blank'>张利群</a>
                                        </td>
                                        <td width="76" align="center">应用化工</td>
                                        <td width="92" align="center">高级经济师</td>
                                    </tr>

                                    <tr>
                                        <td width="59" height="24" align="center">
                                            <a href='zj.aspx?id=190' target='_blank'>杜震</a>
                                        </td>
                                        <td width="76" align="center">纺织工程</td>
                                        <td width="92" align="center">高级工程师</td>
                                    </tr>

                                    <tr>
                                        <td width="59" height="24" align="center">
                                            <a href='zj.aspx?id=189' target='_blank'>王三星</a>
                                        </td>
                                        <td width="76" align="center">经济管理</td>
                                        <td width="92" align="center">高级经济师</td>
                                    </tr>

                                    <tr>
                                        <td width="59" height="24" align="center">
                                            <a href='zj.aspx?id=188' target='_blank'>张文河</a>
                                        </td>
                                        <td width="76" align="center">经济管理</td>
                                        <td width="92" align="center">高级经济师</td>
                                    </tr>

                                    <tr>
                                        <td width="59" height="24" align="center">
                                            <a href='zj.aspx?id=187' target='_blank'>李彪</a>
                                        </td>
                                        <td width="76" align="center">工商管理</td>
                                        <td width="92" align="center">高级经济师</td>
                                    </tr>

                                    <tr>
                                        <td width="59" height="24" align="center">
                                            <a href='zj.aspx?id=186' target='_blank'>吕冸功</a>
                                        </td>
                                        <td width="76" align="center">机械</td>
                                        <td width="92" align="center">高级工程师</td>
                                    </tr>

                                </table>
                            </div>
                            <script type="text/javascript">
                                        var marquee = new ScrollText("gd01");
                                        marquee.LineHeight = 60;
                                        marquee.Amount = 1;
                                        marquee.Timeout = 30;
                                        marquee.Delay = 50;
                                        marquee.Start();
                                        </script>

                        </td>
                    </tr>

                    <tr>
                        <td height="10">&nbsp;</td>
                    </tr>
                    <tr>
                        <td height="25" bgcolor="#F6F6F6">&nbsp;</td>
                        <td bgcolor="#F6F6F6">
                            <span class="st14chei">
                                <button id="mybtn" onclick="zixun()">咨询留言</button>
                            </span>
                        </td>
                        <td bgcolor="#F6F6F6">&nbsp;</td>


                    </tr>
                </table>
            </ul>
        </div>

    <div class="clearfloat"></div>
    </div>




<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
 $_smarty_tpl->tpl_vars['v']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v']->iteration++;
 $_smarty_tpl->tpl_vars['v']->index++;
 $_smarty_tpl->tpl_vars['v']->first = $_smarty_tpl->tpl_vars['v']->index === 0;
?>
<?php if ($_smarty_tpl->tpl_vars['v']->first) {?>
 <div class="right">
        <div class="gzdt">
            <div class="gzdt1">
                <div class="ht01">
                    <span class="st14cbai">
                        <a href="article.php?article_type_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['article_type_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['type_name'];?>
</a>
                    </span>
                    <p class="st12hui">
                        <a href="article.php?article_type_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['article_type_id'];?>
">更多>></a>
                    </p>
                </div>
                <ul>
                <?php echo GetTops(array('article_type_id'=>$_smarty_tpl->tpl_vars['v']->value['article_type_id']),$_smarty_tpl);?>

                <?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['child_article_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->_loop = true;
?>
                    <li>
                        ·
                        <span>[<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['g']->value['add_time'],"%m-%d");?>
]</span>
                        <a href='article.php?article_id=<?php echo $_smarty_tpl->tpl_vars['g']->value['article_id'];?>
' title='<?php echo $_smarty_tpl->tpl_vars['g']->value['title'];?>
' target='_blank' style='font-size:12px; color: #000;'><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['g']->value['title'],20);?>
</a>
                    </li>
                <?php } ?>
                </ul>
            </div>
            <div class="tpqh">
                <div class="j j_Slide loading">
                    <ol class="tb-slide-list">

                        <li class="J_ECPM">
                            <a href='Article.aspx?id=4533' target="_blank">
                                <img alt='河南省中小企业发展服务中心办事大厅业务理流程图' src='/Upload/ShowPic/20144221110499385.jpg'></a>
                        </li>

                        <li class="J_ECPM">
                            <a href='Article.aspx?id=4594' target="_blank">
                                <img alt='中小企业政策大讲堂全国巡讲信阳行—-财税政策专题培训成功举办' src='/Upload/ShowPic/20144231547507867.jpg'></a>
                        </li>

                        <li class="J_ECPM">
                            <a href='Article.aspx?id=4569' target="_blank">
                                <img alt='中小企业政策大讲堂全国巡讲郑州行—-财税政策专题培训成功举办' src='/Upload/ShowPic/20144221123316691.jpg'></a>
                        </li>

                        <li class="J_ECPM">
                            <a href='Article.aspx?id=4191' target="_blank">
                                <img alt='苗圩出席海牙核安全峰会期间举行的中外媒体吹风会 ' src='/Upload/ShowPic/201441947224676.jpg'></a>
                        </li>

                        <li class="J_ECPM">
                            <a href='Article.aspx?id=4037' target="_blank">
                                <img alt='我中心组织郑州意达职业学校计算机操作工职业技能鉴定' src='/Upload/ShowPic/20143201648335329.jpg'></a>
                        </li>

                    </ol>
                </div>
            </div>
    </div>
<?php } else { ?>

<?php if (($_smarty_tpl->tpl_vars['v']->iteration+1)%2==1) {?>
<div class="right_nr01">
<?php }?>
    <div class="<?php if (($_smarty_tpl->tpl_vars['v']->iteration+1)%2==1) {?>
xwzx<?php } else { ?>zcfg<?php }?>">
        <div class="ht03">
            <span class="st14clan">
             <a href="article.php?article_type_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['article_type_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['type_name'];?>
</a>
            </span>
            <p class="st12hui">
                   <a href="article.php?article_type_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['article_type_id'];?>
">更多>></a>
            </p>
        </div>
        <ul>
  <?php echo GetTops(array('article_type_id'=>$_smarty_tpl->tpl_vars['v']->value['article_type_id']),$_smarty_tpl);?>

                <?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['child_article_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->_loop = true;
?>
                    <li>
                        ·
                        <span>[<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['g']->value['add_time'],"%m-%d");?>
]</span>
                        <a href='article.php?article_id=<?php echo $_smarty_tpl->tpl_vars['g']->value['article_id'];?>
' title='<?php echo $_smarty_tpl->tpl_vars['g']->value['title'];?>
' target='_blank' style='font-size:12px; color: #000;'><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['g']->value['title'],20);?>
</a>
                    </li>
                <?php } ?>


        </ul>
    </div>
 <?php if (($_smarty_tpl->tpl_vars['v']->iteration+1)%2==0) {?>
 </div>
<?php }?>

<?php }?>
<?php } ?>
</div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
