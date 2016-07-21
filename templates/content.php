<article class="article-summary">
  <div class="article-summary__image">
    <?php if ( has_post_thumbnail() ) {
        the_post_thumbnail();
    } ?>
  </div>
  <div class="article-summary__copy">
    <header>
      <span class="article-summary__category"><?php the_category(', '); ?></span>
      <span class="article-summary__primary-tag">
        <?php
          $primary_tag_id = get_post_meta( get_the_id(), 'primary_tag', true );
          $primary_tag_array = get_term_by( 'id', $primary_tag_id, 'post_tag', ARRAY_A);
          if ($primary_tag_array['name']) {
            echo '// ' . ucwords($primary_tag_array['name']);
          }
        ?>
      </span>
      <h4 class="article-summary__headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
      <span>
        <time class="article-summary__date" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
      </span>
      <span class="article-summary__byline">
        <?php
          if ( function_exists( 'coauthors_posts_links' ) ) {
            coauthors_posts_links();
          } else {
            the_author_posts_link();
          }
        ?>
      </span>
    </header>
    <div class="article-summary__excerpt">
      <?php echo get_post_meta( get_the_id(), 'standfirst', true); ?>
    </div>
  </div>
</article>
