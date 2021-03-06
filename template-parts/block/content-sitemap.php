<?php

/**
 * Texte en exergue block template
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'sitemap-' . $block['id'];
// if ( !empty($block['anchor']) ) {
//   $id = $block['anchor'];
// }
// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

$pages_exclues = get_field('pages_exclues');

if ( !empty($pages_exclues) ) {
  $exclude = implode( ',', $pages_exclues);
} else {
  $exclude = '';
}

?>

  <div id="<?php echo esc_attr($id); ?>" class="planSite <?php echo $align_class; ?>" >
    <ul>
      <?php wp_list_pages(array(
        'exclude'  => $exclude,
        'title_li' => null
      )); ?>
    </ul>

  </div>