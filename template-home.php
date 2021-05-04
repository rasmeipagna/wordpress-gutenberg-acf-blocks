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
                <h1>L'école <strong>des ingénieur·e·s</strong> en biotechnologies</h1>
                <span class="petit">
                    <a href="https://www.cti-commission.fr/" target="_blank">
						<img src="https://www.supbiotech.fr/Content/images/design/logo-cti.png" alt="logo Commission des Titres d'Ingénieur">
					</a>
                    <!--<span class="petitText">
                        L’institut supérieur des biotechnologies<br> de Paris
                        (Sup’Biotech) est reconnu par<br> l’état et délivre
                        un diplôme d’ingénieur<br> habilité par la CTI
                    </span>-->
                </span>
            </div> 
			
			<!-- carré bleu header JPO -->
			<div class="jphome">
				<p class="titleBulle">Venez nous rencontrer</p>

				<p class="displayEventHomeParis">
				<span class="city fsize"> Campus : Paris</span><br />
				<span class="title-type fsize">Biotech Day</span><br />
				<span class="date-type fsize">le 22/05/2021</span>
				<a  class="linkplus" href=""></a>
				</p>
				<p class="displayTypeJPOLyon"></p>

				<!-- <p class="displayJPOHome"></p>
					<p class="displayBiotechDayHome"></p>

				<p class="displayTypeJPOParis"></p>
					<p class="displayTypeJPOLyon"></p>

				<p class="displayTypeBiotechParis"></p>
					<p class="displayTypeBiotechLyon"></p>-->
			</div>

        </div>

		<!-- les boutons contact -->
		<div class="contact-clic hpDesktop">
			<a class="documentation" href="">
				Documentation
			</a>
			<a class="candidature" href="">
				Candidature
			</a>   
			<a class="entretien" href="">
					Agenda
			</a>
			<a class="rdvperso" href="">
				RDV <br /> personnalisé
			</a>
			<!--<a class="contacts" href="@Html.Lien("Contact")">
				Contacts
			</a>-->    
		</div>

    </section><!-- end home-title -->

<!-- section à la une -->
	<section id="alaune" class="une"> 
        <div class="container">
            <!--<div class="loader">
                <div class='uil-ring-css' style='transform:scale(0.67);'>
                    <div></div>
                </div>
            </div>-->

			<h2 class="_bef"><span>À la une</span></h2>

			<div class="slider-une"><!-- slider une -->
                
				<div class="slide-une">
					<a href="https://www.supbiotech.fr/formation-ingenieur-biologie/cursus/apprentissage" target="_blank">
						<figure class=" col-md-5">
							<img src="https://www.supbiotech.fr/Content/images/design/slide/slider-apprentissage.jpg" alt="Voie de l'apprentissage">
						</figure>
					</a>
					<div class="col-md-7 text">
	
						<a class="class-off" href="https://www.supbiotech.fr/formation-ingenieur-biologie/cursus/apprentissage">
							<p class="entete">
								Sup'Biotech par la voie de l’apprentissage
							</p>
							<p class="sous-entete">
							> Apprentissage
							</p>
							<p class="entete-warning">
								Expérience professionnelle ! 
							</p>
						</a>

						<p>
							<a class="class-off" href="https://www.supbiotech.fr/formation-ingenieur-biologie/cursus/apprentissage">
								Devenir ingénieur·e par la voie de l’apprentissage. En choisissant de faire ses études par la voie de l’apprentissage, l’étudiant·e apprenti·e bénéficie d’une formation théorique solide à l’école et d’une expérience professionnelle significative en entreprise.
							</a>
						</p>
						<a class="linkplus" href="https://www.supbiotech.fr/formation-ingenieur-biologie/cursus/apprentissage">En savoir +</a>

					</div>
				</div>

				<div class="slide-une">
					<a href="https://www.supbiotech.fr/entreprise-ecole-ingenieurs/sb-career-day/forum-stage-emplois" target="_blank">
						<figure class=" col-md-5">
							<img src="https://www.supbiotech.fr/Content/images/design/slide/slide-sb-carreer.jpg" alt="SB Career Day">
						</figure>
					</a>
					<div class="col-md-7 text">

						<h2 class="bef">À la <span>une</span></h2>
						<a class="class-off" href="https://www.supbiotech.fr/entreprise-ecole-ingenieurs/sb-career-day/forum-stage-emplois">
							<p class="entete">
								SB Career Day
							</p>
						</a>

						<p>
							<a class="class-off" href="https://www.supbiotech.fr/entreprise-ecole-ingenieurs/sb-career-day/forum-stage-emplois">
								Inscrivez-vous pour le forum stages / 1er emploi du jeudi 5 novembre 2020
							</a>
						</p>
						<a class="linkplus" href="https://www.supbiotech.fr/entreprise-ecole-ingenieurs/sb-career-day/forum-stage-emplois">En savoir +</a>

					</div>
				</div>
				<div class="slide-une displayJPOSlide"></div>
                <div class="slide-une displayBiotechDaySlide"></div>
                <div class="slide-une displayConferenceSlide"></div>

	</div>
	</div>
