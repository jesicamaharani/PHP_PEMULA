<?php

$angka = [3,2,15,20,11,77,89];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>foreach</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: pink;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .persegi {
            width: 50px;
            height: 50px;
            background-color: skyblue;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear {clear: both;}
    </style>
</head>
<body>

<?php for( $i = 0; $i < count($angka); $i++ ) { ?>
    <!-- ( $i = 0; $i < 7; $i++) -->
    <!-- <div>1</div>
    <div>2</div> -->
    <div class="kotak"><?php echo $angka[$i]; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach ($angka as $i) { ?>
    <div class="kotak"><?php echo $i; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach( $angka as $a ) : ?>
    <div class="persegi"><?php echo $a; ?></div>
<?php endforeach; ?>

</body>
</html>