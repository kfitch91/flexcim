<?php
/**
 * This is the template for the footer
 * Contains the closing of the html
 */
?>

<?php wp_footer(); ?>

    <footer class="footer  mt-auto py-3 footer-nav">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4 footer-break">
                    <h3>Contact Us</h3>
                    <?php get_sidebar( 'footer' ); ?>
                </div>
                <div class="col-sm-12 col-md-4 footer-break">
                    <h3>Sitemap</h3>
                    <div class="footer-sitemap">
                        <ul>
                            <li><a href=#">Link</a></li>
                            <li><a href=#">Link</a></li>
                            <li><a href=#">Link</a></li>       
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 footer-break">
                    <div class="footer-right">
                        <img class="footer-logo" src="http://localhost/flexcim/wp-content/uploads/2021/08/Flexcim_Logo_vert.png" />
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <footer class="footer mt-auto py-3 footer-copy">  
        <div class="container">
            <p class="copyright"><?php echo comicpress_copyright(); ?> - Flexcim Manufacturing Services Inc.</p>
        </div> 
        
    </footer>
</div> <!--#content .site-content-->

</body>
</html>