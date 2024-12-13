<?php

session_start();

if(!isset($_SESSION["login"]))
{
  header("Location: login.php");
  exit();
}

require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

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
<input type="text" name="search" size="50" placeholder="Search..." autofocus autocomplete="off">
<button type="submit" name="cari">Search...</button>
</form>
<br>
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
      
    </table><br><br>
    
<button class="bt"><a class="" href="Logout.php">Logout!!</a></button><br><br>
  
  </body>
</html>