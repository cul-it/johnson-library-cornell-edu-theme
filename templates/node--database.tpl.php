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
            <?php print render($content['field_status']); ?>

            <?php
            $term=taxonomy_term_load($node->field_status['und'][0]['tid']);
            //print_r($term);
            $result=field_view_field('taxonomy_term',$term,'field_icon','Plain text');
            //print_r($result);
            echo render($result);

            $status = field_get_items('node', $node, 'field_status');
            foreach ($status as $tax) {
              $icon = field_get_items('taxonomy_term', $tax['taxonomy_term'], 'field_icon');
              echo $icon[0]['value'];
              $name = field_get_items('taxonomy_term', $tax['taxonomy_term'], 'name');
              echo $name[0]['value'];

              $output = field_view_value('taxonomy_term', $tax['taxonomy_term'], 'field_icon', 0);
              echo $output;
              $output = field_view_value('taxonomy_term', $tax['taxonomy_term'], 'name', 0);
              echo $output;

            }
            // $term = taxonomy_term_load($tid);
            // print_r($term);
            // // $field = field_get_items('taxonomy_term', $term, 'field_icon');
            // print_r($field);tus
            // $output = field_view_value('taxonomy_term', $term, 'field_icon', $field[0]);
            // print_r($output);
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
