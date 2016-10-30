<?php get_template_part('templates/large-header'); ?>

<div class="content-wrapper">
  <div class="archive">
    <div class="archive__main-column">
      <?php get_template_part('templates/page', 'header'); ?>

      <?php if (!have_posts()) : ?>
        <div class="alert alert-warning">
          <?php _e('Sorry, no results were found.', 'sage'); ?>
        </div>
        <?php get_search_form(); ?>
      <?php endif; ?>

      <?php while (have_posts()) : the_post(); ?>
        <?php
          // Leaving the selection code below in case testing reveals some need for it
          // Otherwise, remove in the final run through
          // get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format());
          get_template_part('templates/content');
        ?>
      <?php endwhile; ?>

      <?php the_posts_pagination(); ?>
    </div>
    <aside class="archive__sidebar">
      <?php dynamic_sidebar('archive-page-sidebar'); ?>
    </aside>
  </div>
</div>
