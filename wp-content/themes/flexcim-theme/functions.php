<?php 
/**
 * flexcim-theme functions
 * 
 * @package WordPress
 * @subpackage Flecim-Theme
 * @since Flexcim-Theme 1.0
 * 
 */

 /**Table of Contents
  * 
  001 ---------- Flexcim Theme Support
  001.1 -------- Global Content Width
  002 ---------- Theme CSS & JS
  002.1 -------- Bootstrap
  002.2 -------- CSS & JS
  002.3 -------- Fonts
  003 ---------- Menus & Navigational Bars
  003.1 -------- Flexcim Menu
  003.2 -------- bootstrap 5 wp_nav_menu walker
  004 ---------- Footer
  004.1--------- Copyright
  005 ---------- Sidebar and Widgets
  005.1 -------- Registering Sidebar
  006 ---------- Logo
  006.1 -------- Custom Logo
  007 ---------- Backgound
  007.1 -------- Custom Backgound
  008 ---------- Custom Post Type




  */
  //001 -- Flexcim Theme Support

  //001.1 -- Global Content Width
function flexcim_theme_support(){
  //set content-width.
  global $content_width;
  if ( ! isset( $content_width) ) {
    $content_width = 600;
  }
}

// 002 -- Theme CSS and JS

//002.1 -- Bootstrap
function flexcim_bootstrap_scripts() {
    wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js' , array(), '3.3.1' );
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js' );
}

//002.2 -- Main Theme CSS & JS
add_action( 'wp_enqueue_scripts', 'flexcim_bootstrap_scripts');

