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
    <h3>Kategori</h3>
    <form>
      <label for="plask"><input class="filters" id="plask" type="checkbox" name="vehicle" value="cat-1">Cat 1</label>
    </form> 
    
    
    
<div id="form-ui">
<p>
  <label><input type="checkbox" value=".category-kategori-1" /> 1</label>
  <label><input type="checkbox" value=".category-kategori-2" /> 2</label>
  <label><input type="checkbox" value=".category-kategori-3" /> 3</label>
  <label><input type="checkbox" value=".category-uncategorized" /> un</label>
</p>
</div>
    
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
