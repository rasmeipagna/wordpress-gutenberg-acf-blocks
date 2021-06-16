<?php
/**
 * Block Name: bloc-enseignant
 *
 * This is the template that displays the bloc-enseignant.
 */

// get image field (array)
$avatar = get_field('portrait');

// create id attribute for specific styling
$id = 'bloc-enseignant-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>
    <div id="<?php echo $id; ?>" class="bloc-enseignant <?php echo $align_class; ?>">
        <div class="col-xs-12 col-sm-12 bloc-enseignant spe">
            <div class="col-sm-3">
                <div class="bloc-enseignant-img">
                    <img src="<?php echo $avatar['url']; ?>" alt="<?php echo $avatar['alt']; ?>" />
                </div>
            </div>
            <div class="col-xs-12 col-sm-9 closer-left">
                <h4>
                    <?php the_field('prenom_nom'); ?>
                </h4>
                <br />
                <p>
                    <?php the_field('poste'); ?>
                </p>
                <br />


            </div>



        </div>

    </div>