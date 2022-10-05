<?php
/**
 * The template for displaying Santex Team Home Page
 *
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
