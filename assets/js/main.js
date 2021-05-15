jQuery(document).ready(function ($) {


	// Carousel experiences
	$('.ASTR_experience .elementor-container').slick({
		dots: true,
		arrows: false,
		infinite: true,
		autoplay: false,
		autoplaySpeed: 7000,
		speed: 1000,
		slidesToShow: 6,
		slidesToScroll: 1,
		responsive: [
			{
			  breakpoint: 1100,
			  settings: {
				slidesToShow: 5,
				slidesToScroll: 1
			  }
			},
			{
				breakpoint: 855,
				settings: {
				  slidesToShow: 4,
				  slidesToScroll: 1
				}
			},
			{
				breakpoint: 691,
				settings: {
				  slidesToShow: 3,
				  slidesToScroll: 3
				}
			},
			{
				breakpoint: 510,
				settings: {
				  slidesToShow: 2,
				  slidesToScroll: 2
				}
			},
			{
				breakpoint: 371,
				settings: {
				  slidesToShow: 1,
				  slidesToScroll: 1
				}
			}
		  ]
	});

	// Carousel experiences
	$('.ASTR_routes .elementor-container').slick({
		dots: true,
		arrows: false,
		infinite: true,
		autoplay: false,
		autoplaySpeed: 7000,
		speed: 1000,
		slidesToShow: 5,
		slidesToScroll: 1,
		responsive: [
			{
			  breakpoint: 841,
			  settings: {
				slidesToShow: 4,
				slidesToScroll: 1
			  }
			},
			{
				breakpoint: 601,
				settings: {
				  slidesToShow: 2,
				  slidesToScroll: 2
				}
			  }
		  ]
	});

	// Out packages
	$('.ASTR_packages-carrousel .ASTR_packages').slick({
		dots: true,
		arrows: false,
		infinite: true,
		autoplay: false,
		autoplaySpeed: 7000,
		speed: 1000,
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [
			{
			  breakpoint: 1086,
			  settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			  }
			},
			{
				breakpoint: 591,
				settings: {
				  slidesToShow: 1,
				  slidesToScroll: 1
				}
			}
		]
	});

	// Carousel reviews
	$('.ASTR_review-carrousel .elementor-widget-wrap').slick({
		dots: false,
		arrows: true,
		infinite: true,
		prevArrow: '<i class="fas fa-arrow-left"></i>',
		nextArrow: '<i class="fas fa-arrow-right"></i>',
		autoplay: false,
		autoplaySpeed: 7000,
		speed: 1000,
		slidesToShow: 2,
		slidesToScroll: 1,
		responsive: [
			{
			  breakpoint: 601,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
				dots: true
			  }
			}
		]
	});

	// Carousel posts home
	$('.ASTR_posts-home .elementor-posts-container').slick({
		dots: true,
		arrows: false,
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [
			{
			  breakpoint: 895,
			  settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			  }
			},
			{
				breakpoint: 551,
				settings: {
				  slidesToShow: 1,
				  slidesToScroll: 1
				}
			}
		]
	});

	/* Add to tour single package product */
	$('.ASTR_add_tour').slick({
		dots: true,
		arrows: false,
		infinite: true,
		slidesToShow: 5,
		slidesToScroll: 1,
		responsive: [
			{
			  breakpoint: 901,
			  settings: {
				slidesToShow: 4,
				slidesToScroll: 4
			  }
			},
			{
				breakpoint: 696,
				settings: {
				  slidesToShow: 3,
				  slidesToScroll: 3
				}
			},
			{
				breakpoint: 501,
				settings: {
				  slidesToShow: 2,
				  slidesToScroll: 2
				}
			},
			{
				breakpoint: 351,
				settings: {
				  slidesToShow: 1,
				  slidesToScroll: 1
				}
			}
		]
	});
	
});

