<?php 
/*
Template Name: About
 */ 

get_header();

?>
<main class="page">
    <div class="container-fluid">
        <div class="row">
            <div class="hero about-background">
                <?php the_title( '<h1 class="hero-title">', '</h1>' ) ?>
            </div>
        </div>
    </div>
    <div class="container page-content">
        <div class="row">
            
            <div class="col-md-12">
               <?php the_content()?>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
