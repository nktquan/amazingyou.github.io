function fbLoading(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=129326197173794";
    fjs.parentNode.insertBefore(js, fjs);
}
setTimeout(function(){fbLoading(document, 'script', 'facebook-jssdk');},3000);

$(document).ready(function () {
    $('.parallax').parallax();
    $(".button-collapse").sideNav();
    //$('.scrolly').scrolly();
    $('.slider').slider({full_width: true});
    $('input#input_text, textarea#textarea1').characterCounter();
    //setTimeout(attachGoogleForm, 3000);
});
//
//var attachGoogleForm = function() {
//    $('#google-form').html('<iframe src="https://docs.google.com/forms/d/1irJSbaGavvMLdTqSsUu7raN9wId7srrF-kCb5fTre-c/viewform?embedded=true" width="100%" height="900" frameborder="0" marginheight="0" marginwidth="0">Đang tải...</iframe>');
//}
new WOW().init();