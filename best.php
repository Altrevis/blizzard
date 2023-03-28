<!doctype html>
<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">

  <!-- CSS perso-->
  <link rel="stylesheet" href="css/forma.css" />

  <title>Blizzard, l'entreprise de jeux vidéo</title>

</head>

<body>

  <?php include('navbar.html'); ?>

  <video autoplay muted loop id="mavideo">
    <source src="img/vie.mp4" type="video/mp4">
  </video>

  <div class="situ1">
    <a href="#" onclick="document.getElementById('mavideo').src='img/warcraft.mp4'"><img src="img/worldofwarcraft.png"
        alt=""></a>
  </div>

  <div class="situ2">
    <a href="#" onclick="document.getElementById('mavideo').src='img/diablo.mp4'"><img src="img/diablo.png" alt=""></a>
  </div>

  <div class="situ3">
    <a href="#" onclick="document.getElementById('mavideo').src='img/starcraft.mp4'"><img src="img/starcraft.png"
        alt=""></a>
  </div>

  <div class="situ4">
    <a href="#" onclick="document.getElementById('mavideo').src='img/overwatch.mp4'"><img src="img/overwatch.png"
        alt=""></a>
  </div>

  <script src="script.js"></script>

</body>

</html>