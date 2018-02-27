<?php
/**
 * The generic page template file.
 *
 * @package Feather
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="container mx-auto">
			<h1 class="title"><?php the_title(); ?></h1>

			<div class="content">
				<?php the_content(); ?>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>