<header class="">
    <nav class="" role="navigation">
        <div class="header__banner">
          <div class="header__logo">
            <h1>Honi Soit</h1>
          </div>
        </div>
        <a class="" href="<?= esc_url(home_url('/')); ?>">Link to Home</a>
        <?php
            wp_nav_menu( array(
                'menu'              => 'primary_navigation',
                'theme_location'    => 'primary_navigation'
              )
            );
        ?>
        <form class="" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </nav>
</header>
