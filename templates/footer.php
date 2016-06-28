<footer class="footer">
  <?php dynamic_sidebar('sidebar-footer'); ?>
  <div class="footer__social">
    <?php get_template_part('templates/social'); ?>
  </div>
  <div class="footer__list">
    <?php
        wp_nav_menu( array(
            'menu'              => 'footer_categories',
            'theme_location'    => 'footer_categories',
            'walker'            => new Footer_Walker,
            'items_wrap'        => '<ul>%3$s</ul>'
          )
        );
    ?>
  </div>
  <div class="footer__list">
    <?php
        wp_nav_menu( array(
            'menu'              => 'footer_pages',
            'theme_location'    => 'footer_pages',
            'walker'            => new Footer_Walker,
            'items_wrap'        => '<ul>%3$s</ul>'
          )
        );
    ?>
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
