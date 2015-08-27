<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package madison
 */

if ( ! is_active_sidebar( 'product-single-b' ) ) {
	return;
}
?>
<div class="mdl-cell mdl-cell--12-col mdl-grid w100 npom">
	<?php dynamic_sidebar( 'product-single-b' ); ?>
</div>