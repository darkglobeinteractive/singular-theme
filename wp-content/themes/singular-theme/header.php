<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php
		$gv = singular_global_vars();
		if ( get_field ( 'custom_page_title', $gv['queried_object']->ID ) ) {
			echo get_field ( 'custom_page_title', $gv['queried_object']->ID ).' | ';
		} else {
			wp_title( '|', true, 'right' );
		};
		bloginfo();
		?></title>
		<?php wp_head(); ?>
	</head>
	<body <?php
	$additional_classes = [];
	if ( is_active_sidebar( 'primary' ) ) {
	  array_push ( $additional_classes, 'sidebar' );
	}
	body_class( $additional_classes ); ?>>
    <div id="page">
      <header id="header">
        <a href="/" class="logo"><?php bloginfo(); ?></a>
        <?php
				wp_nav_menu( array(
					'menu' => 'main-menu',
					'menu_class' => 'menu',
					'container' => 'nav',
          'container_id' => 'navigation'
				) );
				?>
				<a href="#mobile-menu" id="mm-trigger">
					<span class="trigger-wrapper">
						<span class="trigger-container">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</span>
					</span>
				</a>
      </header>
			<?php
				include( locate_template( 'templates/banner.php', false, false ) );
			?>
      <div id="main">
				<div id="main-wrap">
