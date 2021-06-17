/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */

( function() {
	var container, button, menu, links, i, len;

	container = document.getElementById( 'site-navigation' );
	if ( ! container ) {
		return;
	}

	button = container.getElementsByTagName( 'button' )[0];
	if ( 'undefined' === typeof button ) {
		return;
	}

	menu = container.getElementsByTagName( 'ul' )[0];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	menu.setAttribute( 'aria-expanded', 'false' );
	if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
		menu.className += ' nav-menu';
	}

	button.onclick = function() {
		if ( -1 !== container.className.indexOf( 'toggled' ) ) {
			container.className = container.className.replace( ' toggled', '' );
			button.setAttribute( 'aria-expanded', 'false' );
			menu.setAttribute( 'aria-expanded', 'false' );
		} else {
			container.className += ' toggled';
			button.setAttribute( 'aria-expanded', 'true' );
			menu.setAttribute( 'aria-expanded', 'true' );
		}
	};

	// Get all the link elements within the menu.
	links    = menu.getElementsByTagName( 'a' );

	// Each time a menu link is focused or blurred, toggle focus.
	for ( i = 0, len = links.length; i < len; i++ ) {
		links[i].addEventListener( 'focus', toggleFocus, true );
		links[i].addEventListener( 'blur', toggleFocus, true );
	}

	/**
	 * Sets or removes .focus class on an element.
	 */
	function toggleFocus() {
		var self = this;

		// Move up through the ancestors of the current link until we hit .nav-menu.
		while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

			// On li elements toggle the class .focus.
			if ( 'li' === self.tagName.toLowerCase() ) {
				if ( -1 !== self.className.indexOf( 'focus' ) ) {
					self.className = self.className.replace( ' focus', '' );
				} else {
					self.className += ' focus';
				}
			}

			self = self.parentElement;
		}
	}

	/**
	 * Toggles `focus` class to allow submenu access on tablets.
	 */
	( function( container ) {
		var touchStartFn, i,
			parentLink = container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

		if ( 'ontouchstart' in window ) {
			touchStartFn = function( e ) {
				var menuItem = this.parentNode, i;

				if ( ! menuItem.classList.contains( 'focus' ) ) {
					e.preventDefault();
					for ( i = 0; i < menuItem.parentNode.children.length; ++i ) {
						if ( menuItem === menuItem.parentNode.children[i] ) {
							continue;
						}
						menuItem.parentNode.children[i].classList.remove( 'focus' );
					}
					menuItem.classList.add( 'focus' );
				} else {
					menuItem.classList.remove( 'focus' );
				}
			};

			for ( i = 0; i < parentLink.length; ++i ) {
				parentLink[i].addEventListener( 'touchstart', touchStartFn, false );
			}
		}
	}( container ) );
} )();
/*******************************************************************************************************************************************************************/
/**********************************************************************************JS SITE**************************************************************************/
/*******************************************************************************************************************************************************************/
$(document).ready(function () {
    /********Menu dépliant***********/
    var $subMenu = $('#cbp-hrmenu ul li')
    var $boutonMenu = $('#cbp-hrmenu ul li a.trigger')
    var $body = $('body')
    $boutonMenu.click(function (e) {
        e.preventDefault();
        $(this).parent('li').toggleClass('cbp-hropen');
        $subMenu.not($(this).parent('li')).removeClass('cbp-hropen');
    })
    $("body:not(.cbp-hropen)").click(function () {
        $subMenu.removeClass('cbp-hropen');
    })
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

/***  Disparition/Apparition au scroll de banner reseaux/contact  ***/
var prevScrollpos = window.pageYOffset;
window.onscroll = function () {       
    var currentScrollPos = window.pageYOffset;
    console.log(currentScrollPos);
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("banner").style.top = "0";
        document.getElementById("cbp-hrmenu").style.top = "37px";
    } else {
        document.getElementById("banner").style.top = "-50px";
        document.getElementById("cbp-hrmenu").style.top = "0";
    }
    prevScrollpos = currentScrollPos;
}



    /*************   CHOIX IMAGE LOGO AU CHARGEMENT  **************/

    posScroll = $(document).scrollTop();

    if (posScroll >= 150) {
        $('.top-logo').hide();
        $('.scroll-logo').show();
    }
    else {
        $('.top-logo').show();
        $('.scroll-logo').hide();
    }

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
 
/*******************************************************************************************************************************************************************/
/**********************************************************************************JS SITE**************************************************************************/
/*******************************************************************************************************************************************************************/
    
  
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

    /*********************     SLIDER REPLAY   *********************/   

    // Slider Replay
    $('.slider-replay').slick({
        //variableWidth: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1025,
                settings: {
                    arrows: true,
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 992,
                settings: {
                    centerMode: false,
                    arrows: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
           
        ]
    });

    
    /*********************     SLIDER ACTU     *********************/

   

    // Slider Actualités
    $('.slider-actu').slick({
        variableWidth: true,
        centerMode: true,
        slidesToShow: 2,
        slidesToScroll: 2,
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

/****************ILS FONT AVANCER LA RECHERCHE********************/

