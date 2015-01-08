<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>


<?php if (!empty ($content['field_dbaseurl'])) : ?>
  <a href="<?php print render($content['field_dbaseurl']); ?>" class="btn btn-jgsm"></a>
<?php endif; ?>

