<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width" />
		<meta name="copyright" content="Copyright Tim Poerschke" />
		<title><?php wp_title('|',true,'right'); ?><?php bloginfo('name'); ?>
		<?php
		// Seitennummer hinzuf�gen, falls n�tig
		if ( $paged >= 2 || $page >= 2 )
			echo ' / ' . sprintf( __( 'Seite %s', 'shape' ), max( $paged, $page ) );
		?>
		</title>

		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

		<!-- jQuery und andere Scripts einbinden /-->
		<script type="text/javascript" src="<?php assetsPath('javascript'); ?>/lib/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="<?php assetsPath('javascript'); ?>/lib/bootstrap.bundle.min.js"></script>

		<!-- Für Google-Ads -->

		<!-- Um AdBlocker zu erkennen -->
		<script src="<?php assetsPath('javascript'); ?>/banner-ad.js"></script>

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<!-- main-nav -->
		<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
			<a href="<?php bloginfo('url'); ?>" class="navbar-brand">
				<img id="blog-logo" src="<?php assetsPath('image'); ?>/header1.png" width="40" height="40" />
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    	<span class="navbar-toggler-icon"></span>
		  	</button>
		 	<div class="collapse navbar-collapse" id="navbarNav">
				<?php wp_nav_menu([
					'theme_location' => 'navbarMenu',
					'container' => false,
					'container_id' => 'main-nav',
					'items_wrap' => '<ul id="%1$s" class="%2$s navbar-nav">%3$s</ul>'
				]); ?>
			</div>
		</nav><!-- nav -->
		<header role="banner">
		</header><!-- header -->
		<main role="main">
			<div class="container">
