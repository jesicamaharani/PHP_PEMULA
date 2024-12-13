<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Hallo, selamat belajar</h1>
</body>
</html>

<?php

$nama = "jejes";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>halo selamat datang semua 1</h1>
    <p><?php echo "ini adalah paragraf"; ?></p>

    <?php
    echo "<h1>halo selamat datang semua 2</h1>"
    ?>

    <h1>halo selamat datang <?php echo "semua 3"; ?></h1>

    <h1>halo semua, nama ku <?php echo $nama; ?> </h1>
</body>
</html>