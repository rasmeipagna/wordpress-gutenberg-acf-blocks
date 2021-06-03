<?php
/**
 * Block Name: widget-fiches-metiers
 *
 * This is the template that displays the widget-fiches-metiers.
 */
// get image field (array)
$picto = get_field('picto');

// create id attribute for specific styling
$id = 'widget-fiches-metiers-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

// Check rows exists.
if( have_rows('liste-metiers') ):

    // Loop through rows.
    while( have_rows('liste_metiers') ) : the_row();

        // Load sub field value.
        $sub_value = get_sub_field('metier');
        // Do something...

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;
?>

<div id="<?php echo $id; ?>" class="widget-fiches-metiers <?php echo $align_class; ?>">
    <div class="col-xs-12 col-sm-12">
        <div class="col-xs-12">
        <h4 class="titre-fiches-metiers"><?php the_field('titre'); ?></h4>

            <div class="col-xs-12 col-sm-6">
                    <div class="liste-metiers">
                    <ul class="metier">
                        <li><?php echo $metier; ?></li>
                    </ul>
                    </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="pictos-domaines">
                    <img src="<?php echo $picto['url']; ?>" alt="<?php echo $picto['alt']; ?>" />
                    <img src="<?php echo $picto['url']; ?>" alt="<?php echo $picto['alt']; ?>" />
                    <img src="<?php echo $picto['url']; ?>" alt="<?php echo $picto['alt']; ?>" />
                    <img src="<?php echo $picto['url']; ?>" alt="<?php echo $picto['alt']; ?>" />
                </div>
                
            </div>  
        </div>
             
    </div>
    
</div>
