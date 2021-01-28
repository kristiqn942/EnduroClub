<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="вход.css">
  <title>Вход</title>
</head>
<?php 
if ( isset( $_GET['email'] ) && isset( $_GET['password'] ) ) {
  $email = $_GET['email'];
  $password = $_GET['password'];

  if ( $email == "kristiqn2004" && $password = "123456" ) {
    header('Location: http://localhost/EnduroClub/начална страница.html' );
    exit;
  } 
}

?>
<body>
  <div class="header">
 <header>
   <div class="header">
 <a href="начална страница.html" class="zaglavie">Enduro club Aksakovo </a>
</div>
</div>
<form>
  <div class="container">
   <hr>
 <label for="email"><b>Потребителско име</b></label>
    <input type="text" placeholder="Въведи потребителско име" name="email" id="email" required>

    <label for="password"><b>Парола</b></label>
    <input type="password" placeholder="Въведи парола" name="password" id="password" required>

    <button type="submit" class="registerbtn">Вход</button>
  </div>
</form>
</body>
</html>