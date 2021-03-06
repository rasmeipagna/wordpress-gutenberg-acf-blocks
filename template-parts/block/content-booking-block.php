<?php
/**
 * Block Name: Tabs Booking Block
 *
 * This is the template that displays the tabs booking block.
 */

// get image field (array)

$image_full1 = get_field('image_full1');
$image_full2 = get_field('image_full2');

// create id attribute for specific styling
$id = 'tabs-contact-block-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>
<div class="clearfix"></div>

<div id="<?php echo $id; ?>" class="tabs-booking-block <?php echo $align_class; ?> ">
    <div class="col-sm-12">
        <div id="myTabs">

            <ul class="nav nav-pills">
                <li class="active">
                    <a class="simple-button" href="#paris" data-toggle="tab"><?php the_field('nom_du_campus_1'); ?></a>
                </li>
                <li>
                    <a class="simple-button" href="#lyon" data-toggle="tab"><?php the_field('nom_du_campus_2'); ?></a>
                </li>
            </ul>

            <div class="tab-content clearfix">

                <div class="tab-pane active" id="paris">
                    <div class="col-sm-12">
                        
                        
                    </div>
                    <div class="clearfix"></div>               
                </div>

                <div class="tab-pane" id="lyon">                    
                    <div class="col-sm-12">
                        <p><?php the_field('zone_de_texte2'); ?>
                        </p>
                    </div>
                    
                
                   
                    
                    </div>
                    <div class="clearfix"></div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
