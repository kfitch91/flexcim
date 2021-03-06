<?php 
/**
 * The Header
 * 
 * This is the template that displays the <head> section and the navigational bar
 * 
 * @package WordPress
 * @subpackage flexcim-theme
 * @since flexcim-theme 1.0
 * 
 */

 ?>

<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="stylesheet" href="https://use.typekit.net/sae8ufw.css">
        <!-- <link rel="icon" href=".http://localhost/flexcim/wp-content/uploads/2021/11/flexcim-favicon-32x32-png.png" type="image/png" sizes="32x32">
        <link rel="apple-touch-icon" sizes="180x180" href="http://localhost/flexcim/wp-content/uploads/2021/11/apple-touch-icon.png"> -->
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
    
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <nav class="navbar call-to-action "> <!--call to action-->
            <div class="container contact-bar">
                <ul class="d-flex flex-row">
                    <li class="p-2">
                        <a class="navbar-text" href="tel:+1-780-465-0109">
                    1(780)465-0109
                        </a> 
                    </li>
                    <li class="p-2">
                        <a class="navbar-text" href="/request-a-quote/">Request a Quote</a> 
                    </li>
                </ul>
            </div>
        </nav>
        
        <nav class="navbar navbar-expand-md">
            <div class="container d-flex">
                <a class="navbar-brand me-lg-auto" href="https://www.flexcim.ca">
                    <img class="header-logo img-fluid" src="https://www.flexcim.ca/wp-content/uploads/2021/08/Flexcim_Logo_horz.png">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#flexcim-menu" aria-controls="flexcim-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span>
                        <div class="hamburger-container" onclick="myFunction(this)">
                            <div class="bar1"></div>
                            <div class="bar2"></div>
                            <div class="bar3"></div>
                        </div>
                    </span>
            
                </button>
                
                <div class="collapse navbar-collapse" id="flexcim-menu">
                    <?php
                    wp_nav_menu(
                        array(
                        'theme_location' => 'flexcim-menu',
                        'container'      => false,
                        'menu_class'     => '',
                        'fallback_cb'    => '__return_false',
                        'items_wrap'     => '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-md-0 menu-nav %2$s">%3$s</ul>',
                        'depth'          => 2,
                        'walker'         => new bootstrap_5_wp_nav_menu_walker()
                        )
                    );
                    ?>
                </div>
            </div>
        </nav>   
    </div>
    <div id="content" class="site-content">
   

