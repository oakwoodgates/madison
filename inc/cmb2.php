<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB2 directory)
 *
 * Be sure to replace all instances of 'yourprefix_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category YourThemeOrPlugin
 * @package  Demo_CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2
 */
add_action( 'cmb2_init', 'cmb2_add_madison_product_metabox' );
function cmb2_add_madison_product_metabox() {

	$prefix = '_madison_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'product_meta',
		'title'        => __( 'Metabox Title', 'cmb2' ),
		'object_types' => array( 'product' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' => __( 'Subtitle', 'cmb2' ),
		'id' => $prefix . 'product_subtitle',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Archive Title', 'cmb2' ),
		'id' => $prefix . 'product_archive_title',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Archive Description', 'cmb2' ),
		'id' => $prefix . 'product_archive_description',
		'type' => 'textarea',
	) );
}

add_action( 'cmb2_init', 'cmb2_add_madison_product_faq' );
function cmb2_add_madison_product_faq() {

	$prefix = '_madison_faq_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'tab',
		'title'        => __( 'FAQ Tab', 'cmb2' ),
		'object_types' => array( 'product' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' => __( 'Enable FAQ Tab?', 'cmb2' ),
		'id' => $prefix . 'enable',
		'type' => 'checkbox',
		'options' => array(
			'1' => __( 'enable', 'cmb2' ),
		),
	) );

	$group_field_id = $cmb->add_field( array(
	    'id'          => $prefix . 'group',
	    'type'        => 'group',
	    'description' => __( 'Generates reusable form entries', 'cmb' ),
	    'options'     => array(
	        'group_title'   => __( 'Entry {#}', 'cmb' ), // since version 1.1.4, {#} gets replaced by row number
	        'add_button'    => __( 'Add Another Entry', 'cmb' ),
	        'remove_button' => __( 'Remove Entry', 'cmb' ),
	        'sortable'      => true, // beta
	    ),
	) );

	// Id's for group's fields only need to be unique for the group. Prefix is not needed.
	$cmb->add_group_field( $group_field_id, array(
	    'name' => 'Question',
	    'id'   => $prefix . 'question',
	    'type' => 'text',
	    // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	$cmb->add_group_field( $group_field_id, array(
	    'name' => 'Answer',
	    'description' => 'Write a short description for this entry',
	    'id'   => $prefix . 'answer',
	    'type' => 'textarea_small',
	) );

}