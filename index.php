<?php
define("MadMan",true);
require_once("inc/init.php");

$news_top7=GetTop("article",7);
$smarty->assign("news_top7",$news_top7);
$smarty->display("index.html");


?>