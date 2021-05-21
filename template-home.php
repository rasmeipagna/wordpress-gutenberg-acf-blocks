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

				
				<div class="displayBiotechDayHome"><?php echo do_shortcode('[eventdb id="1206"]'); ?></div>
				<!-- <div class="displayEventHomeParis"></div>
				<div class="displayTypeJPOLyon"></div>

				<p class="displayJPOHome"></p>
					<p class="displayBiotechDayHome"></p>

				<p class="displayTypeJPOParis"></p>
					<p class="displayTypeJPOLyon"></p>

				<p class="displayTypeBiotechParis"></p>
					<p class="displayTypeBiotechLyon"></p>-->
			</div>
			<div class="CTI-logo">
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
<div class="clearfix"></div>

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
									Cycle<br />
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
									Cycle<br />
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
</section>
<!-- end section presentation -->
<div class="clearfix"></div>

<!-- section chiffres -->
<section id="chiffres">
    <div class="container">
        <div class="col-sm-12">
            <center>
                <div class="col-sm-2">
                    <img src="https://www.supbiotech.fr/Content/images/design/diplome.png" style="margin-bottom: 46px;" />
                    <p><span>diplôme</span><br /> d'ingénieurs CTI</p>

                </div>
            </center>
            <center>
                <div class="col-sm-2">
                    <img src="https://www.supbiotech.fr/Content/images/design/campus.png" style="margin-bottom: 55px;"/>
                    <p><span>2</span><br /> campus Paris et Lyon</p>
                </div>
            </center>
            <center>
                <div class="col-sm-2">
                    <img src="https://www.supbiotech.fr/Content/images/design/travel.png" style="margin-bottom: 55px; padding-top: 20px;" />
                    <p><span>1</span><br /> semestre à l'étranger</p>
                </div>
            </center>
            <center>
                <div class="col-sm-2">
                    <img src="https://www.supbiotech.fr/Content/images/design/calendar.png" style="margin-bottom: 43px;" />
                    <p><span>12</span><br /> mois de stages sur 3 ans</p>
                </div>
            </center>
            <center>
                <div class="col-sm-2">
                    <img src="https://www.supbiotech.fr/Content/images/design/labs.png" style="margin-bottom: 11px;" />
                    <p><span>4</span> <br />laboratoires de recherche</p>
                </div>
            </center>
            <center>
                <div class="col-sm-2">
                    <img src="https://www.supbiotech.fr/Content/images/design/hired.png" style=" margin-bottom: 41px; margin-top: 20px;" />
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
            Un secteur d’avenir qui <span>transforme le monde</span>
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
					<li><a href="/Content/docs/ingenieur-recherche.pdf" target="_blank">Ingénieur de recherche</a></li>
					<li><a href="/Content/docs/charge-affaires-reglementaires.pdf" target="_blank">Chargé des affaires réglementaires</a></li>
					<li><a href="/Content/docs/chef-projet.pdf" target="_blank">Chef de projet</a></li>
					<li><a href="/Content/docs/ingenieur-procede.pdf" target="_blank">Ingénieur procédés</a></li>
					
				</ul>
			</div>

			<div class="col-md-6">
				<ul>					
					<li><a href="/Content/docs/ingenieur-etudes.pdf" target="_blank">Ingénieur d'études</a></li>
					<li><a href="/Content/docs/consultante-communication.pdf" target="_blank">Consultants</a></li>
					<li><a href="/Content/docs/coordinateur-marketing.pdf" target="_blank">Coordinateur Marketing</a></li>
					<li><a href="/Content/docs/ingenieur-technico-commercial.pdf" target="_blank">Ingénieur Technico commercial</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>

			<div><a href="" class=" simple-button blue">Tous les métiers</a></div>

			<div class="clearfix"></div>


				<div class="col-md-4 bloc-alumni">
				<h3 class="blanc">Les Alumni à la une</h3>
					<p>> Découvrez les témoignages de nos Alumni</p>
					<div><a href="" class=" simple-button blue">Tous les témoignages</a></div>
				</div>
				<div class="col-md-8 ">
					
					<div class="video-container">
						<iframe width="550" height="300" src="https://www.youtube.com/embed/Kiq_5hN0QW4?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
					</div>
					
				</div>
			</div>
		</section>
<!-- end section debouchés -->

