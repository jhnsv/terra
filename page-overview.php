<?php
/**
 * Template Name: Overview
 */

get_header(); ?>



<div class="wrap">
<div class="wrap__inner">

  <?php the_post(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

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


<div class="wrap">
<div class="wrap__inner">
  	 <?php
      $args = array(
          'post_type'      => 'page',
          'posts_per_page' => -1,
          'post_parent'    => $post->ID,
          'order'          => 'ASC',
          'orderby'        => 'menu_order'
       );
  	 ?>
	
      <?php $q = new WP_Query( $args ); ?>
      
      <?php if ( $q->have_posts() ) : ?>
      
      <ul class="child-pages">
      
      	<?php while ( $q->have_posts() ) : ?>
      		<?php $q->the_post(); ?>
          
          <?php if ( has_post_thumbnail() ) : ?>
        <li style="background-image: url(<?php echo get_thumbnail_url($post->ID); ?>)" class="has-image">
        <?php else : ?>
        <li>        
        
        <?php endif; ?>
        <a href="<?php echo $url['url']; ?>">

          <div class="inner">
            <div class="content">
            <h3><?php the_title(); ?></h3>
            <?php $url = get_field('url') ;?>
            <div class="read-more">Läs mer</div>
            </div>
          </div>

        </a>
        </li>

      	<?php endwhile; ?>
      
      	<?php wp_reset_postdata(); ?>
      	
      	</ul>
      
      <?php endif; ?>
</div><!-- /wrap__inner -->	
</div><!-- .wrap -->

<?php get_footer();
