<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sup\'Biotech_Blog
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push(
{'gtm.start': new Date().getTime(),event:'gtm.js'}
);var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WCL5PWM');</script>
<!-- End Google Tag Manager -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="/Content/images/design/favicon.ico">

  <?php wp_head(); ?>


</head>
<div class="layout-container">
<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WCL5PWM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div id="page" class="site">

       <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'supbiotech-blog' ); ?></a>
	<!--    HEADER MENU MOBILE   -->
    <div class="header-mobile">
        <a href="https://supbio.flywheelsites.com/">
            <img src="https://www.supbiotech.fr//Content/images/design/logo-supbiotech.png" alt="Logo supbiotech" style="position: absolute;" width="80px" /> <!-- class="scroll-logo" -->
        </a><div class="burger_boite"><a href="#" class="burger"></a></div>
    </div>
    <!-- HEADER MENU DESKTOP    -->
	<header id="masthead" class="site-header">

    <!-- la bannière bleue navy du Header -->
		<nav id="banner">
            <div class="content-banner">
                <ul class="ul-banner">                
                <?php
    $currentlang = get_bloginfo('language');
    if($currentlang=="en-GB") : ?>
    <!-- la bannière EN -->
        <li><a href="/contact-us">Contact</a></li>
    
    <?php else : ?>   
    <!-- la bannière FR -->
        <li><a href="/admissions-ecole-ingenieur/venir-nous-rencontrer">Nous rencontrer</a></li>
        <li><a href="/contact">Contact</a></li>        
        <?php endif; ?>

                    
                    
                </ul>
                
                    <ul class="logo-reseaux">
                        <li><a class="facebook" href="https://www.facebook.com/supbiotech"></a></li>
                        <li>
                            <a class="twitter" href="https://twitter.com/supbiotech"></a>
                        </li>
                        <li><a class="youtube" href="https://www.youtube.com/user/supbiotech"></a></li>
                        <li><a class="insta" href="https://www.instagram.com/supbiotech/"></a></li>
                    </ul>
                </div>
        
        </nav>
		<!--<div class="site-branding">
       
		</div> .site-branding -->

		<nav id="cbp-hrmenu" class="cbp-hrmenu">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'supbiotech-blog' ); ?></button>

            <ul class="main">
            <li class="ligo">
<a class="logo" href="https://supbio.flywheelsites.com/">
    <img src="https://www.supbiotech.fr/Content/images/design/logo-supbiotech.png" alt="Logo supbiotech" class="top-logo" />
    <img src="https://www.supbiotech.fr/Content/images/design/logo-supbiotech.png" alt="Logo supbiotech" class="scroll-logo" />
