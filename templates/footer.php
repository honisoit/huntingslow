<footer class="content-info">
  <div class="container">
    <hr>
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <span><?php
      $options = get_option( 'global_options' );
      $option = $options['copyright'];
      echo $option;
    ?></span>
    <span><?php
      $options = get_option( 'global_options' );
      $option = $options['acknowledgment_text'];
      echo $option;
    ?></span>
  </div>
</footer>
