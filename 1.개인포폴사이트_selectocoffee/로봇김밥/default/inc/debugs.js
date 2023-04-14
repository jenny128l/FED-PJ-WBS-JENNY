$(document).ready(function() {
    $(window).scroll(function() {
    if ($("#header").offset().top > 50) {
    $("#header").addClass("stk_mz");
    $('#header').stop().animate({top : '-30px'}, 350, 'easeOutQuad');
    $('#header .logo').stop().animate({marginTop : '10px'}, 350, 'easeOutQuad');
    $('#header #nav').stop().animate({marginTop : '10px'}, 350, 'easeOutQuad');
    } else {
    $("#header").removeClass("stk_mz");
    $('#header').stop().animate({top : '0px'}, 350, 'easeOutQuad');
    $('#header .logo').stop().animate({marginTop : '0px'}, 350, 'easeOutQuad');
    $('#header #nav').stop().animate({marginTop : '0px'}, 350, 'easeOutQuad');
    }
    });
    });
    
    
    $(function() { $.fn.goTop = function() {
    $(this).hide().removeAttr("href");
    if ($(window).scrollTop() != "0") {
    $(this).stop().fadeIn(500); 
    }
    var scrolling = $(this);
    $(window).scroll(function() {
    if ($(window).scrollTop() == "0") {
    $(scrolling).fadeOut(150) }
    else { $(scrolling).fadeIn(300) } });
    $(this).click(function() { $("html, body").animate({ scrollTop: 0 }, "1000") }) } });
    $(function() { $("#gotop").goTop(); 
    }
    );