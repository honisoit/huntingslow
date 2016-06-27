<?php

// namespace Roots\Sage\Walker;

/**
 * Simple menu walker for the footer
 */

class Simple_Walker extends Walker {
  public function walk( $elements, $max_depth ) {
    $list = array ();

    foreach ( $elements as $item )
      $list[] = "<li class='footer__list-item'><a href='$item->url'>$item->title</a></li>";

    return join( "\n", $list );
  }
}
