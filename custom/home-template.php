<?php /* Template Name: Home Template */ ?>

<?php get_header();?>

<?php if (have_posts()) :?><?php while(have_posts()) : the_post();?>

<?php 
  /* Image Url */
  $image_attributes =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
?>

<div class="cover text-white">
  <div class="cover-img">
    <div class="cover__bg img-res" style="background: url(<?php echo $image_attributes[0]; ?>)no-repeat center center; background-size: cover; top: 0;opacity: 0.5; left:0;" alt="Bar Caffe Del Borgo, Castiglione Olona, in provincia di Varese"></div>
  </div>
  <div class="cover__content mt-3">
    <h1 >
      <?php esc_html_e('Caffe del Borgo ', 'nextframe'); ?> 
    </h1>
    <h2 class="text-reveal cover__title">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/title.svg" alt="Caffè del Borgo">
    </h2>
    <h2 class="text-reveal text-2 pb-1"><?php echo get_the_excerpt();?></h2>
    <a href="tel:+39123456789" id="phone-link" class="button fade-in trigger pt-2"><?php esc_html_e('Prenota subito', 'nextframe'); ?></a>
  </div>
</div>


<div class="spacer"></div>

<h2 class="v-center text-1 sma-text pb-3 uppercase text-white fade-up"><i><?php esc_html_e("Il Bar Caffè del Borgo", 'nextframe'); ?></i></h2>

<div class="spacer-sma"></div>

<div class="grid nowrap grid--small grid--center mr">
  <div class="col-80 v-center">
    <div class="text__container fade-left">
      <div class="text__container-small fade-left">
        <div class="grid m-0">
          <div class="col-60">
            <p class="fade-left"><?php esc_html_e("Il bar ''Caffè del Borgo'', è una vineria situata a Castiglione Olona, in un pittoresco borgo medievale in provincia di Varese. Il nostro locale è un luogo ideale per gli amanti del vino e della buona cucina, dove potrete gustare un'ampia selezione di vini e piatti tradizionali della cucina italiana.", 'nextframe'); ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="spacer"></div>


<div class="grid nowrap grid--small grid--center ml">
  <div class="col-80 v-center">
    <div class="text__container-2 fade-right">
      <div class="text__container-small-2 fade-right">
        <div class="grid m-0">
          <div class="col-100">
            <p class="fade-right"><?php esc_html_e("Sorprendi i tuoi ospiti con Apedivino! Un'enoteca viaggiante che offre una vasta selezione di vini e un servizio di cocktail personalizzato per ogni palato. Clicca qui per scoprire di più!", 'nextframe'); ?></p>
            <div class="p-button fade-left">
              <a href="http://caffe-del-borgo-v2.local/ape-divino/" class="button"><?php esc_html_e('scopri di più', 'nextframe'); ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="spacer tab-none"></div>


<h2 class="text-0 v-center text-white"><?php esc_html_e('I CAPI', 'nextframe'); ?></h2>


<div class="centerflipcards pb-3">
  
  <div class="square-flip">
    <div class='square' data-image="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/roberta.jpg">
      <div class="square-container">
        <div class="square-container-text">
          <h2 class="textshadow"><?php esc_html_e('ROBERTA', 'nextframe'); ?></h2>
          <h3 class="textshadow"><?php esc_html_e('La Capa', 'nextframe'); ?></h3>
        </div>
      </div>
      <div class="flip-overlay"></div>
    </div>
    <div class='square2'>
      <div class="square-container2">
        <div class="align-center-card"></div>
        <p><?php esc_html_e(" Roberta è una persona solare e piacevole. Con la sua natura socievole e la sua capacità di mettere 
                              le persone a proprio agio, è sempre pronta ad accogliere i clienti con un sorriso e farli 
                              sentire come a casa.
                              La presenza di Roberta nel bar rende l'atmosfera ancora più accogliente. Con la sua attenzione ai dettagli 
                              e la sua passione per il servizio impeccabile, è in grado di garantire un'esperienza indimenticabile 
                              per i suoi clienti.Venite a scoprire il perché il nostro bar è così amato dalla gente. Con Roberta al 
                              timone, siamo sicuri che trascorrerete dei momenti indimenticabili. Godetevi una tazza di caffè o un drink 
                              fresco, mentre vi godete la compagnia degli amici o conoscete nuove persone. Vi aspettiamo al nostro bar, 
                              dove il piacere di stare insieme è sempre al primo posto!", 'nextframe'); ?></p>
      </div>
      <div class="flip-overlay"></div>
    </div>
  </div>

  <div class="square-flip">
    <div class='square' data-image="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/manolo.jpg">
      <div class="square-container">
        <div class="square-container-text">
          <h2 class="textshadow"><?php esc_html_e('MANOLO', 'nextframe'); ?></h2>
          <h3 class="textshadow"><?php esc_html_e('Il Capo', 'nextframe'); ?></h3>
        </div>
      </div>
      <div class="flip-overlay"></div>
    </div>
    <div class='square2'>
      <div class="square-container2">
        <div class="align-center-card"></div>
        <p><?php esc_html_e("Manolo è il titolare del bar preferito della zona, conosciuto per la sua natura socievole e simpatica,
                              sempre felice di stare con la gente e di intrattenere i suoi clienti. Il suo bar è un luogo accogliente dove
                              le persone si sentono a casa e dove si può gustare un ottimo caffè o un drink insieme ad un buon piatto.
                              Ha un talento naturale per creare un'atmosfera amichevole e rilassante nel suo bar. Con il suo sorriso 
                              contagioso e la sua conversazione piacevole, è sempre in grado di mettere tutti a loro agio.Tuttavia, 
                              nonostante la natura amichevole, sa anche essere un padrone di casa professionale e attento. Si prende cura 
                              di ogni dettaglio del suo bar e del servizio che offre, garantendo sempre un'esperienza indimenticabile per 
                              i suoi clienti.", 'nextframe'); ?></p>
        </div>
        <div class="flip-overlay"></div>
    </div>
  </div>    

</div>


<div class="spacer"></div>


<div class="grid grid--center rombo">
  <div class="col-70 sma-100">
    <img class="media-img fade-down" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/rombo.jpg" alt="Il bar Caffe del Borgo a Castiglione Olona, e il suo ambiente familiare">  
  </div>
  <div class="col-30 v-center sma-100">
    <div class="container v-center fade-up--container">
      <div class="img-loghino">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/loghino.svg" alt="">
      </div>
      <div class="img-loghino-2">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/loghino.svg" alt="">
      </div>
      <div class="img-loghino-3">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/loghino.svg" alt="">
      </div>
      <div class="img-loghino-4">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/loghino.svg" alt="">
      </div>
      <div class="container__rombo v-center fade-up--rombo">
        <div class="container__rombo-text v-center">
          <p class="rombo-p"><?php esc_html_e("Il nostro locale è un ambiente conviviale, dove professionalità e familiarità si incontrano. Non perdere l'opportunità di vivere un'esperienza unica, prenota subito il tuo tavolo e lasciati sorprendere dal nostro menu!", 'nextframe'); ?></p>
          <a href="tel:+39123456789" id="phone-link-2" class="button button-long button-white media-button"><?php esc_html_e('Contattaci', 'nextframe'); ?></a>
        </div>
      </div>
    </div>
  </div>
</div>

<main class="grid grid--center">

  <div class="col-100">

    <?php the_content(); ?>

  </div>

</main>

<?php endwhile; else :?>

<p><?php esc_html_e('Sorry, no posts matched your criteria.', 'nextframe');?></p>

<?php endif; ?>


<div class="spacer"></div>



<?php get_footer();?>