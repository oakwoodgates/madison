<?php
/**
 * Template Name: Test Page
 *
 * @package WordPress
 * @subpackage madison
 * @since 1.0.0
 */
get_header(); ?>
<div class="mdl-cell mdl-cell--12-col mdl-grid npom w100">
	<div class="mdl-cell mdl-cell--8-col">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

	</div>

	<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
