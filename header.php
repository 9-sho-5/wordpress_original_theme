<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>サイト名</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/./assets/images/favicon.ico" type="image/x-icon">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/6df94479af.js" crossorigin="anonymous"></script>

    <!-- ogp -->
    <meta property="og:url" content="<?php echo get_the_permalink(); ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="<?php echo the_title(); ?>" />
	<meta property="og:description" content="<?php get_the_content(); ?>" />
	<meta property="og:site_name" content="サイト名" />
	<meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ogp画像.〇〇" />

    <?php wp_head(); ?>
</head>
<body>

<header>
    <?php get_template_part('navigation_bar'); ?>
</header>
