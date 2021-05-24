<?php
/**
 * Block Name: bloc-equipe
 *
 * This is the template that displays the bloc-equipe block.
 */

// get image field (array)
$avatar = get_field('portrait');

// create id attribute for specific styling
$id = 'bloc-equipe-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>
<div id="<?php echo $id; ?>" class="bloc-equipe <?php echo $align_class; ?>">
   <div class="col-xs-12 col-sm-12 bloc-contact spe">
       <div class="col-sm-3">
       <div class="bloc-equipe-img"><img src="<?php echo $avatar['url']; ?>" alt="<?php echo $avatar['alt']; ?>" /></div>
       </div>
       <div class="col-xs-12 col-sm-9 closer-left">
       <h4><?php the_field('prenom_nom'); ?></h4><br />
       <p><strong><?php the_field('poste'); ?></strong></p>
       <p><?php the_field('more_poste'); ?></p><br />
       <p><span class="icon-contact"></span><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?> </a></p>
       
       </div>
    	
    
        
    </div>
    
</div>
