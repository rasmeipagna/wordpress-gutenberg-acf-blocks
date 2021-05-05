<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 99 );
function theme_enqueue_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
 wp_enqueue_style('child-theme', get_stylesheet_directory_uri() .'/css/style.css', array('parent-style'));
 wp_enqueue_style('menu-theme', get_stylesheet_directory_uri() .'/css/menu.css', array('parent-style'));
 wp_enqueue_style('home-theme', get_stylesheet_directory_uri() .'/css/home.css', array('parent-style'));
 wp_enqueue_style('child-theme', get_stylesheet_directory_uri() .'/js/main.js', array('parent-style'));
 wp_enqueue_style('child-theme', get_stylesheet_directory_uri() .'/js/boostrap.js', array('parent-style'));
	
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
            <a class="entretien" href="/ecole-ingenieurs-biotechnologies/agenda">
                    Agenda
            </a>
            <a class="rdvperso" href="/admissions-ecole-ingenieur/nous-rencontrer/rdv-personnalises">
                RDV <br> personnalisé
            </a>
        </div>
        <div class="jpo">
                <p><span>Venez nous rencontrer</span></p>
                <p class="displayParisHeader" style="display: block;"><span class="date rel"><span class="informations"><span class="date">Le 22/05/2021</span><br>Biotech Day à Paris<br><span class="registration">Inscription obligatoire</span></span><a class="linkplus" href="https://www.supbiotech.fr/admissions-ecole-ingenieur/nous-rencontrer/biotech-day"></a></span></p>
                <p class="displayLyonHeader" style="display: block;"><span class="date rel"><span class="informations"><span class="date">Le 29/05/2021</span><br>Journée Portes Ouvertes à Lyon<br><span class="registration">Inscription obligatoire</span></span><a class="linkplus" href="https://www.supbiotech.fr/admissions-ecole-ingenieur/nous-rencontrer/journees-portes-ouvertes-jpo"></a></span></p>
                
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

// ADD BLOCK ACF PERSO
add_action('acf/init', 'my_acf_init');
function my_acf_init() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
        // register a testimonial block
		acf_register_block(array(
			'name'				=> 'testimonial',
			'title'				=> __('Testimonial'),
			'description'		=> __('A custom testimonial block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'testimonial', 'quote' ),
		));

        // register a block-team
		acf_register_block(array(
			'name'				=> 'team-block',
			'title'				=> __('team-block'),
			'description'		=> __('A custom team-block block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'team',
			'keywords'			=> 'team',
		));
		
		// register a hub-blue block
		acf_register_block(array(
			'name'				=> 'hub-blue',
			'title'				=> __('hub-blue'),
			'description'		=> __('A custom hub-blue block'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formation',
			'keywords'			=> array( 'formation' ),
		));

        // register a hub-green block
		acf_register_block(array(
			'name'				=> 'hub-green',
			'title'				=> __('hub-green'),
			'description'		=> __('A custom hub-green block'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formation',
			'keywords'			=> array( 'formation' ),
		));

        // register a block-green-featured
		acf_register_block(array(
			'name'				=> 'block-green-featured',
			'title'				=> __('block-green-featured'),
			'description'		=> __('A custom block-green-featured block'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'information',
			'keywords'			=> array( 'information' ),
		));
        // register a tabs-block
		acf_register_block(array(
			'name'				=> 'tabs-block',
			'title'				=> __('tabs-block'),
			'description'		=> __('tabs-block'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'contact',
			'keywords'			=> array( 'contact' ),
		));
	}
}
function my_acf_block_render_callback( $block ) {
	
	// convert name ("acf/hub-blue") into path friendly slug ("hub-blue")
	$slug = str_replace('acf/', '', $block['name']);
	
	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/template-parts/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-parts/block/content-{$slug}.php") );
	}
}

