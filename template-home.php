<?php
/*
* Description: Theme enfant de Sup'Biotech
* Author: Annie Binet
* Template Name: Template Homepage Sup'Biotech
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
						<h1>L'école <strong>des ingénieur·e·s</strong> en biotechnologies</h1>               
					</div> 
					
					<!-- carré bleu header JPO -->
					<div class="jphome">
						<p class="titleBulle">Venez nous rencontrer</p>

						<!--<p class="displayEventHomeParis">
						<span class="city fsize"> Campus : Paris</span><br />
						<span class="title-type fsize">Biotech Day</span><br />
						<span class="date-type fsize">le 22/05/2021</span>
						<a  class="linkplus" href=""></a>
						</p>-->			

						
						<!--<div class="displayBiotechDayHome"> <?php //echo do_shortcode('[eventdb id="2267"]'); ?></div>
						 <div class="displayEventHomeParis"></div>
						<div class="displayTypeJPOLyon"></div>

						<p class="displayJPOHome"></p>
							<p class="displayBiotechDayHome"></p>-->

						<div class="displayTypeJPOParis"><?php echo do_shortcode('[eventdb id="1206"]'); ?></div>
							<div class="displayTypeJPOLyon"><?php echo do_shortcode('[eventdb id="2269"]'); ?></div>

						<!--<p class="displayTypeBiotechParis"></p>
							<p class="displayTypeBiotechLyon"></p>-->
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
					<a class="documentation" href="/admissions-ecole-ingenieur/documentation/">
						Documentation
					</a>
					<a class="candidature" href="/admission-ecole-ingenieur/candidature">
						Candidature
					</a>   
					<a class="entretien" href="/agenda">
							Agenda
					</a>
					<a class="rdvperso" href="/admissions-ecole-ingenieur/rdv-personnalises">
						RDV <br /> personnalisé
					</a>
					<!--<a class="contacts" href="@Html.Lien("Contact")">
						Contacts
					</a>-->    
				</div>
	</section><!-- end home-title -->
			<div class="clearfix"></div>

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
					
				<div class="slide-une"><?php echo do_shortcode('[eventdb id="1707"]'); ?></div> 

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

					<!--<div class="slide-une">
						<a href="https://www.supbiotech.fr/entreprise-ecole-ingenieurs/sb-career-day/forum-stage-emplois" target="_blank">
							<figure class=" col-md-5">
								<img src="https://www.supbiotech.fr/Content/images/design/slide/slide-sb-carreer.jpg" alt="SB Career Day">
							</figure>
						</a>
						<div class="col-md-7 text">
							
							<a class="class-off" href="https://www.supbiotech.fr/entreprise-ecole-ingenieurs/sb-career-day/forum-stage-emplois">
								<p class="entete">
									SB Career Day
								</p>
								<p class="sous-entete">> Le forum stage et 1er emploi</p>
							</a>

							<p>
								<a class="class-off" href="https://www.supbiotech.fr/entreprise-ecole-ingenieurs/sb-career-day/forum-stage-emplois">
									Inscrivez-vous pour le forum stages / 1er emploi du jeudi 5 novembre 2020
								</a>
							</p>
							<a class="linkplus" href="https://www.supbiotech.fr/entreprise-ecole-ingenieurs/sb-career-day/forum-stage-emplois">En savoir +</a>

						</div>
					</div>-->
					

					<!--<div class="slide-une displayJPOSlide"></div>
					<div class="slide-une displayBiotechDaySlide"></div>
					<div class="slide-une displayConferenceSlide"></div>-->

		</div>
		</div>
	</section>	<!-- end section à la une -->
	<div class="clearfix"></div>

	<!-- section presentation -->
		<section id="presentation">
			<div class="container">
			<h2><span>L'école des ingénieur·e·s en biotechnologies</span></h2>
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
									<a style="color:#ffffff" href="/programmes/cycle-preparatoire/">
										Cycle<br />
										préparatoire
									</a>                            
								</h3>
								<a href="/programmes/cycle-preparatoire/">
									<p>2 premières années de formation entièrement en <span>français</span> ou en <span>anglais</span></p>
								</a>
							</div>
						</div>
						<div class="polygone position-2">
							<div class="polygone-interne">
								
								<h3 class="polygoneH3">
									<a style="color:#ffffff" href="/ecole-ingenieurs-biotechnologies/presentation/">
										Cycle<br />
										ingénieur
									</a>
								</h3>
								<a href="/ecole-ingenieurs-biotechnologies/presentation/">
									<p>5 années à <span>Paris</span> ou <span>Lyon</span> pour devenir ingénieur en biotechnologies</p>
									</a>
							</div>
						</div>
					</div>
					
					<div class="second-row">
						<div class="polygone">
							<div class="polygone-interne">
								<h3 class="polygoneH3">
									<a style="color:#ffffff" href="/programmes/formation-bachelor/">
										Bachelor
									</a>
								</h3>
								<a href="/programmes/formation-bachelor/">
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
									<a style="color:#ffffff" href="/programmes/apprentissage/">
										Apprentissage
									</a>
								</h3>
								<a style="color:#ffffff" href="/programmes/apprentissage/">
									<p>
										Devenez <span>ingénieur</span>
										par la voie de l’apprentissage
									</p>
									</a>
							</div>
						</div>
					</div>
				</div>
	</section>
	<!-- end section presentation -->
	<div class="clearfix"></div>

	<!-- section chiffres -->
	<section id="chiffres">
		<div class="container">
			<div class="col-sm-12">
				<center>
					<div class="col-sm-2">
						<img src="https://www.supbiotech.fr/Content/images/design/diplome.png" class="picto-diplome" />
						<p><span>diplôme</span><br /> d'ingénieurs CTI</p>

					</div>
				</center>
				<center>
					<div class="col-sm-2">
						<img src="https://www.supbiotech.fr/Content/images/design/campus.png"  class="picto-campus" />
						<p><span>2</span><br /> campus Paris et Lyon</p>
					</div>
				</center>
				<center>
					<div class="col-sm-2">
						<img src="https://www.supbiotech.fr/Content/images/design/travel.png"  class="picto-travel" />
						<p><span>1</span><br /> semestre à l'étranger</p>
					</div>
				</center>
				<center>
					<div class="col-sm-2">
						<img src="https://www.supbiotech.fr/Content/images/design/calendar.png"  class="picto-calendar" />
						<p><span>12</span><br /> mois de stages sur 3 ans</p>
					</div>
				</center>
				<center>
					<div class="col-sm-2">
						<img src="https://www.supbiotech.fr/Content/images/design/labs.png"  class="picto-labs" />
						<p><span>4</span> <br />laboratoires de recherche</p>
					</div>
				</center>
				<center>
					<div class="col-sm-2">
						<img src="https://www.supbiotech.fr/Content/images/design/hired.png"  class="picto-hired" />
						<p><span>+90%</span><br /> d'embauche en moins de 6 mois après la sortie</p>
					</div>
				</center>
			</div>
		</div>
	</section>
<!-- end section chiffres -->

<!-- section les avenir -->
	<section id="avenir">
		<div class="container">
			<h2>
				<span>Un secteur d’avenir qui transforme le monde</span>
			</h2>
			<h3 class="_bef">Les domaines</h3>

			<div class="col-sm-3">
				<a href="">
					<div class="domaine sante">
						<div></div>
						<h4>Santé et bien-être :</h4>
						<p>
							Santé et bien-être :
							développement de biomédicaments,
							de thérapies innovantes, géniques
							ou cellulaires, organes artificiels…
						</p>
					</div>
				</a>
			</div>

			<div class="col-sm-3">
				<a href="">
					<div class="domaine energie">
						<div></div>
						<h4>
							Environnement, énergie
							et transition écologique :
						</h4>
						<p>production d’énergie, recyclage des matériaux conçus à partir d’agro-ressources pour les substituer aux produits d’origine pétrolière.</p>
					</div>
				</a>
			</div>
			<div class="col-sm-3">
				<a href="">
					<div class="domaine agri">
						<div></div>
						<h4>
							Agroalimentaire,
							agriculture et développement durable :
						</h4>
						<p>
							alicaments, amélioration des
							rendements de culture, …
						</p>
					</div>
				</a>
			</div>
			<div class="col-sm-3">
				<a href="">
					<div class="domaine cosme">
						<div></div>
						<h4>Cosmétique :</h4>
						<p>
							lutte contre le vieillissement, peaux
							artificielles, produits plus naturels, …
						</p>
					</div>
				</a>
			</div>
		</div>
	</section>
	<!-- end section avenir -->
	<div class="clearfix"></div>

<!-- section debouches -->
	<section id="debouches">
		
			<div class="container">
			<h2 class=""><span>Les débouchés</span></h2>
			<p>Expert·e·s en biotechnologies qui occupent des postes de cadres scientifiques en entreprise : </p>
			
			<div class="col-md-6">
				<ul>
					<li><a href="/wp-content/uploads/ingenieur-recherche.pdf" target="_blank">Ingénieur de recherche</a></li>
					<li><a href="/wp-content/uploads/charge-affaires-reglementaires.pdf" target="_blank">Chargé des affaires réglementaires</a></li>
					<li><a href="/wp-content/uploads/chef-projet.pdf" target="_blank">Chef de projet</a></li>
					<li><a href="/wp-content/uploads/ingenieur-procede.pdf" target="_blank">Ingénieur procédés</a></li>
					
				</ul>
			</div>

			<div class="col-md-6">
				<ul>					
					<li><a href="/wp-content/uploads/ingenieur-etudes.pdf" target="_blank">Ingénieur d'études</a></li>
					<li><a href="/wp-content/uploads/consultante-communication.pdf" target="_blank">Consultants</a></li>
					<li><a href="/wp-content/uploads/coordinateur-marketing.pdf" target="_blank">Coordinateur Marketing</a></li>
					<li><a href="/wp-content/uploads/ingenieur-technico-commercial.pdf" target="_blank">Ingénieur Technico commercial</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>

			<div><a href="/apres-supbiotech/metiers/" class=" simple-button blue">Tous les métiers</a></div>

			<div class="clearfix"></div>


				<div class="col-md-4 bloc-alumni">
				<h3 class="blanc">Les Alumni à la une</h3>
					<p>> Découvrez les témoignages de nos Alumni</p>
					<div><a href="/apres-supbiotech/metiers/" class=" simple-button blue">Tous les témoignages</a></div>
				</div>
				<div class="col-md-8 ">
					
					<div class="video-container">
						<iframe width="550" height="300" src="https://www.youtube.com/embed/Kiq_5hN0QW4?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
					</div>
					
				</div>
			</div>
	</section>
<!-- end section debouchés -->

<!-- section actus -->
<section id="actus" class="actus">
    <div class="container">
        <h2><span>Actualités de l'école</span></h2>
        <div class="_slider-actu">
			<row>
				<!--<div class="col-md-7 main-actu">
					<figure>
						<img src="https://www.supbiotech.fr/blogs/wp-content/uploads/sites/24/2021/05/double-diplome-hepl-haute-ecole-liege-supbiotech-international-belgique-biotechnologies-home.jpg" alt="" />
					</figure>
				</div>
			
				<div class="col-md-5 main-resume">
						<h4><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</strong></h4>
						<p class="detail">
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
						Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

						</p>
						
					</div>-->
					<?php if ( have_posts() ) : ?>
			<?php query_posts('posts_per_page=1'); ?>
			<?php while ( have_posts() ) : the_post(); ?>
<!-- -----------------------------vient de /content/prime.php-------------------- -->
<div class="entry-header">
		<!--<h1>Les derniers articles</h1>-->
		<!--<?php
		if ( is_singular() ) :
			the_title( '<h3>', '</h3>' );
		else :
			the_title( '<h3><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php supbiotech_blog_posted_on(); ?>
		</div> .entry-meta -->
		<?php
		endif; ?>
	</div><!-- .entry-header -->
	<article class="prime-article col-sm-12" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content primePos">
		<div class="col-md-7 main-actu _posImg _blog-hp">
			<figure class="blog-hp">
				<a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">
					<?php 

					if( has_post_thumbnail() ) {
						the_post_thumbnail("prime");
						} else {
  
 ?>
              <?php if(has_category( 'actu-technologique' )){ ?>
              <img alt="Actu Technologique" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/actutechnologique.jpg"/>
              <?php } elseif(has_category( 'entreprise' )) { ?>
              <img alt="Événements" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/entreprise.jpg"/>
              <?php } elseif(has_category( 'evenements' )) { ?>
              <img alt="L'actu par les élèves" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/evenements.jpg"/>
              <?php } elseif(has_category( 'lactu-biotech-par-les-eleves' )) { ?>
              <img alt="Mission to Mars" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/actubiotecheleves.jpg"/>
              <?php } elseif(has_category( 'mission-to-mars' )) { ?>
              <img alt="Non classé" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/missiontomars.jpg"/>
              <?php } elseif(has_category( 'non-classe' )) { ?>
              <img alt="Nous rencontrer" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/actu-hp.jpg"/>
              <?php } elseif(has_category( 'nous-rencontrer' )) { ?>
              <img alt="Pédagogie" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/nousrencontrer.jpg"/>
              <?php } elseif(has_category( 'pedagogie' )) { ?>
              <img alt="Portraits d'anciens" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/pedagogie.jpg"/>
              <?php } elseif(has_category( 'portraits-danciens' )) { ?>
              <img alt="Projets et recherche" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/portraitsanciens.jpg"/>
              <?php } elseif(has_category( 'projets-et-recherche' )) { ?>
              <img alt="Vie étudiante" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/projetsrecherche.jpg"/>
              <?php } elseif(has_category( 'vie-etudiante' )) { ?>
              	<img alt="Vie étudiante" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/vieetudiante.jpg"/>
                    <?php } ?>
        <?php } 
             
          ?>
				</a>
				<!--<a class="linkplus" href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark"></a>-->
			</figure>

		</div>
		<!-- <span class="blog-hp">
			<a href="" class="linkplus"></a>
		</span> -->
		<!--<div class="prime-blog-tag">
			<?php 
/*TOUTES LES CATEGORIES*/
			/*foreach((get_the_category()) as $cat) { 
        echo $cat->cat_name . '<br />'; 
      }*/
			$cat = get_the_category(); $cat = $cat[0]; echo $cat->cat_name; ?>
		</div>-->