</section>	<!-- end section à la une -->

<!-- section presentation -->
	<section id="presentation">
		<div class="container">
			<div class="col-sm-6 presentation-bloc">
				<p class="mobile-font">
					Sup’Biotech, l’école des ingénieur·e·s en biotechnologies, prépare ses étudiant·e·s aux enjeux de demain.
					<br /><br />
					Santé, bien-être, pharmacie, énergie, environnement, alimentation, cosmétique… : construisez un monde d’innovations au croisement de la biologie et des technologies.
					<br /><br />
					Sur les campus de Paris et Lyon, l’école
					propose 3 types de formation.
				</p>
			</div>
			<div class="col-sm-6 polygones-blocs">
				<div class="first-row">
					<div class="polygone">
						<div class="polygone-interne">
							<h3 class="polygoneH3">
								<a style="color:#ffffff" href="https://www.supbiotech.fr/formation-ingenieur-biologie/cursus/cycle-preparatoire">
									Cycle
									préparatoire
								</a>                            
							</h3>
							<a href="https://www.supbiotech.fr/formation-ingenieur-biologie/cursus/cycle-preparatoire">
								<p>2 premières années de formation entièrement en <span>français</span> ou en <span>anglais</span></p>
							</a>
						</div>
					</div>
					<div class="polygone position-2">
						<div class="polygone-interne">
							
							<h3 class="polygoneH3">
								<a style="color:#ffffff" href="https://www.supbiotech.fr/formation-ingenieur-biologie/cursus/presentation">
									Cycle
									ingénieur
								</a>
							</h3>
							<a href="https://www.supbiotech.fr/formation-ingenieur-biologie/cursus/presentation">
								<p>5 années à <span>Paris</span> ou <span>Lyon</span> pour devenir ingénieur en biotechnologies</p>
								</a>
	</div>
					</div>
				</div>
				
				<div class="second-row">
					<div class="polygone">
						<div class="polygone-interne">
							<h3 class="polygoneH3">
								<a style="color:#ffffff" href="https://www.supbiotech.fr/formation-bachelor">
									Bachelor
								</a>
							</h3>
							<a href="https://www.supbiotech.fr/formation-bachelor">
								<p>
									Formation en
									<span>3 ans</span> avec 50% d’enseignements pratiques
								</p>
								</a>
						</div>
					</div>
					<div class="polygone">
						<div class="polygone-interne">
							<h3 class="polygoneH3">
								<a style="color:#ffffff" href="https://www.supbiotech.fr/formation-ingenieur-biologie/cursus/apprentissage">
									Apprentissage
								</a>
							</h3>
							<a style="color:#ffffff" href="https://www.supbiotech.fr/formation-ingenieur-biologie/cursus/apprentissage">
								<p>
									Devenez <span>ingénieur</span>
									par la voie de l’apprentissage
								</p>
								</a>
						</div>
					</div>
				</div>
			</div>
</section><!-- end section presentation -->
<div class="clearfix"></div>

<section id="chiffres">
    <div class="container">
        <div class="col-sm-12">
            <center>
                <div class="col-sm-2">
                    <img src="https://www.supbiotech.fr/Content/images/design/diplome.png" style="margin-bottom: 36px;" />
                    <p><span>diplôme</span><br /> d'ingénieurs CTI</p>

                </div>
            </center>
            <center>
                <div class="col-sm-2">
                    <img src="https://www.supbiotech.fr/Content/images/design/campus.png" style="margin-bottom: 45px;"/>
                    <p><span>2</span><br /> campus Paris et Lyon</p>
                </div>
            </center>
            <center>
                <div class="col-sm-2">
                    <img src="https://www.supbiotech.fr/Content/images/design/travel.png" style="margin-bottom: 45px; padding-top: 20px;" />
                    <p><span>1</span><br /> semestre à l'étranger</p>
                </div>
            </center>
            <center>
                <div class="col-sm-2">
                    <img src="https://www.supbiotech.fr/Content/images/design/calendar.png" style="margin-bottom: 33px;" />
                    <p><span>12</span><br /> mois de stages sur 3 ans</p>
                </div>
            </center>
            <center>
                <div class="col-sm-2">
                    <img src="https://www.supbiotech.fr/Content/images/design/labs.png" style="margin-bottom: 1px;" />
                    <p><span>4</span> <br />laboratoires de recherche</p>
                </div>
            </center>
            <center>
                <div class="col-sm-2">
                    <img src="https://www.supbiotech.fr/Content/images/design/hired.png" style=" margin-bottom: 31px; margin-top: 20px;" />
                    <p><span>+90%</span><br /> d'embauche en moins de 6 mois après la sortie</p>
                </div>
            </center>
        </div>
    </div>
</section>





		
		
		
		
		
		
		
		
		
		
		
		
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