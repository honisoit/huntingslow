<article class="article-summary">
  <div class="article-summary__image">
    <?php if ( has_post_thumbnail() ) {
        the_post_thumbnail();
    } ?>
  </div>
  <div class="article-summary__copy">
    <header>
      <span class="article-summary__category"><?php the_category(','); ?> — </span>
      <span class="article-summary__primary-tag">
        <?php
          $primary_tag_id = get_post_meta( get_the_id(), 'primary_tag', true );
          $primary_tag_array = get_term_by( 'id', $primary_tag_id, 'post_tag', ARRAY_A);
          echo ucwords($primary_tag_array['name']);
        ?>
      </span>
      <h2 class="article-summary__headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <span>
        <time class="" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
      </span>
      <span>
        <?= __('By', 'sage'); ?> <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a>
      </span>
    </header>
    <div class="article-summary__excerpt">
      <?php the_excerpt(); ?>
    </div>
  </div>
</article>