<div class="col-md-5 main-resume">
		<h4><a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark"><?php the_title(); ?></a></h4>
		<?php the_excerpt(); ?>
</div>
		</div><!-- .entry-content -->

	<!--<footer class="entry-footer">
		<?php supbiotech_blog_entry_footer(); ?>
	</footer> .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

<!-- ---------------------------fin de ce qui vient de content-prime.php------------------------ -->
<?php //get_template_part( 'template-parts/content-prime', 'first-article' ); ?>


			<?php endwhile; ?>
				
			<?php query_posts('showposts=3&offset=1'); ?> <!-- pour enlever le premier-->

			<?php while ( have_posts() ) : the_post(); ?>

<!-- ------------------	vient de template-parts/content-index -------------- -->
<article class="col-sm-4 autre-actu" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
	<figure class="blog-hp">
		<a href="<?php echo  get_permalink() ?>" rel="bookmark">





		<?php 

		if( has_post_thumbnail() ) {
						the_post_thumbnail("small");
						} else {
	             ?>
              <?php if(has_category( 'actu-technologique' )){ ?>
              <img alt="Actu Technologique" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/actutechnologique.jpg"/>
              <?php } elseif(has_category( 'entreprise' )) { ?>
              <img alt="Événements" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/entreprise.jpg"/>
              <?php } elseif(has_category( 'evenements' )) { ?>
              <img alt="L'actu par les élèves" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/evenements.jpg"/>
              <?php } elseif(has_category( 'lactu-biotech-par-les-eleves' )) { ?>
              <img alt="Mission to Mars" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/actubiotecheleves.jpg"/>
              <?php } elseif(has_category( 'mission-to-mars' )) { ?>
              <img alt="Non classé" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/missiontomars.jpg"/>
              <?php } elseif(has_category( 'non-classe' )) { ?>
              <img alt="Nous rencontrer" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/actu-hp.jpg"/>
              <?php } elseif(has_category( 'nous-rencontrer' )) { ?>
              <img alt="Pédagogie" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/nousrencontrer.jpg"/>
              <?php } elseif(has_category( 'pedagogie' )) { ?>
              <img alt="Portraits d'anciens" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/pedagogie.jpg"/>
              <?php } elseif(has_category( 'portraits-danciens' )) { ?>
              <img alt="Projets et recherche" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/portraitsanciens.jpg"/>
              <?php } elseif(has_category( 'projets-et-recherche' )) { ?>
              <img alt="Vie étudiante" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/projetsrecherche.jpg"/>
              <?php } elseif(has_category( 'vie-etudiante' )) { ?>
              	<img alt="Vie étudiante" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/vieetudiante.jpg"/>
                    <?php } ?>
        <?php } 
             
          ?>
		</a>
		<!--<a class="linkplus" href="<?php echo get_permalink() ?>" rel="bookmark"></a>-->
		 
	</figure>
	<!--<div class="blog-tag">
			<?php 
      /*TOUTES LES CATEGORIES*/
			/*foreach((get_the_category()) as $cat) { 
        echo $cat->cat_name . '<br />'; 
      }*/
			$cat = get_the_category(); $cat = $cat[0]; echo $cat->cat_name; ?>
		</div>-->
	<h3><a href="<?php echo  get_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
	<?php the_excerpt(); ?>

	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->

