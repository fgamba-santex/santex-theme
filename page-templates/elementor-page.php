<?php
/**
 * Template Name: Elementor
 */
?>


<?php

get_header('elementor');
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php
            while ( have_posts() ) :
                the_post();
                ?>


                <div id="content-container" class="section-container">
                    <?php the_content()?>
                </div>

<?php

            endwhile; // End of the loop.
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
//get_sidebar();
get_footer('elementor');
