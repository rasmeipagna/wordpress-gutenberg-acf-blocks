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
        <div class="col-xs-12 mobile-bkg">
            <div class="col-sm-2">
                    <div class="portrait">
                        <img src="<?php echo $avatar['url']; ?>" alt="<?php echo $avatar['alt']; ?>" />  
                        <div class="clearfix"></div>
                        <span class="citation"><?php the_field('nom'); ?> <?php the_field('prenom'); ?></span><br />
                        <span class="promo"><?php the_field('promotion'); ?></span>                  
                    </div>
                    
            </div>
            <div class="col-xs-12 col-sm-10 citation-content">
            <p class="citation"><?php the_field('citation'); ?></p>  
            </div>  
        </div>
             
    </div>
    
</div>
