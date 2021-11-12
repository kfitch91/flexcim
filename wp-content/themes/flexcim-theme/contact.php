<?php 
/*
Template Name: Contact 
*/ 

get_header();
?>

<main class="page">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php the_title( '<h1  class="contact-header">', '</h1>' ); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="contact-content">
                    <?php the_content();?>
                </div>
            </div>
            <div class="col-md-6">
                <?php echo do_shortcode('[forminator_form id="78"]'); ?>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();

