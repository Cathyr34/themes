
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">

            <a  class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
            
            <button id="site-navigation_hamburger_icon" onclick="showResponsiveMenu()">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>
            
            <div id="mesliens">
            <img class="page_menu" src="wp-content/themes/foce-child/images_koukaki/logo.png" alt="logo">

<img class="Jaakuna" src="wp-content/themes/foce-child/images_koukaki/Jaakuna-12.png" alt="Jaakuna-1">
<img class="Kawaneko" src="wp-content/themes/foce-child/images_koukaki/Kawaneko2.png" alt="Kawaneko">
<img class="Tenshi" src="wp-content/themes/foce-child/images_koukaki/Tenshi-12.png" alt="Tenshi-1">

<img class="Sunflow fleurs" src="wp-content/themes/foce-child/images_koukaki/Sunflow.png" alt="Sunflow">
<img class="flower fleurs" src="wp-content/themes/foce-child/images_koukaki/flower.png" alt="flower">
<img class="orchidee fleurs" src="wp-content/themes/foce-child/images_koukaki/orchidee.png" alt="orchidee">
<img class="Hibiscus fleurs" src="wp-content/themes/foce-child/images_koukaki/Hibiscus.png" alt="Hibiscus">
<img class="random_flower fleurs" src="wp-content/themes/foce-child/images_koukaki/random_flower.png" alt="random_flower">
                <ul>
                    <li><a href="#story">Histoire</a></li>
                    <li><a href="#characters">Personnages</a></li>
                    <li><a href="#place">Lieu</a></li>
                    <li><a href="#studio">Studio Koukaki</a></li>
                </ul>
            </div>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
