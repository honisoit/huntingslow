<div class="menu-tray menu-tray--closed">
  <nav class="menu-tray__nav" role="navigation">
    <?php
      wp_nav_menu( array(
        'menu'              => 'primary_navigation',
        'theme_location'    => 'primary_navigation',
        'items_wrap'        => '<ul class="menu-tray__nav-list">%3$s</ul>',
        'walker'            => new Tray_Menu_Walker
      ) );
    ?>
    <div class="menu-tray__search-form">
    <?php get_search_form(); ?>
    </div>
  </nav>
</div>
