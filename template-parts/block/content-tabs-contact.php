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
                    <div class="tab-content clearfix">
<?php
$villes = ['paris','lyon'];
foreach( $villes as $ville ) :
// Check rows exists.
if( have_rows('contact_'. $ville) ):
    // Loop through rows.
    while( have_rows('contact_'. $ville) ) : the_row();
        // Load sub field value.
        $liste_couleurs = get_sub_field('liste_couleurs');
		$titre = get_sub_field('titre');
		$photo = get_sub_field('photo');
		$prenom_nom = get_sub_field('prenom_nom');
		$contenu = get_sub_field('contenu');
		$intitule_du_bouton = get_sub_field('intitule_du_bouton');
		$bouton = get_sub_field('bouton');
        // Do something...
?>
    
            <div class="<?php echo $ville; ?>">
                <div class="contact vert">
                    <!-- <p class=""><?php echo $liste_couleurs; ?></p> -->
                    <h3 class=""><?php echo $titre; ?></h3>
                    <img class="portrait" src="<?php echo $photo; ?>" alt="<?php echo $prenom_nom; ?>" />
                    <h4 class=""><?php echo $prenom_nom; ?></h4>
                    <p class="colorSpeMail"><?php echo $contenu; ?></p>
                    <!-- <p class=""><?php echo $intitule_du_bouton; ?></p> -->
                    <a class="newsroom" href="<?php echo $bouton; ?>" target="_blank"><?php echo $intitule_du_bouton; ?></a>
                </div>

                

                
                
            </div>
<?php 
    // End loop.
    endwhile;
// No value.
else :  
    // Do something...
endif;
endforeach;
?>

        </div>               
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
