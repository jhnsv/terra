<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>



		<footer id="colophon" class="site-footer" role="contentinfo">
      <div class="inner">
        <div class="inner__inner">
        <h2>
<b>We create everyday essentials</b> to make people's lives more liveable and inspiring.
Essential ingredients. Essential protection. Essential color.
        </h2>
        <?php wp_nav_menu( array(
        		'theme_location' => 'footer',
        		'menu_id'        => 'footer-menu',
        		'menu_class'     => 'footer-navigation',
        		'container'      => false
        	) ); ?>
        <div class="legal">
          © <?php date('Y'); ?> Akzo Nobel N.V.
        </div>
        </div>
      </div>
		</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
