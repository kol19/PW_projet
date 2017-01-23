<?php
/**
 *
 * @package  Proyecto web
 * @authors  Diana Silva - Maykol Hernandez
 * @license  - License
 * @link     -
 *
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
 <head>
     <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <meta name="keywords" content="livraison, service, aide, achat, chien, jouer, bepbep, miage"/>
     <link href="css/bootstrap.min.css" rel="stylesheet" media="screen"/>
     <link href="css/3.css" rel="stylesheet" media="screen"/>
     <link href="css/cssID.css" rel="stylesheet" media="screen"/>
     <title>BepBep</title>
     <link rel="icon" href="images/favicon.ico" />
 </head>

 <body>

<?php
require_once 'mod/menu.php';
?>

<h2>&nbsp;</h2>

	<img class="mySlides" alt="Slide" style="width:55%" src="http://kitbyklo.com/wp-content/uploads/2016/01/Bien-travailler-chez-soi-2.jpg"/>
	<img class="mySlides" alt="Slide" style="width:55%" src="http://cdn.mos.bikeradar.imdserve.com/images/bikes-and-gear/accessories/1244455151377-gpjrai2miuwc-1200-80.jpg"/>
	<img class="mySlides" alt="Slide" style="width:55%" src="http://cdn.ndtv.com/tech/images/gadgets/controller_video_gaming_pixabay.jpg?output-quality=80&output-format=jpg"/>
  <img class="mySlides" alt="Slide" style="width:55%" src="http://www.sbs.com.au/news/sites/sbs.com.au.news/files/images/j/b/JBOB_dogwalk_800x600.jpg"/>
	<img class="mySlides" alt="Slide" style="width:55%" src="https://comptoirdesproducteurs-asper.netdna-ssl.com/1036-lightbox/panier-pour-2-pers.jpg"/>
  <img class="mySlides" alt="Slide" style="width:55%" src="http://busseralbert.fr/wp-content/uploads/2014/11/boulangerie-1.jpg"/>



<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3000);
}
</script>


<h1 id="haut">BEPBEP, c'est facile</h1>

<div id="menu1">
<ul>
	<li>Inscrivez-vous/Connectez vous </li>
	<li>Demandez le service en ligne !</li>
	<li>C'est parti!</li>
</ul>
</div>

<div id="contenu">
	<p>
     <br><br>
    Processus
    <br>
    Devenez membre ou connectez vous sur www.bepbep.com, saisissez les
		informations li&#233;es &#224; votre commande ainsi que l'heure, l'adresse,le budget, etc.
    Finalement un particulier est inform&#233; et vient vous aider.
	</p>
</div>

<footer>
   <h5 class="footer">Auteurs: Diana Silva, Maykol Hernandez</h5>
   <h5 class="footer">While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 2016 by BepBep Data. All Rights Reserved.</h5>
   <h5 class="footer">Contact information: <a href="mailto:kol_19@yahoo.com">@bepbep_support</a>.</h5>
   <h5 class="footer">Publié le 8 janvier 2017</h5>
</footer>

  <a href="https://www.instagram.com/" onMouseOver="lightUp3();" onMouseOut="dimDown3();">
  <img src="images/InstagramOff.png" alt="Social Network" class="socialnetwork" id="image3"/></a>

	<a href="https://www.twitter.com/" onMouseOver="lightUp2();" onMouseOut="dimDown2();">
	<img src="images/TwitterOff.png" alt="Social Network" class="socialnetwork" id="image2"/></a>

  <a href="https://www.facebook.com/" onMouseOver="lightUp();" onMouseOut="dimDown();">
	<img src="images/facebookOff.png" alt="Social Network" class="socialnetwork" id="image1"/></a>


<script type="text/javascript">
	function lightUp() {
	document.getElementById('image1').src="images/facebookIn.png";
	};
	function dimDown() {
	document.getElementById('image1').src="images/facebookOff.png";
	};

	function lightUp2() {
	document.getElementById('image2').src="images/TwitterIn.png";
	};
	function dimDown2() {
	document.getElementById('image2').src="images/TwitterOff.png";
	};

	function lightUp3() {
	document.getElementById('image3').src="images/InstagramIn.png";
	};
	function dimDown3() {
	document.getElementById('image3').src="images/InstagramOff.png";
	};
</script>
<script type="text/javascript" src="js/validationformulaires.js"></script>

</body>
</html>
