<?php
/**
 * Template part for displaying posts.
 *
 * @package madison
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'madison-updates mdl-card mdl-shadow--2dp grid-item madison-card-event' ); ?>>
	<header class="entry-header mdl-card__title mdl-card--expand mdl-color--teal-300">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content mdl-card__supporting-text">
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php madison_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>	
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'madison' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'madison' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
      Read More
    </a>
    <div class="mdl-layout-spacer"></div>
    <div class="material-icons mdl-badge" data-badge="1">comment</div>
    <i class="material-icons">favorite</i>
    <i class="material-icons">share</i>
	</footer><!-- .entry-footer -->
	  <div class="mdl-card__menu">
	    <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
	      <i class="material-icons">share</i>
	    </button>
	  </div>	
</article><!-- #post-## -->