</a>
</li></ul>

			<?php

				wp_nav_menu( array( 
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
                    'container' => 'div',
                    'container_class' => '_cbp-hrsub',
                    //'container_id' => 'eeee',
                    'menu_class' => 'menu',
                    //'menu_id' => 'zzzz',
                    //'items_wrap'      => '<ul class="main">%3$s</ul>',
                    'walker'          => new My_Walker_Nav_Menu()
				) );

			?>

            
            <div class="cbp-hrmenu search-bloc">
                <ul class="main2">                

                <?php
    $currentlang = get_bloginfo('language');
    if($currentlang=="en-GB") : ?>
    <!-- la recherche et le FR en anglais -->
        <li class="search">
            <form method="get" action="/">
                <input id="recherche" type="text" placeholder="Search" name="s">
                <input class="bouton-recherche" type="submit" value="Ok">
            </form>
        </li>
        <li class="flagDesign">
            <a href="../" target="_blank" class="flagPos">FR</a>
        </li>      
    
    <?php else : ?>   
        <li class="search">
                <!--<form class="form-inline my-2 my-lg-0" action="<?= esc_url(home_url('/')) ?>">
                    <input class="form-control mr-sm-2" name="s" type="search" placeholder="Recherche" aria-label="Search" value="<?= get_search_query() ?>">
                    <button class="btn btn-outline my-2 my-sm-0" type="submit">Rechercher</button>
                </form>--> 
            <form method="get" action="/">
                <input id="recherche" type="text" placeholder="Rechercher" name="s">
                <input class="bouton-recherche" type="submit" value="Ok">
            </form>
        </li>
         <li class="flagDesign">
            <a href="/en/accueil-home-page-en/" class="flagPos">EN</a>
        </li>   
    <?php endif; ?>
                   
                </ul>
            <!--</div> -->   

			<!--<ul class="main">
                <li class="ligo">
                    <a class="logo" href="https://www.supbiotech.fr">
                        <img src="https://www.supbiotech.fr/Content/images/design/logo-supbiotech.png" alt="Logo supbiotech" class="top-logo" />
                        <img src="https://www.supbiotech.fr/Content/images/design/logo-supbiotech.png" alt="Logo supbiotech" class="scroll-logo" />
                    </a>
                </li>
                

                <li class="first-entry">
                    <a href="#" class="trigger first-entry">école</a>
                    <div class="cbp-hrsub">
                        <div class="cbp-hrsub-inner">
                            <div class="col-sm-7 left-menu">
                                <div class="left-menu-contenair right">

                                    <ul>
                                        <li><a href="/ecole-ingenieurs-biotechnologies/presentation">L'école des biotechnologies</a></li>
                                        <li><a href="/ecole-ingenieurs-biotechnologies/campus-ecole/">Nos 2 campus</a></li>
                                        <li class="li-niveau-2"> Sup'Biotech</li>
                                        <li class="li-niveau-3"><a href="/ecole-ingenieurs-biotechnologies/pedagogie-numerique/">Pédagogie numérique</a></li>
                                        <li class="li-niveau-3"><a href="/ecole-ingenieurs-biotechnologies/projets-etudiants/">Pédagogie par projets</a></li>
                                        <li><a href="https://www.supbiotech.fr/ecole-ingenieurs-biotechnologies/equipe">Équipe</a></li>
                                        <li><a href="https://www.supbiotech.fr/blogs/">Actualités</a></li>
                                        <li><a href="https://www.supbiotech.fr/ecole-ingenieurs-biotechnologies/ionis-group">IONIS Education Group</a></li>
                                       
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-5 right-menu">
                            	<div class="col-md-12 rel">
									<div class="contact-clic hpDesktop">
    <a class="documentation" href="https://www.supbiotech.fr/admissions-ecole-ingenieur/documentation">
        Documentation
    </a>
    <a class="candidature" href="https://www.supbiotech.fr/admissions-ecole-ingenieur/candidature">
        Candidature
    </a>   
    <a class="entretien" href="https://www.supbiotech.fr/admissions-ecole-ingenieur/agenda">
            Agenda
     </a>
    <a class="rdvperso" href="https://www.supbiotech.fr/admissions-ecole-ingenieur/nous-rencontrer/rdv-personnalises">
        RDV <br /> personnalisé
    </a>

    


</div>
									<div class="jpo">

        <p><span>Venez nous rencontrer</span></p>

        <p class="displayParisHeader"></p>
        <p class="displayLyonHeader"></p>

    </div>
									
                            		
                            	</div>
                                <a class="close" href=""></a>
                            </div>
                            

                        </div>!-- /cbp-hrsub-inner --
                    </div>!-- /cbp-hrsub --
                </li>
                <li>
                    <a href="#" class="trigger">Vie étudiante</a>
                    <div class="cbp-hrsub">
                        <div class="cbp-hrsub-inner">
                            <div class="col-sm-7 left-menu">
                                <div class="left-menu-contenair right">
                                    <div class="left" style="width:100%">
                                        <ul>
                                            <li><a href="https://www.supbiotech.fr/formation-ingenieur-biologie/associations">La vie associative</a></li>
                                            <li><a href="https://www.supbiotech.fr/formation-ingenieur-biologie/sport">Faire du sport</a></li>
                                            
                                            <li><a href="https://www.supbiotech.fr/formation-ingenieur-biologie/se-loger">Se loger</a></li>

                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5 right-menu">
                            	<div class="col-md-12 rel">
                            		<div class="contact-clic hpDesktop">
    <a class="documentation" href="https://www.supbiotech.fr/admissions-ecole-ingenieur/documentation">
        Documentation
    </a>
    <a class="candidature" href="https://www.supbiotech.fr/admissions-ecole-ingenieur/candidature">
        Candidature
    </a>   
    <a class="entretien" href="https://www.supbiotech.fr/admissions-ecole-ingenieur/agenda">
            Agenda
     </a>
    <a class="rdvperso" href="https://www.supbiotech.fr/admissions-ecole-ingenieur/nous-rencontrer/rdv-personnalises">
        RDV <br /> personnalisé
    </a>

    


