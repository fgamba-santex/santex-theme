<?php
/*
Template Name: Blog
 */
?>

<?php get_header(); setPostViews(get_the_ID()); ?>

    <div class="new-santex-header">
        <div class="container-fluid black">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img class="header-logo" src="https://santexgroup.com/wp-content/uploads/2022/08/santex-white.svg">
                    </div>
                    <div class="col-md-8 new-santex-header-menu">
                        <ul>
                            <li><a href="#">Our Culture</a></li>
                            <li><a href="#">Our Team</a></li>
                            <li><a href="#" class="btn btn-grey btn-small">Carrers</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid black page-featured blog-featured">
        <div class="container">
            <img src="http://santexdev.wpengine.com/wp-content/uploads/2022/09/santex-blog.svg">
            <h2><span>#</span>SharingOurIdeas</h2>
        </div>
    </div>

	<div id="primary" class="container new-blog">
        <div class="row">
            <div class="col-3 blog-sidebar">
                <h4>Categories</h4>
                <ul class="list-categories">
                    <?php wp_list_categories( array(
                        'exclude'  => array( 4,7 ),
                        'title_li' => ''
                    ) ); ?>
                </ul>
                <div class="space-50"></div>
                <h4>Santex Writers</h4>
                <ul class="list-authors">
                    <?php wp_list_authors('exclude_admin=0&show_fullname=1&hide_empty=1&orderby=post_count&exclude=1'); ?>
                </ul>
                
            </div>
            <div class="col-9 new-blog-posts">
                <?php $args = array( 'posts_per_page' => 1 ); query_posts( $args ); ?>
                <?php while ( have_posts() ) : the_post(); ?>
                <?php $post_id = get_the_ID(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="new-blog-featured">
                        <a class="row" href="<?php echo get_the_permalink($post_id)?>" target="_blank">
                            <div class="new-blog-featured-description">
                                <span class="new-blog-featured-description-date"><?php echo display_reading_time($post_id); ?></span>
                                <h1><?php echo wp_trim_words(get_the_title($post_id),20)?></h1>
                                <p><?php the_excerpt();?></p>
                            </div>
                            <div class="new-blog-featured-image">
                                <img src="<?php echo get_the_post_thumbnail_url($post_id,'full')?>">
                            </div>
                        </a>
                    </div>
                </article>
                <?php endwhile; // End of the loop. ?>
                <?php wp_reset_query(); ?>

                <?php 
                    $args = array(
                    'posts_per_page' => 10,
                    'offset' => 1,
                    );
                    query_posts( $args );
                ?>

                    <?php while ( have_posts() ) : the_post(); ?>
                    <?php if( 'post' === get_post_type() ) { ?>
                    <?php $post_id = get_the_ID(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                            <div class="new-blog-list-posts">
                                <a class="row" href="<?php echo get_the_permalink($post_id)?>" target="_blank">
                                    <div class="new-blog-list-posts-description col-9">
                                        <span class="new-blog-list-posts-description-date"><?php echo display_reading_time($post_id); ?></span>
                                        <h2><?php echo wp_trim_words(get_the_title($post_id),20)?></h2>
                                        <p>
                                        <?php
                                            $excerpt = get_the_excerpt();

                                            $excerpt = substr($excerpt, 0, 160);
                                            $result = substr($excerpt, 0, strrpos($excerpt, ' '));
                                            echo $result;
                                        ?> 
                                        </p>
                                    </div>
                                    <div class="new-blog-list-posts-image col-3">
                                        <img src="<?php echo get_the_post_thumbnail_url($post_id,'thumbnail')?>">
                                    </div>
                                    
                                </a>
                            </div>

                        </article><!-- #post-<?php the_ID(); ?> -->

                    <?php }; ?>
                <?php endwhile; // End of the loop. ?>
                <?php wp_reset_query(); ?>
            </div><!-- col-8 -->
        </div><!-- row -->
	</div><!-- #primary -->

<?php get_footer();