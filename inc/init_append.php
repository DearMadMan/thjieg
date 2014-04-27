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


?>