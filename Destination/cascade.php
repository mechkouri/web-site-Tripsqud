<?php 
$logocon = '../images/guest.png';
$logo = '../images/logotrip1.png';
$acceuil= '../index.php';
$plage = 'Plage.php';
$montagne = 'Montagne.php';
$cascade = 'cascade.php';
$valle = 'Valle.php';
$sahara = 'Sahara.php';
$achat = '#';
$location = '#';
$livres = '#';
$reservation = '../reservation/form.php';
$conciels = '../conciels/conciels.php';
$deconnexion = '../DB/deconnexion.php';
$connexion = '../SUBSCRIBE/connexion.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> cascade </title>

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="../css/style.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  </head>

  <body>
  <?php require "../menu.php" ?>
      <div class="container-global">
      <div class="grid">
      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="./images/ouzoud.jpg" alt="ouzoud" />
          <div class="card-content">
            <h1 class="card-header">Cascades D'Ouzoud</h1>
            <p class="card-text">
                Les cascades d'Ouzoud sont des chutes d'eau d'environ 110 m de haut, sur trois paliers ,Ces chutes d'eau spectaculaires, considérées parmi les plus élevées et les plus belles du Maroc,
            </p>
            <button class="card-btn">Visit <span>&rarr;</span></button>
          </div>
        </div>
      </div>
      <div class="grid-item">
        <div class="card">
          <img
            class="card-img"
            src="./images/paradise.png"
            alt="paradise"
          />
          <div class="card-content">
            <h1 class="card-header">Cascades de Paradise</h1>
            <p class="card-text">
                Paradise Valley est le nom donné à une partie de la vallée de la rivière Tamraght, dans les montagnes du Haut Atlas marocain
            </p>
            <br><br><br>
            <button class="card-btn">Visit <span>&rarr;</span></button>
          </div>
        </div>
      </div>
      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="./images/oum rabia.jpg" alt="oum rabia" />
          <div class="card-content">
            <h1 class="card-header">Cascades D'Oum Errabia</h1>
            <p class="card-text">
                Oum Errabia est le 2e fleuve marocain long de 550 km avec un débit de 117 m3/s.
            </p>
            <br><br><br><br><br><br><br>
            <button class="card-btn">Visit <span>&rarr;</span></button>
          </div>
        </div>
      </div>
      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="./images/akchour.jpg" alt="akchour" />
          <div class="card-content">
            <h1 class="card-header">Cascades D'Akchour</h1>
            <p class="card-text">
                Akchour est une vallée naturelle attirant de plus en plus de touristes depuis l'ouverture du parc naturel de Talassemtane, Le Pont de Dieu est une curiosité naturelle réputée.
            </p>
            <button class="card-btn">Visit <span>&rarr;</span></button>
          </div>
        </div>
      </div>
      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="./images/imouzer.jpg" alt="imouzar" />
          <div class="card-content">
            <h1 class="card-header">Cascades D'Imouzzer des Ida-outanane</h1>
            <p class="card-text">
                une commune rurale de la préfecture d'Agadir Ida-Outanane, dans la région de Souss-Massa, au Maroc<br><br>
            </p>
            <button class="card-btn">Visit <span>&rarr;</span></button>
          </div>
        </div>
      </div>
      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="./images/ourika.png" alt="Ourika" />
          <div class="card-content">
            <h1 class="card-header">Cascades D'Ourika</h1>
            <p class="card-text">
                ce petit village est le départ de nombreuses excursions dans les montagnes avoisinantes. La randonnée la plus prisée et la plus facile consiste à monter le long d'un torrent de montagne afin de découvrir 7
            </p>
            <button class="card-btn">Visit <span>&rarr;</span></button>
          </div>
        </div>
      </div>
    </div>
      </div>
    <?php require "../footer.php"?>
  </body>
</html>
