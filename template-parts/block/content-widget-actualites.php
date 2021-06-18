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

<?php /* Deniers articles
==================================================== */ 
$args = array(
  'post_type'      => 'post',
  'post_status'    => 'publish',
  'posts_per_page' => 3
); 

$articles = new WP_Query ( $args );

if ( $articles->have_posts() ) :
?>

  <div class="container">
    <h2 class="widget-titre-actu">L'actualité Sup'Biotech</h2>

    
      <?php while ( $articles->have_posts() ) : $articles->the_post(); ?>
        
          <?php get_template_part( 'template-parts/content-actu'); ?> 
        
      <?php endwhile; ?>
    
	<div class="clearfix"></div>
    <div class="col-sm-12">
      <center>
        <a class="button-actu wp-block-button__link medium has-cyan-background-color has-background" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">
        Toutes les actualités</a>
      </center>
    </div>
  </div>

<?php endif; ?>


    
</div>


                        
                    
