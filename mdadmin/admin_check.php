<?php
if(!isset($_SESSION['admin'])||empty($_SESSION['admin']))
{
    if($_GET['act']!="login")
    {
         Location("index.php?act=login");
    }

}



?>