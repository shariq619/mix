<?php
/**
 * GeneratePress.
 *
 * Please do not make any edits to this file. All edits should be done in a child theme.
 *
 * @package GeneratePress
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

// Set our theme version.
define('GENERATE_VERSION', '2.4.2');

if (!function_exists('generate_setup')) {
    add_action('after_setup_theme', 'generate_setup');
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * @since 0.1
     */
    function generate_setup()
    {
        // Make theme available for translation.
        load_theme_textdomain('generatepress');

        // Add theme support for various features.
        add_theme_support('automatic-feed-links');
        add_theme_support('post-thumbnails');
        add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link', 'status'));
        add_theme_support('woocommerce');
        add_theme_support('title-tag');
        add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support('align-wide');
        add_theme_support('responsive-embeds');

        add_theme_support('custom-logo', array(
            'height' => 70,
            'width' => 350,
            'flex-height' => true,
            'flex-width' => true,
        ));

        // Register primary menu.
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'generatepress'),
        ));

        /**
         * Set the content width to something large
         * We set a more accurate width in generate_smart_content_width()
         */
        global $content_width;
        if (!isset($content_width)) {
            $content_width = 1200; /* pixels */
        }

        // This theme styles the visual editor to resemble the theme style.
        add_editor_style('css/admin/editor-style.css');
    }
}

/**
 * Get all necessary theme files
 */
$theme_dir = get_template_directory();

require $theme_dir . '/inc/theme-functions.php';
require $theme_dir . '/inc/defaults.php';
require $theme_dir . '/inc/class-css.php';
require $theme_dir . '/inc/css-output.php';
require $theme_dir . '/inc/general.php';
require $theme_dir . '/inc/customizer.php';
require $theme_dir . '/inc/markup.php';
require $theme_dir . '/inc/typography.php';
require $theme_dir . '/inc/plugin-compat.php';
require $theme_dir . '/inc/block-editor.php';
require $theme_dir . '/inc/migrate.php';
require $theme_dir . '/inc/deprecated.php';

if (is_admin()) {
    require $theme_dir . '/inc/meta-box.php';
    require $theme_dir . '/inc/dashboard.php';
}

/**
 * Load our theme structure
 */
require $theme_dir . '/inc/structure/archives.php';
require $theme_dir . '/inc/structure/comments.php';
require $theme_dir . '/inc/structure/featured-images.php';
require $theme_dir . '/inc/structure/footer.php';
require $theme_dir . '/inc/structure/header.php';
require $theme_dir . '/inc/structure/navigation.php';
require $theme_dir . '/inc/structure/post-meta.php';
require $theme_dir . '/inc/structure/sidebars.php';


add_action('wp_enqueue_scripts', 'my_admin_ajax');
function my_admin_ajax()
{
    wp_enqueue_script('my-script', get_stylesheet_directory_uri() . '/jsx/myscript.js', array('jquery'));
    wp_localize_script('my-script', 'myAjax', array('ajaxurl' => admin_url('admin-ajax.php')));
}

