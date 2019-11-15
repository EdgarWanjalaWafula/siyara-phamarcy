/**
 * 
 * @author	Edgar Wanjala Wafula 
 * 
 * Website integration scripts
 */

'use strict'

jQuery(document).ready(function($){
	initSliders(); 
	initReadMore(); 
	fixedNavBar(); 

	function initReadMore(){
		$('.who-we-are').readmore({ 
			speed: 1000, 
			moreLink: '<a href="#" class="home-loadmore position-relative loadmore">Read More <i class="icon ion-ios-arrow-down"></i></a>', 
			lessLink: '<a href="#" class="home-loadmore position-relative loadless">Read Less <i class="icon ion-ios-arrow-up"></i></a>', 
			collapsedHeight:150
		});
	}


	function initSliders(){
		var hero_s = $(".slider-content");
		hero_s.owlCarousel({
			loop:true,
			margin:0,
			nav:false,
			lazyLoad:true, 
			autoplayHoverPause:true, 
			dots:true, 
			// dotsData:true,
			touchDrag  : false,
			mouseDrag  : false,
			animateOut: 'fadeOut',
			animateIn: 'fadeIn',
			autoplay:true, 
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				1000:{
					items:1
				}
			}
		})
	}

	function fixedNavBar(){
		var scroll_pos = 0;
		$(document).scroll(function() { 
			scroll_pos = $(this).scrollTop();
			if(scroll_pos > 100) {
				$(".site-header").addClass( "sticky" );
			} else {
				$(".site-header").removeClass( "sticky" );
			}
		});
	}
});

