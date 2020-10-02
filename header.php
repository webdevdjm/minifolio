<!doctype html>
<html lang="<?php language_attributes(); ?>">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <?php wp_head(); ?>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <!-- TITLE IN WP -->
</head>

<body>
<!-- header section -->
<section class="banner" role="banner">
  <header id="header"> 
    <!-- navigation section  -->
    <div class="header-content clearfix"> 
      <?php the_custom_logo(); ?>
      <nav class="navigation" role="navigation">
        <?php wp_nav_menu( array( 
          'theme_location' => 'primary',
          'container' => '',
          'menu_class' => 'primary-nav'
          )); ?>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
    <!-- navigation section  --> 
  </header>
  
  <!-- banner text -->
  <div class="container">
    <div class="col-md-10 col-md-offset-1">
      <div class="banner-text text-center">
      <?php 
        if( is_active_sidebar( 'banner' )){
          dynamic_sidebar( 'banner' );
        }
       ?>
        <!-- banner text --> 
      </div>
    </div>
  </div>
</section>
<!-- header section --> 