add_action('wp_ajax_my_action', 'my_callback');
function my_callback()
{
    $city = $_POST['city'];
    $args = array(
        'post_type' => 'location',
        'numberposts' => '1',
        's' => $city,
        'orderby' => array('ID' => 'ASC')
    );
    $query = new WP_Query($args);
    $content = '';
    while ($query->have_posts()) : $query->the_post();
        $content .= '<article id="post-1413" class="elementor-post elementor-grid-item ecs-post-loop post-1413 location type-location status-publish has-post-thumbnail hentry">';
        $img      =      get_the_post_thumbnail_url(get_the_ID(),'full');
        $content .= '<style id="elementor-post-dynamic-9307">';
        $content .=  '.elementor-9307 .elementor-element.elementor-element-6fd3ffc2:not(.elementor-motion-effects-element-type-background) > .elementor-column-wrap, .elementor-9307 .elementor-element.elementor-element-6fd3ffc2 > .elementor-column-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer { background-image: url("'. $img .'"); }';
        $content .= '</style>';
        $content .= '<div data-elementor-type="page" data-elementor-id="9307" class="elementor elementor-9307" data-elementor-settings="[]">';
        $content .= '<div class="elementor-inner">';
        $content .= '<div class="elementor-section-wrap">';
        $content .= '<section class="elementor-section elementor-top-section elementor-element elementor-element-7abd6915 elementor-section-full_width clickable elementor-section-height-default elementor-section-height-default" data-element_type="section" id="clickable" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">';
        $content .= '<div class="elementor-container elementor-column-gap-no">';
        $content .= '<div class="elementor-row">';
        $content .= '<style>';
        $content .= '#post-1413 .elementor-9307 .elementor-element.elementor-element-6fd3ffc2:not(.elementor-motion-effects-element-type-background) > .elementor-column-wrap, #post-1413 .elementor-9307 .elementor-element.elementor-element-6fd3ffc2 > .elementor-column-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer { background-image: url("'. $img .'"); }';
        $content .= '</style>';
        $link      =  get_permalink(get_the_id());
        $content .= '<div class="make-column-clickable-elementor elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6fd3ffc2" style="cursor: pointer;" data-column-clickable="'. $link .'" data-column-clickable-blank="_blank" data-id="6fd3ffc2" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot; }">';
        $content .= '<div class="elementor-column-wrap elementor-element-populated">';
        $content .= '<div class="elementor-background-overlay"></div>';
        $content .= '<div class="elementor-widget-wrap">';
        $content .= '<div class="elementor-element elementor-element-d8e2beb elementor-widget elementor-widget-shortcode" data-id="d8e2beb" data-element_type="widget" data-widget_type="shortcode.default">';
            $content .= '<div class="elementor-widget-container">';
                $content .= '<div class="elementor-shortcode">';
                    $content .=  get_the_id();
                $content .= '</div>';
            $content .= '</div>';
        $content .= '</div>';
        $content .= '<div class="elementor-element elementor-element-2ca3f94 elementor-widget elementor-widget-theme-post-title elementor-page-title elementor-widget-heading" data-id="2ca3f94" data-element_type="widget" data-widget_type="theme-post-title.default">';
            $content .= '<div class="elementor-widget-container">';
                $content .= '<h2 class="elementor-heading-title elementor-size-default">';
                    $content .=  get_the_title();
                $content .= '</h2>';
            $content .= '</div>';
        $content .= '</div>';
        $content .= '<div class="elementor-element elementor-element-fd5f71b elementor-star-rating--align-center elementor--star-style-star_unicode elementor-widget elementor-widget-star-rating" data-id="fd5f71b" data-element_type="widget" data-widget_type="star-rating.default">';
             $content .= '<div class="elementor-widget-container">';
                $content .= '<div class="elementor-star-rating__wrapper">';
                   $content .= '<div class="elementor-star-rating__title">';
                    $content .= 'Overall';
                   $content .= '</div>';
                   $content .= '<div>';
                      $content .=  get_field('overall_score', get_the_id());
                   $content .= '</div>';
                $content .= '</div>';
             $content .= '</div>';
        $content .= '</div>';
        $content .= '<div class="elementor-element elementor-element-ed04e68 elementor-star-rating--align-center elementor--star-style-star_unicode elementor-widget elementor-widget-star-rating" data-id="ed04e68" data-element_type="widget" data-widget_type="star-rating.default">';
            $content .= '<div class="elementor-widget-container">';
                        $content .= '<div class="elementor-star-rating__wrapper">';
                            $content .= '<div class="elementor-star-rating__title">';
                            $content .= 'Education';
                            $content .= '</div>';
                        $content .= '<div>';
                        $content .= get_field('education_star', get_the_id());
                    $content .= '</div>';
                $content .= '</div>';
            $content .= '</div>';
        $content .= '</div>';
        $content .= '<div class="elementor-element elementor-element-c762a7f elementor-star-rating--align-center elementor--star-style-star_unicode elementor-widget elementor-widget-star-rating"
        data-id="c762a7f"
        data-element_type="widget"
        data-widget_type="star-rating.default">';
        $content .= '<div class="elementor-widget-container">';
        $content .= '<div class="elementor-star-rating__wrapper">';
        $content .= '<div class="elementor-star-rating__title">';
        $content .= 'Healthcare';
        $content .= '</div>';
        $content .= '<div>';
        $content .= get_field('healthcare_star', get_the_id());
        $content .= '</div>';
        $content .= '</div>';
        $content .= '</div>';
        $content .= '</div>';
        $content .= '<div class="elementor-element elementor-element-c84b180 elementor-star-rating--align-center elementor--star-style-star_unicode elementor-widget elementor-widget-star-rating"
        data-id="c84b180"
        data-element_type="widget"
        data-widget_type="star-rating.default">';
        $content .= '<div class="elementor-widget-container">';
        $content .= '<div class="elementor-star-rating__wrapper">';
        $content .= '<div class="elementor-star-rating__title">';
        $content .= 'Safety';
        $content .= '</div>';
        $content .= '<div>';
        $content .= get_field('Safety_star', get_the_id());
        $content .= '</div>';
        $content .= '</div>';
        $content .= '</div>';
        $content .= '</div>';
        $content .= '<div class="elementor-element elementor-element-f99c5eb elementor-star-rating--align-center elementor--star-style-star_unicode elementor-widget elementor-widget-star-rating"
        data-id="f99c5eb"
        data-element_type="widget"
        data-widget_type="star-rating.default">';
        $content .= '<div class="elementor-widget-container">';
        $content .= '<div class="elementor-star-rating__wrapper">';
        $content .= '<div class="elementor-star-rating__title">';
        $content .= 'Culture';
        $content .= '</div>';
        $content .= '<div>';
        $content .= get_field('culture', get_the_id());
        $content .= '</div>';
        $content .= '</div>';
        $content .= '</div>';
        $content .= '</div>';
        $content .= '</div>';
        $content .= '</div>';
        $content .= '</div>';
        $content .= '</div>';
        $content .= '</div>';
        $content .= '</section>';
        $content .= '</div>';
        $content .= '</div>';
        $content .= '</div>';
        $content .= '</article>';
    endwhile;
    echo $content;
    wp_reset_query();
    wp_die();
}


                    
                            
                            
                                        
                                        
