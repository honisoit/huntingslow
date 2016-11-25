<?php
  $standfirst = get_post_meta( get_the_id(), 'standfirst', true);
  // Todo: check that 'empty' is the right test for picking up that it's an
  // old article
  if ( empty( $standfirst ) ) {
    the_excerpt();
  } else {
    echo '<p>' . esc_html( $standfirst ) . '</p>';
  }
?>
