<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sup\'Biotech_Blog
 */

get_header(); ?>

<section class="container blog page">
	<div id="primary" class="content-area col-sm-8">
	<?php
					the_archive_title( '<h1 class="top">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
	<div class="col-md-12">
	
	<ul class="ariane">
		<span>
			<span>
				<a href="/">Accueil</a>  
				<span>
					<a href="/blogs">Blog</a>  
					<?php the_archive_title( '<span class="breadcrumb_last" aria-current="page">', '</span>' );?>
				</span>
			</span>
		</span>
	</ul>
</div>
	<main id="main" class="site-main">
<?php if ( have_posts() ) : ?>

			<header class="page-header">
				
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'template-parts/content-index', get_post_format() ); ?>

			<?php endwhile; ?>

			<?php //the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
<?php
if (is_category()) {
$cat = get_query_var('cat');
$yourcat = get_category ($cat);
}
?>
    <div class="clearfix"></div>
    <div class="append-articles posPost"></div>
		<div class="clearfix"></div>
		<div class="col-sm-3"> </div>
		<div class="posButtonLoad col-sm-6">
			<a href="#" class="afficher-plus" data-category="<?php echo $yourcat->slug; ?>" data-date="<?php echo !is_category() ? the_date('n|Y') : ''; ?>">Afficher plus d'articles</a>
		</div>
		<div class="col-sm-3"> </div>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
