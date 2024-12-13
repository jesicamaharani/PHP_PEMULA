<?php

function salam($nama) {
    return "Selamat Datang $nama!";
}

function buka($waktu, $name) {
    return "Selamat $waktu, $name!";
}

function awal($hari = "Malam", $unknow = "Jejes") {
    return "Selamat $hari, $unknow!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>latihan function</title>
</head>
<body>
    <h1>Selamat Datang, Administrator!</h1>
    <h1><?= salam("Jejes"); ?></h1>
    <h1><?php echo buka("malam", "Jejes")?></h1>
    <h2><?= awal("malam", "Jejes");?></h2>
</body>
</html>  