<!-- ------------------------------------ fin de ce qui vient de template-parts/content-index ------------------- -->

				<?php //get_template_part( 'template-parts/content-index', get_post_format() ); ?>
			<?php endwhile; ?>
		<?php else : ?>
		
		<!-- ------------------------------------ce qui vient de template-parts/content ------------------- -->	
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		
		<?php
		endif; ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<figure class="blog-hp">
			<a href="<?php echo  esc_url( get_permalink() ) ?>" rel="bookmark">
			
				<?php 
				if( has_post_thumbnail() ) {
					the_post_thumbnail("prime");
				} else {
					
  ?>
              <?php if(has_category( 'actu-technologique' )){ ?>
              <img alt="Actu Technologique" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/actutechnologique.jpg"/>
              <?php } elseif(has_category( 'entreprise' )) { ?>
              <img alt="Événements" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/entreprise.jpg"/>
              <?php } elseif(has_category( 'evenements' )) { ?>
              <img alt="L'actu par les élèves" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/evenements.jpg"/>
              <?php } elseif(has_category( 'lactu-biotech-par-les-eleves' )) { ?>
              <img alt="Mission to Mars" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/actubiotecheleves.jpg"/>
              <?php } elseif(has_category( 'mission-to-mars' )) { ?>
              <img alt="Non classé" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/missiontomars.jpg"/>
              <?php } elseif(has_category( 'non-classe' )) { ?>
              <img alt="Nous rencontrer" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/actu-hp.jpg"/>
              <?php } elseif(has_category( 'nous-rencontrer' )) { ?>
              <img alt="Pédagogie" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/nousrencontrer.jpg"/>
              <?php } elseif(has_category( 'pedagogie' )) { ?>
              <img alt="Portraits d'anciens" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/pedagogie.jpg"/>
              <?php } elseif(has_category( 'portraits-danciens' )) { ?>
              <img alt="Projets et recherche" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/portraitsanciens.jpg"/>
              <?php } elseif(has_category( 'projets-et-recherche' )) { ?>
              <img alt="Vie étudiante" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/projetsrecherche.jpg"/>
              <?php } elseif(has_category( 'vie-etudiante' )) { ?>
              	<img alt="Vie étudiante" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/vieetudiante.jpg"/>
                    <?php } ?>
        <?php } 
             
          ?>
			</a>
			<!-- <a class="linkplus" href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark"></a> -->
			<div class="blog-tag-post">
			<?php 
			/*TOUTES LES CATEGORIES*/
			/*foreach((get_the_category()) as $cat) { 
        echo $cat->cat_name . '<br />'; 
      }*/
			foreach((get_the_category()) as $cat) { 
				echo $cat->cat_name . '<br />'; 
			} ?>
		</div>
		</figure>

		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'supbiotech-blog' ),
				array(
					'span' => array(
						'class' => array(),
						),
					)
				),
			get_the_title()
			) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'supbiotech-blog' ),
			'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->
		<div class="entry-meta">

		</div><!-- .entry-meta -->
		<script src="https://apis.google.com/js/platform.js" async defer>
			{lang: 'fr'}
		</script>

		<p class="posted">
			<strong>Posté le : <?php echo get_the_date(); ?></strong>
		</p>
		<div class="lishare">
			<script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: fr_FR</script>
			<script type="IN/Share" data-url="<$MTEntryPermalink$>" data-counter="right"></script>
		</div>
		<div class="twt">
			<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>       
		</div>
		<div class="fb-share-button" data-href="<?php echo  esc_url( get_permalink() ) ?>" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo  esc_url( get_permalink() ) ?>">Partager</a></div>
		<footer class="entry-footer">
