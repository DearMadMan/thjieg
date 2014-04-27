<?php
define("MadMan", true);
require_once("inc.php");

$act="";
if(isset($_REQUEST['act']))
{
    $act=$_REQUEST['act'];
}

if($act=="login")
{

    if(isset($_REQUEST['user_name'])&&isset($_REQUEST['user_password']))
    {

        $sql="select * from admin where admin_name='".$_REQUEST['user_name']."' and admin_word='".strtolower(md5($_REQUEST['user_password']))."'";
        $row=$db->getRow($sql);
        if(!empty($row))
        {
            $_SESSION['admin']=$row;
            location("index.php");
        }
        else
        {
                JsAlertAndJump("用户名或密码错误！","index.php?act=login");
        }

    }
    else
    {
        die();
    }
}
elseif($act=="loginout")
{
    if(isset( $_SESSION['admin']))
    {
        unset($_SESSION['admin']);
        if(!isset($_SESSION['admin']))
        {
             location("index.php");
        }
    }
}
else
{
 $smarty->Display("login.mad");
}
?>