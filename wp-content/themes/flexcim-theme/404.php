<?php 

get_header();

?>
<main id="site-content" role="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="error404-content error">
                    <h1 class="entry-title"><?php _e( 'Oops!' ); ?></h1>
                    <div class="intro-text">
                        <p><?php _e( 'Sorry, but it doesn\'t look like the page you are looking for exists. It may have been moved, renamed, or removed.' ); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer();
