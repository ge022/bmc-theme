/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 *
 * .css('opacity',1) for overriding 'postMessage' opacity transition
 */

( function( $ ) {

  // Site title and description.
  wp.customize( 'blogname', function( value ) {
    value.bind( function( to ) {
      $( '.site-title' ).text( to ).css('opacity',1);
    } );
  } );
  wp.customize( 'blogdescription', function( value ) {
    value.bind( function( to ) {
      $( '.site-description' ).text( to ).css('opacity',1);
    } );
  } );

  // Site address and email
  wp.customize( 'site_address', function() {
    $( '.site-address' ).css('opacity',1);
  } );
  wp.customize( 'site_email', function() {
    $( '.site-email' ).css('opacity',1);
  } );

} )( jQuery );
