<?php
/**
 *
 * @package  Projet PW - Université Rennes 1
 * @authors  Diana Silva - Maykol Hernandez
 * @link     - https://bepbep.herokuapp.com/
 *
 */

 // Ce fichier contient le formulaire du login

if (!empty($_GET['msjctrl'])) {
    if ($_GET['msjctrl'] == 1) {
      ?> <script>alert("Veuillez saisir un login et un mot de passe") </script><?php
        //echo "Veuillez saisir un login et un mot de passe<br><br>";
    } if ($_GET['msjctrl'] == 2) {
      ?> <script>alert("Erreur de login/mot de passe") </script><?php
        //echo "Erreur de login/mot de passe<br><br>";
    } if ($_GET['msjctrl'] == 3) {
      ?> <script>alert("Vous avez bien été déconnecté du service") </script><?php
        //echo "Vous avez bien été déconnecté du service<br><br>";
    }
}
?>
<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Se connecter</b> <span class="caret"></span></a>
<ul id="login-dp" class="dropdown-menu">
<li>
 <div class="row">
    <div class="col-md-12">

       <form class="form" role="form" method="post" action = "libraries/validation.php" name="formulaire" accept-charset="UTF-8" id="login-nav" onsubmit="return validar()">



<div class="form-group">
   <label class="sr-only" for="exampleInputEmail2">Email address</label>
   <input type="text" name="user" class="form-control" id="exampleInputEmail2" value="" placeholder="Email address" required>
</div>
<div class="form-group">
   <label class="sr-only" for="exampleInputPassword2">Password</label>
   <input type="password" name = "password" class="form-control" id="exampleInputPassword2" placeholder="Password" value="" required>

</div>
<div class="form-group">
   <button type="submit" class="btn btn-primary btn-block">Connexion</button>
</div>

</form>
</div>
<div class="bottom text-center">
Devenir membre: <a href="libraries/signin.php"><b>S'incrire</b></a>
</div>
</div>
