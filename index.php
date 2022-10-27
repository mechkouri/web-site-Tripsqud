
<?php 
session_start();
$logo = 'images/logotrip1.png';
$logocon = 'images/guest.png';
$acceuil= '#';
$plage = 'Destination/Plage.php';
$montagne = 'Destination/Montagne.php';
$cascade = 'Destination/cascade.php';
$valle = 'Destination/Valle.php';
$sahara = 'Destination/Sahara.php';
$achat = '#';
$location = '#';
$livres = '#';
$reservation = 'reservation/form.php';
$conciels = 'conciels/conciels.php';
$deconnexion = 'DB/deconnexion.php';
$connexion = 'SUBSCRIBE/connexion.php';

?>


 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <title>tripsquad</title>
</head>

<body>

<?php require "menu.php" ?>
    <section class="home" id="home">

        <div class="video">
            <video src="images/vedio.mp4" loop muted autoplay></video>
        </div>
        
        <div class="content">
            <h1>explore new places, <br> adventure awaits.</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod necessitatibus sunt atque consequuntur quam veniam magnam consectetur, odio velit alias!</p>
        </div>
        
        <div class="form-container">
            <form action="">
        
                <h3>recherchez votre destination</h3>
        
                <span>location</span>
                <input type="text" placeholder="lieu que vous souhaitez visiter">
        
                <span>membres invités</span>
                <input type="number" placeholder="nombre de personnes">
        
                <span>arrivée</span>
                <input type="date">
        
                <span>départ</span>
                <input type="date">
        
                <input type="submit" value="rechercher">
        
            </form>
        </div>
        
        </section>





        <section class="feature" id="feature">
            <h1 class="heading"><span>v</span>oyage <span>O</span>rganisé</h1>
            
            <div class="card-container">
            
                <div class="card">
                    <span class="discount">-35%</span>
                    <img src="images/card1.jpg" alt="">
                    <div class="content">
                        <h3 class="title">Cathédrale</h3>
                        <p>découvrez La cathédrale d'Imsfrane  le plus e magnifique rocher qui culmine à 1872 m d'altitude. La cathédrale est située dans l'Atlas, en plein milieu de superbes forêts
. programme

Au départ de Azilal le:10/06/2021

 Et la date d’arrivée le:15/06/2021</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="#"><button class="btn">résever</button></a>
                    </div>
                </div>
            
                <div class="card">
                    <img src="images/card2.jpg" alt="">
                    <div class="content">
                        <h3 class="title">Aglmam azegza</h3>
                        <p>Embraquer un séjour le  lac naturel  Aguelmam Azegza localisé à l’est de la ville de Khénifra au Maroc, à une vingtaine de kilomètres à vol d'oiseau. Situé dans la grande cédraie d'Ajdir n-Izaïane, il fait partie du parc national de Khénifra.

programme

Au départ de Marrakech le:20/06/2021

 Et la date d’arrivée le:30/06/2021</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="#"><button class="btn">résever</button></a>
                    </div>
                </div>
            
                <div class="card">
                    <span class="discount">-45%</span>
                    <img src="images/card3.jpg" alt="">
                    <div class="content">
                        <h3 class="title">Legzira</h3>
                        <p>Partez à la découverte des plus belles plages du Maroc, Legzira ,Sous le signe du soleil et de la mer

Avec un vrai voyage au cœur des amandiers.

programme

Au départ de Marrakech le:20/06/2021

 Et la date d’arrivée le:30/06/2021

L'offre Comprend :
Transport Touristique Climatisé

 Et d’assistant de voyage.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="#"><button class="btn">résever</button></a>
                    </div>
                </div>
            
            </div>
            
            </section>



            

<section id="about" class="about">

    <h1 class="heading"><span>N</span>OS  <span>S</span>ERVICES</h1>
    
    <div class="row">
    
        <div class="image">
            <img src="images/about-img.jpg" alt="">
        </div>
    
        <div class="content">
            <h3>Bienvenue sur Trip-squad!</h3>
            <p> la ressource n ° 1 pour 
                tout qui s’impose sur trois caractéristiques: la fiabilité, 
                le service client et l'exclusivité, qui met en place un programme 
                spécial pour organiser votre futur voyage en toute sérénité et sécurité 
                avec des bons prix. Il vous aide également à acheter et louer vos besoins de tous les matériaux 
                et vêtements et livres pour l'aventure et la découverte des plus beaux endroits du Maroc.</p><br>
            <p>De plus, nous avons créé un groupe

