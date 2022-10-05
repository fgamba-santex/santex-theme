<?php
/**
 * santex Theme Customizer
 *
 * @package santex
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function santex_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'santex_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'santex_customize_partial_blogdescription',
		) );
	}


    $wp_customize->add_panel(
        'santex_settings', array(
            'priority'       => 10,
            'theme_supports' => '',
            'title'          => __( 'Santex Settings', 'santex_settings' ),
            'description'    => __( 'Several settings pertaining my theme', 'mytheme' ),
        )
    );

    add_santex_settings($wp_customize);

}
add_action( 'customize_register', 'santex_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function santex_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function santex_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function santex_customize_preview_js() {
	wp_enqueue_script( 'santex-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'santex_customize_preview_js' );

function add_santex_settings($wp_customize) {


    //Landing Home Title
    $wp_customize->add_section(
        'landing_home', array(
            'title'    => 'Landing Home',
            'priority' => 10,
            'panel'    => 'santex_settings',
        )
    );

    $wp_customize->add_setting(
        'landing_home_title', array(
            'default'   => 'On-demand high performance engineering teams',
            'transport' => 'refresh',
            'panel'    => 'santex_settings',
        )
    );

    $wp_customize->add_control(
        'landing_home_title', array(
            'type'        => 'textarea',
            'section'     => 'landing_home',
            'settings'    => 'landing_home_title',
            'label'       => __( 'Title' ),
            //'description' => __( 'Title' ),
        )
    );

    $wp_customize->add_setting(
        'landing_home_sub_title', array(
            'default'   => 'We build large-scale outsourcing solutions for your business.',
            'transport' => 'refresh',
            'panel'    => 'santex_settings',
        )
    );

    $wp_customize->add_control(
        'landing_home_sub_title', array(
            'type'        => 'textarea',
            'section'     => 'landing_home',
            'settings'    => 'landing_home_sub_title',
            'label'       => __( 'Sub-Title' ),
            //'description' => __( 'Sub-Title' ),
        )
    );


    //Landing Hubs
    $wp_customize->add_section(
        'landing_hubs', array(
            'title'    => 'Landing Hubs',
            'priority' => 10,
            'panel'    => 'santex_settings',
        )
    );

    $wp_customize->add_setting(
        'landing_hubs_title', array(
            'default'   => 'Scale Up. Work together.',
            'transport' => 'refresh',
            'panel'    => 'santex_settings',
        )
    );

    $wp_customize->add_control(
        'landing_hubs_title', array(
            'type'        => 'textarea',
            'section'     => 'landing_hubs',
            'settings'    => 'landing_hubs_title',
            'label'       => __( 'Title' ),
            //'description' => __( 'Title' ),
        )
    );
    $wp_customize->add_setting(
        'landing_hubs_sub_title', array(
            'default'   => 'Through Agile methodologies we create world-class software services for companies with top talent from around the globe.',
            'transport' => 'refresh',
            'panel'    => 'santex_settings',
        )
    );

    $wp_customize->add_control(
        'landing_hubs_sub_title', array(
            'type'        => 'textarea',
            'section'     => 'landing_hubs',
            'settings'    => 'landing_hubs_sub_title',
            'label'       => __( 'Sub-Title' ),
            //'description' => __( 'Sub-Title' ),
        )
    );

    //Landing Relationships
    $wp_customize->add_section(
        'landing_relationship', array(
            'title'    => 'Landing Relationships',
            'priority' => 10,
            'panel'    => 'santex_settings',
        )
    );

    $wp_customize->add_setting(
        'landing_relationship_title', array(
            'default'   => 'Building relationships, delivering great results',
            'transport' => 'refresh',
            'panel'    => 'santex_settings',
        )
    );

    $wp_customize->add_control(
        'landing_relationship_title', array(
            'type'        => 'textarea',
            'section'     => 'landing_relationship',
            'settings'    => 'landing_relationship_title',
            'label'       => __( 'Title' ),
            //'description' => __( 'Title' ),
        )
    );

    //Landing NPS
    $wp_customize->add_section(
        'landing_walking_the_talk', array(
            'title'    => 'Landing NPS',
            'priority' => 10,
            'panel'    => 'santex_settings',
        )
    );

    $wp_customize->add_setting(
        'landing_walking_the_talk_title', array(
            'default'   => 'Walking the talk',
            'transport' => 'refresh',
            'panel'    => 'santex_settings',
        )
    );

    $wp_customize->add_control(
        'landing_walking_the_talk_title', array(
            'type'        => 'textarea',
            'section'     => 'landing_walking_the_talk',
            'settings'    => 'landing_walking_the_talk_title',
            'label'       => __( 'Title' ),
            //'description' => __( 'Title' ),
        )
    );

    $wp_customize->add_setting(
        'landing_walking_the_talk_sub_title', array(
            'default'   => 'We do care about clients and our people.',
            'transport' => 'refresh',
            'panel'    => 'santex_settings',
        )
    );

    $wp_customize->add_control(
        'landing_walking_the_talk_sub_title', array(
            'type'        => 'textarea',
            'section'     => 'landing_walking_the_talk',
            'settings'    => 'landing_walking_the_talk_sub_title',
            'label'       => __( 'Sub-Title' ),
            //'description' => __( 'Sub-Title' ),
        )
    );

    $wp_customize->add_setting(
        'walking_the_talk_nps', array(
            'default'   => 5,
            'transport' => 'refresh',
            'panel'    => 'santex_settings',
        )
    );

    $wp_customize->add_control(
        'walking_the_talk_nps', array(
            'type'        => 'number',
            'input_attrs' => array(
                'min' => 1,
                'max' => 100,
            ),
            'section'     => 'landing_walking_the_talk',
            'settings'    => 'walking_the_talk_nps',
            'label'       => __( 'NPS' ),
            //'description' => __( 'NPS' ),
        )
    );



    $wp_customize->add_setting(
        'walking_the_talk_nps_year', array(
            'default'   =>  date("Y"),
            'transport' => 'refresh',
            'panel'    => 'santex_settings',
        )
    );

    $wp_customize->add_control(
        'walking_the_talk_nps_year', array(
            'type'        => 'number',
            'input_attrs' => array(
                'min' => 1,
                'max' => 100,
            ),
            'section'     => 'landing_walking_the_talk',
            'settings'    => 'walking_the_talk_nps_year',
            'label'       => __( 'NPS Year' ),
            //'description' => __( 'NPS Year' ),
        )
    );



    $wp_customize->add_setting(
        'walking_the_talk_er', array(
            'default'   => 5,
            'transport' => 'refresh',
            'panel'    => 'santex_settings',
        )
    );

    $wp_customize->add_control(
        'walking_the_talk_er', array(
            'type'        => 'number',
            'input_attrs' => array(
                'min' => 1,
                'max' => 100,
            ),
            'section'     => 'landing_walking_the_talk',
            'settings'    => 'walking_the_talk_er',
            'label'       => __( 'Employee Retention' ),
            //'description' => __( 'Employee Retention' ),
        )
    );

    //Landing Community
    $wp_customize->add_section(
        'landing_community', array(
            'title'    => 'Landing Community',
            'priority' => 10,
            'panel'    => 'santex_settings',
        )
    );

    $wp_customize->add_setting(
        'landing_community_title', array(
            'default'   => 'Become part of our Community',
            'transport' => 'refresh',
            'panel'    => 'santex_settings',
        )
    );

    $wp_customize->add_control(
        'landing_community_title', array(
            'type'        => 'textarea',
            'section'     => 'landing_community',
            'settings'    => 'landing_community_title',
            'label'       => __( 'Title' ),
            //'description' => __( 'Title' ),
        )
    );
    $wp_customize->add_setting(
        'landing_community_sub_title', array(
            'default'   => 'We are a US based company founded in 1999, with access to global talent. We work with unique, high performing, multicultural teams all around the world.',
            'transport' => 'refresh',
            'panel'    => 'santex_settings',
        )
    );

    $wp_customize->add_control(
        'landing_community_sub_title', array(
            'type'        => 'textarea',
            'section'     => 'landing_community',
            'settings'    => 'landing_community_sub_title',
            'label'       => __( 'Sub-Title' ),
            //'description' => __( 'Sub-Title' ),
        )
    );

    //Landing Social
    $wp_customize->add_section(
        'landing_social', array(
            'title'    => 'Landing Social',
            'priority' => 10,
            'panel'    => 'santex_settings',
        )
    );

    $wp_customize->add_setting(
        'landing_social_title', array(
            'default'   => 'Recent articles',
            'transport' => 'refresh',
            'panel'    => 'santex_settings',
        )
    );

    $wp_customize->add_control(
        'landing_social_title', array(
            'type'        => 'textarea',
            'section'     => 'landing_social',
            'settings'    => 'landing_social_title',
            'label'       => __( 'Title' ),
            //'description' => __( 'Title' ),
        )
    );

    //Landing Contact
    $wp_customize->add_section(
        'landing_contact', array(
            'title'    => 'Landing Contact',
            'priority' => 10,
            'panel'    => 'santex_settings',
        )
    );

    $wp_customize->add_setting(
        'landing_contact_title', array(
            'default'   => 'Get in Touch',
            'transport' => 'refresh',
            'panel'    => 'santex_settings',
        )
    );

    $wp_customize->add_control(
        'landing_contact_title', array(
            'type'        => 'textarea',
            'section'     => 'landing_contact',
            'settings'    => 'landing_contact_title',
            'label'       => __( 'Title' ),
            ////'description' => __( 'Title' ),
        )
    );

    $wp_customize->add_setting(
        'landing_contact_sub_title', array(
            'default'   => 'Talk to one of our software technology experts today!',
            'transport' => 'refresh',
            'panel'    => 'santex_settings',
        )
    );

    $wp_customize->add_control(
        'landing_contact_sub_title', array(
            'type'        => 'textarea',
            'section'     => 'landing_contact',
            'settings'    => 'landing_contact_sub_title',
            'label'       => __( 'Sub-Title' ),
//            'description' => __( 'Sub-Title' ),
        )
    );


    //Blog Article View
    $wp_customize->add_section(
        'blog_article', array(
            'title'    => 'Blog Article',
            'priority' => 10,
            'panel'    => 'santex_settings',
        )
    );

    $wp_customize->add_setting(
        'blog_article_title', array(
            'default'   => 'Read our latest eBook!',
            'transport' => 'refresh',
            'panel'    => 'santex_settings',
        )
    );

    $wp_customize->add_control(
        'blog_article_title', array(
            'type'        => 'textarea',
            'section'     => 'blog_article',
            'settings'    => 'blog_article_title',
            'label'       => __( 'Call To Action Title' ),
//            'description' => __( 'Call To Action Title' ),
        )
    );

    $wp_customize->add_setting(
        'blog_article_sub_title', array(
            'default'   => 'Santex’s Ultimate Guide to Development Outsourcing',
            'transport' => 'refresh',
            'panel'    => 'santex_settings',
        )
    );

    $wp_customize->add_control(
        'blog_article_sub_title', array(
            'type'        => 'textarea',
            'section'     => 'blog_article',
            'settings'    => 'blog_article_sub_title',
            'label'       => __( 'Call To Action  Sub-Title' ),
//            'description' => __( 'Call To Action  Sub-Title' ),
        )
    );

    $wp_customize->add_setting(
        'blog_article_url', array(
            'default'   => 'http://santexgroup.rds.land/santex-ultimate-guide-to-software-development-outsourcing',
            'transport' => 'refresh',
            'panel'    => 'santex_settings',
        )
    );

    $wp_customize->add_control(
        'blog_article_url', array(
            'type'        => 'url',
            'section'     => 'blog_article',
            'settings'    => 'blog_article_url',
            'label'       => __( 'Call To Action  URL' ),
//            'description' => __( 'Call To Action  URL' ),
        )
    );

    $wp_customize->add_setting(
        'blog_article_related_post_title', array(
            'default'   => 'You will love these articles',
            'transport' => 'refresh',
            'panel'    => 'santex_settings',
        )
    );

    $wp_customize->add_control(
        'blog_article_related_post_title', array(
            'type'        => 'url',
            'section'     => 'blog_article',
            'settings'    => 'blog_article_related_post_title',
            'label'       => __( 'Related Post Title' ),
//            'description' => __( 'Call To Action  URL' ),
        )
    );


    //Landing Jobs
    $wp_customize->add_section(
        'landing_jobs', array(
            'title'    => 'Jobs Page',
            'priority' => 10,
            'panel'    => 'santex_settings',
        )
    );

    $wp_customize->add_setting(
        'landing_jobs_title', array(
            'default'   => 'Collaborate on great projects and join our awesome Community!',
            'transport' => 'refresh',
            'panel'    => 'santex_settings',
        )
    );

    $wp_customize->add_control(
        'landing_jobs_title', array(
            'type'        => 'textarea',
            'section'     => 'landing_jobs',
            'settings'    => 'landing_jobs_title',
            'label'       => __( 'Title' ),
        )
    );

    $wp_customize->add_setting(
        'landing_jobs_sub_title', array(
            'default'   => 'Let’s create amazing things together, help us build a company we truly love working for.',
            'transport' => 'refresh',
            'panel'    => 'santex_settings',
        )
    );

    $wp_customize->add_control(
        'landing_jobs_sub_title', array(
            'type'        => 'textarea',
            'section'     => 'landing_jobs',
            'settings'    => 'landing_jobs_sub_title',
            'label'       => __( 'Sub-Title' ),
        )
    );


}