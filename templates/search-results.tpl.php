<?php

/**
 * @file
 * Default theme implementation for displaying search results.
 *
 * This template collects each invocation of theme_search_result(). This and
 * the child template are dependent to one another sharing the markup for
 * definition lists.
 *
 * Note that modules may implement their own search type and theme function
 * completely bypassing this template.
 *
 * Available variables:
 * - $search_results: All results as it is rendered through
 *   search-result.tpl.php
 * - $module: The machine-readable name of the module (tab) being searched, such
 *   as "node" or "user".
 *
 *
 * @see template_preprocess_search_results()
 *
 * @ingroup themeable
 */
?>
<?php if ($search_results): ?>
  <h2><?php print t('Search results');?></h2>
  <ol class="search-results <?php print $module; ?>-results">
    <?php print $search_results; ?>
  </ol>
  <?php print $pager; ?>
<?php else : ?>
  <h2><?php print t('Your search yielded no results.');?></h2>
  <ul>
	<li>Check if your spelling is correct.</li>
	<li>If you are looking for a book or journal, try searching the <a href="http://newcatalog.library.cornell.edu">catalog</a>.</li>
	<li>Remove quotes around phrases to search for each word individually. bike shed will often show more results than "bike shed".</li>
	<li>Consider loosening your query with OR. bike OR shed will often show more results than bike shed.</li>
	<li>Contact the library team for help <a href="mailto:mgtref@cornell.edu">mgtref@cornell.edu</a>.</li>
  </ul>
<?php endif; ?>

<!-- Piwik search terms -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackSiteSearch',false,false]);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//webanalytics.library.cornell.edu/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 510]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//webanalytics.library.cornell.edu/piwik.php?idsite=510" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->



