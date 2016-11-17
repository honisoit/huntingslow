<?php
/**
 * Simple menu walkers that return clean list items with BEM classes
 */
class Header_Menu_Walker extends Walker {
  public function walk( $elements, $max_depth ) {
    $list = array ();

    foreach ( $elements as $item )
      $list[] = "<li class='header__nav-list-item'><a href='$item->url'>$item->title</a></li>";

    return join( "\n", $list );
  }
}

class Tray_Menu_Walker extends Walker {
  public function walk( $elements, $max_depth ) {
    $list = array ();

    foreach ( $elements as $item )
      $list[] = "<li class='menu-tray__nav-list-item'><a href='$item->url'>$item->title</a></li>";

    return join( "\n", $list );
  }
}

class Footer_Menu_Walker extends Walker {
  public function walk( $elements, $max_depth ) {
    $list = array ();

    foreach ( $elements as $item )
      $list[] = "<li class='footer__list-item'><a href='$item->url'>$item->title</a></li>";

    return join( "\n", $list );
  }
}
