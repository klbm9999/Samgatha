<?php 
	$var = $_SESSION['event_name'];
  require '../connection.php';
  $query = "select event_link, event_no from event where event_name='$var'";
  $retval = mysql_query($query);
  if(!retval) {
    die('Could not query'.mysql_error());
  }
  $row = mysql_fetch_row($retval);
  $_SESSION['redirect'] = '/event/handler_redirect.php';
  $_SESSION['event_id'] = $row[1];

  ob_start();
 ?>