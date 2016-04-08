<div class="reg__main-column">
  <header>
    <div class="reg__headline-row">
      <div class="reg__category">
        <?php the_category(); ?>
      </div>
      <div class="reg__primary-tag">
        <p><?php
          $primary_tag_id = get_post_meta( get_the_id(), 'primary_tag', true );
          $primary_tag_array = get_term_by( 'id', $primary_tag_id, 'post_tag', ARRAY_A);
          echo ucwords($primary_tag_array['name']);
        ?></p>
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
        <p>Caption and Credit</p>
      </div>

      <div class="reg__details">
        <div class="reg__byline-row">
          <div class="reg__byline">
              <?php echo fm_get_bylines_posts_links(); ?>
          </div>
          <div class="reg__date">
            <time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
          </div>
          <div class="reg__social">
            <p>social buttons</p>
          </div>
        </div>
      </div>

    </div>
  </header>
  <div class="reg__content-row">
    <div class="reg__content">
      <?php the_content(); ?>
    </div>
  </div>
</div>
<aside class="reg__sidebar">
  <h1>This is the sidebar</h1>
</aside>
