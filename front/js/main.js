//* Public Declare
$(window).on('load', function() {
    // Function for navbar hamburger
    $(document).on('click', 'nav .menu-col-mob .hamburger', function() {
        $("nav .menu-col-mob").toggleClass("open");
    });

    // AOS Animate Initialize
    AOS.init({
        once: true
    });

    // Mini Masonry Initialize
    if($('div').hasClass('masonry_wrapper'))
    {
        if(window.matchMedia("(max-width: 767px)").matches)
        {
            var masonry = new MiniMasonry({
                container: document.querySelector('.masonry_wrapper'),
                surroundingGutter: false,
                ultimateGutter: 2,
                gutterX: 20,
                gutterY: 20,
                baseWidth: 150
            });
        }
        else
        {
            var masonry = new MiniMasonry({
                container: document.querySelector('.masonry_wrapper'),
                surroundingGutter: false,
                gutterX: 20,
                gutterY: 20
            });
        }
    }

    // Fancy Gallery
    $('.fancy').fancybox({
        'transitionIn'	:	'elastic',
        'transitionOut'	:	'elastic',
        'speedIn'		:	600,
        'speedOut'		:	200,
        'overlayShow'	:	false
    });

    // Navbar Sticky Scroll Function
    if($('nav').hasClass('sticky-base'))
    {
        $(window).scroll(function() {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > 150) 
            { 
                $('nav').removeClass('sticky');
            }
            else
            {
                $('nav').addClass('sticky');
            }
        });
    }

    // Function on modal video shown
    $('#modVideo').on('shown.bs.modal', function (e) {
        $('#modVideo video').trigger('play');
        console.log('open');
    });
    // Function on modal video shide
    $('#modVideo').on('hidden.bs.modal', function (e) {
        $('#modVideo video').trigger('pause');
        console.log('close');
    });

    // Testimonial Slide
    $("#testi-owl").owlCarousel({
        loop: true,
        autoplay: false,
        margin: 20,
        responsiveBaseElement: 'body',
        responsiveClass: true,
        autoHeight: true,
        autoplayTimeout: 7000,
        smartSpeed: 800,
        nav: true,
        responsive: {
            0: {
                items: 1
            },        
            600: {
                items: 1
            },
            1024: {
                items: 3
            },        
            1366: {
                items: 3
            }
        }
    });
});