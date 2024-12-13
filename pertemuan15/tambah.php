<?php
session_start();
if(!isset($_SESSION["login"]))
{
  header("Location: login.php");
  exit();
}

require 'Functions.php';

// Ini Yang Lama Semua Disingkat Si File Functions.php 

/* Koneksi Ke Database
$conn = mysqli_connect("localhost", "root", "", "phpdasar"); */

// Cek Tombol Submit Sudah Di Tekan Apa Belom
if(isset($_POST["submit"]))
{
  
/* Ambil Data Dari Tiap Element Dalam Form
  $nama = htmlspecialchars($_POST["nama"]);
  $nrp = htmlspecialchars($_POST["nrp"]);
  $email = htmlspecialchars($_POST["email"]);
  $jurusan = htmlspecialchars($_POST["jurusan"]);
  $gambar = htmlspecialchars($_POST["gambar"]); */
  
  /* Query Insert Data 
  $query = "INSERT INTO mahasiswa
              VALUES
            ('','$nama','$nrp','$email','$jurusan','$gambar')
            ";
  mysqli_query($conn, $query); */
  
  /* Cek Data Berhasil Ditambah Apa Tidak
  if( mysqli_affected_rows($conn) > 0)
  {
    echo "<script>alert('Data Berhadil Ditambahkan :)')</script>";
  } else {
    echo "<script>alert('Maaf Data Tidak Berhasil Ditambahkan :(')</script>";
  } */
  
  if( create($_POST) > 0)
  {
    echo "
    <script>
    alert('Data Berhadil Ditambahkan :)')
    document.location.href = 'index.php'
    </script>
    ";
  } else {
    echo "<script>alert('Maaf Data Gagal Ditambahkan :(')</script>";
  }
  
} 

?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Tambah Data</title>
    <style>
      body {
        background-color: #00596f;
        color: white;
      }
      a {
        text-decoration: none;
        color: yellow;
        font-size: 25px;
        font-style: bold;
      }
      li {
        color: white;
        margin-top: 10px;
      }
      button {
        background: yellow;
        color: black;
        font-size: 20px;
      }
      h1 {
        color: yellow;
      }
    </style>
  </head>
  <body>
    
    <h1>Tambah Data</h1>
    
    <form action="" method="post" enctype="multipart/form-data">
      
      <ul>
        <li>
          <label for="nama">Nama : </label>
          <br>
          <input type="text" name="nama" id="nama" required autocomplete="off">
        </li>
        <li>
          <label for="nrp">NRP : </label>
          <br>
          <input type="text" name="nrp" id="nrp" required autocomplete="off">
        </li>
        <li>
        <label for="email">EMAIL : </label>
          <br>
        <input type="email" name="email" id="email" required autocomplete="off">
        </li>
        <li>
          <label for="jurusan">JURUSAN : </label>
          <br>
          <input type="text" name="jurusan" id="jurusan" required autocomplete="off">
        </li>
        <li>
          <label for="gambar">GAMBAR : </label>
          <br>
          <input type="file" name="gambar" id="gambar">
        </li>
        <li>
          <button type="submit" name="submit">Create!!</button>
        </li>
      </ul>
      
    </form>
    
<a href="index.php"><--Kembali</a>
    
  </body>
</html>