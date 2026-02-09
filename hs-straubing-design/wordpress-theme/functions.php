<?php
/**
 * HS-Straubing Theme Functions
 * 
 * @package HS_Straubing
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Theme Setup
 */
function hs_straubing_theme_setup() {
    
    // Add theme support for various features
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );
    
    // Add theme support for Gutenberg
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'editor-styles' );
    add_editor_style( 'assets/css/editor-style.css' );
    
    // Custom image sizes
    add_image_size( 'hs-hero', 1920, 1080, true );
    add_image_size( 'hs-card', 800, 600, true );
    add_image_size( 'hs-team', 450, 450, true );
    add_image_size( 'hs-thumbnail', 400, 400, true );
    
    // Register navigation menus
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'hs-straubing' ),
        'footer'  => __( 'Footer Menu', 'hs-straubing' ),
    ) );
    
    // Load text domain for translations
    load_theme_textdomain( 'hs-straubing', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'hs_straubing_theme_setup' );

/**
 * Enqueue Scripts and Styles
 */
function hs_straubing_enqueue_scripts() {
    
    // Google Fonts - Montserrat
    wp_enqueue_style(
        'hs-straubing-fonts',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap',
        array(),
        null
    );
    
    // Main stylesheet
    wp_enqueue_style(
        'hs-straubing-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get( 'Version' )
    );
    
    // Components CSS
    wp_enqueue_style(
        'hs-straubing-components',
        get_template_directory_uri() . '/assets/css/components.css',
        array( 'hs-straubing-style' ),
        wp_get_theme()->get( 'Version' )
    );
    
    // Swiper CSS (for sliders)
    wp_enqueue_style(
        'swiper',
        'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css',
        array(),
        '10.0.0'
    );
    
    // Main JavaScript
    wp_enqueue_script(
        'hs-straubing-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array( 'jquery' ),
        wp_get_theme()->get( 'Version' ),
        true
    );
    
    // Swiper JS
    wp_enqueue_script(
        'swiper',
        'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js',
        array(),
        '10.0.0',
        true
    );
    
    // Comment reply script
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
    
    // Localize script
    wp_localize_script( 'hs-straubing-main', 'hsStraubing', array(
        'ajaxUrl' => admin_url( 'admin-ajax.php' ),
        'nonce'   => wp_create_nonce( 'hs-straubing-nonce' ),
    ) );
}
add_action( 'wp_enqueue_scripts', 'hs_straubing_enqueue_scripts' );

/**
 * Register Widget Areas
 */
