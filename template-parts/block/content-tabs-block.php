<?php
/**
 * Block Name: Tabs Block
 *
 * This is the template that displays the tabs block.
 */

// get image field (array)
$avatar = get_field('avatar');

// create id attribute for specific styling
$id = 'tabs-block-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>
<div class="clearfix"></div>
<div id="<?php echo $id; ?>" class="tabs-block <?php echo $align_class; ?> ">
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
                    <br />
                    
                    <br />
                    <div class="col-sm-12">
                        <p><?php the_field('zone_de_texte1'); ?></p>
                    </div>

                    <div class="clearfix"></div>
                   


                </div>
                <div class="tab-pane" id="lyon">
                    
                    <div class="col-sm-12">
                        <p><?php the_field('zone_de_texte2'); ?>
                        </p>
                    </div>
                
                    <div class="clearfix"></div>
                </div>

                </div>
        </div>
        </div>
</div>
<div class="clearfix"></div>
