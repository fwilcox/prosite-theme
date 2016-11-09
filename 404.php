<?php get_header(); ?>
  <div class="container" id="content" tabindex="-1"></div>
  <!-- Content -->
    <div class="page-header">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h2 class="h1">Page Not Found</h2>
          </div>
        </div>
      </div>
    </div>
      <div class="container main-content">
        <div class="col-xs-12 banner-image">

        </div>
        <div class="col-sm-12 the-content">
          <img class="responsive" src="<?php bloginfo('stylesheet_directory'); ?>/images/404.jpg" alt="Sorry page not found">
          <h3 class="not-found">Please search below for another page.</h3>
          <?php get_search_form(); ?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
