<?php
/**
Template Name: Walking The Talk
 */
?>

<?php

get_header();
?>
    <div id="primary" class="content-area">
        <main id="profile-main" class="profile">
            <?php
                while ( have_posts() ) :
                    the_post();


                    get_template_part( 'template-parts/content', get_post_type() );

                //          the_post_navigation();
                //
                //          // If comments are open or we have at least one comment, load up the comment template.
                //          if ( comments_open() || get_comments_number() ) :
                //              comments_template();
                //          endif;

                endwhile; // End of the loop.
            ?>







        </main><!-- #main -->
    </div><!-- #primary -->
    <style>

    </style>
<?php
//get_sidebar();
get_footer();

