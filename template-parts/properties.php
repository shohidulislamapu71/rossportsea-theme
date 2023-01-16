<?php 
 /* Template Name: Properties page */


get_header(); 

?>



  <section class="container g-0 search__result property__search--result">
    <div class="">
      <div class="result__header">
        <div class="property__filter--block">
          <div class="container filter__form">
            <form class="row">
              <div class="col-12 filter__input--block">
                <label class="filter__lebel" for="specificSizeInputName">Check-in</label>
                <input type="date" class="form-control filter__checkin--field" id="filterCheckIn"
                  placeholder="Check in" />
              </div>
              <div class="col-12 filter__input--block">
                <label class="filter__lebel" for="specificSizeInputName">Check-out</label>
                <input type="date" class="form-control filter__checkin--field" id="filterCheckOut"
                  placeholder="Check Out" />
              </div>
              <div class="col-12 filter__input--block">
                <label class="filter__lebel" for="specificSizeSelect">Guests</label>
                <select class="form-select filter__checkin--field" id="specificSizeSelect">
                  <option selected>Guests</option>
                  <option value="1">Guest 1</option>
                  <option value="2">Guest 2</option>
                  <option value="3">Guest 3</option>
                </select>
              </div>
            </form>
          </div>
          <div class="filter_with_popup">
            <div onclick="document.getElementById('id01').style.display='block'" class="upload_btn_label_page_7"><span
                class="filter__icon"><img src="<?php echo get_template_directory_uri();?>/assets/img/icon/filter.svg" class="img-fluid" alt="" /></span>Filter
            </div>
            <div id="id01" class="modal popup_wrapper">
              <form class="modal-content" action="/action_page.php">
                <div class="pop_up_M">
                  <div class="pop_head">
                    <div class="pop_heading">
                      <h2>Filters</h2>
                      <h3>Rooms and beds</h3>
                    </div>
                  </div>
                  <div class="pop_content">
                    <div class="content_wrapper_134">
                      <div class="specifications_m">
                        <h4>Beds</h4>
                        <div class="renge_m">
                          <i class="fa-solid fa-minus"></i>
                          <span>1</span>
                          <i class="fa-solid fa-plus"></i>
                        </div>
                      </div>
                      <div class="specifications_m">
                        <h4>Bathrooms</h4>
                        <div class="renge_m">
                          <i class="fa-solid fa-minus"></i>
                          <span>1</span>
                          <i class="fa-solid fa-plus"></i>
                        </div>
                      </div>
                      <div class="specifications_m">
                        <h4>Bedrooms</h4>
                        <div class="renge_m">
                          <i class="fa-solid fa-minus"></i>
                          <span>1</span>
                          <i class="fa-solid fa-plus"></i>
                        </div>
                      </div>
                    </div>
                    <div class="bank_slip_btn">
                      <a class="btn bs_btn_cancel" type="button"
                        onclick="document.getElementById('id01').style.display='none'"><i
                          class="fa-solid fa-xmark"></i></a>
                    </div>
                  </div>
                  <div class="amenities_m pop_heading">
                    <h3>Amenities</h3>
                    <form action="" method="get">
                      <div class="check_boxes">
                        <div class="single_checkbox_m">
                          <input type="checkbox" name="Free Parking" id="free_parking">
                          <label for="free_parking">Free Parking</label>
                        </div>
                        <div class="single_checkbox_m">
                          <input type="checkbox" name="Dryer" id="dryer">
                          <label for="dryer">Dryer</label>
                        </div>
                        <div class="single_checkbox_m">
                          <input type="checkbox" name="Linens" id="linens">
                          <label for="linens">Linens</label>
                        </div>
                        <div class="single_checkbox_m">
                          <input type="checkbox" name="Kitchen" id="kitchen">
                          <label for="kitchen">Kitchen</label>
                        </div>
                        <div class="single_checkbox_m">
                          <input type="checkbox" name="Porch/Deck" id="porchdeck">
                          <label for="porchdeck">Porch/Deck</label>
                        </div>
                        <div class="single_checkbox_m">
                          <input type="checkbox" name="Towels" id="towels">
                          <label for="towels">Towels</label>
                        </div>
                        <div class="single_checkbox_m">
                          <input type="checkbox" name="Washing Machine" id="WashingMachine">
                          <label for="WashingMachine">Washing Machine</label>
                        </div>
                        <div class="single_checkbox_m">
                          <input type="checkbox" name="Coffee Maker" id="CoffeeMaker">
                          <label for="CoffeeMaker">Coffee Maker</label>
                        </div>
                        <div class="single_checkbox_m">
                          <input type="checkbox" name="Outdoor Grill Propane" id="OutdoorGrillPropane">
                          <label for="OutdoorGrillPropane">Outdoor Grill Propane</label>
                        </div>
                        <div class="single_checkbox_m">
                          <input type="checkbox" name="Suitable for children" id="Suitableforchildren">
                          <label for="Suitableforchildren">Suitable for children</label>
                        </div>
                      </div>
                      <div class="form_btn_group_m">
                        <button class="clear_all">Clear All</button>
                        <button class="apply">Apply</button>
                      </div>
                    </form>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="filter__header--block">
          <h2 class="t__3b property__filter--title">9 properties found</h2>
        </div>
      </div>
      <!-- result_header ends -->
      <div class="search__result--container">
        <div class="search__result--block property__result--block">
          <div class="container property__result--container">
            <div class="row">
              <div class="property__item property_filter--item">
                <div class="property__media">
                  <button class="btn fev__btn">
                    <i class="fa-regular fa-heart"></i>
                  </button>
                  <div class="property__slider">
                    <div class="slider__list">
                      <div class="slider__list--item">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/slider/slide1.jpg" alt="" />
                      </div>
                      <div class="slider__list--item">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/slider/slide1.jpg" alt="" />
                      </div>
                      <div class="slider__list--item">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/slider/slide1.jpg" alt="" />
                      </div>
                      <div class="slider__list--item">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/slider/slide1.jpg" alt="" />
                      </div>
                    </div>
                    <div class="property__slider--dots"></div>
                  </div>
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
                        The Cobscook Look-Out House is a spacious 3 bedroom,
                        2.5 bathrooms...
                      </p>
                    </div>
                    <div class="property__price">
                      <p class="p__4 property__item--price">$350</p>
                    </div>
                  </div>
                  <div class="d-flex property__meta--container">
                    <div class="property__meta">
                      <div class="prop__data property__meta--icon">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/icon/person.svg" alt="" class="img-fluid" />
                      </div>

                      <div class="prop__data property__meta--data">
                        <span class="meta__count">6</span>
                        <span class="meta__lebel">Guests</span>
                      </div>
                    </div>

                    <div class="property__meta">
                      <div class="prop__data property__meta--icon">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/bed.png" alt="" class="img-fluid" />
                      </div>

                      <div class="prop__data property__meta--data">
                        <span class="meta__count">6</span>
                        <span class="meta__lebel">Bed</span>
                      </div>
                    </div>
                    <div class="property__meta">
                      <div class="prop__data property__meta--icon">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/bathroom.png" alt="" class="img-fluid" />
                      </div>

                      <div class="prop__data property__meta--data">
                        <span class="meta__count">6</span>
                        <span class="meta__lebel">Bathroom</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="property__item property_filter--item">
                <div class="property__media">
                  <button class="btn fev__btn">
                    <i class="fa-regular fa-heart"></i>
                  </button>
                  <div class="property__slider">
                    <div class="slider__list">
                      <div class="slider__list--item">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/slider/slide1.jpg" alt="" />
                      </div>
                      <div class="slider__list--item">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/slider/slide1.jpg" alt="" />
                      </div>
                      <div class="slider__list--item">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/slider/slide1.jpg" alt="" />
                      </div>
                      <div class="slider__list--item">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/slider/slide1.jpg" alt="" />
                      </div>
                    </div>
                    <div class="property__slider--dots"></div>
                  </div>
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
                        The Cobscook Look-Out House is a spacious 3 bedroom,
                        2.5 bathrooms...
                      </p>
                    </div>
                    <div class="property__price">
                      <p class="p__4 property__item--price">$350</p>
                    </div>
                  </div>
                  <div class="d-flex property__meta--container">
                    <div class="property__meta">
                      <div class="prop__data property__meta--icon">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/icon/person.svg" alt="" class="img-fluid" />
                      </div>

                      <div class="prop__data property__meta--data">
                        <span class="meta__count">6</span>
                        <span class="meta__lebel">Guests</span>
                      </div>
                    </div>

                    <div class="property__meta">
                      <div class="prop__data property__meta--icon">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/icon/person.svg" alt="" class="img-fluid" />
                      </div>

                      <div class="prop__data property__meta--data">
                        <span class="meta__count">6</span>
                        <span class="meta__lebel">Guests</span>
                      </div>
                    </div>
                    <div class="property__meta">
                      <div class="prop__data property__meta--icon">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/icon/person.svg" alt="" class="img-fluid" />
                      </div>

                      <div class="prop__data property__meta--data">
                        <span class="meta__count">6</span>
                        <span class="meta__lebel">Guests</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="property__item property_filter--item">
                <div class="property__media">
                  <button class="btn fev__btn">
                    <i class="fa-regular fa-heart"></i>
                  </button>
                  <div class="property__slider">
                    <div class="slider__list">
                      <div class="slider__list--item">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/slider/slide1.jpg" alt="" />
                      </div>
                      <div class="slider__list--item">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/slider/slide1.jpg" alt="" />
                      </div>
                      <div class="slider__list--item">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/slider/slide1.jpg" alt="" />
                      </div>
                      <div class="slider__list--item">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/slider/slide1.jpg" alt="" />
                      </div>
                    </div>
                    <div class="property__slider--dots"></div>
                  </div>
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
                        The Cobscook Look-Out House is a spacious 3 bedroom,
                        2.5 bathrooms...
                      </p>
                    </div>
                    <div class="property__price">
                      <p class="p__4 property__item--price">$350</p>
                    </div>
                  </div>
                  <div class="d-flex property__meta--container">
                    <div class="property__meta">
                      <div class="prop__data property__meta--icon">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/icon/person.svg" alt="" class="img-fluid" />
                      </div>

                      <div class="prop__data property__meta--data">
                        <span class="meta__count">6</span>
                        <span class="meta__lebel">Guests</span>
                      </div>
                    </div>

                    <div class="property__meta">
                      <div class="prop__data property__meta--icon">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/icon/person.svg" alt="" class="img-fluid" />
                      </div>

                      <div class="prop__data property__meta--data">
                        <span class="meta__count">6</span>
                        <span class="meta__lebel">Guests</span>
                      </div>
                    </div>
                    <div class="property__meta">
                      <div class="prop__data property__meta--icon">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/icon/person.svg" alt="" class="img-fluid" />
                      </div>

                      <div class="prop__data property__meta--data">
                        <span class="meta__count">6</span>
                        <span class="meta__lebel">Guests</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="property__item property_filter--item">
                <div class="property__media">
                  <button class="btn fev__btn">
                    <i class="fa-regular fa-heart"></i>
                  </button>
                  <div class="property__slider">
                    <div class="slider__list">
                      <div class="slider__list--item">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/slider/slide1.jpg" alt="" />
                      </div>
                      <div class="slider__list--item">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/slider/slide1.jpg" alt="" />
                      </div>
                      <div class="slider__list--item">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/slider/slide1.jpg" alt="" />
                      </div>
                      <div class="slider__list--item">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/slider/slide1.jpg" alt="" />
                      </div>
                    </div>
                    <div class="property__slider--dots"></div>
                  </div>
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
                        The Cobscook Look-Out House is a spacious 3 bedroom,
                        2.5 bathrooms...
                      </p>
                    </div>
                    <div class="property__price">
                      <p class="p__4 property__item--price">$350</p>
                    </div>
                  </div>
                  <div class="d-flex property__meta--container">
                    <div class="property__meta">
                      <div class="prop__data property__meta--icon">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/icon/person.svg" alt="" class="img-fluid" />
                      </div>

                      <div class="prop__data property__meta--data">
                        <span class="meta__count">6</span>
                        <span class="meta__lebel">Guests</span>
                      </div>
                    </div>

                    <div class="property__meta">
                      <div class="prop__data property__meta--icon">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/icon/person.svg" alt="" class="img-fluid" />
                      </div>

                      <div class="prop__data property__meta--data">
                        <span class="meta__count">6</span>
                        <span class="meta__lebel">Guests</span>
                      </div>
                    </div>
                    <div class="property__meta">
                      <div class="prop__data property__meta--icon">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/icon/person.svg" alt="" class="img-fluid" />
                      </div>

                      <div class="prop__data property__meta--data">
                        <span class="meta__count">6</span>
                        <span class="meta__lebel">Guests</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="property__item property_filter--item">
                <div class="property__media">
                  <button class="btn fev__btn">
                    <i class="fa-regular fa-heart"></i>
                  </button>
                  <div class="property__slider">
                    <div class="slider__list">
                      <div class="slider__list--item">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/slider/slide1.jpg" alt="" />
                      </div>
                      <div class="slider__list--item">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/slider/slide1.jpg" alt="" />
                      </div>
                      <div class="slider__list--item">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/slider/slide1.jpg" alt="" />
                      </div>
                      <div class="slider__list--item">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/slider/slide1.jpg" alt="" />
                      </div>
                    </div>
                    <div class="property__slider--dots"></div>
                  </div>
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
                        The Cobscook Look-Out House is a spacious 3 bedroom,
                        2.5 bathrooms...
                      </p>
                    </div>
                    <div class="property__price">
                      <p class="p__4 property__item--price">$350</p>
                    </div>
                  </div>
                  <div class="d-flex property__meta--container">
                    <div class="property__meta">
                      <div class="prop__data property__meta--icon">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/icon/person.svg" alt="" class="img-fluid" />
                      </div>

                      <div class="prop__data property__meta--data">
                        <span class="meta__count">6</span>
                        <span class="meta__lebel">Guests</span>
                      </div>
                    </div>

                    <div class="property__meta">
                      <div class="prop__data property__meta--icon">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/icon/person.svg" alt="" class="img-fluid" />
                      </div>

                      <div class="prop__data property__meta--data">
                        <span class="meta__count">6</span>
                        <span class="meta__lebel">Guests</span>
                      </div>
                    </div>
                    <div class="property__meta">
                      <div class="prop__data property__meta--icon">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/icon/person.svg" alt="" class="img-fluid" />
                      </div>

                      <div class="prop__data property__meta--data">
                        <span class="meta__count">6</span>
                        <span class="meta__lebel">Guests</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="property__item property_filter--item">
                <div class="property__media">
                  <button class="btn fev__btn">
                    <i class="fa-regular fa-heart"></i>
                  </button>
                  <div class="property__slider">
                    <div class="slider__list">
                      <div class="slider__list--item">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/slider/slide1.jpg" alt="" />
                      </div>
                      <div class="slider__list--item">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/slider/slide1.jpg" alt="" />
                      </div>
                      <div class="slider__list--item">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/slider/slide1.jpg" alt="" />
                      </div>
                      <div class="slider__list--item">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/slider/slide1.jpg" alt="" />
                      </div>
                    </div>
                    <div class="property__slider--dots"></div>
                  </div>
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
                        The Cobscook Look-Out House is a spacious 3 bedroom,
                        2.5 bathrooms...
                      </p>
                    </div>
                    <div class="property__price">
                      <p class="p__4 property__item--price">$350</p>
                    </div>
                  </div>
                  <div class="d-flex property__meta--container">
                    <div class="property__meta">
                      <div class="prop__data property__meta--icon">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/icon/person.svg" alt="" class="img-fluid" />
                      </div>

                      <div class="prop__data property__meta--data">
                        <span class="meta__count">6</span>
                        <span class="meta__lebel">Guests</span>
                      </div>
                    </div>

                    <div class="property__meta">
                      <div class="prop__data property__meta--icon">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/icon/person.svg" alt="" class="img-fluid" />
                      </div>

                      <div class="prop__data property__meta--data">
                        <span class="meta__count">6</span>
                        <span class="meta__lebel">Guests</span>
                      </div>
                    </div>
                    <div class="property__meta">
                      <div class="prop__data property__meta--icon">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/icon/person.svg" alt="" class="img-fluid" />
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
    </div>
  </section>

  <section class="container g-0">
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