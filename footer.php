<?php global $buson_options; ?>
<footer>
    <!-- Footer Start-->
    <div class="footer-area footer-padding">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                    <div class="single-footer-caption mb-50">
                        <div class="single-footer-caption mb-30">
                            <!-- logo -->
                            <div class="footer-logo">
                                <a href="<?php echo site_url();?>"><img
                                        src="<?php echo $buson_options['footer-logo']['url']; ?>" alt=""></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p><?php echo $buson_options['footer-desc']; ?></p>
                                </div>
                            </div>
                            <!-- social -->
                            <div class="footer-social">
                                <a href="<?php echo $buson_options['footer-social-facebook']; ?>"><i
                                        class="fab fa-facebook-square"></i></a>
                                <a href="<?php echo $buson_options['footer-social-twitter']; ?>"><i
                                        class="fab fa-twitter-square"></i></a>
                                <a href="<?php echo $buson_options['footer-social-linkedin']; ?>"><i
                                        class="fab fa-linkedin"></i></a>
                                <a href="<?php echo $buson_options['footer-social-pinterest']; ?>"><i
                                        class="fab fa-pinterest-square"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Company</h4>
                            <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'footer-menu',
                                ))
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Services</h4>
                            <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'footer-menu-2',
                                ))
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Get in Touch</h4>
                            <ul>
                                <li><a href="#"><?php echo $buson_options['footer-number']; ?></a></li>
                                <li><a href="#"><?php echo $buson_options['footer-email']; ?></a></li>
                                <li><a href="#"><?php echo $buson_options['footer-address']; ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom aera -->
    <div class="footer-bottom-area footer-bg">
        <div class="container">
            <div class="footer-border">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-12 ">
                        <div class="footer-copy-right text-center">
                            <p><?php echo $buson_options['footer-copyright-text']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
    <?php wp_footer();?>
</footer>

<!-- JS here -->

<!-- Jquery, Popper, Bootstrap -->


</body>

</html>