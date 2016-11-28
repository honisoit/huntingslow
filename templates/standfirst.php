<?php
  $standfirst = get_post_meta( get_the_id(), 'standfirst', true);
  if ( empty( $standfirst ) ) {
    the_excerpt();
  } else {
    echo '<p>' . esc_html( $standfirst ) . '</p>';
  }
?>
