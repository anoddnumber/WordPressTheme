<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js" ></script>
  <script type="text/javascript" src="wp-content/themes/twentyfifteen-child/js/default.js"></script>
  <!--[if lt IE 9]>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <nav class="navbar navbar-full nav-main" role="navigation">
    <div class="row between-xs center-xs middle-xs bare">
      <div class="col-xs-4 start-xs bare">
        <a href="javscript:void(0);" class="no-underline nav-trigger waves-effect" id="toc">
          <div class="hamburger-menu">
            <div class="bar"></div>	
          </div>
        <span class="nav-trigger_text show-sm-inline">Contents</span></a>
      </div>
    </div>
  </nav>
  <div class="wrapper">
    <aside class="sidebar sidebar-left sidebar--fixed" role="complementary">
      <!-- This is where the sidebar widget area is added -->
      <?php if( dynamic_sidebar('sidebar_id') ) : else : endif; ?>
    </aside>
  
   <ul class="contents_bar">
    <li><a href="#sidr-left" class="sidr-left-link">
      <div class="hamburger-menu">
        <div class="bar"></div>	
      </div>
      <span>
        Contents
      </span>
    </a></li>
  </ul>

<div id="page" class="hfeed site">
  <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>

  <div id="content" class="site-content">