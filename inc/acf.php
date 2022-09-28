<?php
/**
 * ACF specific stuff
 *
 * @package WP-Bootstrap-Navwalker
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// heaf_about();
// 	heaf_positions();
//  heaf_questions();

function heaf_about(){
	if(get_field('about')){
		$about = get_field('about');
		return "
			<div class='text-block left'>
				<h2 id='about'>About</h2>
				{$about}
			</div>

		";
	}
}


//save acf json
add_filter('acf/settings/save_json', 'heas_json_save_point');
 
function heas_json_save_point( $path ) {
    
    // update path
    $path = get_stylesheet_directory() . '/acf-json'; //replace w get_stylesheet_directory() for theme
    
    
    // return
    return $path;
    
}


// load acf json
add_filter('acf/settings/load_json', 'heas_json_load_point');

function heas_json_load_point( $paths ) {
    
    // remove original path (optional)
    unset($paths[0]);
    
    
    // append path
    $paths[] = get_stylesheet_directory()  . '/acf-json';//replace w get_stylesheet_directory() for theme
    
    
    // return
    return $paths;
    
}