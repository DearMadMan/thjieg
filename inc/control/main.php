<?php
/**
 * 公共函数库
 */

/**
 * [GetConfigsFromDatabase 从数据库获取Config]
 * @param [type] $config_dbname [description]
 */
 function GetConfigsFromDatabase($config_dbname)
{
	$sql="select * from $config_dbname";
	$configs=$GLOBALS['db']->GetAll($sql);
	$arr=array();
	$configs_all=array();
	foreach ($configs as $key => $value) {
		$arr[$value['cf_name']]=$value['cf_value'];
		$configs_all[$value['cf_name']]=$value;
	}
	$GLOBALS['configs'] = $arr;
	$GLOBALS['configs_all']=$configs_all;
}
/**
 * [SetConfigsToDataBase description]
 * @param [type] $Data [description]
 */
function SetConfigsToDataBase($Data)
{
	$values="";
	foreach ($GLOBALS['configs']  as $key => $value) {
		if(array_key_exists($key,$Data))
		{
			$GLOBALS['configs'][$key]=$Data[$key];
		}

	}
	foreach ($GLOBALS['configs'] as $key => $value) {
		$values.="('$key','$value'),";
	}
	$values=trim($values,',');
   $GLOBALS['db']->Query("truncate configs");
  $res= $GLOBALS['db']->Query("Insert into configs (cf_name,cf_value) values $values");
   return $res;
}
function Location($target)
{
	ob_clean();
	$target=addslashes($target);
	header("location: $target");
	die();
}
function GetUserInfo($table,$field,$id)
{
	$sql="select * from $table where $field='".intval($id)."'";
	$res=$GLOBALS['db']->getRow($sql);
	return $res;
}

function ShowTips($msg)
{
	$GLOBALS['smarty']->assign("title","");
	$GLOBALS['smarty']->assign("tips",$msg);
	$GLOBALS['smarty']->display("tips.mad");
	die();
}

function GetTop($table,$num)
{
    $sql="select * from $table order by add_time limit 0,$num ";
    $res=$GLOBALS['db']->getAll($sql);
    return $res;
}
function GetRankName($users)
{
    $sql="select * from ecs_user_rank where rank_id='".$users['user_rank']."'";
        $res=$GLOBALS['db']->getRow($sql);
        if(empty($res))
        {
            $users['rank_name']="普通用户";
        }
        else
        {
             $users['rank_name']=$res['rank_name'];
        }
   return $users;
}
function GetAdminInfo($id)
{
	$sql='select * from admins where id='.intval($id);
	$res=$GLOBALS['db']->getRow($sql);
	return $res;
}


/****************javascript******************/
function JsAlert($msg)
{
	$msg=addslashes($msg);
	$str="<script type='text/javascript'>"
		."alert('".$msg."');"
		."</script>";
		echo $str;
}
function JsAlertAndJump($msg,$target)
{
	$msg=addslashes($msg);
	$target=addslashes($target);
	$str="<script type='text/javascript'>"
		."alert('".$msg."');"
		."window.location.href='$target';"
		."</script>";
		echo $str;
		die();

}
function JsJump($target)
{
		$target=addslashes($target);
		$str="<script type='text/javascript'>"
		."window.location.href='$target';"
		."</script>";
		echo $str;
		die();
}

?>