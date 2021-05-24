<?php
/**
 * Block Name: partners university
 *
 * This is the template that displays the partners university block.
 */

// get image field (array)
$avatar = get_field('image');

// create id attribute for specific styling
$id = 'bloc-partners-university-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>
<div id="<?php echo $id; ?>" class="bloc-partners-university <?php echo $align_class; ?> ">
<div class="col-sm-12">
        <?php the_field('map_global'); ?>
        <div id="myTabs">

            <ul class="nav nav-pills">
                <li id="continent" class="active"><a data-toggle="tab" href="#"><span>Afficher tout</span><?php the_field('all'); ?></a>
                </li>
                <li id="continent1"><a data-toggle="tab" href="#"><span>Afrique</span><?php the_field('continent_1'); ?></a>
                </li>
                <li id="continent2"><a data-toggle="tab" href="#"><span>Amériques</span></a><?php the_field('continent_2'); ?></a>
                </li>
                <li id="continent3"><a data-toggle="tab" href="#"><span>Asie</span></a><?php the_field('continent_3'); ?></a>
                </li>
                <li id="continent4"><a data-toggle="tab" href="#"><span>Europe</span><?php the_field('continent_4'); ?></a>
                </li>
                <li id="continent5"><a data-toggle="tab" href="#"><span>Océanie</span><?php the_field('continent_5'); ?></a>
                </li>
            </ul>

            <h2>PLAN D'ACCÈS</h2>

            <div class="tab-content clearfix">

                <div class="tab-pane active" id="all">
                    <div class="col-sm-12">
                        
                        <?php the_field('map_ville_1'); ?>
                    </div>                
                   
                    <div class="clearfix"></div> 
                    <div class="col-md-4">
                        <p><span class="bleu">Métro :</span><br />
                        <?php the_field('metro_1'); ?>  </p>  
                    </div>
                    <div class="col-md-4">
                        <p><span class="bleu">Bus :</span><br />
                        <?php the_field('bus_1'); ?></p>

                    </div>
                    <div class="col-md-4">
                        <p><span class="bleu">Voiture :</span><br />
                        <?php the_field('voiture_1'); ?></p>
    
                    </div>
                    <div class="clearfix"></div> 
                    <div class="col-sm-12">
                        
                        <?php the_field('principal', 'service'); ?>
                    </div>                
                </div>





                

                <div class="tab-pane" id="lyon">                    
                <div class="col-sm-12">
                        <?php the_field('map_ville_2'); ?>
                    </div>                
                   
                    <div class="clearfix"></div> 
                    <div class="col-md-4">
                        <?php the_field('metro_2'); ?>    
                    </div>
                    <div class="col-md-4">
                        <?php the_field('bus_2'); ?>

                    </div>
                    <div class="col-md-4">
                        <?php the_field('voiture_2'); ?>
    
                    </div>
                    <div class="clearfix"></div>  
                </div>

            </div>
        </div>
    </div>
        
    </div>
    
</div>
