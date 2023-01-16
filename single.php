<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Rossport_Sea
 */

get_header();

?>

	 <!-- Blog Single Hero section start -->
	 <section class="blog_single_hero">
            <div class="container">
                <div class="content_wrapper">
                    <div class="row page_title_row">
                        <h1><?php the_title();?></h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Single hero section end -->

        <!-- Blog Single Hero section start -->
        <section class="blog_single_main">
            <div class="container">
                <div class="content_wrapper">

                    <div class="main_blog_img1">
						<img src="<?php $images = get_field('blog_single_top_image');
                                                            $img_url =  $images['url'];
                                                            echo $img_url;
                                                        ?>" alt="">
					
                    </div>
                    <div class="main_blog_desp">
                        <?php the_content();?>
                    </div>
                    <div class="main_blog_img2">
						<img src="<?php $images = get_field('blog_single_bottom_image');
                                                            $img_url =  $images['url'];
                                                            echo $img_url;
                                                        ?>" alt="">
					
                    </div>
                    
                        
                        <?php echo do_shortcode(' [aj_likes_btn] '); ?>
                      
                    <div class="contact_form_single">
                        
                           <div class="first_row_form textarea_row_007">
                                <?php
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;
								
								?>
                            </div>
                            <div class="social-btn">
                                <div class="social-ico">
                                    <h1>Share</h1>

                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&text=<?php the_title(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Blog-Single/facebook.png" alt=""></a>
                                    <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Blog-Single/instagram.png" alt=""></a>
                                    <a href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Blog-Single/twitter.png" alt=""></a>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Blog-Single/linkedin.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Blog-Single/link.png" alt="">
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- Blog Single hero section end -->


<?php

get_footer();
