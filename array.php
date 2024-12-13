<?php 
// array adalah variabel yang menampung banyan nilai
// elemen pada array boleh memiliki tipe data berbeda
// array cara lama
$hari = array("senin", "Selasa", "Rabu");
// cara baru
$bulan =["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// menampilkan array
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";

// menampilkan 1 elemen pada array 
echo $arr1[0];
echo "<br>";
echo $bulan[1];
echo "<br>";

// menambahkan elemen baru pada array 
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);


?>