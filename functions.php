<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 99 );
function theme_enqueue_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', null, null );
 wp_enqueue_style('child-theme', get_stylesheet_directory_uri() .'/css/style.css', array('parent-style'));
 wp_enqueue_style('menu-theme', get_stylesheet_directory_uri() .'/css/menu.css', array('parent-style'));
 wp_enqueue_style('home-theme', get_stylesheet_directory_uri() .'/css/home.css', array('parent-style'));
 wp_enqueue_script('child-theme-main', get_stylesheet_directory_uri() .'/js/main.js', array(), null, null);
 wp_enqueue_script('child-theme-navigation', get_stylesheet_directory_uri() .'/js/navigation.js', array(), null, null);
//wp_enqueue_script('child-theme-bootstrap', get_stylesheet_directory_uri() .'/js/bootstrap.js');
	
}

class My_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = array()) {
        $indent = str_repeat("\t", $depth);
        if ($depth == 0) {
        $output .= "\n$indent<ul class=\"cbp-hrsub\">\n<div class=\"cbp-hrsub-inner\">\n<div class=\"col-sm-7 left-menu\">\n<div class=\"left-menu-contenair right\"><ul>";
        }else { 
            $output .= "\n$indent<ul>";
        }
    }
    function end_lvl(&$output, $depth = 0, $args = array()) {
        $indent = str_repeat("\t", $depth);
        if ($depth == 0) {
    
        $output .= "\n</ul>\n</div>\n</div>";
        $output .= '<div class="col-sm-5 right-menu">
        <div class="col-md-12 rel">
        <div class="contact-clic hpDesktop">
            <a class="documentation" href="/admissions-ecole-ingenieur/documentation">
                Documentation
            </a>
            <a class="candidature" href="/admissions-ecole-ingenieur/candidature">
                Candidature
            </a>   
            <a class="entretien" href="/agenda">
                    Agenda
            </a>
            <a class="rdvperso" href="/admissions-ecole-ingenieur/nous-rencontrer/rdv-personnalises">
                RDV <br> personnalisé
            </a>
        </div>
        <div class="jpo">
		<p><span>Venez nous rencontrer</span></p>';
		$output .= do_shortcode('[eventdb id="1372"]'); 
		$output .= '<div class="clearboth"></div>'; 
		$output .= do_shortcode('[eventdb id="1705"]'); 
		$output .='

                <!--<p class="displayParisHeader" style="display: block;"><span class="date rel"><span class="informations"><span class="date">Le 22/05/2021</span><br>Biotech Day à Paris<br><span class="registration">Inscription obligatoire</span></span><a class="linkplus" href="https://www.supbiotech.fr/admissions-ecole-ingenieur/nous-rencontrer/biotech-day"></a></span></p>-->
                <!--<p class="displayLyonHeader" style="display: block;"><span class="date rel"><span class="informations"><span class="date">Le 29/05/2021</span><br>Journée Portes Ouvertes à Lyon<br><span class="registration">Inscription obligatoire</span></span><a class="linkplus" href="https://www.supbiotech.fr/admissions-ecole-ingenieur/nous-rencontrer/journees-portes-ouvertes-jpo"></a></span></p>-->
                
        </div>

        </div>           
        
            <a class="close" href=""></a>
        
        </div>';
        $output .= "\n</div>";
                }
        $output .= "</ul>";
    }
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        $class_names = $value = '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

        $output .= $indent . '<li' . $id . $value . $class_names .'>';

        // MODIF 1
        // si le lien est vide...
        // ou s'il comment par '#' (ancre)...
        // alors la balise sera un 'span' ou lieu d'un 'a'
        $balise = ( ! empty( $item->url ) && substr( $item->url, 0, 1 ) != '#') ? 'a' : 'span';

        $atts = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
        $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';

        // MODIF 2 : on n'ajout l'URL seulent si c'est un lien
        if( 'a' == $balise )
            $atts['href']   = ! empty( $item->url ) ? $item->url : '';

        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        // On rajoute une classe "trigger" pour que le sous-menu fonctionne
        $trigger = '';
        if ($depth == 0) {
           $trigger = 'class="trigger"';
        }

        // MODIF 3 : on remplace 'a' par $balise
        $item_output = $args->before;
        $item_output .= '<' . $balise . ''. $attributes .'' . $trigger .'>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</' . $balise . '>';
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}

