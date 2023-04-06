<?php
    // add navwalker class to bootstrap navigation menu 
    require_once('wp-bootstrap-navwalker.php');

    // add featured image support
    add_theme_support('post-thumbnails');

// adding style function
    function import_style() {
        wp_enqueue_style("bootstrap-style", get_template_directory_uri()."/source/css/bootstrap.min.css");
        wp_enqueue_style("fontawesome", get_template_directory_uri()."/source/css/all.min.css");
        wp_enqueue_style("main-style", get_template_directory_uri()."/source/css/main.css");
    }


    function import_script() {
        //adding jquery to the footer
        wp_deregister_script('jquery'); //remove jquery default registeration
        wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), array(),false, true); // create new registeration
        wp_enqueue_script('jquery'); //add jquery

        wp_enqueue_script("bootstrap-script", get_template_directory_uri() ."/source/js/bootstrap.min.js",array('jquery'), false, true);
        wp_enqueue_script("my-script", get_template_directory_uri() ."/source/js/main.js",array(), false, true);

        
        wp_enqueue_script("html5shiv", get_template_directory_uri() ."/source/js/html5shiv.min.js");
        wp_script_add_data('html5shiv', 'conditional', 'lt IE 9');
        wp_enqueue_script("respond", get_template_directory_uri() ."/source/js/respond.min.js");
        wp_script_add_data('respond', 'conditional', 'lt IE 9');

    }

    function init_navigation_bar() {
        register_nav_menus(array(
            'nav-menu' => 'Navigation bar',
            'footer-menu' => 'Footer menu'
        ));
    }

    function bootstrap_navigation_bar() {
        wp_nav_menu(array(
            'theme_location' => 'nav-menu',
            'menu_class'     => 'navbar-nav ml-auto justify-content-around',
            'container'      => '',
            'depth'          => 2,
            'walker'         => new wp_bootstrap_navwalker()
        ));

    }

    function extend_excerpt_length($len) {
        return 65;
    }

    function change_excerpt_text($text) {
        return ' ...';
    }
    // 
    remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
    remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
//
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);
function my_theme_wrapper_start() {
    echo '<section id="main">';
}

function my_theme_wrapper_end() {
    echo '</section>';
}
// 
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce', array(
        'thumbnail_image_width' => 150,
        'single_image_width'    => 300,
        
        'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 2,
            'max_rows'        => 8,
            'default_columns' => 4,
            'min_columns'     => 2,
            'max_columns'     => 5,
        ),
        ) );
    }
    // 
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
    add_theme_support( 'woocommerce' );
    // 
    add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
    add_filter('excerpt_length', 'extend_excerpt_length');
    add_filter('excerpt_more', 'change_excerpt_text');
    
    add_action('wp_enqueue_scripts', 'import_style');
    add_action('wp_enqueue_scripts', 'import_script');
    add_action('init', 'init_navigation_bar');
    
    //
function remove_woocommerce_styles($enqueue_styles) {
        unset($enqueue_styles['woocommerce-general']);
        // unset($enqueue_styles['woocommerce-layout']);
        // unset($enqueue_styles['woocommerce-smallscreen']);
        return $enqueue_styles;
    }
        add_filter( 'woocommerce_enqueue_styles', 'remove_woocommerce_styles');
        
function wp_enqueue_woocommerce_styles(){
    wp_register_style('mytheme-woocommerce', get_template_directory_uri() . '/assets/css/woocommerce.css');
    if(class_exists('woocommerce')){
        wp_enqueue_style('mytheme-woocommerce');
    }
}
add_action('wp_enqueue_scripts','wp_enqueue_woocommerce_styles');
        ?>