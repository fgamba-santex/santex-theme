<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package santex
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-958299033"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'AW-958299033');
    </script>
    <script src="https://kit.fontawesome.com/4453854fa3.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
    
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<div id="content" class="site-content">



