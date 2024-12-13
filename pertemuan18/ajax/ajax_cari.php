<?php

require '../Functions.php';
$mahasiswa = cari($_GET["keyword"]);
?>

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