<?php

// Cek Apakah Submit Sudah Di Tekan Atau Belom
if(isset($_POST["submit"])){

// Cek Username & Password
$username = $_POST["Username"];
$pass = $_POST["Password"];

if($username == "jesica" && $pass == "12345"){
  // Jika Benar Redirect Ke Admin 
  header("Location: admin.php");
  exit();
} else {
// Jika Salah Tampilkan Pesan Kesalahan
  $eror = true;
  }
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Page Login</title>
        <style type="text/css" media="all">
            body {
        background-color: #75e3ff;
        color: #006d89;
      }
      h4 {
        color: red;
        font-style: italic;
      }
    </style>
  </head>
  <body>
    
<h1>Login Admin</h1>

<?php if(isset($eror)): ?>
<h4>Username / Password Salah!</h4>
<?php endif; ?>

<ul>
<form action="" method="post">
  
<li>
  <label for="Username">Username</label><br>
  <input type="text" name="Username" id="Username">
</li>
<li>
  <label for="Password">Password</label><br>
  <input type="password" name="Password" id="Password">
</li>
<li><button type="submit" name="submit">Login</button></li>
  
</form>
</ul>
    
  </body>
</html>