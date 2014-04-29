$(function() {
var $o = $(".j_Slide");
    var ks = $o.find("ol").Oslide({
        slidetag:$o.find("ol>li"),
        easing:"easeInOutCirc",
        speed:450
    });
var $p = $(".j_Slide1");
    var ks = $p.find("ol").Oslide({
        slidetag:$p.find("ol>li"),
        btntag:$p.find(".handel"),
        direct:'right',
        easing:"easeInOutCirc"
    });
});



 //加入收藏
            function AddFavorite(sURL, sTitle) {
                URL = encodeURI(sURL);
                try {
                    window.external.addFavorite(sURL, sTitle);
                }
                catch (e) {
                    try {
                        window.sidebar.addPanel(sTitle, sURL, "");
                    }
                    catch (e) {
                        alert("加入收藏失败，请使用Ctrl+D进行添加,或手动在浏览器里进行设置.");
                    }
                }
            }
            //设为首页
            function SetHome(url) {
                if (document.all) {
                    document.body.style.behavior = 'url(#default#homepage)';
                    document.body.setHomePage(url);
                }
                else {
                    alert("您好,您的浏览器不支持自动设置页面为首页功能,请您手动在浏览器里设置该页面为首页!");
                }
            }


              function ck() {
            if (document.getElementById("keytop").value == "" || document.getElementById("keytop").value == "请输入关键字") {
                alert("请输入关键字");
                return false;
            }

        }

               function zixun(){
                                            window.location.href="liuyan.aspx";
                                        }