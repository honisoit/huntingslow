<footer class="footer">
  <div class="footer__link-row">
    <div class="footer__categories">
      <h3 class="footer__column-title">From The Mines</h3>
      <div class="footer__categories-column">
        <?php
            wp_nav_menu( array(
                'menu'              => 'footer_categories_one',
                'theme_location'    => 'footer_categories_one',
                'walker'            => new Footer_Menu_Walker,
                'items_wrap'        => '<ul class="footer__list">%3$s</ul>'
              )
            );
        ?>
      </div>
      <div class="footer__categories-column">
        <?php
            wp_nav_menu( array(
                'menu'              => 'footer_categories_two',
                'theme_location'    => 'footer_categories_two',
                'walker'            => new Footer_Menu_Walker,
                'items_wrap'        => '<ul class="footer__list">%3$s</ul>'
              )
            );
        ?>
      </div>
    </div>
    <div class="footer__pages">
      <h3 class="footer__column-title">Admin</h3>
      <?php
          wp_nav_menu( array(
              'menu'              => 'footer_pages',
              'theme_location'    => 'footer_pages',
              'walker'            => new Footer_Menu_Walker,
              'items_wrap'        => '<ul class="footer__list">%3$s</ul>'
            )
          );
      ?>
    </div>
    <div class="footer__social-links">
      <h3 class="footer__column-title">Keep in touch</h3>
      <?php
          wp_nav_menu( array(
              'menu'              => 'footer_social-links',
              'theme_location'    => 'footer_social-links',
              'walker'            => new Footer_Menu_Walker,
              'items_wrap'        => '<ul class="footer__list">%3$s</ul>'
            )
          );
      ?>
    </div>
  </div>
  <div class="footer__small-text">
  <?php
    $options = get_option( 'global_options' );
    $option = $options['copyright'];
    echo $option;
  ?>
  <?php
    $options = get_option( 'global_options' );
    $option = $options['acknowledgment_text'];
    echo $option;
  ?>
  </div>
</footer>
