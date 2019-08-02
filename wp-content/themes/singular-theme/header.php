<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title( '|', true, 'right' ); bloginfo(); ?></title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
    <div id="page">
      <header id="header">
        <a href="/" class="logo"><?php bloginfo(); ?></a>
        <?php
				wp_nav_menu( array(
					'menu' => 'main-menu',
					'menu_class' => 'menu',
					'container' => 'nav',
          'container_class' => 'navigation'
				) );
				?>
      </header>
      <div id="content">
