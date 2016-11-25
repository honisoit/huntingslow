<span class="category-line__category"><?php the_category(', '); ?></span>
<span class="category-line__primary-tag">
  <?php
    $primary_tag_id = get_post_meta( get_the_id(), 'primary_tag', true );
    $primary_tag_array = get_term_by( 'id', $primary_tag_id, 'post_tag', ARRAY_A);
    $primary_tag = ucwords($primary_tag_array['name']);
    $primary_tag_url = '/tag/' . $primary_tag_array['slug'];

    if ($primary_tag) : ?>
      <span>// </span>
      <a href="<?php echo esc_url( $primary_tag_url ); ?>"><?php echo esc_html( $primary_tag ); ?></a>
    <?php endif; ?>
</span>
