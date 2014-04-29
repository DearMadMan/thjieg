<?php

$smarty->assign('title',"");
$smarty->assign('u',"");




/*用户登录判断*/

if(!isset($_SESSION['user_id']))
{
}
else
{
    $users=GetUserInfo("ecs_users","user_id",$_SESSION['user_id']);
    if(empty($users))
    {
        unset($_SESSION['user_id']);
        location("index.php");
    }
    $users=GetRankName($users);
    $smarty->assign("u",$users);
}


//分类

$sql="select * from article_type ";
$article_types=$db->getAll($sql);
$smarty->registerPlugin("function","GetTops","GetTops");
$smarty->assign("article_types",$article_types);


//获取滚动新闻

$round=GetTop("article",5);
$smarty->assign("round",$round);


//获取top新闻
function GetTops($params, $smarty)
{
    $sql="select * from article where article_type_id=".$params['article_type_id'];
    $res=$GLOBALS['db']->getAll($sql);
    $smarty->assign('child_article_list',$res);
   return "";
}

?>