</div>
									<div class="jpo">

        <p><span>Venez nous rencontrer</span></p>

        <p class="displayParisHeader"></p>
        <p class="displayLyonHeader"></p>

    </div>
									
                            	</div>
                                <a class="close" href=""></a>
                            </div>
                            
                        </div>-- /cbp-hrsub-inner --
                    </div>!-- /cbp-hrsub --
                </li>
                <li>
                    <a href="#" class="trigger">Programmes</a>
                    <div class="cbp-hrsub">
                        <div class="cbp-hrsub-inner">
                            <div class="col-sm-7 left-menu">
                                <div class="left-menu-contenair right">
									<div class="left" style="width:100%">
                                        <ul>
                                            <li class="li-niveau-2">Bachelor</li>
                                            <li><a href="https://www.supbiotech.fr/formation-bachelor">Travailler dans les biotechnologies en 3 ans</a></li>

                                            <li class="li-niveau-2">Pédagogie Sup'Biotech</li>
                                            <li><a href="https://www.supbiotech.fr/formation-ingenieur-biologie/cursus/presentation">Devenir ingénieur en biotechnologies en 5 ans</a></li>
                                            <li class="li-niveau-3"><a href="https://www.supbiotech.fr/formation-ingenieur-biologie/cursus/cycle-preparatoire ">Cycle préparatoire</a></li>
                                            <li class="li-niveau-3"><a href="https://www.supbiotech.fr/formation-ingenieur-biologie/cursus/cycle-preparatoire">Cycle préparatoire en anglais</a></li>
                                            <li class="li-niveau-3"><a href="https://www.supbiotech.fr/formation-ingenieur-biologie/cursus/cycle-ingenieur
">Cycle ingénieur</a></li>
                                            <li class="li-niveau-3"><a href="https://www.supbiotech.fr/formation-ingenieur-biologie/cursus/apprentissage">Cycle ingénieur par l'apprentissage</a></li>
                                            <li class="li-niveau-2">VAE</li>
                                            <li><a href="https://www.supbiotech.fr/admissions-ecole-ingenieur/validation-acquis-experience">Procédure de validation des acquis par l'expérience</a></li>                                         
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5 right-menu">
                            	<div class="col-md-12 rel">
                            		<div class="contact-clic hpDesktop">
    <a class="documentation" href="https://www.supbiotech.fr/admissions-ecole-ingenieur/documentation">
        Documentation
    </a>
    <a class="candidature" href="https://www.supbiotech.fr/admissions-ecole-ingenieur/candidature">
        Candidature
    </a>   
    <a class="entretien" href="https://www.supbiotech.fr/admissions-ecole-ingenieur/agenda">
            Agenda
     </a>
    <a class="rdvperso" href="https://www.supbiotech.fr/admissions-ecole-ingenieur/nous-rencontrer/rdv-personnalises">
        RDV <br /> personnalisé
    </a>

    


</div>
									<div class="jpo">

        <p><span>Venez nous rencontrer</span></p>

        <p class="displayParisHeader"></p>
        <p class="displayLyonHeader"></p>

    </div>
                            	</div>
                                <a class="close" href=""></a>
                            </div>
                            
                        </div>!-- /cbp-hrsub-inner --
                    </div>!-- /cbp-hrsub --
                </li>
                <li>
                    <a href="#" class="trigger">Admission</a>
                    <div class="cbp-hrsub">
                        <div class="cbp-hrsub-inner">
                            <div class="col-sm-7 left-menu">
                                <div class="left-menu-contenair right">
									<div class="left" style="width:100%">
                                        <ul>

                                            <li><a href="https://www.supbiotech.fr/admissions-ecole-ingenieur/quelles-specialites-choisir">Quelles spécialités choisir au Bac ?</a></li>
                                            <li><a href="https://www.supbiotech.fr/admissions-ecole-ingenieur/post-bac">Terminales – Concours Advance</a></li>
                                            <li><a href="https://www.supbiotech.fr/formation-bachelor/admissions">Terminales et bac+1 - Bachelor</a></li>
                                            <li class="li-niveau-2">Bac à Bac + 5 – Advance Parallèle</li>
                                            <li class="li-niveau-3"><a href="https://www.supbiotech.fr/admissions-ecole-ingenieur/paralleles">Admission en cycle initial</a></li>
                                            <li class="li-niveau-3"><a href="https://www.supbiotech.fr/admissions-ecole-ingenieur/apprentissage">Admission en apprentissage</a></li>
                                            <li><a href="https://www.supbiotech.fr/admissions-ecole-ingenieur/reorientation-pass-sante">Après une PASS</a></li>
                                            <li><a href="https://www.supbiotech.fr/admissions-ecole-ingenieur/tarifs-financement">Tarifs & financement</a></li>

                                         
                                        </ul>
                                    </div>
                                </div>
                            </div>
                           <div class="col-sm-5 right-menu">
                            	<div class="col-md-12 rel">
                            		<div class="contact-clic hpDesktop">
    <a class="documentation" href="https://www.supbiotech.fr/admissions-ecole-ingenieur/documentation">
        Documentation
    </a>
    <a class="candidature" href="https://www.supbiotech.fr/admissions-ecole-ingenieur/candidature">
        Candidature
    </a>   
    <a class="entretien" href="https://www.supbiotech.fr/admissions-ecole-ingenieur/agenda">
            Agenda
     </a>
    <a class="rdvperso" href="https://www.supbiotech.fr/admissions-ecole-ingenieur/nous-rencontrer/rdv-personnalises">
        RDV <br /> personnalisé
    </a>

    


