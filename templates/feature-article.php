<header>
  <h1><?php the_title(); ?></h1>
  <span class="reg__category"><?php the_category(','); ?> — </span>

  <?php
    $primary_tag_id = get_post_meta( get_the_id(), 'primary_tag', true );
    $primary_tag_array = get_term_by( 'id', $primary_tag_id, 'post_tag', ARRAY_A);
    echo ucwords($primary_tag_array['name']);
  ?>
  <p><?php echo get_post_meta( get_the_id(), 'standfirst', true); ?></p>
  <?php if ( has_post_thumbnail() ) {
      the_post_thumbnail();
  } ?>
</header>

<div class="feat__content-row">
  <div class="feat__content">
    <?php the_content(); ?>
  </div>
  <div class="feat__tags">
    <?php get_template_part('templates/tags'); ?>
  </div>
</div>
