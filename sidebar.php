<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package madison
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
	<div class="mdl-grid npom">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
</div>
