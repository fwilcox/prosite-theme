    </div>
    <footer class="main-footer">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-4 footer-left">
            <div>
              <i class="fa fa-map-marker"></i>
              <h3 class="h4 footer-heading"><span>PO Box 543</span>Stowe, VT</h3>
            </div>
            <div>
              <i class="fa fa-phone"></i>
              <h3 class="h4 footer-heading"><a href="tel:802.730.7785?>">802.730.7785</a></h3>
            </div>
            <div>
              <i class="fa fa-envelope"></i>
              <h3 class="h4 footer-heading"><a href="mailto:fewilcox3@gmail.com">fewilcox3@gmail.com</a></h3>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 footer-center">
            <nav class="footer-nav">
              <?php wp_nav_menu( 'footer' ); ?>
            </nav>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 footer-right">
            <p class="footer-company-about">
              <span>Design Philosophy</span>
              Using the natural environment as inspiration to create clean efficient design, accessible by all.
            </p>
            <div class="footer-icons">
              <a href="https://www.facebook.com/frankwilcoxdesign" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i><span class="sr-only">Facebook</span></a>
              <a href="https://www.linkedin.com/in/frankwilcox" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i><span class="sr-only">LinkedIn</span></a>
              <a href="https://github.com/fwilcox" target="_blank"><i class="fa fa-github"></i><span class="sr-only" aria-hidden="true">Github</span></a>
            </div>
          </div>
        </div>
      </div>
      <section class="credits">
        <div class="container">
          <div class="row">
            <p class="col-md-6 ownership">&copy; <?php echo date('Y');?> <?php bloginfo('name'); ?></p>
            <p class="col-md-6 authorship">Handcrafted Responsive Website By Frank Wilcox Design</p>
          </div>
        </div>
      </section>
    </footer>
    <?php wp_footer(); ?>
  </body>
  <!-- /Body -->
</html>
