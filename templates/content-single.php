<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <div class="content-wrapper">
      <?php get_template_part('templates/regular-article'); ?>
    </div>
  </article>
<?php endwhile; ?>
