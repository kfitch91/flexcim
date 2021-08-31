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
  * d
  001 ---------- Theme CSS & JS
  001.1 -------- Bootstrap
  001.2 -------- CSS & JS
  001.3 -------- Fonts
  002 ---------- Menus & Navigational Bars
  002.1 -------- Flexcim Menu
  002.2 -------- bootstrap 5 wp_nav_menu walker
  003 ---------- 




  */
// 001 -- Theme CSS and JS

//001.1 -- Bootstrap
function flexcim_bootstrap_scripts() {
    wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js' , array(), '3.3.1' );
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js' );
}

//001.2 -- Main Theme CSS & JS
add_action( 'wp_enqueue_scripts', 'flexcim_bootstrap_scripts');

function flexcim_theme_scripts() {
    // styles
    
    wp_enqueue_style( 'flexcim-theme-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'queries-style', get_template_directory_uri() . '/assets/css/queries.css' );
    // scripts
   
   wp_enqueue_script( 'flexcim-theme-scripts', get_template_directory_uri() . '/assets/js/scripts.js'); 
  

}
add_action ( 'wp_enqueue_scripts', 'flexcim_theme_scripts');

//001.3 -- Fonts
function flexcim_fonts_scripts() {
    wp_enqueue_style( 'font_css', get_template_directory_uri() .'https://use.typekit.net/sae8ufw.css' );
}

add_action( 'wp_enqueue_scripts', 'flexcim_fonts_scripts');

//Menu & Navigational Bars
//002.1 -- Flexcim Navigational Bar
function flexcim_menu() {
    register_nav_menu( 'flexcim-menu',__( 'Flexcim Menu' ));
}

add_action( 'init', 'flexcim_menu' );


//002.2 -- bootstrap 5 wp_nav_menu walker
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

//003 -- 
?>