<?php
define("MadMan", true);
require_once("inc.php");
require_once("admin_check.php");
$act="";
if(isset($_REQUEST['act']))
{
    $act=$_REQUEST['act'];
}
if($act=="goods_list")
{
    $pagetool=pagetool::GetInstance();
    if(!isset($_GET['pageNow']))
    {

        $_GET['pageNow']=0;
    }
    $pageNow=intval($_GET['pageNow']);
    $pagePath='index.php';
    $dfNum=20;
    $sql="select a.*,b.type_name from article as a left join article_type as b on a.article_type_id=b.article_type_id order by a.article_id desc";
    $db=$GLOBALS['db'];
    $pagetool->setNeed($db,$sql,$dfNum,$pageNow,$pagePath,"a.article_id");
    $res=$pagetool->getAll();
    if(!empty($res))
    {
       $smarty->assign("goods_list",$res['res']);
       $smarty->assign("pre",$res['pre']);
       $smarty->assign("next",$res['next']);
       $smarty->assign("more",$res['more']);
       $smarty->assign("last",$res['last']);
       $smarty->assign("now",$res['now']);

    }
    else
    {
         $smarty->assign("goods_list",array());
    }
    $smarty->display("goods_list.mad");
}
elseif($act=="site")
{
 $smarty->display("site.mad");
}
elseif($act=="site_edit")
{

    $configs=$GLOBALS['configs'];
    $str="";
    foreach ($configs as $key => $value) {
      if(array_key_exists($key,$_POST))
      {
        if($_POST[$key]!=$value)
        {
          $sql="update configs set cf_value='".$_POST[$key]."' where cf_name='".$key."'";

          $res=$db->query($sql);
          if($db->getAffectedRows()<=0)
          {
            $str=$str. "$key"."未更新成功！<br />";
          }
          else
          {
             //$str=$str. "$key"."更新成功！<br />";
          }
        }
        else
        {
           // $str=$str. "$key"."数据未变动<br />";
        }
      }
    }
    $str=$str."设置完毕！";
    ShowTips($str);
}
elseif($act=="goods_add")
{
    $categroy_list=GetCategroyList();

    $smarty->assign("categroy_list",$categroy_list);
    $smarty->display("goods_add.mad");
}
elseif($act=="article_type_list")
{

    $categroy_list=GetCategroyList();
    $smarty->assign("categroy_list",$categroy_list);
    $smarty->display("goods_categroy_list.mad");
}
elseif($act=="article_type_add")
{
     $smarty->display("article_type_add.mad");
}
elseif($act=="goods_gather")
{
   $categroy_list=GetCategroyList();
   $smarty->assign("categroy_list",$categroy_list);
    $smarty->display("gather.mad");
}
elseif($act=="goods_categroy_edit")
{
   $categroy_id=0;
   if(isset($_REQUEST['article_type_id']))
   {
       $categroy_id=intval($_REQUEST['article_type_id']) ;
   }
   $sql="select * from article_type where article_type_id='$categroy_id'";
   $res=$db->GetRow($sql);
   if(empty($res))
   {
    ShowTips("该分类不存在,请重新尝试!");
   }
   $smarty->assign("categroy_info",$res);
    $smarty->display("goods_categroy_edit.mad");
}
elseif($act=="goods_edit")
{
   $goods_id=0;
   if(isset($_REQUEST['goods_id']))
   {
       $goods_id=intval($_REQUEST['goods_id']) ;
   }
   $sql="select * from article where article_id='$goods_id'";
   $res=$db->GetRow($sql);
   if(empty($res))
   {
    ShowTips("该文章不存在,请重新尝试!");
   }

   $categroy_list=GetCategroyList();

    $smarty->assign("categroy_list",$categroy_list);
   $smarty->assign("goods",$res);
   $smarty->display("goods_edit.mad");
}
elseif($act=="login")
{
  if(isset($_SESSION['admin']))
  {
    location("index.php");
  }

  $smarty->display("login.mad");
}
else
{
    location("index.php?act=goods_list");
    $smarty->display("index.mad");
}

function GetCategroyList()
{
    $sql="select * from article_type";
    $res=$GLOBALS['db']->getAll($sql);
    return $res;
}

?>