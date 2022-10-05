<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package santex
 */

get_header('blog');

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
            $post_type = get_post_type();
			if($post_type === "attachment") { 
			  if(wp_attachment_is_image(get_the_id())){
				  echo 'es imagen';
			  }	else {
				  $url = wp_get_attachment_url(get_the_id());
				  ?>
				  <div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="has_eae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-48ec467" data-id="48ec467" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<section class="has_eae_slider elementor-section elementor-inner-section elementor-element elementor-element-430fb17 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="430fb17" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="has_eae_slider elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-61ae957" data-id="61ae957" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-fd73649 elementor-widget elementor-widget-heading" data-id="fd73649" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default" style="color:rgb(242, 57, 57);font-family: 'Red Hat Text', sans-serif;font-size: 2em;font-weight: 600;">Become part of our&nbsp;Community</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-2f0538c elementor-widget elementor-widget-text-editor" data-id="2f0538c" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<p>We are a US based company founded in 1999, with access to global talent. We work with unique, high performing, multicultural teams all around the world.</p>					</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-35bd1ad elementor-widget elementor-widget-text-editor" data-id="35bd1ad" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<p>We build global teams to work through problem, move ideas forward, and learn from each other along the way.</p>					</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-2db4ef3 elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="2db4ef3" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a href="<?php echo $url; ?>" onclick="_gaq.push([‘_trackEvent’,’Download’,’PDF’,this.href]);" class="elementor-button-link elementor-button elementor-size-xs" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">DOWNLOAD THE DOCUMENT</span>
		</span>
					</a>
		</div>
				</div>
				</div>
						</div>
					</div>
		</div>
				<div class="has_eae_slider elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3a23f9a" data-id="3a23f9a" data-element_type="column">
			<div class="elementor-column-wrap">
							<div class="elementor-widget-wrap">
								</div>
					</div>
		</div>
				<div class="has_eae_slider elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-0f54247" data-id="0f54247" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-2fcbe4e becomepart elementor-widget elementor-widget-image" data-id="2fcbe4e" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<img width="1418" height="780" src="https://santexgroup.com/wp-content/uploads/2021/07/community.png" class="attachment-full size-full" alt="" loading="lazy" srcset="https://santexgroup.com/wp-content/uploads/2021/07/community.png 1418w, https://santexgroup.com/wp-content/uploads/2021/07/community-768x422.png 768w, https://santexgroup.com/wp-content/uploads/2021/07/community-1024x563.png 1024w" sizes="(max-width: 1418px) 100vw, 1418px">														</div>
						</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="has_eae_slider elementor-section elementor-inner-section elementor-element elementor-element-64df551 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="64df551" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="has_eae_slider elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-d01e3f9" data-id="d01e3f9" data-element_type="column">
			<div class="elementor-column-wrap">
							<div class="elementor-widget-wrap">
								</div>
					</div>
		</div>
								</div>
					</div>
		</section>
						</div>
					</div>
		</div>
								</div>
					</div>
				  <style type="text/css"> 
				  .elementor-259457 .elementor-element.elementor-element-2db4ef3 .elementor-button {
    font-family: "Red Hat Text", Sans-serif;
    font-size: 0.8em;
    font-weight: 500;
    text-decoration: none;
    line-height: 1.3em;
    letter-spacing: 0.5px;
    fill: #F23939;
    color: #F23939;
    background-color: #61CE7000;
    border-style: solid;
    border-width: 1px 1px 1px 1px;
    border-radius: 50px 50px 50px 50px;
}
				  </style>
				<?php 
			  }
			} else {
               get_template_part( 'template-parts/content', get_post_type() );
			}

//			the_post_navigation();
//
//			// If comments are open or we have at least one comment, load up the comment template.
//			if ( comments_open() || get_comments_number() ) :
//				comments_template();
//			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
