<?php

require 'functions.php';

// Apakah Button Sudah Ditekan Atau Belom
if(isset($_POST["regist"]))
{
  if( registrasi($_POST) > 0 )
  {
    echo "<script>
    alert('Selamat Anda Sudah Sukses Registrasi Silahkan Login');
    </script>
    ";
  } else {
    echo "<script>
    alert('Maaf Gagal Registrasi Mungkin Ada Kesalahan Coba Di Cek Lagi');
    </script>
    ";
  }
  
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Page Registrasi</title>
    <style type="text/css">
      body {
        background-color: #00566c;
        align-items: center;
        text-align: center;
      }
      h1 {
        text-align: center;
        color: yellow;
      }
      form {
        margin-top: 5%;
        color: lightgreen;
      }
      label {
        display: block;
        font-size: 30px;
      }
      button {
        font-size: 15px;
      }
    </style>
  </head>
  <body>
    
    <h1>Halaman Registrasi</h1>
    
    <form action="" method="post">
      
      <label for="Username">Username</label><br><br>
      <input type="text" name="username" id="Username" placeholder="Username..." size="50"/><br><br>
            <label for="Password">Password</label><br><br>
      <input type="password" name="password" id="Password" placeholder="Password..." size="50"/><br><br>
                  <label for="Password2">Konfirmasi Password</label><br><br>
      <input type="password" name="password2" id="Password2" placeholder="Password..." size="50"/><br><br>
      <button type="submit" name="regist">Register!</button>
    </form>
    
  </body>
</html>