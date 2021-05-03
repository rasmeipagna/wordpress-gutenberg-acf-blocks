<?php
/**
 * Block Name: block-green-featured
 *
 * This is the template that displays the block-green-featured block.
 */

// create id attribute for specific styling
$id = 'block-green-featured-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>
<div id="<?php echo $id; ?>" class="color-block <?php echo $align_class; ?> ">
   <div class="block-green-featured">

    <!-- On appelle la zone de texte comme on l'a appelé dans ACF	 -->
        <div class="block-green-featured-content-text"><p><?php the_field('zone_de_texte'); ?></p>
        </div>
 
        
    </div>
    
</div>
<div class="clearfix"></div>
