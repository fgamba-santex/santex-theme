<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package santex
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php
    $category = get_the_category(get_the_ID());
    $category = is_array($category) ? $category[0] : $category;

    ?>
        <div id="single-article-container" class="section-container hidden-xs">
            <a style="text-decoration: none; color: white;">

                <div class="single-article-header">
                    <div class="single-article-left">
                        <div class="single-article-left-date">
                            <span class="">
                                <a style="text-decoration: none; color: black;" href="<?php echo get_category_link( $category->term_id )?>">
                                    <?php echo '#'.strtoupper($category->name);?>
                                </a>
                            </span>
                            <span class=""><?php echo display_reading_time(get_the_ID()) ?></span>
                        </div>
                        <h1 class="single-article-left-title">
                            <?php the_title()?>
                        </h1>
                        <div class="single-article-left-content">
<!--                            --><?php echo wp_trim_words( get_the_content(), 15, ' ...' ); ?>
                        </div>
                    </div>

                    <div class="single-article-right">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'large') ?>" >
                    </div>
                </div>
            </a>
        </div>

        <div id="single-article-container-xs" class="section-container visible-xs">
            <div class="single-article-right">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'medium') ?>" >
            </div>
            <div class="single-article-header">
                <div class="single-article-left">
                    <div class="single-article-left-date">
                        <span class="">
                        <a style="text-decoration: none; color: black;" href="<?php echo get_category_link( $category->term_id )?>">
                                    <?php echo '#'.strtoupper($category->name);?>
                                </a>
                        </span>
                        <span class=""><?php echo display_reading_time(get_the_ID())?></span>
                    </div>
                    <div class="single-article-left-title"><?php the_title()?></div>
                    <div class="single-article-left-content">
                        <?php echo wp_trim_words( get_the_content(), 15, '  ' ); ?>
                    </div>
                </div>
            </div>
        </div>


        <div id="content-container" class="section-container">
            <?php the_content()?>
        </div>

    <div id="related-container" class="section-container">
        <h2 class="contanier-title">
            <?php echo get_theme_mod('blog_article_related_post_title')?>
        </h2>
        <div id="related-slider" class="row related-list">

            <?php
            $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 4, 'post__not_in' => array($post->ID) ) );

            if( $related ) foreach( $related as $post ) {
                setup_postdata($post);
                $post_id = get_the_ID();
                $topic_name = "";
                ?>

                <div class="related-article">
                    <a href="<?php echo get_the_permalink($post_id)?>" target="_blank" style="text-decoration: none">
                        <div class="related-article-image">
                            <img src="<?php echo get_the_post_thumbnail_url($post_id,'medium')?>">
                        </div>
                        <div class="related-article-description">
                            <p class="related-article-description-topic">
                                <?php echo $topic_name;?>
                            </p>
                            <h5 class="related-article-description-title">
                                <?php echo wp_trim_words(get_the_title($post_id),6)?>
                            </h5>
                            <p class="related-article-description-date">
                                <?php
                                    echo display_reading_time($post_id);
                                ?>
                            </p>
                        </div>
                    </a>
                </div>


            <?php }
            wp_reset_postdata();
            ?>




        </div>

        <div id="related-slider-xs">
            <div class="slider">

                <?php

                $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 4, 'post__not_in' => array($post->ID) ) );

                if( $related ) foreach( $related as $post ) {
                    setup_postdata($post);
                    $post_id = get_the_ID();
                    $topic_name = "";
                    ?>

                        <div class="related-article">
                            <a href="<?php echo get_the_permalink($post_id)?>" target="_blank" style="text-decoration: none">
                                <div class="related-article-image" >
                                    <img src="<?php echo get_the_post_thumbnail_url($post_id,'medium')?>">
                                </div>
                                <div class="related-article-description">
                                    <p class="related-article-description-topic">
                                        <?php echo $topic_name;?>
                                    </p>
                                    <h5 class="related-article-description-title">
                                        <?php echo wp_trim_words(get_the_title($post_id),6)?>
                                    </h5>
                                    <p class="related-article-description-date">
                                        <?php
                                        echo display_reading_time($post_id);
                                        ?>
                                    </p>
                                </div>
                            </a>
                        </div>

                <?php }
                wp_reset_postdata();
                ?>

            </div>
        </div>
    </div>


</article><!-- #post-<?php the_ID(); ?> -->
<?php  //get_template_part( 'template-parts/subscribe-form' );?>
<style>
    ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }




</style>

<script>
    ( function( $ ) {
        $(document).ready(function(){
            $('.slider').bxSlider({
                'controls':false
            });
        });
    } )( jQuery );


</script>