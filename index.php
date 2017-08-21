<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap-hero-slider">
    <div class="hero-slider">
    <h2>Placeholder for slider</h2>
    </div>
</div>

<div class="wrap">



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">



    
    <div class="blocks-container">
      <ul class="blocks">
        <li style="background-image: url(<?php bloginfo('template_url'); ?>/assets/images/sustainability_banner.jpg);">
        <a href="#">
        <div class="overlay">
          <div class="inner">
            <h3>Our commitment to 1</h3>
          </div>
        </div><!-- /overlay -->
        </a>
        </li>

        <li style="background-image: url(<?php bloginfo('template_url'); ?>/assets/images/sustainability_banner.jpg);">
        <a href="#">
        <div class="overlay">
          <div class="inner">
            <h3>Our commitment to 2</h3>
          </div>
        </div><!-- /overlay -->
        </a>
        </li>
        
        <li style="background-image: url(<?php bloginfo('template_url'); ?>/assets/images/sustainability_banner.jpg);">
        <a href="#">
        <div class="overlay">
          <div class="inner">
            <h3>Our commitment to 3</h3>
          </div>
        </div><!-- /overlay -->
        </a>
        </li>
        
        <li style="background-image: url(<?php bloginfo('template_url'); ?>/assets/images/sustainability_banner.jpg);">
        <a href="#">
        <div class="overlay">
          <div class="inner">
            <h3>Our commitment to 4</h3>
          </div>
        </div><!-- /overlay -->
        </a>
        </li>
      </ul>
    </div>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php /*get_sidebar(); */ ?>
</div><!-- .wrap -->

<?php get_footer();
