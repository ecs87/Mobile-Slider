//START AJAX Mobile Slider
add_action( 'wp_ajax_mstar_mobile_slider_ajax', 'mstar_mobile_slider_ajax' );
add_action( 'wp_ajax_nopriv_mstar_mobile_slider_ajax', 'mstar_mobile_slider_ajax' );
function mstar_mobile_slider_ajax() {
	meteor_slideshow( "mobile" );
	die();
}
add_action( 'wp_ajax_mstar_desktop_slider_ajax', 'mstar_desktop_slider_ajax' );
add_action( 'wp_ajax_nopriv_mstar_desktop_slider_ajax', 'mstar_desktop_slider_ajax' );
function mstar_desktop_slider_ajax() {
	meteor_slideshow( "desktop" );
	die();
}
//END AJAX Mobile Slider
