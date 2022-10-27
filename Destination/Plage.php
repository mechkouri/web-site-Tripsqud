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
    <title>Plage</title>
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
          <img class="card-img" src="./images/imsouan.jpg" alt="ouzoud" />
          <div class="card-content">
            <h1 class="card-header">imousane <br> Plage</h1>
            <p class="card-text">
               Situé à 82 kilomètres au nord d’Agadir, ce petit village de pêcheur,figure parmi les 27 plus belles plages au monde.selon un classement 
            </p>
            <button class="card-btn">Visit <span>&rarr;</span></button>
          </div>
        </div>
      </div>
        <div class="grid-item">
          <div class="card">
            <img class="card-img" src="./images/Lovetrotters-maroc-tanger-plages-08298.jpg" alt="ouzoud" />
            <div class="card-content">
              <h1 class="card-header">Plage Belyounch,Tanger</h1>
              <p class="card-text">
                Longtemps méconnu par les Marocains, Belyounech est un petit village de pêcheurs situé à 16km au nord de Fnideq près de  7km à l’ouest de Ceuta <br>
              </p>
              <button class="card-btn">Visit <span>&rarr;</span></button>
            </div>
          </div>
        </div>
            <div class="grid-item">
              <div class="card">
                <img class="card-img" src="./images/leguezira.jpg" alt="ouzoud" />
                <div class="card-content">
                  <h1 class="card-header">Legzira Plage</h1>
                  <p class="card-text">
                    la plage rouge, réputée pour ses falaises vertigineuses à la couleur ocre se jetant dans l’océan, et ses 4 splendides arches creusées dans la roche par les marées..
                  </p>
                  <br>
                  <button class="card-btn">Visit <span>&rarr;</span></button>
                </div>
              </div>
            </div>
            
                <div class="grid-item">
                  <div class="card">
                    <img class="card-img" src="./images/hosaima.PNG" alt="ouzoud" />
                    <div class="card-content">
                      <h1 class="card-header"> Quemado Plage, Hoceima</h1>
                      <p class="card-text">
                        Cette plage, située au pied de la falaise Quémado, dont la superficie est de 9000 m2, est incontestablement la meilleure plage de la baie et la plus fréquentée par les estivants.
                      </p>
                      <button class="card-btn">Visit <span>&rarr;</span></button>
                    </div>
                  </div>
                </div>
                
                    <div class="grid-item">
                      <div class="card">
                        <img class="card-img" src="./images/moulay bouselham.png" alt="ouzoud" />
                        <div class="card-content">
                          <h1 class="card-header">Moulay Bouselham plag</h1>
                          <p class="card-text">
                            une station balnéaire au Maroc,situé dans la région de Rabat-Salé-Kénitra à mi-chemin entre Rabat et Tanger(100 km de chaque ville)«Hawaï»et«3e piscine.
                          </p>
                          <button class="card-btn">Visit <span>&rarr;</span></button>
                        </div>
                      </div>
                    </div>
                    
                        <div class="grid-item">
                          <div class="card">
                            <img class="card-img" src="images/Lovetrotters-maroc-tanger-plages-08298.jpg" alt="ouzoud" />
                            <div class="card-content">
                              <h1 class="card-header"> Plage Eljebha, Tangie</h1>
                              <p class="card-text">
                                Les plages d'El Jebha sont en effet parmi les plus belles et les plus propres de la région. A l'est du centre-ville, au pied des montagnes du Rif occidental    
                            </p>
                              <button class="card-btn">Visit <span>&rarr;</span></button>
                            </div>
                          </div>
                        </div>
                            <div class="grid-item">
                              <div class="card">
                                <img class="card-img" src="images/ileee.png" alt="ouzoud" />
                                <div class="card-content">
                                  <h1 class="card-header"> Ile du Dragon dakhla</h1>
                                  <p class="card-text">  
                                  Dans le grand sud du Maroc, au désert du sahara avec la cote Atlantique La lagune de dakhla est un terrain de jeu de plusieurs dizaines de kilomètres, des flamands roses.  <br>  
                                </p>
                                  <button class="card-btn">Visit <span>&rarr;</span></button>
                                </div>
                              </div>
                            </div>
                            
                                <div class="grid-item">
                                  <div class="card">
                                    <img class="card-img" src="images/portorico.png" alt="ouzoud" />
                                    <div class="card-content">
                                      <h1 class="card-header"> PLAGE PORTO RICO À DAKHLA</h1>
                                      <p class="card-text">
                                        Portorico est une superbe plage à 30 minutes de l’hôtel Dakhla Atittude. Elle a été fermée pendant des années mais elle est désormais ouverte au public et c’est un lieu incroyable.   
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
