function view(){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
      if(xhr.readyState === 4 && xhr.status === 200){
        document.getElementById('chat').innerHTML = xhr.responseText;
      }
    }
    xhr.open('GET','chat.php',true);
    xhr.send();
  }
  setInterval(function(){view()},1000);
  //insert
  function insert(){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
      if(xhr.readyState === 4 && xhr.status === 200){
        xhr.responseText;
      }
    }
    xhr.open('POST','insert.php',true);
    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhr.send('nama_chat='+form1.nama_chat.value+'&text_chat='+form1.text_chat.value+'&tgl_chat='+form1.tgl_chat.value);
    form1.nama_chat.value='';
    form1.text_chat.value='';
    form1.tgl_chat.value='';
    return false;
  }