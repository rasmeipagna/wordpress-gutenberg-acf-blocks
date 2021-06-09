<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sup\'Biotech_Blog
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<!--<?php supbiotech_blog_posted_on(); ?>-->
			<!-- afficher la date de publication de l'article avec l'url de l'article -->
			<span class="posted-on">Posté le <a href="<?php the_permalink(); ?>"><time><?php the_time('d F Y'); ?></time></a></span>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</div><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<!--<footer class="entry-footer">-->
		<?php /*supbiotech_blog_entry_footer();*/ ?>
	<!--</footer> --><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
