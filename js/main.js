$(document).ready(function () {
    
    // Header Home

    if ($(window).width() > 769) {
        $('.header-home .container').css({
            'display': 'inline-block',
            'left': ($(window).width() - $('.container').width()) / 2 + 'px',
            'position': 'absolute',
            'top': '138px',
            'width': 'auto'
        })
    }

    // Menu Actif

    var domain = document.location.href.split('/')[2];
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
    }

    // Hauteur du menu

    $('#cbp-hrmenu .cbp-hrsub').each(function () {
        highest = null;
        var h = $(this).height();

        if (h > highest)
            highest = h;

        $('#cbp-hrmenu .cbp-hrsub .left-menu').css({ 'height': highest - 'px' });
    });

    // Contrecarrer le return false du plugin utilisé pour le menu

    $('nav li .contact, .logo, .langue.uk').on('click', function () {
        document.location.href = $(this).attr('href');
    });

    // Recherche

    if ($(window).width() >= 1024) {
        $('.bouton-recherche').click(function () {
            if ($('#recherche').val().length === 0) {
                return false;
            }

            return true;
        });
    }
    /*************   CHANGEMENT IMAGE LOGO AU SCROLL   **************/

    $(window).scroll(function () {

        posScroll = $(document).scrollTop();

        if (posScroll >= 150) {
            $('.top-logo').stop().fadeOut(400);
            $('.scroll-logo').fadeIn(400);
        }
        else {
            $('.top-logo').fadeIn(400);
            $('.scroll-logo').stop().fadeOut(400);
        }
    });

   

    /*************   BOUTON/MENU MOBILE  **************/

    $(".burger_boite").click(function (e) {
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
    });

    
    /*********************     SLIDER UNE     *********************/

    $('.slider-une').slick({
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
    });

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
    });
   
});
*/
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

});

