<?php

session_start();


if(!isset($_SESSION["login"]))
{
  header("Location: Login.php");
  exit();
}


require 'functions.php';

$jumlahDataPerHalaman = 2;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanSekarang = (isset($_GET['halaman'])) ? $_GET['halaman'] : 1;
$dataAwalTampil = ($jumlahDataPerHalaman * $halamanSekarang) - $jumlahDataPerHalaman;

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $dataAwalTampil, $jumlahDataPerHalaman");

// Tombol Cari Di Klik 
if(isset($_GET["cari"]))
{
  $mahasiswa = cari($_GET["search"]);
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Page Admin</title>
    <style type="text/css">
      body {
        background-color: #00596f;
      }
      a {
        text-decoration: none;
        color: #86e7ff;
      }
      td {
        color: white;
      }
      table {
        text-align: center;
      }
      .bt {
        background: black;
        color: white;
        margin-bottom: 10px;
        margin-left: 5px;
        font-size: 30px;
        font-family: Arial;
      }
    </style>
  </head>
  <body>
    
    <h1>Daftar Mahasiswa</h1>

<button class="bt"><a class="" href="tambah.php">Create!!</a></button><br><br>

<form action="" method="get">
<input type="text" name="search" size="50" placeholder="Search..." autocomplete="off" class="keyword">
<button class="button-cari" type="submit" name="cari">Search...</button>
</form>

<br><br>
<?php if($halamanSekarang > 1) : ?>
  <a href="index.php?halaman=<?= $halamanSekarang - 1 ?>">&lt;</a>
<?php endif; ?>

<?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
  <?php if($i == $halamanSekarang) : ?>
    <a style="color: yellowgreen; font-weight: bold;" href="index.php?halaman=<?= $i ?>"><?= $i ?></a>

  <?php else : ?>
    <a href="index.php?halaman=<?= $i ?>"><?= $i ?></a>

  <?php endif; ?>

<?php endfor; ?>

<?php if($halamanSekarang < $jumlahHalaman) : ?>
  <a href="index.php?halaman=<?= $halamanSekarang + 1 ?>">&gt;</a>
<?php endif; ?>
<br>
<br>
<div class="container">
    <table border="1" cellpadding="10" cellspacing="0">
      
      <tr bgcolor="#a0ef00">
        <th>No.</th>
        <th>Action</th>
        <th>Profile</th>
        <th>Nama</th>
        <th>NRP</th>
        <th>Email</th>
        <th>Jurusan</th>
      </tr>
      
<?php $i = 1; ?>
<?php foreach( $mahasiswa as $row ) : ?>
      <tr bgcolor="#00232cb1">
        <td><?= $i; ?></td>
        <td>
          <a href="edit.php?id=<?= $row['id']; ?>">Edit</a> |
          <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('yakin / sure?');">Delete</a>
        </td>
        <td>
          <img src="../img/<?= $row['gambar']?>" width="75">
        </td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["nrp"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
      </tr>
<?php $i++ ?>
<?php endforeach; ?>
      
    </table>
</div>
    <br><br>
    
<button class="bt"><a class="" href="Logout.php">Logout!!</a></button><br><br>
  
<script src="js/script.js"></script>
  </body>
</html>