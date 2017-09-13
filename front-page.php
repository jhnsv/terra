<?php get_header(); ?>

    <?php $q = new WP_Query( array('post_type' => 'slide', 'orderby' => 'menu_order', 'order' => 'ASC' ) ); ?>
      
    <?php if ( $q->have_posts() ) : ?>

    <div class="wrap-hero-slider">
        <div class="hero-slider">
        
      	<?php while ( $q->have_posts() ) : ?>
      		<?php $q->the_post(); ?>
          <div class="slide">
          <?php the_post_thumbnail(); ?>
            <div class="hero-slider__content">
              <div class="inner">
              <div class="really_inner">
              <h2><?php the_title(); ?></h2>
              <?php the_content(); ?>
              </div>
              </div>
            </div>
          </div>

      	<?php endwhile; ?>
      	<?php wp_reset_postdata(); ?>
          
        </div><!-- /hero-slider -->
    </div><!-- /wrap-hero-slider -->
    <?php endif; ?>


    <div class="wrap">
    <div class="wrap__inner">
    <div class="blocks-container">
      <ul class="blocks">
      
      <?php $q = new WP_Query( array('post_type' => 'block', 'post_per_page' => 6 ) ); ?>
      
      <?php if ( $q->have_posts() ) : ?>
      
      	<?php while ( $q->have_posts() ) : ?>
      		<?php $q->the_post(); ?>

        <li class="block-<?php echo $q->current_post + 1 ?> block">
        <?php $url = get_field('url') ;?>
        <a href="<?php echo $url['url']; ?>">

          <div class="inner">
            <div class="content">
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
            <div class="read-more">Läs mer</div>
            </div>
          </div>

        </a>
        </li>

      	<?php endwhile; ?>
      
      	<?php wp_reset_postdata(); ?>
      
      <?php endif; ?>

      </ul>
    </div>

</div><!-- /wrap__inner -->
</div><!-- /wrap -->


<?php get_footer();
