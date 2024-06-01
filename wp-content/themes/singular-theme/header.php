<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php
		$gv = singular_global_vars();
		if ( is_plugin_active( 'wordpress-seo/wp-seo.php' ) || is_plugin_active( 'wordpress-seo-premium/wp-seo-premium.php' ) ) {
			wp_title();
		} elseif ( is_object( $gv['queried_object'] ) && get_field ( 'custom_page_title', $gv['queried_object']->ID ) ) {
			echo get_field ( 'custom_page_title', $gv['queried_object']->ID ).' | ';
			bloginfo();
		} else {
			wp_title( '|', true, 'right' );
			bloginfo();
		};
		?></title>
		<?php wp_head(); ?>
		<?php include( locate_template( 'inc/analytics-head.php', false, false ) ); ?>
	</head>
	<body <?php
	$additional_classes = [];
	body_class( $additional_classes ); ?>>
		<?php include( locate_template( 'inc/analytics-body.php', false, false ) ); ?>
		<a href="#main" class="skip-main">Skip to Main Content</a>
    <div id="page">
      <header id="header">
				<div class="wrap">
	        <?php include( locate_template( 'templates/logo.php', false, false ) ); ?>
	        <?php
					wp_nav_menu( array(
						'menu' => 'main-menu',
						'menu_class' => 'menu',
						'container' => 'nav',
	          'container_id' => 'navigation'
					) );
					?>
					<button id="mm-trigger" aria-label="Mobile Menu Toggle">
						<span class="trigger-title">Mobile Menu</span>
						<span class="trigger-wrapper">
							<span class="trigger-container">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
							</span>
						</span>
					</button>
				</div>
      </header>
			<?php include( locate_template( 'templates/banner.php', false, false ) ); ?>
      <div id="main" role="main">
				<div id="main-wrap">
