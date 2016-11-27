<?php get_template_part('templates/large-header'); ?>
<div class="content-wrapper">
  <div class="not-found">
    <?php $options = get_option( 'global_options' );
      $not_found_media = $options['not_found_media'];
      if ( isset( $not_found_media ) ) : ?>
      <figure class="not-found__media">
        <?php echo wp_get_attachment_image( $not_found_media, 'full' ); ?>
      </figure>
      <?php endif;

      $not_found_title = $options['not_found_title'];
      if ( ! empty( $not_found_title ) ) : ?>
        <h4 class="not-found__title"><?php echo esc_html( $not_found_title ); ?></h4>
      <?php endif;

      $not_found_subtitle = $options['not_found_subtitle'];
      if ( ! empty( $not_found_subtitle ) ) : ?>
        <p class="not-found__subtitle">
          <a href="<?php echo site_url(); ?>"><?php echo esc_html( $not_found_subtitle ); ?></a>
        </p>
      <?php endif ?>
  </div>
</div>
