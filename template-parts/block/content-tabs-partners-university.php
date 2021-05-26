<?php
/**
 * Block Name: tabs-partners-university
 *
 * This is the template that displays the tabs-partners-university block.
 */

// create id attribute for specific styling
$id = 'tabs-partners-university-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>

<div id="<?php echo $id; ?>" class="tabs-partners-university <?php echo $align_class; ?> ">
    <div class="bs-example continents six">
            <ul class="nav nav-tabs" id="myTab">
                <li id="continent" class="active"><a data-toggle="tab" href="#"><span>Afficher tout</span></a>
                </li>
                <li id="continent1"><a data-toggle="tab" href="#"><span>Afrique</span></a>
                </li>
                <li id="continent2"><a data-toggle="tab" href="#"><span>Amériques</span></a>
                </li>
                <li id="continent3"><a data-toggle="tab" href="#"><span>Asie</span></a></a>
                </li>
                <li id="continent4"><a data-toggle="tab" href="#"><span>Europe</span></a>
                </li>
                <li id="continent5"><a data-toggle="tab" href="#"><span>Océanie</span></a>
                </li>
            </ul>

            

    <div class="tab-content clearfix">
<?php
$continents = ['afrique','amerique','asie','europe','oceanie'];
foreach( $continents as $continent ) :
// Check rows exists.
if( have_rows('university_'. $continent) ):
    // Loop through rows.
    while( have_rows('university_'. $continent) ) : the_row();
        // Load sub field value.
        $pays = get_sub_field('pays');
		$logo = get_sub_field('logo_universite');
		$ecole = get_sub_field('nom_de_lecole');
		$ville = get_sub_field('ville');
		$lien = get_sub_field('lien');
        // Do something...
?>
    
            <div class="col-md-5 bloc-universite <?php echo $continent; ?>">
                <p class="country"><?php echo $pays; ?></p>
                <div class="centerBloc">
                    <img class="marker1" src="<?php echo $logo; ?>" alt="<?php echo $ecole; ?>">
                    <p class="name-univ"><strong><?php echo $ecole; ?></strong></p>
                    <p class="city"><?php echo $ville; ?></p>
                    <a class="more-univ" href="<?php echo $lien; ?>" target="_blank">> Visiter le site </a>
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
</div>

