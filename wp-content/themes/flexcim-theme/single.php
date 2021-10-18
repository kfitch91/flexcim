<?php
/**
 * The Template for displaying all single posts and attachments
 * 
 * @package WordPress
 * @subpackage flexcim-theme
 * 
 */

 get_header();
 ?>


<main class="post">
    <?php if(have_posts()) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero single-background">
                        <?php the_title( '<h1 class="hero-title">', '</h1>') ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container page-content">
            <div class="row">
                <div class="col-md-12">
                    <?php the_post_thumbnail(); ?>
                    <?php the_content() ?>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
</main>


 <?php 
 get_footer();
