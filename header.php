<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<!-- favicon -->
<link rel="icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/assets/img/favicon.ico" />
<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/assets/img/favicon.ico" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <div class="wrap wrap-header">
  


  <header id="masthead" class="site-header" role="banner">
    <button class="show-categories">Kategorier</button>
    
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="logo" src="<?php bloginfo('template_url'); ?>/assets/img/upplyst-logo.svg" alt="Upplyst logo" /></a>
    
    <ul class="utility-nav">
      <li class="create_account"><a href="#">Skapa konto</a></li>
      <li class="login"><a href="#">Logga in</a></li>
      <li class="cart"><a href="#">Cart</a></li>
    </ul>
    
    
  </header><!-- #masthead -->
  


