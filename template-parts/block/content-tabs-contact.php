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
                        <a class="simple-button" href="#paris" data-toggle="tab">
                            <span class="dropcap">1</span>Paris</a>
                    </li>
                    <li>
                        <a class="simple-button" href="#lyon" data-toggle="tab">
                            <span class="dropcap">2</span>Lyon</a>
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
                                <span class="bleu">Métro :</span>
                                <br>
                                <?php the_field('metro_paris'); ?>
                            </p>

                        </div>
                        <div class="col-sm-4">
                            <p>
                                <span class="bleu">Bus :</span>
                                <br>
                                <?php the_field('bus_paris'); ?>
                            </p>
                        </div>
                        <div class="col-sm-4">
                            <p>
                                <span class="bleu">Voiture :</span>
                                <br>
                                <?php the_field('voiture_paris'); ?>
                            </p>

                        </div>

                        <div class="clearfix"></div>
                        <br />
                        <?php
// $villes = ['paris','lyon'];
// foreach( $villes as $ville ) :
// Check rows exists.
if( have_rows('contact_paris') ):
    // Loop through rows.
    while( have_rows('contact_paris') ) : the_row();
        // Load sub field value.
        $liste_couleurs = get_sub_field('liste_couleurs');
		$titre = get_sub_field('titre');
		$photo = get_sub_field('photo');
		$prenom = get_sub_field('prenom');
        $nom = get_sub_field('nom');
		$contenu = get_sub_field('contenu');
        $email = get_sub_field('email');
        $liste_newsroom = get_sub_field('newsroom');
        // Do something...
       
?>

                            
                                <div class="contact <?php echo $liste_couleurs; ?>">
                                

                                    <h3 class="titre">
                                        <?php echo $titre; ?>
                                    </h3>
                                   
                                    <br />                                    
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6">
                                            <?php 
                            if($photo != ''):
                                ?>
                                            <img class="portrait" src="<?php echo $photo; ?>" alt="<?php echo $prenom; ?> <?php echo $nom; ?>" />
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-xs-6 col-sm-6">
                                            <h4 class="">
                                                <?php echo $prenom; ?>
                                                <br :>
                                                <?php echo $nom; ?>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <?php echo $contenu; ?>
                                    <p class="colorSpeMail">
                                        <?php echo $email; ?> 
                                    </p>
                                    <br />
                                    <?php 
                            if($liste_newsroom != ''):
                        ?>
                                    <p class="newsroom">
                                        <a class="newsroom" href="<?php echo $liste_newsroom['value']; ?>" target="_blank">
                                            <?php echo $liste_newsroom['label']; ?>
                                        </a>
                                    </p>
                                    <?php endif; ?>

                                </div>
                           

                            <?php 
    // End loop.
    endwhile;
// No value.
else :  
    // Do something...
endif;

?>

                    </div>


                    <div class="tab-pane" id="lyon">
                        <div class="col-sm-12">
                            <?php the_field('plan_lyon'); ?>>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-3">
                            <p>
                                <span class="bleu">Métro :</span>
                                <br>
                                <?php the_field('metro_lyon'); ?>
                            </p>

                        </div>
                        <div class="col-sm-3">
                            <p>
                                <span class="bleu">Tram :</span>
                                <br>
                                <?php the_field('tram_lyon'); ?>
                            </p>

                        </div>
                        <div class="col-sm-3">
                            <p>
                                <span class="bleu">Bus :</span>
                                <br>
                                <?php the_field('bus_lyon'); ?>
                            </p>

                        </div>
                        <div class="col-sm-3">
                            <p>
                                <span class="bleu">Voiture :</span>
                                <br>
                                <?php the_field('voiture_lyon'); ?>
                            </p>

                        </div>

                        <div class="clearfix"></div>
                        <br />
                        <div class="col-sm-12">
                            <?php
// $villes = ['paris','lyon'];
// foreach( $villes as $ville ) :
// Check rows exists.
if( have_rows('contact_lyon') ):
    // Loop through rows.
    while( have_rows('contact_lyon') ) : the_row();
        // Load sub field value.
        $liste_couleurs = get_sub_field('liste_couleurs');
		$titre = get_sub_field('titre');
		$photo = get_sub_field('photo');
		$prenom = get_sub_field('prenom');
        $nom = get_sub_field('nom');
		$contenu = get_sub_field('contenu');
        $email = get_sub_field('email');
        $liste_newsroom = get_sub_field('newsroom');
        // Do something...
       
?>

                                <div class="">
                                    <div class="contact <?php echo $liste_couleurs; ?>">

                                        <h3 class="">

                                            <?php echo $titre; ?>

                                        </h3>
                                        <br />
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6">
                                                <?php 
                            if($photo != ''):
                                ?>
                                                <img class="portrait" src="<?php echo $photo; ?>" alt="<?php echo $prenom; ?> <?php echo $nom; ?>" />
                                                <?php endif; ?>
                                            </div>
                                            <div class="col-xs-6 col-sm-6">
                                                <h4 class="">
                                                    <?php echo $prenom; ?>
                                                    <br :>
                                                    <?php echo $nom; ?>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <?php echo $contenu; ?>
                                        <p class="colorSpeMail">
                                            <?php echo $email; ?> 
                                        </p><br />
                                        <?php 
                            if($liste_newsroom != ''):
                        ?>
                                        <p class="newsroom">
                                            <a class="newsroom" href="<?php echo $liste_newsroom['value']; ?>" target="_blank">
                                                <?php echo $liste_newsroom['label']; ?>
                                            </a>
                                        </p>
                                        <?php endif; ?>

                                    </div>
                                </div>
                                <?php 
    // End loop.
    endwhile;
// No value.
else :  
    // Do something...
endif;

?>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>