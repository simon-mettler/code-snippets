<?php

function simon_remove_meta_version() {
  return '';
}
add_filter( 'the_generator', 'simon_remove_meta_version' );

?>
