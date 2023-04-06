<!doctype html>

<html>

<head>

  <!-- Required meta tags -->

  <meta charset="utf-8">

  <!-- CSS perso-->

  <link rel="stylesheet" href="css/style.css" />

  <title>Blizzard, l'entreprise de jeux vidéo</title>

</head>

<body>

  <header>

    <?php include('partial/navbar.html'); ?>

    <video autoplay muted loop>
      <source src="img/vie.mp4" type="video/mp4">
    </video>

    <div class="content">

      <h1>Les meilleurs jeux de la société</h1>

      <h3>-- Venez rejoindre les aventures extraordinaire des jeux Blizzard --</h3>

    </div>

  </header>

  <main>

    <?php include('partial/jeux-vidéo/wow.html'); ?>

    <?php include('partial/jeux-vidéo/diablo.html'); ?>

    <?php include('partial/jeux-vidéo/starcraft.html'); ?>

    <?php include('partial/jeux-vidéo/overwatch.html'); ?>

  </main>

  <script src="script.js"></script>

</body>

</html>