<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
	<!-- SEO -->
	<meta name="description" content="Uma iniciativa de mostrar bandas clássicas, esquecidas, novas, ou pouco conhecidas ao público" />

	<!-- Open Graph -->
  <meta property="og:title" content="<?php wp_title('|',true,'right'); ?><?php bloginfo('name'); ?>" />
  <meta property="og:type" content="<?php og_type(); ?>"/>
  <meta property="og:description" content="Uma iniciativa de mostrar bandas clássicas, esquecidas, novas, ou pouco conhecidas ao público" />
  <meta property="og:url" content="<?php og_url(); ?>"/>
  <meta property="og:image" content="<?php og_image(); ?>" />
  <meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
  <meta property="og:locale" content="pt_BR" />

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title('|',true,'right'); ?><?php bloginfo('name'); ?></title>

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
	
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css"/>
	<link href='http://fonts.googleapis.com/css?family=Rock+Salt|Architects+Daughter|Open+Sans:400,300,600' rel='stylesheet' type='text/css'>

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon.ico" type="image/x-icon" />


</head>
<body <?php body_class(); ?>>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<div class="wrap">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div>
		</div>
	</header><!-- #masthead -->


	<div class="content-area">
		<div class="wrap">