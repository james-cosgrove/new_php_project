<?php
  $server = 'localhost';
  $db_user = 'root';
  $db_pass = 'root';
  $db_name = 'todolist_database';
  $conn = mysqli_connect($server, $db_user, $db_pass) or die("Could not connect to server!");

  mysqli_select_db($conn, $db_name) or die("Count not connect to database!");
 ?>
