<?php


function add_stylesheet_to_head() {
      wp_enqueue_script('main-university-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);
      wp_enqueue_style('font_awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
      wp_enqueue_style('custom_google_fonts','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
      echo "<link href='".get_stylesheet_uri()."' rel='stylesheet' type='text/css'>";

}

add_action( 'wp_head', 'add_stylesheet_to_head' );

function university_features(){
  add_theme_support('title-tag');
}
add_action('after_setup_theme','university_features');

?>
