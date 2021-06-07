<?php
/*
* Description: Theme enfant de Sup'Biotech
* Author: Annie Binet
* Template Name: Template Homepage EN Sup'Biotech
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package Sup\'Biotech_Blog
*
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
						<h1>The school of <strong>Biotechnology Engineers</strong></h1>               
					</div> 
					
					
					<div class="CTI-logo">
					<span class="petit">
							<a href="https://www.cti-commission.fr/" target="_blank">
								<img src="https://www.supbiotech.fr/Content/images/design/logo-cti.png" alt="logo Commission des Titres d'Ingénieur">
							</a>
							
						</span>
					</div>

				</div>

				<!-- les boutons contact -->
				<div class="contact-clic hpDesktop">
					<a class="documentation" href="/engineering-school-admission/download-documentation">
						Documentation
					</a>
					<a class="candidature" href="/engineering-school-admission/online-application">
						Application
					</a>   
					<!--<a class="entretien" href="/agenda">
							Agenda
					</a>-->
					<a class="rdvperso" href="/contact-us">
						Contacts
					</a>
					<!--<a class="contacts" href="@Html.Lien("Contact")">
						Contacts
					</a>-->    
				</div>
	</section><!-- end home-title -->
			<div class="clearfix"></div>

    <section>

        <h2>Work in progress...</h2>
    </section>



            </div><!--end home -->

</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();        