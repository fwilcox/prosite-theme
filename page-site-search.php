<?php get_header(); ?>
  <div class="container" id="content" tabindex="-1"></div>
  <!-- Content -->
    <div class="page-header">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h2 class="h1"><?php the_title(); ?></h2>
          </div>
        </div>
      </div>
    </div>
      <div class="container main-content">
        <div class="col-xs-12 banner-image">
        <?php the_post_thumbnail('banner-image') ?>
        </div>
        <div class="col-sm-12 the-content">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

                the_content();

                endwhile; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
              <?php endif; ?>
          <?php get_search_form(); ?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