// This theme uses wp_nav_menu() in one location.
register_nav_menus( array(
    'menu-footer' => esc_html__( 'Footer', 'supbiotech-blog' ),
) );


/*LOAD CSS TO STYLE THE GUTENBERG BLOCK EDITOR LIKE THE FRONT END */
// add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
// function enqueue_parent_styles() {
//    wp_enqueue_style( 'parent-style', get_template_directory_uri().'css/style.css' );
// }

// function site_block_editor_styles() {
//     wp_enqueue_style( 'site-block-editor-styles', get_theme_file_uri( '/style-editor.css' ), false, '1.0', 'all' );
// }
// add_action( 'enqueue_block_editor_assets', 'site_block_editor_styles' );



/* Colors theme support */
add_theme_support( 'editor-color-palette', array(
	array(
		'name' => __( 'dark-blue', 'textdomain' ),
		'slug' => 'dark-blue',
		'color' => '#002838', 
	),
	array(
		'name' => __( 'light-blue', 'textdomain' ),
		'slug' => 'light-blue',
		'color' => '#00b1eb', 
	),
	array(
		'name' => __( 'green', 'textdomain' ),
		'slug' => 'green',
		'color' => '#aed136', 
	),
    array(
		'name' => __( 'white', 'textdomain' ),
		'slug' => 'white',
		'color' => '#ffffff', 
	),
) );

