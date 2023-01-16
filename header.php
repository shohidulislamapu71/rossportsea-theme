<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rossport_Sea
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
    
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- Main Area Start -->
        <main>
            <!-- Header Area Start -->
             <!-- Header Area Start -->
             <header>
                <div id="header-sticky" class="header-area">              
                    <div class="container g-0">
                        <div class="row main-header-area-flex">
                            <div class="col-xl-1 col-lg-1 col-md-1 g-0">
                                <div class="logo">
                                    <a href="<?php bloginfo('home'); ?>"><img src="<?php $images = get_field('logo_upload_area','option');
                                                            $img_url =  $images['url'];
                                                            echo $img_url ;
                                                        ?>" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10">
                                <div class="current-time-and-others-menu-icon-area">
                                    <i class="fa-regular fa-clock"></i>
                                    <i class="fa-solid fa-user-tag"></i>
                                </div>
                                <div class="main-menu-area">
                                    <div class="menu-area">
                                        <nav id="mobile-menu">
                                            <?php rossport_sea_nav_menu(); ?>
                                            <!-- <ul>
                                                <li><a href="#">Home</a></li>
                                                <li><a href="#">About</a></li>
                                                <li><a href="#">Properties</a></li>
                                                <li><a href="#">Reivews</a></li>
                                                <li><a href="#">Blog</a></li>
                                            </ul> -->
                                        </nav>
                                    </div>
                                    <div id="hide-id" class="current-time-and-others-menu-area-hide">
                                        <div class="current-time-and-others-menu">
                                            <div class="single-menu">
                                                <div class="single-menu-text">
                                                    <span>Currnet Time</span>
                                                </div>
                                                <div class="single-menu-icon-time">
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/CurrnetTime.svg" alt=""><div class="digital-clock"></div></span>
                                                </div>
                                            </div>
                                            <?php echo do_shortcode('[location-weather id="110"]');?>
                                            <div class="single-menu">
                                                <div class="single-menu-text">
                                                    <span>See Tide Clock</span>
                                                </div>
                                                <div class="single-menu-icon-time">
													<div class="single-menu-icon-time">
														<span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/SeeTide.svg" alt=""><img class="icon-down" src="<?php echo get_template_directory_uri(); ?>/assets/img/header/down-icon.svg" alt=""></span>
														<div class="see-side-table-menu">
														<?php if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
                                                         
                                                                <?php dynamic_sidebar( 'sidebar-2' ); ?>
                                                           
                                                        <?php } ?>
														</div>
													</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1 col-lg-1 col-md-1 g-0">
                                <div class="ac-fav-area">
                                    <div class="account-and-fav-area">
                                        <div class="user-account-area">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/user.svg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12"><div class="mobile-menu"></div></div>
                        </div>
                    </div>
                </div>
        </header>
    <!-- Header Area End -->
           