</div>
									<div class="jpo">

        <p><span>Venez nous rencontrer</span></p>

        <p class="displayParisHeader"></p>
        <p class="displayLyonHeader"></p>

    </div>
                            	</div>
                                <a class="close" href=""></a>
                            </div>
                            
                        </div>!-- /cbp-hrsub-inner --
                    </div>!-- /cbp-hrsub --
                </li>
                <li>
                    <a href="#" class="trigger">International</a>
                    <div class="cbp-hrsub">
                        <div class="cbp-hrsub-inner">
                            <div class="col-sm-7 left-menu">
                                <div class="left-menu-contenair right">
                                   <div class="left" style="width:100%">
                                        <ul>
                                            <li><a href="https://www.supbiotech.fr/international-ecole-biologie/etudes-international">Ouverture à l’international</a></li>
                                            <li><a href="https://www.supbiotech.fr/international-ecole-biologie/etudier-etranger">L’anglais au cœur de la formation</a></li>
                                            <li><a href="https://www.supbiotech.fr/international-ecole-biologie/partenaires">Universités partenaires</a></li>
                                            <li><a href="https://www.supbiotech.fr/international-ecole-biologie/temoignages-etudiants">Un semestre que l’on n'oubliera jamais</a></li>

                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-5 right-menu">
                            	<div class="col-md-12 rel">
                            		<div class="contact-clic hpDesktop">
    <a class="documentation" href="https://www.supbiotech.fr/admissions-ecole-ingenieur/documentation">
        Documentation
    </a>
    <a class="candidature" href="https://www.supbiotech.fr/admissions-ecole-ingenieur/candidature">
        Candidature
    </a>   
    <a class="entretien" href="https://www.supbiotech.fr/admissions-ecole-ingenieur/agenda">
            Agenda
     </a>
    <a class="rdvperso" href="https://www.supbiotech.fr/admissions-ecole-ingenieur/nous-rencontrer/rdv-personnalises">
        RDV <br /> personnalisé
    </a>

    


