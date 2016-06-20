<footer class="footer">
  <hr>
  </div>
  <div class="footer__social">
  </div>
  <div class="footer__list">
  </div>
  <div class="footer__list">
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
  <div class="footer__small-text">
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
