$(document).ready(function() {


    // scroll hide and show

    $('.navbar-nav li a').on('click', function() {
        $('.navbar-collapse').collapse('hide');
    });

    $(".navbar-toggler").click(function() {
        $("body").toggleClass("no-scroll");
    });

    $(".header-menu ul li a").click(function() {
        $("body").removeClass("no-scroll");
    });


    // top nav header scroll active class add start

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll > 0) {
            $(".header-main").addClass("active");
        } else {
            $(".header-main").removeClass("active");
        }
    });
    // top nav header scroll active class add end


    // scroll to add class js end

    function onScroll(event) {
        var scrollPos = $(document).scrollTop();
        $('#menu-center li.nav-item a').each(function() {
            var currLink = $(this);
            var refElement = $(currLink.attr("href"));
            
            //console.table(refElement.position().top, scrollPos, refElement.position().top + refElement.height(), scrollPos);

            if (refElement.position().top - 50 <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                $('#menu-center li.nav-item a').removeClass("active");
                currLink.addClass("active");
            } else {
                currLink.removeClass("active");
            }
        });
    }

    $(document).on("scroll", onScroll);

    //smoothscroll
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        $(document).off("scroll");

        $('a').each(function() {
            $(this).removeClass('active');
        })
        $(this).addClass('active');

        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top - 50
        }, 500, 'swing', function() {
            //window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });



});


$(window).on('load',function(){
    setTimeout(function(){ 
    $('.page-loader').fadeOut('slow');
    });
});

