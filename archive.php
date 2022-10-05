<?php get_header(); ?>

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
                
                <h1 class="new-blog-section-title">
                    <?php if (is_category('')) { ?>
                    <?php single_cat_title(); ?>
                    <?php } elseif (is_author('')) { ?>
                        <?php $curauth = ( get_query_var( 'author_name' ) ) ? get_user_by( 'slug', get_query_var( 'author_name' ) ) : get_userdata( get_query_var( 'author' ) ); ?>
                        <?php echo $curauth->display_name; ?>

                    <?php } elseif (is_day('')) { ?>
                    <?php echo get_the_time('F j, Y'); ?>

                    <?php } elseif (is_month('')) { ?>
                    <?php echo get_the_time('F Y'); ?>

                    <?php } elseif (is_year('')) { ?>
                    <?php echo get_the_time('Y'); ?>

                    <?php } elseif (is_tag('')) { ?>
                    <?php echo single_tag_title(''); ?>
                    <?php } ?>
                </h1>
                
                <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
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
                </article>

                <?php endwhile; ?>
                <?php else : ?>

                <?php get_template_part( 'no-results', 'search' ); ?>

                <?php endif; ?>
                
            </div>
        </div><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>