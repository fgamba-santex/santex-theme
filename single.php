<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package santex
 */

get_header();
setPostViews(get_the_ID());
?>

	<div id="primary" class="container new-single p-50">
		<main id="main">

		<?php
		while ( have_posts() ) :
			the_post(); ?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php
    $category = get_the_category(get_the_ID());
    $category = is_array($category) ? $category[0] : $category;

    ?>
        <div id="single-article-container">
            <div class="new-single-article-header">
                <div class="new-single-article-date"><?php echo display_reading_time(get_the_ID()) ?></div>
				<div class="new-single-sharing">
					<a href="https://www.facebook.com/sharer.php?u=<?php echo get_permalink();?>" target="_blank" class="new-single-sharing-facebook"><i class="fa-brands fa-facebook"></i></a>
					<a href="https://twitter.com/share?url=<?php echo get_permalink();?>&text=<?php the_title()?>&via=santexgroup" target="_blank" class="new-single-sharing-twitter"><i class="fa-brands fa-twitter"></i></a>
					<a href="https://www.linkedin.com/shareArticle?url=<?php echo get_permalink();?>&title=<?php the_title()?>" target="_blank" class="new-single-sharing-linkedin"><i class="fa-brands fa-linkedin"></i></a>
					<a href="https://api.whatsapp.com/send?text=<?php the_title()?> <?php echo get_permalink();?>" target="_blank" class="new-single-sharing-whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
				</div>
                <h1><?php the_title()?></h1>
            </div>
        </div>


        <div id="content-container" class="new-single-content">
			<div class="new-single-feature-image"><?php the_post_thumbnail( 'full' ); ?></div>
            <?php the_content()?>
        </div>

    <div id="related-container" class="new-single-related">
        <h4>Continue reading...</h4>

            <?php
            $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'post__not_in' => array($post->ID) ) );

            if( $related ) foreach( $related as $post ) {
                setup_postdata($post);
                $post_id = get_the_ID();
                $topic_name = "";
                ?>

                <div class="new-single-related-article">
                    <a class="row" href="<?php echo get_the_permalink($post_id)?>" target="_blank">
						<div class="new-single-related-description col-9">
							<span class="new-single-related-description-date"><?php echo display_reading_time($post_id); ?></span>
                            <h3><?php echo wp_trim_words(get_the_title($post_id),20)?></h3>
                            <p>
							<?php
								$excerpt = get_the_excerpt();

								$excerpt = substr($excerpt, 0, 160);
								$result = substr($excerpt, 0, strrpos($excerpt, ' '));
								echo $result;
							?> 
                            </p>
                        </div>
                        <div class="new-single-related-article-image col-3">
                            <img src="<?php echo get_the_post_thumbnail_url($post_id,'thumbnail')?>">
                        </div>
                        
                    </a>
                </div>


            <?php }
            wp_reset_postdata();
            ?>

    </div>
</article><!-- #post-<?php the_ID(); ?> -->


		<?php endwhile; // End of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();