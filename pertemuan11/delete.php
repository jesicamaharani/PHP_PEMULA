<?php

require 'functions.php';

$id = $_GET["id"];

if( delete($id) > 0 )
{
  echo "
    <script>
    alert('Data Berhadil Dihapus :)')
    document.location.href = 'index.php'
    </script>
    ";
  } else {
    echo "<script>alert('Maaf Data Gagal Dihapus :(')</script>";
}

?>