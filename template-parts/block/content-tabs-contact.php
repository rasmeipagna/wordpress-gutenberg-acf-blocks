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
<?php

// Check rows exists.
if( have_rows('contact_paris') ):

    // Loop through rows.
    while( have_rows('contact_paris') ) : the_row();

        // Load sub field value.
        $departement = get_sub_field('departement');
        $departement = get_sub_field('adresse');
        $codepostal = get_sub_field('codepostal');
        $ville = get_sub_field('ville');
        $photo = get_sub_field('photo');
        $nom_prenom = get_sub_field('nom_prenom');
        $titre = get_sub_field('titre');
        $telephone = get_sub_field('telephone');
        $fax1 = get_sub_field('fax_1');
        $fax2 = get_sub_field('fax_2');
        $email = get_sub_field('email');
        $bouton = get_sub_field('bouton');
        // Do something...

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;
?>
                    <div class="col-md-12">
                    <div class="petit-blocs">
                        <div class="contact vert img-out">
                            <h3><?php echo $departement; ?></h3>
                            <p><?php echo $adresse; ?><br>
                            <?php echo $codepostal; ?> <?php echo $ville; ?><br><br>

                                Tél. : <?php echo $telephone; ?><br>
                                Fax : <?php echo $fax_1; ?><br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $fax_2; ?>
                            </p>
                            <p class="colorSpeMail">
                            <?php echo $email; ?>
                            </p>
                        </div>

                        <div class="contact vert">
                            <h3><?php echo $departement; ?></h3>
                            <img src="<?php echo $photo; ?>" class="portrait">
                            <h4>
                            <?php echo $prenom; ?><br>
                            <?php echo $nom; ?>
                            </h4>
                            <p class="colorSpeMail">
                            <?php echo $titre; ?><br><br>

                            <?php echo $telephone; ?><br>
                            <?php echo $email; ?>
                                <br>
                                <br>
                                <a href="<?php echo $bouton; ?>" class="newsroom" target="_blank"><?php echo $bouton; ?></a>
                            </p>
                        </div>
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
