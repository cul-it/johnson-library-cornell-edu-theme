<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>


<?php if (!empty ($content['field_guideurl'])) : ?>
	<div class="db-field db-url">
    <a href="<?php print render($content['field_guideurl']); ?>" class="btn-jgsm">Go to <?php print render($content['title']); ?></a>
  </div>
<?php endif; ?>

<?php if (!empty ($content['taxonomy_vocabulary_1'])) : ?>
  <div class="db-field topic-list">
      <?php print render($content['taxonomy_vocabulary_1']); ?>
  </div>
<?php endif; ?>