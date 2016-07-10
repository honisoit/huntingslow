<footer class="footer">
  <div class="footer__link-row">
    <div class="footer__column footer__column--categories">
      <h3 class="footer__column-title">The Paper</h3>
      <?php
          wp_nav_menu( array(
              'menu'              => 'footer_categories',
              'theme_location'    => 'footer_categories',
              'walker'            => new Footer_Walker,
              'items_wrap'        => '<ul class="footer__list">%3$s</ul>'
            )
          );
      ?>
    </div>
    <div class="footer__column footer__column--pages">
      <h3 class="footer__column-title">Admin</h3>
      <?php
          wp_nav_menu( array(
              'menu'              => 'footer_pages',
              'theme_location'    => 'footer_pages',
              'walker'            => new Footer_Walker,
              'items_wrap'        => '<ul class="footer__list">%3$s</ul>'
            )
          );
      ?>
    </div>
    <div class="footer__column footer__column--social-links">
      <h3 class="footer__column-title">Keep in touch</h3>
      <?php
          wp_nav_menu( array(
              'menu'              => 'footer_social-links',
              'theme_location'    => 'footer_social-links',
              'walker'            => new Footer_Walker,
              'items_wrap'        => '<ul class="footer__list">%3$s</ul>'
            )
          );
      ?>
    </div>
  </div>

  <?php
    // $options = get_option( 'global_options' );
    // $option = $options['copyright'];
    // echo $option;
  ?>
  <?php
    // $options = get_option( 'global_options' );
    // $option = $options['acknowledgment_text'];
    // echo $option;
  ?>

</footer>
