<?php
  /*  Enqueue javascript
  /* ------------------------------------ */
  function nextframe_scripts() {
  
    wp_enqueue_script( 'nextframe-bundle', get_template_directory_uri() . '/custom/bundle.min.js','','', true );

    wp_enqueue_script( 'nextframe-scripts', get_template_directory_uri() . '/custom/custom-script.js','','', true );
    //if ( is_singular() && get_option( 'thread_comments' ) )  { wp_enqueue_script( 'comment-reply' ); }
  
  }
  add_action( 'wp_enqueue_scripts', 'nextframe_scripts' );

  /*  Enqueue css
  /* ------------------------------------ */

  function nextframe_custom_styles() {

    wp_enqueue_style( 'nextframe-custom-style', get_template_directory_uri().'/custom/custom-style.css');

  }

  add_action( 'wp_enqueue_scripts', 'nextframe_custom_styles' );


  /*  Custom shortcode recensioni
  /* ------------------------------------ */
  function slider_recensioni_shortcode() {

    global $post;

    $buffer = '<div class="reviews-container"><div class="reviews-wrapper">'; // apertura tag slider
    
    //wp query custom loop
    $custom_loop = new WP_Query( array(
      'post_type'      => 'recensioni', 
      'posts_per_page' => 6,
      'orderby'        => 'menu_order',
      'order'          => 'ASC',
    ));
    
    if ($custom_loop->have_posts()) : while($custom_loop->have_posts()) : $custom_loop->the_post(); //apertura loop
    
    $image_attributes =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
    $title = get_the_title();
    $post_text = get_post_field('post_content', get_the_ID());

    $buffer .= '<div class="review">';
      $buffer .= '<div class="review-text">';
        $buffer .= '<img class="review-star" src="'.$image_attributes[0].'" alt="">';
        $buffer .= '<img class="review-star" src="'.$image_attributes[0].'" alt="">';
        $buffer .= '<img class="review-star" src="'.$image_attributes[0].'" alt="">';
        $buffer .= '<img class="review-star" src="'.$image_attributes[0].'" alt="">';
        $buffer .= '<img class="review-star" src="'.$image_attributes[0].'" alt="">';
        $buffer .= '<p class="review-content">'.$post_text.'</p>';
        $buffer .= '<h3>~ '.$title.'</h3>';
      $buffer .= '</div>';
    $buffer .= '</div>';

      
    wp_reset_postdata(); //reset della query
    endwhile; endif; // chiusura loop

    $buffer .= '</div></div>'; // chiusura tag slider

    return $buffer;
  }
  add_shortcode('sliderRecensioni', 'slider_recensioni_shortcode');


  /*  Custom shortcode
  /* ------------------------------------ */
  function apedivino_shortcode($atts) {
    global $post;

    $atts = shortcode_atts( array(
        'posts_per_page' => 100,
    ), $atts, 'apeDivino' );

    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    $args = array(
        'post_type'      => 'apedivino', 
        'posts_per_page' => 100,
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
        'paged'          => $paged,
    );
    
    $custom_loop = new WP_Query($args);

    $buffer = '<div class="apedivino grid">'; // apertura tag slider

    if ($custom_loop->have_posts()) : while($custom_loop->have_posts()) : $custom_loop->the_post(); //apertura loop
    
        $image_attributes =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
        $title = get_the_title();
        $excerpt = get_the_excerpt();
        $date = get_the_date();

        $buffer .='<article class="col-30 mt-2 v-center">';
        $buffer .='<img class="mb-2" src="'.$image_attributes[0].'" alt="">';
        $buffer .='<div class="v-center">';
        $buffer .='<h2 class="text-2 text-white">'.$title.'</h2>';
        $buffer .='</div>';
        $buffer .='</article>';  

        wp_reset_postdata(); //reset della query

    endwhile; 

    $buffer .= '</div>'; // chiusura tag slider

    $buffer .= '<div class="pagination">';
    $buffer .= paginate_links( array(
        'total' => $custom_loop->max_num_pages,
        'prev_text' => __( '« Prev' ),
        'next_text' => __( 'Next »' ),
        'type' => 'list',
    ) );
    $buffer .= '</div>';

    endif; // chiusura loop

    return $buffer;
  }
  add_shortcode('apeDivino', 'apedivino_shortcode');



  function slider_apedivino_shortcode() {

    global $post;

    $buffer = '<section class="splide alignwide"><div class="splide__track  mb-3"><ul class="splide__list">'; // apertura tag slider
    
    //wp query custom loop
    $custom_loop = new WP_Query( array(
      'post_type'      => 'sliderapedivino', 
      'posts_per_page' => 12,
      'orderby'        => 'menu_order',
      'order'          => 'ASC',
    ));
    
    if ($custom_loop->have_posts()) : while($custom_loop->have_posts()) : $custom_loop->the_post(); //apertura loop
    
    $image_attributes =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );

    $buffer .= '<li class="splide__slide fade-up">';
      $buffer .= '<div class="tiles" style="background: url('.$image_attributes[0].') no-repeat center center;  background-size: cover;">';
      $buffer .= '</div>';
    $buffer .= '</li>';
      
    wp_reset_postdata(); //reset della query
    endwhile; endif; // chiusura loop

    $buffer .= '</ul></div></section>'; // chiusura tag slider

    return $buffer;
  }
  add_shortcode('sliderapedivino', 'slider_apedivino_shortcode');

?>
