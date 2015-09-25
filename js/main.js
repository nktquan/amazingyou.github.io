new WOW().init();
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
    $('.slider').slider({full_width: true});
    $('input#input_text, textarea#textarea1').characterCounter();
    $('.modal-trigger').leanModal();
    $('#info').openModal();
    $('#info').closeModal();
});

function onScroll(event){
    var scrollPos = $(document).scrollTop();
    $('.navbar-nav li a').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('.navbar-nav li').removeClass("active");
            currLink.addClass("active");
        }
        else{
            currLink.removeClass("active");
        }
    });
}