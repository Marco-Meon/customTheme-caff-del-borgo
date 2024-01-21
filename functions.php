<?php
function nextframe_setup() {

  // Enable custom header
  add_theme_support( "custom-header" );

  // Enable title in header
  add_theme_support( "title-tag" );

  // Enable feed link
  add_theme_support( 'automatic-feed-links' );

  // Enable align wide & full
  add_theme_support( 'align-wide' );

  // Enable featured image
  add_theme_support( 'post-thumbnails' );

  // Image-size
  add_image_size('image-small', 350, 270, true);
  add_image_size('image-big', 1400, 900, true);

  // Page the_excerpt
  add_post_type_support( 'page', 'excerpt' );

  // Custom menu areas
  register_nav_menus( array(
    'header' => esc_html__( 'Header', 'nextframe' )
  ));

}

add_action( 'after_setup_theme', 'nextframe_setup' );


/*  Enqueue css
/* ------------------------------------ */

function nextframe_styles() {

	wp_enqueue_style( 'nextframe-style', get_template_directory_uri().'/style.css');

}

add_action( 'wp_enqueue_scripts', 'nextframe_styles' );

require_once('custom/custom-function.php');


/* Sottotitolo Slide*/ 
function add_custom_meta_box() {
  add_meta_box(
    'sottotitolo', // ID del meta box
    'Sottotitolo', // Titolo del meta box
    'show_custom_meta_box', // Callback function per la visualizzazione del contenuto del meta box
    'team', // Post type per il quale visualizzare il meta box
    'normal', // Posizione del meta box (normal, side, advanced)
    'high' // Priorità del meta box (low, default, high, core)
  );
}

function show_custom_meta_box() {
  global $post;
  $sottotitolo = get_post_meta($post->ID, 'sottotitolo', true);
  echo '<label for="sottotitolo">Sottotitolo:</label><br>';
  echo '<input type="text" id="sottotitolo" name="sottotitolo" value="' . $sottotitolo . '">';
}

function save_custom_meta_box($post_id) {
  if (array_key_exists('sottotitolo', $_POST)) {
    update_post_meta(
      $post_id,
      'sottotitolo',
      $_POST['sottotitolo']
    );
  }
}

add_action('add_meta_boxes', 'add_custom_meta_box');
add_action('save_post', 'save_custom_meta_box');


?>
