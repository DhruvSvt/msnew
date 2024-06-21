// JavaScript Document

$(document).ready(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
            $('.header').addClass('fix');
        } else {
            $('.scrollup').fadeOut();
            $('.header').removeClass('fix');
        }
    });
    $(window).scroll(function() {
        if ($(this).scrollTop() > 300 && $(window).width() > 980 ) {
            $('.bannerLinksFixed').addClass('fix');
        } else {
            $('.bannerLinksFixed').removeClass('fix');
        }
    });

    
    
    $('.scrollup').click(function() {
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });

    $(".menuicon").click(function() {
        $(this).find(span).toggleClass('fa-bars');
        $(this).find(span).toggleClass('fa-times');
        $('.fixedmenu').toggleClass('open');
    });
    
    $(".searchBtn").click(function() {
        $(this).toggleClass('open');
        $('.search_bar').slideToggle();
    });

    $(".down_arrow").click(function() {
        let arrow = $(this).attr("href");
        $('html, body').animate({ scrollTop:$(arrow).offset().top-80}, 500);
    });
    
    $('.cntmsg').delay(1500).fadeOut();
    $('.cntmsgbtn').click(function() {
        $('.cntmsg').hide();
    });

    $('.loginBtn').click(function() {
        $(".pop_proEnquiry").hide();
        $("#loginPop").show();
        $("body").addClass('showMe');
    });

    $('.regBtn').click(function() {
        $(".pop_proEnquiry").hide();
        $("#regPop").show();
        $("body").addClass('showMe');
    });
    $('.recBtn').click(function() {
        $(".pop_proEnquiry").hide();
        $("#recPop").show();
        $("body").addClass('showMe');
    });
    $('.pc_close').click(function() {
        $(".pop_proEnquiry").hide();
        $("body").removeClass('showMe');
    });
    $(".enquireNow").click(function() {
        $('body').addClass('open');
        $('.enquireNowPop').show();
    });
    $(".enClose").click(function() {
        $('body').removeClass('open');
        $('.enquireNowPop').hide();
    });   

    if($(window).width() > 768 ){
        new WOW().init();
    }

    $('div.ser_box:first').slideDown('500');
    $('.ser_list:first h3').addClass('open');
    $(".pjtcs_nav li").click(function() {
        $(".pjtcs_nav li").removeClass("active");
        $(this).addClass("active");
        $(".pjtcs_txt").hide();
        let div=$(this).attr("rel");
        $("#"+div).show();
    });   

    $('div.ab_div:first').slideDown('500');
    $('.ab_links:first h3').addClass('open');
    $('.ab_links h3').click(function () {
        $('div.ab_div').slideUp('500');
        $('.ab_links h3').removeClass('open'); 
        var text = $(this).next('div.ab_div');
        if (text.is(':hidden')) {
            text.slideDown('500');
            $(this).addClass('open');     
        } else {
            text.slideUp('500');
            $(this).removeClass('open');     
        } 
    });  
    
    $("#micon").click(function() {
        $(this).toggleClass('open');
        $('.mainMenu').toggleClass('open');
        $('body').toggleClass('open');
    });
    
    $('.count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

});

(function($) {
    var $window = $(window);
    $window.resize(function resize(){

        if ($window.width() < 1280) {

            $(".micon").click(function() {
                $('.menu_nav').addClass('open');
                $('body').addClass('open');
            });

            $(".mclose").click(function() {
                $('.menu_nav').removeClass('open');
                $('body').removeClass('open');
            });

            $("ul#mainMenu li a").each(function() {
                if ($(this).next().length > 0) {
                    $(this).addClass("more");
                }
            });

            $('ul#mainMenu li').click(function () {
                $('ul#mainMenu .dropdown').slideUp('500');
                $('ul#mainMenu li').removeClass('open'); 
                var text = $(this).find('div.dropdown');
                if (text.is(':hidden')) {
                    text.slideDown('500');
                    $(this).addClass('open');     
                } else {
                    text.slideUp('500');
                    $(this).removeClass('open');     
                } 
            });

        }
    }).trigger('resize');
})(jQuery);

/*
$(function() {
    $(".micon").click(function() {
        $('.mobile_menu').addClass('open');
        $('.menu_overlay').addClass('open');
    });
    $(".mclose, .menu_overlay").click(function() {
        $('.mobile_menu').removeClass('open');
        $('.menu_overlay').removeClass('open');
    });
    $("ul.mnav li a").each(function() {
        if ($(this).next().length > 0) {
            $(this).addClass("more");
        }
    });
    $("ul.mnav li a.more").click(function() {
        $(this).next('ul').toggleClass('open');
    });
});*/


/*

function loadResults() {
    var result = "";
    for (var i = 0; i < 46; i++) {
        result += "<a href=""><img src='./images/g'"+i+"'.jpg' alt=""></a>";
    }
    $.ajax({
        url: "/echo/html/",
        type: "post",
        data: {
            html: result,
            delay: 1
        },
        beforeSend: function(xhr) {
            $("#results").after($("<div class='fullbody loading'>Loading...</div>").fadeIn('slow')).data("loading", true);
        },
        success: function(data) {
            var $results = $("#results");
            $(".loading").fadeOut('fast', function() {
                $(this).remove();
            });
            var $data = $(data);
            $data.hide();
            $results.append($data);
            $data.fadeIn();
            $results.removeData("loading");
        }
    });
};

$(function() {
    loadResults();

    $("body").scroll(function() {
        var $this = $(this);
        var $results = $("#results");

        if (!$results.data("loading")) {

            if ($this.scrollTop() + $this.height() == $results.height()) {
                loadResults();
            }
        }
    });
});

https://codepen.io/elmahdim/pen/sGkvH
https://www.solodev.com/blog/web-design/adding-a-load-more-button-to-your-content.stml

$(document).ready(function () {
    size_li = $("#myList li").size();
    x=3;
    $('#myList li:lt('+x+')').show();
    $('#loadMore').click(function () {
        x= (x+5 <= size_li) ? x+5 : size_li;
        $('#myList li:lt('+x+')').show();
    });
    $('#showLess').click(function () {
        x=(x-5<0) ? 3 : x-5;
        $('#myList li').not(':lt('+x+')').hide();
    });
});


$(function () {
    $("#mygallery a").hide();
    $("#mygallery a").slice(0, 10).show();
    $("#loadMore").on('click', function (e) {
        e.preventDefault();
        $("div:hidden").slice(0, 10).slideDown();
        if ($("div:hidden").length == 0) {
            $("#load").fadeOut('slow');
        }
        $('html,body').animate({
            scrollTop: $(this).offset().top
        }, 1500);
    });
});

*/


