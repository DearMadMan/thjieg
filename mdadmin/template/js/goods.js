function ClearAll(){
    if(!confirm("确定要清除商品数据和评论数据吗?"))
    {
        return false;
    }
    $.ajax({
        type:"POST",
        dataType:"json",
        cache:false,
        url:"goods.php",
        data:"act=ajax_clear_all",
        success:function(msg){
            if(msg.error=="ok")
            {
                console.log(msg.str);
                $("tbody").remove();
                $(".dataTables_paginate").remove();
            }
            else
            {
                alert(msg.error);
            }
        }
    });

}