function hs_straubing_widgets_init() {
    
    register_sidebar( array(
        'name'          => __( 'Footer Column 1', 'hs-straubing' ),
        'id'            => 'footer-1',
        'description'   => __( 'Add widgets here to appear in footer column 1.', 'hs-straubing' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name'          => __( 'Footer Column 2', 'hs-straubing' ),
        'id'            => 'footer-2',
        'description'   => __( 'Add widgets here to appear in footer column 2.', 'hs-straubing' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name'          => __( 'Footer Column 3', 'hs-straubing' ),
        'id'            => 'footer-3',
        'description'   => __( 'Add widgets here to appear in footer column 3.', 'hs-straubing' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'hs_straubing_widgets_init' );

/**
 * Custom Post Types
 */
function hs_straubing_register_post_types() {
    
    // Services/Leistungen
    register_post_type( 'service', array(
        'labels' => array(
            'name'               => __( 'Services', 'hs-straubing' ),
            'singular_name'      => __( 'Service', 'hs-straubing' ),
            'add_new'            => __( 'Add New', 'hs-straubing' ),
            'add_new_item'       => __( 'Add New Service', 'hs-straubing' ),
            'edit_item'          => __( 'Edit Service', 'hs-straubing' ),
            'new_item'           => __( 'New Service', 'hs-straubing' ),
            'view_item'          => __( 'View Service', 'hs-straubing' ),
            'search_items'       => __( 'Search Services', 'hs-straubing' ),
            'not_found'          => __( 'No services found', 'hs-straubing' ),
            'not_found_in_trash' => __( 'No services found in Trash', 'hs-straubing' ),
        ),
        'public'       => true,
        'has_archive'  => true,
        'show_in_rest' => true,
        'menu_icon'    => 'dashicons-admin-tools',
        'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'rewrite'      => array( 'slug' => 'leistungen' ),
    ) );
    
    // Team Members
    register_post_type( 'team', array(
        'labels' => array(
            'name'               => __( 'Team', 'hs-straubing' ),
            'singular_name'      => __( 'Team Member', 'hs-straubing' ),
            'add_new'            => __( 'Add New', 'hs-straubing' ),
            'add_new_item'       => __( 'Add New Team Member', 'hs-straubing' ),
            'edit_item'          => __( 'Edit Team Member', 'hs-straubing' ),
            'new_item'           => __( 'New Team Member', 'hs-straubing' ),
            'view_item'          => __( 'View Team Member', 'hs-straubing' ),
            'search_items'       => __( 'Search Team', 'hs-straubing' ),
            'not_found'          => __( 'No team members found', 'hs-straubing' ),
            'not_found_in_trash' => __( 'No team members found in Trash', 'hs-straubing' ),
        ),
        'public'       => true,
        'has_archive'  => false,
        'show_in_rest' => true,
        'menu_icon'    => 'dashicons-groups',
        'supports'     => array( 'title', 'editor', 'thumbnail' ),
        'rewrite'      => array( 'slug' => 'team' ),
    ) );
    
    // Testimonials/Referenzen
    register_post_type( 'testimonial', array(
        'labels' => array(
            'name'               => __( 'Testimonials', 'hs-straubing' ),
            'singular_name'      => __( 'Testimonial', 'hs-straubing' ),
            'add_new'            => __( 'Add New', 'hs-straubing' ),
            'add_new_item'       => __( 'Add New Testimonial', 'hs-straubing' ),
            'edit_item'          => __( 'Edit Testimonial', 'hs-straubing' ),
            'new_item'           => __( 'New Testimonial', 'hs-straubing' ),
            'view_item'          => __( 'View Testimonial', 'hs-straubing' ),
            'search_items'       => __( 'Search Testimonials', 'hs-straubing' ),
            'not_found'          => __( 'No testimonials found', 'hs-straubing' ),
            'not_found_in_trash' => __( 'No testimonials found in Trash', 'hs-straubing' ),
        ),
        'public'       => true,
        'has_archive'  => false,
        'show_in_rest' => true,
        'menu_icon'    => 'dashicons-format-quote',
        'supports'     => array( 'title', 'editor', 'thumbnail' ),
        'rewrite'      => array( 'slug' => 'referenzen' ),
    ) );
    
    // Projects/Portfolio
    register_post_type( 'project', array(
        'labels' => array(
            'name'               => __( 'Projects', 'hs-straubing' ),
            'singular_name'      => __( 'Project', 'hs-straubing' ),
            'add_new'            => __( 'Add New', 'hs-straubing' ),
            'add_new_item'       => __( 'Add New Project', 'hs-straubing' ),
            'edit_item'          => __( 'Edit Project', 'hs-straubing' ),
            'new_item'           => __( 'New Project', 'hs-straubing' ),
            'view_item'          => __( 'View Project', 'hs-straubing' ),
            'search_items'       => __( 'Search Projects', 'hs-straubing' ),
            'not_found'          => __( 'No projects found', 'hs-straubing' ),
            'not_found_in_trash' => __( 'No projects found in Trash', 'hs-straubing' ),
        ),
        'public'       => true,
        'has_archive'  => true,
        'show_in_rest' => true,
        'menu_icon'    => 'dashicons-portfolio',
        'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'rewrite'      => array( 'slug' => 'projekte' ),
    ) );
}
add_action( 'init', 'hs_straubing_register_post_types' );

/**
 * Add Custom Logo Support with Default Settings
 */
function hs_straubing_custom_logo_setup() {
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 250,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
}
add_action( 'after_setup_theme', 'hs_straubing_custom_logo_setup' );

/**
 * Excerpt Length
 */
function hs_straubing_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'hs_straubing_excerpt_length' );

/**
 * Excerpt More
 */
function hs_straubing_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'hs_straubing_excerpt_more' );

/**
 * Add body classes
 */
function hs_straubing_body_classes( $classes ) {
    
    // Add class for single posts
    if ( is_singular() ) {
        $classes[] = 'single-' . get_post_type();
    }
    
    // Add class for archive pages
    if ( is_archive() ) {
        $classes[] = 'archive-page';
    }
    
    return $classes;
}
add_filter( 'body_class', 'hs_straubing_body_classes' );

/**
 * ACF Options Page (requires ACF Pro)
 */
if ( function_exists( 'acf_add_options_page' ) ) {
    
    acf_add_options_page( array(
        'page_title' => __( 'Theme General Settings', 'hs-straubing' ),
        'menu_title' => __( 'Theme Settings', 'hs-straubing' ),
        'menu_slug'  => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect'   => false,
    ) );
    
    acf_add_options_sub_page( array(
        'page_title'  => __( 'Header Settings', 'hs-straubing' ),
        'menu_title'  => __( 'Header', 'hs-straubing' ),
        'parent_slug' => 'theme-general-settings',
    ) );
    
    acf_add_options_sub_page( array(
        'page_title'  => __( 'Footer Settings', 'hs-straubing' ),
        'menu_title'  => __( 'Footer', 'hs-straubing' ),
        'parent_slug' => 'theme-general-settings',
    ) );
}

/**
 * Security: Remove WordPress version from head
 */
remove_action( 'wp_head', 'wp_generator' );

/**
 * Performance: Disable emojis
 */
function hs_straubing_disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'init', 'hs_straubing_disable_emojis' );
