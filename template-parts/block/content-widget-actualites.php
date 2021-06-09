<?php
/**
 * Block Name: widget-actualites
 *
 * This is the template that displays the widget-actualites.
 */
// create id attribute for specific styling
$id = 'widget-actualites-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>
<div id="<?php echo $id; ?>" class="widget-actualites <?php echo $align_class; ?>">
    <!-- section actus -->
<section id="actus" class="actus">
    <div class="container">
        <h2><span>L'actualités Sup'Biotech</span></h2>
        <div class="_slider-actu">
			<row>
				
			<?php if ( have_posts() ) : ?>
			<?php query_posts('posts_per_page=1'); ?>
			<?php while ( have_posts() ) : the_post(); ?>
<!-- -----------------------------vient de /content/prime.php-------------------- -->
<div class="entry-header">
		<!--<h1>Les derniers articles</h1>-->
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
		<div class="col-md-7 main-actu _posImg _blog-hp">
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
				<!--<a class="linkplus" href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark"></a>-->
			</figure>

		</div>
		<!-- <span class="blog-hp">
			<a href="" class="linkplus"></a>
		</span> -->
		<!--<div class="prime-blog-tag">
			<?php 
/*TOUTES LES CATEGORIES*/
			/*foreach((get_the_category()) as $cat) { 
        echo $cat->cat_name . '<br />'; 
      }*/
			$cat = get_the_category(); $cat = $cat[0]; echo $cat->cat_name; ?>
		</div>-->
<div class="col-md-5 main-resume">
		<h4><a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark"><?php the_title(); ?></a></h4>
		<?php the_excerpt(); ?>
</div>
		</div><!-- .entry-content -->

	<!--<footer class="entry-footer">
		<?php supbiotech_blog_entry_footer(); ?>
	</footer> .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

<!-- ---------------------------fin de ce qui vient de content-prime.php------------------------ -->
<?php //get_template_part( 'template-parts/content-prime', 'first-article' ); ?>


			<?php endwhile; ?>
				
			<?php query_posts('showposts=3&offset=1'); ?> <!-- pour enlever le premier-->

			<?php while ( have_posts() ) : the_post(); ?>

<!-- ------------------	vient de template-parts/content-index -------------- -->
<article class="col-sm-4 autre-actu" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
	<figure class="blog-hp">
		<a href="<?php echo  get_permalink() ?>" rel="bookmark">





		<?php 

		if( has_post_thumbnail() ) {
						the_post_thumbnail("small");
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
		<!--<a class="linkplus" href="<?php echo get_permalink() ?>" rel="bookmark"></a>-->
		 
	</figure>
	<!--<div class="blog-tag">
			<?php 
      /*TOUTES LES CATEGORIES*/
			/*foreach((get_the_category()) as $cat) { 
        echo $cat->cat_name . '<br />'; 
      }*/
			$cat = get_the_category(); $cat = $cat[0]; echo $cat->cat_name; ?>
		</div>-->
	<h3><a href="<?php echo  get_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
	<?php the_excerpt(); ?>

	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->

<!-- ------------------------------------ fin de ce qui vient de template-parts/content-index ------------------- -->

				<?php //get_template_part( 'template-parts/content-index', get_post_format() ); ?>
			<?php endwhile; ?>
		<?php else : ?>
		
		<!-- ------------------------------------ce qui vient de template-parts/content ------------------- -->	
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		
		<?php
		endif; ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<figure class="blog-hp">
			<a href="<?php echo  esc_url( get_permalink() ) ?>" rel="bookmark">
			
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
			<!-- <a class="linkplus" href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark"></a> -->
			<div class="blog-tag-post">
			<?php 
			/*TOUTES LES CATEGORIES*/
			/*foreach((get_the_category()) as $cat) { 
        echo $cat->cat_name . '<br />'; 
      }*/
			foreach((get_the_category()) as $cat) { 
				echo $cat->cat_name . '<br />'; 
			} ?>
		</div>
		</figure>

		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'supbiotech-blog' ),
				array(
					'span' => array(
						'class' => array(),
						),
					)
				),
			get_the_title()
			) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'supbiotech-blog' ),
			'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->
		<div class="entry-meta">

		</div><!-- .entry-meta -->
		<script src="https://apis.google.com/js/platform.js" async defer>
			{lang: 'fr'}
		</script>

		<p class="posted">
			<strong>Posté le : <?php echo get_the_date(); ?></strong>
		</p>
		<div class="lishare">
			<script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: fr_FR</script>
			<script type="IN/Share" data-url="<$MTEntryPermalink$>" data-counter="right"></script>
		</div>
		<div class="twt">
			<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>       
		</div>
		<div class="fb-share-button" data-href="<?php echo  esc_url( get_permalink() ) ?>" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo  esc_url( get_permalink() ) ?>">Partager</a></div>
		<footer class="entry-footer">
<!-- 		<?php supbiotech_blog_entry_footer(); ?>

-->	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.10&appId=1777986829106167";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- ------------------------------------ fin de ce qui vient de template-parts/content ------------------- -->	

			<?php //get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>



				<div class="clearboth"></div>
			</row>	

			
			
			<row>
				<div class="col-md-4">
					&nbsp;
				</div>
				<div class="col-md-4">
					<a href="https://www.supbiotech.fr/blogs/" class="simple-button">Toutes les actualités</a>
				</div>
				<div class="col-md-4">
					&nbsp;
				</div>
			</row>

    	</div>
    
    </div>
</section>
    
</div>


                        
                    
