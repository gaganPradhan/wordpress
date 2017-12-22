<?php


/*
Plugin Name: My First Amazing Plugin
Description: Plugin Practice
*/


add_filter('the_content', 'amazingContentEdits');

function amazingContentEdits ($content) {
	$content = $content . "<p>All content belongs to fictional university </p>";
	$content = str_replace('lorem', '****' , $content);
	return $content;
}
add_shortcode('programCount', 'programCountFunction');
function  programCountFunction() {
	$programCount = new WP_Query([
		'post_type' => 'program',
	]);

	return $programCount->found_posts;
}