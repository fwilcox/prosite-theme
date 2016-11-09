<?php get_header(); ?>
  <div class="container" id="content" tabindex="-1"></div>
  <!-- Content -->
  <div class="container">
    <div class="row">
      <div class="col-sm-12 main-content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

              the_content();

              endwhile; else: ?>
           <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
         <?php endif; ?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