register_block_style(
    'core/table',
    array(
        'name'  => 'table-thead-blue',
        'label' => 'Tableau en-tête Bleu',
        'isDefault'=> 'true',
    )
);
add_theme_support( 'align-wide' );
// ADD BLOCK ACF PERSO
add_action('acf/init', 'my_acf_init');
//Create function to init acf
function my_acf_init() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
        // register a testimonial block TEST
		// acf_register_block(array(
		// 	'name'				=> 'testimonial',
		// 	'title'				=> __('Testimonial'),
		// 	'description'		=> __('A custom testimonial block.'),
		// 	'render_callback'	=> 'my_acf_block_render_callback',
		// 	'category'			=> 'formatting',
		// 	'icon'				=> 'admin-comments',
		// 	'keywords'			=> array( 'testimonial', 'quote' ),
		// ));

        // register a bloc-equipe
		acf_register_block(array(
			'name'				=> 'bloc-equipe',
			'title'				=> __('bloc-equipe'),
			'description'		=> __('Mon bloc-equipe personnalisé.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'équipe',
			'keywords'			=> 'équipe',
		));
		
		// register a bloc-hub-blue
		acf_register_block(array(
			'name'				=> 'bloc-hub-blue',
			'title'				=> __('bloc-hub-blue'),
			'description'		=> __('Mon bloc-hub-blue personnalisé'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formation-blue',
			'keywords'			=> array( 'formation-blue' ),
		));

        // register a bloc-hub-green
		acf_register_block(array(
			'name'				=> 'bloc-hub-green',
			'title'				=> __('bloc-hub-green'),
			'description'		=> __('Mon bloc-hub-green personnalisé'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formation-green',
			'keywords'			=> array( 'formation-green' ),
		));

        // register a block-green-featured
		acf_register_block(array(
			'name'				=> 'block-green-featured',
			'title'				=> __('block-green-featured'),
			'description'		=> __('Mon block-green-featured block personnalisé'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'information',
			'keywords'			=> array( 'information' ),
		));
        // register a tabs-campus
		acf_register_block(array(
			'name'				=> 'tabs-campus',
			'title'				=> __('tabs-campus'),
			'description'		=> __('Mon tabs-campus personnalisé'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'campus',
			'keywords'			=> array( 'campus'),
		));
		// register a tabs-contact
		acf_register_block(array(
			'name'				=> 'tabs-contact',
			'title'				=> __('tabs-contact'),
			'description'		=> __('Mon tabs-contact personnalisé'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'contact',
			'keywords'			=> array( 'contact' ),
		));
		// register a tabs-booking
		acf_register_block(array(
			'name'				=> 'tabs-booking',
			'title'				=> __('RDV personnalisés'),
			'description'		=> __('Mon tabs-booking personnalisé'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'booking',
			'keywords'			=> array( 'booking' ),
		));
		// register a tabs-partners-university
		acf_register_block(array(
			'name'				=> 'tabs-partners-university',
			'title'				=> __('Partenaires Université'),
			'description'		=> __('Mon tabs-partners-university personnalisé'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'partners',
			'keywords'			=> array( ' partners','university' ),
		));
		// register a sitemap 
		acf_register_block_type(array(
			'name'              => 'sitemap',
			'title'             => 'Plan de site',
			'description'		=> __('Mon plan-de-site personnalisé'),
			'render_callback'   => 'my_acf_block_render_callback',
			'category'          => 'widgets',
			'icon'              => 'menu',
			'keywords'          => array( 'menu', 'sitemap' ),
		  ));
		// register a widget-nous-rencontrer
		acf_register_block(array(
			'name'				=> 'widget-nous-rencontrer',
			'title'				=> __('Venez nous rencontrer'),
			'description'		=> __('Mon widget venez nous rencontrer personnalisé'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'widget',
			'keywords'			=> array( ' widget' ),
			'align'             => 'full',
			'supports'          => array('align' => array( 'full' )),
		));
		// register a widget-citation
		acf_register_block(array(
			'name'				=> 'widget-citation',
			'title'				=> __('Citation'),
			'description'		=> __('Mon widget citation personnalisé'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'widget',
			'keywords'			=> array( ' widget' ),
			'align'             => 'full',
			'supports'          => array('align' => array( 'full' )),
		));	
		// register a widget-fiches-metiers
		acf_register_block(array(
			'name'				=> 'widget-fiches-metiers',
			'title'				=> __('Fiches Métiers'),
			'description'		=> __('Mon widget fiches-métiers personnalisé'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'widget',
			'keywords'			=> array( ' widget' ),
			'align'             => 'full',
			'supports'          => array('align' => array( 'full' )),
		)); 
		// register a widget-actu
		acf_register_block(array(
			'name'				=> 'widget-actualites',
			'title'				=> __('Actualités Sup\'Biotech'),
			'description'		=> __('Mon widget Actualités Sup\'Biotech personnalisé'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'widget',
			'keywords'			=> array( ' widget' ),
			'align'             => 'full',
			'supports'          => array('align' => array( 'full' )),
		));	       
	}
}

//Create function to get bloc acf
function my_acf_block_render_callback( $block ) {
	
	// convert le name ("acf/bloc-hub-blue") into path friendly slug ("bloc-hub-blue")
	$slug = str_replace('acf/', '', $block['name']);
	
	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/template-parts/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-parts/block/content-{$slug}.php") );
	}
}


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	/*acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));*/
	
	
}



function supbiotech_footer_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'supbiotech-blog' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'A propos.', 'supbiotech-blog' ),
		'before_widget' => '<div class="col-md-5 apropos">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'supbiotech_footer_widgets_init' );
/*
 * Create class attribute allowing for custom "className" and "align" values.
 */
function acf_block_class( $block, $class = null ) {
	$className = '';
  
	if ( !empty($class) ) {
	  $className .= $class;
	}
  
	if( !empty($block['className']) ) {
	  $className .= ' ' . $block['className'];
	}
  
	if( !empty($block['align']) ) {
	  $className .= ' align' . $block['align'];
	}
  
	echo 'class="' . $className . '"';
  }










 