/**
 * Sticky Header
 */
 jQuery(document).ready(function($) {

// Create a clone of the header, right next to original.
$('.header').addClass('original').clone().insertAfter('.header').addClass('cloned').removeClass('original').hide();

//The stickIt Function
function stickIt() {
  //Position of the original element
  var orgElementPos = $('.original').offset();
  //Position from top
  orgElementTop = orgElementPos.top;

  //Check if we've scrolled past the original position
  if ($(window).scrollTop() >= (orgElementTop)) {
	    // we have scrolled past the original position; now only show the cloned, sticky element.
	    $('.cloned').show();
	    $('.original').css('visibility','hidden');
	} else {
	    // not scrolled past the header; only show the original header.
	    $('.cloned').hide();
	    $('.original').css('visibility','visible');
	}
}

jQuery(window).scroll(function(){
		stickIt();
	});

});