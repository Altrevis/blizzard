<!doctype html>
<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- CSS perso-->
  <link rel="stylesheet" href="css/forma.css" />

  <title>Blizzard, l'entreprise de jeux vidéo</title>

</head>

<body>

<?php include('navbar.html'); ?>

  <video autoplay muted loop id="mavideo">
    <source src="img/vie.mp4" type="video/mp4">
  </video>

  <!-- le texte comprimé dans des accordion -->

    <div class="black">

      <h1 onclick="document.getElementById('mavideo').src='img/vie.mp4'">Les meilleurs jeux de l'entreprise</h1>

      <div class="container__accordion">
        <ul class="accordion">
          <li class="accordion__item">

            <div class="accordion__item__head" onclick="document.getElementById('mavideo').src='img/warcraft.mp4'">

              <img class="photo2" src="img/bannière wow.jpg" alt="">

              <i class="fas fa-chevron-down"></i>
            </div>
            <div class="accordion__item__body">

              <p><strong>World of Warcraft: World of Warcraft est un jeu de rôle en ligne
                  massivement multijoueurs qui a été lancé en 2004. Il s'agit d'un des jeux en ligne les plus
                  populaires au monde, avec plus de 10 millions d'abonnés actifs.</strong></p>

              <img class="photo" src="img/worldofwarcraft.png" alt="">

              <p><strong>WoW a été publié sous forme d'extension:</strong></p>
              <p><strong>World of Warcraft: The Burning Crusade sorti en 2007</strong></p>
              <p><strong>World of Warcraft: Wrath of the Lich King sorti en 2008</strong></p>
              <p><strong>World of Warcraft: Cataclysm sorti en 2010</strong></p>
              <p><strong>World of Warcraft: Mists of Pandaria sorti en 2012</strong></p>
              <p><strong>World of Warcraft: Warlords of Draenor sorti en 2014</strong></p>
              <p><strong>World of Warcraft: Legion sorti en 2016</strong></p>
              <p><strong>World of Warcraft: Battle for Azeroth sorti en 2018</strong></p>
              <p><strong>World of Warcraft: Shadowlands sorti en 2020</strong></p>
              <p><strong>World of Warcraft: Dragonflight sorti en 2022</strong></p>

            </div>
          </li>
          <li class="accordion__item">

            <div class="accordion__item__head" onclick="document.getElementById('mavideo').src='img/diablo.mp4'">

              <img class="photo2" src="img/bannière diablo.jpg" alt="">

              <i class="fas fa-chevron-down"></i>
            </div>
            <div class="accordion__item__body">

              <p class="text-white"><strong>Diablo: Diablo est un jeu de rôle en ligne massivement multijoueurs
                  qui a été lancé en 1996. Il s'agit d'un des jeux de rôle en ligne les plus populaires de tous
                  les temps et est particulièrement apprécié pour sa rejouabilité et son gameplay
                  addictif.</strong></p>

              <img class="photo" src="img/diablo.png" alt="">

              <p><strong>Diablo a été publié sous forme d'extension:</strong></p>
              <p><strong>Diablo I: Hellfire, sorti en 1997 </strong></p>
              <p><strong>Diablo II: Resurrected, sortie en 2000</strong></p>
              <p><strong>Diablo II: Lord of Destruction, sortie en 2001</strong></p>
              <p><strong>Diablo III: Rise of the Necromancer, sortie en 2017</strong></p>
              <p><strong>Diablo Immortal: MMORPG mobil et tablette, sortie en 2022</strong></p>
            </div>
          </li>
          <li class="accordion__item">

            <div class="accordion__item__head" onclick="document.getElementById('mavideo').src='img/starcraft.mp4'">

              <img class="photo2" src="img/bannière starcraft.jpg" alt="">

              <i class="fas fa-chevron-down"></i>
            </div>
            <div class="accordion__item__body">

              <p><strong>Starcraft: Starcraft est un jeu de stratégie en temps réel qui a été
                  lancé en 1998. Il s'agit d'un des jeux de stratégie les plus populaires de tous les temps et est
                  particulièrement populaire en Corée du Sud, où il est considéré comme un sport
                  national.</strong></p>

              <img class="photo" src="img/starcraft.png" alt="">

              <p><strong>Starcraft: Brood War: extension de Starcraft sortie en 1998</strong>
              </p>
              <p><strong>Starcraft II: Wings of Liberty: extension de Starcraft II sortie en
                  2010</strong></p>
              <p><strong>Starcraft II: Heart of the Swarm: deuxième extension de Starcraft II
                  sortie en 2013</strong></p>
              <p><strong>Starcraft II: Legacy of the Void: troisième et dernière extension de
                  Starcraft II sortie en 2015</strong></p>
            </div>
          </li>
          <li class="accordion__item">

            <div class="accordion__item__head" onclick="document.getElementById('mavideo').src='img/overwatch.mp4'">

              <img class="photo2" src="img/bannière overwatch.jpg" alt="">

              <i class="fas fa-chevron-down"></i>
            </div>
            <div class="accordion__item__body">

              <p><strong>Overwatch: un hero shooter en ligne multijoueur qui met en scène une
                  équipe de héros aux pouvoirs uniques qui s'affrontent dans des combats intenses. Overwatch a
                  remporté de nombreux prix et est considéré comme l'un des meilleurs jeux de hero shooter de tous
                  les temps.</strong></p>

              <img class="photo" src="img/overwatch.png" alt="">

              <p><strong>Overwatch 1: Payant mais que pour accedé au jeux, sorti en
                  2016</strong></p>
              <p><strong>Overwatch 2: Gratuit mais les skin sont payant, sorti en 2016</strong>
              </p>

            </div>
          </li>
        </ul>
      </div>
    </div>
  <script src="script.js"></script>
  
</body>

</html>