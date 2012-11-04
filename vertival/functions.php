<?php
    
if ( ! function_exists( 'vertival_register_styles' ) ) :
/**
 * Register theme styles
 *
 * @uses wp_register_style() To register styles
 *
 * @since vertival 1.0
 */
function vertival_register_styles() {
    wp_register_style( 'vertival', get_bloginfo( 'stylesheet_url' ), false );
    wp_register_style( 'vertival-normalize', get_template_directory_uri() . '/css/normalize.css', false );
}
endif;

add_action('init', 'vertival_register_styles');



if ( ! function_exists( 'vertival_enqueue_styles' ) ) :
/**
 * Enqueue theme styles
 *
 * @uses wp_enqueue_style() To enqueue styles
 *
 * @since vertival 1.0
 */
function vertival_enqueue_styles() {

    wp_enqueue_style( 'vertival-normalize' );
    wp_enqueue_style( 'vertival' );

}
endif;

add_action('wp_print_styles', 'vertival_enqueue_styles');



if ( ! function_exists( 'vertival_register_scripts' ) ) :
/**
 * Register theme scripts
 *
 * @uses wp_register_scripts() To register scripts
 *
 * @since vertival 1.0.1
 */
function vertival_register_scripts() {
    // Add HTML5 support to older versions of IE
    wp_register_script( 'scrollorama', get_template_directory_uri() . '/js/jquery.scrollorama.js', array( 'jquery' ) );
    wp_register_script( 'scrollto', get_template_directory_uri() . '/js/jquery.scrollTo-1.4.2-min.js', array( 'jquery' ) );
    wp_register_script( 'easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array( 'jquery' ) );
    wp_register_script( 'scrolldeck', get_template_directory_uri() . '/js/jquery.scrolldeck.js', array( 'jquery' ) );
    wp_register_script( 'vertival-script', get_template_directory_uri() . '/js/vertival-script.js' );

}
endif;

add_action( 'init', 'vertival_register_scripts' );

if ( ! function_exists( 'vertival_enqueue_scripts' ) ) :
/**
 * Enqueue theme scripts
 *
 * @uses wp_enqueue_scripts() To enqueue scripts
 *
 * @since vertival 1.0
 */
function vertival_enqueue_scripts() {
    
    wp_enqueue_script( 'scrollorama' );
    wp_enqueue_script( 'scrollto' );
    wp_enqueue_script( 'easing' );
    wp_enqueue_script( 'scrolldeck' );
    wp_enqueue_script( 'vertival-script' );            
}
endif;

add_action( 'wp_enqueue_scripts', 'vertival_enqueue_scripts' );


if ( ! function_exists( 'vertival_adm_enqueue_scripts' ) ) :
/**
 * Enqueue theme scripts
 *
 * @uses wp_enqueue_scripts() To enqueue scripts
 *
 * @since vertival 1.0
 */
function vertival_adm_enqueue_scripts() {
    
    wp_enqueue_script( 'tiny_mce' );
         
}
endif;

add_action( 'admin_enqueue_scripts', 'vertival_adm_enqueue_scripts' );




    // Clean up the <head>
    function removeHeadLinks() {
        remove_action('wp_head', 'rsd_link');
        remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');


//add custom icon at slide custom post type
add_action('admin_head', 'plugin_header');
function plugin_header() {
    global $post_type;
    ?>
    <style>
    <?php if (($_GET['post_type'] == 'slide') || ($post_type == 'gallery')) : ?>
    #icon-edit { background:transparent url('<?php echo get_template_directory_uri(); ?>/img/icon_big.png') no-repeat -6px -6px; }
    <?php endif; ?>
    #adminmenu #menu-posts-slide div.wp-menu-image{background:transparent url("<?php echo get_template_directory_uri(); ?>/img/icon_small.png'") no-repeat center top;}
    #adminmenu #menu-posts-slide:hover div.wp-menu-image,#adminmenu #menu-posts-slide.wp-has-current-submenu div.wp-menu-image{background:transparent url("<?php echo get_template_directory_uri(); ?>/img/icon_small.png") no-repeat center -33px;}  
     
    </style>
    <?php
}


    



    // registrazione sidebar
    if (function_exists('register_sidebar')) {
        register_sidebars(5,array(
            'name' => 'Sidebar Widgets %d', 
            'description'   => 'Nessun Widget in questa sidebar.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>'
        ));
    }

    if ( function_exists( 'add_theme_support' ) )
    add_editor_style( 'editor-style.css' );
    add_theme_support( 'automatic-feed-links' );
    add_custom_background( $header_callback, $admin_header_callback, $admin_image_div_callback );
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)
    // additional image sizes 2800 × 2100
    // delete the next line if you do not need additional image sizes
    //add_image_size( 'bg-thumb', 2800, 2100 ); //300 pixels wide (and unlimited height)

    /*aggiungo menu personalizzati per averne solo uno register_nav_menu( 'barra-sup', 'Barra di Navigazione' ); tolgo array*/
    add_action( 'init', 'menu_registration' );
    function menu_registration() {
            register_nav_menu( 'barra-sup', 'Barra di Navigazione' );
    }


// Add the post types
include("functions/theme-posttypes.php");

// Add the Slide meta
include("functions/theme-slidemeta.php");

?>