function flexcim_theme_scripts() {
    // styles
    
    wp_enqueue_style( 'flexcim-theme-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'queries-style', get_template_directory_uri() . '/assets/css/queries.css' );
    // scripts
   
   wp_enqueue_script( 'flexcim-theme-scripts', get_template_directory_uri() . '/assets/js/scripts.js'); 
  

}
add_action ( 'wp_enqueue_scripts', 'flexcim_theme_scripts');

//002.3 -- Fonts
function flexcim_fonts_scripts() {
    wp_enqueue_style( 'font_css', get_template_directory_uri() .'https://use.typekit.net/sae8ufw.css' );
}

add_action( 'wp_enqueue_scripts', 'flexcim_fonts_scripts');

//Menu & Navigational Bars
//003.1 -- Flexcim Navigational Bar
function flexcim_menu() {
    register_nav_menu( 'flexcim-menu',__( 'Flexcim Menu' ));
}



add_action( 'init', 'flexcim_menu' );


//003.2 -- bootstrap 5 wp_nav_menu walker
class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_menu
{
  private $current_item;
  private $dropdown_menu_alignment_values = [
    'dropdown-menu-start',
    'dropdown-menu-end',
    'dropdown-menu-sm-start',
    'dropdown-menu-sm-end',
    'dropdown-menu-md-start',
    'dropdown-menu-md-end',
    'dropdown-menu-lg-start',
    'dropdown-menu-lg-end',
    'dropdown-menu-xl-start',
    'dropdown-menu-xl-end',
    'dropdown-menu-xxl-start',
    'dropdown-menu-xxl-end'
  ];

  function start_lvl(&$output, $depth = 0, $args = null)
  {
    $dropdown_menu_class[] = '';
    foreach($this->current_item->classes as $class) {
      if(in_array($class, $this->dropdown_menu_alignment_values)) {
        $dropdown_menu_class[] = $class;
      }
    }
    $indent = str_repeat("\t", $depth);
    $submenu = ($depth > 0) ? ' sub-menu' : '';
    $output .= "\n$indent<ul class=\"dropdown-menu$submenu " . esc_attr(implode(" ",$dropdown_menu_class)) . " depth_$depth\">\n";
  }

  function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
  {
    $this->current_item = $item;

    $indent = ($depth) ? str_repeat("\t", $depth) : '';

    $li_attributes = '';
    $class_names = $value = '';

    $classes = empty($item->classes) ? array() : (array) $item->classes;

    $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
    $classes[] = 'nav-item';
    $classes[] = 'nav-item-' . $item->ID;
    if ($depth && $args->walker->has_children) {
      $classes[] = 'dropdown-menu dropdown-menu-end';
    }

    $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
    $class_names = ' class="' . esc_attr($class_names) . '"';

    $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
    $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

    $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';

    $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
    $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
    $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
    $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

    $active_class = ($item->current || $item->current_item_ancestor || in_array("current_page_parent", $item->classes, true) || in_array("current-post-ancestor", $item->classes, true)) ? 'active' : '';
    $nav_link_class = ( $depth > 0 ) ? 'dropdown-item ' : 'nav-link ';
    $attributes .= ( $args->walker->has_children ) ? ' class="'. $nav_link_class . $active_class . ' dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="'. $nav_link_class . $active_class . '"';

    $item_output = $args->before;
    $item_output .= '<a' . $attributes . '>';
    $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
    $item_output .= '</a>';
    $item_output .= $args->after;

    $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
  }
}
// register a new menu
register_nav_menu('main-menu', 'Main menu');

//004 -- Footer
//004.1 -- Copyright

function comicpress_copyright() {
  global $wpdb;
  $copyright_dates = $wpdb->get_results("
  SELECT
  YEAR(min(post_date_gmt)) AS firstdate,
  YEAR(max(post_date_gmt)) AS lastdate
  FROM
  $wpdb->posts
  WHERE
  post_status = 'publish'
  ");
  $output = '';
  if($copyright_dates) {
  $copyright = "&copy; " . $copyright_dates[0]->firstdate;
  if($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
  $copyright .= '-' . $copyright_dates[0]->lastdate;
  }
  $output = $copyright;
  }
  return $output;
  }

  //005 -- Sidebar and Widgets
  //005.1 -- Registering Sidebar
function flexcim_theme_widgets_init() {
  register_sidebar( 
    array(
    'name'          =>__( 'Footer', 'Flexcim_theme' ),
    'id'            => 'footer',
    'description'   => __('Add widgets to appear in the footer'),
    'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="address">',
    'after_title'   => '</h3>',
  ));
}
add_action( 'widgets_init', 'flexcim_theme_widgets_init' );
 
//broken function
// function flexcim_theme_widgets_init() {
  
//   $my_sidebars = array(
//   'name'          =>__( 'Footer', 'Flexcim_theme' ),
//   'id'            => 'footer',
//   'description'   => __('Add widgets to appear in the footer'),
//   'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
//   'after_widget'  => '</div>',
//   'before_title'  => '<h3 class="address">',
//   'after_title'   => '</h3>',
// );
//   $defaults = array(
//     'name'           =>__( 'Contact', 'Flexcim_theme' ),
//     'id'             =>'contact-widget',
//     'description'    =>__('Add widgets to appear in the contact form'),
//     'before_widget'  =>'<div id="%1$s" class="contact-address %2$s">', 
//     'after_widget'   =>'</div>',
//     'before_title'   =>'<h3 class="contact-heading">',
//     'after_title'    =>'</h3>'
//   );

//   foreac( $my_sidebars  as $sidebar ) {
//     $args = wp_parse_args( $sidebar, $defaults );
//     register_sidebar ( $args );
//   }
// );
// }
// add_action( 'widgets_init', 'flexcim_theme_widgets_init' );

//006 -- Logo
//006.1 -- Custom Logo

function flexcim_custom_logo_setup() {
  $defaults = array (
    'height'        => 100,
    'width'         => 400,
    'flex-height'   => true,
    'flex-width'    => true,

  );
  add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'flexcim_custom_logo_setup' );

// 007 -- Backgound
//007.1 -- Custom Background

$defaults = array(
	'default-color'          => '',
	'default-image'          => '',
	'default-repeat'         => 'repeat',
	'default-position-x'     => 'left',
  'default-position-y'     => 'top',
  'default-size'           => 'auto',
	'default-attachment'     => 'scroll',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );

// 008  - Custom Post type


function flexcim_custom_post_type() {
  register_post_type('flexcim_service',
      array(
          'labels'      => array(
              'name'          => __('Services', 'textdomain'),
              'singular_name' => __('Service', 'textdomain'),
            ),
          'public'        => true,
          'has_archive'   => false,
          'rewrite'       => array('slug' => 'services'),
          'show_in_rest'  => true, //this allows the guttenburg editor to show
          'supports'      => array(
            'title',
            'page-attributes',
            'post-formats',
            'excerpt',
            'custom-fields',
            'editor',
            'template',
          ),
      )

  );
  register_post_type('flexcim_resource',
    array(
          'labels'      => array(
              'name'      =>__('resources', 'textdomain'),
              'singular_name'   =>__('resource', 'textdomain'),
          ),
            'public'        => true,
            'has_archive'   => true,
            'rewrite'       => array('slug' => 'resources'),
            'hierarchical'  => true,
            'show_in_rest'  => true,
            'supports'      => array(
              'title',
              'editor',
              'thumbnail',
              'revisions',
              'page-attributes',
              'post-formats',
              'excerpt',
              'custom-fields',
            ),
      )

  );
}

add_action('init', 'flexcim_custom_post_type');

?>