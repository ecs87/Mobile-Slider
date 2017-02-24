jQuery(document).ready(function($) {
	//================SLIDER PIGGYBACK===================//
	var slider_piggyback = function(){
		if (jQuery('.slideshow-stage.mobile').css('display') != 'none') {
			jQuery.ajaxSetup({async: false});
			jQuery.post(
		    ajaxurl, 
		    {
		    	'action': 'mstar_mobile_slider_ajax',
		    },
				function(response){
		        jQuery(".slideshow-stage.mobile").html(response);
		    }
		  )
		}
		else if (jQuery('.slideshow-stage.desktop').css('display') != 'none') {
			jQuery.ajaxSetup({async: false});
			jQuery.post(
		    ajaxurl, 
		    {
		    	'action': 'mstar_desktop_slider_ajax'
		    },
				function(response){
		        jQuery(".slideshow-stage.desktop").html(response);
		    }
		  )
		}
	}
	slider_piggyback();
	//run whenever the window is resized
	jQuery(window).resize(function(){
		//run it again if the desktop div is showing yet it has no HTML content (children nodes in the DOM)
		if ((jQuery('.slideshow-stage.desktop').css('display') == 'block') && (jQuery('.slideshow-stage.desktop').children().length == 0 )) {
			slider_piggyback();
		}
		//run it again if the mobile div is showing yet it has no HTML content (children nodes in the DOM)
		if ((jQuery('.slideshow-stage.mobile').css('display') == 'block') && (jQuery('.slideshow-stage.mobile').children().length == 0 )) {
			slider_piggyback();
		}
	});
	//run whenever the orientation is changed from landscape>portrait (or vice-versa)
	window.addEventListener("orientationchange", function() {
	    slider_piggyback();
	});
});
