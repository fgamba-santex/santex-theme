<?php
/**
 * santex functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package santex
 */

if ( ! function_exists( 'santex_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function santex_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on santex, use a find and replace
		 * to change 'santex' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'santex', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'santex' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'santex_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'santex_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function santex_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'santex_content_width', 640 );
}
add_action( 'after_setup_theme', 'santex_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function santex_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'santex' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'santex' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'santex_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function santex_scripts() {
    //wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css' );


//	wp_enqueue_style( 'santex-style', get_stylesheet_uri() );

	 wp_enqueue_style( 'santex-style', get_template_directory_uri().'/style.css' );

	//wp_enqueue_style( 'css-bxslider', get_template_directory_uri().'/css/jquery.bxslider.css' );

	wp_enqueue_script( 'santex-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'santex-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

    wp_enqueue_script( 'twentyfourteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20150315', true );

    //wp_enqueue_script( 'js-bxslider', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array( 'jquery' ), '20150315', true );

    //wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '20150315', false );
    //wp_enqueue_style( 'fontawesome', get_template_directory_uri().'/css/fontawesome.css' );
	 
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'santex_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function setPostViews($postID) {
    $countKey = 'santex_post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 1;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, $count);
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}

 function display_reading_time( $post_id, $rt_options = [] ) {

    $rt_content       = get_post_field( 'post_content', $post_id );
    $number_of_images = substr_count( strtolower( $rt_content ), '<img ' );

    if ( ! isset( $rt_options['include_shortcodes'] ) ) {
        $rt_content = strip_shortcodes( $rt_content );
    }

    $rt_content = wp_strip_all_tags( $rt_content );
    $word_count = count( preg_split( '/\s+/', $rt_content ) );

//    if ( isset( $rt_options['exclude_images'] ) && ! $rt_options['exclude_images'] ) {
//        // Calculate additional time added to post by images.
//        $additional_words_for_images = $this->rt_calculate_images( $number_of_images, $rt_options['wpm'] );
//        $word_count                 += $additional_words_for_images;
//    }

    $word_count = apply_filters( 'rtwp_filter_wordcount', $word_count );

    $reading_time = ceil( $word_count / 300 );

    // If the reading time is 0 then return it as < 1 instead of 0.

     return sprintf(
         '%s - %d MIN READ',
         strtoupper(get_the_time('M d',$post_id)),
         $reading_time
     );
//    return $reading_time;

}

function remove_first_image ($content) {
    if (!is_page() && !is_feed() && !is_feed() && !is_home()) {
        $content = preg_replace("/<img[^>]+\>/i", "", $content, 1);
    }
    return $content;
}
add_filter('the_content', 'remove_first_image');


function wpa_cpt_tags( $query ) {
    if ( $query->is_tag() && $query->is_main_query() ) {
        $query->set( 'post_type', array( 'post', 'santex-profile' ) );
    }
}
add_action( 'pre_get_posts', 'wpa_cpt_tags' );

//function exclude_attachment_from_smushing( $smush, $id ) {
//
//    // attachment ids to skip smushing
//    $attachment_ids = array( 1 ); // example: array( 2, 4, 5 );
//
//    $matched = in_array( $id, $attachment_ids );
//
//    if ( ! $matched ) return $smush;
//    update_post_meta( $id, 'wp-smpro-smush-data', 'skipped' );
//    return false;
//}
//add_filter( 'wp_smush_image', 'exclude_attachment_from_smushing', 10, 2 );

/**Maintainance Mode 
function santex_maintainance_mode() {
    if (
         !is_user_logged_in() && 
         !is_admin() && 
         !in_array($GLOBALS['pagenow'], array('wp-login.php'))
       ) {
        $period = 3 * HOUR_IN_SECONDS; // 3 hours, but you can change if you need
        header($_SERVER['SERVER_PROTOCOL'] . ' 503 Service Unavailable', true, 503);
        header('Retry-After: ' . $period);
        // you can insert whatever you want :)
        ?>
			<title>Site Maintenance</title>
			<style>
			body { text-align: center; padding: 150px; }
			h1 { font-size: 50px; }
			body { font: 20px Helvetica, sans-serif; color: #333; }
			article { display: block; text-align: left; width: 650px; margin: 0 auto; }
			a { color: #dc8100; text-decoration: none; }
			a:hover { color: #333; text-decoration: none; }
			</style>

			<article>
				<h1>We&rsquo;ll be back soon!</h1>
				<div>
					<p>Sorry for the inconvenience, we&rsquo;re performing some maintenance at the moment. You can always <a href="mailto:info@santexgroup.com">contact us</a> if you need to. Otherwise we&rsquo;ll be back online shortly!</p>
					<p>&mdash; The Team</p>
				</div>
			</article>
			<img src="http://santex.staging.wpengine.com/wp-content/uploads/2021/07/Santex-logo.png" style="width:300px;height:75px;">
		<?php
        exit;
    }
}
add_action('init', 'santex_maintainance_mode');

*/

add_action( 'rest_api_init', function () {
  register_rest_route( 'homepage/', 'initial', array(
    'methods' => 'GET',
    'callback' => 'get_initial_image',
  ) );
  register_rest_route( 'homepage/', 'slider', array(
    'methods' => 'GET',
    'callback' => 'get_slider_assets',
  ) );
  register_rest_route( 'homepage/', 'x_video', array(
    'methods' => 'GET',
    'callback' => 'get_x_video',
  ) );
  register_rest_route( 'content/', '/page/(?P<id>\d+)', array(
    'methods' => 'GET',
    'callback' => 'get_page_santex',
  ) );
  register_rest_route( 'bot/', '/avatar', array(
    'methods' => 'GET',
    'callback' => 'get_bot_avatar',
  ) );
  register_rest_route( 'bot/', '/name', array(
    'methods' => 'GET',
    'callback' => 'get_bot_name',
  ) );
  register_rest_route( 'email/', '/name', array(
    'methods' => 'POST',
    'callback' => 'send_contact_email',
  ) );
  register_rest_route( 'email/', '/send', array(
    'methods' => 'POST',
    'callback' => 'send_email',
  ) );
  register_rest_route( 'cookie/', '/msg', array(
    'methods' => 'GET',
    'callback' => 'show_cookie_msg',
  ) );
  register_rest_route(
          "content/v1"
        , "/pages/(?P<id>\d+)/contentElementor"
        , [
            "methods" => "GET",
            "callback" => function (\WP_REST_Request $req) {

                $contentElementor = "";

                if (class_exists("\\Elementor\\Plugin")) {
                    $post_ID = $req->get_param("id");

                    $pluginElementor = \Elementor\Plugin::instance();
                    $contentElementor = $pluginElementor->frontend->get_builder_content($post_ID);
                }
				 
                $aux = str_replace('\t', '',$contentElementor );

				$aux2 = str_replace('\n', '', $aux);
				$aux3 = stripslashes($aux2);
                return $contentElementor;

            },
        ]
    );

} );

function get_initial_image() {
	$post_id = 264794; //settings page
	$initial = get_field('initial_image', $post_id);
	echo ($initial);
	
}
function get_slider_assets(){
	$post_id = 264794; //settings page
	$slider = get_field('slider', $post_id);
	
	echo json_encode($slider);
}

function get_x_video() {
	$post_id = 264794; //settings page
	$video = get_field('video_for_initial_load', $post_id);
	echo ($video);
}

function send_contact_email(\WP_REST_Request $req) {
	$email = $req->get_param("email");
	$name = $req->get_param("name");
	$company = $req->get_param("company");
	$telephone = $req->get_param("telephone");
	$comments = $req->get_param("message"); 
    require_once(__DIR__.'/inc/phpmailer/class.phpmailer.php');
	$mail  = new PHPMailer();
    /*$mail->IsSMTP();  
    $mail->Host          = "smtp.gmail.com";
    $mail->SMTPAuth      = true;                  // enable SMTP authentication
    $mail->Host          = "mail.gmail.com"; // sets the SMTP server
    $mail->Port          = 465;   
    $mail->Username      = "fernando.gamba@santexgroup.com"; // SMTP account username
    $mail->Password      = "7t5u&3gT6n9"; */
    $mail->SetFrom('communications@santexgroup.com', 'Santex Contact');
     
    $mail->Subject       = $name. " wants to be contacted on santex site";
	$body                = "<p>".$name ." has sent an email with the following comments: </p>";
	$body                .= "<p>".$comments. " </p>";
	$body                .= "<p> ".$email. " </p>";
	$body                .= "<p> ".$telephone. " </p>";
	$body                .= "<p> ".$company. " </p>";
	$mail->MsgHTML($body);  
	//$mail->AddAddress( "webmail@santexgroup.com" );
	 $mail->AddAddress( "fernando.gamba@santexgroup.com" );
     $mail->AddAddress( "damian.solombrino@santexgroup.com" );
	//TODO: add webmail@santexgroup.com when testing is over
	 
	if(!$mail->Send()) {
		// echo $mail->ErrorInfo  ;
         echo json_encode(array("code"=> 500 , "status"=>"error"));
    } else {
        echo json_encode(array("code"=> 200 , "status"=>"success")); 
    }
    // Clear all addresses and attachments for next loop
    $mail->ClearAddresses();
    exit(0);
}

function get_page_santex($data) {
	$path =  dirname(__FILE__); 
	$id = $data->get_param('id');
	$page = get_post($id);
	$style = '<style type="text/css">'.file_get_contents($path.'/style.css').'</style>';
	//$fontawesome = '<style type="text/css">'.file_get_contents($path.'/css/fontawesome.css').'</style>';
	if (!empty($page)) {
	  if($page->post_status == 'publish'){
		$content = $page->post_content.$style ;
		echo ($content ); 
	  }
	} else {
		echo 'page not found';
	}
}

function get_bot_avatar(){
	$post_id = 264794;
	$avatar = get_field('bot_avatar', $post_id);
	echo ($avatar);
}

function get_bot_name(){
	$post_id = 264794;
	$name = get_field('bot_name', $post_id);
	echo ($name);
}

function show_cookie_msg() { 
	$show_msg  =  empty( $_COOKIE["ip"] ) ? "yes":"no"; 
	if(empty($_COOKIE["ip"])) {
		setcookie("ip", $_SERVER["REMOTE_ADDR"]);
	}
	echo $show_msg;
}

function send_email(\WP_REST_Request $req) {
	$fromemail = $req->get_param("fromemail");
	$destinationemail = $req->get_param("destinationemail");
	if (strpos( $destinationemail, "," ) !== false) {
		$destemails = explode(",", $destinationemail);
	} else {
		$destemails = $destinationemail;
	}
	$name = $req->get_param("name");
	$subject = $req->get_param("subject");
	$comments = $req->get_param("message"); 
    require_once(__DIR__.'/inc/phpmailer/class.phpmailer.php');
	$mail  = new PHPMailer();
    /*$mail->IsSMTP();  
    $mail->Host          = "smtp.gmail.com";
    $mail->SMTPAuth      = true;                  // enable SMTP authentication
    $mail->Host          = "mail.gmail.com"; // sets the SMTP server
    $mail->Port          = 465;   
    $mail->Username      = "fernando.gamba@santexgroup.com"; // SMTP account username
    $mail->Password      = "7t5u&3gT6n9"; */
    $mail->SetFrom($fromemail, $name);
     
    $mail->Subject       = $subject; 
	$body                = $comments; 
	$mail->MsgHTML($body);
	if(is_array($destemails)){
		foreach($destemails as $dest)
		  $mail->AddAddress( $dest );
	} else {
		$mail->AddAddress( $destemails );
	}
	  
	if(!$mail->Send()) {
		// echo $mail->ErrorInfo  ;
         echo json_encode(array("code"=> 500 , "status"=>"error"));
    } else {
        echo json_encode(array("code"=> 200 , "status"=>"success")); 
    }
    // Clear all addresses and attachments for next loop
    $mail->ClearAddresses();
    exit(0);
}