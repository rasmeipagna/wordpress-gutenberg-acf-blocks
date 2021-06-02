<?php
/**
 * Block Name: widget-nous-rencontrer
 *
 * This is the template that displays the widget-nous-rencontrer block.
 */
// create id attribute for specific styling
$id = 'widget-nous-rencontrer-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>
<div id="<?php echo $id; ?>" class="widget-nous-rencontrer <?php echo $align_class; ?>">
   <div class="col-xs-12 col-sm-12">
        <div class="content-text">
       <p class="text"><?php the_field('titre'); ?></p>
       <div class="widget-button-en-savoir-plus"><a href="<?php the_field('lien'); ?>"><?php the_field('intitule_du_bouton'); ?></a>
        </div> 
        </div>  
    </div>
    
</div>
