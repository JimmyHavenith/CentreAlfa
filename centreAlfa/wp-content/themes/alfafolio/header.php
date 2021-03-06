<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title>Centre Alfa - Accueil</title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,700italic,900italic' rel='stylesheet' type='text/css'>
    <?php
      wp_head();
    ?>
  </head>
  <body>
    <header>
      <div class="menuUn">
        <div class="menu">
          <?php wp_nav_menu(array(
            'theme_location:' => 'nav'
          )); ?>
        </div>
        <?php get_sidebar(); ?>
      </div>
    </header>
