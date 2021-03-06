<?php
/**
 * The template for displaying all single posts.
 *
 * @package madison
 */

get_header(); ?>

	<div class="mdl-cell mdl-cell--8-col">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>


	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
