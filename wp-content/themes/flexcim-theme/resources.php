<?php /*Template Name: Resources */ 

get_header();
query_posts(array(
    'post_type' => 'flexcim_resource'
)); 
?>
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 hero resources-background">
                <?php the_title( '<h1 class="hero-title">', '</h1>' ); ?>
            </div>
        </div>
    </div>
    <div class="container page-content">
        <?php
            $args = array(
                    'post_type'     => 'flexcim_resource',
                    'posts_per_page'    => 3
                );
                $the_query = new WP_Query( $args ); ?>

            <?php if ( $the_query->have_posts() ) : ?>
                        
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <div class="row resources-posts">
            <div class="col-md-7">
               
                <h2><?php the_title(); ?></h2>
                <div class="resource-excerpt">
                    <?php the_excerpt(); ?>
                </div>
            </div>
            <div class="col-md-5">
                <div class="post-thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div>
            </div>
                       
        </div><!--end row-->
         <!-- The following 3 lines of php need to be after the closing div for row, otherwise the template will be messed up. -->
        <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

            <?php endif ?>
    </div>
</main>


<?php 
get_footer();