</div>
									<div class="jpo">

        <p><span>Venez nous rencontrer</span></p>

        <p class="displayParisHeader"></p>
        <p class="displayLyonHeader"></p>

    </div>
                            	</div>
                                <a class="close" href=""></a>
                            </div>
                            
                        </div>!-- /cbp-hrsub-inner --
                    </div>!-- /cbp-hrsub --
                </li>

                <li>
                    <a href="#" class="trigger">Recherche<br />& Innovation</a>
                    <div class="cbp-hrsub">
                        <div class="cbp-hrsub-inner">
                            <div class="col-sm-7 left-menu">
                                <div class="left-menu-contenair right">
                                    <div class="left" style="width:100%">
                                        <ul>
                                            <li class="li-niveau-2">Laboratoires de recherche</li>
                                            <li class="li-niveau-3"><a href="https://www.supbiotech.fr/recherche-biotechnologie/laboratoire-celltechs-ingenierie-cellulaire">Laboratoires cellules souches</a></li>
                                            <li class="li-niveau-3"><a href="https://www.supbiotech.fr/recherche-biotechnologie/laboratoire-birl-bioinformatique">Laboratoires bio-informatique</a></li>
                                            <li class="li-niveau-3"><a href="https://www.supbiotech.fr/recherche-biotechnologie/laboratoire-lrpia-recherche-partenariale">Laboratoire agroalimentaire</a></li>
                                            <li class="li-niveau-3"><a href="https://www.supbiotech.fr/recherche-biotechnologie/sciences-humaines-sociales">Laboratoire Sciences sociales</a></li>
                                            <li><a href="https://www.supbiotech.fr/formation-ingenieur-biologie/laboratoires-travaux-pratiques">Laboratoires pédagogiques</a></li>
                                            <li><a href="https://www.supbiotech.fr/formation-ingenieur-biologie/sbip-innovation-project">SBIP</a></li>
                                          
                                        </ul>
                                    </div>
                                </div>
                            </div>
                           <div class="col-sm-5 right-menu">
                                <div class="col-md-12 rel">
                                    <div class="contact-clic hpDesktop">
    <a class="documentation" href="https://www.supbiotech.fr/admissions-ecole-ingenieur/documentation">
        Documentation
    </a>
    <a class="candidature" href="https://www.supbiotech.fr/admissions-ecole-ingenieur/candidature">
        Candidature
    </a>   
    <a class="entretien" href="https://www.supbiotech.fr/admissions-ecole-ingenieur/agenda">
            Agenda
     </a>
    <a class="rdvperso" href="https://www.supbiotech.fr/admissions-ecole-ingenieur/nous-rencontrer/rdv-personnalises">
        RDV <br /> personnalisé
    </a>

    


</div>
									<div class="jpo">

        <p><span>Venez nous rencontrer</span></p>

        <p class="displayParisHeader"></p>
        <p class="displayLyonHeader"></p>

    </div>
                                </div>
                                <a class="close" href=""></a>
                            </div>
                           
                        </div>!-- /cbp-hrsub-inner --
                    </div>!-- /cbp-hrsub --
                </li>

                <li>
                    <a href="#" class="trigger">Entreprise</a>
                    <div class="cbp-hrsub">
                        <div class="cbp-hrsub-inner">
                            <div class="col-sm-7 left-menu">
                                <div class="left-menu-contenair right">
                                    <div class="left" style="width:100%">
                                        <ul>
                                            <li><a href="https://www.supbiotech.fr/entreprise-ecole-ingenieurs/formation-insertion-professionnelle">L’entreprise au cœur de la formation</a></li>
                                            <li><a href="https://www.supbiotech.fr/entreprise-ecole-ingenieurs/recruter-ingenieur-biotechnologies">Stages en entreprise</a></li>
                                            <li><a href="https://www.supbiotech.fr/entreprise-ecole-ingenieurs/partenaires-academiques">Nos partenaires</a></li>
                                            <li class="li-niveau-2">Espace Entreprise</li>
                                            <li class="li-niveau-3"><a href="https://www.supbiotech.fr/entreprise-ecole-ingenieurs/recruter-stagiaire">Recruter un étudiant</a></li>
                                            <li class="li-niveau-3"><a href="https://www.supbiotech.fr/entreprise-ecole-ingenieurs/taxe-apprentissage">La taxe d’apprentissage</a></li>
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5 right-menu">
                            	<div class="col-md-12 rel">
                            		<div class="contact-clic hpDesktop">
    <a class="documentation" href="https://www.supbiotech.fr/admissions-ecole-ingenieur/documentation">
        Documentation
    </a>
    <a class="candidature" href="https://www.supbiotech.fr/admissions-ecole-ingenieur/candidature">
        Candidature
    </a>   
    <a class="entretien" href="https://www.supbiotech.fr/admissions-ecole-ingenieur/agenda">
            Agenda
     </a>
    <a class="rdvperso" href="https://www.supbiotech.fr/admissions-ecole-ingenieur/nous-rencontrer/rdv-personnalises">
        RDV <br /> personnalisé
    </a>

    


