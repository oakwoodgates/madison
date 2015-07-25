<?php
/**
 * Comments link for post archives
 */

function madison_comments() {

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
//		echo '<span class="comments-link">';
//		comments_popup_link( esc_html__( '0', 'madison' ), esc_html__( '1', 'madison' ), esc_html__( '%', 'madison' ) );
//		echo '</span>';
		comments_popup_link( '<div class="material-icons mdl-badge" data-badge="0">comments</div>', '<div class="material-icons mdl-badge" data-badge="1">comments</div>', '<div class="material-icons mdl-badge" data-badge="%">comments</div>' );

	}

}

/**
 * Tags links for post archives
 */
function madison_tags() {

	if ( 'post' == get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'madison' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'madison' ) . '</span>', $tags_list ); // WPCS: XSS OK.
		}
	}

}

/**
 * Catorgies links for post archives
 */
function madison_categories() {

	if ( 'post' == get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'madison' ) );
		if ( $categories_list && madison_categorized_blog() ) {
			printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'madison' ) . '</span>', $categories_list ); // WPCS: XSS OK.
		}

	}

}




