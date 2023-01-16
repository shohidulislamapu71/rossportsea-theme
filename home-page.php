<?php 
 /* Template Name: Home Page */


get_header(); 

?>
  <!-- Hero Slider Area Start -->

  <section class="slider-hero-area">
                    <div class="slider-hero-class text-center">
                        <?php
                        
                        $query = new WP_Query(array(
                            'post_type' => 'hero-slider',
                            'posts_per_page' => -1,
                        ));
                        
                       
                   
                          while($query->have_posts()): $query->the_post();

                          ?>
                            <div class="hero-slider-single-item" style="background-image: url(<?php the_post_thumbnail_url();?>);">
                                <div class="slider-text-area">
                                        <h4><?php the_field('hero_slider_main_title');?></h4>
                                        <span><?php the_field('hero_slider_sub_title');?></span><br>
                                        <a class="btn" href="<?php $link_page = get_field('hero_slider_button_url');  echo $link_page; ?>"><?php the_field('hero_slider_button_title');?></a>
                                    </div>
                                  </div>
                          <?php

                    endwhile;

                    ?>
                        
                             
                    
                        
                       
                        


                        
                    </div>
                </section>

            <!-- Hero Slider Area End -->
            <section class="container g-0 prop__search">
    <div class="search__form--wrapper">
      <form action="#">
        <div class="prop__search--form">
          <div class="property__name--group">
            <div class="prop__field property__name">
              <label class="form-label" for="propertyName">Property</label>
              <input type="text" class="form-control" placeholder="property name" name="propertyName"
                id="propertyName" />
            </div>
          </div>
          <div class="prop__field property__checkin">
            <label class="form-label" for="propertyCheckin">Check-in</label>
            <input type="text" class="form-control" placeholder="Select date" name="propertyCheckin"
              id="propertyCheckin" />
          </div>
          <div class="prop__field property__checkoiut">
            <label class="form-label" for="propertyCheckout">Check-out</label>
            <input type="text" class="form-control" placeholder="Select date" name="propertyCheckout"
              id="propertyCheckout" />
          </div>
          <div class="prop__field property__guest">
            <label class="form-label" for="propertyGuest">Guests</label>
            <input type="text" class="form-control" placeholder="Guests name" name="propertyGuest"
              id="propertyGuest" />
          </div>
          <div class="prop__field property__search--btn show-modal" data-toggle="modal" data-target="#myModal">
            <label class="invisible form-label" for="propertyGuest">Search</label>
            <input type="submit" value="Search" class="form-control btn btn-primary" name="propertySearchBtn" id="propertySearchBtn" />
          </div>
        </div>
      </form>
    </div>
  </section>
  <section class="container g-0 search__result">
    <div class="">
      <div class="result__header">
        <div class="result__header--block">
          <h2 class="t__2 result__title">Our Property</h2>
          <p class="p__2 result__subtitle">
            18 privately located cabins, cottages, houses and an estate, you
            are certain to find the right place for you.
          </p>
        </div>
        <div class="result__filter--block">
          
          <div class="hm-pp popup btn btn-primary result__filter--btn" onclick="myFunction()">All Property List <i class="fa-solid fa-chevron-down result__dropdown"></i>
            <div class="popuptext" id="myPopup">
              <div class="landing-pg-popup">
                <div class="control-group">
                    <label class="control control-checkbox">
                        Cobscook Look
                        <input type="checkbox" checked="checked" />
                        <div class="control_indicator"></div>
                    </label>
                    <label class="control control-checkbox">
                        Bunk House Cabin
                        <input type="checkbox" />
                        <div class="control_indicator"></div>
                    </label>
                    <label class="control control-checkbox">
                        Captain Jacob Lincoln 1790 Farmhouse
                        <input type="checkbox" />
                        <div class="control_indicator"></div>
                    </label>
                    <label class="control control-checkbox">
                        Maine House
                        <input type="checkbox" />
                        <div class="control_indicator"></div>
                    </label>
                    <label class="control control-checkbox">
                        House On Half-Moon Cove
                        <input type="checkbox" />
                        <div class="control_indicator"></div>
                    </label>
                    <label class="control control-checkbox">
                        Quoddy Cottage
                        <input type="checkbox" />
                        <div class="control_indicator"></div>
                    </label>
                    <label class="control control-checkbox">
                        Sea Breeze Cottage
                        <input type="checkbox" />
                        <div class="control_indicator"></div>
                    </label>
                    <label class="control control-checkbox">
                        Tide Water Cottage and Loft
                        <input type="checkbox" />
                        <div class="control_indicator"></div>
                    </label>
                    <label class="control control-checkbox">
                        Ocean Bay Cottage and Loft
                        <input type="checkbox" />
                        <div class="control_indicator"></div>
                    </label>
                    <label class="control control-checkbox">
                        Ebb Tide Cottage
                        <input type="checkbox" />
                        <div class="control_indicator"></div>
                    </label>
            
                    
                </div>
                <div class="control-group">
                    <label class="control control-checkbox">
                        Apple Cove Cabin
                        <input type="checkbox" />
                        <div class="control_indicator"></div>
                    </label>
                    <label class="control control-checkbox">
                        Bold-Coast Estate
                        <input type="checkbox" />
                        <div class="control_indicator"></div>
                    </label>
                    <label class="control control-checkbox">
                        Bayside Cabin
                        <input type="checkbox" />
                        <div class="control_indicator"></div>
                    </label>
                    <label class="control control-checkbox">
                        Sunset Cove Cabin
                        <input type="checkbox" />
                        <div class="control_indicator"></div>
                    </label>
                    <label class="control control-checkbox">
                        Seaside Sea Bee Quarters Studio.
                        <input type="checkbox" />
                        <div class="control_indicator"></div>
                    </label>
                    <label class="control control-checkbox">
                        Seaside Sea Bee Quarters 2
                        <input type="checkbox" />
                        <div class="control_indicator"></div>
                    </label>
                    <label class="control control-checkbox">
                        Seaside Sea Bee Quarters 3
                        <input type="checkbox" />
                        <div class="control_indicator"></div>
                    </label>
                    <label class="control control-checkbox">
                        Seaside Sea Bee Quarters 4
                        <input type="checkbox" />
                        <div class="control_indicator"></div>
                    </label>
                    <label class="control control-checkbox">
                        14 Third Street #A
                        <input type="checkbox" />
                        <div class="control_indicator"></div>
                    </label>
                    <label class="control control-checkbox">
                        14 Third Street #B
                        <input type="checkbox" />
                        <div class="control_indicator"></div>
                    </label>
            
                    
                </div>
              </div>    
            </div>
          </div>
          
        </div>
      </div>
      <!-- result_header ends -->
                    <?php echo do_shortcode('[Product_bdcalling]'); ?>



                     <!-- result_header ends -->
      
    </div>
  </section>

  <section class="container g-0 pet__friendly">
    <div class="">
      <div class="result__header">
        <div class="result__header--block">
          <h2 class="t__2 result__title">Pet Friendly</h2>
          <p class="p__2 result__subtitle">
            Several cottages are designated dog-friendly. And can be booked
            online
          </p>
        </div>
      </div>
      <!-- result_header ends -->
      <div class="search__result--container">
        <div class="search__result--block">
          <div class="our__property--slider">
            <div class="property__item">
              <div class="property__media">
                <button class="btn fev__btn">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <div class="property__slider">
                  <div class="slider__list">
                    <div class="slider__list--item">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide1.jpg" alt="" />
                    </div>
                    <div class="slider__list--item">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide1.jpg" alt="" />
                    </div>
                    <div class="slider__list--item">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide1.jpg" alt="" />
                    </div>
                    <div class="slider__list--item">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide1.jpg" alt="" />
                    </div>
                  </div>
                  <div class="property__slider--dots"></div>
                </div>
                <a href="#" class="cat__tag">Pet Friendly</a>
              </div>
              <div class="prop__detail-block">
                <div class="property__title">
                  <h3 class="t__3 property__item--title">
                    Cobscook Look-Out At Rossport by the Sea
                  </h3>
                </div>
                <div class="property__details">
                  <div class="property__desc">
                    <p class="p__3 property__item--desc">
                      The Cobscook Look-Out House is a spacious 3 bedroom, 2.5
                      bathrooms...
                    </p>
                  </div>
                  <div class="property__price">
                    <p class="p__4 property__item--price">$350</p>
                  </div>
                </div>
                <div class="d-flex property__meta--container">
                  <div class="property__meta">
                    <div class="prop__data property__meta--icon">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/person.svg" alt="" class="img-fluid" />
                    </div>

                    <div class="prop__data property__meta--data">
                      <span class="meta__count">6</span>
                      <span class="meta__lebel">Guests</span>
                    </div>
                  </div>

                  <div class="property__meta">
                    <div class="prop__data property__meta--icon">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/bed.png" alt="" class="img-fluid" />
                    </div>

                    <div class="prop__data property__meta--data">
                      <span class="meta__count">6</span>
                      <span class="meta__lebel">Bed</span>
                    </div>
                  </div>
                  <div class="property__meta">
                    <div class="prop__data property__meta--icon">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/bath.png" alt="" class="img-fluid" />
                    </div>

                    <div class="prop__data property__meta--data">
                      <span class="meta__count">6</span>
                      <span class="meta__lebel">Bathroom</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="property__item">
              <div class="property__media">
                <button class="btn fev__btn">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <div class="property__slider">
                  <div class="slider__list">
                    <div class="slider__list--item">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide1.jpg" alt="" />
                    </div>
                    <div class="slider__list--item">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide1.jpg" alt="" />
                    </div>
                    <div class="slider__list--item">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide1.jpg" alt="" />
                    </div>
                    <div class="slider__list--item">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide1.jpg" alt="" />
                    </div>
                  </div>
                  <div class="property__slider--dots"></div>
                </div>
                <a href="#" class="cat__tag">Pet Friendly</a>
              </div>
              <div class="prop__detail-block">
                <div class="property__title">
                  <h3 class="t__3 property__item--title">
                    Cobscook Look-Out At Rossport by the Sea
                  </h3>
                </div>
                <div class="property__details">
                  <div class="property__desc">
                    <p class="p__3 property__item--desc">
                      The Cobscook Look-Out House is a spacious 3 bedroom, 2.5
                      bathrooms...
                    </p>
                  </div>
                  <div class="property__price">
                    <p class="p__4 property__item--price">$350</p>
                  </div>
                </div>
                <div class="d-flex property__meta--container">
                  <div class="property__meta">
                    <div class="prop__data property__meta--icon">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/person.svg" alt="" class="img-fluid" />
                    </div>

                    <div class="prop__data property__meta--data">
                      <span class="meta__count">6</span>
                      <span class="meta__lebel">Guests</span>
                    </div>
                  </div>

                  <div class="property__meta">
                    <div class="prop__data property__meta--icon">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/bed.png" alt="" class="img-fluid" />
                    </div>

                    <div class="prop__data property__meta--data">
                      <span class="meta__count">6</span>
                      <span class="meta__lebel">Bed</span>
                    </div>
                  </div>
                  <div class="property__meta">
                    <div class="prop__data property__meta--icon">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/bath.png" alt="" class="img-fluid" />
                    </div>

                    <div class="prop__data property__meta--data">
                      <span class="meta__count">6</span>
                      <span class="meta__lebel">Bathroom</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="property__item">
              <div class="property__media">
                <button class="btn fev__btn">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <div class="property__slider">
                  <div class="slider__list">
                    <div class="slider__list--item">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide1.jpg" alt="" />
                    </div>
                    <div class="slider__list--item">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide1.jpg" alt="" />
                    </div>
                    <div class="slider__list--item">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide1.jpg" alt="" />
                    </div>
                    <div class="slider__list--item">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide1.jpg" alt="" />
                    </div>
                  </div>
                  <div class="property__slider--dots"></div>
                </div>
                <a href="#" class="cat__tag">Pet Friendly</a>
              </div>
              <div class="prop__detail-block">
                <div class="property__title">
                  <h3 class="t__3 property__item--title">
                    Cobscook Look-Out At Rossport by the Sea
                  </h3>
                </div>
                <div class="property__details">
                  <div class="property__desc">
                    <p class="p__3 property__item--desc">
                      The Cobscook Look-Out House is a spacious 3 bedroom, 2.5
                      bathrooms...
                    </p>
                  </div>
                  <div class="property__price">
                    <p class="p__4 property__item--price">$350</p>
                  </div>
                </div>
                <div class="d-flex property__meta--container">
                  <div class="property__meta">
                    <div class="prop__data property__meta--icon">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/person.svg" alt="" class="img-fluid" />
                    </div>

                    <div class="prop__data property__meta--data">
                      <span class="meta__count">6</span>
                      <span class="meta__lebel">Guests</span>
                    </div>
                  </div>

                  <div class="property__meta">
                    <div class="prop__data property__meta--icon">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/bed.png" alt="" class="img-fluid" />
                    </div>

                    <div class="prop__data property__meta--data">
                      <span class="meta__count">6</span>
                      <span class="meta__lebel">Bed</span>
                    </div>
                  </div>
                  <div class="property__meta">
                    <div class="prop__data property__meta--icon">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/bath.png" alt="" class="img-fluid" />
                    </div>

                    <div class="prop__data property__meta--data">
                      <span class="meta__count">6</span>
                      <span class="meta__lebel">Bathroom</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="property__item">
              <div class="property__media">
                <button class="btn fev__btn">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <div class="property__slider">
                  <div class="slider__list">
                    <div class="slider__list--item">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide1.jpg" alt="" />
                    </div>
                    <div class="slider__list--item">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide1.jpg" alt="" />
                    </div>
                    <div class="slider__list--item">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide1.jpg" alt="" />
                    </div>
                    <div class="slider__list--item">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide1.jpg" alt="" />
                    </div>
                  </div>
                  <div class="property__slider--dots"></div>
                </div>
                <a href="#" class="cat__tag">Pet Friendly</a>
              </div>
              <div class="prop__detail-block">
                <div class="property__title">
                  <h3 class="t__3 property__item--title">
                    Cobscook Look-Out At Rossport by the Sea
                  </h3>
                </div>
                <div class="property__details">
                  <div class="property__desc">
                    <p class="p__3 property__item--desc">
                      The Cobscook Look-Out House is a spacious 3 bedroom, 2.5
                      bathrooms...
                    </p>
                  </div>
                  <div class="property__price">
                    <p class="p__4 property__item--price">$350</p>
                  </div>
                </div>
                <div class="d-flex property__meta--container">
                  <div class="property__meta">
                    <div class="prop__data property__meta--icon">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/person.svg" alt="" class="img-fluid" />
                    </div>

                    <div class="prop__data property__meta--data">
                      <span class="meta__count">6</span>
                      <span class="meta__lebel">Guests</span>
                    </div>
                  </div>

                  <div class="property__meta">
                    <div class="prop__data property__meta--icon">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/person.svg" alt="" class="img-fluid" />
                    </div>

                    <div class="prop__data property__meta--data">
                      <span class="meta__count">6</span>
                      <span class="meta__lebel">Guests</span>
                    </div>
                  </div>
                  <div class="property__meta">
                    <div class="prop__data property__meta--icon">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/person.svg" alt="" class="img-fluid" />
                    </div>

                    <div class="prop__data property__meta--data">
                      <span class="meta__count">6</span>
                      <span class="meta__lebel">Guests</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="property__item">
              <div class="property__media">
                <button class="btn fev__btn">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <div class="property__slider">
                  <div class="slider__list">
                    <div class="slider__list--item">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide1.jpg" alt="" />
                    </div>
                    <div class="slider__list--item">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide1.jpg" alt="" />
                    </div>
                    <div class="slider__list--item">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide1.jpg" alt="" />
                    </div>
                    <div class="slider__list--item">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide1.jpg" alt="" />
                    </div>
                  </div>
                  <div class="property__slider--dots"></div>
                </div>
                <a href="#" class="cat__tag">Pet Friendly</a>
              </div>
              <div class="prop__detail-block">
                <div class="property__title">
                  <h3 class="t__3 property__item--title">
                    Cobscook Look-Out At Rossport by the Sea
                  </h3>
                </div>
                <div class="property__details">
                  <div class="property__desc">
                    <p class="p__3 property__item--desc">
                      The Cobscook Look-Out House is a spacious 3 bedroom, 2.5
                      bathrooms...
                    </p>
                  </div>
                  <div class="property__price">
                    <p class="p__4 property__item--price">$350</p>
                  </div>
                </div>
                <div class="d-flex property__meta--container">
                  <div class="property__meta">
                    <div class="prop__data property__meta--icon">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/person.svg" alt="" class="img-fluid" />
                    </div>

                    <div class="prop__data property__meta--data">
                      <span class="meta__count">6</span>
                      <span class="meta__lebel">Guests</span>
                    </div>
                  </div>

                  <div class="property__meta">
                    <div class="prop__data property__meta--icon">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/person.svg" alt="" class="img-fluid" />
                    </div>

                    <div class="prop__data property__meta--data">
                      <span class="meta__count">6</span>
                      <span class="meta__lebel">Guests</span>
                    </div>
                  </div>
                  <div class="property__meta">
                    <div class="prop__data property__meta--icon">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/person.svg" alt="" class="img-fluid" />
                    </div>

                    <div class="prop__data property__meta--data">
                      <span class="meta__count">6</span>
                      <span class="meta__lebel">Guests</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="container g-0 pet__friendly">
    <div class="col-12 col-md-6 offset-md-3">
      <div class="result__header">
        <div class="result__header--block">
          <h2 class="t__2 result__title map__title">
            Explore our all property
          </h2>
          <p class="p__2 result__subtitle map__subtitle">
            Rossport by the Sea is a pretty special place, we like to say its
            magical by nature and a little slice of Heaven on Earth.
          </p>
        </div>
      </div>
    </div>
    <div class="col-12 google__map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830869428!2d-74.119763973046!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1669804224372!5m2!1sen!2sbd"
        width="100%" height="730" style="border: 0" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </section>

            

<?php get_footer(); ?>
