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
        $option = $options['not_found_title'];
        echo $option
      ?>
    </h4>
    <p class="not-found__subtitle">
      <a href="<?php echo site_url(); ?>">
        <?php
          $options = get_option( 'global_options' );
          $option = $options['not_found_subtitle'];
          echo $option;
        ?>
      </a>
    </p>
  </div>
</div>
