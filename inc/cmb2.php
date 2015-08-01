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
		'name' => __( 'Archive Description', 'cmb2' ),
		'id' => $prefix . 'product_archive_description',
		'type' => 'textarea',
	) );

}