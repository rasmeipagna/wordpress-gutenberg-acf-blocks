<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Sup\'Biotech_Blog
 */

get_header(); ?>

<section class="container page">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) : ?>

			<div class="page-header">
				<h1 class="page-title"><?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Résultats de la recherche: %s', 'supbiotech-blog' ), '<span>' . get_search_query() . '</span>' );
				?></h1>
			</div>

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
	<div class="append-articles"></div>
		<div class="clearfix"></div>
		<div class="posButtonLoad">
			<a href="#" class="afficher-plus">Afficher plus d'articles</a>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
