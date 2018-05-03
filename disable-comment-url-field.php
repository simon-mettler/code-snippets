<?php 

function disable_comment_url($fields) {
  unset($fields['url']);
  return $fields;
}

?>
