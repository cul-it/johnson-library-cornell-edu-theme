<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<?php
  $dburl = render($content['field_guideurl']);
  $title = render($content['title']);
?>




<?php if (!empty ($content['field_guideurl'])) : ?>
	<div class="db-field db-url">
  	<!--<?php print render($content['field_guideurl']); ?>-->
    <a href="<?php print $dburl; ?>" class="btn-jgsm">Connect to '. $title .'</a>

  </div>
<?php endif; ?>

<?php if (!empty ($content['taxonomy_vocabulary_1'])) : ?>
  <div class="db-field topic-list">
      <?php print render($content['taxonomy_vocabulary_1']); ?>
  </div>
<?php endif; ?>