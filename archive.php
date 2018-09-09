<?php get_header(); ?>

  </div><!-- /wrap-header from header -->
  
  <div class="wrap wrap-post_header">
    <div class="inner">

    <?php if ( function_exists('bcn_display') ) : ?>
    <div class="breadcrumb">
      <?php bcn_display(); ?>
      </div>
    <?php endif; ?>
    
    <h1><?php single_cat_title(); ?></h1>
    </div>
  </div><!-- /post_header -->
  
  
  <div class="wrap wrap-content">
  <div class="inner">
  <div class="filter">

<!--<p id="filter-display"></p>-->

    <form id="form-ui">
    
    <?php 
    $terms = get_terms( array(
    'taxonomy' => 'category',
    'hide_empty' => false,
    'parent' => 5
    ) );
    ?>
    
    <h3>Ljuskälla</h3>
    <div class="option-set" data-group="color">
      <?php foreach ( $terms as $term ) : ?>
      <label for="<?php echo $term->slug; ?>">
        <input class="filters" id="<?php echo $term->slug; ?>" type="checkbox" name="filter_in" value=".category-<?php echo $term->slug; ?>">
        <?php echo $term->name; ?><br>
          </label>
      <?php endforeach; ?>
      </div>
    <?php 
    $terms = get_terms( array(
    'taxonomy' => 'category',
    'hide_empty' => false,
    'parent' => 8
    ) );
    ?>
    
    <h3>Leverantör</h3>
    <div class="option-set" data-group="size">
      <?php foreach ( $terms as $term ) : ?>
      <label for="<?php echo $term->slug; ?>">
        <input class="filters" id="<?php echo $term->slug; ?>" type="checkbox" name="filter_in" value=".category-<?php echo $term->slug; ?>">
        <?php echo $term->name; ?><br>
          </label>
      <?php endforeach; ?>
      </div>
      
      
    </form> 
    

    
  </div>
  
  <div class="products2">
    <div class="inner">
    <ul class="grid">
    
      <?php $q = new WP_Query( array('post_type' => 'product', 'orderby' => 'menu_order', 'order' => 'ASC') );?>
        <?php if ( $q->have_posts() ) : ?>
          <?php while ( $q->have_posts() ) : ?>
        		<?php $q->the_post(); ?>    
    
    
<div class="grid-sizer"></div>
  <div class="gutter-sizer"></div>
      <li <?php post_class('grid-item'); ?>>
      
        <a href="#">
          <div class="inner">

          <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail(); ?>
          <?php endif; ?>

            <h3><?php the_title(); ?></h3>
            <p class="desc">Kapslad och vandalsäker LED-armatur i slank design för takmontage i UV-stabiliserad polykarbonat. Unik enhandshantering i bägge ändar via de överkopplingsbara plintarna …</p>
            <p class="price">1250 kr</p>
            <button class="shop">Handla</button>
            <button class="comp">Jämför</button>            
          </div>
        </a>
      </li>
      
      	<?php endwhile; ?>

      <?php endif; ?>
      
      <?php wp_reset_postdata(); ?> 
      

      
    </ul>
  </div><!-- /inner -->
  </div><!-- /products -->

  </div><!-- /inner -->
  </div><!-- /wrap-content -->

<?php get_footer(); ?>
