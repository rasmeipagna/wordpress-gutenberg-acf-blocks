<?php
/**
 * Block Name: Tabs Campus
 *
 * This is the template that displays the tabs campus.
 */

// create id attribute for specific styling
$id = 'tabs-campus-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>
<div class="clearfix"></div>

<div id="<?php echo $id; ?>" class="tabs-campus <?php echo $align_class; ?> ">
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

            <div class="tab-content clearfix">

                <div class="tab-pane active" id="paris">
                    <div class="col-sm-6">
                    <img class="center" src="<?php the_field('image_left1'); ?>" />
                    </div>                
                    <div class="col-sm-6">
                        <p><?php the_field('zone_de_texte1'); ?></p>
                    </div>
                    <div class="clearfix"></div> 
                    <div class="col-md-12 justify-content-center">
                        <center>
                        <img class="center" src="<?php the_field('image_full1'); ?>" />
                        </center>
                    </div>
                    <div class="clearfix"></div>               
                </div>

                <div class="tab-pane" id="lyon">
                    <div class="col-sm-6">
                        <img class="center" src="<?php the_field('image_left2'); ?>" />
                    </div>                
                    <div class="col-sm-6">
                        <p><?php the_field('zone_de_texte2'); ?></p>
                    </div>
                    <div class="clearfix"></div> 
                    <div class="col-md-12 justify-content-center">
                        <center>
                        <img class="center" src="<?php the_field('image_full2'); ?>" />
                        </center>
                    </div>
                    <div class="clearfix"></div>      
                
                </div>

            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
