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



<div class="wrap">
<div class="wrap__inner">

  <?php the_post(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <date><?php the_time('Y-m-d'); ?></date>
      <h1><?php the_title(); ?></h1>
      <?php if ( has_excerpt() ) : ?>
        <?php the_excerpt(); ?>
      <?php endif; ?>
      
      <?php the_content(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php /*get_sidebar(); */ ?>
	
</div><!-- /wrap__inner -->	
</div><!-- .wrap -->

<?php get_footer();
