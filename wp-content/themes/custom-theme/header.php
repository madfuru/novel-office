<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="page" class="site">
    <div class="site-top-bar">
      <!-- Top bar content if any -->
    </div>

    <div class="header-container">
      <div class="logo">
        <?php the_custom_logo(); ?>
      </div>
      <nav class="main-nav">
        <?php wp_nav_menu(array(
          'theme_location' => 'main-menu',
          'container' => false,
          'menu_class' => 'nav-list'
        )); ?>
      </nav>
    </div>