</div>
									<div class="jpo">

        <p><span>Venez nous rencontrer</span></p>

        <p class="displayParisHeader"></p>
        <p class="displayLyonHeader"></p>

    </div>
                            	</div>
                                <a class="close" href=""></a>
                            </div>
                            
                        </div>!-- /cbp-hrsub-inner --
                    </div>!-- /cbp-hrsub --
                </li>
				
				<li>
                    <a href="#" class="trigger">Après<br />Sup'biotech</a>
                    <div class="cbp-hrsub">
                        <div class="cbp-hrsub-inner">
                            <div class="col-sm-7 left-menu">
                                <div class="left-menu-contenair right">
                                    <div class="left" style="width:100%">
                                        <ul>
                                            <li><a href="https://www.supbiotech.fr/debouches-metier-biologie/metiers">Métiers et débouchés</a></li>
                                            <li class="li-niveau-2">Domaines d’application</li>
                                            <li class="li-niveau-3"><a href="https://www.supbiotech.fr/debouches-metier-biologie/secteurs/carriere-agroalimentaire">Agroalimentaire</a></li>
                                            <li class="li-niveau-3"><a href="https://www.supbiotech.fr/debouches-metier-biologie/secteurs/carriere-cosmetique">Cosmétiques</a></li>
                                            <li class="li-niveau-3"><a href="https://www.supbiotech.fr/debouches-metier-biologie/secteurs/carriere-environnement">Environnement</a></li>
                                            <li class="li-niveau-3"><a href="https://www.supbiotech.fr/debouches-metier-biologie/secteurs/carriere-sante">Santé</a></li>
                                            <li><a href="https://www.supbiotech.fr/entreprise-ecole-ingenieurs/observatoire-metiers-biotechnologies">Observatoire des métiers des biotechnologies</a></li>
                                            <li><a href="https://www.supbiotech.fr/debouches-metier-biologie/entrepreneuriat-creation-entreprise">Création d’entreprise</a></li>
                                            <li><a href="https://www.supbiotech.fr/debouches-metier-biologie/reseau-alumni">Alumni </a></li>
                                           

                                        </ul>
                                    </div>
                                </div>
                            </div>
                           <div class="col-sm-5 right-menu">
                            	<div class="col-md-12 rel">
                            		<div class="contact-clic hpDesktop">
    <a class="documentation" href="https://www.supbiotech.fr/admissions-ecole-ingenieur/documentation">
        Documentation
    </a>
    <a class="candidature" href="https://www.supbiotech.fr/admissions-ecole-ingenieur/candidature">
        Candidature
    </a>   
    <a class="entretien" href="https://www.supbiotech.fr/admissions-ecole-ingenieur/agenda">
            Agenda
     </a>
    <a class="rdvperso" href="https://www.supbiotech.fr/admissions-ecole-ingenieur/nous-rencontrer/rdv-personnalises">
        RDV <br /> personnalisé
    </a>

    


</div>
									<div class="jpo">

        <p><span>Venez nous rencontrer</span></p>

        <p class="displayParisHeader"></p>
        <p class="displayLyonHeader"></p>

    </div>
                            	</div>
                                <a class="close" href=""></a>
                            </div>
                            
                        </div>!-- /cbp-hrsub-inner --
                    </div>!-- /cbp-hrsub --
                </li>




                <li class="search">
                    <form method="get" action="/">
                        <input id="recherche" type="text" placeholder="Rechercher" name="search">
                        <input class="bouton-recherche" type="submit" value="Ok">
                    </form>
                </li>
                <li class="flagDesign">
                    <a href="https://www.supbiotech.fr/en/" target="_blank" class="flagPos">en</a>
                </li>
            </ul>
            -->
			<div id="bloc-contact-mobile">
                <a href="/admissions-ecole-ingenieur/documentation/">
                    <div class="bloc-contact-inside documentation">
                        <span><img src="https://www.supbiotech.fr/Content/images/design/picto-documentation-mobile.png" />Documentation</span>

                    </div>
                </a>
                <a href="/agenda">
                    <div class="bloc-contact-inside entretien">
                        <span><img src="https://www.supbiotech.fr/Content/images/design/picto-entretien-mobile.png" />Agenda</span>
                        
                    </div>
                </a>
                    <a href="admission-ecole-ingenieur/candidature">
                        <div class="bloc-contact-inside candidature">
                            <span><img src="https://www.supbiotech.fr/Content/images/design/picto-candidature-mobile.png" />Candidature</span>

                        </div>
                    </a>
                    <a href="/admissions-ecole-ingenieur/rdv-personnalises">
                        <div class="bloc-contact-inside rdvperso">
                            <span><img src="https://www.supbiotech.fr/Content/images/design/picto-rdvperso-mobile.png" />rdv personnalisé</span>

                        </div>
                    </a>


</div>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

  
