$(document).ready(function () {
    
    // Header Home

   /* if ($(window).width() > 769) {
        $('.header-home .container').css({
            'display': 'inline-block',
            'left': ($(window).width() - $('.container').width()) / 2 + 'px',
            'position': 'absolute',
            'top': '138px',
            'width': 'auto'
        })
    }*/

    // Menu Actif

   /* var domain = document.location.href.split('/')[2];
    var urlPage = document.location.href.split('http://' + domain)[1];

    if ($('body').hasClass('fr-layout')) {
        $('.cbp-hrsub .left-menu .left li a').each(function () {
            var that = $(this);
            var urlNav = that.attr('href');

            if (urlPage == urlNav) {
                that.addClass('active');
                that.closest('.cbp-hrsub').parent().addClass('current');
            }
        });
    } else if ($('body').hasClass('en-layout')) {
        $('nav.cbp-hrmenu ul li a').each(function () {
            var that = $(this);
            var urlNav = that.attr('href');

            if (urlPage == urlNav) {
                // that.addClass('active');
                $('a.logo').parent().removeClass('current');
                that.parent().addClass('current');
            }
        });
    }*/

    // Hauteur du menu

   /* $('#cbp-hrmenu .cbp-hrsub').each(function () {
        highest = null;
        var h = $(this).height();

        if (h > highest)
            highest = h;

        $('#cbp-hrmenu .cbp-hrsub .left-menu').css({ 'height': highest - 'px' });
    });*/

    // Contrecarrer le return false du plugin utilisé pour le menu

   /* $('nav li .contact, .logo, .langue.uk').on('click', function () {
        document.location.href = $(this).attr('href');
    });*/

    // Recherche

    /*if ($(window).width() >= 1024) {
        $('.bouton-recherche').click(function () {
            if ($('#recherche').val().length === 0) {
                return false;
            }

            return true;
        });
    }*/
    /*************   CHANGEMENT IMAGE LOGO AU SCROLL   **************/

   /* $(window).scroll(function () {

        posScroll = $(document).scrollTop();

        if (posScroll >= 150) {
            $('.top-logo').stop().fadeOut(400);
            $('.scroll-logo').fadeIn(400);
        }
        else {
            $('.top-logo').fadeIn(400);
            $('.scroll-logo').stop().fadeOut(400);
        }
    });*/

   

    /*************   BOUTON/MENU MOBILE  **************/

   /* $(".burger_boite").click(function (e) {
        e.stopPropagation();
        $('#cbp-hrmenu').slideToggle();
        $(this).toggleClass('cross');
    });

    $('#cbp-hrmenu').click(function (e) {
        e.stopPropagation();
    });

    $('body').click(function () {
        if ($(this).width() <= '764') {
            $('#cbp-hrmenu').slideUp();
            $(".burger_boite").removeClass('cross');
        }
    });

    $(window).resize(function () {
        if ($(this).width() >= '764') {
            $('#cbp-hrmenu').show();
        }
        else {
            $('#cbp-hrmenu').hide();
            $('.burger_boite').removeClass('cross')
        }
    });

    // Fermeture de la navigation

    $('.cbp-hrsub-inner .close').on('click', function () {
        $('#cbp-hrmenu li').each(function () {
            $(this).removeClass('cbp-hropen');
        });

        return false;
    }); */

    
    /*********************     SLIDER UNE     *********************/

    /*$('.slider-une').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 700,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });*/

    /*********************     SLIDER ACTU     *********************/

   

    // Slider Actualités
    /*$('.slider-actu').slick({
        variableWidth: true,
        centerMode: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 1025,
                settings: {
                    arrows: true,
                    variableWidth: true,
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 992,
                settings: {
                    arrows: true,
                    variableWidth: true,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
           
        ]
    });*/
   
});

/************** Afficher les Universités partenaires par continent *************/

$(document).ready(function () {
    //Dès qu'on clique sur.contnient1 , on applique hide() aux autres continents sauf l'afrique
    $("#continent").click(function () {
        $('.amerique, .afrique, .asie, .europe, .oceanie').show();
    });

    $("#continent1").click(function () {
        console.log('#continent1')
        $('.afrique').show();
        $('.amerique, .asie, .europe, .oceanie').hide();
    });

    $("#continent2").click(function () {
        console.log('#continent2')
        $('.amerique').show();
        $('.afrique, .asie, .europe, .oceanie').hide();
    });

    $("#continent3").click(function () {
        $('.asie').show();
        $('.afrique, .amerique, .europe, .oceanie').hide();
    });

    $("#continent4").click(function () {
        $('.europe').show();
        $('.afrique, .amerique, .asie, .oceanie').hide();
    });

    $("#continent5").click(function () {
        $('.oceanie').show();
        $('.afrique, .amerique, .europe, .asie').hide();
    });

    $('#head-1').click(function () {
        $('#tab-2 , #tab-3').hide();
        $('#tab-1').show();
    });
    $('#head-2').click(function () {
        $('#tab-1 , #tab-3').hide();
        $('#tab-2').show();
    });
    $('#head-3').click(function () {
        $('#tab-1 , #tab-2').hide();
        $('#tab-3').show();
    });



    $('.slide-replay a').click(function(event) {
        event.preventDefault();
        var $currentSlide = $(this);
        var videoId = $currentSlide.data('video');
        $('.slide-replay iframe').remove(); 
        $('.slide-replay img').show();
        var $img = $currentSlide.find('img');
        $img.hide();      
        $('<iframe width="560" height="310" src="https://www.youtube.com/embed/' +videoId+ '?rel=0&amp;showinfo=0&amp;autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>').insertBefore($img);


        /*var CurrentHtml = $('#slideshow-main li.active').html();
	    $('#slideshow-main li.active .video-container').remove();
	    $('div#slideshow-main li').removeClass('active');
	    // Ajouter l'autoplay sur les vidéos lors de leur sélection
	    var SlideClass = $(this).attr('data-name');
	    $('#slideshow-main li').each(function () {
	        if ($(this).hasClass(SlideClass)) {
	            var iframeURL = $(this).children('iframe').attr('src');
	            $(this).children('iframe').attr('src', iframeURL + '&autoplay=1');
	        }
	    });
	    var url_video = $('.replay .' + SlideClass).find('.url_video').data('url');
	    if ($('.replay .' + SlideClass).find('.url_video').next().get(0).tagName == "SPAN")
	        $('<div class="video-container"><iframe width="652" height="367" src="https://www.youtube.com/embed/' + url_video + '?rel=0&amp;showinfo=0;autoplay=1" allowfullscreen></iframe></div>').insertAfter($('.replay .' + SlideClass).find('.url_video'));
	    $('div#slideshow-main li.' + $(this).attr('data-name')).addClass('active');
*/
    });

});

