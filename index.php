<?php get_template_part('templates/large-header'); ?>

<div class="content-wrapper">
  <div class="archive">
    <div class="archive__main-column">
      <?php get_template_part('templates/page', 'header'); ?>

      <?php if (!have_posts()) : ?>
        <div class="archive__no-result">
          <?php _e('Sorry, no results were found.', 'sage'); ?>
        </div>
        <div class="archive__no-result--search">
          <?php get_search_form(); ?>
        </div>
      <?php endif; ?>

      <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/content'); ?>
      <?php endwhile; ?>

      <?php the_posts_pagination(); ?>
    </div>
    <aside class="archive__sidebar">
      <?php dynamic_sidebar('archive-page-sidebar'); ?>
    </aside>
  </div>
</div>
