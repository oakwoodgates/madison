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
// if ( 'comment' == isset( $_GET['c'] ) ) {
//	if ( get_comment_meta( intval( $_GET['c'] ), 'rating', true ) ) {
//		add_action( 'cmb2_init', 'cmb2_add_madison_review_metabox' );
//	}
// }
add_action( 'cmb2_init', 'cmb2_add_madison_review_metabox' );
function cmb2_add_madison_review_metabox() {

	$prefix = '_madison_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'review_meta',
		'title'        => __( '3rd Party Reviews', 'cmb2' ),
		'object_types' => array( 'comment' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' => __( 'Where did this review come from', 'cmb2' ),
		'id' => $prefix . 'review_from',
		'type' => 'radio',
		'options' => array(
			'0' => __( 'website', 'cmb2' ),
			'fiverr' => __( 'fiverr', 'cmb2' ),
			'odesk' => __( 'odesk', 'cmb2' ),
		),
	) );

}