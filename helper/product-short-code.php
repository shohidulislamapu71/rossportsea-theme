<?php
function function_product(){
	?>

<!-- result_header ends -->
<div class="search__result--container">
    <div class="search__result--block">
        <div class="our__property--slider">
            <?php
            
            $args = array(
              'post_type'      => 'product',
              'hide_empty'     => false,
            );

          
			$products = new \WP_Query( $args );
										
					while ( $products->have_posts() ) :
			$products->the_post();
                            				
            
            ?>
            <div class="property__item">
                <div class="property__media">
                    <button class="btn fev__btn">
                        <i class="fa-regular fa-heart"></i>
                    </button>
                    <div class="property__slider">
                        <div class="slider__list">
                            <?php 
                                $images = get_field('_gallery');
                                if( $images ): ?>

                            <?php foreach( $images as $image ): ?>

                            <div class="slider__list--item">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="" />
                            </div>

                            <?php endforeach; ?>

                            <?php endif; ?>


                        </div>
                        <div class="property__slider--dots"></div>
                    </div>
                </div>
                <div class="prop__detail-block">
                    <div class="property__title">
                        <h3 class="t__3 property__item--title">
                            <?php the_title(); ?>
                        </h3>
                    </div>
                    <div class="property__details">
                        <div class="property__desc">
                            <?php
                                echo wp_trim_words(get_the_content(), 10, '...');
                                ?>
                        </div>
                        <div class="property__price">
                            <p class="p__4 property__item--price">
                            <?php
                            global $product;
					        echo  get_woocommerce_currency_symbol(); ?><?php  the_field('_properties-price'); ?></p>
                        </div>
                    </div>
                    <div class="d-flex property__meta--container">
                        <div class="property__meta">
                            <div class="prop__data property__meta--icon">
                                <img src="<?php echo get_template_directory_uri(); ?>./assets/img/icon/person.svg"
                                    alt="" class="img-fluid" />
                            </div>

                            <div class="prop__data property__meta--data">
                                <span class="meta__count"><?php the_field('_guest'); ?></span>
                            </div>
                        </div>

                        <div class="property__meta">
                            <div class="prop__data property__meta--icon">
                                <img src="<?php echo get_template_directory_uri(); ?>./assets/img/slider/bed.png" alt=""
                                    class="img-fluid" />
                            </div>

                            <div class="prop__data property__meta--data">
                                <span class="meta__count"><?php the_field('_bedroom'); ?></span>
                            </div>
                        </div>
                        <div class="property__meta">
                            <div class="prop__data property__meta--icon">
                                <img src="<?php echo get_template_directory_uri(); ?>./assets/img/slider/bath.png"
                                    alt="" class="img-fluid" />
                            </div>

                            <div class="prop__data property__meta--data">
                                <span class="meta__count"><?php the_field('_bathroom'); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
											endwhile;
											?>
            <?php
											wp_reset_postdata();
			
										?>
        </div>
    </div>
</div>
</div>
</section>
<?php
}

add_shortcode( 'Product_bdcalling','function_product' );