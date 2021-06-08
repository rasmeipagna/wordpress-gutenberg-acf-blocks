<?php
/**
 * Block Name: Tabs Booking
 *
 * This is the template that displays the tabs Booking.
 */

// create id attribute for specific styling
$id = 'tabs-booking-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>
<div class="clearfix"></div>

<div id="<?php echo $id; ?>" class="tabs-booking <?php echo $align_class; ?> ">
    <div class="col-sm-12">
        <div id="myTabs">

            <ul class="nav nav-pills">
                <li class="active">
                    <a class="simple-button" href="#paris" data-toggle="tab"><?php the_field('tabs1'); ?></a>
                </li>
                <li>
                    <a class="simple-button" href="#lyon" data-toggle="tab"><?php the_field('tabs2'); ?></a>
                </li>
            </ul>

            <div class="tab-content clearfix">

                <div class="tab-pane active" id="paris">
                                   
                    <div class="col-sm-12">
                        <?php the_field('wysiwyg1'); ?>
                    </div>
                    <div class="clearfix"></div> 
                    
                </div>

                <div class="tab-pane" id="lyon">
                                   
                    <div class="col-sm-12">
                        <p><?php the_field('wysiwyg2'); ?></p>
                    </div>
                    <div class="clearfix"></div> 
                      
                
                </div>

            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
