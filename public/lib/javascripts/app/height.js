/**
 * Name: Height
 * Author: Kunal Varma
 * Version: 1.0.0
 */

/**
 * Set the height of the sections
 */
 var heightFix = function(){
		//Window Height
		var windowHeight = jQuery(window).height();
		//Find all the Sections
		jQuery('[data-section=true]').each(function(){
			jQuery(this).css('min-height', (windowHeight*90/100));
		});
	};