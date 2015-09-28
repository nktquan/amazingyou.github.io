;(function($,window, document){


    $(function(){
        ScrollPage();
    });//Document ready


//    ValidateForm = function()
//    {
//        function validateFullName(e) {
//            var name = $(this).val();
//            var emailReg = /^[a-zA-Z'.\s]{1,50}/;
//            var res = emailReg.test(name);
//            console.log(res);
//            return res;
//        }
//        function validateEmail(e) {
//            var str = $(this).val();
//            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
//            if(!emailReg.test(str)){
//                $(this).addClass('invalid');
//            }
//        }
//        function validatePhone(e) {
//            var str = $(this).val();
//            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
//            var res = emailReg.test(str);
//            console.log(res);
//            return res;
//        }
//
//        $('#fullname').change(validateFullName);
//        $('#email').change(validateEmail);
//        $('#phone').change(validatePhone);
//    }
    
    
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

