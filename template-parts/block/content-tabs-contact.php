<?php
/**
 * Block Name: Tabs Contact
 *
 * This is the template that displays the tabs contact.
 */

// create id attribute for specific styling
$id = 'tabs-contact-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>
<div class="clearfix"></div>

<div id="<?php echo $id; ?>" class="tabs-contact <?php echo $align_class; ?> ">
    <div class="col-sm-12">
        <div id="myTabs">

            <ul class="nav nav-pills">
                <li class="active">
                    <a class="simple-button" href="#paris" data-toggle="tab"><span class="dropcap">1</span>Paris</a>
                </li>
                <li>
                    <a class="simple-button" href="#lyon" data-toggle="tab"><span class="dropcap">2</span>Lyon</a>
                </li>
            </ul>

            <div class="tab-content clearfix">

                <div class="tab-pane active" id="paris">
                    <div class="col-sm-12">
                        <?php the_field('plan_paris'); ?>
                    </div>    
                    <div class="clearfix"></div>             
                    <div class="col-sm-4">
                        <p>
                            <span class="bleu">Métro :</span><br>
                            <?php the_field('metro_paris'); ?>
                        </p>
                        
                    </div>
                    <div class="col-sm-4">
                        <p>
                            <span class="bleu">Bus :</span><br>
                            <?php the_field('bus_paris'); ?>
                        </p>                        
                    </div>
                    <div class="col-sm-4">
                        <p>
                            <span class="bleu">Voiture :</span><br>
                            <?php the_field('voiture_paris'); ?>
                        </p>
                        
                    </div>

                    <div class="clearfix"></div> 
                    <div class="col-md-12">
                        <!-- PETIT BLOC DE CONTACTS -->
                    </div>
                    <div class="clearfix"></div>               
                </div>

                <div class="tab-pane" id="lyon">
                <div class="col-sm-12">
                        <?php the_field('plan_lyon'); ?>>
                    </div>    
                    <div class="clearfix"></div>             
                    <div class="col-sm-3">
                        <p>
                            <span class="bleu">Métro :</span><br>
                            <?php the_field('metro_lyon'); ?>
                        </p>
                        
                    </div>
                    <div class="col-sm-3">
                        <p>
                            <span class="bleu">Tram :</span><br>
                            <?php the_field('tram_lyon'); ?>
                        </p>
                        
                    </div>
                    <div class="col-sm-3">
                        <p>
                            <span class="bleu">Bus :</span><br>
                            <?php the_field('bus_lyon'); ?>
                        </p>
                        
                    </div>
                    <div class="col-sm-3">
                    <p>
                            <span class="bleu">Voiture :</span><br>
                            <?php the_field('voiture_lyon'); ?>
                        </p>
                        
                    </div>

                    <div class="clearfix"></div> 
                    <div class="col-md-12">
                         <!-- PETIT BLOC DE CONTACTS -->
                    </div>
                    <div class="clearfix"></div>      
                
                </div>

            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
