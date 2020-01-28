/*
*
*	Live Customiser Script
*	------------------------------------------------
	*	Themes Awesome Framework
	* 	Copyright Sakola 2017 - http://www.themesawesome.com
*
*/
( function( $ ){		
	
	// HEADER STYLING

	/* Company text logo */
	wp.customize( 'sakola_text_logo', function( value ) {
		value.bind( function( newval ) {
				$( '#header .site-title a' ).html( newval );
		
		} );
	} );

	/* Company image logo */
	wp.customize( 'sakola_img_logo', function( value ) {
		value.bind( function( newval ) {
			if( newval !== '' ) {
				$( '#header .logo-image' ).empty();
				$( '#header .logo-image' ).prepend( '<img src="" alt="'+ wp.customize._value.sakola_text_logo +'" title="'+ wp.customize._value.sakola_text_logo +'" />' );
				$( '#header .logo-image img' ).attr( 'src', newval );
			} else {
				$( '#header .top-header .header-logo' ).text( wp.customize._value.sakola_text_logo() );
			}
		} );
	} );

} )( jQuery );