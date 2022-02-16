<?php
include_once "database.php";
if( isset($_POST['nama_chat']) ){

  $nama_chat = $_POST['nama_chat'];
  $text_chat = $_POST['text_chat'];
  $tgl_chat = $_POST['tgl_chat'];

  $query = $mysqli->query("INSERT INTO chat(nama_chat,text_chat,tgl_chat) VALUES('$nama_chat','$text_chat','$tgl_chat');");
}
$mysqli->close();
?>