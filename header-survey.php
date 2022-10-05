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


    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()."/walking-the-talk.css"?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()."/css/jrange.css"?>">
    <script  src="<?php echo get_template_directory_uri()."/js/jrange.min.js"?>"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

    <header id="masthead" class="site-header" role="banner">
        <div class="header-main" style="padding-top: 13px;">

<!--            --><?php //if ( get_header_image() ) : ?>
<!--                <h1 class="site-title">-->
<!--                    <a id="site-logo" href="--><?php //echo esc_url( home_url( '/#home-container' ) ); ?><!--" rel="home">-->
<!--                        <img src="--><?php //header_image(); ?><!--" width="200px" height="40px" alt="">-->
<!--                    </a>-->
<!--                </h1>-->
<!--            --><?php //else: ?>
<!--                <h1 class="site-title">-->
<!--                    <a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">-->
<!--                        --><?php //bloginfo( 'name' ); ?>
<!--                    </a>-->
<!--                </h1>-->
<!---->
<!---->
<!---->
<!--            --><?php //endif; ?>
            <img src="<?php header_image(); ?>" width="200px" height="40px" alt="">



        </div>

    </header><!-- #masthead -->

    <div id="content" class="site-content">


<style>
    #content {
        padding-top: 50px;
    }
    #site-logo {
        margin:0;
    }
    #site-logo img {
        max-width: 100%;
        max-height: 100%;
    }
    .header-main {
        width:200px;
        margin-right: auto;
        margin-left: auto;
        min-width: 200px;
        padding-left: 0px;
        padding-top: 13px;
        padding-right: 0px

    }


</style>
