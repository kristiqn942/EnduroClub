<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="register.css">
  <title>Вход</title>
</head>
<?php 
if ( isset( $_GET['email'] ) && isset( $_GET['password'] ) ) {
  $email = $_GET['email'];
  $password = $_GET['password'];

  if ( $email == "kris@abv.bg" && $password = "123456" ) {
    header('Location: http://localhost/EnduroClub/уча.html' );
    exit;
  } else {
    echo "Nepravilno";
  }
}

?>
<body>
  <div class="header">
 <header>
   <div class="header">
  <a href="уча.html" class="zaglavie">Enduro club Aksakovo </a>
</div>
</div>
<form>
  <div class="container">
   <hr>
 <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Въведи имейл" name="email" id="email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Въведи парола" name="password" id="password" required>

    <button type="submit" class="registerbtn">Login</button>
  </div>
</form>
</body>
</html>