<!DOCTYPE html>
  <html <?php language_attributes(); ?>>
    <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php bloginfo('stylesheet_directory'); ?>/imagesfavicon/apple-touch-icon-152x152-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon/apple-touch-icon-120x120-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon/apple-touch-icon-76x76-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon/apple-touch-icon-60x60-precomposed.png">
      <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon/apple-touch-icon-144x144.png">
      <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon/apple-touch-icon-114x114.png">
      <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon/apple-touch-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon/apple-touch-icon.png">
      <meta name="mobile-web-app-capable" value="yes">
      <link rel="icon" sizes="196x196" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon/homescreen-196x196.png">
      <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon/favicon.ico">
      <link rel="icon" type="image/png" sizes="64x64" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon/favicon.png">
      <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
      <a href="#content" class="sr-only sr-only-focusable">Skip to main content</a>
          <!-- site header -->
    <header class="main-header navbar-fixed-top clearfix" role="banner" data-spy="affix" data-offset-top="70">
      <nav class="social">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-4">
              <ul>
                <li><a href="https://www.facebook.com/frankwilcoxdesign" title="View Facebook" target="_blank"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i><span class="sr-only">Frank Wilcox on Facebook</span></a></li>
                <li><a href="https://www.linkedin.com/in/frankwilcox" title="View LinkedIn" target="_blank"><i class="fa fa-linkedin fa-2x" aria-hidden="true"><span class="sr-only">Frank Wilcox on LinkedIn</span></i></a></li>
                <li><a href="https://github.com/fwilcox" title="View Github" target="_blank"><i class="fa fa-github fa-2x" aria-hidden="true"><span class="sr-only">Frank Wilcox on Github</span></i></a></li>
                <li><a href="/site-search" title="Site Search"><i class="fa fa-search fa-2x" aria-hidden="true"><span class="sr-only">Search</span></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <h1 class="logo"><a href="/" title="Frank Wilcox Design and Development">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/fw_logo.png" alt="frank wilcox logo" class="hidden-xs"><img src= "<?php bloginfo('stylesheet_directory'); ?>/images/fw_logo_xs.png" alt="frank wilcox logo" class="visible-xs"></a>
          </h1>
          <div class="col-sm-8 col-sm-offset-4">
          <nav class="navbar navbar-default navbar-main pull-right" role="navigation">
            <button type="button" class="navbar-toggle offcanvas-toggle" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas" aria-expanded='false' aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <?php
                wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'navbar-offcanvas navbar-offcanvas-touch navbar-offcanvas-right',
                    'container_id'      => 'js-bootstrap-offcanvas',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                );
            ?>
          </nav>
        </div>
      </div>
    </div>
    </header>
