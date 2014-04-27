<?php
require_once("../inc/init.php");
//@ini_set('display_errors',        1);
$smarty->setTemplateDir(ROOT_PATH."mdadmin".DIRECTORY_SEPARATOR."template".DIRECTORY_SEPARATOR);



$smarty->assign('view_path',"template");
$smarty->assign('vp',"template");
$smarty->assign("plugin_path","plugin");

?>