<?php get_template_part('templates/large-header'); ?>

<div class="content-wrapper">
  <div class="category__banner">
    <?php get_template_part('templates/page', 'header'); ?>
  </div>
  <div class="archive">
    <div class="archive__main-column">
      <?php if (!have_posts()) : ?>
        <div class="alert alert-warning">
          <?php _e('Sorry, no results were found.', 'sage'); ?>
        </div>
        <?php get_search_form(); ?>
      <?php endif; ?>

      <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
      <?php endwhile; ?>

      <?php the_posts_navigation(); ?>
    </div>
    <aside class="archive__sidebar">
      <?php dynamic_sidebar('sidebar-archive'); ?>
    </aside>
  </div>
</div>