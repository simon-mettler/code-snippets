<?php

// Redirect users who arent logged in -- Thanks to patobrienmedia.com

function journal_members_only() {

  global $pagenow;
  
  // Check to see if user in not logged in and not on the login page
  if( !is_user_logged_in() && $pagenow != 'wp-login.php' )
  auth_redirect();
}

add_action( 'wp', 'journal_members_only' ); 

?>