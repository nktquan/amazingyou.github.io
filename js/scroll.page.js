;(function($,window, document){


    $(function(){
        ScrollPage();
        $("button#submit").click(function(){
            if (!ValidateForm())return false;
            var url = "index.php";
            var data = {
                name: $("#fullname").val(),
                email: $("#email").val(),
                phone: $("#phone").val(),
            }
            $.ajax({
                url: url,
                type: 'POST',
                data: data,
                success: function(data) {
                    var result = JSON.parse(data)
                    if(result.insert){
                        alert("Đăng ký thành công");
                    }
                    else{
                        alert(result.msg);
                    }
                      //called when successful
//                      $('#ajaxphp-results').html(data);
                },
                error: function(e) {
                      //called when there is an error
                      //console.log(e.message);
                }
            });

        });

    });//Document ready


    ValidateForm = function()
    {
        var strError = "";
//        var nameReg = /^[a-zA-Z'.\s]{1,50}/;
//        if(!nameReg.test($("#fullname").val()))
//        {
//            strError += "loi nhap ten\n";
//        }
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4}){1}?$/;
        if(!emailReg.test($("#email").val())){
            strError += "Mail nhập không đúng định dạng\n";
        }
        var phoneReg = /^[0-9]{8,12}$/;
        if(!phoneReg.test($("#phone").val())){
            strError += "Điện thoại nhập 8-12 ký tự số";
        }
        if (strError !== ""){
            alert(strError);
            return false;
        }else{
            return true;
        }
    }
    
    
    ScrollPage = function ()
    {
        var page_different  = $("#different").position().top;
        var page_team       = $("#team").position().top;
        var page_you_rock   = $("#you-rock").position().top;
        var page_join       = $("#join").position().top;
        var page_contact    = $("#contact").position().top;

        $(window).scroll(function (){
            var t = $(window).scrollTop();
            var page = "";
            if(t >= page_different){
                var page = "#different-nav";
            }
            if(t >= page_team){
                var page = "#team-nav";
            }
            if(t >= page_you_rock){
                var page = "#yourock-nav";
            }
            if(t >= page_join){
                var page = "#join-nav";
            }
            if(t >= page_contact){
                var page = "#contact-nav";
            }
            if(page !== ""){
                $("#top > ul > li").removeClass("active");
                $("#top > ul > li"+page).addClass("active");
            }
        });
    }

})(window.jQuery, window, document);

