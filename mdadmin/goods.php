<?php
define("MadMan", true);
require_once("inc.php");
require_once("admin_check.php");
$act="";
if(isset($_REQUEST['act']))
{
    $act=$_REQUEST['act'];
}

if($act=="post_add")
{
   $goods_img="";
   if(!empty($_FILES))
   {
        uploadfile::SetTempDir("../images/");
        $file_data_type=array("jpg","png");
        uploadfile::Init($temp_dir="",$file_size="",$file_data_type="",$random_name="",$date_dir="");
        $upload=uploadfile::UploadFiles($_FILES);
        ob_clean();
        if(!empty($upload))
        {
            $upload[0]=str_replace("../", "", $upload[0]);
           $goods_img=$upload[0];
        }
        else
        {

        }
    }
    $fileds="article_type_id,title,content,add_time";
    $datas=array(zero($_POST['categroy_id']),
                 $_POST['goods_name'],
                 $_POST['content'],
                 time()
        );
   $res= $db->AutoExcute("article","",$fileds,$datas);
   if($res)
   {
    ShowTips("文章添加成功！");
   }
}
elseif($act=="post_edit")
{
  $goods_img="";
   if(!empty($_FILES))
   {
        uploadfile::SetTempDir("../images/");
        $file_data_type=array("jpg","png");
        uploadfile::Init($temp_dir="",$file_size="",$file_data_type="",$random_name="",$date_dir="");
        $upload=uploadfile::UploadFiles($_FILES);
        ob_clean();
        if(!empty($upload))
        {
            $upload[0]=str_replace("../", "", $upload[0]);
           $goods_img=$upload[0];
        }
        else
        {

        }
    }
    $fileds="article_type_id,title,content";
    $datas=array(zero($_POST['categroy_id']),
                 $_POST['goods_name'],
                 $_POST['content']

        );
    if(!empty($goods_img))
    {
         $fileds= $fileds.",goods_img";
         $datas[]=$goods_img;
    }
   $res= $db->AutoExcute("article","article_id=".zero($_POST['goods_id']),$fileds,$datas,"update");
   if($res)
   {
    ShowTips("文章修改成功！");
   }
   else
   {
    ShowTips("修改失败，请稍后尝试!");
   }
}
elseif($act=="goods_delete")
{
   $res= $db->AutoExcute("article","article_id=".zero($_REQUEST['goods_id']));
   if($res)
   {
    ShowTips("文章删除成功！");
   }
   else
   {
    ShowTips("删除失败，请稍后尝试！");
   }
}
elseif($act=="post_categroy_add")
{
    if(!isset($_POST['categroy_name'])||empty($_POST['categroy_name']))
    {
        ShowTips("分类名不能为空！");
    }
    $fileds="type_name";
    $dates=array($_POST['categroy_name']);
    $res=$db->AutoExcute("article_type","",$fileds,$dates);
    if($res)
    {
      ShowTips("分类添加成功！");
    }
    else
    {
        ShowTips("添加失败,请重新尝试!");
    }
}
elseif($act=="post_categroy_edit")
{
  $categroy_id=0;
   if(isset($_REQUEST['categroy_id']))
   {
       $categroy_id=intval($_REQUEST['categroy_id']) ;
   }
   $sql="select * from article_type where article_type_id='$categroy_id'";
   $res=$db->GetRow($sql);
   if(empty($res))
   {
    ShowTips("该分类不存在,请重新尝试!");
   }
   if(empty($_REQUEST['categroy_name']))
   {
     ShowTips("分类名为空！");
   }
   $sql="update article_type set type_name='".$_REQUEST['categroy_name']."' where article_type_id=$categroy_id";
   $res=$db->Query($sql);
   if($db->GetAffectedRows()>0)
   {
       ShowTips("修改成功！");
   }
   else
   {
      ShowTips("修改失败，请稍后尝试！");
   }

}
elseif($act=="goods_categroy_delete")
{
   $res= $db->AutoExcute("article_type","article_type_id=".zero($_REQUEST['categroy_id']));
   if($res)
   {
    ShowTips("分类删除成功！");
   }
   else
   {
    ShowTips("删除失败，请稍后尝试！");
   }
}
elseif($act=="ajax_clear_all")
{
    $sql="truncate goods";
    $db->query($sql);
    $g=$db->GetAffectedRows();
    $sql="truncate user_comment";
    $db->query($sql);
    $c=$db->GetAffectedRows();
    $arr=array();
    $arr['error']="ok";
    $arr["str"]="商品表受影响行数:$g 评论表受影响行数 $c";
    die(json_encode($arr));
}
else
{

}

function Zero($something)
{
    if(!isset($something)||empty($something))
    {
        return 0;
    }
    if(!is_numeric($something))
    {
        return intval($something);
    }
    return $something;
}
?>