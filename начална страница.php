<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="начална страница.css">
  <link rel="stylesheet" type="text/css" href="хедър">
  <title>Начална страница</title>
  <meta charset="utf-8">
</head>
<body class="background">

 <header>
<?php include 'хедър.php';?>
 </header>
 <main>
  <div class="main">
 <label class="container"> Izvorsko 
  <input type="radio" checked="checked" name="radio">
  <span class="checkmark"></span>
</label>
<label class="container"> Dolishte
  <input type="radio" name="radio">
  <span class="checkmark"></span>
</label>
<label class="container"> Krumovo
  <input type="radio" name="radio">
  <span class="checkmark"></span>
</label>
<label class="container"> Kranevo
  <input type="radio" name="radio">
  <span class="checkmark"></span>
</label>
<label class="container">Kipra
  <input type="radio" name="radio">
  <span class="checkmark"></span>
</label>
</div>
<div class="gallery">
  <a target="_blank" href="Снимки/trackizvorsko.jpg">
    <img src="Снимки/trackizvorsko.jpg" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Тrack Izvorsko New</div>
</div>
<div class="gallery">
  <a target="_blank" href="Снимки/trackdolishte.jpg">
    <img src="Снимки/trackdolishte.jpg" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Тrack Dolishte</div>
</div>
<div class="gallery">
  <a target="_blank" href="Снимки/trackkipra.jpg">
    <img src="Снимки/trackkipra.jpg" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Тrack Kipra Long</div>
</div>
<div class="gallery">
  <a target="_blank" href="Снимки/trackkranevo.jpg">
    <img src="Снимки/trackkranevo.jpg" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Тrack Kranevo Short</div>
</div>
<div class="gallery">
  <a target="_blank" href="Снимки/trackkrumovo.jpg">
    <img src="Снимки/trackkrumovo.jpg" alt="Cinque Terre"width="600" height="400">
  </a>
  <div class="desc">Тrack Krumovo Long</div>
</div></main></div>
 <footer>
   
 </footer>
</body>
</html