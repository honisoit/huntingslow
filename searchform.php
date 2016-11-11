<form role="search" method="get" class="search-form" action="<?php esc_url( home_url( '/' ) ); ?>">
  <label class="search-form__label">
    <span class="screen-reader-text">' . _x( 'Search for:', 'label' ) . '</span>
    <input type="search" class="search-form__field" placeholder="search" value="" name="s" />
  </label>
  <input type="submit" class="search-form__submit" value="X" />
</form>
