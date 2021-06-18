<?php
/**
 * The template Home blog EN file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * 
 * Template Name: Template Home Blog EN
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sup\'Biotech_Blog
 */

get_header(); ?>
<section class="container blog page">
<div id="primary" class="content-area col-sm-8">
<div class="col-md-12">
	<!-- le fil d'ariane -->
	<ul class="ariane">
		<span>
			<span>
				<a href="/">Home</a>  
				<span>
					<a href="/blogs-en/">News</a>  
					<span class="breadcrumb_last" aria-current="page">Blog</span>
				</span>
			</span>
		</span>
	</ul>
</div>
	<div id="main" class="site-main">

		<?php if ( have_posts() ) : ?>
			<?php query_posts('posts_per_page=1'); ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content-prime', 'first-article' ); ?>
			<?php endwhile; ?>
			<?php query_posts('showposts=4&offset=1'); ?> <!-- pour enlever le premier-->

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content-index', get_post_format() ); ?>
			<?php endwhile; ?>
		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>

		<div class="append-articles posPost"></div>
		<div class="clearfix"></div>
		<div class="col-sm-3"> </div>
		<div class="posButtonLoad col-sm-6">
			<a href="#" class="afficher-plus">Show more articles</a>
		</div>
		<br />
		<div class="col-sm-3"> </div>
		<div class="clearfix"></div>

	</div><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
