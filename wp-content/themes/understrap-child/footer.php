<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
 $container = get_theme_mod( 'understrap_container_type' );
?>

<?php // get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<footer class="footer" id="footer">
  <div class="container">
	<div class="row">
	 <div class="col-lg-3">
	   <?php if ( is_active_sidebar( 'custom-side-bar' ) ) : ?>
        <?php dynamic_sidebar( 'custom-side-bar' ); ?>
      <?php endif; ?>
	</div>
	 <div class="col-lg-3">
	   <?php if ( is_active_sidebar( 'custom-side-bar-2' ) ) : ?>
        <?php dynamic_sidebar( 'custom-side-bar-2' ); ?>
      <?php endif; ?>
	</div>
	 <div class="col-lg-3">
	   <?php if ( is_active_sidebar( 'custom-side-bar-3' ) ) : ?>
        <?php dynamic_sidebar( 'custom-side-bar-3' ); ?>
      <?php endif; ?>
	</div>
	 <div class="col-lg-3">
	   <?php if ( is_active_sidebar( 'custom-side-bar-4' ) ) : ?>
        <?php dynamic_sidebar( 'custom-side-bar-4' ); ?>
      <?php endif; ?>
	</div>	
    </div>  
  </div>
</footer>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

