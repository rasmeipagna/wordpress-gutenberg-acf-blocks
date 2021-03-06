<?php
/**
 * Block Name: hub-green
 *
 * This is the template that displays the hub-green block.
 */

// get image field (array)
$avatar = get_field('image');

// create id attribute for specific styling
$id = 'bloc-hub-green-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>
<div id="<?php echo $id; ?>" class="bloc-hub-green <?php echo $align_class; ?> ">
        <h3 class="hub-green-title"><?php the_field('titre'); ?></h3>
   <div class="hub-green-block">
    	<div class="hub-green-img"><img src="<?php echo $avatar['url']; ?>" alt="<?php echo $avatar['alt']; ?>" /
        ></div>
    <!-- On appelle la zone de texte comme on l'a appelé dans ACF	 -->
        <div class="hub-green-content-text"><?php the_field('wysiwyg'); ?>
        </div>
    <!-- On appelle le lien depuis acf -->
        <div class="hub-green-button-spe"><a href="<?php the_field('lien'); ?>"><?php the_field('intitule_du_bouton'); ?></a>
        </div>  
        
    </div>
    
</div>
