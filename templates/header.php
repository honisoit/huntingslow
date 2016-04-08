<header class="banner">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="header__banner">
          <div class="header__logo">
            <img src="https://filldunphy.com/150/30"></src>
          </div>
        </div>
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
            <img src="http://honisoit.com/wp-content/uploads/2016/02/Honilogo20161.png" width="135px" height="30px"></img>
          </a>

        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <?php
            wp_nav_menu( array(
                'menu'              => 'primary_navigation',
                'theme_location'    => 'primary_navigation',
                'depth'             => 2,
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
        <form class="navbar-form navbar-right" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
        </div>
      </div>
    </nav>
</header>