D’assistants et de guides pour vous aider et vous donner des conseils à votre trajectoire.</p>
            <a href="#"><button class="btn btn1">read more</button></a>
            <a href="#"><button class="btn">get started</button></a>
        </div>
    
    </div>
    
    </section>




    <section id="gallery" class="gallery">

        <h1 class="heading"><span>g</span>alerie</h1>
        
        <div class="box-container">
        
            <div class="box">
                <img src="images/img1.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-search"></a>
                </div>
            </div>
        
            <div class="box">
                <img src="images/img2.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-search"></a>
                </div>
            </div>
        
            <div class="box">
                <img src="images/img3.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-search"></a>
                </div>
            </div>
        
            <div class="box">
                <img src="images/img4.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-search"></a>
                </div>
            </div>
        
            <div class="box">
                <img src="images/img5.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-search"></a>
                </div>
            </div>
        
            <div class="box">
                <img src="images/img6.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-search"></a>
                </div>
            </div>
        
        </div>
        
        </section>
        
        


        <section id="review" class="review">

            <h1 class="heading"><span>A</span>SSISTANT <span>D</span>E <span>V</span>OYAGE
            </br> <p style="font-size: 10px; margin-left: 25%; margin-right: 25%;">Notre service coopére avec des assistants de voyage bien experimentés et ayant des connaissances de la region choisie qui vous offrent toutes les aides possibles au niveau du trajet , camping et sécurité</p></h1>
            
            
            <div class="box-container">
            
                <div class="box">
                    <div class="image">
                        <img src="images/pic1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Youssef</h3>
                        <p>Assistant de voyage plage et cascade.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
            
                <div class="box">
                    <div class="image">
                        <img src="images/pic2.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Mohamed</h3>
                        <p>Assistant De Voyage
                            Montagne Et Sahara</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
            
                <div class="box">
                    <div class="image">
                        <img src="images/pic3.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Kamal</h3>
                        <p>Assistant De Voyage
                            Montagne Et Cascade</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
            
            </div>
            
            </section>
            <section id="contact" class="contact">

<h1 class="heading"><span>c</span>ontactez-<span>n</span>ous</h1>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3133.3004205461657!2d-8.05230641461386!3d31.628148129768004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafe94baf4289e1%3A0x8e2d6d439918eb19!2sEcole%20Normale%20Superieure%20Marrakech!5e0!3m2!1sfr!2sma!4v1618766746186!5m2!1sfr!2sma"  width="100%" height="300" frameborder="0" style="border:0; outline:none;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


<div class="row">
<?php


if(isset($_POST['contact']))
{

    if(!empty($_POST['emailC'])  AND !empty($_POST['messageC']))
    {


        $header="MIME-Version: 1.0\r\n";
        $header.='Content-Type:text/html; charset="UTF-8"'."\n";
        $header.='Content-Transfer-Encoding: 8bit';
        $message='
        <html>
        <style type="text/css">
        td{padding-bottom: 10%;}
        .all{background-color: #303036;
            color:#d3d3d3;
            font-family: Verdana,Geneva,sans-serif;

        }
        </style>

        <body>

        <div align="center">
        <div border="0" style="margin:0;padding:0" >

        <table border="0" cellpadding="0" cellspacing="0" width="600" style="border:1px ;background-color:#303036;width:100%">
        <tr>
        <td style="margin:0;padding:10px 40px;background:#303036;">
        <center><strong style="color:#d3d3d3;text-transform:uppercase;font-family: cursive;letter-spacing: 9px;">
        <span style="color:#05f7ff">TRIP2</span>MOROCCO</strong></center>
        </td>
        </tr>
        </table>
        </div>

        <div class="all">
        <br><br><br>
        <br>			
        <table>

        <tr>
        <td><strong style="color:#05f7ff;text-decoration:none;letter-spacing:3px">From:</strong></td>
        <td><strong><span style="font-size:13px;color:#d3d3d3">'.$_POST['emailC'].'</span></strong></td>
        </tr>
        </table>
        <br>
        <strong style="color:#05f7ff;text-decoration:none;letter-spacing:3px;max-width:50%;">Message:</strong><br><br>
        <div style="max-width: 50%;font-size:13px;">'.$_POST['messageC'].'</div>
        <br><br><br>
        </div></div>


        </body>
        </html>
        ';



        mail('trip2morocco@gmail.com','CONTACT - TRIP2MOROCCO', $message, $header);
        $_SESSION['msg_contact']['success']="Votre message a été Envoyer";
    }
    else
    {
        $_SESSION['msg_contact']['danger']="Vous n'avez pas rempli le formulaire de contact correctement";

    }	    

}

?>

<div class="contact-info">

    <div class="box">
        <h3> <i class="fas fa-home"></i> address </h3>
        <p>marrakech, <br>
        massira 1, <br>
        4000.</p>
    </div>

    <div class="box">
        <h3> <i class="fas fa-envelope"></i> e-mail </h3>
        <p>tripsquad.officiel@gmail.com</p>
    </div>

    <div class="box">
        <h3> <i class="fas fa-phone"></i> phone </h3>
        <p>+212 707 537 930</p>
    </div>

</div>

<div class="contact-form-container">
<div class="msgflash">

								<!--Message flash pour l'email de contact-->

								<?php if (isset($_SESSION['msg_contact'])): ?>
									<?php foreach ($_SESSION['msg_contact'] as $type => $message): ?>

										<div class="alert alert-<?=$type;?>" style="width:76%;"><li><?=$message; ?> </li></div>

									<?php endforeach; ?>
									<?php unset($_SESSION['msg_contact']); ?>
								<?php endif;?>
                               </div>

    <form action=""  method="POST">

        <h3>Entrer en Contact</h3>

        <div class="inputBox">
            <input type="text" placeholder="nom et prénom">
            <input type="email" name="emailC" placeholder="e-mail">
        </div>

        <textarea name="messageC" id="" cols="30" rows="10" placeholder="message"></textarea>

        <input type="submit" value="message" name="contact">

    </form>

</div>

</div>

</section>




<?php require "footer.php" ?>


            




    





    <!-- jquery cdn link  -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



</body>

</html>