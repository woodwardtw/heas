<?php
/**
 * ACF specific stuff
 *
 * @package WP-Bootstrap-Navwalker
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


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

function heaf_positions(){
	$html = "<div class='text-block left'>
			<h2 id='positions'>HEAS Positions</h2>
			<p>We offer the following positions for context, analysis, disagreement, amendment and addition.</p>";
	if( have_rows('position_statements') ):

	    // Loop through rows.
	    while( have_rows('position_statements') ) : the_row();

	        // Load sub field value.
	        $title = get_sub_field('title');
	        $content = get_sub_field('statement');
	        $html .= "
	        	<div class='statement'>
	        		<h3>{$title}</h3>
	        		{$content}
	        	</div>
	        ";
	        // Do something...
	    // End loop.
	    endwhile;
	    return $html . '</div>';
		// No value.
		else :
		    // Do something...
		endif;
	}

function heaf_questions(){
	if(get_field('questions')){
		$questions = get_field('questions');
		return "
			<div class='text-block left'>
				<h2 id='questions'>Questions</h2>
				{$questions}
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