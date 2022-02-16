<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Chatbox with AJAX | UAS WST</title>
  </head>
  <body>
    <div id="container">

      <div id="chat_box">
        <div id="chat"></div>
      </div>
        <h1>Tuliskan Pesan Anda !</h1>
      <form action="" method="post" name="form1">
        <h5>Nama :</h5><input type="text" name="nama_chat" placeholder="Masukan Nama">
        <h5>Isi Chat :</h5><textarea name="text_chat" placeholder="Masukan Pesan"></textarea><br><br>
        <!--<h5>Tanggal</h5><input type="date" name="tgl_chat">-->
        <a href="#" onclick="insert()">Kirimkan Pesan</a>
      </form>
    </div>
    <script src="ajax.js"></script>
  </body>
</html>