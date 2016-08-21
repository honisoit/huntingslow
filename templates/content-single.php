<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <?php
      $the_post_format = get_post_meta( get_the_id(), 'post_format', true);
      switch ($the_post_format) {
        case 1:
          get_template_part('templates/regular-article');
          break;
        case 2:
          get_template_part('templates/feature-article');
          break;
        case 3:
          get_template_part('templates/podcast');
          break;
        case 4:
          get_template_part('templates/shell-article');
          break;
      };
    ?>
  </article>
  <div class="content-wrapper">
    <div class="front__strap">
      <?php dynamic_sidebar('article-related-one'); ?>
    </div>
    <div class="front__strap">
      <?php dynamic_sidebar('article-related-two'); ?>
    </div>
  </div>
<?php endwhile; ?>
