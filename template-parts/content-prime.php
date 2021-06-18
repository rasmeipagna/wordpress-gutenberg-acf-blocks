<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sup\'Biotech_Blog
 */

?>


	<div class="entry-header">
	<?php
    $currentlang = get_bloginfo('language');
    if($currentlang=="en-GB") : ?>
	<h1>The latest news</h1>
	<?php else : ?>
		<h1>Les derniers articles</h1>
	<?php endif; ?>

		<!--<?php
		if ( is_singular() ) :
			the_title( '<h3>', '</h3>' );
		else :
			the_title( '<h3><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php supbiotech_blog_posted_on(); ?>
		</div> .entry-meta -->
		<?php
		endif; ?>
	</div><!-- .entry-header -->
	<article class="prime-article col-sm-12" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content primePos">
		<div class="posImg blog-hp">
			<figure class="blog-hp">
				<a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">
					<?php 

					if( has_post_thumbnail() ) {
						the_post_thumbnail("prime");
						} else {
  
 ?>
              <?php if(has_category( 'actu-technologique' )){ ?>
              <img alt="Actu Technologique" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/actutechnologique.jpg"/>
              <?php } elseif(has_category( 'entreprise' )) { ?>
              <img alt="Événements" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/entreprise.jpg"/>
              <?php } elseif(has_category( 'evenements' )) { ?>
              <img alt="L'actu par les élèves" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/evenements.jpg"/>
              <?php } elseif(has_category( 'lactu-biotech-par-les-eleves' )) { ?>
              <img alt="Mission to Mars" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/actubiotecheleves.jpg"/>
              <?php } elseif(has_category( 'mission-to-mars' )) { ?>
              <img alt="Non classé" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/missiontomars.jpg"/>
              <?php } elseif(has_category( 'non-classe' )) { ?>
              <img alt="Nous rencontrer" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/actu-hp.jpg"/>
              <?php } elseif(has_category( 'nous-rencontrer' )) { ?>
              <img alt="Pédagogie" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/nousrencontrer.jpg"/>
              <?php } elseif(has_category( 'pedagogie' )) { ?>
              <img alt="Portraits d'anciens" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/pedagogie.jpg"/>
              <?php } elseif(has_category( 'portraits-danciens' )) { ?>
              <img alt="Projets et recherche" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/portraitsanciens.jpg"/>
              <?php } elseif(has_category( 'projets-et-recherche' )) { ?>
              <img alt="Vie étudiante" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/projetsrecherche.jpg"/>
              <?php } elseif(has_category( 'vie-etudiante' )) { ?>
              	<img alt="Vie étudiante" src="/blogs/wp-content/themes/supbiotech-blog/images/media/cat/vieetudiante.jpg"/>
                    <?php } ?>
        <?php } 
             
          ?>
				</a>
				<a class="linkplus" href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark"></a>
			</figure>

		</div>
		<!-- <span class="blog-hp">
			<a href="" class="linkplus"></a>
		</span> -->
		<div class="prime-blog-tag">
			<?php 
/*TOUTES LES CATEGORIES*/
			/*foreach((get_the_category()) as $cat) { 
        echo $cat->cat_name . '<br />'; 
      }*/
			$cat = get_the_category(); $cat = $cat[0]; echo $cat->cat_name; ?>
		</div>

		<h3><a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark"><?php the_title(); ?></a></h3>
		<?php the_excerpt(); ?>

		</div><!-- .entry-content -->

	<!--<footer class="entry-footer">
		<?php supbiotech_blog_entry_footer(); ?>
	</footer> .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
