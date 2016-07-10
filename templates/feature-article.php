<header>
  <div class="feat__article-image">
    <?php if ( has_post_thumbnail() ) {
        the_post_thumbnail();
    } ?>
  </div>
  <div class="feat__logo">
    <a class="" href="<?= esc_url(home_url('/')); ?>">
      <img src="
        <?php
          // we should consider using wp_get_attachment_image here
          $options = get_option( 'global_options' );
          $logoImageID = $options['media'];
          $logoImageArray = wp_get_attachment_image_src($logoImageID);
          $logoURL = $logoImageArray[0];
          echo $logoURL;
        ?>
      "></img>
    </a>
  </div>
  <div class="feat__titles">
    <h1><?php the_title(); ?></h1>
    <div class="feat__standfirst">
      <p><?php echo get_post_meta( get_the_id(), 'standfirst', true); ?></p>
    </div>
    <div class="feat__byline">
        <?php echo fm_get_bylines_posts_links(); ?>
    </div>
  </div>
</header>


  <span class="reg__category"><?php the_category(','); ?> — </span>
  <?php
    $primary_tag_id = get_post_meta( get_the_id(), 'primary_tag', true );
    $primary_tag_array = get_term_by( 'id', $primary_tag_id, 'post_tag', ARRAY_A);
    echo ucwords($primary_tag_array['name']);
  ?>


<div class="content-wrapper">
  <div class="feat__content-row">
    <div class="feat__content">
      <?php the_content(); ?>
    </div>
    <div class="feat__tags">
      <?php get_template_part('templates/tags'); ?>
    </div>
    <div class="feat__secondary-share">
      <?php get_template_part('templates/share'); ?>
    </div>
  </div>
</div>
