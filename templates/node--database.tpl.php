<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>


<div class="pull-right col-sm-4 connect-box">
  <?php if (!empty ($content['field_dbaseurl']) || ($content['field_status']) || ($content['field_technology_note']) || ($content['field_scope_note'])) : ?>
    <div class="well">
      <?php if (!empty ($content['field_dbaseurl'])) : ?>
      	<div class="db-field db-url">
        		<?php print render($content['field_dbaseurl']); ?>
        	</div>
      <?php endif; ?>
      <?php if (!empty ($content['field_status'])) : ?>
        <div class="db-field status-list">
            <?php
            $status = field_get_items('node', $node, 'field_status');
            foreach ($status as $tax) {
              $class = field_get_items('taxonomy_term', $tax['taxonomy_term'], 'field_icon_class');
              $classname = $class[0]['safe_value'];
              $name = $tax['taxonomy_term']->name;
              $output = t('<p><i class="@class"></i> @name</p>', array('@class' => $classname, '@name' => $name));
              echo $output;
            }
            ?>


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
  <?php endif; ?>
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

<?php if (!empty ($content['field_video_embed_code'])) : ?>
  <div class="db-field db-video">
      <?php print render($content['field_video_embed_code']); ?>
  </div>
<?php endif; ?>

<!-- For indexing, not display -->
<?php if (!empty ($content['field_search_terms'])) : ?>
  <div class="db-field search-terms hidden">
      <?php print render($content['field_search_terms']); ?>
  </div>
<?php endif; ?>
