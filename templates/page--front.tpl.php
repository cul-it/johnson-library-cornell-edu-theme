<div id="skiptocontent"><a href="#maincontent">skip to main content</a></div>
<div class="visible-xs">
  <div class="search-collapse collapse">
    <div class="container">
      <div class="header-search">
        <?php print render($page['search']); ?>
      </div>
    </div>
  </div>
</div>

<div class="cornell-brand">
  <div class="container">
    <div class="row">
      <div class="cornell-logo">
        <div class="cu-logo hidden-xs">
          <img src="/sites/all/themes/johnsonlibrary/img/layout/Johnson_Cornell.simple.newseal.svg" alt="JOHNSON Cornell University">
          <a id="insignia-link" href="http://www.cornell.edu/">Cornell Insignia</a>
          <div class="unit-signature-links">
            <a id="unit-link" href="http://johnson.cornell.edu/">Johnson</a>
            <a id="cornell-link" href="http://www.cornell.edu/">Cornell University</a>
          </div>
        </div>
        <div class="mobile-logo visible-xs">
          <a href="http://johnson.cornell.edu"><img src="/sites/all/themes/johnsonlibrary/img/layout/Johnson_Cornell.simple.newseal.svg" alt="JOHNSON Cornell University"></a>
        </div>
      </div>
      <div class="search-box">
        <button class="btn btn-default btn-mobile" data-toggle="collapse" data-target=".search-collapse">
          <span class="sr-only">Search</span>
          <i class="fa fa-search"></i>
        </button>
        <button type="button" class="navbar-toggle btn-mobile" data-toggle="collapse" data-target=".navigation-collapse">
          <span class="sr-only">Menu</span>
          <i class="fa fa-bars"></i>
        </button>
        <div class="hidden-xs">
          <div class="header-search">
            <?php print render($page['search']); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="navigation-collapse collapse nav-mobile">
  <div class="navbar-nav">
    <?php print render($page['mobile-nav']); ?>
  </div>
</div><!--/.navigation-collapse-->

<div class="image-wrapper">
  <div class="navbar" role="navigation">
    <div class="container">
      <div class="row">
        <div class="brand">
          <a class="navbar-brand" href="/">Management Library</a>
          <div class="slogan"><?php print $site_slogan; ?></div>
        </div>
        <div class="navigation">
          <div class="hours">
            <?php print render($page['header']); ?>
          </div>
          <div class="hidden-xs">
            <div class="navbar-nav">
              <?php print render($page['navigation']); ?>
            </div>
          </div><!--/.navbar-collapse-->
        </div>
      </div>
    </div>
  </div>

  <div class="resource-tabs" id="maincontent">
    <div class="container">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist" id="myTab">
        <li role="presentation" class="active"><a href="#databases" role="tab" data-toggle="tab">Databases<i class="fa fa-chevron-down"></i></a></li>
        <li role="presentation"><a href="#books" role="tab" data-toggle="tab">Books and Journals<i class="fa fa-chevron-down"></i></a></li>
        <li role="presentation"><a href="#guides" role="tab" data-toggle="tab">Guides and FAQs<i class="fa fa-chevron-down"></i></a></li>
        <li role="presentation"><a href="#help" role="tab" data-toggle="tab">Help<i class="fa fa-chevron-down"></i></a></li>
      </ul>
    </div>
  </div>
</div><!--/image-wrapper-->

<div class="resource-content hidden-xs">
  <div class="container">

    <!-- Tab panes -->
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane fade in active" id="databases">
        <?php print render($page['databases-tab']); ?>
      </div>
      <div role="tabpanel" class="tab-pane fade" id="books">
        <?php print render($page['books-tab']); ?>
      </div>
      <!--Guides and FAQ-->
      <div role="tabpanel" class="tab-pane fade" id="guides">
        <?php print render($page['guides-tab']); ?>
      </div>
      <!--Help-->
      <div role="tabpanel" class="tab-pane fade" id="help">
        <div class="gutter">
          <?php print render($page['help-tab']); ?>
        </div>
      </div>
    </div>
  </div>
</div><!--/resource-content-->

<div class="featured-content">
  <div class="container">
    <div class="row">
      <div class="feature">
        <?php print render($page['feature1']); ?>
      </div>
      <div class="feature">
        <?php print render($page['feature2']); ?>
      </div>
    </div>
  </div>
</div>



<footer>
  <div class="container">
    <div class="row">
      <div class="footer-block">
        <?php print render($page['footer1']); ?>
      </div>
      <div class="footer-block">
        <?php print render($page['footer2']); ?>
      </div>
      <div class="footer-block">
        <?php print render($page['footer3']); ?>
      </div>
      <div class="footer-block">
        <?php print render($page['footer4']); ?>
      </div>
    </div>
  </div>
</footer>

<?php print render($page['bottom']); ?>

<script type="text/javascript">
  (function ($) {
    $('#myTab').tabCollapse();
  })(jQuery);

</script>


<script type="text/javascript">
  jQuery(document).ready(function() { 
  var randomImages = ['1','2','3','4']; 
  var rndNum = Math.floor(Math.random() * randomImages.length); 
  jQuery(".image-wrapper").css({ background: "url('/sites/all/themes/johnsonlibrary/img/banner/" + randomImages[rndNum] + ".jpg') no-repeat" }); });
</script>
