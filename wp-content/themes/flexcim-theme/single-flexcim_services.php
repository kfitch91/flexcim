<?php 
/*  Template Name: Featured Services
* Template Post Type: post, foo, bar
*/
get_header(); ?>

<div id="content">
    <?php if(have_posts()) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h1 class="title"><?php the_title(); ?></h1>
        <div class="test">
            <?php the_content() ?>
        </div>
    </div>
</div>
<?php endif; ?>
        
     
 </div>

<?php
get_footer();