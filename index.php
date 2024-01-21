<?php get_header();?>

<div class="spacer-big"></div>

<h1 class="v-center text-0"><?php esc_html_e('Eventi del Caffè del Borgo'); ?></h1>
<div class="spacer-small"></div>


<main class="grid">
      
    <?php while(have_posts()) : the_post();?>

    <article class="col-33 mt-2 v-center">

        <?php the_post_thumbnail('', array('class' => 'mb-2','alt' => get_the_title()));?>
        <div class="v-center">
          <h3 class="text-2 text-white"><?php the_title();?></h3>
        </div>

    </article>
    

    <?php endwhile;?>

    <div class="col-100 v-center mt-2">

      <div class="spacer-small"></div>

        <div class="pagination">
          <?php
            $paginate_links = paginate_links( array(
              'total' => $wp_query->max_num_pages, // il numero totale di pagine
              'current' => max( 1, get_query_var( 'paged' ) ), // la pagina corrente
              'prev_next' => true, // mostra il pulsante di pagina precedente e successiva
              'prev_text' => __('« Prev', 'nextframe'), // testo del pulsante pagina precedente
              'next_text' => __('Next »', 'nextframe'), // testo del pulsante pagina successiva
              'type' => 'list', // il tipo di output (elenco)
              'end_size' => 3, // quanti numeri di pagina mostrare all'inizio e alla fine
              'mid_size' => 3 // quanti numeri di pagina mostrare nel mezzo
            ) );
            if ( $paginate_links ) {
              echo $paginate_links;
            }
          ?>
        </div>

    </div>

</main>


<?php get_footer();?>