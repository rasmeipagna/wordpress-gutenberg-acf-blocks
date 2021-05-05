<?php
/**
 * Block Name: team-block
 *
 * This is the template that displays the team-block block.
 */

// get image field (array)
$avatar = get_field('portrait');

// create id attribute for specific styling
$id = 'team-block-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>
<div id="<?php echo $id; ?>" class="team-block <?php echo $align_class; ?>">
   <div class="col-sm-12 bloc-contact spe">
       <div class="col-sm-2">
       <div class="team-block-img"><img src="<?php echo $avatar['url']; ?>" alt="<?php echo $avatar['alt']; ?>" /></div>
       </div>
       <div class="col-sm-10">
       <h4><?php the_field('prenom_nom'); ?></h4><br />
       <p><strong><?php the_field('poste'); ?></strong></p><br /><br />
       <p><?php the_field('statut'); ?></p><br />
       <p><span class="icon-contact"></span><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?> </a></p>
       
       </div>
    	
    
        
    </div>
    
</div>
