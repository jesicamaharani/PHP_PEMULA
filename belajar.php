<?php<?php

include_once("koneksi.php");
$data = mysqli_query($conn, "SELECT * FROM tb_siswa ORDER BY id ");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>id</td>
            <td>nama</td>
            <td>jurusan</td>
            <td>jenis kelamin</td>
        </tr>
    </table>
</body>
</html>

include_once("koneksi.php");
$data = mysqli_query($conn, "SELECT * FROM tb_siswa ORDER BY id ");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>id</td>
            <td>nama</td>
            <td>jurusan</td>
            <td>jenis kelamin</td>
        </tr>
    </table>
</body>
</html>