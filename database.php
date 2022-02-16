<?php
  $mysqli = new mysqli('localhost', 'root','','db_chat');
  if( $mysqli->connect_error ){
    die('error');
  }
?>