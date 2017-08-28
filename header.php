<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="mobile-menu">
  <nav>
    <?php wp_nav_menu( array(
    		'theme_location' => 'mobile',
    		'menu_id'        => 'mobile-menu',
    		'menu_class'     => 'mobile-navigation',
    		'container'      => false
    	) ); ?>
  </nav>
</div>

<div class="wrap">
<div class="wrap__inner">
	<header id="masthead" class="site-header" role="banner">
	
<div class="project-title">
  AkzoNobel Terra
</div>
	

  <nav>
  
  <button class="le-big-mac">
    <span class="menu-icon">
      <span class="menu-bar bar-1"></span>
      <span class="menu-bar bar-2"></span>
      <span class="menu-bar bar-3"></span>
    </span>
    <span class="menu-title">Meny</span>
	</button>
  
  <?php wp_nav_menu( array(
  		'theme_location' => 'primary',
  		'menu_id'        => 'primary-menu',
  		'menu_class'     => 'primary-navigation',
  		'container'      => false
  	) ); ?>

  </nav>

  <a href="<?php echo esc_url( home_url( '/' ) ); ?>">  
  <div class="logo">
  <div class="logo__inner">
    <img src="<?php bloginfo('template_url'); ?>/assets/images/akzonobel-logo.svg">
  </div>
  </div>
  </a>
  

	</header><!-- #masthead -->
	</div><!-- /inner -->
</div><!-- /wrap -->
