<?php
define("MadMan", true);

require_once("inc.php");
//require_once("admin_check.php");

$act="";
if(isset($_REQUEST['act']))
{
    $act=$_REQUEST['act'];
}
if($act=="gatherOne")
{

    if(isset($_REQUEST['data']))
    {
          $arr=array();
        $data=str_replace("%%%","&",$_REQUEST['data']);
        $data=stripslashes($data);
        $data=json_decode($data,true);

        //判断是否是已存在的数据
        $sql="select * from goods where goods_name='".$data['name']."' and goods_img='".$data['url']."'";
        $res=$db->getRow($sql);
        if(!empty($res))
        {
             $arr['error']="ok";
            $arr['msgs']="该数据已经存在！";
            die(json_encode($arr));
            die();
        }
        else
        {
            /*
            $arr['error']="error";
            $arr['msgs']="$sql";
            die(json_encode($arr));
            */
        }

        $fields=array("categroy_id","goods_name","shop_price","goods_img","goods_dis","goods_like","goods_collect","goods_href","user_want","add_time","start_time","end_time","market_price","goods_index");
        $datas=array(
            $data["categroy"],
            $data['name'],
            $data['price'],
            $data['url'],
            $data['dis'],
            rand(300,2000),
            rand(300,2000),
            "http://item.taobao.com/item.htm?id=".$data['id'],
            rand(300,2000),
            time(),
            time(),
            time()+60*60*24*2,
             $data['market_price'],
             rand(0,100)
            );
        $res=$db->autoExcute("goods","",$fields,$datas);

        if($res)
        {
            $arr['error']="ok";
            $arr['msgs']="采集成功！";
        }
        else
        {
              $arr['error']="error";
            $arr['msgs']="未成功！";
        }
        $goods_id=$db->GetInsertId();

        $comments=array();
        while (count($comments)<4) {
             $num=rand(1,83);
             if(!in_array($num, $comments))
             {
                $comments[]=$num;
             }
        }
        $comments=implode(",",$comments);
        $sql="select * from comment_rand where id in(".$comments.")";
        $comments=$db->getAll($sql);
        for($i=0;$i<4;$i++)
        {
            $fields=array(
                "user_id",
                "user_comment",
                "goods_id",
                "add_time",
                "img_url");

            $data=array(0,$comments[$i]['comments'],$goods_id,time(),rand(1,100));
           $res=$db->autoExcute("user_comment","",$fields,$data);
        }

        die(json_encode($arr));
    }
}
elseif($act=="try")
{
    //定时采集

    $sql="truncate goods";
    $db->query($sql);
    $g=$db->GetAffectedRows();
    $sql="truncate user_comment";
    $db->query($sql);
    $c=$db->GetAffectedRows();

GatherCategroy('http://www.taofen8.com/cat-1','衣服');
GatherCategroy('http://www.taofen8.com/cat-2','配饰');
GatherCategroy('http://www.taofen8.com/cat-3','家居');
GatherCategroy('http://www.taofen8.com/cat-4','美妆');














}
else
{
$url=$_REQUEST['url'];


$categroy_name=$_REQUEST['categroy_name'];
$categroy_name=urldecode($categroy_name);
$sql="select * from categroy";
$res=$GLOBALS['db']->getAll($sql);
$categroys=$res;



/*采集匹配*/
$gathers=array( "家居"=>"",
                "衣服"=>"",
                "包包"=>"",
                "鞋子"=>"",
                "配饰"=>"",
                "美妆"=>""
    );

$categroy_value=0;
foreach ($res as $key => $value) {
    if($value['categroy_name']==$categroy_name)
    {
        $categroy_value=$value['categroy_id'];
    }
}
if($categroy_value==0)
{
    $categroy_value=$res[0]['categroy_id'];
}
   $ch=curl_init();
    $time_out=10;
    curl_setopt($ch, CURLOPT_TIMEOUT, $time_out);
    curl_setopt($ch,CURLOPT_HEADER,0);
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    $content=curl_exec($ch);
    curl_close($ch);
    $match="";
    preg_match_all('/<a class="tf8_spimg-1[\s\S]*?src="(?<url>[^"]+)"[\s\S]*?"url_(?<id>\d+)"[^>]*?>(?<name>[^<]+)<[\s\S]*?<del[^>]*>(?<market_price>[^<]*)<[\s\S]*?tf8-d2-span2">(?<price>[^<]+)<[\s\S]*?tf8-d2-span3">(?<price2>[^<]+)/',$content,$match);
    $goods=array();
    for($i=0,$len=count($match['id']);$i<$len;$i++)
    {
         $sql="select * from goods where goods_name='".html_entity_decode($match['name'][$i],ENT_COMPAT | ENT_HTML401,"UTF-8")."' and goods_img='".str_replace("290x290", "300x300", $match['url'][$i])."'";
        $res=$db->getRow($sql);
        if(!empty($res))
        {
            continue;
        }
        $match['url'][$i]=str_replace("290x290", "300x300", $match['url'][$i]);
        $arr=array();
        $arr['id']=$match['id'][$i];
        $arr['name']=html_entity_decode($match['name'][$i],ENT_COMPAT | ENT_HTML401,"UTF-8");
        $arr['url']=$match['url'][$i];
        $arr['market_price']=$match['market_price'][$i];
        $arr['price']=$match['price'][$i].$match['price2'][$i];
        $arr['dis']="";
        $arr['categroy']=$categroy_value;
        //采集匹配
        if($categroy_name=="配饰")
        {
            if(preg_match("/鞋|人字拖/",$arr['name'])!=0)
            {
                 $arr['categroy']=3;
            }
             if(preg_match("/包[^邮]|包$/",$arr['name'])!=0)
            {
                 $arr['categroy']=2;
            }
        }



        $goods[]=$arr;

    }
    $str=json_encode($goods);
    ob_clean();
    die($str);


}



