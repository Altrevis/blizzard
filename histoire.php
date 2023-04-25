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

      <h1>Blizzard Chronicles</h1>

      <h3>-- Plongez dans l'histoire de l'entreprise qui a révolutionné le jeu vidéo --</h3>

    </div>

  </header>

  <!-- le texte comprimé dans des accordion -->

  <main>

          <?php include('partial/articles/début-aventure.html'); ?>

          <?php include('partial/articles/apparition-meilleurs-jeux.html'); ?>

          <?php include('partial/articles/vivendi.html'); ?>

          <?php include('partial/articles/commencement-déclin.html'); ?>

          <?php include('partial/articles/remontée-spectaculaire.html'); ?>

          <?php include('partial/articles/microsoft.html'); ?>

  </main>

</body>

</html>