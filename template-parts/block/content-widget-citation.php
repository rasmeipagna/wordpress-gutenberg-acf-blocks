<?php
/**
 * Block Name: widget-citation
 *
 * This is the template that displays the widget-citation block.
 */
// get image field (array)
$avatar = get_field('photo');

// create id attribute for specific styling
$id = 'widget-citation-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>
<div id="<?php echo $id; ?>" class="widget-citation <?php echo $align_class; ?>">
    <div class="col-xs-12 col-sm-12 container-widget content">
        <div class="col-xs-12">
            <div class="col-sm-3">
                    <div class="portrait"><img src="<?php echo $avatar['url']; ?>" alt="<?php echo $avatar['alt']; ?>" /><br />
                    <h4><?php the_field('nom'); ?> <?php the_field('prenom'); ?></h4><br />
                    <p class="promo"><strong><?php the_field('promo'); ?> <?php the_field('annee'); ?></strong></p>
                    </div>
            </div>
            <div class="col-xs-12 col-sm-9 citation-content">
            <p class="citation"><strong><?php the_field('citation'); ?></strong></p>       
            </div>  
        </div>
             
    </div>
    
</div>
