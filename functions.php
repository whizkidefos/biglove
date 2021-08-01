<?php

// Theme Files
function biglove_files() {
    // if ( !is_admin() ) wp_deregister_script('jquery');
   
    //CSS
    wp_enqueue_style( "bootstrap_css", get_template_directory_uri()."/css/bootstrap.min.css" );
    wp_enqueue_style( "swiper_css", get_template_directory_uri()."/css/swiper.min.css" );
    wp_enqueue_style( "aos_css", "https://unpkg.com/aos@2.3.1/dist/aos.css" );
    wp_enqueue_style( "magnific_css", get_template_directory_uri()."/css/magnific-popup.css" );
    wp_enqueue_style( "app_css", get_template_directory_uri()."/css/app.css" );

    //JS
    wp_enqueue_script( "font_awesome_kit", "https://kit.fontawesome.com/c95cb70159.js", array(), '5.15.1', true );
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri(). '/js/bootstrap.min.js', array(), '5.1.0', true );
	wp_enqueue_script( 'swiper_js', get_template_directory_uri().'/js/swiper.min.js', array(), '6.7.0', true );
    wp_enqueue_script( 'magnific_js', get_template_directory_uri().'/js/magnific-popup.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'aos_js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', '2.3.1', true );
    wp_enqueue_script( 'jquery_matchHeight_js', get_template_directory_uri().'/js/jquery.matchHeight.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'app_js', get_template_directory_uri().'/js/app.js', array('jquery'), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'biglove_files', );

// Courses ContentType
function create_posttype() {
 
    register_post_type( 'courses',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Courses' ),
                'singular_name' => __( 'Course' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'courses'),
            'show_in_rest' => true,
            'menu_icon'    => 'dashicons-welcome-learn-more',
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
 
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

/*============ Setup Theme ===========*/
function biglove_setup() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'menus' );

    // Register Menus
    function biglove_menus() {
        register_nav_menus( 
            array (
                'main-menu'         => 'Main Menu',
                'footer-links'      => 'Footer links',
            )
        );
    }
    add_action( 'init', 'biglove_menus' );
    }
add_action( 'after_setup_theme', 'biglove_setup' );

/*============ Custom Functions ===========*/
function t() {
    echo esc_url( get_template_directory_uri() );
}

// ACF Options
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'BLSC General Settings',
		'menu_title'	=> 'BLSC Options',
		'menu_slug' 	=> 'blsc-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Theme Header Settings',
	// 	'menu_title'	=> 'Header',
	// 	'parent_slug'	=> 'blsc-general-settings',
	// ));
	
	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Theme Footer Settings',
	// 	'menu_title'	=> 'Footer',
	// 	'parent_slug'	=> 'blsc-general-settings',
	// ));
	
}

/*============ Custom Login Functions ===========*/
//Replace style-login.css with the login custom CSS file
function blsc_custom_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/style-login.css' );
}
add_action( 'login_enqueue_scripts', 'blsc_custom_login_stylesheet' );

function admin_login_redirect( $redirect_to, $request, $user ) {
    global $user;
    
    if( isset( $user->roles ) && is_array( $user->roles ) ) {
       if( in_array( "administrator", $user->roles ) ) {
       return $redirect_to;
       } 
       else {
       return home_url();
       }
    }
    else {
    return $redirect_to;
    }
 }
 
 add_filter("login_redirect", "admin_login_redirect", 10, 3);

 function login_checked_remember_me() {
    add_filter( 'login_footer', 'rememberme_checked' );
}
add_action( 'init', 'login_checked_remember_me' );

function rememberme_checked() {
    echo "<script>document.getElementById('rememberme').checked = true;</script>";
}

function blsc_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'blsc_login_logo_url' );
    
function blsc_login_logo_url_title() {
    return 'Big Love Swim Club';
}
add_filter( 'login_headertitle', 'blsc_login_logo_url_title' );

// Custom Logo
function blsc_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url('./images/logo.svg');
        height:100px;
        width:300px;
        background-size: 300px 100px;
        background-repeat: no-repeat;
        padding-bottom: 10px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'blsc_login_logo' );