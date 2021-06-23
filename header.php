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
 <!--  SIRDATA -->
 <script type="text/javascript" src="https://cache.consentframework.com/js/pa/23324/c/75Dqy/stub" referrerpolicy="unsafe-url" charset="utf-8"></script>
 <script type="text/javascript" src="https://choices.consentframework.com/js/pa/23324/c/75Dqy/cmp" referrerpolicy="unsafe-url" charset="utf-8" async></script>
 <!-- END SIRDATA -->
<!-- Google Tag Manager --
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push(
{'gtm.start': new Date().getTime(),event:'gtm.js'}
);var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WCL5PWM');</script>
!-- End Google Tag Manager -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="/Content/images/design/favicon.ico">
  <?php wp_head(); ?>


</head>
<div class="layout-container">
<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) --
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WCL5PWM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
!-- End Google Tag Manager (noscript) -->
    <div id="page" class="site">

       <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'supbiotech-blog' ); ?></a>
	<!--    HEADER MENU MOBILE   -->
    <div class="header-mobile">
    <?php
    $currentlang = get_bloginfo('language');
    if($currentlang=="en-GB") : ?>
        <a href="/en/">
    <?php else : ?>
        <a href="/"> 
    <?php endif; ?>        
            <img src="/wp-content/uploads/supbiotech-logo-mobile.png" alt="Logo supbiotech" style="position: absolute;" /> <!-- class="scroll-logo" -->
        </a><div class="burger_boite"><a href="#" class="burger"></a></div>
    </div>
    <!-- HEADER MENU DESKTOP    -->
	<header id="masthead" class="site-header">

    <!-- la bannière bleue navy du Header -->
		<nav id="banner">
                         
                <?php
    $currentlang = get_bloginfo('language');
    if($currentlang=="en-GB") : ?>
    <!-- la bannière EN -->
        <div class="content-banner content-banner-en">
            <ul class="ul-banner">   
                <li><a href="/en/contact-us">Contact</a></li>
    
    <?php else : ?>   
    <!-- la bannière FR -->
        <div class="content-banner">
            <ul class="ul-banner">
                <li><a href="/admissions-ecole-ingenieur/venir-nous-rencontrer">Nous rencontrer</a></li>
                <li><a href="/contact">Contact</a></li>        
        <?php endif; ?>

                    
                    
                </ul>
                
                    <ul class="logo-reseaux">
                        <li><a class="facebook" href="https://www.facebook.com/supbiotech" target="_blank"></a></li>
                        <li>
                            <a class="twitter" href="https://twitter.com/supbiotech" target="_blank"></a>
                        </li>
                        <li><a class="youtube" href="https://www.youtube.com/user/supbiotech" target="_blank"></a></li>
                        <li><a class="insta" href="https://www.instagram.com/supbiotech/" target="_blank"></a></li>
                    </ul>
                </div>
        
        </nav>
		<!--<div class="site-branding">
       
		</div> .site-branding -->

		<nav id="cbp-hrmenu" class="cbp-hrmenu">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'supbiotech-blog' ); ?></button>

            <ul class="main">
            <li class="ligo">
            <?php
            $currentlang = get_bloginfo('language');
            if($currentlang=="en-GB") : ?>
                <a class="logo" href="/en/">
            <?php else : ?>
                <a class="logo" href="/"> 
            <?php endif; ?>  
            
                <img src="/wp-content/uploads/supbiotech-logo.jpg" alt="Logo supbiotech" class="top-logo" />
                <img src="/wp-content/uploads/supbiotech-logo.jpg" alt="Logo supbiotech" class="scroll-logo" />
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
            <form method="get" action="/en/">
                <input id="recherche" type="text" placeholder="Search" name="s">
                <input class="bouton-recherche" type="submit" value="Ok">
            </form>
        </li>
        <li class="flagDesign">
            <a href="../" class="flagPos">FR</a>
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
            <a href="/en/" class="flagPos">EN</a>
        </li>   
    <?php endif; ?>
                   
                </ul>

                <?php
    $currentlang = get_bloginfo('language');
    if($currentlang=="en-GB") : ?> 

            <div id="bloc-contact-mobile">
                <a href="/en/admissions/download-documentation/">
                    <div class="bloc-contact-inside documentation">
                        <span><img src="https://www.supbiotech.fr/Content/images/design/picto-documentation-mobile.png" />Documentation</span>

                    </div>
                </a>
                <!--<a href="/agenda">
                    <div class="bloc-contact-inside entretien">
                        <span><img src="https://www.supbiotech.fr/Content/images/design/picto-entretien-mobile.png" />Agenda</span>
                        
                    </div>
                </a>-->
                    <a href="/en/admissions/online-application/">
                        <div class="bloc-contact-inside candidature">
                            <span><img src="https://www.supbiotech.fr/Content/images/design/picto-candidature-mobile.png" />Application</span>

                        </div>
                    </a>
                    <a href="/en/contact-us">
                        <div class="bloc-contact-inside rdvperso">
                            <span><img src="https://www.supbiotech.fr/Content/images/design/picto-rdvperso-mobile.png" />contacts</span>

                        </div>
                    </a>
            </div>
    
    <?php else : ?>
            
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
                    <a href="/admission-ecole-ingenieur/candidature">
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

    <?php endif; ?>  
    
    
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

  
