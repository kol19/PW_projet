<?php
/**
 *
 * @package  Proyecto web
 * @authors  Diana Silva - Maykol Hernandez
 * @license  - License
 * @link     -
 *
 */


// load up header file
require_once 'mod/header.php';
require_once 'mod/menu.php';
// include visit counter
//require_once 'mod/visitCounter.php';
// load up footer file

?>
<centre>

</centre>

<h1 id="haut">BEPBEP, c'est facile</h1>

<div id="menu">
<ul>
	<li>Inscrivez-vous/Connectez vous </li>
	<li>Demandez le service en ligne !</li>
	<li>C'est parti!</li>

</ul>
</div>

<div id="contenu">
	<p>
     <br> <br>
    Processus
    <br>
    Devenez membre ou connectez vous sur www.bepbep.com,saisissez les informations li&#233;es &#224; votre commande ainsi que l'heure, l'adresse,le budget, etc .
    Finalement un particulier est inform&#233; et vient vous aider
	</p>

	<p class="haut">
	<a href="#haut">Haut de page</a>
	</p>
</div>





<A HREF="https://www.facebook.com/" onMouseOver="lightUp();" onMouseOut="dimDown();">
<IMG SRC="images/facebookOff.png" name="image1" id="image1" width=50 height=50 border=0  /></A>

<A HREF="https://www.twitter.com/" onMouseOver="lightUp2();" onMouseOut="dimDown2();">
<IMG SRC="images/TwitterOff.png" name="image2" id="image2" width=50 height=50 border=0  /></A>

<A HREF="https://www.instagram.com/" onMouseOver="lightUp3();" onMouseOut="dimDown3();">
<IMG SRC="images/InstagramOff.png" name="image3" id="image3" width=50 height=50 border=0  /></A>

<SCRIPT TYPE="text/Javascript">
function lightUp() {
document.getElementById('image1').src="images/facebookIn.png";
};
function dimDown() {
document.getElementById('image1').src="images/facebookOff.png";
};

function lightUp2() {
document.getElementById('image2').src="images/twitterIn.png";
};
function dimDown2() {
document.getElementById('image2').src="images/twitterOff.png";
};

function lightUp3() {
document.getElementById('image3').src="images/InstagramIn.png";
};
function dimDown3() {
document.getElementById('image3').src="images/InstagramOff.png";
};
</SCRIPT>
<?php
require_once 'mod/footer.php';

// load up functions file to test connection to DB
//require_once 'libraries/functions.php';
  //      $connect = new Tools();
    //    $result = $connect->consulta();





?>
