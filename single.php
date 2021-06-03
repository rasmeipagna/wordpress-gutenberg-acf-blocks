<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Sup\'Biotech_Blog
 */

get_header(); ?>

<section class="container-blog page">
<div id="primary" class="content-area col-sm-8">
<div class="col-md-12">
	<!-- le fil d'ariane -->
	<ul class="ariane">
		<span>
			<span>
				<a href="/">Accueil</a>  
				<span>
					<a href="/blogs">Actualités de l'école</a>  
					<?php the_title( '<span class="breadcrumb_last" aria-current="page">', '</span>' );?>
				</span>
			</span>
		</span>
	</ul>
</div>
		<div id="main" class="site-main">
		
		<?php


		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			/*the_post_navigation();*/

			// If comments are open or we have at least one comment, load up the comment template.
			/*if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;*/

		endwhile; // End of the loop.
		?>

		</div><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
