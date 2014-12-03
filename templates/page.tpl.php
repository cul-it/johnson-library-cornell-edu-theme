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
          <img src="/sites/all/themes/johnsonlibrary/img/layout/cornell.gif" alt="Cornell University Library">
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

<div class="navigation-collapse collapse">
  <div class="navbar-nav">
    <?php print render($page['mobile-nav']); ?>
  </div>
</div><!--/.navigation-collapse-->

<div class="image-wrapper">
  <div class="navbar" role="navigation">
    <div class="container">
      <div class="row">
        <div class="brand">
          <a href="http://johnson.cornell.edu" class="college-brand">Johnson School</a>
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

  <div class="resource-tabs">
    <div class="container">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist" id="myTab">
        <li role="presentation" class="active"><a href="#databases" role="tab" data-toggle="tab">Databases<i class="fa fa-chevron-down"></i></a></li>
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
      <div role="tabpanel" class="tab-pane" id="databases">
        <?php print render($page['databases-tab']); ?>
      </div>
      <div role="tabpanel" class="tab-pane" id="books">
        <?php print render($page['books-tab']); ?>
      </div>
      <!--Guides and FAQ-->
      <div role="tabpanel" class="tab-pane" id="guides">
        <?php print render($page['guides-tab']); ?>
      </div>
      <!--Help-->
      <div role="tabpanel" class="tab-pane" id="help">
        <?php print render($page['help-tab']); ?>
      </div>
    </div>
  </div>
</div><!--/resource-content-->


<!-- <div class="resource-content hidden-xs">
  <div class="container">

    <div class="tab-content"> -->
      <!--Databases-->
      <!-- <div role="tabpanel" class="tab-pane active" id="databases">
        <h1 class="sr-only">Databases</h1>
        <div class="row">
          <div class="col-sm-4">
            <div class="gutter">
              <h2>Popular Databases</h2>
              <ul>
                <li><a href="#">ThomasOne (IE Only)<i class="fa fa-chevron-right"></i></a></li>
                <li><a href="#">Factiva<i class="fa fa-chevron-right"></i></a></li>
                <li><a href="#">Capital IQ<i class="fa fa-chevron-right"></i></a></li>
                <li><a href="#">Hoover's Online<i class="fa fa-chevron-right"></i></a></li>
                <li><a href="#">Business Source Complete<i class="fa fa-chevron-right"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="gutter">
              <h2>Go directly to a database</h2>
              <form>
                <select class="form-control">
                  <option>Select a database</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </fron>
              <h2>Popular Topics</h2>
              <ul>
                <li><a href="#">analyst reports<i class="fa fa-chevron-right"></i></a></li>
                <li><a href="#">careers<i class="fa fa-chevron-right"></i></a></li>
                <li><a href="#">company<i class="fa fa-chevron-right"></i></a></li>
                <li><a href="#">finance<i class="fa fa-chevron-right"></i></a></li>
                <li><a href="#">industry<i class="fa fa-chevron-right"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="gutter">
              <a class="btn btn-jgsm pull-right">See all databases<i class="fa fa-chevron-right"></i></a>
            </div>
          </div>
        </div>
      </div> -->
      <!--Books-->
      <!-- <div role="tabpanel" class="tab-pane" id="books">
        <h1 class="sr-only">Books and Journals</h1>
        <div class="row">
          <div class="col-sm-8">
            <div class="gutter">
              <h2 class="search-header">Search for books, articles, databases, journals and more</h2>
              <form class="form-horizontal" role="form">
                <div class="form-group">
                  <label for="searchbox" class="sr-only">Search</label>
                  <div class="col-sm-10">
                    <input type="searchbox" class="form-control" id="searchbox" placeholder="Search">
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="gutter">
              <h2>Library Resources</h2>
              <ul>
                <li><a href="#">Catalog<i class="fa fa-chevron-right"></i></a></li>
                <li><a href="#">Articles &amp; Full-Text<i class="fa fa-chevron-right"></i></a></li>
                <li><a href="#">Databases<i class="fa fa-chevron-right"></i></a></li>
                <li><a href="#">E-journals<i class="fa fa-chevron-right"></i></a></li>
                <li><a href="#">Images<i class="fa fa-chevron-right"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div> -->
      <!--Guides and FAQ-->
      <!-- <div role="tabpanel" class="tab-pane" id="guides">
        Guides and FAQ
      </div> -->
      <!--Help-->
      <!-- <div role="tabpanel" class="tab-pane" id="help">
        Help
      </div>
    </div>
  </div>
</div> --><!--/resource-content-->

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
    
    <div class="row">
      <div class="sidebar sidebar-collapse">
        <?php print render($page['sidebar']); ?>
      </div>
      <div class="main-text">
        <?php print $messages; ?>
        <?php print render($tabs); ?>
        <?php if ($action_links): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
        <?php print render($page['content']); ?>
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
  $('#myTab').tabCollapse();
</script>