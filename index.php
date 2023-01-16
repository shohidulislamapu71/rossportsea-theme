<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Rossport_Sea
 */

get_header();


?>

	 <!-- Hero section start -->
     <section class="blog_hero" style="background-image:url(linear-gradient(180deg, rgba(2, 18, 24, 0.8), rgba(2, 18, 24, 0.8)),<?php $images = get_field('blog_banner_image');
                                                            $img_url =  $images['url'];
                                                            echo $img_url;
                                                        ?>);">
            <div class="container">
                <div class="content_wrapper">
                    <div class="row page_title_lk">
                        <h1><?php the_title();?></h1>
                        <p><?php the_field('page_sub_title');?></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero section end -->
 
       
       <section class="blog_archive_58">

           <div class="container">
               <div class="wrapper_blog">
                <div class="row blog_0909">

                    <?php
                        
                        $query = new WP_Query(array(
                            'post_types' => 'post',
                            'order' => 'ASC',
                        ));

                        while($query->have_posts()): $query->the_post();
                            ?>
                            
                             <div class="blog_card_99">
                             <a href="<?php the_permalink(); ?>">
                                <div class="img_blog">
                                    <?php the_post_thumbnail('full'); ?>
                                </div>
                                <div class="blog_description">
                                    <h6><?php the_title(); ?></h6>
                                    <p><?php echo wp_trim_words(get_the_content(), 40, ' ');?></p>
                                </div>
                                <div class="blog_desc-99">
                                    <div class="blog_date_00">
                                        <p><?php echo apply_filters( 'the_date', get_the_date(), get_option( 'date_format' ), '', '' ); ?></p>
                                    </div>
                                    <div class="blog_avatar_009">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/vector.png">
                                    
                                    <span><?php the_author(); ?></span>

                                    </div>
                                </div>
                                </a>
                            </div>
                            
                            
                            <?php
                            
                        endwhile;
                        
                ?><div class="pasination text-center">
                    <?php
                     the_posts_pagination( array(
                        'mid_size'  => 1,
                        'prev_text' => __( 'Prev', 'textdomain' ),
                        'next_text' => __( 'Next', 'textdomain' ),
                    ) );
                    ?>
                </div><?php
               
                

                    ?>

                   


                </div>
           </div>
       </section>



<?php

get_footer();
