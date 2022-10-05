<?php
/**
        Template Name: Teams
 */
?>

<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package santex
 */

get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div id="intro" class="section-container">
	                <div class="row">
	                    <h1 class="intro-title">Find your Software Engineering Team</h1>

                        <p>Santex is a Software Engineering Firm with Developers in LATAM, with more than 20 years in the market. We help companies to go through their digital transformation and fulfill software needs, building top-notch software engineering teams.</p>
                        <a class="schedule-btn button _mPS2id-h" href="#profile-contact-form">Let's Talk</a>
	                </div>

            </div>

            <div class="expert-wrapper">
                <div id="experts" class="section-container">

	                <div class="row">
                        <div class="expert-left-side col-md-5 col-sm-12 col-xs-12" style="float:left">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/employee.png"/>
                        </div>
                        <div clasS="expert-right-side col-md-7 col-sm-12 col-xs-12"  style="float:left">
                            <h2 class="expert-title home-title">
                                Our Experts
                            </h2>

                            <p class="expert-subtitle">
                            Over the last 20 years, Santex has built a pool of top-notch engineers with particular soft skills:
                            </p>

                            <ul>
                                <li>FLEXIBILITY, ABILITY TO ADAPT</li>
                                <li>EFFECTIVE COMMUNICATION (with advanced English skills).</li>
                                <li>RESULT-ORIENTED</li>
                            </ul>
                            <p>We train our engineers to be full stack developers with the ability to work on more than one technology.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="community-wrapper">
                <div id="community" class="section-container">
                    <div class="row">
                        <h2>Community of Developers</h2>
                        <h3>Meet some of our experts</h3>
                        <div class="devs-wrapper">


<?php
$args = array(
    'post_type' => 'santex-profile',
    'tag' => 'home',
    'posts_per_page' => 9,
    /*'tax_query' => array(
       array(
          'taxonomy' => 'tags',
          'field'    => 'slug',
          'terms'    => 'home',
        ),
    )*/
  );
  $the_query = new WP_Query( $args );

  // The Loop

  if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
       echo '<div class="devs-preview col-md-4 col-sm-12 col-xs-12">';
        $the_query->the_post();
        $id = get_the_ID(); // with post id, you can get whatever you want.
        $metadata = get_post_meta($id);
        $description = get_post_meta($id,'santex_profile_description',true);
        $profile_picture = get_post_meta($id,'santex_profile_picture',true);
        $profile_title = get_post_meta($id,'santex_profile_title',true);
        $permalink = get_permalink($id);

        $profile_picture = isset($profile_picture['guid']) ? $profile_picture['guid'] : '';
        $default_stx_picture= get_stylesheet_directory_uri().'/assets/round-santex-logo.png';
        if(!$profile_picture){
            echo "<img class='dev-avatar' src='$default_stx_picture' alt='santex-logo'/>";
        }else{
            print_r ('<img class="dev-avatar" src='.$profile_picture.'>');
        }

        echo '<h3>' . get_the_title() . '</h3>';
        echo  '<h4>'.$profile_title.'</h4>';
        echo $description;
        echo '<a href='.$permalink.'>Read full profile</a>';
        echo '</div>';
    }

    /* Restore original Post Data */
    wp_reset_postdata();
} else {
    // no posts found
}


?>

                        </div>
                    </div>
                </div>

            </div>

            <div class="community-wrapper">
                <div id="community" class="technologies-container section-container">
                    <div class="row">
                    <h2>Our Technologies & Roles</h2>

                <p>
                <?php

                    $terms = get_terms( array(
                        'taxonomy' => 'santex_technology',
                        'parent'   => 0
                    ) );

                    foreach ( $terms as $term ) {
                        $tag_link = get_tag_link($term->term_id);
                        echo "<a class='technology-link' href='{$tag_link}' class='{$term->slug}'>{$term->name}</a>";
                    }
                ?>
                </p>
                    </div>
                </div>
            </div>

            <div class="clients-wrapper">
                <div id="clients" class="section-container">
                    <div class="row">
                        <h2>Trust we have built</h2>
                        <h3>Just a selection of brands that have trusted Santex over the last 20 years</h3>
                        <div class="clients-container">
                            <div class="client col-md-2 col-sm-4 col-xs-4">
                                <div class="img-wrapper">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/client/register.jpg" alt="register"/>
                                </div>
                            </div>
                            <div class="client col-md-2 col-sm-4 col-xs-4">
                                <div class="img-wrapper">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/client/dot.jpg" alt="Department of Transport "/>
                                </div>
                            </div>
                            <div class="client col-md-2 col-sm-4 col-xs-4">
                                <div class="img-wrapper">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/client/sig-boston.jpg" alt="signature boston"/>
                                </div>
                            </div>
                            <div class="client col-md-2 col-sm-4 col-xs-4">
                                <div class="img-wrapper">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/client/telstra.jpg" alt="telstra"/>
                                </div>
                            </div>
                            <div class="client col-md-2 col-sm-4 col-xs-4">
                                <div class="img-wrapper">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/client/sirius.jpg" alt="sirius"/>
                                </div>
                            </div>
                            <div class="client col-md-2 col-sm-4 col-xs-4">
                                <div class="img-wrapper">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/client/accenture.jpg" alt="accenture"/>
                                </div>
                            </div>
                            <div class="client col-md-2 col-sm-4 col-xs-4">
                                <div class="img-wrapper">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/client/grammy.jpg" alt="grammy"/>
                                </div>
                            </div>
                            <div class="client col-md-2 col-sm-4 col-xs-4">
                                <div class="img-wrapper">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/client/ilumno.jpg" alt="ilumno"/>
                                </div>
                            </div>
                            <div class="client col-md-2 col-sm-4 col-xs-4">
                                <div class="img-wrapper">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/client/macys.jpg" alt="macys"/>
                                </div>
                            </div>
                            <div class="client col-md-2 col-sm-4 col-xs-4">
                                <div class="img-wrapper">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/client/fast-company.jpg" alt="Fast Company"/>
                                </div>
                            </div>
                            <div class="client col-md-2 col-sm-4 col-xs-4">
                                <div class="img-wrapper">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/client/vistage.jpg" alt="Vistage"/>
                                </div>
                            </div>
                            <div class="client col-md-2 col-sm-4 col-xs-4">
                                <div class="img-wrapper">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/client/agd.jpg" alt="agd"/>
                                </div>
                            </div>
                            <div class="client col-md-2 col-sm-4 col-xs-4">
                                <div class="img-wrapper">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/client/kony-dbx.jpg" alt="kony"/>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="container-fluid contact-container">
	            <div id="profile-contact-form" class="section-container" >
		                <div class="row">
		                    <h2 class="profile-contact-title profile-title">
			                    Contact us Today
			                </h2>

			                <p> We'll get back to you within 24 hours </p>

	                        <div>
	                        	<?php echo do_shortcode("[contact-form-7 id='122771' title='Santex-Teams Contact Form']"); ?>
	                        </div>

		                </div>

	            </div>
       		</div>

        </main><!-- #main -->
    </div><!-- #primary -->

    <script>

        $(document).ready(function() {
            $('.profile-contact-submit-btn').click(function(e) {
                    gtag_report_conversion();
                }
            );
        });

        function gtag_report_conversion(url) {
            var callback = function () {
                if (typeof(url) != 'undefined') {
                    window.location = url;
                }
            };
            gtag('event', 'conversion', {
                'send_to': 'AW-958299033/EfFWCOqX1ZcBEJn3-cgD',
                'event_callback': callback
            });
            return false;
        }
    </script>

<?php
//get_sidebar();
get_footer();
