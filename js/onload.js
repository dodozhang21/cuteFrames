/**
 * Functions on load
 */
var navigation = null;

jQuery(window).load(function() {
	// the back to top link
	jQuery("a[href='#top']").click(function() {
	  jQuery("html, body").animate({ scrollTop: 0 }, "slow");
	  return false;
	});
	
	if(!isMobile()) {

		// only do the ones on home and archive
		if(jQuery('body').hasClass('home') || jQuery('body').hasClass('archive')) {
			var container = jQuery('#content');
	  
			jQuery(container).imagesLoaded( function(){
			  jQuery(container).masonry({
				itemSelector : '.post'
			  });
			});

		}

		var container2 = jQuery('#colophon-widget');

		jQuery(container2).imagesLoaded( function(){
		  jQuery(container2).masonry({
			itemSelector : '.widget-wrapper'
		  });
		});

		// catch infinite scroll event
		jQuery( document.body ).on( 'post-load', function() {
			setInterval( function() {
				jQuery(container).masonry( 'reload' );
			}, 300 ); 
		} );
	}

}); // end of DOM ready

jQuery(window).resize(function() {
	loadBasedOnMoreDisplay();
}); // end of window resize

function loadBasedOnMoreDisplay() {
	if(isMobile()) {
		if(navigation == null) {
			navigation = jQuery("#nav-menu-wrapper ul").tinyNav({active: 'current_page_item'});
		}
	}
}

function isMobile() {
	// is it mobile?
	var mobile = false;

	if(jQuery('#more').css('display') == 'block') {
		mobile = true;
	}

	return mobile;
}