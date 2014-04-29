<?php
define("MadMan",true);
require_once("inc/init.php");
$act="";
$article_id=1;
if(isset($_REQUEST['act']))
{
    $act=$_REQUEST['act'];
}
if(isset($_REQUEST['article_id']))
{
    $article_id=intval($_REQUEST['article_id']);
}

$sql="select a.*,b.type_name from article as a left join article_type as b on a.article_type_id=b.article_type_id where a.article_id='$article_id'";
$article=$db->getRow($sql);
if(empty($article))
{
    location("index.php");
}

$smarty->assign("article",$article);
$categroy_list=GetCategroyList();

$smarty->assign("categroy_list",$categroy_list);

$tops=GetTop10($article['article_type_id']);

$smarty->assign("tops",$tops);

$smarty->display("content.html");

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