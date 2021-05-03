<?php
/*
Description: Theme enfant de Sup'Biotech
Author: Pagna Toung
Template Name: Template Home Sup'Biotech
*/

get_header(); 

?>

<section class="_container _page">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<!-- home -->
		<div id="home">
			<div id="fb-root"></div>
			<script>
				(function (d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s); js.id = id;
					js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.4";
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
			</script>
		
		<section class="home-title">
        <div class="container rel">
            <div class="crop-circle">
                <h1>L'école <strong>des ingénieur·e·s</strong><br>en biotechnologies</h1>
                <span class="petit">
                    <a href="https://www.cti-commission.fr/" target="_blank"><img src="~/Content/images/design/logo-cti.png" alt="logo Commission des Titres d'Ingénieur"></a>
                    <span class="petitText">
                        L’institut supérieur des biotechnologies<br> de Paris
                        (Sup’Biotech) est reconnu par<br> l’état et délivre
                        un diplôme d’ingénieur<br> habilité par la CTI
                    </span>
                </span>
            </div>           

        </div>
    </section><!-- end home-title -->

	<div class="slider-une"><!-- slider une -->
                <div class="slide-une displayJPOSlide"></div>
                <div class="slide-une displayBiotechDaySlide"></div>
                <div class="slide-une displayConferenceSlide"></div>
	</div>


		
		
		
		
		
		
		
		
		
		
		
		
		</div><!--end home -->

		<h1>Homepage en travaux ....</h1>

			<?php
			/*while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop. */
			?>




		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();