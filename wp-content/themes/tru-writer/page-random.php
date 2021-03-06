<?php
/*
Template Name: Random Post Picker

Use on page to send viewer to random post optionally mod query
*/

// set arguments for WP_Query on published posts to get 1 at random
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 1,
    'orderby' => 'rand'
);

// It's time! Go someplace random
$my_random_post = new WP_Query ( $args );

while ( $my_random_post->have_posts () ) {
  $my_random_post->the_post ();
  
  // redirect to the random post
  wp_redirect ( get_permalink () );
  exit;
}
?>