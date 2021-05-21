<?php
/**
 * Block Name: Tabs Contact Block
 *
 * This is the template that displays the tabs contact block.
 */

// get image field (array)
$avatar = get_field('image');


// create id attribute for specific styling
$id = 'tabs-contact-block-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>
<div class="clearfix"></div>

<div id="<?php echo $id; ?>" class="tabs-contact-block <?php echo $align_class; ?> ">
    <div class="col-sm-12">
        <div id="myTabs">

            <ul class="nav nav-pills">
                <li class="active">
                    <a class="simple-button" href="#paris" data-toggle="tab"><span class="dropcap">1</span><?php the_field('nom_du_campus_1'); ?></a>
                </li>
                <li>
                    <a class="simple-button" href="#lyon" data-toggle="tab"><span class="dropcap">2</span><?php the_field('nom_du_campus_2'); ?></a>
                </li>
            </ul>

            <h2>PLAN D'ACCÈS</h2>

            <div class="tab-content clearfix">

                <div class="tab-pane active" id="paris">
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
<div class="clearfix"></div>
