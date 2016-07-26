<!DOCTYPE html>
<html lang="en">
<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>

  <meta name="description" content="Johnson School Management Library">
  <meta name="author" content="Cornell University Library">
  <title><?php print $head_title; ?></title>

  <?php print $styles; ?>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <?php print $scripts; ?>

</head>
<body class="<?php print $classes; ?>" id="top" <?php print $attributes;?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  

  <?php
    $url = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    if (strpos($url,'search_by_page') !== false) {
  ?>
    <!-- Piwik search terms -->
    <script type="text/javascript">
      var _paq = _paq || [];
      _paq.push(['trackSiteSearch']);
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
  <?php } else { ?>
    <!-- Piwik -->
    <script type="text/javascript">
      var _paq = _paq || [];
      _paq.push(['trackPageView']);
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
  <?php } ?>


</body>
</html>