<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
  <nav>
    <ul class="primary-navigation">
      <li><a href="#">Hem</a></li>
      <li><a href="#">Om Projektet</a>
        <ul class="submenu">
          <li><a href="#">Översikt</a></li>
          <li><a href="#">Så saneras naturen</a></li>
        </ul>
      </li>
      <li><a href="#">Tidplan</a></li>
      <li><a href="#">Frågor & Svar</a></li>
      <li><a href="#">Hållbar utveckling</a></li>
    </ul>
  </nav>

  <a href="#">  
  <div class="logo">

  </div>
  </a>
  

	</header><!-- #masthead -->



	<div class="site-content-contain">
		<div id="content" class="site-content">
