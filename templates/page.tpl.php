<div id="skiptocontent"><a href="#maincontent">skip to main content</a></div>

<div class="search-collapse collapse">
  <div class="container">
    <div class="header-search">
      <?php print render($page['search']); ?>
    </div>
  </div>
</div>

<div class="cornell-brand">
  <div class="container">
    <div class="row">
      <div class="cornell-logo">
        <div class="cu-logo">
          <img src="/sites/all/themes/johnsonlibrary/img/layout/johnson-cornell.gif" alt="Cornell University Library">
          <a id="insignia-link" href="http://www.cornell.edu/">Cornell Insignia</a>
        </div>
      </div>
      <div class="search-box">
        <button class="btn btn-default" data-toggle="collapse" data-target=".search-collapse">
          <i class="fa fa-search"></i>
        </button>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navigation-collapse">
          <i class="fa fa-bars"></i>
        </button>
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
          <a href="http://johnson.cornell.edu" class="college-brand">Johnson</a>
          <a class="navbar-brand" href="/">Management Library</a>
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

  <div class="resource-tabs hidden-xs">
    <div class="container">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist" id="myTab">
        <li role="presentation"><a href="#databases" role="tab" data-toggle="tab">Databases<i class="fa fa-chevron-down"></i></a></li>
        <li role="presentation"><a href="#books" role="tab" data-toggle="tab">Books and Journals<i class="fa fa-chevron-down"></i></a></li>
        <li role="presentation"><a href="#guides" role="tab" data-toggle="tab">Guides and FAQ<i class="fa fa-chevron-down"></i></a></li>
        <li role="presentation"><a href="#help" role="tab" data-toggle="tab">Help<i class="fa fa-chevron-down"></i></a></li>
      </ul>
    </div>
  </div>
  </div>
</div><!--/image-wrapper-->

<div class="resource-content hidden-xs">
  <div class="container">

    <!-- Tab panes -->
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane fade in" id="databases">
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

<div class="page-header">
  <div class="container">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
      <i class="fa fa-bars"></i>
    </button>
    <?php print render($breadcrumb); ?>
    <?php if ($title): ?>
      <h1><?php print $title; ?></h1>
    <?php endif; ?>
  </div>
</div>

<div class="main-content">
  <div class="container">

    <?php
    // Render the sidebars to see if there's anything in them.
    $sidebar  = render($page['sidebar']);
      ?>

    <!--if there is a sidebar, then create two columned layout-->
   
    <?php if ($sidebar): ?>
      <div class="row">
        <div class="sidebar sidebar-collapse collapse">
          <?php print render($page['sidebar']); ?>
        </div>
        <div class="main-text-2col">
          <?php print $messages; ?>
          <?php print render($tabs); ?>
          <?php if ($action_links): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul>
          <?php endif; ?>
          <?php print render($page['content']); ?>
        </div>
      </div>

    <!-- otherwise render a one-column layout -->
    <?php else :?>

      <div class="main-text">
        <?php print $messages; ?>
        <?php print render($tabs); ?>
        <?php if ($action_links): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
        <?php print render($page['content']); ?>
      </div>

    <?php endif; ?>

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
    $('[data-toggle=tab]').click(function(){
      if ($(this).parent().hasClass('active')){
        $($(this).attr("href")).toggleClass('active');
      }
    })
  })(jQuery);
</script>