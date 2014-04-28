<?php
define("MadMan",true);
require_once("inc.php");
require_once("admin_check.php");
$temp_server=$_SERVER['HTTP_HOST'];
$temp_server="http://".$temp_server."/";
uploadfile::SetTempDir("../images/");
$upload=uploadfile::UploadFiles($_FILES);
$callback=$_REQUEST['CKEditorFuncNum'];
$upload[0]=str_replace("../","", $upload[0]);
$file=$temp_server.$upload[0];
echo $temp_server.$upload[0];

echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($callback,'".$file."','');
</script>";


?>