<?php
/**
 * Block Name: hub-blue
 *
 * This is the template that displays the hub-blue block.
 */

// get image field (array)
$avatar = get_field('image');

// create id attribute for specific styling
$id = 'hub-blue-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>
<div id="<?php echo $id; ?>" class="hub-blue <?php echo $align_class; ?>">
        <h3 class="hub-blue-title"><?php the_field('titre'); ?></h3>
   <div class="hub-blue-block">
    	<div class="hub-blue-img"><img src="<?php echo $avatar['url']; ?>" alt="<?php echo $avatar['alt']; ?>" /></div>
    <!-- On appelle la zone de texte comme on l'a appelé dans ACF	 -->
        <div class="hub-blue-content-text"><?php the_field('wysiwyg'); ?>
        </div>
    <!-- On appelle le lien depuis acf -->
        <div class="hub-blue-button-spe"><a href="<?php the_field('lien'); ?>"><?php the_field('intitule_du_bouton'); ?></a>
        </div>  
        
    </div>
    
</div>
