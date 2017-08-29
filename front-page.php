<?php get_header(); ?>

    <div class="wrap-hero-slider">
        <div class="hero-slider">
          <div class="slide-1 slide" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/images/slide-1.jpg);" >
            <div class="hero-slider__content">
              <div class="inner">
              <h2>Projekt Terra</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tempor, risus vel rhoncus interdum, risus ex placerat enim, quis lacinia neque turpis in est.</p>
              </div>
            </div>
          </div>
          
          <div class="slide-2 slide" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/images/slide-2.jpg);" >
            <div class="hero-slider__content">
              <div class="inner">
              <h2>Projekt Terra</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tempor, risus vel rhoncus interdum, risus ex placerat enim, quis lacinia neque turpis in est.</p>
              </div>
            </div>
          </div>
          
        </div>
        <div class="cover"></div>
    </div>


    <div class="wrap">
    <div class="wrap__inner">
    <div class="blocks-container">
      <ul class="blocks">
      
      <?php $q = new WP_Query( array('post_type' => 'block') ); ?>
      
      <?php if ( $q->have_posts() ) : ?>
      
      	<?php while ( $q->have_posts() ) : ?>
      		<?php $q->the_post(); ?>

        <li class="block-<?php echo $q->current_post + 1 ?> block">
        <a href="<?php echo $url['url']; ?>">

          <div class="inner">
            <div class="content">
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
            <?php $url = get_field('url') ;?>
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