<!-- 		<?php supbiotech_blog_entry_footer(); ?>

-->	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.10&appId=1777986829106167";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- ------------------------------------ fin de ce qui vient de template-parts/content ------------------- -->	

			<?php //get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>

		<!--<div class="append-articles posPost"></div>
		<div class="clearfix"></div>
		<div class="col-sm-3"> </div>
		<div class="posButtonLoad col-sm-6">
			<a href="#" class="afficher-plus">Afficher plus d'articles</a>
		</div>
		<div class="col-sm-3"> </div>-->

				<div class="clearboth"></div>
			</row>	

			<!--<row>           
				<div class="col-md-4 autre-actu">
					<a href="#" class="actualite rel">
						
							<figure>
								<img src="https://www.supbiotech.fr/blogs/wp-content/uploads/sites/24/2021/05/mathematiques-biotechnologies-concours-advance-supbiotech-recherche-etudes-pedagogie-ouerdia-arkoun-2021-home.jpg" alt="" />
							</figure>                   
						
						<div class="_resume">
							<h4>But I must explain to you how all this mistaken idea</h4>
							<p class="detail">
							Nor again is there anyone who loves or pursues or desires to obtain pain of itself, 
							because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.
							</p>
							!--<span class="linkplus"></span>--
						</div>
					</a>
				</div>
				<div class="col-md-4 autre-actu">
					<a href="#" class="actualite rel">                
							<figure>
								<img src="https://www.supbiotech.fr/blogs/wp-content/uploads/sites/24/2021/04/portrait-sophie-mothre-sbip-femmes-ingenieures-supbiotech-home.jpg" alt="" />
							</figure>
						
						<div class="_resume">
							<h4>To take a trivial example, which of us ever undertakes</h4>
							<p class="detail">
							Nor again is there anyone who loves or pursues or desires to obtain pain of itself, 
							because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.or one who avoids a pain that produces no resultant pleasure?
							</p>
							!--<span class="linkplus"></span>--
						</div>
					</a>
				</div>
				<div class="col-md-4 autre-actu">
					<a href="#" class="actualite rel">                
							<figure>
								<img src="https://www.supbiotech.fr/blogs/wp-content/uploads/sites/24/2021/03/retour-conference-epopee-vaccins-anti-covid-19-supbiotech-innovation-2021-home.jpg" alt="" />
							</figure>
						
						<div class="_resume">
							<h4>At vero eos et accusamus et iusto odio dignissimos </h4>
							<p class="detail">
							Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime 
							placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
							</p>
							!--<span class="linkplus"></span>--
						</div>
					</a>
				</div>
				<div class="clearboth"></div>
			</row> -->
			
			<row>
				<div class="col-md-4">
					&nbsp;
				</div>
				<div class="col-md-4">
					<a href="https://www.supbiotech.fr/blogs/" class="simple-button">Toutes les actualités</a>
				</div>
				<div class="col-md-4">
					&nbsp;
				</div>
			</row>

    	</div>
    
    </div>
