
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
  <p class="text1" style="font-size: 30px;">1. L???int??r??t de Google Maps </p>
  <p class="text1">Un bon d??but. Entrez vos lieux de d??part et de destination, cela vous donnera une id??e du temps qu???il faudra pour faire la route. Ajustez-la, essayez diff??rentes options, ajoutez ou supprimez des lieux en fonction du temps imparti et de vos d??sirs, bien s??r. Tracez l???itin??raire principal, sans qu???il soit pour autant fig??. Laissez-vous la possibilit?? de le modifier, selon vos envies et ce que vous allez d??couvrir en chemin.

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
  <p class="text1" style="font-size: 30px;">2. Bien charger son sac ?? dos </p>
  <p class="text1">Si vous tentez l???exp??rience camping en mode sac ?? dos, il va falloir faire des choix,
     car vous ne pourrez pas tout emporter. La r??gle en mati??re de sac ?? dos : le poids apr??s chargement ne doit jamais d??passer le quart de votre propre poids. Une fois votre s??lection faite, remplissez votre sac de mani??re ?? bien r??partir le poids afin d?????viter qu???il ne vous tire vers l???arri??re. Ainsi, placez d???abord les ??l??ments les plus l??gers, comme le sac de couchage au fond de votre sac. Ensuite, mettez les choses les plus lourdes (eau, nourriture, etc.) au milieu, dans la r??gion du dos. Cela permettra de mieux vous stabiliser tout en gardant votre ??quilibre et votre libert?? de mouvement.
   Enfin, sur le dessus et le devant du sac, ins??rez les articles de poids moyen ou volumineux.</p>

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
  <p class="text1">Qui dit road-trip, dit musique, assur??ment! Et vous aurez tout le temps d???en ??couter, alors pensez ?? t??l??charger des playlists sur votre smartphone avant de partir (et n???oubliez pas votre c??ble USB). Vous pourrez ??galement mettre la radio, une fa??on 
    de d??couvrir les go??ts locaux et des titres que vous ne pourrez peut-??tre plus ??couter par la suite.</p>

  </p>
</div>
<br>

<div class="has-animation animation-rtl" data-delay="1000">
  <p class="text1" style="font-size: 30px;">4. Sortez des sentiers battus </p>
  <p class="text1">Emprunter l???autoroute est plus rapide, mais on passe ?? c??t?? de nombreux points d???int??r??t. Si possible et si vous avez le temps, prenez les routes moins fr??quent??es. Vous verrez bien plus de choses, vous rencontrerez des locaux, et vous pourrez vous aventurer en des lieux jamais vus auparavant. Pareil, n???h??sitez pas ?? faire des d??tours! Vous avez vu ce signe indiquant une ville fant??me ou un site touristique ??tonnant? Suivez-le! C???est la spontan??it?? qui doit guider votre road-trip.
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
  <p class="text1" style="font-size: 30px;">5. Emportez une glaci??re </p>
  <p class="text1">Qui sait quand vous trouverez un endroit o?? manger? Emportez une glaci??re, il en existe m??me que vous pouvez brancher dans la voiture. Mettez-y boissons et snacks pour ces moments o?? vous aurez envie de grignoter (ou ceux o?? vous serez perdu???).
  </p>
  <p class="text1" style="font-size: 30px;">6. Partir seul ou ?? plusieurs?</p>
  <p class="text1"> Les road-trips peuvent renforcer ou d??truire une amiti??. Il y a plein de c??t??s sympas ?? voyager ?? plusieurs, mais pensez tout de m??me que vous allez rester enferm??s tous ensemble dans une voiture pendant plusieurs heures d???affil??es, le pire ??tant quand le GPS ne fonctionne plus et que personne n???est capable de lire une carte. Avez-vous les m??mes int??r??ts? Si vous voulez voir des sites historiques et eux, des bars uniquement, cela pourrait s???av??rer difficile ?? g??rer.

  Partez avec une personne qui vous ressemble, qui pourra vous ??pauler ou vous compl??ter (en sachant lire une carte ou en parlant une autre langue par exemple), et quelqu???un qui pourra vous soutenir ?? tout moment durant le voyage.
