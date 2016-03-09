<?php
  $dbhost="localhost";
  $dbuser="samdata321";
  $dbpass="Sama#$@1";

  $retval = mysql_connect($dbhost,$dbuser,$dbpass);
  if(!$retval) {
    die('Could not connect to the database'.mysql_error());
  }

  mysql_select_db('samgatha');
?>