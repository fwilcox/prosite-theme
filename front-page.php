<?php get_header(); ?>
    <!-- hero-image -->
      <figure class="constrained-container home-hero">
      <?php the_post_thumbnail('hero-image') ?>
      </figure>
      <!-- /hero-image -->
      <div class="container" id="content" tabindex="-1">  </div>
      <!-- Content -->
      <div class="home-content">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <h2 class="h1 seo-title"><?php the_field('seo_title'); ?></h1>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 home-left">
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

                    the_content();

                    endwhile; else: ?>
                 <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
               <?php endif; ?>
            </div>
            <div class="col-md-6 align-center home-right">
              <?php the_field('additional_content'); ?>
           </div>
        </div>
      </div>
    </div>
      <!-- Panel Images -->
      <figure class="constrained-container">
      <?php echo do_shortcode('[image-carousel]'); ?>
      </figure>
      <!-- /Content -->
<?php get_footer(); ?>
