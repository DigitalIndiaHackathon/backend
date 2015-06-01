(function($){

	$.extend({
		playSound: function(){
			return $("<embed src='"+arguments[0]+".wav' hidden='true' autostart='true' loop='false' class='playSound'>" + "<audio autoplay='autoplay' style='display:none;' controls='controls'><source src='"+arguments[0]+".wav' /><source src='"+arguments[0]+".wav' /></audio>").appendTo('body');
		}
	});

})(jQuery);