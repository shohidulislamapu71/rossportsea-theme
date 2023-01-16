<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rossport_Sea
 */

?>

            <!-- Footer Area Start -->
                <footer>
                    <div class="footer-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-4">
                                    <div class="footer-items-descript">
                                        <img src="<?php $images = get_field('footer_image','option');
                                                            $img_url =  $images['url'];
                                                            echo $img_url ;
                                                        ?>" alt="">
                                        <p><?php the_field('footer_short_descriptions','option'); ?></p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-2">
                                    <div class="footer-items">
                                        <h6>About us</h6>
                                        <div class="footer-list">
                                            <?php 
                                                echo rossport_sea_nav_menu_footer();
                                            
                                            ?>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3">
                                    <div class="footer-items">
                                        <h6>Services</h6>
                                        <div class="footer-list">
                                        <?php 
                                                echo rossport_sea_nav_menu_footer_services();
                                            
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-3">
                                    <div class="footer-items">
                                        <h6>Follow us</h6>
                                        <div class="footer-lista">
                                                <?php $link_pagef = get_field('facebook_url','option'); $link_pagei = get_field('instagram_url','option');?>
                                                <li><a href=" <?php echo $link_pagef;?>"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="<?php echo $link_pagei;?>"><i class="fa-brands fa-instagram"></i></a></li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-5 col-sm-12">
                                    <div class="footer-bottom-copy-right-area">
                                        <span><?php the_field('footer_copy_right','option'); ?></span>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-7 col-sm-12">
                                    <div class="footer-bottom-area-nav-menu-area">
                                        <?php echo rossport_sea_nav_menu_footer_bottom(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            <!-- Footer Area End -->
            
        </main>
    <!-- Main Area End -->
    <script>
        
    // When the user clicks on div, open the popup
    function myFunction() {
      var popup = document.getElementById("myPopup");
      popup.classList.toggle("show");
    }


    </script>
<?php wp_footer(); ?>

</body>
</html>
