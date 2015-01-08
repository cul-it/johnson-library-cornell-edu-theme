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
  <?php print render($content['field_dbaseurl']); ?>
<?php endif; ?>

<?php if (!empty ($content['taxonomy_vocabulary_1'])) : ?>
  <?php print render($content['taxonomy_vocabulary_1']); ?>
<?php endif; ?>