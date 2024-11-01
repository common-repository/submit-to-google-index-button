<?php
/*
Plugin Name: Submit to Google Index Button
Plugin URI:  http://awfuljacksblog.blogspot.com/2016/06/wordpress-submit-to-google-index-button.html
Description: Wordpress plugin that adds Submit to Google Index button to post edit pages. 
Version:     0.2
Author:      Talor Berthelson
Author URI:  http://www.talorberthelson.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

add_action( 'post_submitbox_misc_actions', 'submit_to_google_button' );


function submit_to_google_button(){
	$cep_id = $_GET['post'];
	
	$site_url = get_site_url();
	$post_slug_slash = substr(get_permalink(), strlen(get_option('home')));
	$post_slug = ltrim($post_slug_slash, '/');

        $html  = '<div id="major-publishing-actions" style="overflow:hidden border-top: 0px; background: transparent;">';
        $html .= '<div id="publishing-action">';
        $html .= '<a class="button-primary" href="https://www.google.com/webmasters/tools/googlebot-fetch?hl=en&siteUrl='.$site_url.'/&path='.$post_slug.'" target="_blank">Submit to Google</a>';
        $html .= '</div>';
        $html .= '</div>';
        if ( get_post_status ( $ID ) == 'publish' ) {
		echo $html;
	} else {
		
	}
}
?>