<?php
/**
 * Block Name: widget-fiches-metiers
 *
 * This is the template that displays the widget-fiches-metiers.
 */
// create id attribute for specific styling
$id = 'widget-fiches-metiers-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>
<div id="<?php echo $id; ?>" class="widget-fiches-metiers <?php echo $align_class; ?>">
    <div class="col-xs-12 col-sm-12">
        <div class="col-xs-12">
        <h4 class="titre-fiches-metiers"><?php the_field('titre'); ?></h4>

            <div class="col-xs-12 col-sm-6">
                    <div class="liste-metiers">
                    <ul class="metier">
                    <?php
                        $featured_posts = get_field('liste_metiers');
                        if( $featured_posts ): ?>
                        <ul>
                        <?php foreach( $featured_posts as $featured_post ):
                        $permalink = get_permalink( $featured_post->ID );
                        $title = get_the_title( $featured_post->ID );
                        ?>
                        <li>
                        <a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $title ); ?></a>
                        </li>
                        <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>
                    </ul>
                    </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="pictos-domaines">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <a href="<?php the_field('sante'); ?>">
                            <img class="center" src="<?php the_field('image_sante'); ?>" />
                            </a>
                            <a href="<?php the_field('energie'); ?>">
                            <img class="center" src="<?php the_field('image_energie'); ?>" />
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <a href="<?php the_field('cosmetique'); ?>">
                            <img class="center" src="<?php the_field('image_cosmetique'); ?>" />
                            </a>
                            <a href="<?php the_field('agriculture'); ?>">
                            <img class="center" src="<?php the_field('image_agriculture'); ?>" />
                            </a>
                        </div>
                    </div>
                    <div class="hub-green-button-spe"><a href="<?php the_field('lien'); ?>"><?php the_field('intitule_du_bouton'); ?></a>
        </div>
                </div>
                
            </div>  
        </div>
             
    </div>
    
</div>


                        
                    
