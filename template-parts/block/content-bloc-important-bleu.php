<?php
/**
 * Block Name: bloc-important-bleu
 *
 * This is the template that displays the bloc-important-bleu.
 */

// create id attribute for specific styling
$id = 'bloc-important-bleu-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>
<div id="<?php echo $id; ?>" class="col-sm-12 bloc-important-bleu <?php echo $align_class; ?> ">
       <h3><strong><?php the_field('titre'); ?></strong></h3>
       
    <!-- On appelle la zone de texte comme on l'a appelé dans ACF	 -->
        <div class="bloc-important-bleu-content-text"><?php the_field('zone_de_texte'); ?>
        </div>

</div>
<div class="clearfix"></div>
