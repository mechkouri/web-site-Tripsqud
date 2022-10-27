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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Montagne</title>

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="../css/style.css">
  </head>

  <body>
  <?php require "../menu.php" ?>
  <div class="container-global">
 <div>
    <div class="grid">
      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="./images/toubkal.png" alt="Toubkal" />
          <div class="card-content">
            <h1 class="card-header">Toubkal</h1>
            <p class="card-text">
                Le point culminant du Haut Atlas ainsi que du Maroc et de l'Afrique du Nord avec 4 167 m.
            </p>
            <br><br><br><br><br><br>
            <button class="card-btn">Visit <span>&rarr;</span></button>
          </div>
        </div>
      </div>
      <div class="grid-item">
        <div class="card">
          <img
            class="card-img"
            src="./images/les-voyageuses-randonnee-maroc-cathedrale-imsfrane.jpg"
            alt="paradise"
          />
          <div class="card-content">
            <h1 class="card-header">Cathédrale Imsfrane</h1>
            <p class="card-text">
                Une Magnifique roche situe a 15 Kilomètres du village Tillougite entre Ouaouizerht et Anergui, Beni Mellal à 80 km, a 1872m d'altitude
            </p>
            <button class="card-btn">Visit <span>&rarr;</span></button>
          </div>
        </div>
      </div>
      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="./images/Les-Voyageuses-randonnee-maroc-Mgoun.jpg" alt="oum rabia" />
          <div class="card-content">
            <h1 class="card-header">Le MGoun</h1>
            <p class="card-text">
                Le djebel M goun, est une terre de prédilection pour le randonneur souhaitant faire une randonnée et trekking  M’goun.
            </p>
            <br><br><br>
            <button class="card-btn">Visit <span>&rarr;</span></button>
          </div>
        </div>
      </div>
      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="./images/Les-Voyageuses-randonnee-maroc-Djebel-Saghro-3.jpg" alt="akchour" />
          <div class="card-content">
            <h1 class="card-header"> Djbel Moussa</h1>
            <p class="card-text">
                Il se situe à l'est de Ouarzazate, à 70 km au sud du Haut Atlas central, dominant les vallées du Drâa à l'ouest et au sud, et celle du Dadès au nord.
            </p>
            <br><br><br>
            <button class="card-btn">Visit <span>&rarr;</span></button>
          </div>
        </div>
      </div>
      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="./images/amzmiz.PNG" alt="imouzar" />
          <div class="card-content">
            <h1 class="card-header"> Randonnée D'Amzmiz</h1>
            <p class="card-text">
                ranquillement, d’un village à l’autre, cette randonnée nous donnera l’opportunité de nous imprégner de cette vie rurale, rythmée par le cycle des saisons.
            </p>
            <button class="card-btn">Visit <span>&rarr;</span></button>
          </div>
        </div>
      </div>
      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="./images/Les-Voyageuses-randonnee-bouiblane.jpg" alt="Ourika" />
          <div class="card-content">
            <h1 class="card-header">Djbel Bouilbane</h1>
            <p class="card-text">
                un sommet du Moyen Atlas culminant à 3 192 mètres d'altitude près d'Immouzer Marmoucha et à 100 kilomètres environs de Taza.<br>
            </p>
            <br><br><br><br>
            <button class="card-btn">Visit <span>&rarr;</span></button>
          </div>
        </div>
      </div>
      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="./images/imgx.jpg" alt="Ourika" />
          <div class="card-content">
            <h1 class="card-header">Station Oukaimden</h1>
            <p class="card-text">
                station de ski du Maroc composée d'une vingtaine de pistes de tous niveaux. Elle se situe à environ 80 km de Marrakech dans le Haut Atlas..
            </p>
            <button class="card-btn">Visit <span>&rarr;</span></button>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
<?php require "../footer.php" ?>
  </body>
</html>
