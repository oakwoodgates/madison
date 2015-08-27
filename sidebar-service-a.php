<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package madison
 */

if ( ! is_active_sidebar( 'product-single-a' ) ) {
	return;
}
?>

	<?php dynamic_sidebar( 'product-single-a' ); ?>
