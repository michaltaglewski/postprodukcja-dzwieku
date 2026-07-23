<?php get_header(); ?>

<main>
  <div class="wrap" style="padding: 180px 0 100px">
    <h1><?php the_title(); ?></h1>

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : ?>
        <?php the_post(); ?>

        <article>
          <?php the_content(); ?>
        </article>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>
