<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package santex
 */

get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <?php
            get_template_part('template-parts/landing','home');
            get_template_part('template-parts/landing','services');
            get_template_part('template-parts/landing','relationships');
            get_template_part('template-parts/landing','nps');
            get_template_part('template-parts/landing','community');
            get_template_part('template-parts/landing','social');
            get_template_part('template-parts/landing','contact');
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
