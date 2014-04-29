var mygbs={};
mygbs.msg="";
$("#search").bind("keyup",function(){
    mygbs.msg=$(this).val();
});
$("#gosearch").click(function()
    {

        window.location.href="article.php?article_type_id="+$("#article_type_id").val()+"&search="+mygbs.msg;
    });