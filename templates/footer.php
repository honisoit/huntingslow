<footer class="footer">
  <div class="content-wrapper">
    <div class="footer__link-row">
      <div class="footer__categories">
        <h3 class="footer__column-title">
          <?php
            // $menu_object = wp_get_nav_menu_object( '50' );
            // if ( false == $menu_object) {
              //echo 'Nope';
            //} else {
              //echo $menu_object->name;
            //}
          ?>
          From the mines
        </h3>
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
    <?php $options = get_option( 'global_options' );
    $acknowledgment_text = $options['acknowledgment_text'];
    if ( ! empty( $acknowledgment_text ) ) : ?>
      <div class="footer__acknowledgment-row">
        <p class="footer__acknowledgment"><?php echo esc_html( $acknowledgment_text ); ?></p>
      </div>
    <?php endif;
    $copyright = $options['copyright'];
    if ( ! empty( $copyright ) ) : ?>
      <p class="footer__copyright"><?php echo esc_html( $copyright ); ?></p>
    <?php endif; ?>
  </div>
</footer>
