<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>



<?php if (!empty ($content['field_answer'])) : ?>
	<div class="faq-field faq-answer">
  		<?php print render($content['field_answer']); ?>
  	</div>
<?php endif; ?>

<?php if (!empty ($content['taxonomy_vocabulary_1'])) : ?>
  <div class="faq-field topic-list">
      <?php print render($content['taxonomy_vocabulary_1']); ?>
  </div>
<?php endif; ?>