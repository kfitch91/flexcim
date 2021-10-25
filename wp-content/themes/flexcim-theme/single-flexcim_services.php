<?php 
/*  Template Name: Featured Services
* Template Post Type: post, foo, bar
*/
get_header(); ?>
<!-- Oct 25: Wordpress is still not recognizing the custom post type, and is calling the single.php file to read the post.-->
<main class="post">
    <?php if(have_posts()) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <?php the_title( '<h1 class="hero-title>', '</h1>' ); ?>
                </div>
            </div><!--End of Row-->
        </div><!--End of Container-Fluid-->
        <div class="container page-content">
            <div class="row">
                <div class="col-md-12">
                    <?php the_content() ?>
                    <p class="testing">
                    Stinking bishop say cheese smelly cheese. Cheese triangles squirty cheese fromage frais stinking bishop the big cheese manchego boursin melted cheese. Brie melted cheese when the cheese comes out everybody's happy port-salut emmental bavarian bergkase fromage queso. Port-salut.
                    </p>
                </div>
            </div><!--End of Row-->
        </div><!--End of Container Page-Content-->
    </div><!--End of id="Post"-->
    <?php endif; ?>
</main><!--End of Class="Post"-->



<?php
get_footer();