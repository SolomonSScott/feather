<?php
/**
 * The header.
 *
 * @package Feather
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<nav class="flex items-center justify-between p-6">
	<div>
		<a href="<?php echo site_url(); ?>" aria-label="<?php echo bloginfo( 'name' ); ?>" title="<?php echo bloginfo( 'name' ); ?>">
			<?php echo bloginfo( 'name' ); ?>
		</a>
		<button data-target="primary-menu">
			<span></span>
			<span></span>
			<span></span>
		</button>
	</div>
	<?php
		if ( has_nav_menu( 'primary' ) ) {
			wp_nav_menu( [
				'theme_location'  => 'primary',
				'menu_class'      => 'navbar-end',
				'container'       => 'div',
				'container_class' => 'navbar-menu',
				'container_id'    => 'primary-menu'
			] );
		}
	?>
</nav>
