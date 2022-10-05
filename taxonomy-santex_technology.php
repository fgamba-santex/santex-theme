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
    
    $term = get_queried_object();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div id="intro" class="section-container">
	                <div class="row">
	                    <h1 class="intro-title">Find your <?php echo($term->name)?> Software Engineering Team</h1>
                        <?php 
                            
                            if ($term->description){
                                echo("<p>".$term->description."</p>");
                            }else{
                               echo("<p>Santex is a Software Engineering Firm with Developers in LATAM, with more than 20 years in the market. We help companies to go through their digital transformation and fulfill software needs, building top-notch software engineering teams.</p>");
                            }
                        ?>
	                     
                        
                        <a class="schedule-btn button _mPS2id-h" href="#profile-contact-form">Let's Talk</a>
	                </div>

            </div>
                    
    
            <div class="community-wrapper">    
                <div id="community" class="section-container">
                    <div class="row">
                        <?php 
                         
                        
                          echo('<h2>Our '.$term->name.' developers. </h2>');
                        ?>
                        <h3>Meet some of our experts</h3>
                        <div class="devs-wrapper">
                           

<?php

            // The Loop

            if ( have_posts() ) {
                while ( have_posts() ) { 
                the_post();
                echo '<div class="devs-preview col-md-4 col-sm-12 col-xs-12">';
                    
                    $id = get_the_ID(); // with post id, you can get whatever you want.
                    $metadata = get_post_meta($id);
                    $description = get_post_meta($id,'santex_profile_description',true);
                    $profile_picture = get_post_meta($id,'santex_profile_picture',true);
                    $profile_title = get_post_meta($id,'santex_profile_title',true);
                    $permalink = get_permalink($id);
                    $profile_picture = isset($profile_picture['guid']) ? $profile_picture['guid'] : '';
                    
                    print_r ('<img class="dev-avatar" src='.$profile_picture.'>');
                    echo '<h3>' . get_the_title() . '</h3>';
                    echo  '<h4>'.$profile_title.'</h4>';
                    echo $description;
                    echo '<a href='.$permalink.'>Read full profile</a>';      
                    echo '</div>';
                
                    }
                }else {
                
                }  

?>

<!-- <div class="dev-avatar-wrapper"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/pablo-b.png"/></div>
                                <h3> Pablo B </h3>
                                <h4>Senior Java Tech Lead</h4>
                                <p class="dev-description">NET developer with experience in distributed applications in different domains and commercial applications. Proven experience as a Technical Leader focused on leadership and coordination with the team following Agile methodologies, understanding the needs of the business and helping customers to increase the quality of their products.</p>
                                <a href="#">Profile</a>
                            </div>-->                

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

<?php
//get_sidebar();
get_footer();
