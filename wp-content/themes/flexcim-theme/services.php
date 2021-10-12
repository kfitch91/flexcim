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
                <?php the_title( '<h1 class="hero-title">', '</h1>' ) ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php 
                    $args = array(
                        'post_type'     =>      'Flexcim_service',
                        'posts_per_page'    => 3
                    );
                    $the_query  = new WP_Query( $args ); ?>

                    <?php if ( $the_query->have_posts() ) : ?>

                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <h2><?php the_title(); ?></h2>
                        <div>
                            <?php the_content(); ?>
                        </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        
                        <?php endif; ?>
            </div>
        </div>
    </div>
</main>
<?php  
get_footer();

?>
