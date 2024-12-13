<?php 

$siswa = [
    ["Andini Jesica Maharani", "18122007", "PPLG", "cacaa890726@gmail.com"],
    ["I Made Stiven Surya", "21052005", "Pelayaran", "stivensuryaa@gmail.com"],
    ["Febri Hiyatul Auliya", "03022008", "PPLG", "FebriHiyatul@gmail.com"],
    ["Krisnia Wulandari", "30082008", "PPLG", "krisnia@gmail.com"],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pemahamaan</title> 
</head>
<body>
    <h1>Daftar pelajar</h1>

    <!-- <ul>
        <li>Andini Jesica Mahrani Putri</li>
        <li>18122007</li>
        <li>PPLG</li>
        <li>cacaa890726@gmail.com</li>
    </ul> -->

<?php foreach( $siswa as $sw) : ?> 
    <ul>
        <li>Nama : <?php echo $sw[0]; ?></li>
        <li>ID : <?php echo $sw[1]; ?></li>
        <li>Jurusan : <?php echo $sw[2]; ?></li>
        <li>Email : <?php echo $sw[3]; ?></li>
    </ul>
<?php endforeach ?>

</body>
</html>