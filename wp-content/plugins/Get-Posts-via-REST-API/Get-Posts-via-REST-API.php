<?php
/**
 * Plugin Name:  Get Posts via REST API
 * Description:  Gets the latest two posts from a blog via the REST API. Blog link, title and date included.
 * Plugin URI:   https://renemorozowich.com
 * Author:       Rene Morozowich
 * Version:      1.0
 * Text Domain:  getpostsviarestapi
 * License:      GPL v2 or later
 * License URI:  https://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package getpostsviarestapi
 */

// Disable direct file access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Get posts via REST API.
 */
function get_posts_via_rest() {

	// Initialize variable.
	$allposts = '';
	
	// Enter the name of your blog here followed by /wp-json/wp/v2/posts and add filters like this one that limits the result to 2 posts.
	$response = wp_remote_get( 'https://sites.allegheny.edu/news/wp-json/wp/v2/posts?per_page=10' );

	// Exit if error.
	if ( is_wp_error( $response ) ) {
		return;
	}

	// Get the body.
	$posts = json_decode( wp_remote_retrieve_body( $response ) );

	// Exit if nothing is returned.
	if ( empty( $posts ) ) {
		return;
	}

	// If there are posts.
	if ( ! empty( $posts ) ) {

		// For each post.
		foreach ( $posts as $post ) {

			// Use print_r($post); to get the details of the post and all available fields
			// Format the date.
			$fordate = date( 'n/j/Y', strtotime( $post->modified ) );

			// Show a linked title and post date.
			$allposts .= '<a href="' . esc_url( $post->link ) . '" target=\"_blank\">' . esc_html( $post->title->rendered ) . '</a>  ' . esc_html( $fordate ) . '<br />' . $post->excerpt->rendered . '<br />';
		}
		
		return $allposts;
	}

}
// Register as a shortcode to be used on the site.
add_shortcode( 'sc_get_posts_via_rest', 'get_posts_via_rest' );