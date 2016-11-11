<header class="large-header">

  <span class="large-header__logo">
    <a class="" href="<?= esc_url(home_url('/')); ?>">
      <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" viewBox="-269 471 477.1 92.6"><path d="M-199.3 545c0 10.5-.6 13.7 6 15.5v1.9h-24.6v-1.9c3.5-1.3 3.3-4.5 3.3-15.5v-24.6h-33V545c0 11.8-.3 14.2 3.3 15.5v1.9H-269v-1.9c6.8-1.8 6.1-4.1 6.1-15.5v-54.7c0-10.8 0-15-6.1-16.1v-1.9h24.7v1.9c-3.6 1.2-3.3 5-3.3 16.1V518h33v-27.7c0-11.1.3-15-3.3-16.1v-1.9h24.6v1.9c-6 1.2-6 5-6 16.1V545zm38.1 18.6c-20.2 0-31.1-14.5-31.1-31.9 0-17.6 10.9-31.9 31.1-31.9 20.4 0 31.3 14.4 31.3 31.9 0 17.4-10.9 31.9-31.3 31.9zm0-61.8c-9.8 0-14.5 5.9-14.5 29.9s4.7 29.9 14.5 29.9c10 0 14.5-5.9 14.5-29.9s-4.5-29.9-14.5-29.9zm97.6 60.6h-24.9v-2c5.1-1.5 5.3-5.5 5.3-12.2v-27.3c0-7.7-4.5-13-12.2-13-6 0-12 6.1-12.5 11.2v29.2c0 7.3.8 10.8 5.5 12.1v2h-24.8v-2c5.1-1.5 5.2-5.3 5.2-12.1v-33.5c0-4.7-1.2-6.3-6.7-8.5v-2l20.8-4.5v14.1c2.9-8 12.9-14.1 21.3-14.1 10.5 0 17.6 4.7 17.6 20.8v27.7c0 7.3.7 11 5.5 12.2l-.1 1.9zm30 0h-24.8v-2c5.1-1.6 5.3-5.5 5.3-12.2v-33.3c0-4.5-1.3-6.4-6.8-8.6v-2l20.8-4.5v48.4c0 7.3.7 10.9 5.5 12.2v2zM-55.2 481c0-4.4 3.5-8 7.9-8s8.1 3.6 8.1 8-3.7 7.9-8.1 7.9c-4.5 0-7.9-3.5-7.9-7.9zm96.6 82.6c-22.8 0-32.8-7.6-32.8-7.6v-24.6h1.9c2 11.7 8.6 30.2 30.9 30.2 16.5 0 20-20.1 4.6-31.1l-20.4-13.1c-15.2-9.7-24.5-21.9-14.2-36.5 0 0 6.3-9.9 25.4-9.9 20.2 0 31 6.1 31 6.1v21.5h-1.9c-1.8-9.7-8.2-25.7-29.1-25.7-13.8 0-21.6 17.4-3.7 29.1l20.5 13.4c17 11.3 22 25.2 13.8 37.5 0 .2-5.7 10.7-26 10.7zm65.3 0c-20.2 0-31.1-14.5-31.1-31.9 0-17.6 10.9-31.9 31.1-31.9 20.4 0 31.3 14.4 31.3 31.9 0 17.4-10.9 31.9-31.3 31.9zm0-61.8c-9.8 0-14.5 5.9-14.5 29.9s4.7 29.9 14.5 29.9c10 0 14.5-5.9 14.5-29.9s-4.5-29.9-14.5-29.9zm58.4 60.6h-24.7v-2c5.1-1.6 5.3-5.5 5.3-12.2v-33.3c0-4.5-1.3-6.4-6.8-8.6v-2l20.8-4.5v48.4c0 7.3.7 10.9 5.5 12.2l-.1 2zM143.4 481c0-4.4 3.5-8 7.9-8s8.1 3.6 8.1 8-3.7 7.9-8.1 7.9c-4.4 0-7.9-3.5-7.9-7.9zm64.7 70.5c-2.3 6-9.3 12.1-17.7 12.1-10 0-16.1-4.3-16.1-20.4v-40.3h-6.7l-.4-2h7.1v-18.4l14.1-2.2v20.6h15.8l-.5 2h-15.3v39.9c0 9 3.5 12.8 10 12.8 3.9 0 6.9-2.8 8-5.2l1.7 1.1z" class=""/></svg>
    </a>
  </span>
  <span class="large-header__toggle">
    <span class="burger js-menu-tray-toggle">
      <span class="burger__bar burger__bar--top"></span>
      <span class="burger__bar burger__bar--middle"></span>
      <span class="burger__bar burger__bar--bottom"></span>
    </span>
  </span>

  <nav class="large-header__nav" role="navigation">
    <?php
        wp_nav_menu( array(
            'menu'              => 'primary_navigation',
            'theme_location'    => 'primary_navigation',
            'items_wrap'        => '<ul class="large-header__nav-list">%3$s</ul>',
            'walker'            => new Header_Menu_Walker
          )
        );
    ?>
    <?php get_search_form(); ?>
  </nav>
</header>
