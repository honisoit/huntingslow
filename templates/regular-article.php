<?php
  do_action('get_header');
  get_template_part('templates/large-header');
?>
<div class="content-wrapper">
  <div class="reg__main-column">
    <header>
      <div class="reg__headline-row">
        <div class="reg__category-line category-line">
          <?php get_template_part('templates/category-line'); ?>
        </div>
        <div class="reg__headline">
          <h1><?php the_title(); ?></h1>
        </div>
        <div class="reg__standfirst">
          <?php get_template_part('templates/standfirst'); ?>
        </div>
      </div>
      <div class="reg__meta-row">
        <div class="reg__article-image">
          <?php if ( has_post_thumbnail() ) {
              the_post_thumbnail();
          }

          $attachment_post_object = get_post(get_post_thumbnail_id());
          if ( ! is_null( $attachment_post_object ) ) : ?>
            <span class="reg__article-image__caption">
              <?php echo esc_html( $attachment_post_object->post_excerpt ); ?>
            </span>
          <?php else: ?>
            <p>[Imagine a bloody picture here]</p>
          <?php endif; ?>
        </div>
        <div class="reg__details">
          <div class="reg__byline-row">
            <div class="reg__bylinedate">
              <div class="reg__byline">
                <span>by</span>
                <?php get_template_part('templates/byline'); ?>
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
      <div class="reg__related">
        <?php dynamic_sidebar('sidebar-related-one'); ?>
      </div>
    </div>
  </div>
  <aside class="reg__sidebar">
    <?php dynamic_sidebar('regular-article-sidebar'); ?>
  </aside>
</div>
