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


function heas_list_people(){

    // WP QUERY LOOP
    $html = '';
    $args = array(
          'posts_per_page' => 12,
          'post_type'   => 'member', 
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
                            $img = get_the_post_thumbnail_url($post_id, 'bio');  
                            // $thumb_id = get_post_thumbnail_id($post_id);
                            // $path = wp_get_original_image_path($thumb_id);                  
                            // $new_img = pixelate($path, "bio");  
                            $html .= "<div class='col-md-3'>      
                                            <!-- use the  #filter filter -->
                                            <div class='holder'>
                                                  <div class='bio'>
                                                        <img class='bio-home' src='{$img}'  alt='Blurred bio image of {$title}.'>
                                                  </div>  
                                            <h3>{$title}</h3>
                                            </div>
                                    </div>";
                             endwhile;
                      endif;
                wp_reset_query();  // Restore global post data stomped by the_post().
       return $html;
    }  



//Not functional currently, need to add upload to media, replace featured image and hook it in for members featured image hook or something like that
function pixelate($image, $output, $pixelate_x = 20, $pixelate_y = 20){
    // check if the input file exists
   var_dump($image);
    if(!file_exists($image))
        echo 'File "'. $image .'" not found';

    // get the input file extension and create a GD resource from it
    $ext = pathinfo($image, PATHINFO_EXTENSION);
    if($ext == "jpg" || $ext == "jpeg")
        $img = imagecreatefromjpeg($image);
    elseif($ext == "png")
        $img = imagecreatefrompng($image);
    elseif($ext == "gif")
        $img = imagecreatefromgif($image);
    else
        echo 'Unsupported file extension';

    // now we have the image loaded up and ready for the effect to be applied
    // get the image size
    $size = getimagesize($image);
    $height = $size[1];
    $width = $size[0];

    // start from the top-left pixel and keep looping until we have the desired effect
    for($y = 0;$y < $height;$y += $pixelate_y+1)
    {

        for($x = 0;$x < $width;$x += $pixelate_x+1)
        {
            // get the color for current pixel
            $rgb = imagecolorsforindex($img, imagecolorat($img, $x, $y));

            // get the closest color from palette
            $color = imagecolorclosest($img, $rgb['red'], $rgb['green'], $rgb['blue']);
            imagefilledrectangle($img, $x, $y, $x+$pixelate_x, $y+$pixelate_y, $color);

        }       
    }

    // save the image
    $output_name = $output .'_'. time() .'.jpg';

    var_dump(imagejpeg($img, $output_name));

    //set_post_thumbnail( $post_ID, $thumbnail_id );
    imagedestroy($img); 
}


