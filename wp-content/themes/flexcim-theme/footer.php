<?php
/**
 * This is the template for the footer
 * Contains the closing of the html
 */
?>

<?php wp_footer(); ?>

    <footer class="footer  mt-auto pt-3 footer-nav">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4 footer-break">
                    <h3>Contact Us</h3>
                    <?php get_sidebar( 'footer' ); ?>
                </div>
                <div class="col-sm-12 col-md-4 footer-break ">
                    <div class="footer-link">
                    <h3>Site Map</h3>
                    <div class="footer-sitemap">
                        <ul>
                            <li><a href="https://www.flexcim.ca">Home</a></li>
                            <li><a href="/about/">About</a></li>
                            <li><a href="/flexcim/services/">Services</a></li>
                            <li><a href="https://flexcimstore.com/" target="_blank">Store</a></li>       
                            <li><a href="/resources/">Resources</a></li>
                            <li><a href="/contact/">Contact Us</a></li>
                        </ul>
                    </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 footer-break">
                    <div class="footer-right">
                        <div class="row">
                            <div class="col-xs-12">
                                <img class="footer-logo " src="https://www.flexcim.ca/wp-content/uploads/2021/08/Flexcim_Logo_vert.png" alt="Vertical Flexcim Logo "/>
                            </div>
                        </div>
                    </div>
                        
<!-- <br> -->
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="social ">
                                <a href="https://ca.linkedin.com/company/flexcim-manufacturing-services-inc" target="_blank" class="d-inline-block"><img src="https://www.flexcim.ca/wp-content/uploads/2021/11/linkedIn-social-icon.png" alt="linkedin logo" class="social-icon linked-in "></a>
                                <a href="https://www.facebook.com/Flexcim-Manufacturing-Services-Inc-108624664942289/?hc_ref=ARSVoaQWZ2l2yUHUoUBWJFKq-qPUcCuUvLwTQTPZXCNv8nbQv8dfU2XSa4fofjUkcCo&fref=nf&__tn__=kC-R" target="_blank" class="d-inline-block"><img src="https://www.flexcim.ca/wp-content/uploads/2021/11/facebook-social-icon.png" alt="facebook logo" class="social-icon facebook"></a>
                            </div>
                        </div>
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