<?php
/**
 * Template Name: Blog
 */

get_header(); ?>

<div class="wrap">
<div class="wrap__inner">

  <?php the_post(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

    <article>
      <h1><?php the_title(); ?></h1>
      <?php if ( has_excerpt() ) : ?>
        <?php the_excerpt(); ?>
      <?php endif; ?>
      
      <?php the_content(); ?>
    </article>

    <?php $a = array( 'post_type' => 'post' ); ?>
    <?php $q = new WP_Query( $a ); ?>
    
    <?php if ( $q->have_posts() ) : ?>
    
    <div class="posts">
      <?php while ( $q->have_posts() ) : $q->the_post(); ?>
        <article>
          <date><?php the_time('Y-m-d'); ?></date>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <?php the_excerpt(); ?>
        </article>
      <?php endwhile; ?>

    </div><!-- /posts -->
    <?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	
</div><!-- /wrap__inner -->	
</div><!-- .wrap -->

<?php get_footer();
