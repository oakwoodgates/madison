<?php
/**
 * Woocommerce things and stuff
 */

/**
 * Add theme support
 * @link http://docs.woothemes.com/document/declare-woocommerce-support-in-third-party-theme/
 */
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}


/**
 * Woocommerce wrappers
 * @link http://docs.woothemes.com/document/third-party-custom-theme-compatibility/
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
// add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
// add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

/**
 * woocommerce_before_shop_loop hook
 *
 * @hooked woocommerce_result_count - 20
 * @hooked woocommerce_catalog_ordering - 30
 */
// do_action( 'woocommerce_before_shop_loop' );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );


/**
 * woocommerce_before_shop_loop_item_title hook
 *
 * @hooked woocommerce_show_product_loop_sale_flash - 10
 * @hooked woocommerce_template_loop_product_thumbnail - 10
 */
// do_action( 'woocommerce_before_shop_loop_item_title' );
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );


/**
 * woocommerce_after_shop_loop_item_title hook
 *
 * @hooked woocommerce_template_loop_rating - 5
 * @hooked woocommerce_template_loop_price - 10
 */
// do_action( 'woocommerce_after_shop_loop_item_title' );
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );


/**
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
// do_action( 'woocommerce_single_product_summary' );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );


/**
 * Unset product tabs
 *
 * @link http://docs.woothemes.com/document/editing-product-data-tabs/
 */
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

    unset( $tabs['description'] );      	// Remove the description tab
    unset( $tabs['reviews'] ); 			// Remove the reviews tab
    unset( $tabs['additional_information'] );  	// Remove the additional information tab

    return $tabs;

}

/**
 * ftw
 */
add_filter( 'woocommerce_billing_fields', 'patricks_billing_fields', 20 );
function patricks_billing_fields( $fields ) {
//	unset( $fields['billing_country'] );
//	unset( $fields['billing_first_name'] );
//	unset( $fields['billing_last_name'] );
	unset( $fields['billing_company'] );
	unset( $fields['billing_address_1'] );
	unset( $fields['billing_address_2'] );
	unset( $fields['billing_city'] );
	unset( $fields['billing_state'] );
	unset( $fields['billing_postcode'] );
	unset( $fields['billing_phone'] );
	return $fields;
 }