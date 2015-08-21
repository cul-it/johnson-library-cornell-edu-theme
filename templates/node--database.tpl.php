<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>


<div class="pull-right col-sm-4">
  <div class="well">
    <?php if (!empty ($content['field_dbaseurl'])) : ?>
    	<div class="db-field db-url">
      		<?php print render($content['field_dbaseurl']); ?>
      	</div>
    <?php endif; ?>
    <?php if (!empty ($content['field_status'])) : ?>
      <div class="db-field topic-list">
          <?php print render($content['field_status']); ?>
      </div>
    <?php endif; ?>
    <?php if (!empty ($content['field_technology_note'])) : ?>
      <div class="db-field db-tech-note">
          <?php print render($content['field_technology_note']); ?>
        </div>
    <?php endif; ?>
    <?php if (!empty ($content['field_scope_note'])) : ?>
      <div class="db-field db-scope-note">
          <?php print render($content['field_scope_note']); ?>
        </div>
    <?php endif; ?>
  </div>
</div>

<?php if (!empty ($content['field_description'])) : ?>
  <div class="db-field db-description">
      <?php print render($content['field_description']); ?>
    </div>
<?php endif; ?>

<?php if (!empty ($content['field_use'])) : ?>
	<div class="db-field db-use">
  		<?php print render($content['field_use']); ?>
  	</div>
<?php endif; ?>

<?php if (!empty ($content['taxonomy_vocabulary_1'])) : ?>
  <div class="db-field topic-list">
      <?php print render($content['taxonomy_vocabulary_1']); ?>
  </div>
<?php endif; ?>