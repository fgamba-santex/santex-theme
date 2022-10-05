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
	<link rel="profile" href="https://gmpg.org/xfn/11">

<!--        <script src="--><?php //echo get_template_directory_uri()."/js/jquery.min.js"?><!--"></script>-->

<!--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">-->

<!--    <link href="--><?php //echo get_template_directory_uri()."/css/bootstrap.min.css"?><!--" rel="stylesheet">-->
<!--    <link rel="stylesheet" href="--><?php //echo get_template_directory_uri()."/css/jquery.bxslider.css"?><!--">-->


    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-958299033"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'AW-958299033');
    </script>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()."/css/blog.min.css"?>">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

    <header id="masthead" class="site-header" role="banner">
        <div class="header-main header-blog" id="header-main">

            <?php if ( get_header_image() ) : ?>
                <h1 class="site-title">
                    <a id="site-logo" href="<?php echo esc_url( home_url( '/#home-container' ) ); ?>" rel="home">
                        <img src="<?php header_image(); ?>" width="100px" height="20px" alt="">
                    </a>

                </h1>
            <?php else: ?>
                <h1 class="site-title">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        <?php bloginfo( 'name' ); ?>
                    </a>
                </h1>



            <?php endif; ?>

            <nav id="primary-navigation" class="site-navigation primary-navigation visible-xs" role="navigation">
                <h1 id="menu-toggle" class="menu-toggle"> <i id="menu-toggle-icon" class="fas icon_menu_mobile"></i></h1>
                <!-- <a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'santex' ); ?></a> -->
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'menu-1',
                    'menu_class' => 'nav-menu'
                ) );

                ?>


            </nav>
            <div class="collapse navbar-collapse navbar-blog-container">
                <ul class="nav navbar-nav navbar-right navbar-blog">
                    <li class="dropdown dropdown-topic">
                        <a href="#" class="dropdown-toggle dropdown-toggle-topic" id="dropdown-toggle-topic"  data-toggle="collapse" data-target="#collapseTopics" aria-expanded="false" aria-controls="collapseTopics">
                            <i class="fas santex-icon-hashtag"></i><text class="hidden-xs dropdown-text">TOPICS</text> <i class="fas fa-angle-down hidden-xs"></i></a>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle dropdown-toggle-search" id="dropdown-toggle-search" data-toggle="collapse" data-target="#collapseSearch" aria-expanded="false" aria-controls="collapseSearch">
                            <text class="hidden-xs dropdown-text">SEARCH</text> <i class="fas santex-icon-search"></i></a>
                    </li>
                </ul>
            </div>

        </div>
    </header><!-- #masthead -->



	<div id="content" class="site-content">

        <div style="width: 100%; background-color: #f9f9f9">
            <div id="contenido-header-blog">

                <div class="collapse" id="collapseTopics">

                    <ul class="topics">


                        <?php
                        global $cat_name;
                        if(is_category()) {
                            $cat_id = get_the_category()[0]->cat_ID;
                            ?>
                            <li><a class="topic-link" data-id="<?php echo $cat_id?>" href="<?php echo get_site_url() . "/blog"; ?>">ALL TOPICS</a></li>

                            <?php
                        } else {
                            ?>
                            <li><a class="topic-link active-topic-link" href="<?php echo get_site_url() . "/blog"; ?>">ALL TOPICS</a></li>

                            <?php
                        }

                        $topic_categories = [
                                "software-development",
                                "agile",
                                "devops",
                                "full-stack-development",
                                "artificial-intelligence",
                                "mobile-development"
                        ];
                        $categories = get_categories( array(
                            'orderby' => 'name',
                            'order'   => 'ASC',
                            'number' => 8,
                        ) );

                        foreach( $topic_categories as $category_slug ) {

                            $category = get_category_by_slug($category_slug);
                            $active = "";
                            if($cat === $category->term_id) {
                                $active = "active-topic-link";
                                $cat_name = $category->name;
                            }
                            $category_link = sprintf(
                                '<li><a class="topic-link %s" data-id="%s" href="%s">#%s</a></li>',
                                $active,
                                $category->term_id ,
                                esc_url( get_category_link( $category->term_id ) ),
                                esc_html( strtoupper($category->name) )
                            );
                            echo $category_link;
                        }
                            ?>

                    </ul>

                </div>

            </div>

            <?php
            get_search_form();
            ?>

            <?php
           if(is_category()) {
            ?>
            <div class="collapse in" id="collapseSelectedTopic">
                <div id="selected-topic" class="form-group has-feedback ">
                    <div  id="selected-topic-input">
                        <?php echo $cat_name;?>
                    </div>
                    <span id="topic-close-button" class="form-control-clear form-control-feedback">
                        <a href="<?php echo get_site_url()."/blog";?>"><i class="fas fa-times"></i></a>
                    </span>
                </div>
            </div>


            <?php }?>
        </div>




        <style>


        </style>

<script>

    ( function( $ ) {
        $(document).ready(function() {


            $( "#dropdown-toggle-search" ).click(function() {
                $('#collapseTopics').collapse('hide');
                $('#collapseSelectedTopic').collapse('hide');
                $('#dropdown-toggle-topic').removeClass('arrow');

                if($(this).hasClass('arrow')) {
                    $(this).removeClass('arrow');
                    $('#collapseSelectedTopic').collapse('show');
                } else {
                    $(this).addClass('arrow');
                }

            });

            $( "#dropdown-toggle-topic" ).click(function() {
                $('#collapseSearch').collapse('hide');
                $('#dropdown-toggle-search').removeClass('arrow');
                $('#collapseSelectedTopic').collapse('hide');
                if($(this).hasClass('arrow')) {
                    $(this).removeClass('arrow');
                    $('#collapseSelectedTopic').collapse('show');
                    if($('#collapseSearch').hasClass('toggleable')) {
                        $('#collapseSearch').collapse('show');
                    }

                } else {
                    $(this).addClass('arrow');
                }
            });


            $('.has-clear input[type="text"]').on('input propertychange', function() {
                var $this = $(this);
                var visible = Boolean($this.val());
                $this.siblings('.form-control-clear').toggleClass('hidden', !visible);
            }).trigger('propertychange');

            $('#search-close-button').click(function() {
                $(this).siblings('input[type="text"]').val('')
                    .trigger('propertychange').focus();

            });

        });
    } )( jQuery );





</script>