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
	<div class="db-field db-url">
  		<?php print render($content['field_dbaseurl']); ?>">
  	</div>
<?php endif; ?>

<?php if (!empty ($content['taxonomy_vocabulary_1'])) : ?>
	<div class="db-field topic-list">
  		<?php print render($content['taxonomy_vocabulary_1']); ?>
 	</div>
<?php endif; ?>

<?php if (!empty ($content['field_use'])) : ?>
	<div class="db-field db-use">
  		<?php print render($content['field_use']); ?>
  	</div>
<?php endif; ?>

<?php if (!empty ($content['field_address'])) : ?>
	<div class="db-field db-connect">
  		<?php print render($content['field_address']); ?>
  	</div>
<?php endif; ?>

<?php if (!empty ($content['field_description'])) : ?>
	<div class="db-field db-description">
  		<?php print render($content['field_description']); ?>
  	</div>
<?php endif; ?>

<?php if (!empty ($content['field_moreinfo'])) : ?>
	<div class="db-field db-more-info">
  		<?php print render($content['field_moreinfo']); ?>
  	</div>
<?php endif; ?>

<?php if (!empty ($content['field_availability'])) : ?>
	<div class="db-field db-availability">
  		<?php print render($content['field_availability']); ?>
  	</div>
<?php endif; ?>
