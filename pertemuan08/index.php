<?php

require 'Functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

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
    </style>
  </head>
  <body>
    
    <h1>Daftar Mahasiswa</h1>
    
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
          <a href="#">Edit</a> |
          <a href="#">Delete</a>
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

  </body>
</html>