<?php

session_start();

if(!isset($_SESSION["login"]))
{
  header("Location: 403.php");
  exit();
}
$_SESSION = [];
session_unset();
session_destroy();
header("Location: login.php");

?>