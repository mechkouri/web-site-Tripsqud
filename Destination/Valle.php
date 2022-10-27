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
    <title> Vallee </title>
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
          <img class="card-img" src="./images/paradise-valley.jpg" alt="ouzoud" />
          <div class="card-content">
            <h1 class="card-header">Paradise Vallé</h1>
            <p class="card-text">
              Paradise Valley est le nom donné à une partie de la vallée de la rivière Tamraght, dans les montagnes du Haut Atlas marocain. Elle est située à environ 20 km au nord d'Agadir.
            </p>
            
            <button class="card-btn">Visit <span>&rarr;</span></button>
          </div>
        </div>
      </div>
      <div class="grid-item">
        <div class="card">
          <img
            class="card-img"
            src="./images/ouad laou.png"
            alt="paradise"
          />
          <div class="card-content">
            <h1 class="card-header">Ouad loua</h1>
            <p class="card-text">
              Ouad Laou est une station balnéaire du Maroc. Elle est située dans la région de Tanger-Tétouan-Al Hoceïma, à 44 km de Tétouan.
            </p>
            <br><br><br>
            <button class="card-btn">Visit <span>&rarr;</span></button>
          </div>
        </div>
      </div>
      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="./images/tamda.png" alt="oum rabia" />
          <div class="card-content">
            <h1 class="card-header">Tamada valleé</h1>
            <p class="card-text">
              la lac de Tamda est le plus haut au maroc , Il se situe a 65 Km au nord de la ville D'Ouarzazate
            </p>
            <br><br><br><br><br>
            <button class="card-btn">Visit <span>&rarr;</span></button>
          </div>
        </div>
      </div>
      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="./images/marshika.png" alt="akchour" />
          <div class="card-content">
            <h1 class="card-header">Marshika</h1>
            <p class="card-text">
              La Lagune de Nador est une lagune de la côte méditerranéenne du Maroc, au Rif, située à proximité des agglomérations de Nador et de Melilla
            </p>
            <button class="card-btn">Visit <span>&rarr;</span></button>
          </div>
        </div>
      </div>
      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="./images/ouad farda.png" alt="imouzar" />
          <div class="card-content">
            <h1 class="card-header"> ouad Frada valleé</h1>
            <p class="card-text">
              Oued Farda, qui a érodé le rocher jusqu'à former cette oeuvre d'art naturelle. Il sert de pont entre les deux bords de la gorge pour les habitants et les excursionnistes.
            </p>
            <button class="card-btn">Visit <span>&rarr;</span></button>
          </div>
        </div>
      </div>
      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="./images/lac fini.png" alt="Ourika" />
          <div class="card-content">
            <h1 class="card-header">Ifni Valleé</h1>
            <p class="card-text"> 
              Le lac d'Ifni est un lac de montagne, probablement de type volcanique, située dans le Parc national de Toubkal à une altitude de 2 295 m. Situé à 70 km au sud de Marrakech,
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
