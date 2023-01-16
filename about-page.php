<?php 
 /* Template Name: About Page */


get_header(); 

?>





        <section class="about_hero" style="background-image:url(linear-gradient(180deg, rgba(2, 18, 24, 0.8), rgba(2, 18, 24, 0.8)),<?php $images = get_field('blog_banner_image_ab');
                                                            $img_url =  $images['url'];
                                                            echo $img_url;
                                                        ?>);">
        <div class="container">
            <div class="content_wrapper">
                <div class="row page_title_row">
                <h1><?php the_title();?></h1>
                        <p><?php the_field('page_sub_title_ab');?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Paragraph Section start -->
    <section class="paragraph_sec">
        <div class="container">
            <div class="content_wrapper_2">
                <p><?php the_field('about_short_description');?></p>
            </div>
        </div>
    </section>
    <!-- Paragraph section end -->

    <!-- Our Mission Section start-->
    <section class="our_mission">
        <div class="container">
            <div class="row our_mission_row">
                <div class="col-md-6">
                    <div class="title_para">
                        <h1 class="our_mission_541"><?php the_field('our_mission'); ?></h1>
                        <p class="mission_left_para"><?php the_field('our_mission_short_description'); ?></p>
                    </div>

                    <div class="mission_done">
                        <div class="row">
                            <div class="col-md-4 mission_done_col">
                               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/housess.png" alt="">
                                <h1><span class="count"><?php the_field('counter_houses');?></span> </h1>
                                <p><?php the_field('counter_houses_title'); ?></p>
                            </div>
                            <div class="col-md-4 mission_done_col">
                               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/field.png" alt="">
                                <h1 ><span class="count"><?php the_field('counter_fields'); ?></span><span>+</span></h1>
                                <p><?php the_field('counter_fields_title'); ?></p>
                            </div>
                            <div class="col-md-4 mission_done_col">
                               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/happy.png" alt="">
                                <h1><span class="count"><?php the_field('counter_happy'); ?></span>+<span></span></h1>
                                <p><?php the_field('counter_happy_title'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mission_img_right">
                   <img src="<?php $images = get_field('about_counter_images');
                                                            $img_url =  $images['url'];
                                                            echo $img_url;
                                                        ?>" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Our mission section end -->

    <!-- Frequently Asked Question section start -->

    <section class="faq_m">
        <div class="container">
            <div class="faq_sec_wrapper">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="faq_title"><?php the_field('about_faq_heading_title'); ?></h1>
                        <p class="faq_para"><?php the_field('about_faq_short_description'); ?></p>
                    </div>
                    <div class="col-md-6">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                                        
                                                         <?php
                                                         
                                                            $get_items = get_field('faq_area');
                                                         
                                                            foreach($get_items as $get_item){
                                                                ?>
                                                               
                                                                    <div class="accordion-item">
                                                                        <h2 class="accordion-header" id="flush-headingOne>">
                                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                                data-bs-target="#flush-collapse<?php echo $get_item['faq_number']; ?>" aria-expanded="false"
                                                                                aria-controls="flush-collapseOne">
                                                                                <?php echo $get_item['faq_title']; ?>
                                                                            </button>
                                                                        </h2>
                                                                        <div id="flush-collapse<?php echo $get_item['faq_number']; ?>" class="accordion-collapse collapse"
                                                                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                                            <div class="accordion-body"><?php echo $get_item['faq_answer_']; ?></div>
                                                                        </div>
                                                                    </div>
                                                                <?php
                                                            }
                                                            
                                                            ?>



                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Frequently Asked Question section end -->

    <!-- contact section start -->
    <section class="contact_about">
        <div class="container">
            <div class="contact_sec_wrapper">
                <div class="row">
                    <div class="col-md-12 sec_title_wrapper">
                        <h1><?php the_field('about_contact_heading_title'); ?></h1>
                        <p><?php the_field('about_contact_sub_heading'); ?></p>
                    </div>
                </div>
                <div class="row top_content">
                <?php
                                                         
                                                         $get_items = get_field('contact_information');
                                                      
                                                         foreach($get_items as $get_item){
                                                             ?>
                                                              <div class="col-md-4">
                                                                <div class="contact_wrapper">
                                                                    <div class="title_contact_box">
                                                                        <h3><?php echo $get_item['contact_info_title']; ?></h3>
                                                                    </div>
                                                                    <p><?php echo $get_item['contact_info_here']; ?></p>
                                                                </div>
                                                            </div>
                                                                  <?php
                                                            }
                                                            
                                                            ?>
                   
               
                </div>
                <div class="row contact_form">
                    <div class="col-md-6">
                        <div class="contact_form_title">
                            <h1>Send message</h1>
                            <p>For general enquiries & further information</p>
                        </div>
                        <div class="contact_form">
                                <?php the_field('about_contact_form_s');?>
                        </div>
                    </div>
                    <div class="col-md-6 google_map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.5802782441397!2d90.42664241536286!3d23.762342294236085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b85209416197%3A0xf5f359e239846b22!2sbdCalling%20IT%20Ltd.!5e0!3m2!1sen!2sbd!4v1670315739738!5m2!1sen!2sbd"
                            width="" height="" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact section end -->
  


<?php get_footer(); ?>