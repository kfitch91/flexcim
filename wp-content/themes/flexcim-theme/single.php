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

<!-- Oct 25: Both the Resources and Services Custom Post Type are reading this file instead of the single-flexcim_services.php file and the single-flexcim_resources.php file-->

<main class="post">
    <div class="container-fluid">
        <?php if(have_posts()) : the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="row">
                <div class="hero single-background">
                    <?php the_title( '<h1 class="hero-title">', '</h1>'); ?>
                </div><!-- End of Hero -->
            </div> <!-- End of Row -->
        </div>
        <div class="container page-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="clearfix">
                        <figure class="float-lg-start single-thumbnail">
                            <?php the_post_thumbnail(); ?>
                        </figure>
                        
                        <div class="single-text-wrap">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    
                </div>
            </div><!-- End of Row -->
        </div><!-- End of Container -->
      
    </div>
    <?php endif; ?>
</main>


 <?php 
 get_footer();
