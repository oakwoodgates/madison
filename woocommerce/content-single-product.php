<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * Override this template by copying it to yourtheme/woocommerce/content-single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<?php
	/**
	 * woocommerce_before_single_product hook
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );
	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>

<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class( 'mdl-grid npom' ); ?>>
    <div class="mdl-cell mdl-cell--12-col">
		<?php woocommerce_template_single_title(); ?>
	</div>
	<div class="mdl-cell mdl-cell--7-col mdl-cell--5-col-tablet mdl-card mdl-shadow--2dp">
		<div class="mdl-card__media">
			<?php
			/**
			 * woocommerce_before_single_product_summary hook
			 *
			 * @hooked woocommerce_show_product_sale_flash - 10
			 * @hooked woocommerce_show_product_images - 20
			 */
			do_action( 'woocommerce_before_single_product_summary' );
			?>
		</div>
		<div class="mdl-card__title">
			<h2 class="mdl-card__title-text"><?php echo get_post_meta( get_the_ID(), '_madison_product_subtitle', true ); ?></h2>
		</div>
		<div class="mdl-card__supporting-text">
			<span class="mdl-typography--font-light mdl-typography--subhead"><?php woocommerce_template_single_excerpt(); ?></span>
		</div>
		<div class="mdl-card__actions">
			<?php // woocommerce_template_single_rating(); 
		//	woocommerce_template_single_price(); ?>
		</div>
	</div>

	<div class="mdl-cell mdl-cell--4-col mdl-cell--3-col-tablet mdl-cell--5-col-desktop mdl-card mdl-shadow--2dp order-form">
		<div class="mdl-card__media">
		</div>
		<div class="mdl-card__title">Order Form
		</div>
		<div class="mdl-card__supporting-text">
			<?php woocommerce_template_single_add_to_cart(); ?>
		</div>
		<div class="mdl-card__actions">
		</div>
	</div>

	<div class="mdl-grid npom">
		<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--7-col-desktop mdl-card mdl-shadow--2dp">
			<div class="mdl-card__media">
			</div>
			<div class="mdl-card__title">More Info
			</div>
			<div class="mdl-card__supporting-text">
				<?php 
				the_content();
				?>
			</div>
			<div class="mdl-card__actions">
			</div>
		</div>

					<?php comments_template(); ?>

	</div>
<?php //	<div class="summary entry-summary"> ?>
		<?php
			/**
			 * Madison unhooks all of these. Hook remains for other plugins.
			 *
			 * woocommerce_single_product_summary hook
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 */
			do_action( 'woocommerce_single_product_summary' );
		?>

<?php //	</div><!-- .summary --> ?>

	<?php
		/**
		 * woocommerce_after_single_product_summary hook
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
	//	do_action( 'woocommerce_after_single_product_summary' );
	?>

	<meta itemprop="url" content="<?php the_permalink(); ?>" />

</div><!-- #product-<?php the_ID(); ?> -->

<?php do_action( 'woocommerce_after_single_product' ); ?>