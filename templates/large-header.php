<header class="large-header">
  <span class="large-header__toggle-label">
    <label for="large-header__toggle" id="">Menu</label>
  </span>
  <span class="large-header__logo">
    <a class="" href="<?= esc_url(home_url('/')); ?>">
      <img src="
        <?php
          $options = get_option( 'global_options' );
          $logoImageID = $options['media'];
          $logoImageArray = wp_get_attachment_image_src($logoImageID);
          $logoURL = $logoImageArray[0];
          echo $logoURL;
        ?>
      "></img>
    </a>
  </span>

  <input type="checkbox" id="large-header__toggle" name="large-header__toggle"/>
  <nav class="large-header__nav" role="navigation">
    <?php
        wp_nav_menu( array(
            'menu'              => 'primary_navigation',
            'theme_location'    => 'primary_navigation',
            'items_wrap'        => '<ul class="large-header__nav-list">%3$s</ul>',
            'walker'            => new Header_Walker
          )
        );
    ?>
    <form class="large-header__search-form search-form" role="search">
      <input type="text" class="form-control" placeholder="Search">
      <button type="submit">Submit</button>
    </form>
  </nav>
</header>
