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
          <img src="/sites/all/themes/johnsonlibrary/images/layout/cornell.gif" alt="Cornell University Library">
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
</div><!--/image-wrapper-->

<div class="resource-content hidden-xs">
  <div class="container">

    <!-- Tab panes -->
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="databases">
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

<div class="featured-content">
  <div class="container">
    <div class="row">
      <div class="feature">
        <h3>Featured resource: Financial Times</h3>
        <div class="row">
          <div class="col-sm-4">
            <img src="/sites/all/themes/johnsonlibrary/img/ft-logo.png" alt="">
          </div>
          <div class="col-sm-8">
            <p><a href="#">Register for online access to FT.com<i class="fa fa-chevron-right"></i></a></p>
          </div>
        </div>
      </div>
      <div class="feature">
        <h3>About the Management Library</h3>
        <div class="row">
          <div class="col-sm-6">
            <img src="/sites/all/themes/johnsonlibrary/img/HomeCarousel-thumb-color-01.jpg" alt="">
          </div>
          <div class="col-sm-6">
            <p>The Johnson Graduate School of Management Library collection includes material on the business disciplines, including accounting, commerce, corporate data, economics, entrepreneurship, finance, investments, leadership, management, marketing, organizational behavior and quantitative methods.</p>
            <p class="text-right"><a href="#">Learn more<i class="fa fa-chevron-right"></i></a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- <footer>
  <div class="container">
    <div class="row">
      <div class="footer-block">
        <h4>Johnson Library</h4>
        <ul class="nav">
          <li><a href="#">Home</a></li>
          <li><a href="#">Databases</a></li>
          <li><a href="#">Books and Journals</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Reserves</a></li>
          <li><a href="#">Workshops</a></li>
          <li><a href="#">My Account</a></li>
          <li><a href="#">Help</a></li>
        </ul>
      </div>
      <div class="footer-block">
        <h4>Additional Resources</h4>
        <ul class="nav">
          <li><a href="#">Check Email</a></li>
          <li><a href="#">Net Print</a></li>
          <li><a href="#">New Books</a></li>
          <li><a href="#">Thesis Tool</a></li>
          <li><a href="#">Faculty and PhD</a></li>
          <li><a href="#">Alumni and Friends</a></li>
          <li><a href="#">Visitors</a></li>
        </ul>
      </div>
      <div class="footer-block">
        <h4>Johnson School</h4>
        <ul class="nav">
          <li><a href="#">Home</a></li>
          <li><a href="#">Events</a></li>
          <li><a href="#">JConnect</a></li>
        </ul>
      </div>
      <div class="footer-block">
        <p><strong>Samuel Curtis Johnson<br>
          Management Library</strong>
        </p>
        <p>Sage Hall Cornell University<br>
          Ithaca, NY 14853<br>
        </p>
        <p>
          Phone: (607)255-3389
          <a href="mgtref@cornell.edu">mgtref@cornell.edu</a>
        </p>
      </div>
    </div>
  </div>
</footer> -->
    

<footer>
  <div class="container">
    <?php print render($page['footer']); ?>
    </div>
  </footer>

<?php print render($page['bottom']); ?>

<script type="text/javascript">
  $('#myTab').tabCollapse();
</script>