<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
  <div class="wrap header-inner">
    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
      <img
        class="brand-logo"
        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo-2.svg'); ?>"
        alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
      >
    </a>

    <button
      class="menu-toggle"
      type="button"
      aria-expanded="false"
      aria-controls="site-navigation"
      aria-label="Otwórz menu"
    >
      ☰
    </button>

    <?php
    wp_nav_menu(array(
      'theme_location' => 'primary',
      'container'      => 'nav',
      'container_id'   => 'site-navigation',
      'container_class'=> 'site-nav',
      'menu_class'     => '',
      'menu_id'        => '',
      'fallback_cb'    => false,
      'items_wrap'     => '%3$s',
      'add_aria_label' => true,
    ));
    ?>
  </div>
</header>
