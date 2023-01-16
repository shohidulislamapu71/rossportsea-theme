(function ($) {
"use strict";

// meanmenu
$('#mobile-menu').meanmenu({
	meanMenuContainer: '.mobile-menu',
	meanScreenWidth: "767"
});

$('.icon-down').on("click",function(){
	$(".see-side-table-menu").slideToggle();
});
$('.fa-clock').on("click",function(){
	$(".current-time-and-others-menu-area-hide").slideToggle();
});

$('.fa-user-tag').on("click",function(){
	$(".ac-fav-area").slideToggle();
});




$('.slider-hero-class').slick({
	dots: true,
	speed: 2000,
	arrows: false,
	autoplay: true,
	autoplaySpeed: 2000,
	slidesToShow: 1,
	slidesToScroll: 1,
	responsive: [
	  {
		breakpoint: 1024,
		settings: {
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  dots: true,
		}
	  },
	  {
		breakpoint: 600,
		settings: {
		  slidesToShow: 1,
		  slidesToScroll: 1
		}
	  },
	  {
		breakpoint: 480,
		settings: {
		  slidesToShow: 1,
		  slidesToScroll: 1
		}
	  }
	  // You can unslick at a given breakpoint now by adding:
	  // settings: "unslick"
	  // instead of a settings object
	]
  });

  $('.slider-hero-class').on('focus',function(e){
	window.location.hash = $(this).attr('id');
  });

$(window).on('scroll', function () {
	var scroll = $(window).scrollTop();
	if (scroll < 245) {
		$("#header-sticky").removeClass("sticky");
		$("#hide-id").removeClass("hide-sticky");
	} else {
		$("#header-sticky").addClass("sticky");
		$("#hide-id").addClass("hide-sticky");
	}
});





  $.scrollUp({
	scrollName: 'scrollUp', // Element ID
	topDistance: '300', // Distance from top before showing element (px)
	topSpeed: 300, // Speed back to top (ms)
	animation: 'fade', // Fade, slide, none
	animationInSpeed: 200, // Animation in speed (ms)
	animationOutSpeed: 200, // Animation out speed (ms)
	scrollText: '<i class="fa-solid fa-up-long"></i>', // Text for element
	activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
});




  //   $(".slider__list1").slick({
  //     arrows: false,
  //     dots: true,
  //     autoplay: true,
  //     autoplaySpeed: 2000,
  //     dotsClass: "property__slick--dots",
  //     appendDots: $(".slider__list1"),
  //   });
  //   $(".slider__list2").slick({
  //     arrows: false,
  //     dots: true,
  //     autoplay: true,
  //     autoplaySpeed: 2000,
  //     dotsClass: "property__slick--dots",
  //     appendDots: $(".slider__list2"),
  //     // appendDots: $(".property__slider--dots"),
  //   });
  //   $(".slider__list").slick({
  //     arrows: false,
  //     dots: true,
  //     autoplay: true,
  //     autoplaySpeed: 2000,
  //     dotsClass: "property__slick--dots",
  //     appendDots: $(".property__slider--dots"),
  //   });

  makeImageSlider("slider__list"); // SEARCH RESULT IMAGE SLIDER
  makePropertySlider("our__property--slider"); // SEARCH RESULT PROPERTY SLIDER

  function makeImageSlider(sliderContainerClass) {
    let sliderName = sliderContainerClass;
    let imgSlider = $("." + sliderContainerClass);
    imgSlider.each((i, e) => {
      let slide = $(e).addClass(sliderName + i);
      slide.slick({
        arrows: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 2000,
        dotsClass: "property__slick--dots",
        appendDots: slide,
      });
    });
  }
  function makePropertySlider(propertySliderContainerClass) {
    $("." + propertySliderContainerClass).slick({
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 1,
      prevArrow:
        '<button type="button" class="slick-custom-arrow slick-prev"> <i class="fa-solid fa-chevron-left"></i> </button>',
      nextArrow:
        '<button type="button" class="slick-custom-arrow slick-next"> <i class="fa-solid fa-chevron-right"></i> </button>',
      dots: false,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
          },
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
    });
  }

  $('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});

    
$(document).ready(function() {
  clockUpdate();
  setInterval(clockUpdate, 1000);
})

function clockUpdate() {
  var date = new Date();
  $('.digital-clock').css({'color': '#333'});
  function addZero(x) {
    if (x < 10) {
      return x = '0' + x;
    } else {
      return x;
    }
  }

  function twelveHour(x) {
    if (x > 12) {
      return x = x - 12;
    } else if (x == 0) {
      return x = 12;
    } else {
      return x;
    }
  }

  var h = addZero(twelveHour(date.getHours()));
  var m = addZero(date.getMinutes());
 

  $('.digital-clock').text(h + ':' + m );
}

  // $('#propertyCheckin').daterangepicker();
  var input = document.getElementById('propertyCheckin');
  // var checkout = document.getElementById('propertyCheckout');
  // var datepicker = new HotelDatepicker(input);


  
})(jQuery);


