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
    $sql="select a.*,b.type_name from article as a left join article_type as b on a.article_type_id=b.article_type_id order by article_id desc";
    $db=$GLOBALS['db'];
    $pagetool->setNeed($db,$sql,$dfNum,$pageNow,$pagePath,"a.article_id");
    $res=$pagetool->getAll();
    if(!empty($res))
    {
       $smarty->assign("goods_list",$res['res']);
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
   if(CheckString($_REQUEST['categroy_id']))
   {
       $categroy_id=CheckInt($_REQUEST['categroy_id']) ;
   }
   $sql="select * from categroy where categroy_id='$categroy_id'";
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
   if(CheckString($_REQUEST['goods_id']))
   {
       $goods_id=CheckInt($_REQUEST['goods_id']) ;
   }
   $sql="select * from goods where goods_id='$goods_id'";
   $res=$db->GetRow($sql);
   if(empty($res))
   {
    ShowTips("该商品不存在,请重新尝试!");
   }

   $categroy_list=GetCategroyList();
    $start_time=date("d-m-Y",$res['start_time']);
    $end_time=date("d-m-Y",$res['end_time']);
    $smarty->assign("categroy_list",$categroy_list);
    $smarty->assign("start_time",$start_time);
    $smarty->assign("end_time",$end_time);
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
    $smarty->display("index.mad");
}

function GetCategroyList()
{
    $sql="select * from article_type";
    $res=$GLOBALS['db']->getAll($sql);
    return $res;
}

?>