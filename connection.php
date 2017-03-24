<?php
  $dbhost="localhost";
  $dbuser="user";
  $dbpass="pass";

  $retval = mysql_connect($dbhost,$dbuser,$dbpass);
  if(!$retval) {
    die('Could not connect to the database'.mysql_error());
  }

  mysql_select_db('samgatha');
?>