function GatherCategroy($url,$categroy_name)
{
$sql="select * from categroy";
$res=$GLOBALS['db']->getAll($sql);
$categroys=$res;
/*采集匹配*/
$gathers=array( "家居"=>"",
                "衣服"=>"",
                "包包"=>"",
                "鞋子"=>"",
                "配饰"=>"",
                "美妆"=>""
    );

$categroy_value=0;
foreach ($res as $key => $value) {
    if($value['categroy_name']==$categroy_name)
    {
        $categroy_value=$value['categroy_id'];
    }
}
if($categroy_value==0)
{
    $categroy_value=$res[0]['categroy_id'];
}
 $ch=curl_init();
    $time_out=10;
    curl_setopt($ch, CURLOPT_TIMEOUT, $time_out);
    curl_setopt($ch,CURLOPT_HEADER,0);
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    $content=curl_exec($ch);
    curl_close($ch);
    $match="";
    preg_match_all('/<a class="tf8_spimg-1[\s\S]*?src="(?<url>[^"]+)"[\s\S]*?"url_(?<id>\d+)"[^>]*?>(?<name>[^<]+)<[\s\S]*?<del[^>]*>(?<market_price>[^<]*)<[\s\S]*?tf8-d2-span2">(?<price>[^<]+)<[\s\S]*?tf8-d2-span3">(?<price2>[^<]+)/',$content,$match);
    $goods=array();
    if(empty($match))
    {
        echo "<span style='color:red;'>".$url."</span><br/>";
    }
    echo "<span style='color:red;'>".count($match['id'])."</span><br/>";
    for($i=0,$len=count($match['id']);$i<$len;$i++)
    {
         $sql="select * from goods where goods_name='".html_entity_decode($match['name'][$i],ENT_COMPAT | ENT_HTML401,"UTF-8")."' and goods_img='".str_replace("290x290", "300x300", $match['url'][$i])."'";
        $res=$GLOBALS['db']->getRow($sql);
        if(!empty($res))
        {
            continue;
        }
        $match['url'][$i]=str_replace("290x290", "300x300", $match['url'][$i]);
        $arr=array();
        $arr['id']=$match['id'][$i];
        $arr['name']=html_entity_decode($match['name'][$i],ENT_COMPAT | ENT_HTML401,"UTF-8");
        $arr['url']=$match['url'][$i];
        $arr['market_price']=$match['market_price'][$i];
        $arr['price']=$match['price'][$i].$match['price2'][$i];
        $arr['dis']="";
        $arr['categroy']=$categroy_value;
        //采集匹配
        if($categroy_name=="配饰")
        {
            if(preg_match("/鞋|人字拖/",$arr['name'])!=0)
            {
                 $arr['categroy']=3;
            }
             if(preg_match("/包[^邮]|包$/",$arr['name'])!=0)
            {
                 $arr['categroy']=2;
            }
        }



        $goods[]=$arr;

    }

foreach ($goods as $key => $value) {
    GatherOne($value);
}

sleep(5);
}

function GatherOne($data)
{


        //判断是否是已存在的数据
        $sql="select * from goods where goods_name='".$data['name']."' and goods_img='".$data['url']."'";
        $res=$GLOBALS['db']->getRow($sql);
        if(!empty($res))
        {
             $arr['error']="ok";
            $arr['msgs']="该数据已经存在！";
            die(json_encode($arr));
            die();
        }
        else
        {
            /*
            $arr['error']="error";
            $arr['msgs']="$sql";
            die(json_encode($arr));
            */
        }

        $fields=array("categroy_id","goods_name","shop_price","goods_img","goods_dis","goods_like","goods_collect","goods_href","user_want","add_time","start_time","end_time","market_price","goods_index");
        $datas=array(
            $data["categroy"],
            $data['name'],
            $data['price'],
            $data['url'],
            $data['dis'],
            rand(300,2000),
            rand(300,2000),
            "http://item.taobao.com/item.htm?id=".$data['id'],
            rand(300,2000),
            time(),
            time(),
            time()+60*60*24*2,
             $data['market_price'],
             rand(0,100)
            );
        $res=$GLOBALS['db']->autoExcute("goods","",$fields,$datas);

        if($res)
        {
           echo $data['name']." 采集成功!<br/>";
        }
        else
        {
            echo $data['name']." <span style='color:red;'>采集失败!</span><br/>";
        }
        $goods_id=$GLOBALS['db']->GetInsertId();

        $comments=array();
        while (count($comments)<4) {
             $num=rand(1,83);
             if(!in_array($num, $comments))
             {
                $comments[]=$num;
             }
        }
        $comments=implode(",",$comments);
        $sql="select * from comment_rand where id in(".$comments.")";
        $comments=$GLOBALS['db']->getAll($sql);
        for($i=0;$i<4;$i++)
        {
            $fields=array(
                "user_id",
                "user_comment",
                "goods_id",
                "add_time",
                "img_url");

            $data=array(0,$comments[$i]['comments'],$goods_id,time(),rand(1,100));
           $res=$GLOBALS['db']->autoExcute("user_comment","",$fields,$data);

        }


}

?>