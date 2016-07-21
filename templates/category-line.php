<span class="category-line__category"><?php the_category(', '); ?></span>
<span class="category-line__primary-tag">
  <?php
    $primary_tag_id = get_post_meta( get_the_id(), 'primary_tag', true );
    $primary_tag_array = get_term_by( 'id', $primary_tag_id, 'post_tag', ARRAY_A);
    $primary_tag = ucwords($primary_tag_array['name']);
    // We need to get the tag URL in a way that doesn't mess up when there are
    // special characters in the primary tag. Otherwise prevent their use.
    if ($primary_tag) {
      echo '// <a href="/tag/' . $primary_tag .'">' . $primary_tag . '</a>';
    }
  ?>
</span>
