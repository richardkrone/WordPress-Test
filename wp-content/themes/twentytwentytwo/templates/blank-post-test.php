<?php
/**
* Template Name: Post Test
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

// Get the JSON
$json = file_get_contents('https://sites.allegheny.edu/news/wp-json/posts?filter[posts_per_page]=4');
// Convert the JSON to an array of posts
$posts = json_decode($json);


foreach ($posts as $p) {
    echo '<p>Title: ' . $p->title . '</p>';
    echo '<p>Date:  ' . date('F jS', strtotime($p->date)) . '</p>';
    // Output the featured image (if there is one)
    echo $p->featured_image ? '<img src="' . $p->featured_image->guid . '">' : '';
}

?>