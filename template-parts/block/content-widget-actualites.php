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
    <div class="col-xs-12 col-sm-12 mobile">
        <div class="col-xs-12">
        <h4 class="titre-actualites"><?php the_field('titre'); ?></h4>

            <div class="col-xs-12 ">
                    
            </div>
            <div class="clearfix"></div>
            <div class="actualites-button">
                <center><a href="<?php the_field('lien'); ?>"><?php the_field('intitule_du_bouton'); ?></a>
                </center>
            </div>  
        </div>
             
    </div>
    
</div>


                        
                    
