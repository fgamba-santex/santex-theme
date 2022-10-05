<?php


get_header('blog');

?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php
        $recent_posts = wp_get_recent_posts(
            array(
                'numberposts' => 1, // Number of recent posts thumbnails to display
                'post_status' => 'publish', // Show only the published posts
                'cat' => array(-171,-174)
            )
        );
        ?>
        <?php
        $recent_id = 0;
        foreach ($recent_posts as $recent) {
            $recent_id = $recent['ID'];
            ?>
            <div id="last-article-container" class="section-container hidden-xs">
                <a href="<?php the_permalink($recent['ID']) ?>" target="_blank"
                   style="text-decoration: none; color: white;">

                    <div class="last-article-header">
                        <div class="last-article-left">
                            <div class="last-article-left-date">
                                <span class="">LAST ARTICLE</span>
                                <span class="">
                            <?php
                            echo display_reading_time($recent_id);
                            ?>
                        </span>
                            </div>
                            <div class="last-article-left-title"><?php echo $recent['post_title'] ?></div>
                            <div class="last-article-left-content">
                                <?php echo wp_trim_words($recent['post_content'], 15, ' ...'); ?>
                            </div>
                        </div>

                        <div class="last-article-right">
                            <img src="<?php echo get_the_post_thumbnail_url($recent['ID'],'large') ?>" >
                        </div>
                    </div>
                </a>
            </div>

            <div id="last-article-container-xs" class="section-container visible-xs">
                <a href="<?php the_permalink($recent['ID']) ?>" target="_blank"
                   style="text-decoration: none; color: white;">
                    <div class="last-article-right">
                        <img src="<?php echo get_the_post_thumbnail_url($recent['ID'],'medium') ?>" >
                    </div>
                    <div class="last-article-header">
                        <div class="last-article-left">
                            <div class="last-article-left-date">
                                <span class="">LAST ARTICLE</span>
                                <span class="">
                        <?php
                        echo display_reading_time($recent_id);
                        ?>
                        </span>
                            </div>
                            <div class="last-article-left-title"><?php echo $recent['post_title'] ?></div>
                            <div class="last-article-left-content">
                                <?php echo wp_trim_words($recent['post_content'], 15, '  '); ?>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php } ?>

        <div class="section-container">
            <div id="blog-container-list" class="row">

                <div id="blog-container-list-left" class="col-md-7 col-sm-12 col-xs-12">
                    <h1>Last Articles</h1>

                    <?php
                    $recent_posts = wp_get_recent_posts(array(
                        'numberposts' => 5, // Number of recent posts thumbnails to display
                        'post_status' => 'publish', // Show only the published posts
                        'exclude' => $recent_id,
                        'category__not_in' => array(171, 174)
                    ));
                    ?>

                    <?php
                    foreach ($recent_posts as $recent) {
                        ?>
                        <a href="<?php the_permalink($recent['ID']); ?>" target="_blank">
                            <div class="row blog-last-article">

                                <div class="blog-last-article-left col-md-4 col-sm-12 col-xs-12">
                                    <img src="<?php echo get_the_post_thumbnail_url($recent['ID'],'medium') ?>">
                                </div>

                                <div class="blog-last-article-right col-md-8 col-sm-12 col-xs-12">
                                    <p class="blog-last-article-description-date blog-last-article-description-topic">
                                        <span>
                                            <?php
                                            $category = get_the_category($recent['ID']);
                                            $category = is_array($category) ? $category[0] : $category;
                                            echo strtoupper($category->name);
                                            ?>
                                        </span>
                                        &nbsp;
                                        <text class="hidden-xs">
                                            <?php
                                            echo display_reading_time($recent['ID']);
                                            ?>
                                        </text>
                                    </p>

                                    <h5 class="blog-last-article-description-title">
                                        <?php echo wp_trim_words($recent['post_title'], 6) ?>
                                    </h5>

                                    <p class="blog-last-article-description-body hidden-xs">
                                        <?php echo wp_trim_words($recent['post_content'], 15, '...'); ?>
                                    </p>

                                    <p class="blog-last-article-description-date visible-xs">
                                        <?php
                                        echo display_reading_time($recent['ID']);
                                        ?>
                                    </p>

                                </div>

                            </div>
                        </a>

                    <?php } ?>

                </div>

                <div id="blog-container-list-right" class="col-md-4 col-md-offset-1 col-sm-12 col-xs-12">
                    <h1>Most Popular</h1>
                    <div class="most-popular-list">

                        <?php
                        query_posts('meta_key=santex_post_views_count&orderby=meta_value_num&order=DESC&posts_per_page=5&cat=-171,-174');
                        if (have_posts()) : while (have_posts()) : the_post();
                            ?>
                            <a href="<?php the_permalink() ?>" target="_blank" style="text-decoration: none">
                                <div class="most-popular-item">
                                    <div class="most-popular-item-date">
                                    <span>
                                        <?php
                                        $category = get_the_category();
                                        $category = is_array($category) ? $category[0] : $category;
                                        echo strtoupper($category->name);
                                        ?>
                                    </span>
                                        &nbsp;
                                        <?php
                                        echo display_reading_time(get_the_ID());
                                        ?>
                                    </div>
                                    <div class="most-popular-item-title"><?php the_title(); ?></div>
                                </div>
                            </a>
                            <?php
                        endwhile; endif;
                        wp_reset_query();
                        ?>

                        <!--                        --><?php
                        //                        for($i=0; $i<5; $i++) {
                        //                            ?>
                        <!--                            <div class="most-popular-item">-->
                        <!--                                <div class="most-popular-item-date"><span>TOPIC NAME</span>  DEC 28 - 7 MIN READ</div>-->
                        <!--                                <div class="most-popular-item-title">The complete guide to product design Lorem Ipsum</div>-->
                        <!--                            </div>-->
                        <!--                        --><?php //}?>
                    </div>
                </div>

            </div>
        </div>

        <?php
        $topic_lists = ['software-development', 'agile', 'full-stack-development', 'devops'];
        ?>
        <div class="section-container">
            <div class="row blog-topic-container hidden-xs">

                <?php
                for ($i = 0; $i < 4; $i++) {

                    $category_slug = $topic_lists[$i];
                    $category = get_category_by_slug($category_slug);
                    $topic_name = $category->name;

                    $cat_id = $category->term_id;

                    ?>
                    <div class=" blog-topic-item col-md-3">

                        <?php
                        $recent_posts = wp_get_recent_posts(array(
                            'numberposts' => 4, // Number of recent posts thumbnails to display
                            'post_status' => 'publish', // Show only the published posts
                            'category' => $cat_id
                        ));
                        $first = isset($recent_posts[0]) ? $recent_posts[0] : null;
                        ?>

                        <?php if($first) { ?>
                            <div class="blog-topic-item-image" style="background: url(<?php echo get_the_post_thumbnail_url($first['ID'],'medium') ?>) no-repeat center center; background-size: cover;">
                                <div style=" background: rgba(0,0,0,.5); border-radius: 8px ">
                                    <a href="<?php echo get_category_link($cat_id) ?>" target="_blank"
                                       style="text-decoration: none; color: white; opacity: 1">
                                        <?php echo $topic_name; ?>
                                    </a>
                                </div>

                            </div>
                        <?php } else {?>
                            <div class="blog-topic-item-image">
                                <div style=" background: rgba(0,0,0,.5); border-radius: 8px ">
                                    <a href="<?php echo get_category_link($cat_id) ?>" target="_blank"
                                       style="text-decoration: none; color: white; opacity: 1">
                                        <?php echo $topic_name; ?>
                                    </a>
                                </div>

                            </div>
                        <?php }?>

                        <?php
                        foreach ($recent_posts as $recent) {
                            ?>
                            <div class="blog-topic-item-body">
                                <a href="<?php echo get_the_permalink($recent['ID']) ?>" target="_blank"
                                   style="text-decoration: none">
                                    <div class="blog-topic-item-body-item">
                                        <div class="blog-topic-item-body-item-date">
                                            <?php echo $topic_name . "&nbsp;&nbsp;" . display_reading_time($recent['ID']) ?>
                                        </div>
                                        <div class="blog-topic-item-body-item-title">
                                            <?php echo wp_trim_words($recent['post_title'], 6) ?>
                                        </div>
                                    </div>
                                </a>

                            </div>

                        <?php } ?>
                    </div>
                    <?php
                }
                ?>


            </div>


            <div class="row blog-topic-container-xs visible-xs">
                <div class="slider">
                    <?php
                    for ($i = 0; $i < 4; $i++) {
                        $category_slug = $topic_lists[$i];
                        $category = get_category_by_slug($category_slug);
                        $topic_name = $category->name;

                        $cat_id = $category->term_id;
                        ?>
                        <div class=" blog-topic-item-xs col-md-12">
                            <?php
                            $recent_posts = wp_get_recent_posts(array(
                                'numberposts' => 4, // Number of recent posts thumbnails to display
                                'post_status' => 'publish', // Show only the published posts
                                'category' => $cat_id
                            ));
                            $first = isset($recent_posts[0]) ? $recent_posts[0] : null;
                            ?>

                            <?php if($first) { ?>
                            <div class="blog-topic-item-image" style="background: url(<?php echo get_the_post_thumbnail_url($first['ID'],'medium') ?>) no-repeat center center; background-size: cover;">
                                <div style=" background: rgba(0,0,0,.5); border-radius: 8px ">
                                <a href="<?php echo get_category_link($cat_id) ?>" target="_blank"
                                   style="text-decoration: none; color: white;">
                                    <?php echo $topic_name; ?>
                                </a>
                                </div>

                            </div>
                            <?php } else {?>
                                <div class="blog-topic-item-image">
                                    <div style=" background: rgba(0,0,0,.5); border-radius: 8px ">
                                        <a href="<?php echo get_category_link($cat_id) ?>" target="_blank"
                                           style="text-decoration: none; color: white;">
                                            <?php echo $topic_name; ?>
                                        </a>
                                    </div>

                                </div>
                            <?php }?>
                            <?php
                            foreach ($recent_posts as $recent) {
                                ?>
                                <div class="blog-topic-item-body">
                                    <a href="<?php echo get_the_permalink($recent['ID']) ?>" target="_blank"
                                       style="text-decoration: none">

                                        <div class="blog-topic-item-body-item">
                                            <div class="blog-topic-item-body-item-date">
                                                <?php echo $topic_name . "&nbsp;&nbsp;" . display_reading_time($recent['ID']) ?>
                                            </div>
                                            <div class="blog-topic-item-body-item-title">
                                                <?php echo wp_trim_words($recent['post_title'], 6) ?>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>


                        </div>
                        <?php
                    }
                    ?>
                </div>

            </div>
        </div>

</div>


<?php //get_template_part('template-parts/subscribe-form'); ?>
</div>
<?php
get_footer();
?>


<style>


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

<script>


</script>





