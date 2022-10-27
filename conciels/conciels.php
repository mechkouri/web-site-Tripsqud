
<?php 
$logocon = '../images/guest.png';
$logo = '../images/logotrip1.png';
$acceuil= '../index.php';
$plage = '../Destination/Plage.php';
$montagne = '../Destination/Montagne.php';
$cascade = '../Destination/cascade.php';
$valle = '../Destination/Valle.php';
$sahara = '../Destination/Sahara.php';
$achat = '#';
$location = '#';
$livres = '#';
$reservation = '../reservation/form.php';
$conciels = '#';
$deconnexion = '../DB/deconnexion.php';
$connexion = '../SUBSCRIBE/connexion.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>conciels</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="../css/style.css">

	<style>
	.conc {
  font-family: "Roboto Condensed", sans-serif;

  text-align: center;
}
div {
  

}
.bigger {
  margin: 0;
  font-size: 40px;
  font-weight: 800;
  padding: 20px;
  text-transform: uppercase;
  color: #0d0b8a;
  display: inline-block;
  position: relative;
}
.text1 {
  max-width: 900px;
  width: 100%;
  line-height: 24px;
  text-align: justify;
  color: #404040;
  padding: 20px;
	
}
.text1.txt-center {
  text-align: center;
}
.text1 a {
  color: #04c5f5;
}
.has-animation {
  position: relative;
}
.has-animation p, .has-animation img {
  opacity: 0;
}
.has-animation.animate-in p, .has-animation.animate-in img {
  animation: textHidden 0.1s 1.1s forwards;
}
.has-animation.animate-in:before, .has-animation.animate-in:after {
  content: '';
  position: absolute;
  top: 0;
  right: 0;
  height: 100%;
  z-index: 10;
}
.has-animation.animate-in:before {
  background-color: #04c5f5;
}
.has-animation.animate-in:after {
  background-color: #20447c;
  animation-delay: 0.5s;
}
.has-animation.animation-ltr.animate-in:before {
  animation: revealLTR 1.8s ease;
}
.has-animation.animation-ltr.animate-in:after {
  animation: revealLTR 1s 0.6s ease;
}
.has-animation.animation-rtl.animate-in:before {
  animation: revealRTL 1.8s ease;
}
.has-animation.animation-rtl.animate-in:after {
  animation: revealRTL 1s 0.6s ease;
}
@keyframes revealRTL {
  0% {
    width: 0;
    right: 0;
  }
  65% {
    width: 100%;
    right: 0;
  }
  100% {
    width: 0;
    right: 100%;
  }
}
@keyframes revealLTR {
  0% {
    width: 0;
    left: 0;
  }
  65% {
    width: 100%;
    left: 0;
  }
  100% {
    width: 0;
    left: 100%;
  }
}
@keyframes textHidden {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

	</style>
</head>
<body>
<?php require "../menu.php" ?>
	<br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <section class="conc">

<div class="has-animation animation-ltr" data-delay="10">
  <p class="bigger">Conseils pour un parfait road trip </p>
</div>
<br>

 
<br>

<div class="has-animation animation-rtl" data-delay="1000">
  <p class="text1" style="font-size: 30px;">1. L’intérêt de Google Maps </p>
  <p class="text1">Un bon début. Entrez vos lieux de départ et de destination, cela vous donnera une idée du temps qu’il faudra pour faire la route. Ajustez-la, essayez différentes options, ajoutez ou supprimez des lieux en fonction du temps imparti et de vos désirs, bien sûr. Tracez l’itinéraire principal, sans qu’il soit pour autant figé. Laissez-vous la possibilité de le modifier, selon vos envies et ce que vous allez découvrir en chemin.

  </p>
</div>
<br>
 
<br>
<br>
<div class="has-animation animation-rtl" data-delay="2000">
  <img src="imgg1.jpg" width="900" />
</div>

<br>

 
<br>


<div class="has-animation animation-rtl" data-delay="1000">
  <p class="text1" style="font-size: 30px;">2. Bien charger son sac à dos </p>
  <p class="text1">Si vous tentez l’expérience camping en mode sac à dos, il va falloir faire des choix,
     car vous ne pourrez pas tout emporter. La règle en matière de sac à dos : le poids après chargement ne doit jamais dépasser le quart de votre propre poids. Une fois votre sélection faite, remplissez votre sac de manière à bien répartir le poids afin d’éviter qu’il ne vous tire vers l’arrière. Ainsi, placez d’abord les éléments les plus légers, comme le sac de couchage au fond de votre sac. Ensuite, mettez les choses les plus lourdes (eau, nourriture, etc.) au milieu, dans la région du dos. Cela permettra de mieux vous stabiliser tout en gardant votre équilibre et votre liberté de mouvement.
   Enfin, sur le dessus et le devant du sac, insérez les articles de poids moyen ou volumineux.</p>

  </p>
</div>
<br>
 
<br>
<br>
<div class="has-animation animation-rtl" data-delay="2000">
  <img src="imgg2.jpg" width="900" />
</div>

<br>


<br>

<div class="has-animation animation-rtl" data-delay="1000">
  <p class="text1" style="font-size: 30px;">3. De la (bonne) musique </p>
  <p class="text1">Qui dit road-trip, dit musique, assurément! Et vous aurez tout le temps d’en écouter, alors pensez à télécharger des playlists sur votre smartphone avant de partir (et n’oubliez pas votre câble USB). Vous pourrez également mettre la radio, une façon 
    de découvrir les goûts locaux et des titres que vous ne pourrez peut-être plus écouter par la suite.</p>

  </p>
</div>
<br>

<div class="has-animation animation-rtl" data-delay="1000">
  <p class="text1" style="font-size: 30px;">4. Sortez des sentiers battus </p>
  <p class="text1">Emprunter l’autoroute est plus rapide, mais on passe à côté de nombreux points d’intérêt. Si possible et si vous avez le temps, prenez les routes moins fréquentées. Vous verrez bien plus de choses, vous rencontrerez des locaux, et vous pourrez vous aventurer en des lieux jamais vus auparavant. Pareil, n’hésitez pas à faire des détours! Vous avez vu ce signe indiquant une ville fantôme ou un site touristique étonnant? Suivez-le! C’est la spontanéité qui doit guider votre road-trip.
  </p>

  </p>
</div>
<br>
 
<br>
<br>
<div class="has-animation animation-rtl" data-delay="2000">
  <img src="imgg3.jpg" width="900" />
</div>

<br>


<br>
<div class="has-animation animation-rtl" data-delay="1000">
  <p class="text1" style="font-size: 30px;">5. Emportez une glacière </p>
  <p class="text1">Qui sait quand vous trouverez un endroit où manger? Emportez une glacière, il en existe même que vous pouvez brancher dans la voiture. Mettez-y boissons et snacks pour ces moments où vous aurez envie de grignoter (ou ceux où vous serez perdu…).
  </p>
  <p class="text1" style="font-size: 30px;">6. Partir seul ou à plusieurs?</p>
  <p class="text1"> Les road-trips peuvent renforcer ou détruire une amitié. Il y a plein de côtés sympas à voyager à plusieurs, mais pensez tout de même que vous allez rester enfermés tous ensemble dans une voiture pendant plusieurs heures d’affilées, le pire étant quand le GPS ne fonctionne plus et que personne n’est capable de lire une carte. Avez-vous les mêmes intérêts? Si vous voulez voir des sites historiques et eux, des bars uniquement, cela pourrait s’avérer difficile à gérer.

  Partez avec une personne qui vous ressemble, qui pourra vous épauler ou vous compléter (en sachant lire une carte ou en parlant une autre langue par exemple), et quelqu’un qui pourra vous soutenir à tout moment durant le voyage.
</p>
  <p class="text1" style="font-size: 30px;">7. Bien s'équiper </p>
  <p class="text1">La clef pour bien réussir son camping passe surtout par un équipement adéquat. Alors, quoi apporter? Les incontournables : une tente, un sac de couchage, un tapis de sol, une bâche, une lampe torche ou lampe frontale, un couteau, une trousse de premiers soins. Vous pouvez également penser à d’autres accessoires aussi utiles, mais cela dépendra de votre mode de camping, de l’ultraléger à l’ultraéquipé. N’oubliez pas que tout ce que vous prendrez devra être porté, transporté et rapporté. C’est particulièrement vrai pour les accessoires de cuisine, qui peuvent être encombrants (réchaud à gaz, poêles, casseroles, glacières, vaisselle, etc.), mais essentiels pour cuisiner. Dormir sous la tente, c’est faire des compromis : manger froid ou chaud, privilégier un accessoire au détriment d’un autre. Pour s’équiper, il n’est pas nécessaire de tout acheter : faites le tour de la famille et de vos amis pour pouvoir emprunter quelques items parfois dispendieux. Vous pouvez aussi acheter d’occasion, mais assurez-vous que tout fonctionne correctement.
  </p>


  </p>
</div>
<br>
 
<br>
<br>
<div class="has-animation animation-rtl" data-delay="2000">
  <img src="imgg4.jpg" width="900" />
</div>

<br>


<br>
<div class="has-animation animation-rtl" data-delay="1000">
  <p class="text1" style="font-size: 30px;">8. Tester son matériel </p>
  <p class="text1">Si vous avez déjà campé auparavant, rien ne garantit que votre équipement est encore opérationnel. Pour éviter toute déconvenue au moment fatidique de fixer la tente sans piquets, de gonfler votre matelas troué ou de tenter d’allumer un réchaud vide, il est essentiel de vérifier l’état de son matériel avant de partir.</p>
  <p class="text1" style="font-size: 30px;">9. Regarder les prévisions météo</p>
  <p class="text1"> En général, un réflexe qu’a tout bon vacancier avant de partir en voyage. Mais encore plus important quand il s’agit d’aller bivouaquer en nature. Ainsi, vous serez à même de préparer vos sacs de voyage en fonction des conditions climatiques prévues durant votre séjour. Il serait dommage de devoir s’acheter un imperméable ou un veston en catastrophe. Faites un tour sur Environnement Canada, Météo Média ou Weather Channel pour avoir des informations précises : radars et satellites, détection de la foudre, météo spécialisée (aviation, maritime). </p>
  <p class="text1" style="font-size: 30px;">10.Où installer sa tente? </p>
  <p class="text1">Une fois arrivé sur votre aire de camping, choisissez un endroit plat, sans racines et cailloux pour éviter les maux de dos et les déchirures de votre matériel, tente et matelas. Un terrain en hauteur et bien drainé pour éviter l’accumulation d’eau s’il pleut. De même, s’installer près d’un cours d’eau peut s’avérer dangereux en cas de crues subites. Lors de l’installation de votre tente, tendez suffisamment les cordes des points d’ancrage de la tente. Mal fait, le double toit entrerait en contact avec la tente et pourrait imbiber l’abri en cas d’intempéries. Enfin, étendre une bâche sous la tente est un bon moyen de la garder plus efficacement au sec. Mais faites attention à ce que cette bâche ne dépasse pas la base de la tente pour éviter que l’eau ne s’y accumule! Optez pour un endroit ombragé, pour ne pas que le chaud soleil de l’après-midi fasse de votre tente un vrai sauna. Toutefois, il faut éviter de s’installer directement sous un arbre, ce qui peut constituer un risque en cas d’orages, de foudre ou de vents forts.
  </p>
  <p class="text1" style="font-size: 30px;">11.Garder sa tente propre et confortable</p>
  <p class="text1">Votre séjour sera d’autant plus agréable si votre tente reste un lieu de vie agréable, confortable pour dormir et se reposer : laissez vos souliers à l’extérieur, mais protégez-les de la pluie sous le double toit; gardez la « porte » fermée au maximum pour empêcher les insectes ou les animaux de s’introduire dans votre tente; rangez vos affaires personnelles au milieu de la tente, et non sur les côtés, afin qu’elles ne soient pas humidifiées par la pluie ou la rosée matinale; nettoyez de temps en temps votre sol de tente pour enlever les saletés accumulées.</p>
  <p class="text1" style="font-size: 30px;">12.Comment allumer un feu de camp? </p>
  <p class="text1">Avant tout, assurez-vous que vous êtes autorisé à le faire ou même à ramasser du bois dans les environs. Première étape donc, nettoyez l’aire en enlevant les matières combustibles dans un rayon d’un mètre autour du feu. Délimitez la zone de foyer avec des pierres, puis placez-y une matière inflammable : brindilles, papier journal ou éléments végétaux secs (non, l’essence n’est pas recommandée!). Ajoutez autour et par dessus du bois d’allumage, en général des petits bouts de bois très sec, pour faire partir le feu. Enfin, à mesure que le feu prend de l’ampleur, ajoutez progressivement des buches plus grosses. Le feu a besoin d’oxygène, veillez à ce que l’air circule bien entre les rondins. Ne quittez pas votre campement sans éteindre correctement le feu. Arrosez-le pour bien vous en </p>


  </p>
</div>
<br>
 
<br>
<br>
<div class="has-animation animation-rtl" data-delay="2000">
  <img src="imgg55.jpg" width="900" />
</div>

<br>


<br>
</section>
<?php require "../footer.php"?>



<script>
	
	$(document).ready(function() {
  $('.has-animation').each(function(index) {
    $(this).delay($(this).data('delay')).queue(function(){
      $(this).addClass('animate-in');
    });
  });
});

</script>
</body>
</html>