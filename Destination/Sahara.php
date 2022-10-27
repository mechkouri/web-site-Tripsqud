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
    <title>Shara sehretna</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="../css/style.css">
  </head>

  <body>
  <?php require "../menu.php" ?>
  <div class="container-global">
    <div class="grid">
      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="./images/merzo.jpg" alt="ouzoud" />
          <div class="card-content">
            <h1 class="card-header">Merzoga</h1>
            <p class="card-text">
                
            un petit village saharien situé dans le sud-est du Maroc, à 35 kilomètres de Moulay Ali Cherif, à 50 kilomètres de Erfoud.
            </p>
            <br><br><br>
            <button class="card-btn">Visit <span>&rarr;</span></button>
          </div>
        </div>
      </div>
      <div class="grid-item">
        <div class="card">
          <img
            class="card-img"
            src="./images/agafay.jpg"
            alt="paradise"/>
          <div class="card-content">
            <h1 class="card-header">Agafay</h1>
            <p class="card-text">
                situe à une trentaine de kilomètres au sud de Marrakech et s’étend sur plusieurs centaines d’hectares. Ce désert, pourtant rocailleux peut être assimilé à un désert de sable
            </p>
            
            <button class="card-btn">Visit <span>&rarr;</span></button>
          </div>
        </div>
      </div>
      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="./images/desertdream.jpg" alt="oum rabia" />
          <div class="card-content">
            <h1 class="card-header">Ouarzazate sahara</h1>
            <p class="card-text">
                ville au sud des montagnes du Haut Atlas marocain, connue comme une passerelle vers le désert du Sahara.
            </p>
            <br><br>
            <button class="card-btn">Visit <span>&rarr;</span></button>
          </div>
        </div>
      </div>
      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="./images/smara.jpg" alt="akchour" />
          <div class="card-content">
            <h1 class="card-header">Smara</h1>
            <p class="card-text">
                Semara ou Smara est une ville du Sahara occidental sous contrôle marocain. Elle comptait 40 347 habitants en 2004
            </p>
            <button class="card-btn">Visit <span>&rarr;</span></button>
          </div>
        </div>
      </div>
     
    </div>
</div>
    <?php require "../footer.php" ?>
  </body>
</html>