</section>
<!-- end section actu -->

<!-- section replay -->
<section id="replay" class="actu">
    <div class="container-fluid replay-container">
		<div class="container">
		<h2><span>Revivez les temps forts de l'école</span></h2>
		</div>					
        
        <div class="slider-replay">           
            <div class="slide-replay">
                <a href="" class="actualite rel">
                
				<iframe width="560" height="315" src="https://www.youtube.com/embed/e5FV-slYOoI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   
                    <div class="resume">
                        <h4>Découvrez l'Envers du Campus de Sup'Biotech</h4>
                        <p class="_detail">
						Découvrez l'Envers du Campus de Sup'Biotech sur Campus channel 
                        </p>
                        <!--<span class="linkplus"></span>-->
                    </div>
                </a>    
            </div>
                
            <div class="slide-replay">
                <a href="" class="actualite rel">
                
				<iframe width="560" height="315" src="https://www.youtube.com/embed/DknEFZZ2uNM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   
                    <div class="resume">
                        <h4>Semestre à l'international - Finlande</h4>
                        <p class="_detail">
						Lors de leur troisième année, les étudiants partent pendant un semestre d’études dans l’une de nos universités partenaires. 
						Lucas Borel (Promo 2022) revient sur son expérience à Centria University of Applied Sciences en Finlande
                        </p>
                        <!--<span class="linkplus"></span>-->
                    </div>
                </a>    
            </div>
               
            <div class="slide-replay">
                <a href="" class="actualite rel">
                
				<iframe width="560" height="315" src="https://www.youtube.com/embed/x-QLIdanDNM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   
                    <div class="resume">
                        <h4>Remise des Titres Sup'Biotech promo 2018</h4>
                        <p class="_detail">
						Le 12 avril 2019, les étudiants de la promo 2018 de Sup'Biotech ont reçu leur diplôme au Palais des Congrés de Paris. 
						Ils étaient parrainés par Jean-Pierre Gaspard, Directeur général de l’AFM-Téléthon.
                        </p>
                        <!--<span class="linkplus"></span>-->
                    </div>
                </a>    
            </div>

            <div class="slide-replay">
                <a href="" class="actualite rel">
                
				<iframe width="560" height="315" src="https://www.youtube.com/embed/ZfsR9a9-5ls" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   
                    <div class="resume">
                        <h4>SB Career Day 2019 – Forum stages - emplois </h4>
                        <p class="_detail">
						Découvrez le SB Career Day 2019, le forum stages - emplois de Sup'Biotech. 
						Ce forum est une réelle opportunité de rencontres et d'échanges entre les étudiants, les diplômés et les entreprises.
                        </p>
                        <!--<span class="linkplus"></span>-->
                    </div>
                </a>    
            </div>
			<div class="slide-replay">
                <a href="" class="actualite rel">
                
                    <!--<figure>
                        <img src="https://www.supbiotech.fr/Content/images/design/visuel-slide-une.jpg" alt="etudiantes en laboratoire">
                    </figure>-->
					<iframe width="560" height="315" src="https://www.youtube.com/embed/k2DmJhIf4HI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   
                    <div class="resume">
                        <h4>Innovation Challenge Day 2019</h4>
                        <p class="_detail">
						L’Innovation Challenge Day est un événement annuel qui se déroule en juillet pour les 3e et 4e année de l’école. Durant cette journée, les étudiants de 4e année évaluent les Sup'Biotech Innovation Projects (SBIP) portés par les différentes équipes étudiantes de 3e année avant d’inverser les rôles ...
                        </p>
                        <!--<span class="linkplus"></span>-->
                    </div>
                </a>    
            </div>
			<div class="slide-replay">
                <a href="" class="actualite rel">
                
				<iframe width="560" height="315" src="https://www.youtube.com/embed/2FHcvbO1kYk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   
                    <div class="resume">
                        <h4>Mon 1er semestre d'apprenti - Marius (promo 2023)</h4>
                        <p class="_detail">
						Marius Bat (promo 2023) vient d’intégrer la 1re année du cycle ingénieur par la voie de l'apprentissage. Il a été admis au cursus via le Advance parallèle. 
						Il nous raconte ses premières impressions ...
                        </p>
                        <!--<span class="linkplus"></span>-->
                    </div>
                </a>    
            </div>
			<div class="slide-replay">
                <a href="" class="actualite rel">
                
				<iframe width="560" height="315" src="https://www.youtube.com/embed/4E_8R6zZkEU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   
                    <div class="resume">
                        <h4>Projets Innovants – Plants & Water</h4>
                        <p class="_detail">
						Avec les trois quarts de la surface du Globe couverts par les océans, la masse d'eau de mer représente un gisement considérable. En effet, 97% du total de la ressource en eau est salée. Avec une demande en eau douce supérieure aux ressources disponibles, 
						les usines de dessalement se sont développées... 
                        </p>
                        <!--<span class="linkplus"></span>-->
                    </div>
                </a>    
            </div>
			<div class="slide-replay">
                <a href="" class="actualite rel">
                
				<iframe width="560" height="315" src="https://www.youtube.com/embed/BvNrnZB02V4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   
                    <div class="resume">
                        <h4>Mon 1er semestre de 2e année - Sandrine (promo 2024)</h4>
                        <p class="_detail">
						Sandrine Coelho Barbosa (promo 2024) est arrivée en 2e année, en admission parallèle via le concours Advance parallèle et elle nous raconte ses premières impressions en ce début d'année. 
                        </p>
                        <!--<span class="linkplus"></span>-->
                    </div>
                </a>    
            </div>
			
        </div>

		<div class="container">
		<a href="https://www.youtube.com/user/supbiotech" class="simple-button replay">Toutes les vidéos</a>
		</div>
        
    <!--</div>-->
</section>


		</div><!--end home -->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();