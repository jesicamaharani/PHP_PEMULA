<?php

session_start();
$error = false;

if(isset($_SESSION["login"]))
{
  header("Location: index.php");
}
require 'functions.php';

if(isset($_POST["login"]))
{
  $username = $_POST["username"];
  $pass = $_POST["password"];
  
$result =  mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

// Cek Username 
if( mysqli_num_rows($result) === 1 )
{
  // Cek Pass 
  $row = mysqli_fetch_assoc($result);
  if( password_verify($pass, $row["password"]) ) 
  {
    // Set Session
    $_SESSION["login"] = true;
    
    header("Location: index.php");
    exit();
  }
}
  
  $error = true;
  
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>LOGIN PAGE</title>
    <style type="text/css">
      body {
        background-color: #00566c;
        align-items: center;
        text-align: center;
        color: white;
      }
      h1 {
        text-align: center;
        color: yellow;
      }
      form {
        margin-top: 5%;
        color: lightgreen;
      }
      label {
        display: block;
        font-size: 30px;
      }
      button {
        font-size: 15px;
      }
      a {
        text-decoration: none;
        color: yellow;
      }
      h4 {
        color: red;
        font-style: italic;
      }
    </style>
  </head>
  <body>
    
<h1>Halaman Login</h1>
    
<?php if( $error == true ) : ?>

<h4>Username / Password Salah</h4>

<?php endif; ?>

    <form action="" method="post">
      
            <label for="Username">Username</label><br><br>
      <input type="text" name="username" id="Username" placeholder="Username..." size="50"/><br><br>
            <label for="Password">Password</label><br><br>
      <input type="password" name="password" id="Password" placeholder="Password..." size="50"/><br><br>
      <button type="submit" name="login">Login!</button><br><br>
      
    </form>
    
Belom Mempunyai Akun? <a href="registrasi.php">Register Disini</a>
  </body>
</html>