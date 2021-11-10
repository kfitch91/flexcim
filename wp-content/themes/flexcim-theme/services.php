<?php /*Template Name: Services */ 

get_header();
query_posts(array(
    'post_type' => 'flexcim_service'
)); 
?>
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 hero services-background">
                <?php the_title( '<h1 class="hero-title">', '</h1>' ); ?>
            </div>
        </div>
    </div>
    <div class="container page-content ">
    <?php 
        $args = array(
            'post_type'     =>      'Flexcim_service',
            'posts_per_page'    =>  4,
            
            );
            $the_query  = new WP_Query( $args ); ?>

        <?php if ( $the_query->have_posts() ) : ?>

            

        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <div class="row service-posts">        
            <div class="col-lg-5 col-md-12">
                <div class="post-thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 service-content">            
                <h2><?php the_title(); ?></h2>
                <div class="service-excerpt">
                            
                    <?php the_excerpt(); ?>
                </div>
                
            </div> <!-- end col-md-7 -->
        </div> <!-- end row -->

        <!-- The following 3 lines of php need to be after the closing div for row, otherwise the template will be messed up. -->

        <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            
            <?php endif; ?>
    </div>
    
</main>

<?php  
get_footer();