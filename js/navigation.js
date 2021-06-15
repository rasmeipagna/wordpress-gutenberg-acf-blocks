/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
 
/*******************************************************************************************************************************************************************/
/**********************************************************************************JS SITE**************************************************************************/
/*******************************************************************************************************************************************************************/
$(document).ready(function () {
    
  
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

   

    // Slider Actualités
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
   
});

/****************ILS FONT AVANCER LA RECHERCHE********************/

