<?php
/**
 * The Index.
 *
 * @package Feather
 */
get_header(); ?>

<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<div>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		</div>

	<?php endwhile; ?>

	<?php else : ?>
		<h2>There are no posts.</h2>
<?php endif; ?>

<?php get_footer(); ?>
