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

                

<?php
// Check rows exists.
// if( have_rows('ville') ):
    // Loop through rows.
    // while( have_rows('ville') ) : the_row();
        // Load sub field value.
        // $titre = get_sub_field('plan');
		// $photo = get_sub_field('metro');
		// $nom_prenom = get_sub_field('bus');
		// $titre = get_sub_field('voiture');
        // Do something...

?>
<div class="tab-pane active" id="<?php echo $ville; ?>">
                    <div class="col-sm-12">
                        
                        <?php the_field('plan'); ?>
                    </div>                
                   
                    <div class="clearfix"></div> 
                    <div class="col-md-4">
                        <p><span class="bleu">Métro :</span><br />
                        <?php the_field('metro'); ?>  </p>  
                    </div>
                    <div class="col-md-4">
                        <p><span class="bleu">Bus :</span><br />
                        <?php the_field('bus'); ?></p>

                    </div>
                    <div class="col-md-4">
                        <p><span class="bleu">Voiture :</span><br />
                        <?php the_field('voiture'); ?></p>
    
                    </div>
                    <div class="clearfix"></div>
<?php     // End loop.
    // endwhile;
// No value.
// else :
    // Do something...
// endif;
?>
<?php
// $villes = ['paris','lyon'];
    
// foreach( $villes as $ville ) :

// Check rows exists.
// if( have_rows('contact_'. $ville) ):
    // Loop through rows.
    // while( have_rows('contact_'. $ville) ) : the_row();
        // Load sub field value.
        // $titre = get_sub_field('departement');
		// $photo = get_sub_field('photo');
		// $nom_prenom = get_sub_field('nom_prenom');
		// $titre = get_sub_field('titre');
		// $telephone = get_sub_field('telephone');
        // $email = get_sub_field('email');
        // $bouton = get_sub_field('bouton');

        // Do something...
?>                    
                    
                   <div class="petit-blocs">
                        <div class="contact vert">
                            <h3><?php the_field('departement'); ?></h3>
                            <img src="<?php the_field('photo'); ?>" class="portrait"/>
                            <h4><?php the_field('nom_prenom'); ?></h4>
                            <p class="colorSpeMail"><?php the_field('titre'); ?><br><br>
                            <?php the_field('telephone'); ?><br>
                            <?php the_field('email'); ?>
                                <br />
                                <br />
                                <a href="<?php the_field('bouton'); ?>" class="newsroom" target="_blank">Newsroom Groupe IONIS</a>
                            </p>
                        </div>


                   </div>
                
            </div>              
                </div>


                <?php 

// endforeach;
?>


                

                

            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
