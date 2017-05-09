<?php
  $server = 'localhost';
  $db_user = 'root';
  $db_pass = 'root';
  $db_name = 'todolist_database';

  mysql_connect($server, $db_user, $db_pass) or die("Could not connect to server!"):
  mysql_select_db($db_name) or die("Count not connect to database!");
 ?>
