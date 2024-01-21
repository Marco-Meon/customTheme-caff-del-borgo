<?php get_header();?>

<div class="spacer"></div>

<main class="main">

  <div class="grid grid--center">

    <div class="col-70">

      <?php if (have_posts()) :?><?php while(have_posts()) : the_post();?>

      <!-- loop content -->

      <article id="post-<?php the_ID();?>"
        <?php post_class();?>>

        <h1><?php the_title();?></h1>

        <p><?php the_time('j M Y ');?> - <?php the_category(', '); ?>
          <?php the_tags('(', ', ', ')'); ?></p>

        <?php the_post_thumbnail('image-big', array('class' => 'img-res mb-2','alt' => get_the_title()));?>

        <?php the_content();?>

        <?php wp_link_pages();?>

      </article>

      <?php endwhile; ?>

      
      <?php else :?>

      <p><?php esc_html_e('Spiacente, nessun post corrisponde ai tuoi criteri.', 'nextframe');?></p>

      <?php endif; ?>

    </div>
  </div>

</main>

<?php get_footer();?>