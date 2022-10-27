<?php

//faire aappel ao fichier de connexion avec la BD
require_once'DB/data.php'; 
/*le session une fonction predefinie dans le language qui fait appel a un objet $_session qui va contenir les informations sur le  clinet et aussi les msg flash ce qui va nous servir de transporter les info d'une page a l'autre 
*/

//condition d'apparence du nom et de la photo anonyme du client apres la connexion
//$_session['id'] contient le id du client connecter 
if (isset($_SESSION['auth']['id'])) {
	$req = $pdo->prepare('SELECT * FROM clients WHERE id = ? ');
	$req->execute([$_SESSION['auth']['id']]);
	$recherche = $req->fetch(PDO::FETCH_ASSOC); 
}



?>


<header>
        <div class="container">
            <input type="checkbox" name="" id="check">
            
            <div class="logo-container">
                <div class="logo">
                    <img src="<?php echo $logo; ?>">
                </div>
            </div>

            <div class="nav-btn">
                <div class="nav-links">
                    <ul>
                        <li class="nav-link" style="--i: .6s">
                            <a href="<?php echo $acceuil; ?>" class="active">Acceuil</a>
                        </li>
                        <li class="nav-link" style="--i: .85s">
                            <a href="#">Destination<i class="fas fa-caret-down"></i></a>
                            <div class="dropdown">
                                <ul>
                                    <li class="dropdown-link">
                                        <a href=" <?php echo $plage; ?>">Plage</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="<?php echo $montagne; ?>">Montagne</a>
                                    </li>
            
                                    <li class="dropdown-link">
                                        <a href="<?php echo $cascade; ?>">Cascade</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="<?php echo $valle ?>">Vallée</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="<?php echo $sahara; ?>">Sahara</a>
                                    </li>
                                    <div class="arrow"></div>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-link" style="--i: 1.1s">
                            <a href="#">Magazin<i class="fas fa-caret-down"></i></a>
                            <div class="dropdown">
                                <ul>
                                
                                    <li class="dropdown-link">
                                        <a href="#">Equipement<i class="fas fa-caret-down"></i></a>
                                        <div class="dropdown second">
                                            <ul>
                                                <li class="dropdown-link">
                                                    <a href="<?php echo $achat; ?>">Achat</a>
                                                </li>
                                                <li class="dropdown-link">
                                                    <a href="<?php echo $location; ?>">location</a>
                                                </li>
                                               
                                                <div class="arrow"></div>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="<?php echo $livres; ?>">Livres</a>
                                    </li>
                                    <div class="arrow"></div>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-link" style="--i: 1.35s">
                            <a href="<?php echo $reservation; ?>">Reservation</a>
                        </li>
                        <li class="nav-link" style="--i: 1.35s">
                            <a href="<?php echo $conciels; ?>">Conseils</a>
                        </li>
                    </ul>
                </div>
                <?php  if (isset($_SESSION['auth']['id']) ) :?> 
                    <ul>
                        <li>
                            <img style="width: 40px;
                        height: 40px;
                        border-radius: 50%;
                        margin-top: 5px;"
                        src="<?php echo $logocon; ?>">
                        </li>
                    </ul> 
                    <ul>
                        <li><p style="color: white;font-size: 18px; margin-top: 0px;margin-right:15px;"><?php echo $recherche['prenom'].' '.$recherche['nom'];   ?></p></li>
                    </ul>
                <?php endif;?> 
                <?php  if (isset($_SESSION['auth']['id']) ) :?>
                    <div class="log-sign" style="--i: 1.8s">
                        <a href="<?php echo $deconnexion; ?>" class="btn transparent">Deconnexion</a>
                    </div>
                    <?php  else: ?>

                    <div class="log-sign" style="--i: 1.8s">
                        <a href="<?php echo $connexion; ?>" class="btn transparent">Connexion</a>
                    </div>
                <?php endif;?>
                
            </div>

            <div class="hamburger-menu-container">
                <div class="hamburger-menu">
                    <div></div>
                </div>
            </div>
        </div>
    </header>