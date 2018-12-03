<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Christine_Steiner
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/stylesheet.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php if( get_field('hintergrund') ): ?>
		<div class="background" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/Element_<?php the_field('hintergrund'); ?>.svg);"></div>
	<?php else: ?>
		<div class="background" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/Element_01.svg;"></div>
	<?php endif; ?>



<div class="header">
	<a href="<?php echo get_home_url(); ?>"/>
        	<img src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg" alt="Christine Steiner Logo">
	</a>
    </div>
    <div class="wrapper">

        <div class="nav">
			<div class="burger">
				<div></div>
				<div></div>
				<div></div>
				<div></div>
			</div>
		<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>

        </div>
