<?php
/*
Template Name: Search Page
*/
?>
<?php


get_header('blog');

?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div  class="section-container search-container ">

            <div class="row">
                <div class="col-md-12"></div>
            </div>


            <?php if ( have_posts() ) : ?>



                <div id="category-slider" class="row category-list">
                    <?php /* Start the Loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php if( 'post' === get_post_type() ) { ?>



                                <div class="category-article">
                                    <a href="<?php the_permalink()?>" target="_blank">


                                        <div class="category-article-image" >
                                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'medium')?>">

                                        </div>
                                    <div class="category-article-description">
                                        <p class="category-article-description-topic">
                                            <?php
                                            $category = get_the_category(get_the_ID());
                                            echo $category[0]->cat_name;
                                            ?>
                                        </p>
                                        <h5 class="category-article-description-title">
                                            <?php the_title(); ?>
                                        </h5>
                                        <p class="category-article-description-date">
                                            <?php echo display_reading_time(get_the_ID())?>

                                        </p>
                                    </div>
                                    </a>
                                </div>




                    <?php }; ?>
                    <?php endwhile; ?>



                <?php else : ?>

                    <?php get_template_part( 'no-results', 'search' ); ?>

                <?php endif; ?>
            </div>

        </div>
</div>
</div>




<?php
get_footer();
?>









