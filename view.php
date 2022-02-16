<?php
  include_once "database.php";

  $query = $mysqli->query("SELECT * FROM chat ORDER BY id DESC");

  while( $data = $query->fetch_array() ){
?>
<div id="chat_data">
    <span><?php echo $data['nama_chat']; ?></span>:
    <span><?php echo $data['text_chat']; ?></span>
    <span><?php echo $data['tgl_chat']; ?></span>
    <hr>
</div>
<?php
  }
?>