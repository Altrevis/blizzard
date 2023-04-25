<!doctype html>

<html>

<head>

  <!-- Required meta tags -->

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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

      <h1>Blizzard Legends</h1>

      <h3>-- Découvrez les jeux mythiques qui ont captivé des millions de joueurs à travers le monde --</h3>

    </div>

  </header>

  <main>

    <?php include('partial/jeux-vidéo/wow.html'); ?>

    <?php include('partial/jeux-vidéo/diablo.html'); ?>

    <?php include('partial/jeux-vidéo/starcraft.html'); ?>

    <?php include('partial/jeux-vidéo/overwatch.html'); ?>

  </main> 

</body>

</html>