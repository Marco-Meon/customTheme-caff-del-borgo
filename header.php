<!DOCTYPE html>
<html <?php language_attributes(); // display the html language tag ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <link rel="stylesheet"  href="//fonts.googleapis.com/css?family=Arapey:400,700" type="text/css" />
  <link rel="stylesheet"  href="//fonts.googleapis.com/css?family=Italianno:400,500,600,700" type="text/css" />
  <link rel="stylesheet"  href="//fonts.googleapis.com/css?family=Cormorant:400,700" type="text/css" />
  <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/loghino.png" type="image/png"> <!-- Icon al top della scheda -->

  <?php wp_head(); // insert all the script and styles of WordPress ?>

</head>

<body <?php body_class(); // add automic css classes based on the page ?>>

  <?php wp_body_open(); // insert script right after the body if needed ?>

  <header class="header__container">

    <div class="header">

      <img class="img-sma-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/loghino.svg" alt="">

    <?php // insert custom menu header
      wp_nav_menu(array(
        'theme_location' => 'header',
        'container' => false,
        'items_wrap' => '<ul class="header__menu">%3$s</ul>'
      ));
      ?>


      <div class="header__hamburger">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>

    </div>

  </header>
  
  <div class="overflow">