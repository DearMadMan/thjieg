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

$sql="select * from article where article_id='$article_id'";
$article=$db->getRow($sql);
if(empty($article))
{
    location("index.php");
}

$smarty->assign("article",$article);
$categroy_list=GetCategroyList();
$smarty->assign("categroy_list",$categroy_list);
$smarty->display("content.html");

function GetCategroyList()
{
    $sql="select * from article_type";
    $res=$GLOBALS['db']->getAll($sql);
    return $res;
}




?>