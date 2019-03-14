/**
 * Astra Filters
 *
 * @since 1.0.0
 */

(function ($) {
	jQuery( document ).ready( function ( $ ) {
		
		var masthead = document.querySelector( '#page header' );

		$( '#primary-menu li.menu-item' ).on('click', function() {

			var close_hamburger_value = astra_filters.close_hamburger_on_item_click;
			console.log(document.querySelector( '#page header' ));

			if( 1 == close_hamburger_value ) {
				console.log("In trigger");
				$(document.querySelector( '#page header' )).find( '.ast-mobile-menu-buttons button' ).trigger('click');
			}
		});
	});
})(jQuery);