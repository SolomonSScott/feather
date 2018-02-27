<?php
/**
 * The Index.
 *
 * @package Feather
 */
get_header(); ?>

<div class="container mx-auto">
	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<div>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			</div>

		<?php endwhile; ?>

		<?php else : ?>
			<h2>There are no posts.</h2>
	<?php endif; ?>
</div>

<?php get_footer(); ?>
