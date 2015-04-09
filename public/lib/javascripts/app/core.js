/**
 * Name: Core
 * Author: Kunal Varma
 * Version: 1.0.0
 */

 jQuery(document).ready(function($){
 	/**
 	 * Fittext
 	 */
 	 //Intro Main
 	 jQuery('.intro-main').fitText(0.8,
 	 {
 	 	minFontSize: '20px',
 	 	maxFontSize: '58px'
 	 }
 	 );
	/*******************
	 * Toggle Side Menu
	 *******************/
	 jQuery(document).click(function() {
	 	if (jQuery('.header-nav').hasClass('shown')) {
	 		jQuery(".header-nav").removeClass('shown');
	 		jQuery('.overlay').fadeOut(200);
	 	}
	 });
	 jQuery(document).on('click', '.nav-toggle', function() {
	 	var menu = jQuery(".header-nav");
	 	menu.toggleClass('shown');
	 	jQuery('.overlay').fadeToggle(200);
	 	e.stopPropagation();
	 });
	 jQuery(".header-nav").click(function(event) {
	 	event.stopPropagation();
	 });

 	//Init Height Fix
 	heightFix();
 	//Call if view port resizes
 	jQuery(window).resize(function(){
 		heightFix();
 	});
	//Smoothe Scrolling
	$(function() {
		$('ul a[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[id=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html,body').animate({
						scrollTop: target.offset().top
					}, 1000);
					return false;
				}
			}
		});
	});
});