</p>
  <p class="text1" style="font-size: 30px;">7. Bien s'??quiper </p>
  <p class="text1">La clef pour bien r??ussir son camping passe surtout par un ??quipement ad??quat. Alors, quoi apporter? Les incontournables : une tente, un sac de couchage, un tapis de sol, une b??che, une lampe torche ou lampe frontale, un couteau, une trousse de premiers soins. Vous pouvez ??galement penser ?? d???autres accessoires aussi utiles, mais cela d??pendra de votre mode de camping, de l???ultral??ger ?? l???ultra??quip??. N???oubliez pas que tout ce que vous prendrez devra ??tre port??, transport?? et rapport??. C???est particuli??rement vrai pour les accessoires de cuisine, qui peuvent ??tre encombrants (r??chaud ?? gaz, po??les, casseroles, glaci??res, vaisselle, etc.), mais essentiels pour cuisiner. Dormir sous la tente, c???est faire des compromis : manger froid ou chaud, privil??gier un accessoire au d??triment d???un autre. Pour s?????quiper, il n???est pas n??cessaire de tout acheter : faites le tour de la famille et de vos amis pour pouvoir emprunter quelques items parfois dispendieux. Vous pouvez aussi acheter d???occasion, mais assurez-vous que tout fonctionne correctement.
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
  <p class="text1" style="font-size: 30px;">8. Tester son mat??riel </p>
  <p class="text1">Si vous avez d??j?? camp?? auparavant, rien ne garantit que votre ??quipement est encore op??rationnel. Pour ??viter toute d??convenue au moment fatidique de fixer la tente sans piquets, de gonfler votre matelas trou?? ou de tenter d???allumer un r??chaud vide, il est essentiel de v??rifier l?????tat de son mat??riel avant de partir.</p>
  <p class="text1" style="font-size: 30px;">9. Regarder les pr??visions m??t??o</p>
  <p class="text1"> En g??n??ral, un r??flexe qu???a tout bon vacancier avant de partir en voyage. Mais encore plus important quand il s???agit d???aller bivouaquer en nature. Ainsi, vous serez ?? m??me de pr??parer vos sacs de voyage en fonction des conditions climatiques pr??vues durant votre s??jour. Il serait dommage de devoir s???acheter un imperm??able ou un veston en catastrophe. Faites un tour sur Environnement Canada, M??t??o M??dia ou Weather Channel pour avoir des informations pr??cises : radars et satellites, d??tection de la foudre, m??t??o sp??cialis??e (aviation, maritime). </p>
  <p class="text1" style="font-size: 30px;">10.O?? installer sa tente? </p>
  <p class="text1">Une fois arriv?? sur votre aire de camping, choisissez un endroit plat, sans racines et cailloux pour ??viter les maux de dos et les d??chirures de votre mat??riel, tente et matelas. Un terrain en hauteur et bien drain?? pour ??viter l???accumulation d???eau s???il pleut. De m??me, s???installer pr??s d???un cours d???eau peut s???av??rer dangereux en cas de crues subites. Lors de l???installation de votre tente, tendez suffisamment les cordes des points d???ancrage de la tente. Mal fait, le double toit entrerait en contact avec la tente et pourrait imbiber l???abri en cas d???intemp??ries. Enfin, ??tendre une b??che sous la tente est un bon moyen de la garder plus efficacement au sec. Mais faites attention ?? ce que cette b??che ne d??passe pas la base de la tente pour ??viter que l???eau ne s???y accumule! Optez pour un endroit ombrag??, pour ne pas que le chaud soleil de l???apr??s-midi fasse de votre tente un vrai sauna. Toutefois, il faut ??viter de s???installer directement sous un arbre, ce qui peut constituer un risque en cas d???orages, de foudre ou de vents forts.
  </p>
  <p class="text1" style="font-size: 30px;">11.Garder sa tente propre et confortable</p>
  <p class="text1">Votre s??jour sera d???autant plus agr??able si votre tente reste un lieu de vie agr??able, confortable pour dormir et se reposer : laissez vos souliers ?? l???ext??rieur, mais prot??gez-les de la pluie sous le double toit; gardez la ?? porte ?? ferm??e au maximum pour emp??cher les insectes ou les animaux de s???introduire dans votre tente; rangez vos affaires personnelles au milieu de la tente, et non sur les c??t??s, afin qu???elles ne soient pas humidifi??es par la pluie ou la ros??e matinale; nettoyez de temps en temps votre sol de tente pour enlever les salet??s accumul??es.</p>
  <p class="text1" style="font-size: 30px;">12.Comment allumer un feu de camp? </p>
  <p class="text1">Avant tout, assurez-vous que vous ??tes autoris?? ?? le faire ou m??me ?? ramasser du bois dans les environs. Premi??re ??tape donc, nettoyez l???aire en enlevant les mati??res combustibles dans un rayon d???un m??tre autour du feu. D??limitez la zone de foyer avec des pierres, puis placez-y une mati??re inflammable : brindilles, papier journal ou ??l??ments v??g??taux secs (non, l???essence n???est pas recommand??e!). Ajoutez autour et par dessus du bois d???allumage, en g??n??ral des petits bouts de bois tr??s sec, pour faire partir le feu. Enfin, ?? mesure que le feu prend de l???ampleur, ajoutez progressivement des buches plus grosses. Le feu a besoin d???oxyg??ne, veillez ?? ce que l???air circule bien entre les rondins. Ne quittez pas votre campement sans ??teindre correctement le feu. Arrosez-le pour bien vous en </p>


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