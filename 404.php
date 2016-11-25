<?php get_template_part('templates/large-header'); ?>
<div class="content-wrapper">
  <div class="not-found">
    <figure class="not-found__media">
      <?php
        $options = get_option( 'global_options' );
        $option = $options['not_found_media'];
        echo wp_get_attachment_image( $option, 'full' );
      ?>
    </figure>
    <h4 class="not-found__title">
      <?php
        $options = get_option( 'global_options' );
        $not_found_title = $options['not_found_title'];
        echo esc_html( $not_found_title );
      ?>
    </h4>
    <p class="not-found__subtitle">
      <a href="<?php echo site_url(); ?>">
        <?php
          $options = get_option( 'global_options' );
          $not_found_subtitle = $options['not_found_subtitle'];
          echo esc_html( $not_found_subtitle );
        ?>
      </a>
    </p>
  </div>
</div>
