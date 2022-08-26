<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>タイトル</title>
    <script>
    (function(d) {
        var config = {
        kitId: '',
        scriptTimeout: 3000,
        async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/./assets/images/favicon.ico" type="image/x-icon">

    <!-- ogp -->
    <meta property="og:url" content="<?php echo get_the_permalink(); ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="<?php echo the_title(); ?>" />
	<meta property="og:description" content="<?php get_the_content(); ?>" />
	<meta property="og:site_name" content="サイト名" />
	<meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ogp_image.png" />

    <?php wp_head(); ?>
</head>
<body>

<?php get_template_part('nav_bar'); ?>
