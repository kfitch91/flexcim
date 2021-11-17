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
            <?php the_content();?>

            
         
        </div>
        
    </div>
</main>

<?php
get_footer();

