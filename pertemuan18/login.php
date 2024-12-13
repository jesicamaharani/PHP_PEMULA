<?php

session_start();
require 'functions.php';
$error = false;
// Cek Cookie
if(isset($_COOKIE['KeyNo']) && isset($_COOKIE['key']))
{
 $id = $_COOKIE['KeyNo'];
 $key = $_COOKIE['Key'];
 
 // Ambil Username Berdasarkan Id
 $result = mysqli_query($conn, "SELECT username FROM User WHERE id = $id");
 $row = mysqli_fetch_assoc($result);
 
 // Cek Cookie Dan Username
 if( $key === hash('sha256', $row['username']) )
 {
   $_SESSION['login'] = true;
 }
 
}

if(isset($_SESSION["login"]))
{
  header("Location: index.php");
  exit();
}

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
    
    // Cek RememberMe
    if(isset($_POST["MemberMe"])) {
      // Buat Cookie
      setcookie('KeyNo', $row["id"], time() + 60);
      setcookie('Key', hash('sha256', $row["username"]), time() + 60);
    }
    
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
      .label {
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
      
            <label for="Username" class="label">Username</label><br><br>
      <input type="text" name="username" id="Username" placeholder="Username..." size="50"/><br><br>
            <label for="Password" class="label">Password</label><br><br>
      <input type="password" name="password" id="Password" placeholder="Password..." size="50"/><br><br>
      <input type="checkbox" name="MemberMe" id="MemberMe"size="50"/>
      <label for="MemberMe">RememberMe</label>
      <br><br>
      <button type="submit" name="login">Login!</button><br><br>
      
    </form>
    
Belom Mempunyai Akun? <a href="registrasi.php">Register Disini</a>
  </body>
</html>