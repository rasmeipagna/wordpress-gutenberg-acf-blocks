<?php
/*
* Description: Theme enfant de Sup'Biotech
* Author: Pagna Toung
* Template Name: Template Home Blog Sup'Biotech
*
*/

get_header(); ?>

<section class="container-blog _page">
    
<div id="primary" class="content-area col-sm-8">
<div class="col-md-12">
	<ul class="ariane">
		<li><h6><a href="/">Accueil </a></h6></li>
		<li><h6><a href="/blogs">Actualités de l'école</a></h6></li>
		<li><h6>Blog</h6></li>
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
			<a href="#" class="afficher-plus">Afficher plus d'articles</a>
		</div>
		<div class="col-sm-3"> </div>

	</div><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
