<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>



<div class="wrap">
<div class="wrap__inner">
	<header id="masthead" class="site-header" role="banner">
	
<div class="project-title">
  AkzoNobel Terra
</div>
	
  <nav>
  
  <?php wp_nav_menu( array(
  		'theme_location' => 'primary',
  		'menu_id'        => 'primary-menu',
  		'menu_class'     => 'primary-navigation',
  		'container'      => false
  	) ); ?>

  </nav>

  <a href="#">  
  <div class="logo">
  <div class="logo__inner"></div>
  </div>
  </a>
  

	</header><!-- #masthead -->
	</div><!-- /inner -->
</div><!-- /wrap -->
