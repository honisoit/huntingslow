<div class="author__main-column">

<?php get_template_part('templates/page', 'header'); ?>
<h1 class="author__author-name">This is an author page</h1>

<?php if (!have_posts()) : ?>
  <p>Author page, but no posts</p>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content-author', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>

</div> <!-- end author__main-column -->
