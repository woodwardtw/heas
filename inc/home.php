<?php
/**
 * Home specific stuff that isn't acf
 *
 * @package WP-Bootstrap-Navwalker
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


function heas_list_posts(){

    // WP QUERY LOOP
    $html = '';
    $args = array(
          'posts_per_page' => 30,
          'post_type'   => 'post', 
          'post_status' => 'publish', 
          'nopaging' => false,
                        );
    $the_query = new WP_Query( $args );
                        if( $the_query->have_posts() ): 
                          while ( $the_query->have_posts() ) : $the_query->the_post();
                           //DO YOUR THING
                            $post_id = get_the_ID();
                            $title = get_the_title();
                            $link = get_permalink($post_id);
                            $html .= "<div class='front-post'><a href='{$link}'><h3>{$title}</h3></a></div>";
                             endwhile;
                      endif;
                wp_reset_query();  // Restore global post data stomped by the_post().
       return $html;
    }                    