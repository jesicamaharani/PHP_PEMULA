<?php
session_start();
if(!isset($_SESSION["login"]))
{
  header("Location: login.php");
  exit();
}

require 'Functions.php';

// Ambil Data Dj Url
$id = $_GET["id"];

if( $id < 0 )
{
echo 'Ada Heker Pak Waduhh';
exit();
}
if(!is_numeric($id))
{
echo 'Anda Mau Melakukan Sql?Tidack Bisa';
exit();
}
// Query Data Berdasarkan Id 
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

// Cek Apakah Tombol Submit Sudah Ditekan Atau Belom

if(isset($_POST["submit"]))
{

// Cek Apakah Data Berhasil Diubah Atau Tidak
  if( edit($_POST) > 0)
  {
    echo "
    <script>
    alert('Data Berhadil Di Edit :)')
    document.location.href = 'index.php'
    </script>
    ";
  } else {
    echo "<script>alert('Maaf Data Gagal Di Edit :(')</script>";
  }
  
} 

?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Edit Data</title>
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
    
    <h1>Edit Data</h1>
    
    <form action="" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
      <input type="hidden" name="gambarLama" value="<?= $mhs['gambar']; ?>">
      <ul>
        <li>
          <label for="nama">Nama : </label>
          <br>
          <input type="text" name="nama" id="nama" required value="<?= $mhs['nama'] ?>" autocomplete="off">
        </li>
        <li>
          <label for="nrp">NRP : </label>
          <br>
          <input type="text" name="nrp" id="nrp" required value="<?= $mhs['nrp'] ?>" autocomplete="off">
        </li>
        <li>
        <label for="email">EMAIL : </label>
          <br>
        <input type="email" name="email" id="email" required value="<?= $mhs['email'] ?>" autocomplete="off">
        </li>
        <li>
          <label for="jurusan">JURUSAN : </label>
          <br>
          <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs['jurusan'] ?>" autocomplete="off">
        </li>
        <li>
          <label for="gambar">GAMBAR : </label>
          <br>
          <img src="../img/<?= $mhs['gambar']?>" width="100"><br>
          <input type="file" name="gambar" id="gambar">
        </li>
        <li>
          <button type="submit" name="submit">Edit!!</button>
        </li>
      </ul>
      
    </form>
    
<a href="index.php"><--Kembali</a>
    
  </body>
</html>