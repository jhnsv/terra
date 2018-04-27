<?php
/**
 * Template Name: FAQ
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
      
    <?php $a = array( 'post_type' => 'faq', 'posts_per_page' => -1 ); ?>
    <?php $q = new WP_Query( $a ); ?>
    
    <?php if ( $q->have_posts() ) : ?>
    
    <p><!-- faq -->
      <?php while ( $q->have_posts() ) : $q->the_post(); ?>


          <a href="#faq-item-<?php echo $q->current_post; ?>"><?php the_title(); ?></a><br>
          <?php $the_content .= "<h3 id='faq-item-".$q->current_post."'>" . get_the_title() . "</h3>"; ?>
          
          <?php $the_content .= apply_filters('the_content',get_the_content( $more_link_text, $stripteaser, $more_file )); ?>

      <?php endwhile; ?>

    </p><!-- /faq -->
    
    <div class="q-and-a">
    <?php echo $the_content; ?>
    </div>
    
    <?php endif; ?>
      
      
    </article>

		</main><!-- #main -->
	</div><!-- #primary -->
	
</div><!-- /wrap__inner -->	
</div><!-- .wrap -->

<?php get_footer();
