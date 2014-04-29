<?php
define("MadMan",true);
require_once("inc/init.php");
$act="";
$article_type_id=1;
if(isset($_REQUEST['act']))
{
    $act=$_REQUEST['act'];
}
if(isset($_REQUEST['article_type_id']))
{
    $article_type_id=intval($_REQUEST['article_type_id']);
}
$sql="select * from article_type where article_type_id='$article_type_id'";
$type_name=$db->getRow($sql);
if(empty($type_name))
{
    location("index.php");
}
$type_name=$type_name['type_name'];
$smarty->assign("type_name",$type_name);


 $pagetool=pagetool::GetInstance();
    if(!isset($_GET['pageNow']))
    {

        $_GET['pageNow']=0;
    }
    $search="";

    $pageNow=intval($_GET['pageNow']);
    $pagePath='index.php';
    $dfNum=10;
    $sql="select a.*,b.type_name from article as a left join article_type as b on a.article_type_id=b.article_type_id where a.article_type_id='$article_type_id' order by a.article_id desc ";
     if(isset($_REQUEST['search']))
    {
        if(!empty($_REQUEST['search']))
        {

            $search=$_REQUEST['search'];

             $sql="select a.*,b.type_name from article as a left join article_type as b on a.article_type_id=b.article_type_id where title like '%$search%' order by a.article_id desc ";
        }
    }
    $smarty->assign("search",$search);
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
$categroy_list=GetCategroyList();
$tops=GetTop10($article_type_id);
$smarty->assign("tops",$tops);
$smarty->assign("categroy_list",$categroy_list);
$smarty->assign("article_type_id",$article_type_id);
$smarty->display("article.html");

function GetCategroyList()
{
    $sql="select * from article_type";
    $res=$GLOBALS['db']->getAll($sql);
    return $res;
}

function GetTop10($type_id)
{
    $sql="select * from article where article_type_id=$type_id order by add_time desc limit 0,10";
    $res=$GLOBALS['db']->getAll($sql);
    return $res;
}
?>