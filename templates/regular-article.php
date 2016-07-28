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
                by
                  <?php
                    if ( function_exists( 'coauthors_posts_links' ) ) {
                      coauthors_posts_links();
                    } else {
                      the_author_posts_link();
                    }
                  ?>
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
<div class="content-wrapper">
  <div class="reg__content-row">
    <div class="reg__othercontent">
      <div class="reg__othercontent-flex">
      <?php dynamic_sidebar('regular-article-related-one'); ?>
      </div>
    </div>
  </div>
  <div class="reg__content-row">
    <div class="reg__othercontent">
      <div class="reg__othercontent-flex">
      <?php dynamic_sidebar('regular-article-related-two'); ?>
      </div>
    </div>
  </div>
</div>