<section id="actus" class="actus">
    <div class="container">
        <h2>Actualités de <span>l'école</span></h2>
        <div class="_slider-actu">
			<row>
				<div class="col-md-7 main-actu">
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
						<!--<span class="linkplus"></span>-->
					</div>
				</div>
				<div class="clearboth"></div>
			</row>	

			<row>           
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
							<!--<span class="linkplus"></span>-->
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
							<!--<span class="linkplus"></span>-->
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
							<!--<span class="linkplus"></span>-->
						</div>
					</a>
				</div>
				<div class="clearboth"></div>
			</row>
			
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

<!--section id="actu" class="actu">
    <div class="_container">
        <h2>Replay de <span>l'école</span></h2>
        <div class="slider-actu">           
            <div class="slide-actu">
                <a href="" class="actualite rel">
                
				<iframe width="560" height="315" src="https://www.youtube.com/embed/e5FV-slYOoI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   
                    <div class="resume">
                        <p>Essai 1 </p>
                        <p class="_detail">
                            Paragraphe essai 1
                        </p>
                        <span class="linkplus"></span>
                    </div>
                </a>    
            </div>
                
            <div class="slide-actu">
                <a href="" class="actualite rel">
                
				<iframe width="560" height="315" src="https://www.youtube.com/embed/DknEFZZ2uNM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   
                    <div class="resume">
                        <p>Essai 2 </p>
                        <p class="_detail">
                            Paragraphe essai 2
                        </p>
                        <span class="linkplus"></span>
                    </div>
                </a>    
            </div>
               
            <div class="slide-actu">
                <a href="" class="actualite rel">
                
				<iframe width="560" height="315" src="https://www.youtube.com/embed/x-QLIdanDNM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   
                    <div class="resume">
                        <p>Essai 3 </p>
                        <p class="_detail">
                            Paragraphe essai 3
                        </p>
                        <span class="linkplus"></span>
                    </div>
                </a>    
            </div>                   
            <div class="slide-actu">
                <a href="" class="actualite rel">
                
				<iframe width="560" height="315" src="https://www.youtube.com/embed/ZfsR9a9-5ls" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   
                    <div class="resume">
                        <p>Essai 4 </p>
                        <p class="_detail">
                            Paragraphe essai 4
                        </p>
                        <span class="linkplus"></span>
                    </div>
                </a>    
            </div>
			<div class="slide-actu">
                <a href="" class="actualite rel">
                
                    !--<figure>
                        <img src="https://www.supbiotech.fr/Content/images/design/visuel-slide-une.jpg" alt="etudiantes en laboratoire">
                    </figure>--
					<iframe width="560" height="315" src="https://www.youtube.com/embed/k2DmJhIf4HI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   
                    <div class="resume">
                        <p>Essai 5 </p>
                        <p class="_detail">
                            Paragraphe essai 5
                        </p>
                        <span class="linkplus"></span>
                    </div>
                </a>    
            </div>
			<div class="slide-actu">
                <a href="" class="actualite rel">
                
				<iframe width="560" height="315" src="https://www.youtube.com/embed/2FHcvbO1kYk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   
                    <div class="resume">
                        <p>Essai 6 </p>
                        <p class="_detail">
                            Paragraphe essai 6
                        </p>
                        <span class="linkplus"></span>
                    </div>
                </a>    
            </div>
			<div class="slide-actu">
                <a href="" class="actualite rel">
                
				<iframe width="560" height="315" src="https://www.youtube.com/embed/4E_8R6zZkEU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   
                    <div class="resume">
                        <p>Essai 7 </p>
                        <p class="_detail">
                            Paragraphe essai 7
                        </p>
                        <span class="linkplus"></span>
                    </div>
                </a>    
            </div>
			<div class="slide-actu">
                <a href="" class="actualite rel">
                
				<iframe width="560" height="315" src="https://www.youtube.com/embed/BvNrnZB02V4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   
                    <div class="resume">
                        <p>Essai 7 </p>
                        <p class="_detail">
                            Paragraphe essai 7
                        </p>
                        <span class="linkplus"></span>
                    </div>
                </a>    
            </div>
        </div>
        <a href="https://www.supbiotech.fr/blogs/" class="simple-button">Toutes les actualités</a>
    </div>
</section-->

<section id="replay">

</section>

		
		
		
		
		
		
		
		
		
		
		
		
		</div><!--end home -->

		

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