<?php
/* Copy Page.php from Theme folder and rename it to restricted-page.php
** and copy code that between Begin & End to the right position
** Template Name: Restricted to subscriber only
*/


get_header();
Mk_Static_Files::addAssets( 'mk_button' );
Mk_Static_Files::addAssets( 'mk_audio' );
Mk_Static_Files::addAssets( 'mk_swipe_slideshow' );

/* Begin Code */
$user = wp_get_current_user();
$allowed_roles = array('editor', 'administrator', 'author','contributor','subscriber');
if( array_intersect($allowed_roles, $user->roles ) ) {
    mk_build_main_wrapper( mk_get_view( 'singular', 'wp-page', true ) );
}
else{
	echo do_shortcode('[wpforms id="15119" title="false" description="false"]');
}

/* End Code */
get_footer();


/* Other codes are all about theme
** allowed_roles => what rule can see the page
*/
