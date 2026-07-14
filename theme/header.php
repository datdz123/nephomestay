<?php
/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package qd
 */

$theme_uri = get_template_directory_uri();
$is_home = is_front_page() || is_home();
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-surface text-on-surface'); ?>>

<?php wp_body_open(); ?>

<!-- Header / TopNavBar -->
<header class="fixed-landing-header fixed top-0 left-0 w-full z-50 flex justify-between items-center px-margin-mobile md:px-margin-desktop py-2 md:py-3 bg-primary/95 backdrop-blur-md shadow-sm">
	<div class="flex items-center gap-2">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="block">
			<img alt="Nếp Homestay Logo" class="h-20 md:h-24 w-auto object-contain transition-all duration-300" src="<?php echo esc_url( $theme_uri . '/assets/images/stitch-design/logo.png' ); ?>"/>
		</a>
	</div>
	<nav class="hidden md:flex items-center gap-8">
		<a class="font-label-caps text-label-caps <?php echo $is_home ? 'text-secondary-container border-b-2 border-secondary-container pb-1' : 'text-on-primary/80 hover:text-on-primary transition-colors'; ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>">Trang chủ</a>
		<a class="font-label-caps text-label-caps <?php echo is_page( 'dat-phong' ) || is_page_template( 'template-rooms.php' ) || is_page_template( 'template-room-detail.php' ) ? 'text-secondary-container border-b-2 border-secondary-container pb-1' : 'text-on-primary/80 hover:text-on-primary transition-colors'; ?>" href="<?php echo esc_url( home_url( '/dat-phong/' ) ); ?>">Phòng nghỉ</a>
		<a class="font-label-caps text-label-caps <?php echo is_page( 'dat-do-an' ) || is_page_template( 'template-food.php' ) || is_page_template( 'template-food-detail.php' ) ? 'text-secondary-container border-b-2 border-secondary-container pb-1' : 'text-on-primary/80 hover:text-on-primary transition-colors'; ?>" href="<?php echo esc_url( home_url( '/dat-do-an/' ) ); ?>">Đặt đồ ăn</a>
		<a class="font-label-caps text-label-caps <?php echo is_page( 'lien-he' ) || is_page_template( 'template-contact.php' ) ? 'text-secondary-container border-b-2 border-secondary-container pb-1' : 'text-on-primary/80 hover:text-on-primary transition-colors'; ?>" href="<?php echo esc_url( home_url( '/lien-he/' ) ); ?>">Vị trí &amp; Liên hệ</a>
	</nav>
	<a class="bg-secondary-container text-on-secondary-container px-6 py-2.5 rounded-full font-label-caps text-label-caps hover:bg-secondary hover:text-on-secondary transition-all duration-300 active:scale-95 inline-block" href="<?php echo esc_url( home_url( '/lien-he/' ) ); ?>">Liên hệ đặt phòng</a>
</header>

<?php if ( ! $is_home ) : ?>
	<div class="h-24 md:h-28"></div>
<?php endif; ?>