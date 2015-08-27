<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product, $woocommerce_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) ) {
	$woocommerce_loop['loop'] = 0;
}

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) ) {
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );
}

// Ensure visibility
if ( ! $product || ! $product->is_visible() ) {
	return;
}

// Increase loop count
$woocommerce_loop['loop']++;

// Extra post classes
$classes = array();
if ( 0 == ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 == $woocommerce_loop['columns'] ) {
//	$classes[] = 'first';
}
if ( 0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns'] ) {
//	$classes[] = 'last';
}
$classes[] = 'mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--2dp';

$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'shop_catalog' );
$url = $thumb['0'];


?>
<?php if ( is_archive() ) : ?>
	<li <?php // post_class( $classes ); ?> class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-card mdl-shadow--2dp product-card">
<?php elseif ( is_cart() ) : ?>
	<li <?php // post_class( $classes ); ?> class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--2dp product-card">
<?php else : ?>
	<li <?php // post_class( $classes ); ?> class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--3-col-desktop mdl-card mdl-shadow--2dp product-card">
<?php endif; ?>

	<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>
	<a class="mdl-card__media" href="<?php the_permalink() ?>">
    <img src="<?php echo $url; ?>" />
  	</a>
	<a class="mdl-card__title" href="<?php the_permalink() ?>">
			<h3 class="mdl-card__title-text">
			<?php 
				if ( get_post_meta( get_the_ID(), '_madison_product_archive_title', true ) ) {
					echo get_post_meta( get_the_ID(), '_madison_product_archive_title', true );
				} else {
					the_title();
				}
			?></h3>

		<?php
			/**
			 * woocommerce_before_shop_loop_item_title hook
			 *
			 * @hooked woocommerce_show_product_loop_sale_flash - 10
			 * @hooked woocommerce_template_loop_product_thumbnail - 10
			 * @unhooked woocommerce_template_loop_product_thumbnail - 10
			 */
			do_action( 'woocommerce_before_shop_loop_item_title' );
		?>

	</a>

	<div class="mdl-card__supporting-text mdl-card--expand">

		<?php 
		if ( get_post_meta( get_the_ID(), '_madison_product_archive_description', true ) ) {
			echo get_post_meta( get_the_ID(), '_madison_product_archive_description', true );
		} else {
			the_excerpt();
		}
		 ?>
		<?php
			/**
			 * woocommerce_after_shop_loop_item_title hook
			 *
			 * @hooked woocommerce_template_loop_rating - 5
			 * @unhooked woocommerce_template_loop_rating - 5			 
			 * @hooked woocommerce_template_loop_price - 10
			 * @unhooked woocommerce_template_loop_price - 10
			 */
			do_action( 'woocommerce_after_shop_loop_item_title' );
		?>

	</div>

	<div class="mdl-card__actions mdl-card--border">

		<?php

			woocommerce_template_loop_price();

			/**
			 * woocommerce_after_shop_loop_item hook
			 *
			 * @hooked woocommerce_template_loop_add_to_cart - 10
			 */
			do_action( 'woocommerce_after_shop_loop_item' );

		?>

	</div>

	<div class="mdl-card__menu">
		<?php woocommerce_template_loop_rating(); ?>
	</div>

</li>

