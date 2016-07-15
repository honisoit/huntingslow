<?php
  do_action('get_header');
  get_template_part('templates/large-header');
?>
<div class="content-wrapper">
  <div class="reg__main-column">
    <header>
      <div class="reg__headline-row">
        <div class="reg__topic-line">
          <span class="reg__category"><?php the_category(','); ?> — </span>
          <span class="reg__primary-tag">
            <?php
              $primary_tag_id = get_post_meta( get_the_id(), 'primary_tag', true );
              $primary_tag_array = get_term_by( 'id', $primary_tag_id, 'post_tag', ARRAY_A);
              echo ucwords($primary_tag_array['name']);
            ?>
          </span>
        </div>

        <div class="reg__headline">
          <h1><?php the_title(); ?></h1>
        </div>
        <div class="reg__standfirst">
          <p><?php echo get_post_meta( get_the_id(), 'standfirst', true); ?></p>
        </div>
      </div>
      <div class="reg__meta-row">
        <div class="reg__article-image">
          <?php if ( has_post_thumbnail() ) {
              the_post_thumbnail();
          } ?>
          <span class="reg__article-image__caption">
            <?php
              echo get_post(get_post_thumbnail_id())->post_excerpt;
            ?>
          </span>
        </div>

        <div class="reg__details">
          <div class="reg__byline-row">
            <div class="reg__bylinedate">
            <div class="reg__byline">
                <?php echo fm_get_bylines_posts_links(); ?>
            </div>
            <div class="reg__date">
              <time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
            </div>
          </div>
            <div class="reg__share share">
              <?php get_template_part('templates/share'); ?>
            </div>
          </div>
        </div>

      </div>
    </header>
    <div class="reg__content-row">
      <div class="reg__content">
        <?php the_content(); ?>
      </div>
      <div class="reg__tags tags">
        <?php get_template_part('templates/tags'); ?>
      </div>
      <div class="reg__secondary-share share">
        <?php get_template_part('templates/share'); ?>
      </div>
    </div>
  </div>
  <aside class="reg__sidebar">
    <?php dynamic_sidebar('sidebar-regular'); ?>
  </aside>
</div>
<div class="content-wrapper">
  <div class="reg__related-row">
    <div class="reg__related">
    <?php dynamic_sidebar('sidebar-related'); ?>
    </div>
  </div>
</div>
