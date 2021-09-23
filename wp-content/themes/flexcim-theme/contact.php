<?php 
/*
Template Name: Contact 
*/ 

get_header();
?>

<main class="page">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                
            </div>
            <div class="col-md-6">
                <?php the_title( '<h1>', '</h1>' ) ?>
            <?php echo do_shortcode('[forminator_form id="78"]'); ?>
         </div>
        </div>
    </div>
</main>

<?php
get_footer();

?>