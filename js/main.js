
$(function() {
    var navMobile = '<div class="mobile"><i class="fa fa-bars  fa-2x "></i></div>';
    $('.secondNavbar').prepend(navMobile);
});

$(function() {
    var menuPull        = $('.mobile');
        menuToplane        = $('#menu-title-menu');
        menuHeightToplane  = menuToplane.height();
 
    $(menuPull).on('click', function(d) {
        d.preventDefault();
    menuToplane.slideToggle();
    menuPull.toggleClass("ruota");
    });
});


  $(window).resize(function(){
    var w = $(window).width();
    if(w > 320 && menuToplane.is(':hidden')) {
        menuToplane.removeAttr('style');
    }
});

$(document).ready(function () {

    // hide #back-top first
    $("#back-top").hide();

    // fade in #back-top
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 500) {
                $('#back-top').fadeIn();
            } else {
                $('#back-top').fadeOut();
            }
        });

        // scroll body to 0px on click
        $('#back-top a').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });

});

$(function(){
    var twitter = $("#nav1 a[href*=twitter]"),
        facebook = $("#nav1 a[href*=facebook]"),
        rss = $("#nav1 a[href*=rss]");

        $(twitter).html("<i class='fa fa-twitter'></i>");
        $(facebook).html("<i class='fa fa-facebook '></i>");
        $(rss).html("<i class='fa fa-rss'></i>");
});


$(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").html('<i class="fa fa-refresh fa-spin"></i>');
    $(".se-pre-con").fadeOut("slow");
});


