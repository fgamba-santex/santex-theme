<div id="content-social" class="section-container">

    <div class="row blog-section">
        <h3 class="contanier-title">
            <?php echo get_theme_mod('landing_social_title')?>
        </h3>

    </div>

    <div class="row">
        <div class="col-md-12"></div>
    </div>

    <div id="blog-slider" class="row blog-list">

        <?php
        $topic_lists = ['software-development','agile','full-stack-development','devops'];
        for($i=0; $i<4; $i++) {

            $category_slug = $topic_lists[$i];
            $category = get_category_by_slug($category_slug);
            $topic_name = $category->name;


        $recent_posts = wp_get_recent_posts(array(
            'numberposts' => 1, // Number of recent posts thumbnails to display
            'post_status' => 'publish', // Show only the published posts
            'category'=> $category->term_id
        ));
        foreach( $recent_posts as $recent ) {
        ?>
        <div class="blog-article">
            <a href="<?php echo get_the_permalink($recent['ID'])?>" target="_blank" style="text-decoration: none">
            <div class="blog-article-image" >
                <img src="<?php echo get_the_post_thumbnail_url($recent['ID'],'medium')?>">
            </div>
            <div class="blog-article-description">
                <p class="blog-article-description-topic">
                    <?php echo $topic_name;?>
                </p>
                <h5 class="blog-article-description-title">
                    <?php echo wp_trim_words($recent['post_title'],6)?>
                </h5>
                <p class="blog-article-description-date">
                    <?php echo display_reading_time($recent['ID']) ?>
                </p>
            </div>
            </a>
        </div>
        <?php }}?>

    </div>

    <div id="blog-slider-xs">
        <div class="slider">

            <?php
            $topic_lists = ['software-development','agile','full-stack-development','devops'];
            for($i=0; $i<4; $i++) {

                $category_slug = $topic_lists[$i];

                $category = get_category_by_slug($category_slug);
                $topic_name = $category->name;


                $recent_posts = wp_get_recent_posts(array(
                    'numberposts' => 1, // Number of recent posts thumbnails to display
                    'post_status' => 'publish', // Show only the published posts
                    'category'=> $category->term_id
                ));
            foreach( $recent_posts as $recent ) {
                ?>
                <div class="blog-article">
                    <a href="<?php echo get_the_permalink($recent['ID'])?>" target="_blank" style="text-decoration: none">
                        <div class="blog-article-image" >
                            <img src="<?php echo get_the_post_thumbnail_url($recent['ID'],'medium')?>">
                        </div>
                        <div class="blog-article-description">
                            <p class="blog-article-description-topic">
                                <?php echo $topic_name;?>
                            </p>
                            <h5 class="blog-article-description-title">
                                <?php echo wp_trim_words($recent['post_title'],6)?>
                            </h5>
                            <p class="blog-article-description-date">
                                <?php echo display_reading_time($recent['ID']) ?>
                            </p>
                        </div>
                    </a>
                </div>

                <?php
            }}
            ?>

        </div>
    </div>



    <div class="row">

    </div>


    <div class="row go-to-blog">
        <a href="/blog">GO TO THE BLOG</a><span></span>
    </div>


</div>


<script>

    ( function( $ ) {
        $(document).ready(function(){
            $('.slider').bxSlider({
                'controls':false
            });
        });
    } )( jQuery );



</script>