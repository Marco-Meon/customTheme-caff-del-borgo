<?php get_header();?>

<div class="spacer"></div>

<main class="main">

  <div class="grid grid--center">
    <div class="col-100">

      <?php if (have_posts()) :?><?php while(have_posts()) : the_post();?>

      <!-- loop content -->

      <article class="article v-center">

        <h1><?php the_title(); ?></h1>

        <?php the_post_thumbnail('image-big', array('class' => 'img-res mb-2','alt' => get_the_title()));?>

        <?php the_content(); ?>

      </article>


      <?php endwhile; else :?>

      <p><?php esc_html_e('Spiacente, nessun post corrisponde ai tuoi criteri.', 'nextframe');?></p>

      <?php endif; ?>

    </div>
  </div>

</main>

<?php get_footer();?>